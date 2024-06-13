<?php
/**
 * Header File
 */
?>
<!DOCTYPE html>
<html class="mt-0">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- width=device-width, initial-scale=1 -->
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">

    <!-- Swiper CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="<?php echo get_template_directory_uri() .
      "/assets/js/motus.min.js"; ?>"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0NLGC2YPEB"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-0NLGC2YPEB');
    </script>

    <!-- Event snippet for 15th REDS conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-794171173/S0_eCO6O5Z4ZEKWu2PoC'
    });
    </script>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://europe.redevelopmentsummit.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="15th Real Estate Development Summit Saudi Arabia - Europe Edition">
    <meta property="og:description" content="">
    <meta property="og:image"
        content="https://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Preview-image-rectangle1.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="europe.redevelopmentsummit.com">
    <meta property="twitter:url" content="https://europe.redevelopmentsummit.com">
    <meta name="twitter:title" content="15th Real Estate Development Summit Saudi Arabia - Europe Edition">
    <meta name="twitter:description" content="">
    <meta name="twitter:image"
        content="https://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Preview-image-rectangle1.jpg">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e("Skip to content", "netsqurewfis"); ?>
    </a>

    <!-- Main Navbar -->
    <style>
    #heroDiv {
        top: 0;
        width: 100%;
    }
    </style>
    <section class="net-header position-fixed" id="heroDiv">
        <div class="main-nav py-2" id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <!-- <span class="header-tag">Powered By</span> -->
                        <div class="hero-logo" id="logo">
                            <img width="182" height="97"
                                src="http://hospitality.test/wp-content/uploads/2024/06/his-logo.png" class="logo-img"
                                alt="Hospitality Innovation" decoding="async">
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="desk-menu main-font h-100 d-flex align-items-center justify-content-end">
                            <?php wp_nav_menu([
                              "theme_location" => "primary",
                              "depth" => 2,
                              "container" => false,
                              "menu_class" => "",
                              "fallback_cb" => "__return_false",
                              "items_wrap" =>
                                '<ul id="%1$s" class="navbar-nav ml-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                              "depth" => 2,
                              "walker" => new bootstrap_5_wp_nav_menu_walker(),
                            ]); ?>
                        </div>
                        <div class="mobile-menu main-font">
                            <i onclick="showMenu()" class="fi fi-rr-apps"></i>
                            <div style="display:none;" id="menu-list" class="menu-box">
                                <?php wp_nav_menu([
                                  "theme_location" => "primary",
                                  "depth" => 2,
                                  "container" => false,
                                  "menu_class" => "",
                                  "fallback_cb" => "__return_false",
                                  "items_wrap" =>
                                    '<ul id="%1$s" class="navbar-nav ml-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                  "depth" => 2,
                                  "walker" => new bootstrap_5_wp_nav_menu_walker(),
                                ]); ?>
                            </div>
                            <script>
                            function showMenu() {
                                if (document.getElementById('menu-list').style.display !== "none") {
                                    document.getElementById('menu-list').style.display = "none";
                                } else {
                                    document.getElementById('menu-list').style.display = "block";
                                }
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    //When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("logo").style.height = "60px";

        } else {
            document.getElementById("logo").style.height = "100px";
            document.getElementById("logo").style.transition = "ease-in 0.3s";

        }
    }
    </script>

    <main id="content" class="site-content">