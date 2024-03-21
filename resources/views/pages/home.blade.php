@extends('layout.app')
@section('title', 'Home')
@section('content')
    <!--static home-->
    <!--slider-->
    <section class="home-banner-area">
        <div class="row no-gutters position-relative">

            <div class="col-lg-12">
                <div class="home-slide">
                    <div class="home-slide">
                        <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
                            @foreach ($sliders as $slider)
                                <div class="home-slide-item" style="height:440px;">
                                    <a href="{{ $slider->btn_link }}" target="_blank">
                                        <img class="d-block w-100 h-100 lazyload" src="{{ env('APPI_URL').'/images/slider/'.$slider->image }}"
                                            data-src="{{ env('APPI_URL').'/images/slider/'.$slider->image }}"
                                            alt="{{ $slider->title }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end slider-->
    <!--home sectiction-->

    <!--end home sectiction-->
   


    <!--End Flash Deal-->
    <!--two grid-->
    <section class="section">
        <div class="container-fluid">
            <div class="row color_bg">
                <div class="col-lg-3 col-6 home_grid_banner">
                    <div class="media-banner mb-6 mb-lg-0 col-xs-6">
                        <a href="{{ $ads->add_1_link }}" class="banner-container">
                            <img src="{{ env('APPI_URL').'/images/slider/'.$ads->add_1_image }}"
                                data-src="{{ env('APPI_URL').'/images/slider/'.$ads->add_1_image }}" alt="{{ $ads->add_1_title }}"
                                class="img-fluid lazyload">
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-6 home_grid_banner">
                    <div class="media-banner mb-6 mb-lg-0 col-xs-6">
                        <a href="{{ $ads->add_2_link }}" class="banner-container">
                            <img src="{{ env('APPI_URL').'/images/slider/'.$ads->add_2_image }}"
                                data-src="{{ env('APPI_URL').'/images/slider/'.$ads->add_2_image }}" alt="{{ $ads->add_2_title }}"
                                class="img-fluid lazyload">
                        </a>
                    </div>
                </div>



                <div class="col-lg-3 col-6 home_grid_banner">
                    <div class="media-banner mb-6 mb-lg-0 col-xs-6">
                        <a href="{{ $ads->add_3_link }}" class="banner-container">
                            <img src="{{ env('APPI_URL').'/images/slider/'.$ads->add_3_image }}"
                                data-src="{{ env('APPI_URL').'/images/slider/'.$ads->add_3_image }}" alt="{{ $ads->add_3_title }}"
                                class="img-fluid lazyload">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6 home_grid_banner">
                    <div class="media-banner mb-6 mb-lg-0 col-xs-6">
                        <a href="{{ $ads->add_4_link }}" class="banner-container">
                            <img src="{{ env('APPI_URL').'/images/slider/'.$ads->add_4_image }}"
                                data-src="{{ env('APPI_URL').'/images/slider/'.$ads->add_4_image }}" alt="{{ $ads->add_4_title }}"
                                class="img-fluid lazyload">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!--



    <section class="section">
    <div class="container-fluid">
        <div class="row color_bg">


            <div class="section-title-1 clearfix " style="display: block; width: 100%; text-align: left ;border: none; margin-left:15px">
                <h3 class="heading-5 strong-700 mb-0 ">

                    <br>
                    <span class="mr-4"> BD Festive Wear</span>
                </h3>
            </div>

            <div class="col-lg-3 col-6 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/men-festive-wear" class="banner-container">
                                <img src="https://swaponsworld.com/public/techopz/images/festive-bg.png" data-src="https://swaponsworld.com/public/techopz/images/festive-bg.png" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload">
                            </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/kids/kids-festive-wear" class="banner-container">
                                <img src="https://swaponsworld.com/public/techopz/images/kids.jpg" data-src="https://swaponsworld.com/public/techopz/images/kids.jpg" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload">
                            </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/bd-festive-wears/couple-festive-wear" class="banner-container">
                                <img src="https://swaponsworld.com/public/techopz/images/matching.jpg" data-src="https://swaponsworld.com/public/techopz/images/matching.jpg" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload">
                            </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/women-festive-wear" class="banner-container">
                                <img src="https://swaponsworld.com/public/techopz/images/Women-festive.jpg" data-src="https://swaponsworld.com/public/techopz/images/Women-festive.jpg" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload">
                            </a>
                </div>
            </div>


        </div>
    </div>
    </section>

    Bd festive wear -->
    <!--two grid end-->
    <!--four grid-->

    <!--four grid end-->
    <!--one grid banner-->

    <!--one grid banner-->
    <!--product carousel-->
    <section class="section">
        <div class="container-fluid">
            <div class="row color_bg">
                <div class="col-12">
                    <div>
                        <div class="section-title-1 clearfix">
                            <h3 class="heading-5 strong-700 mb-0 float-left">
                                <span class="mr-4"> Trending Now
                                </span>
                            </h3>
                        </div>
                        <div class="row">

                            <div class="col-md-12 margin-top10-m">
                                <div class="caorusel-box arrow-round gutters-5">
                                    <div class="slick-carousel" data-slick-items="6" data-slick-xl-items="5"
                                        data-slick-lg-items="4" data-slick-md-items="3" data-slick-sm-items="2"
                                        data-slick-xs-items="2">
                                        @foreach ($featured_products as $product)
                                            <div class="caorusel-card">
                                                @include('pages.product.product-card')
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--products carousel end-->

     <!--thumb img grid-->
     <section class="shop-thumb section">
        <div class="container shop_thumb_containter">
            <div class="row">
                
                <div class="col-lg-6 col-12 no-left-padding">
                    
                    <div class="single-shop-thumb first-banner">
                        <div class="image-top">
                            <img src="https://dorjibari.com.bd/public/images/fCU2gE6UbHF8qyh5by2f0kNEqILXuigMip8Pp9KH.jpeg" alt="#">
                            <div class="shop-title"><a href="https://swaponsworld.com/category/Spring-Summer-collection"><span>Spring & Summer Collection</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-shop-thumb">
                               <div class="image-top">
                        <img src="https://dorjibari.com.bd/public/images/161DvPkj0jUrTyScCSbsS9iaKHjpYv21i095t2me.jpeg" alt="#">
                            <div class="shop-title"><a href="https://swaponsworld.com/category/men"><span>Men</span></a></div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-shop-thumb">
                                <div class="image-top">
                            <img src="https://dorjibari.com.bd/public/images/VqU5duKKTlZzoqibm3AeBcAWBrUUpXvoByvP6fv1.jpeg" alt="#">
                            <div class="shop-title"><a href="https://swaponsworld.com/category/women"><span>Women</span></a></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="single-shop-thumb">
                                <div class="image-top with_top_margin">
                            <img src="https://dorjibari.com.bd/public/images/cM4Q3EnN4ASJEYylASX5Vps22wFi4O5zWPnPfOkY.jpeg" alt="#">
                            <div class="shop-title"><a href="https://swaponsworld.com/category/kids"><span>Kids</span></a></div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end thumb img grid-->
    <!--flash deal-->

    
    <!--product carousel-->
    <section class="section">
        <div class="container-fluid">
            <div class="row color_bg">
                <div class="col-12">
                    <div>
                        <div class="section-title-1 clearfix">
                            <h3 class="heading-5 strong-700 mb-0 float-left">
                                <span class="mr-4"> Summer New Arrivals
                                </span>
                            </h3>
                        </div>

                        <div class="row">



                            <div class="col-md-12 margin-top10-m">
                                <div class="caorusel-box arrow-round gutters-5">
                                    <div class="slick-carousel" data-slick-items="6" data-slick-xl-items="5"
                                        data-slick-lg-items="4" data-slick-md-items="3" data-slick-sm-items="2"
                                        data-slick-xs-items="2">
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3083-DlaZx.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/Tmkeq6h8PHMwrB4QRFE2j3eLASRvJ0dNqoZp8oCK.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_308#3">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3083-DlaZx.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_308#3</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5880)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5880)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5880)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3082-uWpZb.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/iOdVGzg0ZDPNawLggeRBfsMmxh4YjBp10F4GYLKR.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_308#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3082-uWpZb.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_308#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5878)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5878)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5878)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3081-Sn2On.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/T7WODDByIWKSJ9iq4dYVF8QAKFSoAuOjmN17Fsjs.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_308#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3081-Sn2On.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_308#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5874)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5874)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5874)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3061-Hh6gX.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/l1fc4TAgYn5gPskFwcU2fi9y3FrB4GAMfO5Kqllt.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_306#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3061-Hh6gX.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_306#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5871)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5871)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5871)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3043-VUlxO.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/r5Hkwjtbm4TLhR0vjqgd1j6ZnIU0Pf0MEmd5YIqS.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_304#3">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3043-VUlxO.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_304#3</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5870)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5870)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5870)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Fil-A-Fil2992-cdVST.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/wdKrL26jIbnDATwN1GGNuQnx5sZ04NhVbw73EIvU.jpeg"
                                                                alt="Panjabi_Semi Fit_ Fil A Fil_299#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,490</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Fil-A-Fil2992-cdVST.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Fil A
                                                                Fil_299#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5869)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5869)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5869)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Fil-A-Fil2991-qOlBU.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/ajAbLBrHuaV3TMTNEAkJuuhPE5m97KtYyqaI2OHu.jpeg"
                                                                alt="Panjabi_Semi Fit_ Fil A Fil_299#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,490</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Fil-A-Fil2991-qOlBU.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Fil A
                                                                Fil_299#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5868)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5868)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5868)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard2983-PWdQy.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/qnz5KA96QXOW5SzBQI6A8ZoKtdgbq07FBaPeCuAc.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_298#3">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard2983-PWdQy.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_298#3</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5867)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5867)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5867)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard2982-nFiLw.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/MTbRItmVqIEhTpZ6PGzbl6ZrFmcv5gFLC0lQBJbg.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_298#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard2982-nFiLw.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_298#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5866)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5866)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5866)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/PanjabiSemi-Fit-Jacquard3042-XU7RO.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/oqhFTRVGK5guETTtqq8zJo6pisuZ5LC9WnEr1eRe.jpeg"
                                                                alt="Panjabi_Semi Fit_ Jacquard_304#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳2,790</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/PanjabiSemi-Fit-Jacquard3042-XU7RO.html"
                                                                class="text-truncates">Panjabi_Semi Fit_ Jacquard_304#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(5865)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(5865)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(5865)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--products carousel end-->
    <!--product carousel-->
    <section class="section">
        <div class="container-fluid">
            <div class="row color_bg">
                <div class="col-12">
                    <div>
                        <div class="section-title-1 clearfix">
                            <h3 class="heading-5 strong-700 mb-0 float-left">
                                <span class="mr-4"> New Arrival (Shirts)
                                </span>
                            </h3>
                        </div>

                        <div class="row">



                            <div class="col-md-12 margin-top10-m">
                                <div class="caorusel-box arrow-round gutters-5">
                                    <div class="slick-carousel" data-slick-items="6" data-slick-xl-items="5"
                                        data-slick-lg-items="4" data-slick-md-items="3" data-slick-sm-items="2"
                                        data-slick-xs-items="2">
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitBasic-Solid3982-4vDhg.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/v4emrltB17IaxogD8X7i5OMO5sBM7cD9i2JI1t7O.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Basic Solid_398#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,390</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitBasic-Solid3982-4vDhg.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy Fit_Basic
                                                                Solid_398#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6195)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6195)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6195)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-Fit-Solid3992-w1iP8.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/rsL8pyS7ezgXBShCF0A8FqrMrjDSCWBR5ZcLPffE.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_ Solid_399#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-Fit-Solid3992-w1iP8.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy Fit_
                                                                Solid_399#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6194)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6194)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6194)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitBasic-Solid3981-aMW59.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/qGjD2aa0MaaSeldA2p3TKffKNm9AepKA1A6abDWD.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Basic Solid_398#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,390</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitBasic-Solid3981-aMW59.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy Fit_Basic
                                                                Solid_398#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6193)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6193)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6193)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-Fit-Solid3991-PlmMT.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/vduoUZB0rCenEPsFzjG7R6qcLIv8TLqUsoqmHQqy.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_ Solid_399#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-Fit-Solid3991-PlmMT.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy Fit_
                                                                Solid_399#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6192)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6192)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6192)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitCheck3951-bHG5R.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/WpQwjyp2EKA2oMqJjFsZ6Ovj7cFulGC5gplBSZUn.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Check_395#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitCheck3951-bHG5R.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy
                                                                Fit_Check_395#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6191)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6191)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6191)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitCheck3933-DsOC5.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/abyLSqI130KTD1SE4xj9NZu2mgzA7L710DHxdE4l.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Check_393#3">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitCheck3933-DsOC5.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy
                                                                Fit_Check_393#3</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6190)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6190)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6190)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitCheck3932-lRpWQ.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/q6VE8jdNOzIHPkzVAaOLibElGkLM1JMHgkAjIgk5.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Check_393#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitCheck3932-lRpWQ.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy
                                                                Fit_Check_393#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6188)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6188)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6188)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitCheck3931-qD8Zw.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/Tz0tQMRksO2vdXPMC5CyKBxK6ID8SQHNFNup0SeG.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Check_393#1">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitCheck3931-qD8Zw.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy
                                                                Fit_Check_393#1</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6187)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6187)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6187)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-Fit-Check4173-nCajh.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/zY3hbytd16N7OOPkskoUc3ZqM093Cm7ziW7x38nR.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_ Check_417#3">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,290</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-Fit-Check4173-nCajh.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy Fit_
                                                                Check_417#3</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6186)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6186)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6186)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caorusel-card">
                                            <div
                                                class="product-card-2 card card-product shop-cards shop-tech product-box-2">
                                                <div class="card-body p-0">

                                                    <div class="card-image">

                                                        <a href="product/ShirtFull-SleeveTrendy-FitCheck3732-Jk6AQ.html"
                                                            class="d-block">
                                                            <img class="img-fit lazyload mx-auto"
                                                                src="public/frontend/images/placeholder.jpg"
                                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/zbNmwFcuqClKJM5ZXcIZDDxrQm9SChm2VU7IuvoL.jpeg"
                                                                alt="Shirt:Full Sleeve_Trendy Fit_Check_373#2">
                                                        </a>
                                                    </div>

                                                    <div class="p-md-3 p-2 home-pro-info">
                                                        <div class="price-box">
                                                            <span class="product-price strong-600">৳1,590</span>
                                                        </div>

                                                        <h2 class="product-title p-0">
                                                            <a href="product/ShirtFull-SleeveTrendy-FitCheck3732-Jk6AQ.html"
                                                                class="text-truncates">Shirt:Full Sleeve_Trendy
                                                                Fit_Check_373#2</a>
                                                        </h2>


                                                        <!--<div class="home-pro-addtocart"><button class="add-to-cart btn" title="Add to Cart" onclick="showAddToCartModal(6185)">
                                                        <i class="la la-shopping-cart"></i>
                                                    </button>
                                     </div>-->
                                                        <div class="home-pro-addtocart list-page">
                                                            <button class="btn add-wishlist" title="Add to Wishlist"
                                                                onclick="addToWishList(6185)" type="button">
                                                                <i class="la la-heart-o"></i>
                                                            </button>
                                                            <button class="add-to-cart btn" title="Add to Cart"
                                                                onclick="showAddToCartModal(6185)" type="button">
                                                                <i class="la la-shopping-cart"></i> Add To Cart
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--products carousel end-->
    <!--four grid-->

    <!--four grid end-->



    <style>
        .loadmore {
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
    </style>
    <!--infinity end-->
    <!--static home end-->


    <!--<section class="slice-sm footer-top-bar bg-white">
    <div class="container sct-inner">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="https://dorjibari.com.bd/sellerpolicy">
                        <i class="la la-file-text"></i>
                        <h4 class="heading-5">Seller Policy</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="https://dorjibari.com.bd/returnpolicy">
                        <i class="la la-mail-reply"></i>
                        <h4 class="heading-5">Return Policy</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="https://dorjibari.com.bd/supportpolicy">
                        <i class="la la-support"></i>
                        <h4 class="heading-5">Support Policy</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="https://dorjibari.com.bd/profile">
                        <i class="la la-dashboard"></i>
                        <h4 class="heading-5">My Profile</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>-->


    <!-- FOOTER -->
    <!--four grid-->
    <!--
    <section class="section" style="background-color:#d71f27; padding: 30px 0px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/matching-cloths/family-collection" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479161.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479161.jpeg	" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>

            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/matching-cloths/couple-collection" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479171.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479171.jpeg" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>

            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/men-puja-special" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479182.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479182.jpeg	" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>

            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/men-puja-special/dhoti-pajama" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479195.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479195.jpeg	" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>

            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/kids" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479207.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479207.jpeg" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>


            <div class="col-lg-2 col-4 home_grid_banner">
                <div class="media-banner mb-3 mb-lg-0">
                    <a href="https://swaponsworld.com/category/puja-special/men-puja-special/tshirt" class="banner-container">
                                <img src="https://swaponsworld.com/public/uploads/media/1662479216.jpeg	" data-src="https://swaponsworld.com/public/uploads/media/1662479216.jpeg	" alt="Banner" class="img-fluid lazyload">
                            </a>
                </div>
            </div>

        </div>
    </div>
    </section>

    -->
@endsection
