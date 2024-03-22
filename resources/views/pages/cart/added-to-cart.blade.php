<div class="modal-body p-4 added-to-cart">
    <div class="text-center text-success">
        <i class="fa fa-check"></i>
        <h3>{{ $message }}</h3>
    </div>
    @php $images = explode(",", $product->image) @endphp
    <div class="product-box">
        <div class="block">
            <div class="block-image">
                <img src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}" data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}" class="lazyload" alt="Product Image">
            </div>
            <div class="block-body">
                <h6 class="strong-600">
                    {{ $product->name }}
                </h6>
                <div class="row align-items-center no-gutters mt-2 mb-2">
                    <div class="col-sm-2">
                        <div>Price:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="heading-6 text-danger">
                            <strong>
                                ৳{{ number_format($price, 0, '.', ',')}}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-styled btn-base-1 btn-outline mb-3 mb-sm-0" data-dismiss="modal">Back to shopping</button>
        <a href="{{ route('cart') }}" class="btn btn-styled btn-base-1 mb-3 mb-sm-0">Proceed to Checkout</a>
    </div>
</div>
