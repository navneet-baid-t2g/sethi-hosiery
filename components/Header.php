<?php
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $scriptName = dirname($_SERVER['SCRIPT_NAME']);
    return $protocol . $host . $scriptName . '/';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo getBaseUrl(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $meta['title'] ?? 'Default Title | Your Store Name'; ?></title>
    <meta name="description" content="<?php echo $meta['description'] ?? 'Default description of your store.'; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords'] ?? 'default, keywords, here'; ?>">
    <meta name="robots" content="<?php echo $meta['robots'] ?? 'index, follow'; ?>">
    <meta name="author" content="<?php echo $meta['author'] ?? 'Your Store Name'; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo $meta['og:title'] ?? $meta['title']; ?>">
    <meta property="og:description" content="<?php echo $meta['og:description'] ?? $meta['description']; ?>">
    <meta property="og:image" content="<?php echo $meta['og:image'] ?? 'default-og-image.jpg'; ?>">
    <meta property="og:url" content="<?php echo $meta['og:url'] ?? 'https://yourstore.com'; ?>">
    <meta property="og:type" content="<?php echo $meta['og:type'] ?? 'website'; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="<?php echo $meta['twitter:card'] ?? 'summary_large_image'; ?>">
    <meta name="twitter:title" content="<?php echo $meta['twitter:title'] ?? $meta['title']; ?>">
    <meta name="twitter:description" content="<?php echo $meta['twitter:description'] ?? $meta['description']; ?>">
    <meta name="twitter:image" content="<?php echo $meta['twitter:image'] ?? 'default-twitter-image.jpg'; ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <!-- <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul> -->
        <div class="offcanvas__logo">
            <a href="./"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <!-- <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div> -->
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./"><img src="assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 text-center">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href="./about-us">About Us</a></li>
                            <li><a href="./shop">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="#">Yoga T-Shirts</a></li>
                                    <li><a href="#">V Neck T-Shirts</a></li>
                                    <li><a href="#">Sublimation T-Shirts</a></li>
                                    <li><a href="#">Sports T-Shirts</a></li>
                                    <li><a href="#">Round Neck T-Shirts</a></li>
                                    <li><a href="#">Promotional T-Shirts Manufacturers</a></li>
                                    <li><a href="#">Organic Cotton T-Shirts Uniform</a></li>
                                    <li><a href="#">Marathon T-Shirts Manufacturers</a></li>
                                    <li><a href="#">Logo T-Shirts Manufacturers</a></li>
                                    <li><a href="#">Hooded T-Shirts Manufacturers</a></li>
                                </ul>
                            </li>
                            <li><a href="./product-category/t-shirts">T-Shirts</a>
                                <ul class="dropdown">
                                    <li><a href="#">Round Neck T-Shirts</a></li>
                                    <li><a href="#">Collar T-Shirts</a></li>
                                    <li><a href="#">Promotional T-Shirts</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="#">Corporate Promotional T-shirts</a></li>
                                            <li><a href="#">Advertisement T-Shirts</a></li>
                                            <li><a href="#">Plain Promotional T-Shirt</a></li>
                                            <li><a href="#">Promotional Polo T-Shirt</a></li>
                                            <li><a href="#">Customize T-shirts</a></li>
                                            <li><a href="#">Political Party Election T-Shirt</a></li>
                                            <li><a href="#">Marathon T-Shirts</a></li>
                                            <li><a href="#">Corporate Event T-Shirts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="./product-category/caps">Caps</a>
                                <ul class="dropdown">
                                    <li><a href="#">Promotional Cotton Cap</a></li>
                                    <li><a href="#">Advertising cap</a></li>
                                    <li><a href="#">Fashion Hats</a></li>
                                    <li><a href="#">Round Hats</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="./contact">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 m-auto">
                    <div class="header__right">
                        <ul class="header__right__widget">
                            <li><a href="mailto:info@sethihosiery.com"><span class="icon_mail"></span> info@sethihosiery.com</a></li>
                            <li><a href="tel:+91-8447797948"><span class="icon_phone"></span> +91-8447797948</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->