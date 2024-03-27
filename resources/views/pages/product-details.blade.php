@extends('layout.app')
@section('title', 'Products')
@section('content')
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        @if ($category)
                            <li><a href="">{{ $category->name }}</a></li>
                        @endif
                        <li><a href="{{ route('products') }}">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="product-details-area gry-bg">
        <div class="container-fluid">
            <div class="bg-white">
                <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-6">
                        <div class="product-gal sticky-top d-flex flex-row-reverse">
                            <div class="product-gal-img">
                                <img src="../public/frontend/images/placeholder.jpg" class="xzoom img-fluid lazyload"
                                    src="../public/frontend/images/placeholder.jpg"
                                    data-src="https://dorjibari.com.bd/public/uploads/products/photos/GP2yxHglZ70uZnXUddqLs664WiYIddgyJfuaYIwa.jpeg"
                                    xoriginal="https://dorjibari.com.bd/public/uploads/products/photos/GP2yxHglZ70uZnXUddqLs664WiYIddgyJfuaYIwa.jpeg" />
                            </div>
                            <div class="product-gal-thumb">
                                <div class="xzoom-thumbs">
                                    <a
                                        href="../public/uploads/products/photos/GP2yxHglZ70uZnXUddqLs664WiYIddgyJfuaYIwa.jpg">
                                        <img src="../public/frontend/images/placeholder.jpg" class="xzoom-gallery lazyload"
                                            src="../public/frontend/images/placeholder.jpg" width="80"
                                            data-src="https://dorjibari.com.bd/public/uploads/products/photos/GP2yxHglZ70uZnXUddqLs664WiYIddgyJfuaYIwa.jpeg"
                                            xpreview="https://dorjibari.com.bd/public/uploads/products/photos/GP2yxHglZ70uZnXUddqLs664WiYIddgyJfuaYIwa.jpeg">
                                    </a>
                                    <a
                                        href="../public/uploads/products/photos/0pd4QybSqUlaDeNM7zLu6LWnpsMKxcRO9osTxMAL.jpg">
                                        <img src="../public/frontend/images/placeholder.jpg" class="xzoom-gallery lazyload"
                                            src="../public/frontend/images/placeholder.jpg" width="80"
                                            data-src="https://dorjibari.com.bd/public/uploads/products/photos/0pd4QybSqUlaDeNM7zLu6LWnpsMKxcRO9osTxMAL.jpeg">
                                    </a>
                                    <a
                                        href="../public/uploads/products/photos/N1f7Zj2losjzPO7pM1nRMfu8HbK55AtIKYurxEmR.jpg">
                                        <img src="../public/frontend/images/placeholder.jpg" class="xzoom-gallery lazyload"
                                            src="../public/frontend/images/placeholder.jpg" width="80"
                                            data-src="https://dorjibari.com.bd/public/uploads/products/photos/N1f7Zj2losjzPO7pM1nRMfu8HbK55AtIKYurxEmR.jpeg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Product description -->
                        <div class="product-description-wrapper">
                            <!-- Product title -->
                            <h1 class="product-title mb-2">
                                Fatua:Full Sleeve_Check_192#3
                            </h1>

                            <div class="row align-items-center my-1">
                                <div class="col-6">
                                    <!-- Rating stars -->
                                    <div class="rating">
                                        <span class="star-rating">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </span>
                                        <span>0</span>
                                        <span class="rating-count ml-1">(0 Reviews)</span>

                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <ul class="inline-links inline-links--style-1">

                                        <li>
                                            <span class="badge badge-md badge-pill bg-green">In stock</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <hr>
                            <div class="sku">
                                <div class="sku-text"><span class="title">SKU : </span> <span class="code">
                                        3480138403026_192#3 </span></div>
                            </div>
                            <hr>

                            <div class="row align-items-center">


                            </div>




                            <div class="row no-gutters mt-3">
                                <div class="col-2">
                                    <div class="product-description-label">Price:</div>
                                </div>
                                <div class="col-10">
                                    <div class="product-price">
                                        <strong>
                                            ৳1,590
                                        </strong>
                                    </div>
                                </div>
                            </div>


                            <hr>

                            <form id="option-choice-form">
                                <input type="hidden" name="_token" value="iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd">
                                <input type="hidden" name="id" value="5915">


                                <div class="row no-gutters">
                                    <div class="col-2">
                                        <div class="product-description-label mt-2 ">Size:</div>
                                    </div>
                                    <div class="col-10">
                                        <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                            <li>

                                                <input type="radio" id="1-M" name="attribute_id_1" value="M"
                                                    checked>
                                                <label for="1-M">M</label>
                                            </li>
                                            <li>

                                                <input type="radio" id="1-L" name="attribute_id_1" value="L">
                                                <label for="1-L">L</label>
                                            </li>
                                            <li>

                                                <input type="radio" id="1-XL" name="attribute_id_1" value="XL">
                                                <label for="1-XL">XL</label>
                                            </li>
                                            <li>

                                                <input type="radio" id="1-XXL" name="attribute_id_1" value="XXL">
                                                <label for="1-XXL">XXL</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <!-- Quantity + Add to cart -->
                                <div class="row no-gutters">
                                    <div class="col-2">
                                        <div class="product-description-label mt-2">Quantity:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-quantity d-flex align-items-center">
                                            <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus"
                                                        data-field="quantity" disabled="disabled">
                                                        <i class="la la-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity"
                                                    class="form-control h-auto input-number text-center" placeholder="1"
                                                    value="1" min="1" max="10">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus"
                                                        data-field="quantity">
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </span>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                    <div class="col-2">
                                        <div class="product-description-label">Total Price:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price">
                                            <strong id="chosen_price">

                                            </strong>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <!--offer box-->
                            <div class="offer-box"></div>
                            <!--end offer box-->

                            <div class="d-table width-100 mt-3">
                                <div class="d-table-cell">
                                    <!-- Buy Now button -->

                                    <button type="button"
                                        class="btn btn-styled btn-base-1 btn-icon-left strong-700 hov-bounce hov-shaddow buy-now"
                                        onclick="buyNow()">
                                        <i class="la la-shopping-cart"></i> Buy Now
                                    </button>
                                    <button type="button"
                                        class="btn btn-styled btn-alt-base-1 c-white btn-icon-left strong-700 hov-bounce hov-shaddow ml-2 add-to-cart"
                                        onclick="addToCart()">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="d-md-inline-block"> Add to cart</span>
                                    </button>
                                    <button type="button"
                                        class="out-of-stock btn btn-styled btn-base-3 btn-icon-left strong-700">
                                        <i class="la la-cart-arrow-down"></i> Out of Stock
                                    </button>
                                </div>
                            </div>



                            <div class="d-table width-100 mt-3">
                                <div class="d-table-cell">
                                    <!-- Add to wishlist button -->
                                    <button type="button" class="btn pl-0 btn-link strong-700"
                                        onclick="addToWishList(5915)">
                                        Add to wishlist
                                    </button>
                                    <!-- Add to compare button -->
                                    <button type="button" class="btn btn-link btn-icon-left strong-700"
                                        onclick="addToCompare(5915)">
                                        Add to compare
                                    </button>
                                </div>
                            </div>

                            <hr class="mt-2">





                            <div class="row no-gutters mt-4">
                                <div class="col-12">
                                    <h4 class="summary-details">Product Summary:</h4>
                                    <img src="../public/uploads/media/1710157434.jpg" alt="Size guide"
                                        style="width: 426px; height: 183px;">
                                    <p>Product Name:&nbsp;Fatua:Full Sleeve_Check</p>
                                    <p>Fabric Pattern: 100% COTTON<br></p>
                                    <p>Color Name: Multi</p>
                                </div>
                            </div>
                            <div class="row no-gutters mt-4">
                                <div class="col-2">
                                    <div class="product-description-label mt-2">Share:</div>
                                </div>
                                <div class="col-10">
                                    <div id="share">
                                        <!-- AddToAny BEGIN -->
                                        <div>
                                            <a href="https://www.addtoany.com/add_to/facebook?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img
                                                    src="https://static.addtoany.com/buttons/facebook.svg" width="32"
                                                    height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/twitter?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg"
                                                    width="32" height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/email?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img src="https://static.addtoany.com/buttons/email.svg"
                                                    width="32" height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img
                                                    src="https://static.addtoany.com/buttons/whatsapp.svg" width="32"
                                                    height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/linkedin?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img
                                                    src="https://static.addtoany.com/buttons/linkedin.svg" width="32"
                                                    height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/telegram?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img
                                                    src="https://static.addtoany.com/buttons/telegram.svg" width="32"
                                                    height="32" style="background-color:royalblue"></a>
                                            <a href="https://www.addtoany.com/add_to/facebook_messenger?linkurl=dorjibari.com.bd&amp;linkname=swapons"
                                                target="_blank"><img
                                                    src="https://static.addtoany.com/buttons/facebook_messenger.svg"
                                                    width="32" height="32" style="background-color:royalblue"></a>
                                        </div>
                                        <!-- AddToAny END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gry-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="seller-info-box mb-3">
                        <div class="sold-by position-relative">
                            <div class="title">Sold By</div>
                            Dorjibari

                            <div class="rating text-center d-block">
                                <span class="star-rating star-rating-sm d-block">
                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                        class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
                                </span>


                                <span class="rating-count d-block ml-0">(0 Customer reviews)</span>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center">
                        </div>
                    </div>
                    <div class="seller-top-products-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            Top Selling Products From This Seller
                        </div>
                        <div class="box-content">
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="FatuaFull-Sleeve-Solid1861-78vzz.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/0d794UGgzXCAnXNc2wISC9jJp25ilT7F1dAj1uYy.jpeg"
                                                alt="Fatua:Full Sleeve  Solid 186#1">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="FatuaFull-Sleeve-Solid1861-78vzz.html" class="d-block">Fatua:Full
                                                Sleeve_ Solid_186#1</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳1,690</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="ShirtFull-SleeveTrendy-Fit--Solid4033-qpidk.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/HesJu5XAsvMeC7t6JQHc6Fkggl2XtglLhHontP7N.jpeg"
                                                alt="Shirt:Full Sleeve Trendy Fit   Solid 403#3">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="ShirtFull-SleeveTrendy-Fit--Solid4033-qpidk.html"
                                                class="d-block">Shirt:Full Sleeve_Trendy Fit_ Solid_403#3</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳1,690</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="PanjabiSemi-Fit-Jacquard3081-Sn2On.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/T7WODDByIWKSJ9iq4dYVF8QAKFSoAuOjmN17Fsjs.jpeg"
                                                alt="Panjabi Semi Fit  Jacquard 308#1">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="PanjabiSemi-Fit-Jacquard3081-Sn2On.html" class="d-block">Panjabi_Semi
                                                Fit_ Jacquard_308#1</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳2,790</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="PoloShort-SleeveSemi-FitSolid1222-Dp7lQ.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/ZSI7Bl3WquZPKKB5XjR0u3F9CSZDXzarMk522Wvn.jpeg"
                                                alt="Polo:Short Sleeve Semi Fit Solid 122#2">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="PoloShort-SleeveSemi-FitSolid1222-Dp7lQ.html"
                                                class="d-block">Polo:Short Sleeve_Semi Fit_Solid_122#2</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳1,390</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="ShirtFull-SleeveTrendy-Fit--Solid4032-N0F8M.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/u5TU1RbvoJkGNpif8qlV7k0aEkBVohwOeaMUB6rZ.jpeg"
                                                alt="Shirt:Full Sleeve Trendy Fit   Solid 403#2">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="ShirtFull-SleeveTrendy-Fit--Solid4032-N0F8M.html"
                                                class="d-block">Shirt:Full Sleeve_Trendy Fit_ Solid_403#2</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳1,690</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 product-box-3">
                                <div class="clearfix">
                                    <div class="product-image float-left">
                                        <a href="ShirtFull-SleeveTrendy-Fit--Solid4031-MVUuP.html">
                                            <img class="img-fit lazyload" src="../public/frontend/images/placeholder.jpg"
                                                data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/4F3d3ITXB3bGShYKrzY98iIb2WyYcIMtcMDBbjxe.jpeg"
                                                alt="Shirt:Full Sleeve Trendy Fit   Solid 403#1">
                                        </a>
                                    </div>
                                    <div class="product-details float-left">
                                        <h4 class="title text-truncate">
                                            <a href="ShirtFull-SleeveTrendy-Fit--Solid4031-MVUuP.html"
                                                class="d-block">Shirt:Full Sleeve_Trendy Fit_ Solid_403#1</a>
                                        </h4>
                                        <div class="star-rating star-rating-sm mt-1">
                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                class = 'fa fa-star'></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price strong-600">৳1,690</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="product-desc-tab bg-white">
                        <div class="tabs tabs--style-2">
                            <ul class="nav nav-tabs justify-content-center sticky-top bg-white">
                                <li class="nav-item">
                                    <a href="#tab_default_1" data-toggle="tab"
                                        class="nav-link text-uppercase strong-600 active show">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_default_5" data-toggle="tab"
                                        class="nav-link text-uppercase strong-600">Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="tab_default_1">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mw-100 overflow--hidden aiz-product-description">
                                                    <p>Fabric Pattern: 100% COTTON<br></p>
                                                    <p>Color Name:&nbsp;Multi</p>
                                                    <p>[NB: Actual colour of the product may vary slightly due to
                                                        photographic lighting sources or your device.]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_default_2">
                                    <div class="fluid-paragraph py-2">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9 mb-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_3">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="../public/index.html">Download</a>
                                            </div>
                                        </div>
                                        <span class="space-md-md"></span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_4">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mw-100 overflow--hidden aiz-product-information">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_5">
                                    <div class="fluid-paragraph py-4">

                                        <div class="text-center">
                                            There have been no reviews for this product yet.
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="my-4 bg-white p-3">
                        <div class="section-title-1">
                            <h3 class="heading-5 strong-700 mb-0">
                                <span class="mr-4">Related products</span>
                            </h3>
                        </div>
                        <div class="caorusel-box arrow-round gutters-5">
                            <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="2"
                                data-slick-lg-items="3" data-slick-md-items="2" data-slick-sm-items="1"
                                data-slick-xs-items="1" data-slick-rows="2">
                                <div class="caorusel-card my-1">
                                    <div class="row no-gutters product-box-2 align-items-center">
                                        <div class="col-5">
                                            <div class="position-relative overflow-hidden h-100">
                                                <a href="FatuaFull-Sleeve-Solid1861-78vzz.html"
                                                    class="d-block product-image h-100 text-center">
                                                    <img class="img-fit lazyload"
                                                        src="../public/frontend/images/placeholder.jpg"
                                                        data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/0d794UGgzXCAnXNc2wISC9jJp25ilT7F1dAj1uYy.jpeg"
                                                        alt="Fatua:Full Sleeve_ Solid_186#1">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 border-left">
                                            <div class="p-3">
                                                <h2 class="product-title mb-0 p-0 text-truncate">
                                                    <a href="FatuaFull-Sleeve-Solid1861-78vzz.html">Fatua:Full Sleeve_
                                                        Solid_186#1</a>
                                                </h2>
                                                <div class="star-rating star-rating-sm mb-2">
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="price-box float-left">
                                                        <span class="product-price strong-600">৳1,690</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caorusel-card my-1">
                                    <div class="row no-gutters product-box-2 align-items-center">
                                        <div class="col-5">
                                            <div class="position-relative overflow-hidden h-100">
                                                <a href="FatuaFull-Sleeve-Dobby1942-C7YEm.html"
                                                    class="d-block product-image h-100 text-center">
                                                    <img class="img-fit lazyload"
                                                        src="../public/frontend/images/placeholder.jpg"
                                                        data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/NPd7rCaC9TDFj39gkC9SmWsMjq11IdSwOe95DAC2.jpeg"
                                                        alt="Fatua:Full Sleeve_ Dobby_194#2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 border-left">
                                            <div class="p-3">
                                                <h2 class="product-title mb-0 p-0 text-truncate">
                                                    <a href="FatuaFull-Sleeve-Dobby1942-C7YEm.html">Fatua:Full Sleeve_
                                                        Dobby_194#2</a>
                                                </h2>
                                                <div class="star-rating star-rating-sm mb-2">
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="price-box float-left">
                                                        <span class="product-price strong-600">৳1,590</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caorusel-card my-1">
                                    <div class="row no-gutters product-box-2 align-items-center">
                                        <div class="col-5">
                                            <div class="position-relative overflow-hidden h-100">
                                                <a href="FatuaFull-Sleeve-Print1882-FHNi5.html"
                                                    class="d-block product-image h-100 text-center">
                                                    <img class="img-fit lazyload"
                                                        src="../public/frontend/images/placeholder.jpg"
                                                        data-src="https://dorjibari.com.bd/public/uploads/products/thumbnail/Cbl1maFwRyWkrpKzFN6KJTGcseI7sGEjAfBzCh2U.jpeg"
                                                        alt="Fatua:Full Sleeve_ Print_188#2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 border-left">
                                            <div class="p-3">
                                                <h2 class="product-title mb-0 p-0 text-truncate">
                                                    <a href="FatuaFull-Sleeve-Print1882-FHNi5.html">Fatua:Full Sleeve_
                                                        Print_188#2</a>
                                                </h2>
                                                <div class="star-rating star-rating-sm mb-2">
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i
                                                        class = 'fa fa-star'></i>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="price-box float-left">
                                                        <span class="product-price strong-600">৳1,590</span>
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


    @push('script')
        <script></script>
    @endpush
@endsection
