@extends('layout.app')
@section('title', 'Checkout')
@section('content')

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
                    <div class="icon-block icon-block--style-1-v5 text-center active">
                        <div class="block-icon mb-0">
                            <i class="la la-map-o"></i>
                        </div>
                        <div class="block-content d-none d-md-block">
                            <h3 class="heading heading-sm strong-300 c-gray-light text-capitalize">2. Shipping info</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="icon-block icon-block--style-1-v5 text-center active">
                        <div class="block-icon mb-0">
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


    <section class="py-4 gry-bg" id="">
        @if (count($carts) > 0)
            <div class="container">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-xl-8">
                        <!-- <form class="form-default bg-white p-4" data-toggle="validator" role="form"> -->
                        <div class="form-default bg-white p-4">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table-cart border-bottom" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th class="product-image">Img</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price d-lg-table-cell">Price</th>
                                                <th class="product-quanity d-md-table-cell">Quantity</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                @php
                                                    $images = explode(',', $cart['product']['image']);
                                                    $subtotal = $cart['price'] * $cart['quantity'];
                                                @endphp
                                                <tr class="cart-item">
                                                    <td class="product-image">
                                                        <a href="#" class="mr-3">
                                                            <img loading="lazy"
                                                                src="{{ $images[0] ? env('APPI_URL') . '/images/product/' . $images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                                                data-src="{{ $images[0] ? env('APPI_URL') . '/images/product/' . $images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}">
                                                        </a>
                                                    </td>

                                                    <td class="product-name">
                                                        <span class="pr-4 d-block">{{ $cart['product']['name'] }}
                                                            {{ $cart['variant'] ? '- ' . $cart['variant'] : '' }}</span>
                                                    </td>

                                                    <td class="product-price d-lg-table-cell">
                                                        <span
                                                            class="pr-3 d-block">৳{{ number_format($cart['price'], 0, '.', ',') }}</span>
                                                    </td>

                                                    <td class="product-quantity d-md-table-cell">
                                                        <span class="pr-3 d-block">{{ $cart['quantity'] }}</span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span>৳{{ number_format($subtotal, 0, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row pt-4">
                                    <div class="col-md-12 text-right">
                                        <div class="row justify-content-md-end">
                                            <div class="col-md-auto mb-2 mb-md-0">
                                                <a href="" class="btn btn-styled btn-success btn-block">Online Payment</a>
                                            </div>
                                            <div class="col-md-auto">
                                                <a href="{{ route('cash.on.delivery') }}" class="btn btn-styled btn-success btn-block mt-md-0 mt-2">Cash on Delivery</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <!-- </form> -->
                    </div>

                    <div class="col-xl-4 ml-lg-auto">
                        <div class="card sticky-top" style="">
                            <div class="card-title py-3">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3 class="heading heading-3 strong-400 mb-0">
                                            <span>Summary</span>
                                        </h3>
                                    </div>

                                    <div class="col-6 text-right">
                                        <span class="badge badge-md badge-success">{{ $qty }} Items</span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table-cart table-cart-review">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Shipping Details</th>
                                            <th class="product-total text-right"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name pt-1 pb-0">
                                                <strong >Name:</strong>
                                            </td>
                                            <td class="product-total text-right pt-1 pb-0">
                                                <span class="pl-4">{{ $shippingInfo['shipping_name'] }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name pt-1 pb-0">
                                                <strong >Phone:</strong>
                                            </td>
                                            <td class="product-total text-right pt-1 pb-0">
                                                <span class="pl-4">{{ $shippingInfo['shipping_phone'] }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name pt-1 pb-0">
                                                <strong >District:</strong>
                                            </td>
                                            <td class="product-total text-right pt-1 pb-0">
                                                <span class="pl-4">{{ App\District::find($shippingInfo['shipping_district'])->title ?? '' }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name pt-1 pb-0">
                                                Thana:
                                            </td>
                                            <td class="text-right pt-1 pb-0">
                                                <span class="pl-4">{{ App\Upazila::find($shippingInfo['shipping_thana'])->title ?? '' }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name pt-1 pb-0">
                                                Address:
                                            </td>
                                            <td class="text-right pt-1 pb-0">
                                                <span class="pl-4">{{ $shippingInfo['address'] ?? '' }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table-cart table-cart-review">
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td class="text-right">
                                                <span class="strong-600">৳{{ number_format($total, 0, '.', ',') }}</span>
                                            </td>
                                        </tr>

                                        <tr class="cart-shipping">
                                            <th>VAT (5%)</th>
                                            <td class="text-right">
                                                <span class="text-italic">৳{{ number_format($vat, 0, '.', ',') }}</span>
                                            </td>
                                        </tr>

                                        <tr class="cart-shipping">
                                            <th>Total Shipping</th>
                                            <td class="text-right">
                                                <span class="text-italic"
                                                    id="shipping_price">৳{{ number_format($shipping_cost, 0, '.', ',') }}</span>
                                            </td>
                                        </tr>

                                        <tr class="cart-total">
                                            <th><span class="strong-600">Total</span></th>
                                            <td class="text-right">
                                                <strong><span
                                                        id="subtotal">৳{{ number_format($total + $vat + $shipping_cost, 0, '.', ',') }}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>


                                <div class="mt-3 ">

                                    <div class="form-group flex-grow-1">
                                        <input type="text" class="form-control w-100" name="code" id="code"
                                            placeholder="Have coupon code? Enter here">
                                    </div>
                                    <a class="log-out-btn" href="#" id="couponbutton btn btn-primary"
                                        style="border: 1px solid;padding: 7px 16px;color: #fff;background-color: #ed4c67;font-size: 15px;font-weight: 600;border-radius: 3px;"
                                        onclick="event.preventDefault();document.getElementById('apply_coupon').submit();">
                                        Apply </a>

                                    <!--<button type="button" class="btn btn-base-1 apply_coupon" id="couponbutton" >Apply</button>-->
                                    <!--</form>-->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">Your Cart is empty</h3>
                </div>
            </div>
        @endif

    </section>

    @push('script')
        <script type="text/javascript">
            function removeFromCartView(e, key) {
                e.preventDefault();
                removeFromCart(key);
            }

            $('#shipping_district').change(function() {
                let id = $(this).find('option:selected').val();
                if (id != '') {
                    $.ajax({
                        url: "{{ route('get.thana') }}",
                        method: 'GET',
                        data: {
                            id: id
                        },
                        dataType: 'html',
                        success: function(data) {
                            $('#shipping_thana').html(data);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            })

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

            function clickBtnUpdateCart(key, qty) {
                $.get("{{ route('update.cart') }}", {
                    key: key,
                    quantity: qty
                }, function(data) {
                    updateNavCart();
                    getCartSummary();
                });
            }

            function updateQuantity(key, element) {
                $.get("{{ route('update.cart') }}", {
                    key: key,
                    quantity: element.value
                }, function(data) {
                    updateNavCart();
                    getCartSummary();
                });
            }


            getCartSummary();

            $(function() {
                $('#code').on("input", function() {
                    var dInput = this.value;
                    $('#code1').val(dInput);
                });

            });

            function showCheckoutModal() {
                $('#GuestCheckout').modal();
            }
        </script>
    @endpush
@endsection
