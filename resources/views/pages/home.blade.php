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
                            <img src="{{ env('APPI_URL').'/images/slider/'.$second_banner->first_thumbnail_image }}" alt="{{ $second_banner->first_thumbnail_title }}">
                            <div class="shop-title">
                                <a href="{{ $second_banner->first_thumbnail_link }}">
                                    <span>{{ $second_banner->first_thumbnail_title }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-shop-thumb">
                                <img src="{{ env('APPI_URL').'/images/slider/'.$second_banner->second_thumbnail_image }}" alt="{{ $second_banner->second_thumbnail_title }}">
                                <div class="shop-title">
                                    <a href="{{ $second_banner->second_thumbnail_link }}">
                                        <span>{{ $second_banner->second_thumbnail_title }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="single-shop-thumb">
                                <img src="{{ env('APPI_URL').'/images/slider/'.$second_banner->third_thumbnail_image }}" alt="{{ $second_banner->third_thumbnail_title }}">
                                <div class="shop-title">
                                    <a href="{{ $second_banner->third_thumbnail_link }}">
                                        <span>{{ $second_banner->third_thumbnail_title }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="single-shop-thumb mt-3">
                                <img src="{{ env('APPI_URL').'/images/slider/'.$second_banner->fourth_thumbnail_image }}" alt="{{ $second_banner->fourth_thumbnail_title }}">
                                <div class="shop-title">
                                    <a href="{{ $second_banner->fourth_thumbnail_link }}">
                                        <span>{{ $second_banner->fourth_thumbnail_title }}</span>
                                    </a>
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
    @forelse ($sections as $section)
        <section class="section">
            <div class="container-fluid">
                <div class="row color_bg">
                    <div class="col-12">
                        <div>
                            <div class="section-title-1 clearfix">
                                <h3 class="heading-5 strong-700 mb-0 float-left">
                                    <span class="mr-4"> {{ $section->title }}
                                    </span>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 margin-top10-m">
                                    <div class="caorusel-box arrow-round gutters-5">
                                        <div class="slick-carousel" data-slick-items="6" data-slick-xl-items="5"
                                            data-slick-lg-items="4" data-slick-md-items="3" data-slick-sm-items="2"
                                            data-slick-xs-items="2">
                                                @foreach ($section->all_products as $product)
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
    @empty

    @endforelse

    <!--products carousel end-->

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

    <section class="section">
        <div class="container-fluid">
            <div class="row color_bg">
                <div class="col-12">
                    <div>
                        <div class="section-title-1 clearfix">
                            <h3 class="heading-5 strong-700 mb-0 float-left">
                                <span class="mr-4"> Customer Review </span>
                            </h3>
                        </div>

                        <div class="row">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
