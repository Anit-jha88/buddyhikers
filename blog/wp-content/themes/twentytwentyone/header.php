<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Start Header Section -->
          <!-- Fav Icon -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <link href="https://buddyhikers.com/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://buddyhikers.com/assets/css/jquery-ui.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/bootstrap-icons.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/all.min.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/animate.min.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/jquery.fancybox.min.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/fontawesome.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://buddyhikers.com/assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://buddyhikers.com/assets/css/daterangepicker.css" />

        <link rel="stylesheet" href="https://buddyhikers.com/assets/css/slick.css" />
        <link rel="stylesheet" href="https://buddyhikers.com/assets/css/slick-theme.css" />

        <link href="https://buddyhikers.com/assets/css/boxicons.min.css" rel="stylesheet" />

        <link href="https://buddyhikers.com/assets/css/select2.css" rel="stylesheet" />
        <link href="https://buddyhikers.com/assets/css/nice-select.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://buddyhikers.com/assets/css/style.css" />        <!-- End Header Section -->
        <title>Blog | Buddy Hikers</title>
    </head>
    <body>
      
       <!-- Start Header Section -->
        <div class="top-bar style-2">
            <div class="topbar-left">
                <div class="hotline-area d-xl-flex d-none">
                  
                    <div class="content enquieybtn">
                        <span>For any enquiry PLEASE CALL</span>
                        <h6><a href="tel:+919760767895">+919760767895</a></h6>
                    </div>
                </div>
            </div>
            <p>70% Off Your Next Trip. Hurry Up For your new Tour! <a href="#." data-bs-toggle="modal" data-bs-target="#user-login">Book Your Tour</a></p>
            <div class="topbar-right">
                <div class="social-icon-area">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                        </li>
                       
                        <li>
                            <a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="header-area style-3">
            <div class="header-logo d-lg-none d-flex">
                <a href="https://buddyhikers.com/index.php"><img alt="image" class="img-fluid" src="https://buddyhikers.com/assets/img/logo.png" /></a>
            </div>
            <div class="company-logo d-lg-flex d-none">
                <a href="https://buddyhikers.com/index.php"><img src="https://buddyhikers.com/assets/img/logo.png" alt /></a>
            </div>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="https://buddyhikers.com/index.php"><img alt="image" src="https://buddyhikers.com/assets/img/logo.png" /></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li class="">
                        <a href="https://buddyhikers.com/index.php" class="drop-down">Home</a>
                    </li>

                    <li class="">
                        <a href="https://buddyhikers.com/all-treks.php" class="drop-down">Treks</a>
                    </li>
                    <li class="">
                        <a href="https://buddyhikers.com/all-watersports.php" class="drop-down">Watersports</a>
                    </li>

                    <li class="">
                        <a href="https://buddyhikers.com/all-caravan.php" class="drop-down">Caravan Tours</a><i class="bi bi-plus dropdown-icon"></i>
                    </li>

                    <li><a href="#." class="drop-down">Rentals</a>  </li>
                    <li class="">
                        <a href="all-backpacking-and-tours.php" class="drop-down">Backpacking & Tours</a><i class="bi bi-plus dropdown-icon"></i>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="https://buddyhikers.com/hotel-details.php" class="drop-down">Stay</a><i class="bi bi-plus dropdown-icon"></i>
                    </li>
                    <li class="active"><a href="https://buddyhikers.com/blog" class="drop-down">Blog</a>  </li>
                </ul>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <div class="sidebar-button mobile-menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                        <path  d="M0 4.46439C0 4.70119 0.0940685 4.92829 0.261511 5.09574C0.428955 5.26318 0.656057 5.35725 0.892857 5.35725H24.1071C24.3439 5.35725 24.571 5.26318 24.7385 5.09574C24.9059 4.92829 25 4.70119 25 4.46439C25 4.22759 24.9059 4.00049 24.7385 3.83305C24.571 3.6656 24.3439 3.57153 24.1071 3.57153H0.892857C0.656057 3.57153 0.428955 3.6656 0.261511 3.83305C0.0940685 4.00049 0 4.22759 0 4.46439ZM4.46429 11.6072H24.1071C24.3439 11.6072 24.571 11.7013 24.7385 11.8688C24.9059 12.0362 25 12.2633 25 12.5001C25 12.7369 24.9059 12.964 24.7385 13.1315C24.571 13.2989 24.3439 13.393 24.1071 13.393H4.46429C4.22749 13.393 4.00038 13.2989 3.83294 13.1315C3.6655 12.964 3.57143 12.7369 3.57143 12.5001C3.57143 12.2633 3.6655 12.0362 3.83294 11.8688C4.00038 11.7013 4.22749 11.6072 4.46429 11.6072ZM12.5 19.643H24.1071C24.3439 19.643 24.571 19.737 24.7385 19.9045C24.9059 20.0719 25 20.299 25 20.5358C25 20.7726 24.9059 20.9997 24.7385 21.1672C24.571 21.3346 24.3439 21.4287 24.1071 21.4287H12.5C12.2632 21.4287 12.0361 21.3346 11.8687 21.1672C11.7012 20.9997 11.6071 20.7726 11.6071 20.5358C11.6071 20.299 11.7012 20.0719 11.8687 19.9045C12.0361 19.737 12.2632 19.643 12.5 19.643Z"   />
                    </svg>
                </div>
            </div>
        </header>       <!-- End Header Section -->
