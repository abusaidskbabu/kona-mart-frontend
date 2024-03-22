<?php

namespace App\Http\Controllers;

use App\Add;
use App\HomSection;
use App\Product;
use App\ProductVariant;
use App\Slider;
use App\ThumbnailSlider;
use App\Variant;
use Illuminate\Http\Request;

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

        return view('pages.cart', compact('carts', 'subtotal'));
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

        return view('pages.shipping-info', compact('carts', 'total', 'qty', 'shipping_cost', 'vat'));
    }
}
