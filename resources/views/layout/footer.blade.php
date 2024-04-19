<!--four grid end-->
<footer id="footer" class="footer">
    <div class="footer-top">

        <div class="container-fluid">
            <div class="row cols-xs-space cols-sm-space cols-md-space">

                <div class="col-lg-3 col-md-3 col-sm-6 col-12 footer-box">
                    <div class="col text-center text-md-left">
                        <div id="facebook">
                            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/konamartbd/" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;height=200&amp;hide_cover=false&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" role="tablist"><span style="vertical-align: bottom; width: 300px; height: 200px;"><iframe name="fa6bc9086bc8c191a" width="300px" height="200px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;height=200&amp;hide_cover=false&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 200px;" class=""></iframe></span></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 footer-box">
                    <div class="col text-center text-md-left">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                            Contact Info
                        </h4>
                        <a href="index.html" class="d-block footer-logo">
                            <img loading="lazy" src="{{ env('APPI_URL').'/logo/'.$settings->site_logo }}"
                                alt="KonaMart" height="44">
                        </a>
                        <ul class="footer-links contact-widget">
                            <li>
                                <span class="d-block opacity-5">Address: </span>
                                <span class="d-block">{{ $settings->address }}</span>
                            </li>
                            <li>
                                <span class="d-block opacity-5">Phone:</span>
                                <span class="d-block">{{ $settings->phone }}</span>
                            </li>
                            <li>
                                <span class="d-block opacity-5">Email:</span>
                                <span class="d-block">
                                    <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 footer-box">
                    <div class="col text-center text-md-left">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                            Useful Link
                        </h4>
                        <ul class="footer-links">
                            <li>
                                <a href="{{ route('aboutUs') }}" title="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contactUs') }}" title="">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('termsCond') }}" title="">
                                    Terms &amp; Condition
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('returnPolicy') }}" title="">
                                    Return Policy
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('storeLocation') }}" title="">
                                    Store Location
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3 sct-color-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="copyright text-center text-md-left">
                        <ul class="copy-links no-margin">
                            <li>
                                © {{ date('Y')}} {{ $settings->site_title }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="payment-icom"><img src="{{ asset('assets/frontend/images/payment-options.png') }}" width="100%">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center text-md-right">
                        <p class="powered-by">Powered by <a href="" target="_blank">{{ $settings->developed_by }}</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--mobile menu bar-->
    <div class="aiz-mobile-bottom-nav fixed-bottom bg-white shadow-lg border-top">
        <div class="d-flex justify-content-around align-items-center">
            <a href="/" class="text-reset flex-grow-1 text-center py-3 border-right bg-soft-primary ">
                <img src="{{ asset('assets/frontend/images/menubar/Home2.png') }}" width="50">
            </a>
            <a href="#!"
                class="text-reset flex-grow-1 text-center py-3 border-right bg-soft-primary toggle_mobilemenu_bar">
                <img src="{{ asset('assets/frontend/images/menubar/Categories.png') }}" width="50">
            </a>
            <a href="/" class="text-reset flex-grow-1 text-center py-3 border-right position-relative">
                <span class="mobile-menubar-logo"><img src="{{ env('APPI_URL').'/logo/'.$settings->site_logo }}"
                        width="60"></span>
            </a>
            <a href="#!" class="flex-grow-1 text-center py-3 border-right toggle_cart_bar">
                <img src="{{ asset('assets/frontend/images/menubar/cart11.png') }}" width="50">
                <span class="badge footer_cart_items_sidenav" id="cart_items_sidenav">0</span>
            </a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-reset flex-grow-1 text-center py-2">
                    <span class="avatar avatar-sm d-block mx-auto">
                        <img src="{{ asset('assets/frontend/images/menubar/User.png') }}" width="50">
                    </span>
                </a>
            @else
                <a href="{{ route('login') }}" class="text-reset flex-grow-1 text-center py-2">
                    <span class="avatar avatar-sm d-block mx-auto">
                        <img src="{{ asset('assets/frontend/images/menubar/User.png') }}" width="50">
                    </span>
                </a>
            @endauth
        </div>
    </div>
</footer>
