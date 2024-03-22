<div class="product-card-2 card card-product shop-cards shop-tech product-box-2">
    <div class="card-body p-0">
        <div class="card-image">
            <a href=""
                class="d-block">
                <?php $images = explode(",", $product->image)?>
                <img class="img-fit lazyload mx-auto" src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                    data-src="{{ ($images[0]) ? env('APPI_URL').'/images/product/'.$images[0] : asset('assets/frontend/images/placeholder-product.jpg') }}"
                    alt="{{ $product->name }} Fit_Solid_188#2">
            </a>
        </div>

        <div class="p-md-3 p-2 home-pro-info">
            <div class="price-box">
                <span class="product-price strong-600">৳{{ number_format($product->price, 0, '.', ',') }}</span>
            </div>

            <h2 class="product-title p-0">
                <a href=""
                    class="text-truncates">{{ $product->name }}</a>
            </h2>

            <div class="home-pro-addtocart list-page">
                <button class="btn add-wishlist" title="Add to Wishlist"
                    onclick="addToWishList({{ $product->id }})" type="button">
                    <i class="la la-heart-o"></i>
                </button>
                <button class="add-to-cart btn" title="Add to Cart"
                    onclick="showAddToCartModal({{ $product->id }})" type="button">
                    <i class="la la-shopping-cart"></i> Add To Cart
                </button>
            </div>

        </div>
    </div>
</div>