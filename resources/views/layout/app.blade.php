<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@php
    $settings = \App\Settings::first();
@endphp
<head>


    <meta name="csrf-token" content="iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>@yield('title') - {{ $settings->site_title ?? ''}}</title>
    <meta name="description"
        content="Swapon&#039;s World is the best Bangladeshi Fashion and Lifestyle Online Shopping site for Men, Women &amp; Kids, Couple Matching, Family Matching, Accessories, Watches, Shoes, Footwear and more from your favorite online fashion store." />
    <meta name="keywords"
        content="online shopping,ecommerce bd,ecommerce marketplace,panjabi,Kameez, Shirt,T-Shirt,Couple Collection,Pant, Puja Collection,Eid Collection,kids collection, boys, girls,baby panjabi, Half Shirt, Full Shirt, Puja panjabi, Boishaki Panjabi,winter collection,win">
    <meta name="author" content="Swapons World">
    <meta name="sitemap_link" content="https://swaponsworld.com/sitemap.xml">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $settings->site_title ?? ''}}">
    <meta itemprop="description"
        content="Swapon&#039;s World is the best Bangladeshi Fashion and Lifestyle Online Shopping site for Men, Women &amp; Kids, Couple Matching, Family Matching, Accessories, Watches, Shoes, Footwear and more from your favorite online fashion store.">
    <meta itemprop="image" content="{{ asset('assets/uploads/logo/j9ykYTzKpHuXDWT48L7j5jksiJ8J97NZHuC4o3kn.jpg') }}">

    <!-- Favicon -->
    <link type="image/x-icon" href="{{ asset('assets/uploads/favicon/qp1DZiqbN06mHdUK1tIQYwufgTtJXnOeIrLoJGcs.jpg') }}"
        rel="shortcut icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/line-awesome.min.css') }}" type="text/css">

    <link type="text/css" href="{{ asset('assets/frontend/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/jodit.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/slick.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/xzoom.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/jssocials.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/jssocials-theme-flat.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/intlTelInput.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/spectrum.css') }}" rel="stylesheet">

    <!-- Global style (main) -->
    <link type="text/css" href="{{ asset('assets/frontend/css/techopz-core.css') }}" rel="stylesheet">


    <link type="text/css" href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet">

    <!-- color theme -->
    <link href="{{ asset('assets/frontend/css/colors/7.css') }}" rel="stylesheet">

    <!-- Custom style -->
    <link type="text/css" href="{{ asset('assets/frontend/css/custom-style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/frontend/css/techopze67d.css?v=1.3') }}" rel="stylesheet">
    <!-- Custom style -->

    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery.min.js') }}"></script>


    <script async src="{{ asset('assets/js/bootstrap-sidermenu.js') }}"></script>
    <link type="text/css" href="{{ asset('assets/css/bootstrap-sidermenu.css') }}" rel="stylesheet" media="all">

    @stack('css')

    @stack('header-script')
</head>

<body class="home">

    <div class="overlay_wrapper">

    </div>
    <!-- MAIN WRAPPER -->


    <div class="body-wrap shop-default shop-cards shop-tech gry-bg">
        @include('layout.navigation')
        
        @yield('content')

        @include('layout.footer')

        <script>
            function confirm_modal(delete_url) {
                jQuery('#confirm-delete').modal('show', {
                    backdrop: 'static'
                });
                document.getElementById('delete_link').setAttribute('href', delete_url);
            }
        </script>

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                    </div>

                    <div class="modal-body">
                        <p>Delete confirmation message</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addToCart">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
                role="document">
                <div class="modal-content position-relative">
                    <div class="c-preloader">
                        <i class="fa fa-spin fa-spinner"></i>
                    </div>
                    <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="addToCart-modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- POP UP MODEL START-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!--Modal content start-->
                <div class="modal-content popupmodelcontent"
                    style="top:60px;border: 0px solid transparent !important;">
                    <button type="button" class="close" data-dismiss="modal"
                        style="position: absolute;float: right;right: 5px;z-index:9999;">&times;</button>

                    <a style="position:absolute;width:100%;"
                        href="https://swaponsworld.com/category/valentine-falgun-2022"><img style="width:100%;"
                            src="public/uploads/popup/1642517432.jpg" alt=""></a>

                </div>
                <!--Modal content end-->
            </div>
        </div>

    </div>
    <script>
        var user_panel_show = 0;
        var cart_show = 0;
        var notification_show = 0;

        $(".toggle_notification_bar").on("click", function() {
            if (user_panel_show == 1) {
                $(".toggle_userpanel_bar").click();
            }
            if (notification_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.notification").css('width', 0);
                $(".sidemenu.notification").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                notification_show = 0;
            } else {




                $('body').addClass("overlay");
                $(".sidemenu.notification").css('width', "360px");
                $(".sidemenu.notification").css('margin-left', "360px");
                $(".close_cart").css('width', "30px");
                notification_show = 1;
            }

        });


        $(".toggle_cart_bar").on("click", function() {
            if (user_panel_show == 1) {
                $(".toggle_userpanel_bar").click();
            }
            if (cart_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.cart").css('width', 0);
                $(".sidemenu.cart").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                cart_show = 0;
            } else {
                $('body').addClass("overlay");
                $(".sidemenu.cart").css('width', "360px");
                $(".sidemenu.cart").css('margin-left', "360px");
                $(".close_cart").css('width', "30px");
                cart_show = 1;
            }

        });




        $(".toggle_mobilemenu_bar").on("click", function() {
            $(".mobile-menu-icon-box a").click();

        });


        $(".toggle_userpanel_bar").on("click", function() {


            if (cart_show == 1) {
                $(".toggle_cart_bar").click();
            }



            if (user_panel_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.userpanel").css('width', 0);
                $(".sidemenu.userpanel").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                user_panel_show = 0;
            } else {
                $('body').addClass("overlay");

                $(".sidemenu.userpanel").css('width', "360px");
                $(".sidemenu.userpanel").css('margin-left', "360px");
                user_panel_show = 1;
                $(".close_cart").css('width', "30px");
            }

        });


        $(".close_cart").on("click", function() {

            if (user_panel_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.userpanel").css('width', 0);
                $(".sidemenu.userpanel").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                user_panel_show = 0;
            }

            if (cart_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.cart").css('width', 0);
                $(".sidemenu.cart").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                cart_show = 0;
            }

            if (notification_show == 1) {
                $('body').removeClass("overlay");
                $(".sidemenu.notification").css('width', 0);
                $(".sidemenu.notification").css('margin-left', 0);
                $(".close_cart").css('width', 0);

                notification_show = 0;
            }



        });



        $(".overlay_wrapper").on("click", function() {
            $(".close_cart").click();

        });
    </script>



    <script src="{{ asset('assets/frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Plugins: Sorted A-Z -->
    <script async src="{{ asset('assets/frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>
    <script async src="{{ asset('assets/frontend/js/nouislider.min.js') }}"></script>
    <script async src="{{ asset('assets/frontend/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script async src="{{ asset('assets/frontend/js/jssocials.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap-tagsinput.min.js') }}"></script>
    <!--script src="https://dorjibari.com.bd/{{ asset('assets/frontend/js/jodit.min.js') }}"></script -->

    <script src="{{ asset('assets/frontend/js/xzoom.min.js') }}"></script>
    <script async src="{{ asset('assets/frontend/js/fb-script.js') }}"></script>
    <script async src="{{ asset('assets/frontend/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/intlTelInput.min.js') }}"></script>

    <!-- App JS -->
    <script async src="{{ asset('assets/frontend/js/active-shop.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


    <script>
        function showFrontendAlert(type, message) {
            if (type == 'danger') {
                type = 'error';
            }
            swal({
                position: 'top-end',
                type: type,
                title: message,
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>




    <style>
        section.clothing-appareal.section .product-card-2 {
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
        }
    </style>
    <script>
        function readmore(id) {

            $.get('/notification-seen/' + id, function(data) {
                $(".new-notice-count").text(data);


            });


            var dots = document.getElementById("dots" + id);
            var moreText = document.getElementById("more" + id);
            var btnText = document.getElementById("myBtn" + id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }

        }

        $(document).ready(function() {

            $('.category-nav-element').each(function(i, el) {
                if ($(el).data('show') == 1) {
                    $(el).on('mouseover', function() {
                        if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                            /*
                            $.post('https://dorjibari.com.bd/category/nav-element-list', {_token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd', id:$(el).data('id')}, function(data){
                                $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                            });
                            */

                            $.post('menu/nav-element-list.html', {
                                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                                id: $(el).data('id')
                            }, function(data) {
                                $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                            });

                        }
                    });
                }
            });

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('language.html', {
                            _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('currency.html', {
                            _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var search = $('#search').val();
            if (search.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('ajax-search.html', {
                    _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                    search: search
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + search + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart() {
            $.post('cart/nav-cart-items.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd'
            }, function(data) {
                var obj = JSON.parse(data);
                $('#cart_items').html(obj.qty);
                $(".sidemenu.cart").html(obj.sidemenu);

            });
        }

        function removeFromCart(key) {
            $.post('cart/removeFromCart.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                key: key
            }, function(data) {
                updateNavCart();
                $('#cart-summary').html(data);
                showFrontendAlert('success', 'Item has been removed from cart');
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('compare/addToCompare.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                id: id
            }, function(data) {
                $('#compare').html(data);
                showFrontendAlert('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            showFrontendAlert('warning', "Please login first");
        }

        function showAddToCartModal(id) {

            $('#addToCart-modal-body').html(null);
            $('#modal-size').removeClass('modal-lg');

            $.post('cart/show-cart-modal.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').hide();
                $('#addToCart-modal-body').html(data);
                getVariantPrice();
                if ($('#option-choice-form input:radio:checked').length > 0) {
                    $('.xzoom, .xzoom-gallery').xzoom({
                        Xoffset: 20,
                        bg: true,
                        tint: '#000',
                        defaultScale: -1
                    });

                    //$('.c-preloader').show();
                    if (!$('#modal-size').hasClass('modal-lg')) {
                        $('#modal-size').addClass('modal-lg');
                    }
                    $('#addToCart-modal-body').show();
                    $('#addToCart').modal();
                } else {
                    addToCartDirect();
                }

            });
        }
        $('.out-of-stock').hide();
        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {

            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'https://dorjibari.com.bd/product/variant_price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.quantity);
                        //console.log(data.quantity);
                        if (parseInt(data.quantity) < 1 && data.digital != 1) {
                            $('.buy-now').hide();
                            $('.add-to-cart').hide();
                            $('.out-of-stock').show();
                        } else {
                            $('.buy-now').show();
                            $('.add-to-cart').show();
                            $('.out-of-stock').hide();
                        }
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').hide();
                $.ajax({
                    type: "POST",
                    url: 'https://dorjibari.com.bd/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                    }
                });
            } else {
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }


        function addToCartDirect() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').hide();
                $.ajax({
                    type: "POST",
                    url: 'https://dorjibari.com.bd/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#addToCart-modal-body').show();
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                    }
                });
            } else {
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }



        function buyNow() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://dorjibari.com.bd/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        //$('#addToCart-modal-body').html(null);
                        //$('.c-preloader').hide();
                        //$('#modal-size').removeClass('modal-lg');
                        //$('#addToCart-modal-body').html(data);
                        updateNavCart();
                        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                        window.location.replace("cart.html");
                    }
                });
            } else {
                showFrontendAlert('warning', 'Please choose all the options');
            }
        }

        function show_purchase_history_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('users/login.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }

        function show_order_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('login.html', {
                _token: 'iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd',
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }
        $('.btn-number').click(function(e) {
            debugger;
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').change(function() {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });

        function cartQuantityInitialize() {
            $('.btn-number').click(function(e) {

                e.preventDefault();
                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());

                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });

            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });

            $('.input-number').change(function() {
                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        }

        function imageInputInitialize() {
            $('.custom-input-file').each(function() {
                var $input = $(this),
                    $label = $input.next('label'),
                    labelVal = $label.html();

                $input.on('change', function(e) {
                    var fileName = '';

                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                            this.files.length);
                    else if (e.target.value)
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        $label.find('span').html(fileName);
                    else
                        $label.html(labelVal);
                });

                // Firefox bug fix
                $input
                    .on('focus', function() {
                        $input.addClass('has-focus');
                    })
                    .on('blur', function() {
                        $input.removeClass('has-focus');
                    });
            });
        }


        $(".filter_btn").on("click", function() {
            var elm = this;
            $(elm).parent().parent().parent().parent().find(".filter_items").html(
                "<img src='../wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif'>");
            var filter = $(this).attr("data-id");
            $(elm).parent().parent().find(".filter_btn").removeClass('active');
            $(elm).addClass("active");
            $.post("https://dorjibari.com.bd/filterby/" + filter, {
                    _token: "iNtkzvTG1ErtZ9B0NqVKTSlWt28dZrJlh627ewZd"
                },
                function(data, status) {
                    $(elm).parent().parent().parent().parent().find(".filter_items").html(data);
                });


        });




        $(".loadmore button").on("click", function() {
            var text = "Load More";
            $(this).html('Loading <i class="la la-spinner fa-spin"></i>');

            var page = (parseInt($(this).attr('data-page')) + 1);
            var elm = this;
            $.get("https://dorjibari.com.bd/loadmore/1?page=" + page, function(data, status) {
                $(elm).parent().parent().parent().find(".inifinityproducts").append(data);
                $(elm).html(text);
                $(elm).attr('data-page', page);
            });


        });


        $(window).scroll(function() {
            if ($(window).scrollTop() == ($(document).height() - $(window).height())) {

                var autoload = $(".loadmore button").attr('data-autoload');
                console.log(autoload);
                if (autoload == 1) {
                    $(".loadmore button").click();
                } else {

                }
            }
        });
    </script>

</body>

</html>
