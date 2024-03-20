<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <script>
        var BASE_URL = WEB_URL = WEB_URL_AJAX = 'index.html';
        var require = {
            "baseUrl": "https://dorjibari.com.bd/pub/static/frontend/Techopz/dorjibari/en_US"
        };
    </script>
    <meta charset="utf-8" />
    <meta name="description" content="Dorjibari Online Store" />
    <meta name="keywords" content="Dorjibari Online Store" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="title" content="Dorjibari Online Store" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>Kona Mart</title>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/8ba86f21558a476d9ec4a76d048ca7f.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="{{asset('assets/css/styles-l.css')}}" />
    <link rel="stylesheet" type="text/css" media="print" href="{{asset('assets/css/print.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/05789125d3b168b0f243307941db6ae3.css')}}" />
    <script type="text/javascript"
        src="https://dorjibari.com.bd/pub/static/_cache/merged/eb7d5f617e5be5b11f7f49cbc63454f6.js"></script>
    <link rel="icon" type="image/x-icon" href="https://dorjibari.com.bd/pub/media/favicon/default/favicon.jpg" />
    <link rel="shortcut icon" type="image/x-icon"
        href="https://dorjibari.com.bd/pub/media/favicon/default/favicon.jpg" />
    <link rel="stylesheet" type="text/css" media="all" href="https://dorjibari.com.bd/pub/media/styles.css" />
    <link rel="stylesheet" type="text/css" media="all" href="https://dorjibari.com.bd/custom.css" />
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>


    <link rel="stylesheet" type="text/css" media="all"
        href="https://dorjibari.com.bd/pub/media/mgs/fbuilder/css/blocks.min.css" />
    <link rel="stylesheet" type="text/css" media="all"
        href="https://dorjibari.com.bd/pub/media/mgs/fbuilder/css/1/fbuilder_config.min.css" />

    <script src="https://kit.fontawesome.com/d735ae1186.js" crossorigin="anonymous"></script>
    <style>
        #social-login-popup .social-login-title {
            background-color: #6e716e
        }

        #social-login-popup .social-login #bnt-social-login-authentication,
        #social-login-popup .forgot .primary button,
        #social-login-popup .create .primary button,
        #social-login-popup .fake-email .primary button {
            background-color: #6e716e;
            border: #6e716e
        }

        .block.social-login-authentication-channel.account-social-login .block-content {
            text-align: center;
        }


        /* Compatible ETheme_YOURstore*/
        div#centerColumn .column.main .block.social-login-authentication-channel.account-social-login {
            max-width: 900px !important;
            margin: 0 auto !important;
        }

        div#centerColumn .column.main .block.social-login-authentication-channel.account-social-login .block-content {
            text-align: center;
        }

        @media (max-width: 1024px) {
            div#centerColumn .column.main .block.social-login-authentication-channel.account-social-login .block-content {
                padding: 0 15px;
            }
        }
    </style>
    @stack('css')

    @stack('header-scripts')
</head>

<body data-container="body"
    class="width1024 wide header_absolute dark-theme cms-home cms-page2 cms-index-index page-layout-1column">
    <div class="page-wrapper">
        @include('layout.navigation')
        <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
            
            <div class="columns">
                <div class="column main"><input name="form_key" type="hidden" value="qI7LuTIDN5D5drXG" />
                    @yield('content')
                </div>
            </div>
        </main>
        <div class="page-bottom">
            <div class="content">
            </div>
        </div>
        @include('layout.footer')
        <script type="text/javascript">
            function toggleEl(el, elId) {
                require([
                    'jquery',
                ], function($) {
                    $(el).toggleClass('active');
                    if (elId != '') {
                        $('#' + elId).toggleClass('active').slideToggle();
                    } else {
                        $(el).parent().parent().find('> ul').toggleClass('active').slideToggle();
                    }
                });
            }
        </script>

        <a href="#" class="scroll-to-top"><i class="fa fa-arrow-up"></i></a>
        <script type="text/javascript">
            require([
                'jquery'
            ], function(jQuery) {
                (function($) {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 1) {
                            $('.scroll-to-top').css({
                                bottom: "25px"
                            });
                        } else {
                            $('.scroll-to-top').css({
                                bottom: "-45px"
                            });
                        }
                    });

                    $('.scroll-to-top').click(function() {
                        $('html, body').animate({
                            scrollTop: '0px'
                        }, 800);
                        return false;
                    });
                })(jQuery);
            });
        </script>

        <div id="ajaxcart_loading_overlay" class="ajaxcart-loading-overlay"></div>
    </div>
    <div id="loading_overlay" class="quickview-loading-overlay"></div>

    <script>
        function includeQuickviewAction($) {
            var $_quickviewBaseUrl = 'https://dorjibari.com.bd/aquickview/index/index';
            var $_baseUrl = 'index.html';
            var $_quickviewUrl = $_baseUrl + $_quickviewBaseUrl;

            var $_prdItem = $('.products.list.items.product-items .product-item');
            var $_prdItemAction = $('.products.list.items.product-items .product-item .actions-secondary');
            var $_listItem = [];
            if ($_prdItem.length > 0 && $_prdItemAction.length > 0) {
                $_prdItem.each(function() {
                    var $el = $(this);
                    var $_prdItemId = $el.find('input[name="product"]').val();
                    if (typeof $_prdItemId === "undefined") {
                        $_prdItemId = $el.find('[data-role="priceBox"]').attr('data-product-id');
                    }
                    if ($el.find("a.action.quickview").length <= 0) {
                        if ($el.find('a.product-item-photo').length > 0) {
                            var $_prdLink = $el.find('a.product-item-photo');
                            if (typeof $_prdLink.attr('href') !== 'undefined' && $_prdLink.attr('href').replace(
                                    $_baseUrl, "") != '#') {
                                var $_prdPathLink = $_prdLink.attr('href').replace($_baseUrl, "");
                                $_prdPathLink = ($_prdPathLink.indexOf('https://dorjibari.com.bd/index.php') >= 0) ?
                                    $_prdPathLink.replace('https://dorjibari.com.bd/index.php/', '') :
                                    $_prdPathLink;

                                var $quickviewAction = $_quickviewUrl + ("/path/" + $_prdPathLink).replace(/\/\//g,
                                    "/");
                                var $_buttonHtml = '<a data-productid="' + $_prdItemId +
                                    '" class="action quickview" aria-label="Quickview" title="Quickview" href="' +
                                    $quickviewAction + '"><span>Quickview</span></a>';
                                $_listItem.push($_buttonHtml);
                            }
                        }
                    }
                });
                var count = 0;
                $_prdItemAction.each(function() {
                    if (typeof $_listItem[count] != 'undefined' && $(this).find("a.action.quickview").length <= 0) {
                        $(this).append($_listItem[count]);
                        count++;
                    }
                });
            }
        }
    </script>

    <script type="text/javascript">
        requirejs([
            'jquery',
            'domReady!',
            'aQuickView'
        ], function($) {
            $('#loading_overlay').removeClass('loading');

            $(document).ready(function() {
                includeQuickviewAction($);
            });

            $(document).on('click', '.action.quickview', function(e) {
                e.preventDefault();
                if ($('body.catalog-product-view').size() > 0) {
                    $('body').addClass('origin-catalog-product-view');
                } else {
                    $('body').addClass('catalog-product-view');
                }
                $('#loading_overlay').addClass('loading');
                var widgetQv = $(this).aQuickView();
                var url = $(this).attr('href');
                var id = $(this).attr('data-productid');
                widgetQv.aQuickView('productQuickView', url, id);
            });
        });
    </script>

    @stack('footer-scripts')
</body>

</html>
