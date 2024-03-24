@include('layout.side-bar')

<div class="header bg-white">
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col">
                    <ul class="inline-links d-lg-inline-block d-flex justify-content-between">
                        <li>
                            <p class="hotline top">Call: {{ $settings->phone }}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-6 text-center">
                </div>
                <div class="col-3 text-right d-none d-lg-block">
                    <ul class="inline-links">
                        <li>
                            <a href="track_your_order.html" class="top-bar-item">Track Order</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="top-bar-item">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('signup') }}" class="top-bar-item">Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Top Bar -->

    <!-- mobile menu -->
    <div class="mobile-side-menu d-lg-none">
        <div class="side-menu-overlay opacity-0" onclick="sideMenuClose()"></div>
        <div class="side-menu-wrap opacity-0">
            <div class="side-menu closed">
                <div class="side-menu-header ">
                    <div class="side-menu-close" onclick="sideMenuClose()">
                        <i class="la la-close"></i>
                    </div>

                    <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                        <div class="image "
                            style="background-image:url('public/frontend/images/icons/user-placeholder.jpg')"></div>
                    </div>
                    <div class="side-login px-3 pb-3">
                        <a href="{{ route('login') }}">Sign In</a>
                        <a href="{{ route('signup') }}">Registration</a>
                    </div>
                </div>
                <div class="side-menu-list px-3">
                    <!--mobile menu-->
                    <ul class="menu-siderbar nav flex-column">
                        @forelse (\App\Category::where('is_active', 1)->whereNull('parent_id')->get() as $parrent_category)
                            @if(count($parrent_category->subcategory) > 0)
                                <li class="nav-item">
                                    <a class="nav-link nav-link-parent"> {{ $parrent_category->name }} </a>
                                    <ul class="menu-siderbar-child nav flex-column">
                                        @foreach ($parrent_category->subcategory as $subcategory)
                                            <li> 
                                                @if(count($subcategory->subcategory) > 0)
                                                    <a href="index.html"> <strong style="color:; font-weigh" class="text-uppercase"> {{ $subcategory->name }} </strong> </a>
                                                    <ul class="menu-siderbar-child nav flex-column">
                                                        @foreach ($subcategory->subcategory as $childcategory)
                                                            <li>
                                                                <a href="" class="text-uppercase">{{ $childcategory->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <a href="" class="text-uppercase"> {{ $subcategory->name }} </a>
                                                @endif
                                            </li>
                                        @endforeach 
                                    </ul>
                                </li>
                            @else
                                <a href="" class="text-uppercase"> {{ $parrent_category->name }} </a>
                            @endif
                        @empty
                        @endforelse
                        
                        <li class="nav-item">
                            <a href="users/login.html" class="nav-link">
                                <i class="la la-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="users/login.html" class="nav-link">
                                <i class="la la-file-text"></i>
                                <span>My Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="compare.html" class="nav-link">
                                <i class="la la-refresh"></i>
                                <span>Compare</span>
                                <span class="badge" id="compare_items_sidenav">0</span>
                            </a>
                        </li>
                                        
                        <li class="nav-item">
                            <a href="cart.html" class="nav-link">
                                <i class="la la-shopping-cart"></i>
                                <span>Cart</span>
                                <span class="badge" id="cart_items_sidenav">0</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users/login.html" class="nav-link">
                                <i class="la la-heart-o"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="users/login.html" class="nav-link">
                                <i class="la la-dollar"></i>
                                <span>My Wallet</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="users/login.html" class="nav-link">
                                <i class="la la-user"></i>
                                <span>Manage Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile menu -->

    <div class="position-relative logo-bar-area">
        <div class="logo-searchbar">
            <div class="container-fluid">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="d-flex header-logo">
                            <div class="d-block d-lg-none mobile-menu-icon-box">
                                <!-- Navbar toggler  -->
                                <a href="#" onclick="sideMenuOpen(this)">
                                    <div class="hamburger-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                               
                            <!-- Brand/Logo -->
                            <a class="navbar-brand w-100" href="/">
                                <img src="{{ env('APPI_URL').'/logo/'.$settings->site_logo }}" style="height: 60px;" height="60px" alt="{{ $settings->site_title }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6 position-static">
                        <div class="d-flex w-100">
                            <div class="search-box flex-grow-1 px-4">
                                <form action="https://dorjibari.com.bd/search" method="GET">
                                    <div class="d-flex position-relative">
                                        <div class="d-lg-none search-box-back">
                                            <button class="" type="button"><i class="la la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="form-group category-select d-none d-xl-block">
                                            <select class="form-control selectpicker" name="category">
                                                <option value="">All</option>
                                                @forelse (\App\Category::where('is_active', 1)->get() as $category)
                                                    <option value="men-tops" class="text-capitalize">{{ $category->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="w-100">
                                            <input type="text" aria-label="Search" id="search" name="q" class="w-100" placeholder="I am shopping for..." autocomplete="off">
                                        </div>
                                        
                                        <button class="d-none d-lg-block" type="submit">
                                            <i class="la la-search la-flip-horizontal"></i>
                                        </button>
                                        <div class="typed-search-box d-none">
                                            <div class="search-preloader">
                                                <div class="loader">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="search-nothing d-none">

                                            </div>
                                            <div id="search-content">

                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="logo-bar-icons d-inline-block ml-auto">
                                <div class="d-inline-block d-lg-none">
                                    <div class="nav-search-box">
                                        <a href="#" class="nav-box-link">
                                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                <div class="d-inline-block">
                                    <div class="nav-cart-box  toggle_notification_bar" id="notification_items">
                                        <a href="#!" class="nav-box-link">
                                            <i class="la la-bell d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block"></span>
                                            <span class="nav-box-number new-notice-count">0</span>
                                        </a>
                                        
                                    </div>
                                </div>
                                
                                <div class="d-none d-lg-inline-block">
                                    <div class="nav-wishlist-box" id="wishlist">
                                        <a href="users/login.html" class="nav-box-link">
                                            <i class="la la-heart-o d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block"></span>
                                            <span class="nav-box-number">0</span>
                                        </a>
                                    </div>
                                </div>
            
                                <div class="d-inline-block">
                                    <div class="nav-cart-box  toggle_cart_bar" id="cart_items">
                                        <a href="#!" class="nav-box-link">
                                            <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block"></span>
                                            <span class="nav-box-number">0</span>
                                        </a>
                                    </div>
                                </div>
                                
                                
                                <div class="d-inline-block">
                                    <div class="nav-cart-box toggle_userpanel_bar">
                                        <a href="#!" class="nav-box-link">
                                            <i class="la la-user d-inline-block nav-box-icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--menu-->
        <div class="nav-area">
            <div class="container-fluid">
                <div class="row">
                                    
                    <div class="col-lg-12 col-12 hide-mobile">
                        <!-- drop down Main menu-->
                        <ul class="main-navigation" style="color:#fff; letter-spacing:.5px;">
                            @forelse (\App\Category::where('is_active', 1)->whereNull('parent_id')->get() as $parrent_category)
                                <li>
                                    @if(count($parrent_category->subcategory) > 0)
                                        <a href=""> <strong style="color:; font-weigh" class="text-uppercase"> {{ $parrent_category->name }} </strong> </a>
                                        <ul>
                                            @foreach ($parrent_category->subcategory as $subcategory)
                                                <li> 
                                                    @if(count($subcategory->subcategory) > 0)
                                                        <a href=""> <strong style="color:; font-weigh" class="text-uppercase"> {{ $subcategory->name }} </strong> </a>
                                                        <ul>
                                                            @foreach ($subcategory->subcategory as $childcategory)
                                                                <li>
                                                                    <a href="" class="text-uppercase">{{ $childcategory->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <a href="" class="text-uppercase"> {{ $subcategory->name }} </a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <a href="" class="text-uppercase"><strong style="color:; font-weigh"> {{ $parrent_category->name }} </strong> </a>
                                    @endif
                                </li>
                            @empty
                            @endforelse

                            {{-- <li>
                                <a href="category/eid-collection.html" style="color: rgb(255, 255, 0);"> <strong style="Color:#c52032;"> EID COLLECTION'24 </strong></a>
                                <ul>

                                </ul>
                            </li> --}}

                        </ul>

                        <!-- end drop down menu-->
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</div>
                


                                
         
