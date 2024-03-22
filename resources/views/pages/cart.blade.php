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
                        <form class="form-default" role="form" action="https://dorjibari.com.bd/users/login/cart"
                            method="POST">
                            <input type="hidden" name="_token" value="iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd">
                            <span>Use
                                country code before number</span>
                            <div class="form-group">
                                <input type="text" class="form-control h-auto form-control-lg " value=""
                                    placeholder="Email Or Phone" name="email" id="email">
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
                            Need an account? <a href="users/registration.html" class="strong-600">Register Now</a>
                        </p>
                    </div>
                    <div class="or or--1 mt-0 text-center">
                        <span>Or</span>
                    </div>
                    <div class="text-center">
                        <a href="cart.html" class="btn btn-styled btn-base-1">Guest Checkout</a>
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
