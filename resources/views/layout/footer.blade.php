<!--four grid end-->
<footer id="footer" class="footer">
    <div class="footer-top">

        <div class="container-fluid">
            <div class="row cols-xs-space cols-sm-space cols-md-space">

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
                                <a href="AboutUs.html" title="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Terms &amp; Condition
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    Return Policy
                                </a>
                            </li>
                            <li>
                                <a href="outlets.html" title="">
                                    Store Location
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-6 footer-box">
                    <div class="col text-center text-md-left">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                            My Account
                        </h4>

                        <ul class="footer-links">
                            <li>
                                <a href="users/login.html">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="users/login.html">
                                    My Wishlist
                                </a>
                            </li>
                            <li>
                                <a href="track_your_order.html">
                                    Track Order
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-6 footer-box text-center text-md-left">
                    <div class="col">

                        <p class="mt-3"></p>
                        <div class="d-inline-block d-md-block">
                            <form class="form-inline" method="POST" action="">
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="Your Email Address"
                                        name="email1" required>
                                </div>
                                <button type="submit" class="btn btn-base-1 btn-icon-left">
                                    Subscribe
                                </button>
                            </form>
                            <div class="payment-icom"><img src="{{ asset('assets/frontend/images/payment.png') }}" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3 sct-color-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="copyright text-center text-md-left">
                        <ul class="copy-links no-margin">
                            <li>
                                © {{ date('Y')}} {{ $settings->site_title }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="text-center my-3 my-md-0 social-nav model-2">
                        <li>
                            <a href="{{ $settings->facebook }}" class="facebook" target="_blank"
                                data-toggle="tooltip" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->instagram }}" class="instagram" target="_blank"
                                data-toggle="tooltip" data-original-title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->twitter }}" class="twitter" target="_blank" data-toggle="tooltip"
                                data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $settings->youtube }}" class="youtube" target="_blank" data-toggle="tooltip"
                                data-original-title="Youtube">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
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

            <a href="#!" class="text-reset flex-grow-1 text-center py-2 toggle_userpanel_bar">
                <span class="avatar avatar-sm d-block mx-auto">
                    <img src="{{ asset('assets/frontend/images/menubar/User.png') }}" width="50">
                </span>
            </a>
        </div>
    </div>
</footer>
