@if(count($carts) > 0)
    <ul>
        <li>
            <div class="dropdown-cart px-0">
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">Cart Items</h3>
                </div>
                <div class="dropdown-cart-items c-scrollbar">
                    @foreach ($carts as $cart)
                        @php $images = explode(",", $cart['product']['image']) @endphp
                        <div class="dc-item">
                            <div class="d-flex align-items-center">
                                <div class="dc-image">
                                    <a href="">
                                        <img loading="lazy" src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}" data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}" class="img-fluid" alt="Product Image">
                                    </a>
                                </div>
                                <div class="dc-content">
                                    <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                        <a href="https://dorjibari.com.bd/product/Short-Sleeve-T-Shirt-Semi-FitSolid1882-L4YtP">
                                            {{ $cart['product']['name'] }}
                                        </a>
                                    </span>

                                    <span class="dc-quantity">x{{ $cart['quantity'] }}</span>
                                    <span class="dc-price">৳{{ number_format($cart['price'], 0, '.', ',')}}</span>
                                </div>
                                <div class="dc-actions">
                                    <button onclick="removeFromCart({{$cart['product']['id']}})">
                                        <i class="la la-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="dc-item py-3">
                    <span class="subtotal-text">Subtotal</span>
                    <span class="subtotal-amount">৳{{ number_format($subtotal, 0, '.', ',')}}</span>
                </div>
                <div class="py-2 text-center dc-btn">
                    <ul class="inline-links inline-links--style-3">
                        <li class="pr-3">
                            <a href="{{ route('cart') }}"
                                class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                <i class="la la-shopping-cart"></i> View cart
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                <i class="la la-mail-forward"></i> Checkout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
@else
    <ul>
        <li>
            <div class="dropdown-cart px-0">
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">Your Cart is empty</h3>
                </div>
            </div>
        </li>
    </ul>
@endif

