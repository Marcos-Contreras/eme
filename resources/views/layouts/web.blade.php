<!DOCTYPE html>
<html class="no-js" lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description)">

    <!-- Site title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="galio/assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    {!! Html::style('galio/assets/css/bootstrap.min.css') !!}



    <!-- Font-Awesome CSS -->
    {!! Html::style('galio/assets/css/font-awesome.min.css') !!}
    <!-- helper class css -->
    {!! Html::style('galio/assets/css/helper.min.css') !!}
    <!-- Plugins CSS -->
    {!! Html::style('galio/assets/css/plugins.css') !!}
    <!-- Main Style CSS -->
    {!! Html::style('galio/assets/css/style.css') !!}
    {!! Html::style('galio/assets/css/skin-default.css') !!}

    @yield('scripts')

</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="galio/assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="galio/assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper box-layout">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    info@website.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    0123456789
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                                    <a class="dropdown-item" href="login-register.html"> login</a>
                                                    <a class="dropdown-item" href="login-register.html">register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">my wishlist</a>
                                        </li>
                                        <li>
                                            <a href="#">my cart</a>
                                        </li>
                                        <li>
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index-2.html">
                                    <img src="galio/assets/img/logo/logo.png" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Working time</h5>
                                            <span>Mon- Sun: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>free shipping</h5>
                                            <span>On order over $199</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>money back 100%</h5>
                                            <span>Within 30 Days after delivery</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>total</span>
                                            $50.00
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="galio/assets/img/cart/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">simple product 09</a></h4>
                                                    <span>$60.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="galio/assets/img/cart/cart-2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">virtual product 10</a></h4>
                                                    <span>$50.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">subtotal : </span>
                                                <span class="subtotal-price">$88.66</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="#">checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        category
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu category-style-2">
                                        <ul>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i> computer</a></li>
                                            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-camera"></i> camera</a>   
                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End --> 
                                            </li>
                                            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> smart phones</a> 
                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">uPhone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Over-ear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End -->
                                            </li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-clock-o"></i> watch</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-television"></i> electronic</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-tablet"></i> tablet</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> books</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-microchip"></i> microchip</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-bullhorn"></i> bullhorn</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="#"><i class="fa fa-home"></i>Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home version 01</a></li>
                                                    <li><a href="index-2.html">Home version 02</a></li>
                                                    <li><a href="index-3.html">Home version 03</a></li>
                                                    <li><a href="index-4.html">Home version 04</a></li>
                                                </ul>
                                            </li>
                                            <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="my-account.html">my-account</a></li>
                                                            <li><a href="login-register.html">login-register</a></li>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="contact-us.html">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left sidebar</a></li>
                                                            <li><a href="shop-grid-left-sidebar-3-col.html">left sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar-3-col.html">grid right sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                            <li><a href="shop-list-full.html">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product details
                                                                affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                variable</a></li>
                                                            <li><a href="product-details-group.html">product details group</a></li>
                                                            <li><a href="product-details-box.html">product details box slider</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="blog-full-2-column.html">blog full 2 column</a></li>
                                                    <li><a href="blog-full-3-column.html">blog full 3 column</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        @yield('content')


        <!-- footer area start -->
        <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>sign up for newsletter</h3>
                                    <p>Duis autem vel eum iriureDuis autem vel eum</p>
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">subscribe!</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-4 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>contact us</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address:  1234 - Bandit Tringi Aliquam Vitae. New York</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">open in google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">my cart</a></li>
                                        <li><a href="#">checkout</a></li>
                                        <li><a href="#">my wishlist</a></li>
                                        <li><a href="#">login</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>short code</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">gallery</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">carousel</a></li>
                                        <li><a href="#">map</a></li>
                                        <li><a href="#">tab</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>product tags</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">computer</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">smart phone</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">tablet</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="galio/assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="galio/assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="galio/assets/img/product/product-details-img2.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="galio/assets/img/product/product-details-img3.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="galio/assets/img/product/product-details-img4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="galio/assets/img/product/product-details-img5.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="galio/assets/img/product/product-details-img1.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="galio/assets/img/product/product-details-img2.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="galio/assets/img/product/product-details-img3.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="galio/assets/img/product/product-details-img4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="galio/assets/img/product/product-details-img5.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->




    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    {!! Html::script('galio/assets/js/vendor/modernizr-3.6.0.min.js') !!}
    <!-- Jquery Min Js -->
    {!! Html::script('galio/assets/js/vendor/jquery-3.3.1.min.js') !!}
    <!-- Popper Min Js -->
    {!! Html::script('galio/assets/js/vendor/popper.min.js') !!}
    <!-- Bootstrap Min Js -->
    {!! Html::script('galio/assets/js/vendor/bootstrap.min.js') !!}
    <!-- Plugins Js-->
    {!! Html::script('galio/assets/js/plugins.js') !!}
    <!-- Ajax Mail Js -->
    {!! Html::script('galio/assets/js/ajax-mail.js') !!}
    <!-- Active Js -->
    {!! Html::script('galio/assets/js/main.js') !!}
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    {!! Html::script('galio/assets/js/switcher.js') !!}

    @yield('scripts')

</body>


</html>