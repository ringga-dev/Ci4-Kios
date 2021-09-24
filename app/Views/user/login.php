<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Galio - Mega Shop Responsive Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('tamplate') ?>/assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="<?= base_url('tamplate') ?>/assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('tamplate') ?>/assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
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
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="<?= base_url('tamplate') ?>/assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
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
                                <a href="index.html">
                                    <img src="<?= base_url('tamplate') ?>/assets/img/logo/logo.png" alt="brand logo">
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
                                                    <a href="product-details.html"><img src="<?= base_url('tamplate') ?>/assets/img/cart/cart-1.jpg" alt=""></a>
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
                                                    <a href="product-details.html"><img src="<?= base_url('tamplate') ?>/assets/img/cart/cart-2.jpg" alt=""></a>
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
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login-register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Email or Username" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                                <h2>Singup Form</h2>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Full Name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Repeat your Password" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Subscribe Our Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->

        <!-- brand area start -->
        <div class="brand-area pt-34 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Popular Brand</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br1.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br2.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br3.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br4.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br5.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br6.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="<?= base_url('tamplate') ?>/assets/img/brand/br4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

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
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>contact us</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address: 1234 - Bandit Tringi Aliquam Vitae. New York</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">open in google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
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
                            <div class="footer-widget mb-sm-30">
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
                            <div class="footer-widget mb-sm-30">
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
                            <img src="<?= base_url('tamplate') ?>/assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->


    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="<?= base_url('tamplate') ?>/assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="<?= base_url('tamplate') ?>/assets/js/switcher.js"></script>
</body>


</html>