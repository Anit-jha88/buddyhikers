<?php $currentPage = 'blogPage'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Start Header Section -->
        <?php include('./components/header.php') ?>
        <!-- End Header Section -->
        <title>Blog | Buddy Hikers</title>
    </head>
    <body>
      
       <!-- Start Header Section -->
        <?php include('./components/menu.php') ?>
       <!-- End Header Section -->

        <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <h1>Blog </h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Blog </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blod-grid-section  mtb80">
            <div class="container">
                <div class="row g-md-4 gy-5 mb-70">
                    <div class="col-lg-4 order-lg-2 order-1 sidebar">
                        <div class="sidebar-area">
                            <div class="single-widget mb-30">
                              
                                <form>
                                    <div class="search-box">
                                        <input type="text" placeholder="Search Here" />
                                        <button type="submit"><i class="bx bx-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-widget mb-30">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="category-list">
                                    <li>
                                        <a href="#.">
                                            Cultural Exploration
                                            <span>(20)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Adventure Safari
                                            <span>(35)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Nature Excursion
                                            <span>(25)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Cruise Voyage
                                            <span>(18)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            City Discovery
                                            <span>(06)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Educational Journey
                                            <span>(08)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Luxury Retreat
                                            <span>(15)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#.">
                                            Photography Expedition
                                            <span>(25)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="single-widget mb-30">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="recent-post-widget mb-20">
                                    <div class="recent-post-img">
                                        <a href="#."><img src="assets/img/blog/recent-post1.png" alt="Recent Post" /></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <a href="#.">20 July, 2023</a>
                                        <h6><a href="blog-details.php">Poutsicle Hydrating Lipo Stain offering.</a></h6>
                                    </div>
                                </div>
                                <div class="recent-post-widget mb-20">
                                    <div class="recent-post-img">
                                        <a href="#."><img src="assets/img/blog/recent-post2.png" alt="Recent Post" /></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <a href="#.">12 July, 2023</a>
                                        <h6><a href="blog-details.php">rutrum vitae augue idel euismod pulvi.</a></h6>
                                    </div>
                                </div>
                                <div class="recent-post-widget mb-20">
                                    <div class="recent-post-img">
                                        <a href="#."><img src="assets/img/blog/recent-post3.png" alt="Recent Post" /></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <a href="#.">04 July, 2023</a>
                                        <h6><a href="blog-details.php">Donec blandit fermentu diam non.</a></h6>
                                    </div>
                                </div>
                            </div> -->
                          
                        </div>
                    </div>
                    

                    <div class="col-lg-8 order-lg-1 order-2">
                        <div class="row g-md-4 gy-5 mb-70">
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/1.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>20</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Adventure</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">How Ayodhya Will Boost Domestic Tourism In India</a></h5>
                               
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/3.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>16</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Wildlife</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">The Best Itinerary for Dayara Bugyal Trek </a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/1.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>20</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Adventure</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">How Ayodhya Will Boost Domestic Tourism In India</a></h5>
                               
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/3.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>16</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Wildlife</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">The Best Itinerary for Dayara Bugyal Trek </a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/1.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>20</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Adventure</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">How Ayodhya Will Boost Domestic Tourism In India</a></h5>
                               
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/3.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>16</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Wildlife</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">The Best Itinerary for Dayara Bugyal Trek </a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="#." class="card-img"><img src="assets/img/blog/2.jpg" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong>18</strong> <br />
                                        August
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#.">Tourism</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="blog-details.php">Snowless Himalayas: Know the Reason</a></h5>
                                <div class="book-btn">
                                    <a href="blog-details.php" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="inner-pagination-area">
                            <ul class="pagination-list">
                                <li>
                                    <a href="#." class="shop-pagi-btn"><i class="bi bi-chevron-left"></i></a>
                                </li>
                                <li>
                                    <a href="#.">1</a>
                                </li>
                                <li>
                                    <a href="#." class="active">2</a>
                                </li>
                                <li>
                                    <a href="#.">3</a>
                                </li>
                                <li>
                                    <a href="#."><i class="bi bi-three-dots"></i></a>
                                </li>
                                <li>
                                    <a href="#.">6</a>
                                </li>
                                <li>
                                    <a href="#." class="shop-pagi-btn"><i class="bi bi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- ~~~ Footer Section ~~~ -->
		    <?php include('./components/footer.php') ?>
        <!-- End Footer Section -->
    </body>
</html>
