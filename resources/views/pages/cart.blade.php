@extends('layout.app')
@section('title', 'Cart')
@section('content')
    <form id="apply_coupon" class="form-inline d-none" action="https://dorjibari.com.bd/checkout/apply_coupon_code"
        method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd"> <input type="text"
            name="code1" id="code1">
    </form>
    <form id="change_coupon" class="form-inline d-none" action="https://dorjibari.com.bd/checkout/remove_coupon_code"
        method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd">
    </form>

    <section class="slice-xs sct-color-2 border-bottom">
        <div class="container container-sm">
            <div class="row cols-delimited justify-content-center">
                <div class="col">
                    <div class="icon-block icon-block--style-1-v5 text-center active">
                        <div class="block-icon mb-0">
                            <i class="la la-shopping-cart"></i>
                        </div>
                        <div class="block-content d-none d-md-block">
                            <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">1. My Cart</h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="icon-block icon-block--style-1-v5 text-center">
                        <div class="block-icon c-gray-light mb-0">
                            <i class="la la-map-o"></i>
                        </div>
                        <div class="block-content d-none d-md-block">
                            <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. Shipping info</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon-block icon-block--style-1-v5 text-center">
                        <div class="block-icon c-gray-light mb-0">
                            <i class="la la-credit-card"></i>
                        </div>
                        <div class="block-content d-none d-md-block">
                            <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">3. Payment</h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="icon-block icon-block--style-1-v5 text-center">
                        <div class="block-icon c-gray-light mb-0">
                            <i class="la la-check-circle"></i>
                        </div>
                        <div class="block-content d-none d-md-block">
                            <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">4. Confirmation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-4 gry-bg" id="cart-summary">
        
    </section>

    <section class="gry-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="seller-top-products-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            Top Selling Products
                        </div>
                        <div class="box-content">
                            @foreach ($best_sellings as $bproduct)
                                @php $images = explode(",", $bproduct->product->image) @endphp
                                <div class="mb-3 product-box-3">
                                    <div class="clearfix">
                                        <div class="product-image float-left">
                                            <a href="{{ route('product.details', $bproduct->product->slug) }}">
                                                <img class="img-fit lazyload" src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                                    data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                                    alt="{{ $bproduct->product->name }}">
                                            </a>
                                        </div>
                                        <div class="product-details float-left">
                                            <h4 class="title text-truncate">
                                                <a href="{{ route('product.details', $bproduct->product->slug) }}" class="d-block">{{ $bproduct->product->name }}</a>
                                            </h4>
                                            {{-- <div class="star-rating star-rating-sm mt-1">
                                                <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                    class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                    class = 'fa fa-star'></i>
                                            </div> --}}
                                            <div class="price-box">
                                                <span class="product-price strong-600">৳{{ number_format($bproduct->price, 0, '.', ',') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="bg-white p-3">
                        <div class="section-title-1">
                            <h3 class="heading-5 strong-700 mb-0">
                                <span class="mr-4">Related products</span>
                            </h3>
                        </div>
                        <div class="caorusel-box arrow-round gutters-5">
                            <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="2"
                                data-slick-lg-items="3" data-slick-md-items="2" data-slick-sm-items="1"
                                data-slick-xs-items="1" data-slick-rows="2">
                                @foreach($related_products as $rproduct)
                                    @php $images = explode(",", $rproduct->image) @endphp
                                    <div class="caorusel-card my-1">
                                        <div class="row no-gutters product-box-2 align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative overflow-hidden h-100">
                                                    <a href="{{ route('product.details', $rproduct->slug) }}"
                                                        class="d-block product-image h-100 text-center">
                                                        <img class="img-fit lazyload"
                                                            src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                                            data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                                            alt="{{ $rproduct->name }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-7 border-left">
                                                <div class="p-3">
                                                    <h2 class="product-title mb-0 p-0 text-truncate">
                                                        <a href="{{ route('product.details', $rproduct->slug) }}">{{ $rproduct->name }}</a>
                                                    </h2>
                                                    {{-- <div class="star-rating star-rating-sm mb-2">
                                                        <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                            class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                            class = 'fa fa-star'></i>
                                                    </div> --}}
                                                    <div class="clearfix">
                                                        <div class="price-box float-left">
                                                            <span class="product-price strong-600">৳{{ number_format($rproduct->price, 0, '.', ',') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="GuestCheckout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Login</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="{{ route('authenticate') }}"
                            method="POST">
                            @csrf
                            <span>Use
                                country code before number</span>
                            <div class="form-group">
                                <input type="text" class="form-control h-auto form-control-lg " value=""
                                    placeholder="Email Or Phone" name="phone_number" id="email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control h-auto form-control-lg"
                                    placeholder="Password">
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <a href="password/reset.html" class="link link-xs link--style-3">Forgot password?</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-styled btn-base-1 px-4">Sign in</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="text-center pt-3">
                        <p class="text-md">
                            Need an account? <a href="{{ route('signup') }}" class="strong-600">Register Now</a>
                        </p>
                    </div>
                    <div class="or or--1 mt-0 text-center">
                        <span>Or</span>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('shipping.info') }}" class="btn btn-styled btn-base-1">Guest Checkout</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script type="text/javascript">
            function removeFromCartView(e, key){
                e.preventDefault();
                removeFromCart(key);
            }

            $('.btn-number').click(function() {
                var fieldName = $(this).attr('data-field');
                var type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                var minVal = parseInt(input.attr('min'));
                var maxVal = parseInt(input.attr('max'));

                if (!isNaN(currentVal)) {
                    if (type === 'minus') {
                        if (currentVal > minVal) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) === minVal) {
                            $(this).attr('disabled', true);
                            $(this).siblings("[data-type='plus']").attr('disabled', false);
                        }
                    } else if (type === 'plus') {
                        if (currentVal < maxVal) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) === maxVal) {
                            $(this).attr('disabled', true);
                            $(this).siblings("[data-type='minus']").attr('disabled', false);
                        }
                    }
                } else {
                    input.val(0);
                }
            })

            function clickBtnUpdateCart(key, qty){
                $.get("{{route('update.cart')}}", {  
                    key:key, 
                    quantity: qty
                }, function(data){
                    updateNavCart();
                    getCartSummary();
                });
            }

            function updateQuantity(key, element){
                $.get("{{route('update.cart')}}", {  
                    key:key, 
                    quantity: element.value
                }, function(data){
                    updateNavCart();
                    getCartSummary();
                });
            }

            
            getCartSummary();
            
            $(function(){
                $('#code').on("input", function() {
                    var dInput = this.value;
                    $('#code1').val(dInput);
                });
                
            });   

            function showCheckoutModal(){
                $('#GuestCheckout').modal();
            }
        </script>

    @endpush
@endsection
