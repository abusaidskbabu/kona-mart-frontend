<?php

namespace App\Http\Controllers;

use App\Add;
use App\Category;
use App\District;
use App\HomSection;
use App\Order;
use App\OrderDetails;
use App\Product;
use App\ProductVariant;
use App\Slider;
use App\ThumbnailSlider;
use App\Upazila;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;
use Facade\FlareClient\View;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::all();
        $ads = Add::first();
        $second_banner = ThumbnailSlider::first();
        $featured_products = Product::where('featured', 1)->where('is_active', 1)->get();

        $sections = HomSection::where('status', 1)->orderBy('order_number', 'desc')->get();
        foreach ($sections as $row) {
            $row->all_products = Product::whereIn('id', explode(',', $row->products))->get();
        }

        return view('pages.home', compact('sliders', 'ads', 'featured_products', 'second_banner', 'sections'));
    }

    public function showCartModal(Request $request){
        $product = Product::find($request->id);
        if($product){
            return view('pages.product.add-to-cart-modal', compact('product'));
        }
    }

    public function variantPrice(Request $request){
        $product = Product::find($request->id);
        $variant = ProductVariant::where('product_id', $request->id)->where('id', $request->attribute_id_1)->first();
        $price = $product->price + ($variant->additional_price ?? 0);
        $variantData = [
            'price' => '৳'.number_format($price, 0, '.', ','),
            'quantity' => $variant->qty ?? 0,
            'digital' => 0
        ];

        // Return the JSON response
        return response()->json($variantData);
    }

    public function addToCart(Request $request){
        $productId = $request->id;
        $quantity = $request->quantity;
        $attribute = $request->attribute_id_1 ?? '';
        $product = Product::find($productId);
        $variant = ProductVariant::find($attribute) ?? [];
        $price = $product->price + ($variant->additional_price ?? 0);
        if ($request->session()->has('cartlist')) {
            $cartlist = $request->session()->get('cartlist');

            if (isset($cartlist[$productId])) {
                $message = 'Item is already in your cart!';
                return view('pages.cart.added-to-cart', compact('product', 'message', 'price'));
            }

            $cartlist[$productId] = [
                'quantity' => $quantity,
                'price' => $price,
                'varient' => $variant->variant->name ?? ''
            ];
        } else {
            $cartlist = [
                $productId => [
                    'quantity' => $quantity,
                    'price' => $price,
                    'variant' =>  $variant->variant->name ?? ''
                ]
            ];
        }

        $request->session()->put('cartlist', $cartlist);

        // Calculate the updated cart count
        $cartCount = count($cartlist);

        $message = 'Item added to cart!';
        return view('pages.cart.added-to-cart', compact('product', 'message', 'price'));
    }

    public function getCart(Request $request){
        $cartlist = $request->session()->get('cartlist', []);
        $productIds = array_keys($cartlist);
        $products = Product::whereIn('id', $productIds)->get();

        $cartlistItems = [];
        $subtotal = 0;
        $qty = 0;
        foreach ($products as $product) {
            $productId = $product->id;
            if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                $quantity = $cartlist[$productId]['quantity'];
                $variant = $cartlist[$productId]['variant'] ?? '';
                $price = $cartlist[$productId]['price'];
                $subtotal = $subtotal + ($price * $quantity);
                $cartlistItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price
                ];
                $qty++;
            }
        }
        $carts = $cartlistItems;
        $html = view('pages.cart.nav-cart', compact('carts', 'subtotal'))->render(); // Render the HTML

        $response = [
            'cart' => $html,
            'qty' => $qty // Total quantity
        ];
        return response()->json($response);
    }

    public function removeCart(Request $request){
        $productId = $request->key;

        if ($request->session()->has('cartlist')) {
            $cartlist = $request->session()->get('cartlist');

            if (isset($cartlist[$productId])) {
                unset($cartlist[$productId]);
                $request->session()->put('cartlist', $cartlist);
            }
        }

        return response()->json('success');
    }

    public function cart(Request $request){
        $cartlist = $request->session()->get('cartlist', []);
        $productIds = array_keys($cartlist);
        $products = Product::whereIn('id', $productIds)->get();

        $category_ids = [];

        $cartlistItems = [];
        $subtotal = 0;
        $qty = 0;
        foreach ($products as $product) {
            $productId = $product->id;
            array_push($category_ids, $product->category_id);
            if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                $quantity = $cartlist[$productId]['quantity'];
                $variant = $cartlist[$productId]['variant'] ?? '';
                $price = $cartlist[$productId]['price'];
                $subtotal = $subtotal + ($price * $quantity);
                $cartlistItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price
                ];
                $qty++;
            }
        }
        $carts = $cartlistItems;

        $related_products = Product::whereIn('category_id', $category_ids)->limit(20)->get();

        $best_sellings = OrderDetails::select('product_id', \DB::raw('SUM(count) as total_qty'))
                    ->groupBy('product_id')
                    ->orderByDesc('total_qty')
                    ->limit(6)
                    ->get();

        return view('pages.cart', compact('carts', 'subtotal', 'related_products', 'best_sellings'));
    }

    public function updateCartSummary(Request $request){
        $cartlist = $request->session()->get('cartlist', []);
        $productIds = array_keys($cartlist);
        $products = Product::whereIn('id', $productIds)->get();

        $cartlistItems = [];
        $total = 0;
        $qty = 0;
        $shipping_cost = 0;
        $vat = 0;
        foreach ($products as $product) {
            $productId = $product->id;
            if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                $quantity = $cartlist[$productId]['quantity'];
                $variant = $cartlist[$productId]['variant'] ?? '';
                $price = $cartlist[$productId]['price'];
                $total = $total + ($price * $quantity);
                $cartlistItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price,
                    'variant' => $variant
                ];
                $qty++;
            }
        }
        $carts = $cartlistItems;

        return view('pages.cart.cart-summary', compact('carts', 'total', 'qty', 'shipping_cost', 'vat'));
    }

    public function updateCart(Request $request){
        $productId = $request->key;
        $quantity = $request->quantity;
        if ($request->session()->has('cartlist')) {
            $cartlist = $request->session()->get('cartlist');
            $cartlist[$productId]['quantity'] = $quantity;
        }

        $request->session()->put('cartlist', $cartlist);

        return 'success';
    }

    public function shippingInfo(Request $request){
        $cartlist = $request->session()->get('cartlist', []);
        $productIds = array_keys($cartlist);
        $products = Product::whereIn('id', $productIds)->get();

        $cartlistItems = [];
        $total = 0;
        $qty = 0;
        $shipping_cost = 0;
        $vat = 0;
        foreach ($products as $product) {
            $productId = $product->id;
            if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                $quantity = $cartlist[$productId]['quantity'];
                $variant = $cartlist[$productId]['variant'] ?? '';
                $price = $cartlist[$productId]['price'];
                $total = $total + ($price * $quantity);
                $cartlistItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price,
                    'variant' => $variant
                ];
                $qty++;
            }
        }
        $carts = $cartlistItems;
        $districts = District::orderBy('title', 'asc')->get();

        if ($request->session()->has('shipping_info')) {
            $shippingInfo = $request->session()->get('shipping_info');
        } else {
            $shippingInfo = [];
        }

        return view('pages.shipping-info', compact('carts', 'total', 'qty', 'shipping_cost', 'vat', 'districts', 'shippingInfo'));
    }

    public function getThana(Request $request){
        $id = $request->id;
        $html = '';
        if($id){
            $upazilas = Upazila::where('district_id', $id)->get();
            foreach($upazilas as $upazila){
                $html .= '<option value="'.$upazila->id.'">'.$upazila->title.'</option>';
            }
        }
        return $html;
    }

    public function shippingInfoAdd(Request $request){
        $validator = Validator::make($request->all(), [
            'shipping_name' => 'required|string|max:255',
            'shipping_phone' => 'required|string|max:15',
            'shipping_district' => 'required',
            'shipping_thana' => 'required',
            'address' => 'required',
        ]);

        if ($request->session()->has('shipping_info')) {
            $shippingInfo = $request->session()->get('shipping_info');
        } else {
            $shippingInfo = [];
        }

        // Store shipping information
        $shippingInfo = [
            'shipping_name' => $request->input('shipping_name'),
            'shipping_phone' => $request->input('shipping_phone'),
            'shipping_district' => $request->input('shipping_district'),
            'shipping_thana' => $request->input('shipping_thana'),
            'address' => $request->input('address'),
            'note' => $request->input('note')
        ];

        $request->session()->put('shipping_info', $shippingInfo);

        $cartlist = $request->session()->get('cartlist');

        return redirect()->route('checkout');
    }

    public function checkout(Request $request){
        $cartlist = $request->session()->get('cartlist', []);
        $productIds = array_keys($cartlist);
        $products = Product::whereIn('id', $productIds)->get();

        $cartlistItems = [];
        $total = 0;
        $qty = 0;
        $shipping_cost = 0;
        $vat = 0;
        foreach ($products as $product) {
            $productId = $product->id;
            if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                $quantity = $cartlist[$productId]['quantity'];
                $variant = $cartlist[$productId]['variant'] ?? '';
                $price = $cartlist[$productId]['price'];
                $total = $total + ($price * $quantity);
                $cartlistItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price,
                    'variant' => $variant
                ];
                $qty++;
            }
        }
        $carts = $cartlistItems;
        $districts = District::orderBy('title', 'asc')->get();

        if ($request->session()->has('shipping_info')) {
            $shippingInfo = $request->session()->get('shipping_info');
        } else {
            $shippingInfo = [];
        }

        return view('pages.checkout', compact('carts', 'total', 'qty', 'shipping_cost', 'vat', 'districts', 'shippingInfo'));
    }

    public function cashonDelivery(Request $request)
    {
        // exit;
        try {
            DB::beginTransaction();

            $cartlist = $request->session()->get('cartlist', []);
            $productIds = array_keys($cartlist);
            $products = Product::whereIn('id', $productIds)->get();

            $cartlistItems = [];
            $total = 0;
            $qty = 0;
            $shipping_cost = 0;
            $vat = 0;
            $discount = 0;
            foreach ($products as $product) {
                $productId = $product->id;
                if (isset($cartlist[$productId]) && is_array($cartlist[$productId])) {
                    $quantity = $cartlist[$productId]['quantity'];
                    $variant = $cartlist[$productId]['variant'] ?? '';
                    $price = $cartlist[$productId]['price'];
                    $total = $total + ($price * $quantity);
                    $cartlistItems[] = [
                        'product' => $product,
                        'quantity' => $quantity,
                        'price' => $price,
                        'variant' => $variant
                    ];
                    $qty++;
                }
            }

            $carts = $cartlistItems;
            $shippingInfo = $request->session()->get('shipping_info');

            $order = new Order();
            $order->type = 'cash on delivery';
            $order->customer_id = Auth::user()->id ?? null;
            $order->user_id = Auth::user()->id ?? null;
            $order->sub_total = $total;
            $order->shipping_charge = $shipping_cost;
            $order->qty = $qty;
            $order->amount = $total;
            $order->discounted_amount = $discount;
            $order->address = $shippingInfo['address'];
            $order->shipping_name = $shippingInfo['shipping_name'];
            $order->shipping_phone_number = $shippingInfo['shipping_phone'];
            $order->shipping_district = $shippingInfo['shipping_district'];
            $order->shipping_city = $shippingInfo['shipping_thana'];
            $order->notes = $shippingInfo['note'];
            $order->currency = "BDT";
            $order->status = 0;
            $order->save();

            foreach ($carts as $cart) {
                $subtotal = $cart['price'] * $cart['quantity'];
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->product_id = $cart['product']['id'];
                $orderDetails->variant_id = $cart['variant'];
                $orderDetails->color_id = null;
                $orderDetails->size_id = null;
                $orderDetails->weight_id = null;
                $orderDetails->count = $cart['quantity'];
                $orderDetails->amount = $cart['price'];
                $orderDetails->save();
            }

            $request->session()->forget('cartlist');
            $request->session()->forget('shipping_info');

            DB::commit();

            return redirect()->route('order.invoice', $order->id)->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
            // return redirect()->back()->withErrors('error', 'Failed to place order. Please try again later.');
        }
    }

    public function invoice($order_id){
        $order = Order::find($order_id);
        return view('pages.invoice', compact('order'));
    }

    public function products(Request $request){

        $category = Category::where('slug', $request->category)->first();
        $products = Product::where('is_active', 1);
        if($request->category){
            $products->where('category_id', $category->id);
        }

        if($request->search_text){
            $products->where('name', 'like', '%'.$request->search_text.'%');
        }

        if($request->min_price && $request->max_price){
            $products->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        if ($request->sort_by) {
            $products->when($request->sort_by == 1, function ($query) {
                return $query->orderBy('created_at', 'desc');
            })
            ->when($request->sort_by == 2, function ($query) {
                return $query->orderBy('created_at', 'asc');
            })
            ->when($request->sort_by == 3, function ($query) {
                return $query->orderBy('price', 'asc');
            })
            ->when($request->sort_by == 4, function ($query) {
                return $query->orderBy('price', 'desc');
            });
        }

        $products = $products->paginate(20);

        return view('pages.products', compact('products', 'category', 'request'));
    }

    public function productDetails($slug){
        $product = Product::where('slug', $slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->limit(20)->get();

        $best_sellings = OrderDetails::select('product_id', \DB::raw('SUM(count) as total_qty'))
                    ->groupBy('product_id')
                    ->orderByDesc('total_qty')
                    ->limit(6)
                    ->get();

        return view('pages.product-details', compact('product', 'related_products', 'best_sellings'));
    }

    public function bot(){
        $category = Category::all();
        foreach ($category as $row) {
            $slug = Str::slug($row->name);

            $count = Category::where('slug', $slug)->where('id', '!=', $row->id)->count();
            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }
            $row->slug = $slug;
            $row->save();
        }

        $products = Product::all();
        foreach ($products as $row) {
            $slug = Str::slug($row->name);

            $count = Product::where('slug', $slug)->where('id', '!=', $row->id)->count();
            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }
            $row->slug = $slug;
            $row->save();
        }
    }

    public function aboutUs(){
        return view('pages.aboutUs');
    }
    public function contactUs(){
        return view('pages.ContactUs');
    }
    public function termsCond(){
        return view('pages.termsCondition');
    }
    public function returnPolicy(){
        return view('pages.returnPolicy');
    }
    public function storeLocation(){
        return view('pages.storeLocation');
    }
}
