<div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
    <div class="col-lg-6">
        @php $images = explode(",", $product->image) @endphp
        <div class="product-gal sticky-top d-flex flex-row-reverse" style="padding-right: 32px; margin-right: -17px;">
            <div class="product-gal-img">
                <img src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                    class="xzoom img-fluid lazyloaded"
                    data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                    xoriginal="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                    style="width: 100%;">
            </div>
            <div class="product-gal-thumb">
                <div class="xzoom-thumbs">
                    @foreach($images as $key => $image)
                        <a href="{{ ($image) ? env('APPI_URL').'/images/product/'.$image : asset('assets/frontend/images/placeholder-product.jpg') }}">
                            <img src="{{ ($image) ? env('APPI_URL').'/images/product/'.$image : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                class="xzoom-gallery xactive lazyloaded" width="80"
                                data-src="{{ ($image) ? env('APPI_URL').'/images/product/'.$image : asset('assets/frontend/images/placeholder-product.jpg') }}"
                                xpreview="{{ ($image) ? env('APPI_URL').'/images/product/'.$image : asset('assets/frontend/images/placeholder-product.jpg') }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <!-- Product description -->
        <div class="product-description-wrapper">
            <!-- Product title -->
            <h2 class="product-title">
                {{ $product->name }}
            </h2>

            <div class="row no-gutters mt-3">
                <div class="col-2">
                    <div class="product-description-label">Price:</div>
                </div>
                <div class="col-10">
                    <div class="product-price">
                        <strong>
                            ৳{{ number_format($product->price, 0, '.', ',') }}
                        </strong>
                    </div>
                </div>
            </div>


            <hr>


            <form id="option-choice-form">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">

                @if(count($product->variant) > 0)
                    <div class="row no-gutters">
                        <div class="col-2">
                            <div class="product-description-label mt-2 ">Size
                                :
                            </div>
                        </div>
                        <div class="col-10">
                            <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                @foreach ($product->variant as $variant)
                                    <li>
                                        <input type="radio" onchange="getVariantPrice();" class="variant_field" id="{{$variant->id}}" name="attribute_id_1" value="{{$variant->id}}"
                                            checked="">
                                        <label for="{{$variant->id}}">{{$variant->variant->name}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif 

                <div class="row no-gutters">
                    <div class="col-2">
                        <div class="product-description-label mt-2">Quantity:</div>
                    </div>
                    <div class="col-10">
                        <div class="product-quantity d-flex align-items-center">
                            <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                <span class="input-group-btn">
                                    <button class="btn btn-number" onclick="numberbtnClick(this);" type="button" data-type="minus"
                                        data-field="quantity" >
                                        <i class="la la-minus"></i>
                                    </button>
                                </span>
                                <input type="text" name="quantity"
                                    class="form-control input-number h-auto text-center" placeholder="1" value="1"
                                    min="1" max="10">
                                <span class="input-group-btn">
                                    <button class="btn btn-number" onclick="numberbtnClick(this);" type="button" data-type="plus"
                                        data-field="quantity">
                                        <i class="la la-plus"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="avialable-amount">(<span id="available-quantity">{{ $product->qty }}</span> Available)
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row no-gutters pb-3" id="chosen_price_div">
                    <div class="col-2">
                        <div class="product-description-label">Total Price:</div>
                    </div>
                    <div class="col-10">
                        <div class="product-price">
                            <strong id="chosen_price">৳{{ number_format($product->price, 0, '.', ',') }}</strong>
                        </div>
                    </div>
                </div>

            </form>

            <div class="d-table width-100 mt-3">
                <div class="d-table-cell">
                    <!-- Add to cart button -->
                    <button type="button"
                        class="btn btn-styled btn-alt-base-1 c-white btn-icon-left strong-700 hov-bounce hov-shaddow ml-2 add-to-cart"
                        onclick="addToCart()">
                        <i class="la la-shopping-cart"></i>
                        <span class="d-none d-md-inline-block"> Add to cart</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
