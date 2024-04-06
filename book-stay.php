<?php 
include('admin/config.php');
$currentPage = 'bookstayPage'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Start Header Section -->
            <?php include('./components/header.php') ?>
        <!-- End Header Section -->
        <title>Buddy Hikers</title>
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
                            <h1>View all Stay</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>View all Stay</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-grid-section mtb80">
            <div class="container">
                <div class="row">
                                <?php
                                $i = 1;
                                
                                $qry = $conn->query("SELECT * FROM `stay`   order by `id` asc");
                                
                                while($row= $qry->fetch_assoc()):
                                
                                ?>
                                <div class="col-lg-4">
                                    <div class="swiper ">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="room-suits-card ">
                                                    <div class="row g-0">
                                                        <div class="col-md-12">
                                                            <div class="swiper hotel-img-slider">
                                                               
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <a href="hotel-details.php?id=<?php echo $row['id'] ?>">
                                                                        <div class="room-img">
                                                                            <img src="<?php echo validate_image($row['image1']) ?>" alt />
                                                                        </div>
                                                                        </a>
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="swiper-pagination5"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="room-content">
                                                                <div class="content-top">
                                                                   
                                                                    <h5><a href="hotel-details.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></h5>
                                                                    <ul class="loaction-area">
                                                                        <li><i class="bi bi-geo-alt"></i><?php echo $row['address']; ?></li>
                                                                    
                                                                        <li><span><?php echo $row['distance']; ?></span></li>
                                                                    </ul>
                                                                    <ul class="facilisis">
                                                                        <li><span class="bx bx-body"></span> Family Rooms </li>
                                                                        <li><span class="bx bx-game"></span> Towel (On Demand) </li>
                                                                        <li> <span class="bx bxs-parking"></span> Room Service  </li>
                                                                       
                                                                    </ul>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="room-type">
                                                                        <h6>Deluxe King Room</h6>
                                                                        <span>1 king bed</span>
                                                                        <div class="deals">
                                                                            <span>
                                                                                <strong>Free cancellation</strong> <br />
                                                                                before 48 hours
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-and-book">
                                                                        <div class="price-area">
                                                                            <p>1 night, 2 adults</p>
                                                                            <span>₹<?php echo $row['starting_price']; ?> <del>₹<?php echo $row['cross_price']; ?></del></span>
                                                                        </div>
                                                                        <div class="book-btn">
                                                                            <a href="hotel-details.php?id=<?php echo $row['id'] ?>" class="primary-btn2">Book Now <i class="bi bi-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                          
                                        </div>
                                    </div>
                                 
                                </div>
                           
                           <?php endwhile; ?>
                               
                            </div>
            </div>
        </div>
     
        <!-- ~~~ Footer Section ~~~ -->
		<?php include('./components/footer.php') ?>
        <!-- End Footer Section -->
       
    </body>

   
</html>
