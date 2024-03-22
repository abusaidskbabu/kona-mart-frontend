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
                                        <th class="product-remove text-right">Action</th>
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
                                                    {{ ($cart['variant']) ? '- ' . $cart['variant'] : '' }}</span>
                                            </td>

                                            <td class="product-price d-lg-table-cell">
                                                <span
                                                    class="pr-3 d-block">৳{{ number_format($cart['price'], 0, '.', ',') }}</span>
                                            </td>

                                            <td class="product-quantity d-md-table-cell">
                                                <div class="input-group input-group--style-2 pr-4"
                                                    style="width: 130px;">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-number" type="button" data-type="minus"
                                                            data-field="quantity[0]">
                                                            <i class="la la-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quantity[0]"
                                                        class="form-control h-auto input-number" placeholder="1"
                                                        value="{{ $cart['quantity'] }}" min="1"
                                                        max="{{ $cart['product']['qty'] }}"
                                                        onchange="updateQuantity({{ $cart['product']['id'] }}, this)">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-number" type="button" data-type="plus"
                                                            data-field="quantity[0]">
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-total">
                                                <span>৳{{ number_format($subtotal, 0, '.', ',') }}</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"
                                                    onclick="removeFromCartView(event, {{ $cart['product']['id'] }})"
                                                    class="text-right pl-4">
                                                    <i class="la la-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-none d-md-block">
                        <div class="row pt-4">
                            <div class="col-md-6">
                                <a href="/" class="link link--style-3">
                                    <i class="la la-mail-reply"></i>
                                    Return to shop
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn-styled btn-success" onclick="showCheckoutModal()">Add Delivery Info</button>
                                <a href="{{ route('shipping.info') }}" class="btn btn-styled btn-success" >Add Delivery Info</a>
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
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td class="text-right">
                                        <span class="strong-600">৳{{ number_format($total, 0, '.', ',')}}</span>
                                    </td>
                                </tr>

                                <tr class="cart-shipping">
                                    <th>VAT (5%)</th>
                                    <td class="text-right">
                                        <span class="text-italic">৳{{ number_format($vat, 0, '.', ',')}}</span>
                                    </td>
                                </tr>

                                <tr class="cart-shipping">
                                    <th>Total Shipping</th>
                                    <td class="text-right">
                                        <span class="text-italic" id="shipping_price">৳{{ number_format($shipping_cost, 0, '.', ',')}}</span>
                                    </td>
                                </tr>

                                <tr class="cart-total">
                                    <th><span class="strong-600">Total</span></th>
                                    <td class="text-right">
                                        <strong><span id="subtotal">৳{{ number_format(($total + $vat + $shipping_cost), 0, '.', ',')}}</span></strong>
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
        <div class="d-md-none d-xs-block" style="display:block;">
            <div class="row pt-4">
                <div class="col-md-6">
                    <a href="https://dorjibari.com.bd" class="link link--style-3">
                        <i class="la la-mail-reply"></i>
                        Return to shop
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-styled btn-success" onclick="showCheckoutModal()">Add Delivery
                        Info</button>
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
