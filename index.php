<?php 
$currentPage = 'homePage';
include('admin/config.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="keywords" content="" />	
		<meta name="description" content="Buddy Hikers" />
	    <meta name="author" content="MKS Technosoft "> 
		<meta property="og:title" content="Buddy Hikers" />
		<meta property="og:image" content="" />
		<meta property="og:description" content=" " />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="Buddy Hikers"/>
	    <meta property="og:type" content="Website"/>

        <!-- Start Header Section -->
            <?php include('./components/header.php') ?>
        <!-- End Header Section -->
        <title>Buddy Hikers</title>
    </head>
    <body>
       

    

        <!-- Start Header Section -->
            <?php include('./components/menu.php') ?>
        <!-- End Header Section -->

        <div class="home3-banner-area">
            <div class="swiper home3-banner-slider">
                <div class="swiper-wrapper">
                    
                    	<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `banner` order by `title` asc");
					while($row= $qry->fetch_assoc()):
						$desc = html_entity_decode($row['description']);
						$dest = strip_tags($desc);
						$dest =stripslashes($desc);
					?>
                 
                    <div class="swiper-slide">
                        <div class="home3-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.6) 0%, rgba(16, 12, 8, 0.6) 100%), url(<?php echo validate_image($row['image']) ?>);">
                            <div class="home3-banner-content-wrap">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="home3-banner-content">
                                              
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
            <div class="slider-btn-grp">
                <div class="slider-btn home3-banner-prev">
                    <i class="bi bi-arrow-up"></i>
                </div>
                <div class="progress-pagination"></div>
                <div class="slider-btn home3-banner-next">
                    <i class="bi bi-arrow-down"></i>
                </div>
            </div>
        </div>
      


        <div class="tour-facilites-section mtb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-40">
                        <div class="section-title2 two text-center">
                            <h2>Our Leading Treks</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-card-slider-wrap mb-40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper package-card-slider">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $i = 1;
                                            $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Track' order by `id` asc");
                                            while($row= $qry->fetch_assoc()):

                                            ?>
                                            <div class="swiper-slide">
                                                <div class="package-card3 style-3">
                                                    <a href="treks-details.php?id=<?php echo $row['id'] ?>" class="package-card-img">
                                                        <img src="<?php echo validate_image($row['image1']) ?>" alt />
                                                        <div class="eg-batch">
                                                            <span>Popular</span>
                                                        </div>
                                                    </a>
                                                    <div class="package-card-content">
                                                        <div class="card-content-top">
                                                            <h5><a href="treks-details.php?id=<?php echo $row['id'] ?>"><?php echo ucwords($row['treksname']) ?></a></h5>
                                                            <div class="location-area">
                                                                <ul class="location-list">
                                                                     <li><a href="#."><?php echo ucwords($row['pickup_drop']) ?></a></li>
                                            <!--<li><a href="#.">Jharkhand</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-content-middle">
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bxs-calendar"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Duration</span>
                                                                        <strong>><?php echo ucwords($row['duration']) ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-map-alt"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Approx</span>
                                                                        <strong><?php echo ucwords($row['trek_length']) ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-bar-chart-alt"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Grade</span>
                                                                        <strong><?php echo ucwords($row['difficulty']); ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-line-chart-down"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Altitude</span>
                                                                        <strong><?php echo ucwords($row['altitude']); ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card-content-bottom">
                                                            <div class="price-area">
                                                                 <span>Starting Form:</span>
                                                                 <h6>₹<?php echo ucwords($row['starting_price']) ?> <del>₹<?php echo ucwords($row['cross_price']) ?></del></h6>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="treks-details.php?id=<?php echo $row['id'] ?>" class="primary-btn2">Book Now <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           	<?php endwhile; ?>

                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    <a href="all-treks.php" class="secondary-btn1">View all Treks</a>
                    </div>
                </div> 
            </div>
        </div>

        <div class="tour-facilites-section light-yellow-bg mtb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-40">
                        <div class="section-title2 two text-center">
                            <h2>Adventure Watersports </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-card-slider-wrap mb-40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper package-card-slider">
                                        <div class="swiper-wrapper">
                                            <?php 
                                            $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Watersports' order by `id` asc");
                                            while($row= $qry->fetch_assoc()):
                                            
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="package-card3 style-3">
                                                       <a href="watersports-details.php?id=<?php echo $row['id'] ?>" class="package-card-img">
                                                        <img src="<?php echo validate_image($row['image1']) ?>" alt />
                                                        <div class="eg-batch">
                                                            <span>Popular</span>
                                                        </div>
                                                    </a>
                                                    <div class="package-card-content">
                                                        <div class="card-content-top">
                                                            <h5><a href="watersports-details.php?id=<?php echo $row['id'] ?>"><?php echo ucwords($row['treksname']) ?></a></h5>
                                                            <div class="location-area">
                                                                <ul class="location-list">
                                                                    <li><a href="#."><?php echo ucwords($row['pickup_drop']) ?></a></li>
                                            <!--<li><a href="#.">Jharkhand</a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-content-middle">
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bxs-calendar"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Duration</span>
                                                                        <strong><?php echo ucwords($row['duration']) ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-map-alt"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Approx</span>
                                                                         <strong><?php echo ucwords($row['trek_length']) ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-bar-chart-alt"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Grade</span>
                                                                        <strong><?php echo ucwords($row['difficulty']); ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-line-chart-down"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span>Altitude</span>
                                                                        <strong><?php echo ucwords($row['altitude']); ?></strong>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card-content-bottom">
                                                            <div class="price-area">
                                                                <span>Starting Form:</span>
                                                                 <h6>₹<?php echo ucwords($row['starting_price']) ?> <del>₹<?php echo ucwords($row['cross_price']) ?></del></h6>
                                                            </div>
                                                            <div class="book-btn">
                                                                   <a href="watersports-details.php?id=<?php echo $row['id'] ?>" class="primary-btn2">Book Now <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                           <?php endwhile; ?>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    <a href="all-watersports.php" class="secondary-btn1">View All Water Sports</a>
                    </div>
                </div> 
            </div>
        </div>

        <div class="destination-card2-slider-section mtb80">
            <div class="container">
               <div class="row mb-50">
                  <div class="col-lg-12">
                     <div class="section-title2 colorSet2 text-center">
                         <h2>Our Leading Backpacking & Tours</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="swiper destination-card2-slider mb-50">
                        <div class="swiper-wrapper">
                            <?php 
                    $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Backpacking' order by `id` asc");
					while($row= $qry->fetch_assoc()):
					
                    ?>
                           <div class="swiper-slide">
                              <div class="destination-card2">
                                 <a href="backpacking-details.php?id=<?php echo $row['id'] ?>" class="destination-card-img">
                                   <img src="<?php echo validate_image($row['image1']) ?>" alt />
                              
                                 <div class="destination-card2-content">
                                    <h4><a href="backpacking-details.php?id=<?php echo $row['id'] ?>"><?php echo ucwords($row['treksname']) ?></a></h4>
                                    <span>Starting Rs <?php echo ucwords($row['starting_price']) ?></span>
                                 </div>
                              </div>
                           </div>
                              <?php endwhile; ?>
                          
                        </div>
                     </div>
                     <div class="slide-and-view-btn-grp">
                        <div class="slider-btn-grp3 two">
                           <div class="slider-btn destination-card2-prev">
                              <i class="bi bi-arrow-left"></i>
                              <span>PREV</span>
                           </div>
                           <div class="slider-btn destination-card2-next">
                              <span>NEXT</span>
                              <i class="bi bi-arrow-right"></i>
                           </div>
                        </div>
                        <a href="all-backpacking-and-tours.php" class="secondary-btn2">View All Destination</a>
                     </div>
                  </div>
               </div>
            </div>
        </div>

        <div class="tour-facilites-section mtb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-40">
                        <div class="section-title2 two text-center">
                            <h2>Checkout our Caravan Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-card-slider-wrap mb-40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper package-card-slider">
                                        <div class="swiper-wrapper">
                                            <?php 
                                            $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Caravantours' order by `id` asc");
                                            while($row= $qry->fetch_assoc()):
                                            
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="package-card3 style-3">
                                                     <a href="caravan-details.php?id=<?php echo $row['id'] ?>" class="package-card-img">
                                                       <img src="<?php echo validate_image($row['image1']) ?>" alt />
                                                        <div class="eg-batch">
                                                            <span>Popular</span>
                                                        </div>
                                                    </a>
                                                    <div class="package-card-content">
                                                        <div class="card-content-top">
                                                               <h5><a href="caravan-details.php?id=<?php echo $row['id'] ?>"><?php echo ucwords($row['treksname']) ?></a></h5>
                                                            <div class="location-area">
                                                                <ul class="location-list">
                                            <li><a href="caravan-details.php"><?php echo ucwords($row['pickup_drop']) ?></a></li>
                                            <!--<li><a href="#.">Jharkhand</a></li>-->
                                        </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-content-middle">
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class="bx bxs-user-plus"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span><?php echo ucwords($row['duration']) ?></span>
                                                                        
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bx-map-alt"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span><?php echo ucwords($row['trek_length']) ?></span>
                                                                       
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon"> 
                                                                            <span class=" bx bxs-calendar"></span>
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span><?php echo ucwords($row['difficulty']); ?></span>

                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="single-transport durationBox">
                                                                        <div class="duratIcon imgIcon"> 
                                                                           <img src="assets/img/icons/camping-equipments.svg" />
                                                                        </div>
                                                                        <div class="duratDetails"> 
                                                                        <span><?php echo ucwords($row['altitude']); ?></span>

                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card-content-bottom">
                                                            <div class="price-area">
                                                                <span>Starting Form:</span>
                                                                <h6>₹<?php echo ucwords($row['starting_price']) ?> <del>₹<?php echo ucwords($row['cross_price']) ?></del></h6>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="caravan-details.php?id=<?php echo $row['id'] ?>" class="primary-btn2">Vide Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <?php endwhile; ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>

        <div class="tour-facilites-section light-yellow-bg mtb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-40">
                        <div class="section-title2 two text-center">
                            <h2>Book Your Stay With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-card-slider-wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper hotel-card-slider">
                                        <div class="swiper-wrapper">
                                            <?php 
                                            $qry = $conn->query("SELECT * FROM `stay`");
                                            while($row= $qry->fetch_assoc()):
                                            
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="room-suits-card two">
                                                    <div class="row g-0">
                                                        <div class="col-md-12">
                                                            <div class="swiper hotel-img-slider">
                                                              
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <div class="room-img">
                                                                            <img src="<?php echo validate_image($row['image1']) ?>" alt />
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="swiper-pagination5"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="room-content">
                                                                <div class="content-top">
                                                                   
                                                                    <h5><a href="hotel-details.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'];?></a></h5>
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
                                           
                                         
                                           <?php endwhile; ?> 
                                        </div>
                                    </div>
                                    <div class="slider-btn-grp4">
                                        <div class="slider-btn package-card-slider-prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                                <path
                                                    d="M15.9512 0.869644C13.5972 7.34699 13.5419 12.9847 15.8404 19.1322C15.9511 19.4021 15.8404 19.7319 15.6188 19.8819C15.3973 20.0618 15.0927 20.0318 14.8988 19.8219C10.1356 14.7839 5.28936 11.7252 0.470783 10.6756C0.193853 10.6157 1.79767e-06 10.3458 1.82127e-06 10.0759C1.84749e-06 9.77599 0.193853 9.50611 0.470783 9.44613C5.26167 8.36657 10.1633 5.24785 15.0096 0.179928C15.1204 0.0599765 15.2588 -1.97214e-06 15.425 -1.95762e-06C15.5358 -1.94793e-06 15.6465 0.0299873 15.7573 0.119951C15.9788 0.26989 16.0619 0.569767 15.9512 0.869644Z"
                                                />
                                            </svg>
                                        </div>
                                        <div class="slider-btn package-card-slider-next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                                <path
                                                    d="M0.0488516 19.1304C2.40275 12.6531 2.45814 7.01538 0.159624 0.867897C0.0488521 0.598007 0.159624 0.268143 0.381167 0.118204C0.602711 -0.0617224 0.907334 -0.0317344 1.10118 0.17818C5.86437 5.21612 10.7106 8.27486 15.5292 9.32443C15.8061 9.38441 16 9.6543 16 9.92419C16 10.2241 15.8061 10.494 15.5292 10.5539C10.7383 11.6335 5.83668 14.7522 0.990413 19.8201C0.879641 19.9401 0.741176 20.0001 0.575018 20.0001C0.464247 20.0001 0.353474 19.9701 0.242703 19.8801C0.0211589 19.7302 -0.0619202 19.4303 0.0488516 19.1304Z"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                              
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="tour-facilites-section light-yellow-bg mtb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-40">
                        <div class="section-title2 two text-center">
                            <h2>Caravan Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-card-slider-wrap ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper package-card-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="transport-card">
                                                    <a href="#." class="transport-img">
                                                        <img src="assets/img/innerpage/sajhek.jpg" alt />
                                                        <span>250km</span>
                                                    </a>
                                                    <div class="transport-content">
                                                        <h4><a href="#.">Travel to Uttarakhand from Delhi.</a></h4>
                                                        <div class="transport-type">
                                                            <h6>Available Transport:</h6>
                                                            <div class="row g-2">
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                         <span><i class="bx bxs-car"></i> Car</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-train"></i> Train</span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-bus"></i> Bus</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-plane"></i> Airline</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom">
                                                            <div class="details-btn">
                                                                <a href="#." class="primary-btn2">View Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="transport-card">
                                                    <a href="#." class="transport-img">
                                                        <img src="assets/img/innerpage/ifel-tower.jpg" alt />
                                                        <span>5.6km</span>
                                                    </a>
                                                    <div class="transport-content">
                                                        <h4><a href="#.">Travel to Kashmir from Delhi.</a></h4>
                                                        <div class="transport-type">
                                                            <h6>Available Transport:</h6>
                                                            <div class="row g-2">
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                         <span><i class="bx bxs-car"></i> Car</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-train"></i> Train</span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-bus"></i> Bus</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-plane"></i> Airline</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom">
                                                            <div class="details-btn">
                                                                <a href="#." class="primary-btn2">View Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="transport-card">
                                                    <a href="#." class="transport-img">
                                                        <img src="assets/img/innerpage/kashmir.jpg" alt />
                                                        <span>250km</span>
                                                    </a>
                                                    <div class="transport-content">
                                                        <h4><a href="#.">Travel to Kashmir from Delhi.</a></h4>
                                                        <div class="transport-type">
                                                            <h6>Available Transport:</h6>
                                                            <div class="row g-2">
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                         <span><i class="bx bxs-car"></i> Car</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-train"></i> Train</span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-bus"></i> Bus</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-plane"></i> Airline</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom">
                                                            <div class="details-btn">
                                                                <a href="#." class="primary-btn2">View Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="transport-card">
                                                    <a href="#." class="transport-img">
                                                        <img src="assets/img/innerpage/mount-averest.jpg" alt />
                                                        <span>250km</span>
                                                    </a>
                                                    <div class="transport-content">
                                                        <h4><a href="#.">Travel to Shrinagar from Uttarakhand.</a></h4>
                                                        <div class="transport-type">
                                                            <h6>Available Transport:</h6>
                                                            <div class="row g-2">
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                         <span><i class="bx bxs-car"></i> Car</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-train"></i> Train</span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-bus"></i> Bus</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-plane"></i> Airline</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom">
                                                            <div class="details-btn">
                                                                <a href="#." class="primary-btn2">View Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="transport-card">
                                                    <a href="#." class="transport-img">
                                                        <img src="assets/img/innerpage/picturesque-costal-town.jpg" alt />
                                                        <span>470km</span>
                                                    </a>
                                                    <div class="transport-content">
                                                        <h4><a href="#.">Travel to Mumbai  from Delhi.</a></h4>
                                                        <div class="transport-type">
                                                            <h6>Available Transport:</h6>
                                                            <div class="row g-2">
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                         <span><i class="bx bxs-car"></i> Car</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-train"></i> Train</span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-bus"></i> Bus</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="single-transport">
                                                                       <span><i class="bx bxs-plane"></i> Airline</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-bottom">
                                                            <div class="details-btn">
                                                                <a href="#." class="primary-btn2">View Details <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                    <div class="slider-btn-grp4">
                                        <div class="slider-btn package-card-slider-prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                                <path d="M15.9512 0.869644C13.5972 7.34699 13.5419 12.9847 15.8404 19.1322C15.9511 19.4021 15.8404 19.7319 15.6188 19.8819C15.3973 20.0618 15.0927 20.0318 14.8988 19.8219C10.1356 14.7839 5.28936 11.7252 0.470783 10.6756C0.193853 10.6157 1.79767e-06 10.3458 1.82127e-06 10.0759C1.84749e-06 9.77599 0.193853 9.50611 0.470783 9.44613C5.26167 8.36657 10.1633 5.24785 15.0096 0.179928C15.1204 0.0599765 15.2588 -1.97214e-06 15.425 -1.95762e-06C15.5358 -1.94793e-06 15.6465 0.0299873 15.7573 0.119951C15.9788 0.26989 16.0619 0.569767 15.9512 0.869644Z" />
                                            </svg>
                                        </div>
                                        <div class="slider-btn package-card-slider-next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                                <path d="M0.0488516 19.1304C2.40275 12.6531 2.45814 7.01538 0.159624 0.867897C0.0488521 0.598007 0.159624 0.268143 0.381167 0.118204C0.602711 -0.0617224 0.907334 -0.0317344 1.10118 0.17818C5.86437 5.21612 10.7106 8.27486 15.5292 9.32443C15.8061 9.38441 16 9.6543 16 9.92419C16 10.2241 15.8061 10.494 15.5292 10.5539C10.7383 11.6335 5.83668 14.7522 0.990413 19.8201C0.879641 19.9401 0.741176 20.0001 0.575018 20.0001C0.464247 20.0001 0.353474 19.9701 0.242703 19.8801C0.0211589 19.7302 -0.0619202 19.4303 0.0488516 19.1304Z"  />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               
                    </div>
                </div>
            </div>
        </div> -->

        <div class="feature-with-content-section mtb80">
            <img src="assets/img/vector/book-tour-vector.svg" alt class="section-vector" />
            <div class="container">
                <div class="row mb-40">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="section-title2 two text-center">
                            <h2>Why Book Your Tour with Us</h2>
                            <p>Etiam ac tortor id purus commodo vulputate. Vestibulum porttitor erat felis and sed vehicula tortor malesuada gravida. Mauris volutpat enim quis.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-with-content-wrapper">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-6">
                            <div class="row g-sm-4 gy-5">
                                <div class="col-sm-6">
                                    <div class="feature-card style-3">
                                        <div class="feature-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                                <path d="M36.6322 3.49316L36.7071 3.42037C20.062 3.2598 3.21674 16.7033 3.50361 36.4612C3.78192 55.5747 19.1789 69.0525 37.1471 68.2261C39.5098 68.1213 41.8522 67.7401 44.1263 67.0904C46.9554 69.3115 51.6471 70.7908 54.7171 69.5459C55.9695 69.0268 57.087 68.1929 58.0215 67.1268C61.4811 63.9669 62.0067 58.5719 61.1899 53.8749C66.343 46.5607 67.7998 38.1471 66.4746 30.3159C64.0383 15.9133 52.1941 3.48459 36.6322 3.49316ZM52.7667 10.5901C52.7056 10.715 52.679 10.8539 52.6897 10.9926C52.9551 13.6076 50.1314 15.4423 47.8492 14.1578C46.1633 13.2073 45.2374 10.7464 42.9788 9.92213C38.8416 8.40748 35.7812 13.2276 32.4297 12.8797C31.1516 12.7438 29.8928 11.744 29.2217 10.3321C28.7186 9.27453 28.4948 7.96861 28.4981 6.30303C37.1364 3.73721 45.6291 5.30539 52.7667 10.5901ZM7.88701 27.1613C13.5142 25.469 21.1025 29.0132 15.6037 31.8701C14.3245 32.5145 13.0101 33.1086 12.28 34.3257C11.3541 35.8735 11.8347 38.0476 13.3312 39.0741C13.9049 39.4648 14.6553 39.7442 14.7377 40.061C14.9304 40.7975 11.216 43.2552 7.12165 42.0435C6.6924 40.0691 6.45296 38.0583 6.40661 36.0384C6.32712 33.0449 6.70137 30.0567 7.51664 27.1753C7.63942 27.2004 7.76645 27.1956 7.88701 27.1613ZM23.1866 55.3692C25.0877 51.8689 29.0932 50.8863 29.6134 51.5071C29.9431 51.9021 29.4133 52.995 29.2548 53.9113C28.816 56.3957 31.2341 58.8438 33.7292 58.4392C36.5873 57.9725 37.9306 54.6295 40.1197 54.3491C41.1558 54.2206 42.3611 54.849 43.3524 56.0446C44.7953 57.7798 45.7169 61.3839 45.4857 64.045C42.6071 65.0931 39.5761 65.6619 36.5134 65.7288C31.7532 65.8361 27.0411 64.7579 22.8012 62.5914C22.1954 60.458 22.1911 57.2028 23.1866 55.3692ZM43.6328 41.1304C43.5825 39.8373 43.4262 38.5785 43.2325 36.8969C43.2181 36.7796 43.1778 36.6669 43.1144 36.5671C43.0511 36.4673 42.9664 36.3829 42.8664 36.3199C41.8142 35.3244 39.9784 33.3473 36.8881 31.0994C36.7942 31.031 36.6867 30.9837 36.5728 30.9609C36.4589 30.9381 36.3415 30.9402 36.2285 30.9672C36.1156 30.9941 36.0098 31.0453 35.9185 31.1171C35.8273 31.1889 35.7527 31.2797 35.6999 31.3831C33.5869 35.5267 32.2585 39.4605 31.4225 44.0238C30.7213 43.6705 30.6785 43.6491 30.5436 43.5742C31.3807 37.7821 31.5306 32.3005 31.6098 27.1731C31.6117 27.0484 31.5846 26.9249 31.5305 26.8125C31.4765 26.7001 31.397 26.6018 31.2983 26.5255C28.6351 24.4639 26.2031 22.7362 23.8706 21.2483C23.4339 19.8996 23.1288 19.6876 23.3161 19.4008C23.4617 19.176 23.5484 19.313 24.9721 19.1599C27.981 21.1648 30.8187 22.9171 33.407 24.3707C33.6254 24.4928 33.8887 24.5078 34.1199 24.4071C38.6906 22.4322 43.9068 20.7795 49.2343 19.6148C49.2996 19.7165 49.4077 19.8932 49.4698 20.0002C45.6998 21.8413 41.8505 24.5677 38.286 27.946C38.2087 28.0191 38.1467 28.1069 38.1036 28.2042C38.0605 28.3015 38.0373 28.4064 38.0352 28.5129C38.0331 28.6193 38.0522 28.725 38.0914 28.824C38.1306 28.9229 38.1891 29.0131 38.2635 29.0892C40.3883 31.2728 42.3098 33.0733 43.9689 34.437C44.6882 35.0236 45.4204 34.0089 49.4217 33.2125C49.5897 33.4105 49.7663 33.6438 49.9408 33.8922C46.3763 36.1615 45.1539 37.1142 43.9571 41.2674C43.8492 41.2214 43.7411 41.1757 43.6328 41.1304ZM48.1821 37.0596C55.2448 44.6896 63.745 59.1135 56.4383 66.4567C61.4768 58.6736 54.3446 46.8251 46.4191 39.2711C46.8357 38.4124 47.4379 37.657 48.1821 37.0596ZM56.3591 59.3276C56.5539 61.4492 56.2735 63.0099 55.7757 64.2623C53.6616 67.3387 49.777 67.6406 47.2016 66.0231C50.2759 64.7322 53.1211 62.844 55.2116 60.3328C55.6044 60.0116 55.9802 59.6702 56.3591 59.3276ZM50.5617 35.4026C50.8678 35.2024 51.1579 35.0204 51.4052 34.878C51.4351 34.8663 51.4673 34.8705 51.4951 34.8545C51.6773 34.7443 51.8084 34.5664 51.8596 34.3597C51.9108 34.153 51.8778 33.9344 51.768 33.752C51.5443 33.3816 50.9513 32.446 50.2801 31.7749C50.1893 31.6832 50.0775 31.6151 49.9544 31.5763C49.8313 31.5375 49.7007 31.5292 49.5737 31.5522C47.7732 31.868 46.1783 32.3872 44.6454 32.9117C43.2635 31.7503 41.7007 30.2881 39.9869 28.554C43.5054 25.3213 47.2755 22.7437 50.9299 21.077C51.107 20.9944 51.2475 20.8493 51.3245 20.6697C51.4015 20.49 51.4096 20.2882 51.3474 20.103C51.3323 19.967 51.2818 19.8374 51.2007 19.7272C50.6794 19.0529 50.2662 17.7587 49.3703 17.9439C43.9207 19.1032 38.5633 20.7709 33.8491 22.7758C26.3197 18.5069 25.8466 17.4387 25.0706 17.5307C23.5987 17.718 22.6717 17.4569 21.9738 18.5187C21.8041 18.7778 21.6982 19.0735 21.6649 19.3815C21.6316 19.6894 21.6718 20.0009 21.7822 20.2903C23.269 23.8837 20.8541 20.5151 29.9977 27.5499C29.9121 32.8539 29.7483 38.1075 28.8791 43.8514C28.7271 44.8608 30.4366 45.1338 31.3914 45.8563C31.4936 45.9345 31.6133 45.9867 31.7402 46.0083C31.867 46.03 31.9972 46.0205 32.1196 45.9807C32.242 45.9409 32.3529 45.872 32.4427 45.7798C32.5325 45.6877 32.5986 45.5751 32.6353 45.4517C33.331 44.7688 32.9457 40.6883 36.705 32.9663C38.3385 34.2144 39.9056 35.6145 41.675 37.4C41.7339 38.0444 41.8216 38.3034 42.0036 41.1679C42.0818 42.386 42.1503 42.2404 43.2539 42.7136C44.0749 43.07 44.1273 43.1064 44.4067 43.0668C44.611 43.1005 44.8203 43.0534 44.9905 42.9356C45.1607 42.8177 45.2784 42.6383 45.3187 42.4352C45.4193 41.9343 45.5842 41.4044 45.7662 40.8853C50.5927 45.5737 54.7042 50.6647 56.0776 57.4148C53.4756 59.9274 50.4401 61.9481 47.1181 63.3792C47.1502 60.4323 46.1387 56.8839 44.5887 55.0181C43.2239 53.3739 41.5166 52.554 39.9141 52.7552C37.0144 53.1288 35.672 56.4964 33.4702 56.8549C32.0733 57.0862 30.5897 55.5897 30.8348 54.1896C31.0189 53.162 31.8453 51.6698 30.8434 50.4763C30.2375 49.7484 29.1928 49.5279 27.9008 49.8512C25.3307 50.4977 23.041 52.2725 21.7747 54.6017C20.7835 56.4289 20.6047 59.242 20.9419 61.5488C14.5622 57.6674 9.69174 51.3904 7.56802 43.8161C10.2227 44.331 12.888 43.7165 14.9229 42.3207C16.034 41.5564 16.5328 40.5866 16.2898 39.6543C15.9955 38.5303 14.8683 38.1771 14.2368 37.7489C13.4447 37.2062 13.1674 35.9667 13.6577 35.151C14.1383 34.346 15.1777 33.8815 16.3444 33.2938C20.4088 31.1829 19.7516 27.688 16.0351 26.1038C13.5571 25.044 10.6905 24.83 8.06256 25.4626C11.1347 16.79 18.2455 9.92642 26.8817 6.8286C27.0102 11.7804 29.6605 14.1996 32.2563 14.4768C36.0531 14.8729 39.3982 10.3235 42.4264 11.4293C44.153 12.0608 45.0511 14.4243 47.0603 15.5558C49.9569 17.1893 53.8789 15.4702 54.2718 11.7815C59.7973 16.4549 63.517 23.0402 64.8197 30.1253C66.1385 37.2993 64.9803 44.985 60.7093 51.7158C59.0202 45.5373 54.6593 40.2013 50.5617 35.4026Z" />
                                                <path d="M59.2244 26.0313C58.6495 25.632 58.6281 25.6138 58.6838 24.841C58.7095 24.4781 58.7395 24.066 58.6281 23.6346C58.0544 21.3974 54.8121 21.2657 53.9001 23.6196C53.2578 25.2798 50.3709 26.0805 51.7175 29.5498C52.8789 32.5427 57.2794 33.7202 59.6279 31.4947C60.3515 30.8097 60.7711 29.7778 60.7508 28.7363C60.723 27.441 60.1353 26.6618 59.2244 26.0313ZM53.215 28.9685C52.2677 26.529 54.5048 26.5012 55.3976 24.1998C55.5581 23.7855 55.9681 23.5051 56.3256 23.5051C56.6543 23.5051 56.9989 23.7459 57.0728 24.0328C57.2034 24.5434 56.8405 25.4565 57.3008 26.3385C57.9099 27.5053 59.1162 27.3019 59.1451 28.7684C59.2029 31.7538 54.2876 31.7399 53.215 28.9685ZM52.7954 5.07556L53.382 0.879487C53.4014 0.673445 53.3407 0.467836 53.2124 0.30546C53.084 0.143084 52.898 0.036453 52.6931 0.007764C52.4881 -0.020925 52.28 0.0305387 52.112 0.151442C51.944 0.272345 51.8292 0.453372 51.7913 0.656838L51.2047 4.85398C51.0592 5.90621 52.6477 6.12778 52.7954 5.07556ZM57.7654 2.49048L55.1471 6.2466C54.5338 7.12542 55.8707 8.01816 56.4637 7.16396L59.082 3.4089C59.1449 3.32257 59.1899 3.22456 59.2144 3.1206C59.2389 3.01665 59.2425 2.90885 59.2248 2.80351C59.2072 2.69818 59.1687 2.59743 59.1116 2.50716C59.0545 2.41689 58.98 2.33892 58.8924 2.27781C58.8048 2.21671 58.7058 2.17369 58.6014 2.15129C58.497 2.1289 58.3891 2.12756 58.2842 2.14736C58.1792 2.16717 58.0793 2.20772 57.9902 2.26663C57.9011 2.32555 57.8247 2.40165 57.7654 2.49048ZM59.4995 11.1438L64.1323 7.6692C64.3026 7.54145 64.4152 7.35126 64.4453 7.14048C64.4754 6.9297 64.4206 6.71559 64.2928 6.54525C64.1651 6.37491 63.9749 6.2623 63.7641 6.23219C63.5533 6.20208 63.3392 6.25694 63.1689 6.38469L58.535 9.86036C57.6797 10.5015 58.6613 11.7754 59.4984 11.1449L59.4995 11.1438Z"  />
                                            </svg>
                                        </div>
                                        <div class="feature-card-content">
                                            <h6>All india Coverage</h6>
                                            <p>Curabitur convallis enimatnora ullamcorper sagittis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-card style-3 olive-bg">
                                        <div class="feature-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                                <path
                                                    d="M63.3244 22.918C62.2732 22.7909 58.8339 22.9134 57.757 22.876C56.4317 22.8749 53.0974 22.8597 51.8059 22.8597L50.8142 22.8574C50.1877 22.9134 49.8389 22.3744 50.071 21.84C50.1854 21.5157 50.806 19.8847 50.9344 19.5149C52.4779 15.3639 54.9104 8.78736 56.4679 4.64103C56.6837 4.05303 56.9905 3.31453 57.1819 2.7102C57.4339 1.7407 56.679 0.652196 55.6442 0.590363L39.7274 0.416529C37.7744 0.376863 30.8957 0.259029 29.0652 0.220529C28.7036 0.197772 28.3422 0.267313 28.0148 0.422618C27.6875 0.577923 27.405 0.813894 27.1939 1.10836C26.8987 1.47353 26.838 1.98103 26.7249 2.3917C26.6234 2.7837 26.4099 3.72753 26.236 4.46953C25.9333 4.45046 25.6438 4.33887 25.4065 4.14986C23.7569 2.80936 22.176 1.69986 20.1857 3.2632C19.3877 3.79403 18.9794 4.4917 18.0892 4.6177C17.0812 4.66903 16.0685 4.25253 14.8855 4.5022C14.1739 4.62353 13.475 5.23953 13.1659 5.85086C12.6525 6.71886 12.5207 7.8062 11.9654 8.46653C11.3505 9.0557 10.2387 9.2412 9.41037 9.77086C8.12004 10.402 7.95554 12.0237 8.24137 13.195C8.38837 14.168 8.62871 14.8575 8.01037 15.6894C5.90921 18.2957 5.92671 19.0645 8.07687 21.6044C8.73254 22.4175 8.53187 23.191 8.39887 24.1687C7.73154 27.6512 10.2772 27.3152 12.1882 28.6499C12.761 29.2239 12.9407 30.3065 13.4925 31.297C14.0245 32.4905 15.5587 32.6562 16.6659 32.4124C17.6447 32.2759 18.438 32.0764 19.2547 32.7355L19.9185 33.2535L19.1707 36.456L19.0739 36.8749C18.7087 38.2445 19.9524 39.697 21.3185 39.6329C21.3349 39.6235 28.5484 39.6795 28.8879 39.6515C29.834 39.655 36.1364 39.6597 36.9274 39.6667C36.9285 39.6025 35.9859 42.7759 35.9812 42.7712L28.3045 68.5709C28.2413 68.7725 28.2508 68.9898 28.3313 69.1852C28.4118 69.3805 28.5582 69.5414 28.7451 69.6399C28.932 69.7384 29.1475 69.7683 29.3542 69.7243C29.5608 69.6803 29.7455 69.5653 29.876 69.3992C36.2904 61.1614 52.9294 39.8184 59.1909 31.885L64.1025 25.6539C64.9519 24.8209 64.5202 23.1782 63.3255 22.9215L63.3244 22.918ZM16.5235 31.4569C15.6089 31.5899 14.7805 31.7334 14.2882 30.8245C13.797 30.0499 13.6897 28.9579 12.8427 27.9907C11.886 27.125 10.7882 27.0107 10.0205 26.5242C9.11871 26.0307 9.27387 25.2245 9.40338 24.3145C9.62271 23.2692 9.72071 21.8902 8.94254 20.9849C8.31604 20.1122 7.53671 19.3434 7.55887 18.6667C7.63121 17.521 9.76854 16.1677 9.68921 14.6522C9.74871 13.629 9.37771 12.5919 9.53404 11.704C9.60871 11.396 9.76854 11.2257 10.1395 11.0122C11.0717 10.507 12.1415 10.4032 13.0655 9.5667C13.923 8.67886 14.0817 7.59853 14.6149 6.70136C14.8424 6.35136 14.9824 6.2557 15.239 6.20903C16.1117 6.11336 17.1115 6.5112 18.1627 6.48436C19.3644 6.52753 20.4937 5.49503 21.3372 4.87553C22.4992 3.92703 23.1549 5.2232 24.1804 5.87186C25.137 6.73753 26.8007 6.7212 27.8997 6.4902C28.5052 6.43653 28.9054 6.32336 29.2367 6.55086C29.9869 7.5227 29.9507 8.77453 30.989 9.84436C32.0507 10.8804 33.292 10.8734 34.2557 11.62C34.5929 12.4682 34.062 13.5695 34.1647 14.6732C34.0877 16.2704 35.9054 17.4195 36.288 18.669C36.3009 18.8137 36.1935 19.124 35.9392 19.4845C35.5239 20.034 34.818 20.9382 34.5415 21.588C33.9815 22.8819 34.7072 24.4102 34.5987 25.5897C34.4412 26.2722 33.5242 26.4635 32.8394 26.789C32.3494 27.006 31.787 27.2347 31.255 27.7574C30.415 28.6884 30.3182 29.7512 29.82 30.695C29.379 31.549 28.7117 31.3729 27.8332 31.2912C27.0562 31.1909 26.0447 31.017 25.2245 31.381C24.1384 31.8384 23.0639 33.2885 22.1655 33.3014C21.4679 33.3282 20.6932 32.5465 19.8275 31.92C18.9269 31.1477 17.5654 31.241 16.5224 31.4592L16.5235 31.4569ZM57.253 32.662C56.6171 32.2274 55.9652 31.8165 55.2989 31.43C53.9304 30.6357 52.544 29.8725 51.1409 29.141C50.0395 28.5682 48.9289 28.014 47.8124 27.4704C46.718 26.9313 45.6072 26.4263 44.4815 25.956C44.4211 25.9315 44.3596 25.9097 44.2972 25.8907C44.2379 25.8736 44.1746 25.8759 44.1167 25.8973C44.0587 25.9187 44.0092 25.9581 43.9752 26.0097C43.938 26.066 43.9224 26.1338 43.9311 26.2006C43.9399 26.2675 43.9726 26.329 44.023 26.3737C44.0919 26.432 44.1677 26.4892 44.2505 26.5417C46.3063 27.8269 48.411 29.0322 50.5599 30.1549L50.687 30.2214C51.7814 30.793 52.8862 31.3449 54.0015 31.8769C54.9407 32.3237 55.8927 32.7484 56.847 33.166L55.4377 34.9184C53.0577 33.502 50.5984 32.2467 48.1425 30.982C45.5164 29.7045 42.8984 28.4084 40.1824 27.3105C40.1123 27.2834 40.0346 27.2834 39.9645 27.3105C39.8944 27.3376 39.8369 27.3898 39.8032 27.457C39.7696 27.5242 39.7622 27.6015 39.7824 27.6739C39.8027 27.7462 39.8492 27.8084 39.9129 27.8484C42.4352 29.3255 45.0051 30.7197 47.6187 32.0285C50.0485 33.2423 52.5144 34.3822 55.013 35.4469L52.5934 38.4499C52.004 38.0298 51.3984 37.6328 50.778 37.2599C49.434 36.4651 48.0689 35.7065 46.6842 34.9849C44.7965 34.0119 42.9077 33.0424 40.9302 32.2292C40.8229 32.1849 40.698 32.2094 40.6304 32.2887C40.5499 32.3832 40.5639 32.5104 40.6444 32.571C41.8274 33.4647 43.6392 34.5987 45.577 35.6732C45.8839 35.8435 46.1942 36.008 46.5057 36.1737C47.7158 36.8147 48.9387 37.4312 50.1737 38.0229C50.8889 38.367 51.5585 38.6727 52.1909 38.9469L49.7992 41.909C49.4907 41.6414 49.1674 41.3914 48.8309 41.16C47.9699 40.5639 46.9922 39.9899 46.2455 39.543C46.0962 39.4532 45.9679 39.3739 45.8629 39.3144C44.4862 38.5257 43.0979 37.7592 41.6197 37.1339C41.5404 37.1 41.4494 37.0965 41.391 37.1292C41.3175 37.1712 41.3012 37.2435 41.3175 37.2797C41.552 37.7954 42.9835 38.8734 44.6472 39.8965C45.7635 40.564 46.8991 41.1986 48.0527 41.7994C48.5369 42.0537 48.9779 42.2742 49.3617 42.4527L47.1357 45.206C47.0914 45.1664 47.0494 45.1267 47.0027 45.087C46.291 44.4734 45.3367 43.8235 45.1617 43.6695C44.233 43.0629 43.3149 42.4399 42.2707 41.9977C41.2405 42.0385 42.3722 43.092 43.8352 44.1467C44.5667 44.674 45.381 45.2014 46.0484 45.6015C46.2374 45.7147 46.41 45.815 46.571 45.9049C41.279 52.4499 35.5787 59.486 31.4732 64.5505L38.1757 43.449C38.4989 42.413 38.9107 41.1869 39.1989 40.1252C39.5384 38.7182 38.2889 37.2599 36.8737 37.3392C36.596 37.3322 35.903 37.3509 35.6125 37.3415L28.8844 37.352C28.4399 37.3275 21.3664 37.4069 21.2229 37.352C21.2229 37.352 21.217 37.345 21.2182 37.3275L21.2999 36.925L21.8295 34.3222C23.0137 34.4984 24.0415 33.6502 25.1324 32.8067C25.9665 32.186 26.6677 32.4264 27.6419 32.5757C29.988 33.117 31.0275 32.018 31.7625 29.9285C32.3319 27.9639 34.6104 28.476 35.8307 27.0247C36.5435 26.2547 36.477 24.92 36.3464 24.1034C36.2414 23.1864 36.0465 22.5505 36.6252 21.8622C37.3182 20.9125 38.3005 20.16 38.374 18.6667C38.3635 17.7684 37.9575 17.1174 37.632 16.639L36.7127 15.4082C36.1935 14.7152 36.4362 14.1634 36.5599 13.2604C36.7372 12.425 36.8037 10.9527 36.0489 10.1255C35.2089 9.03353 33.5324 8.86203 32.6445 8.18653C32.1475 7.60903 31.9539 6.51703 31.4265 5.6957C31.08 5.0412 30.2692 4.36803 29.498 4.2572C29.1273 4.1916 28.7494 4.17591 28.3745 4.21053L28.4597 3.7847C28.5449 3.43936 28.6814 2.5282 28.7817 2.21903C28.7945 2.19458 28.8126 2.17324 28.8346 2.15651C28.8565 2.13978 28.8819 2.12807 28.9089 2.1222L29.8037 2.10236C36.0302 1.9542 49.1774 1.81303 55.5427 1.75703C55.8729 1.76053 56.1482 2.12336 56.0712 2.4652C54.9139 5.80653 52.577 12.0715 51.366 15.449L50.0057 19.1765C49.8704 19.5359 49.2824 21.175 49.1552 21.5064C48.6407 22.603 49.6359 23.9575 50.8084 23.8129L52.6365 23.807C53.8839 24.759 55.1803 25.6449 56.5204 26.4612C57.2423 26.8991 57.9764 27.3165 58.7219 27.713C59.3075 28.0245 59.906 28.3127 60.5069 28.5985L59.0835 30.3754C58.6121 30.0059 58.1206 29.6627 57.6112 29.3475C56.468 28.6375 55.3076 27.9555 54.131 27.3024C53.2191 26.7979 52.2981 26.3102 51.3684 25.8394C50.4507 25.3642 49.5156 24.9237 48.5649 24.5187C48.5145 24.4973 48.4615 24.4824 48.4074 24.4744C48.3558 24.4666 48.3031 24.4733 48.2552 24.4937C48.2072 24.5141 48.1658 24.5474 48.1355 24.5899C48.1025 24.635 48.0842 24.6893 48.0832 24.7453C48.0821 24.8012 48.0984 24.8562 48.1297 24.9025C48.1745 24.9676 48.2306 25.0241 48.2954 25.0694C49.9767 26.2245 51.7128 27.298 53.4975 28.2859L53.6025 28.3442C54.5108 28.8495 55.4304 29.3342 56.3605 29.7979C57.1224 30.1782 57.8982 30.534 58.6752 30.8864L58.3847 31.248L57.2484 32.6655L57.253 32.662ZM63.3512 25.053L60.9572 28.0397C60.6311 27.76 60.2891 27.4994 59.9329 27.2592C58.7744 26.4612 57.3277 25.627 57.1317 25.4579C56.4014 25.0344 55.6745 24.6074 54.9337 24.2025C54.6805 24.0637 54.4239 23.933 54.1684 23.8C56.728 23.793 59.4744 23.7884 61.7237 23.7954C61.9325 23.807 62.9382 23.7732 63.0922 23.8257C63.616 23.9902 63.8039 24.6167 63.3512 25.053Z"
                                                />
                                                <path
                                                    d="M20.878 14.0003C21.1265 9.52498 14.3983 9.60781 14.6083 14.0003C14.9105 17.757 20.5817 17.8258 20.878 14.0003ZM18.7885 14.0003C19.0627 16.4188 15.5592 16.3768 15.7248 14.0003C16.0935 12.0636 18.4012 12.3868 18.7885 14.0003ZM23.9417 23.3336C24.2438 27.0903 29.915 27.1591 30.2113 23.3336C30.4598 18.8583 23.7317 18.9411 23.9417 23.3336ZM28.123 23.3336C28.3972 25.7521 24.8937 25.7101 25.0593 23.3336C25.428 21.397 27.7357 21.7201 28.123 23.3336ZM27.3285 12.1616L15.509 23.6755C14.4065 24.7628 16.0772 26.423 17.1587 25.3251L28.6725 13.5056C29.5277 12.6213 28.2058 11.31 27.3285 12.1616Z"
                                                />
                                            </svg>
                                        </div>
                                        <div class="feature-card-content">
                                            <h6>Competitive Pricing</h6>
                                            <p>Curabitur convallis enimatnora ullamcorper sagittis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-card style-3 orange-bg">
                                        <div class="feature-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                                <path
                                                    d="M7.93843 51.3254C12.6831 53.6803 5.85265 67.327 12.9084 67.6649C75.927 66.7024 62.2114 79.3331 63.2231 16.2587C63.2406 13.9159 60.9842 12.6646 58.8459 12.9774C59.5798 8.84525 55.3722 8.22729 52.2834 8.60244C54.0936 -0.338964 39.5347 -0.333496 41.3459 8.60244H38.0647C39.8748 -0.338964 25.3159 -0.333496 27.1272 8.60244H23.8459C25.6561 -0.338964 11.0972 -0.333496 12.9084 8.60244C10.3972 8.47557 6.29125 8.33119 6.34593 11.8837C6.93656 13.7146 4.78296 51.5157 7.93843 51.3254ZM61.0662 16.7312C61.1406 17.6695 61.1358 18.6123 61.052 19.5498C60.1803 19.331 59.4989 20.1153 58.8459 20.5735V19.4295C61.3933 19.3704 61.8428 16.3998 58.8459 17.931V17.5788C59.6577 17.5414 60.4361 17.2443 61.0662 16.7312ZM58.8459 21.5754C59.6078 21.5008 60.3403 21.243 60.9809 20.824C60.954 21.1261 60.972 21.4306 61.0345 21.7274H58.847L58.8459 21.5754ZM59.9397 15.166C60.1215 15.1502 60.3036 15.194 60.4585 15.2906C60.6133 15.3873 60.7326 15.5317 60.7983 15.702C60.0917 15.516 59.4092 16.1373 58.847 16.5004V15.166H59.9397ZM58.8459 23.916H61.0334C60.433 82.3048 70.2953 62.3067 12.9073 65.4796C10.6837 65.8067 12.2686 56.1434 11.8158 55.2115C14.0656 56.8204 18.527 63.5185 21.6595 63.291C69.3623 63.2265 57.7478 69.952 58.847 23.916H58.8459ZM15.0959 50.166H21.6584V56.7285H19.4709C19.8898 53.7196 18.6572 50.1201 15.0959 50.166ZM17.2834 57.5871L12.0498 52.3524C16.7716 51.916 17.6586 52.9321 17.2845 57.5871H17.2834ZM43.5334 6.41494C43.5334 3.75385 47.203 3.96932 48.9584 4.45166C44.0803 6.6665 45.7231 8.91744 49.9811 6.01354C50.0705 6.42576 50.1217 6.84535 50.1342 7.26697C47.5573 7.91229 46.5467 10.5067 50.1211 8.74135C50.1025 9.18541 50.0806 9.61307 50.073 9.99041C48.8447 10.3328 48.3087 11.864 50.0456 11.3171C49.6847 13.1317 47.2566 13.0671 45.7209 12.9774C42.5797 13.0562 43.7358 8.2601 43.5334 6.41494ZM29.3147 6.41494C29.2862 3.72541 33.4578 3.77682 35.07 4.67807C30.882 5.99604 31.8719 8.96557 35.7481 5.95775C35.8546 6.42816 35.9122 6.90832 35.9198 7.39057C35.4014 7.63775 34.6216 7.73947 34.4564 8.39463C32.4297 9.36916 33.3309 10.9792 35.1094 9.48838C35.3709 9.53723 35.6414 9.49435 35.875 9.36697C35.8608 9.72791 35.8487 10.0648 35.8542 10.359C34.172 10.7462 32.8836 13.3493 35.5458 11.9974C34.7758 13.1109 32.8136 13.054 31.5022 12.9774C28.3609 13.0562 29.517 8.2601 29.3147 6.41494ZM15.0959 6.41494C15.0281 3.69697 19.7553 3.58322 21.1127 4.96463C16.462 6.24979 17.3939 9.83947 21.6081 6.32744C21.6742 6.77206 21.7064 7.22107 21.7044 7.67057C18.9197 8.5915 18.1136 11.6431 21.677 8.90104C21.6573 9.34182 21.6387 9.75525 21.6355 10.1228C20.673 10.4028 19.8909 12.3015 21.4616 11.7645C20.8152 13.1185 18.6802 13.0584 17.2834 12.9785C14.1422 13.0562 15.2983 8.2601 15.0959 6.41604V6.41494ZM8.53343 11.8837C8.46015 10.0899 11.9481 10.9988 12.9084 10.7899C12.8264 16.8099 23.9291 16.8099 23.8459 10.7899H27.1272C27.0452 16.8099 38.1478 16.8099 38.0647 10.7899H41.3459C41.2639 16.8099 52.3666 16.8099 52.2834 10.7899C58.4544 9.91822 56.315 13.1765 56.6584 17.3524C40.9609 17.1129 24.1434 18.4856 8.53343 17.3524V11.8837ZM56.6584 19.5399C54.04 69.1306 70.4309 60.5665 21.6595 61.1024C21.0795 61.1022 20.5232 60.8716 20.1131 60.4614C19.7029 60.0512 19.4723 59.495 19.472 58.9149C25.4439 60.281 23.5955 53.6026 23.847 50.1649C23.9947 46.5742 17.0177 48.3963 15.097 47.9774C14.517 47.978 13.961 48.2087 13.5509 48.6188C13.1408 49.0289 12.9101 49.585 12.9095 50.1649C11.235 50.2557 8.49734 50.3421 8.53453 47.9774V19.5399H56.6584Z"
                                                />
                                                <path
                                                    d="M12.9069 23.8964C13.3236 26.2578 11.7562 30.7531 14.1789 31.9311C17.1211 31.4947 23.1848 33.3989 23.9986 29.5183C23.759 26.8277 24.0751 21.0078 20.1551 21.4771C18.4872 21.8927 10.1594 20.6567 12.9069 23.8964ZM16.0634 23.5869C22.4509 22.4297 22.8622 23.1592 22.0178 29.6025C19.7881 29.9836 17.5192 30.0814 15.265 29.8935C15.0615 27.8296 14.8964 25.8028 14.5781 23.7499C15.0747 23.6722 15.5887 23.6405 16.0634 23.5869ZM27.9175 23.3452C28.0389 25.4452 26.2167 31.3296 29.0878 31.5702C32.03 30.5377 35.8384 32.2089 38.3573 30.6591C38.4361 27.5931 37.8716 24.5446 36.7003 21.71C34.1562 20.6217 31.1003 21.9014 28.39 21.3841C28.1594 21.3884 27.9367 21.4691 27.7569 21.6135C27.577 21.7579 27.4501 21.9579 27.3961 22.1821C27.3421 22.4063 27.364 22.6421 27.4583 22.8526C27.5527 23.0631 27.7141 23.2363 27.9175 23.3452ZM30.5239 23.0892C32.2941 22.8801 34.0745 22.7688 35.857 22.7556C36.1447 24.8436 36.218 26.9874 36.4323 29.0928C34.249 28.8704 32.047 28.9064 29.872 29.2C29.8522 27.2217 29.6663 25.2486 29.3164 23.3014C29.7136 23.2033 30.117 23.1324 30.5239 23.0892ZM42.2248 29.7163C41.5095 33.9491 49.4873 31.8578 51.9876 31.6522C53.6469 29.8519 52.8933 22.5347 50.9125 21.1763C42.344 19.7424 40.8215 21.2321 42.2248 29.7163ZM44.6037 30.6153L44.6694 30.7291C44.6256 30.8461 44.6037 30.8024 44.6037 30.6153ZM43.989 23.1089C46.103 22.7552 48.2493 22.6335 50.3897 22.7458C50.755 25.0925 50.861 27.4722 50.7058 29.8421C48.6495 29.9438 46.6009 29.9864 44.5425 30.0531C44.2253 27.7256 43.6598 25.4485 43.498 23.1013C43.6606 23.13 43.8256 23.1326 43.989 23.1089ZM23.1815 34.5933C21.1745 34.1602 14.0105 33.3617 13.8595 36.0556C13.7906 38.1874 12.4355 44.9435 15.1753 45.3678C17.5052 44.9458 19.8633 44.6983 22.23 44.6274C25.6315 43.3346 25.4784 36.7994 23.1815 34.5933ZM22.4455 40.2261C22.3518 40.8712 22.1931 41.5052 21.9719 42.1183C21.9762 42.1106 21.8537 42.3152 21.9172 42.22C20.0687 42.8194 17.7762 42.336 15.8239 42.9933C15.7034 40.9107 15.4785 38.8354 15.1501 36.7753C19.0308 36.3728 23.7251 34.2094 22.4455 40.2261ZM51.8389 33.4689C50.1086 33.3081 43.1326 32.5349 44.199 35.4836C42.7181 37.2249 43.4859 40.4328 43.2628 42.6608C43.6117 45.7496 47.5437 43.9919 49.5759 44.1002C51.2253 44.1188 53.2247 43.7042 53.3155 41.7081C53.5069 39.1674 54.4617 34.9378 51.8389 33.4689ZM51.303 35.3721H51.3139C51.5326 35.3513 51.327 35.4519 51.303 35.3721ZM45.505 42.4267C45.5148 42.4639 45.5422 42.4213 45.505 42.4267V42.4267ZM51.397 38.9081C51.3481 39.8329 51.21 40.7508 50.9847 41.6491C49.1641 41.8533 47.3384 42.0076 45.5094 42.1117C45.307 40.0347 45.7117 37.7225 44.875 35.7899C46.9608 35.8336 49.1712 35.1894 51.2865 35.3731C51.4508 36.5441 51.4885 37.7293 51.397 38.9081ZM38.9589 48.0781C29.9748 45.8939 27.8289 47.9305 28.8275 56.9528C29.0025 61.061 34.3575 59.0813 36.9748 59.0988C39.3494 59.3503 40.0373 57.1803 39.7792 55.2061C39.3723 52.9453 41.0512 49.628 38.9589 48.0781ZM30.9034 57.1344C30.9303 57.131 30.9575 57.1362 30.9812 57.1492C31.005 57.1621 31.0241 57.1822 31.0358 57.2066C30.9947 57.1774 30.9502 57.1532 30.9034 57.1344ZM37.7033 56.978C37.6289 57.0272 37.6726 57.0786 37.7033 56.978V56.978ZM38.365 50.5697C38.2221 52.7078 38.0032 54.8401 37.7087 56.9627C35.5497 57.0349 33.2758 57.6846 31.1473 57.2766C31.1692 54.6314 30.9395 51.9902 30.4615 49.3885C32.2586 49.6914 38.6515 47.9403 38.365 50.5697ZM49.3867 47.4536C48.0983 47.7807 42.9489 46.8433 44.4331 49.2178C43.6325 51.8581 43.2814 56.371 45.4503 58.3014C48.5521 58.7566 51.7135 58.5882 54.7494 57.806C56.1056 52.9913 56.5781 45.5691 49.3867 47.4536ZM53.6764 48.66C54.523 50.9186 53.8536 54.0752 53.5889 56.5602C51.2308 56.1588 48.8344 56.8872 46.4697 56.5055C45.8524 54.1523 45.553 51.7271 45.5794 49.2944C48.2656 49.1139 50.9934 48.2346 53.6764 48.66ZM30.2067 34.6808C30.1995 34.7113 30.1955 34.7425 30.1947 34.7738L30.2067 34.6808ZM30.1936 34.7956C30.1888 34.8199 30.1852 34.8443 30.1826 34.8689L30.1936 34.7956Z"
                                                />
                                                <path
                                                    d="M27.5413 36.9601C28.4054 37.2456 31.2404 34.6403 29.7474 34.007C28.5552 33.855 26.6412 35.9156 27.5413 36.9601ZM27.4166 41.0398C29.3996 42.7614 28.0729 39.3051 28.0882 38.2836C27.0207 36.8004 26.7505 40.4186 27.4166 41.0398ZM30.6804 42.6804C28.7488 40.8429 28.9194 43.7195 30.3982 44.4075C32.0727 45.7965 34.398 43.8026 31.5455 43.1092L31.7501 43.1967C31.3756 43.0637 31.0176 42.8906 30.6804 42.6804Z"
                                                />
                                                <path
                                                    d="M33.795 44.7883C35.3361 45.6261 39.406 43.0569 36.4682 42.3974C35.6347 42.8042 32.1489 43.6289 33.795 44.7883ZM40.3269 39.7308C39.1478 39.5569 38.5441 41.2916 38.0596 42.1163C38.6021 44.1135 41.8866 40.6135 40.3269 39.7308ZM33.9066 34.1538C37.551 35.2661 37.6264 32.278 34.0674 32.3994C31.1175 32.2255 30.703 34.0466 33.9066 34.1538Z"
                                                />
                                                <path
                                                    d="M37.7899 34.3283C37.8528 34.9919 38.0872 35.6278 38.4702 36.1734L38.3357 35.9984C38.5369 36.2916 38.7437 36.6645 39.1538 36.6317C37.756 37.755 36.6644 39.8364 35.3662 37.4083C33.0988 34.5722 33.7146 38.758 34.8685 39.8856C38.736 45.0044 49.7151 26.8427 39.9041 35.9427C40.2399 34.8981 38.5151 32.7675 37.7899 34.3283Z"
                                                />
                                            </svg>
                                        </div>
                                        <div class="feature-card-content">
                                            <h6>Fast Booking</h6>
                                            <p>Curabitur convallis enimatnora ullamcorper sagittis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-card style-3 yellow-bg">
                                        <div class="feature-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                                <g clip-path="url(#clip0_1509_907)">
                                                    <path
                                                        d="M67.276 47.5101C64.9528 45.2928 62.1063 49.3728 55.5442 51.8647C50.2253 53.8906 49.1313 53.9912 46.3561 54.4485C44.2405 54.7944 38.581 55.7242 35.9324 55.2744C38.5248 53.7263 40.8589 51.508 42.9053 49.2485C46.2761 45.5934 47.554 44.8193 47.7377 42.895C47.9248 41.0961 46.8307 39.4194 44.7961 38.9696C40.1832 37.8972 36.7983 42.7026 34.1432 44.6204C32.3508 45.9199 29.807 45.615 28.074 45.7696V45.7674C24.047 46.0096 21.5368 48.068 17.7444 48.8669C17.5984 48.2193 17.4546 47.5718 17.2795 46.9285C16.8298 45.2528 15.1833 44.0723 13.4287 44.1728C9.29249 44.3566 9.93249 44.7101 6.58332 44.8464C4.63197 44.9274 2.94549 44.9977 2.22333 45.8636C2.09343 46.0182 1.99823 46.1989 1.94414 46.3934C1.89005 46.5879 1.87835 46.7918 1.90982 46.9912C2.76928 53.1133 2.30441 57.4885 3.04387 61.949C3.07986 62.1602 3.198 62.3486 3.37249 62.473C3.54698 62.5974 3.76362 62.6477 3.97506 62.6128C4.18649 62.578 4.37553 62.4608 4.50085 62.287C4.62618 62.1132 4.67759 61.8968 4.64386 61.6852C3.99846 57.789 4.33035 52.629 3.52711 46.8593C4.2417 46.4118 7.66223 46.5426 9.11195 46.2626C10.3401 46.0247 11.8168 45.8669 13.5011 45.7923C14.4979 45.7674 15.4644 46.4193 15.7163 47.3512C17.4633 53.8106 17.6946 60.5079 16.3952 66.7706C13.5454 66.6138 10.7455 66.336 7.88169 66.2019C7.48277 66.1738 7.05466 66.5263 7.03304 66.9738C7.02306 67.1886 7.09877 67.3985 7.24351 67.5574C7.38826 67.7164 7.5902 67.8113 7.80493 67.8214L7.84818 67.8236L9.14979 69.056C10.2719 70.1198 11.2687 70.0008 17.766 69.9922C18.5281 69.9922 19.1357 69.469 19.1757 68.7511C19.2665 67.0917 19.3379 65.389 19.4362 63.7457C27.5378 67.8571 36.2567 69.4592 44.3096 68.3003C52.4772 67.1252 59.9312 63.1187 65.5452 56.8885C66.4274 55.9101 67.2793 54.8517 67.7431 53.5069C68.0371 52.655 68.2663 51.3404 67.9614 50.2863C68.2847 49.1209 67.9993 48.202 67.276 47.5101ZM26.0578 47.6982C29.2394 46.8982 31.7065 47.9707 34.8286 46.1026C37.2654 44.6647 38.9216 41.6777 42.1561 40.6431C42.2642 40.6431 44.7691 39.9231 45.7475 41.3404C45.7723 41.3761 45.8405 41.4572 45.8707 41.4896C46.6253 43.6366 45.8513 43.6626 41.7443 48.1166C41.6902 48.1653 41.6621 48.2031 41.6707 48.2031H41.6729C41.0491 48.6809 38.3075 52.2615 34.3346 54.349C34.2621 54.3879 34.2059 54.4442 34.1508 54.5004C33.4146 54.4409 32.9983 55.3036 33.4805 55.8441C35.1735 57.7458 41.1507 56.9469 46.6199 56.0474C47.9204 55.7296 48.9356 56.1144 56.1215 53.3815C61.1582 51.468 66.449 46.7501 66.4782 49.3988C66.4944 50.988 63.7398 53.3912 62.5961 54.5101C59.7442 57.2236 56.7204 59.2906 53.288 60.9976C41.9767 66.5349 31.0989 63.9836 18.8016 60.3349C18.928 57.0245 18.6814 53.7103 18.0665 50.455C20.8254 49.8755 23.7238 48.3469 26.0578 47.6982Z"
                                                    />
                                                    <path
                                                        d="M12.4165 51.1959C14.4803 51.7029 15.4965 49.2175 14.0209 47.9937C13.9348 47.9208 13.8341 47.8671 13.7256 47.8361C13.6171 47.8052 13.5033 47.7977 13.3917 47.8143C12.9679 47.6045 12.4857 47.5526 12.0652 47.6856C10.3993 48.2002 10.4403 50.7126 12.4165 51.1959ZM29.7149 24.7181C30.0662 24.7181 30.4132 24.6338 30.7332 24.4889L33.9689 27.7343L33.9256 27.7387C33.7115 27.7562 33.513 27.858 33.3739 28.0218C33.2348 28.1856 33.1665 28.398 33.184 28.6122C33.2015 28.8264 33.3034 29.0248 33.4672 29.1639C33.631 29.303 33.8434 29.3713 34.0575 29.3538L36.091 29.1862C36.3019 29.1691 36.4978 29.0702 36.6368 28.9106C36.7757 28.751 36.8468 28.5434 36.8348 28.3322L36.7202 26.3473C36.7066 26.1331 36.6091 25.9328 36.4488 25.7899C36.2885 25.6471 36.0784 25.5731 35.864 25.5841C35.6493 25.5966 35.4484 25.6938 35.3053 25.8543C35.1622 26.0149 35.0887 26.2256 35.1008 26.4403L35.1094 26.5808L31.8878 23.3517C32.0567 23.0061 32.143 22.6261 32.14 22.2415C32.137 21.8569 32.0447 21.4783 31.8705 21.1354L35.8208 17.0522L35.8229 17.1398C35.828 17.3514 35.9157 17.5527 36.0672 17.7006C36.2187 17.8485 36.422 17.9312 36.6337 17.9311H36.6543C36.7608 17.9285 36.8657 17.9049 36.963 17.8616C37.0604 17.8184 37.1483 17.7564 37.2217 17.6792C37.2951 17.602 37.3525 17.5111 37.3908 17.4117C37.429 17.3123 37.4473 17.2063 37.4445 17.0998L37.3927 15.0598C37.3873 14.8483 37.2995 14.6473 37.148 14.4997C36.9966 14.3521 36.7934 14.2695 36.5819 14.2695H34.5938C34.3787 14.2695 34.1725 14.355 34.0204 14.507C33.8684 14.6591 33.7829 14.8653 33.7829 15.0803C33.7829 15.2954 33.8684 15.5016 34.0204 15.6537C34.1725 15.8057 34.3787 15.8911 34.5938 15.8911H34.6878L30.7008 20.0133C30.2017 19.8037 29.6454 19.7739 29.1267 19.929C28.6121 20.0741 28.158 20.3814 27.832 20.8052C27.5059 21.229 27.3253 21.7467 27.317 22.2814C27.2976 23.5225 28.3257 24.7181 29.7149 24.7181Z"
                                                    />
                                                    <path
                                                        d="M33.7466 5.703C32.2005 5.44255 30.6267 5.38947 29.0666 5.54516C24.8309 5.70516 21.0558 7.4511 17.8461 10.7408C16.411 12.2099 15.2614 13.9328 14.4558 15.8219C13.75 17.4938 13.3252 19.2709 13.1985 21.0813C12.9012 25.1862 14.1066 29.0726 16.6861 32.318C17.2143 32.9734 17.7922 33.5871 18.4147 34.1537C19.5974 35.9256 21.3899 37.3656 23.3412 38.292C33.0839 42.9169 45.0233 36.9158 47.086 25.7516C48.02 20.6975 46.6189 15.2867 43.4352 11.2327C40.9746 8.0965 37.6979 6.35921 33.7466 5.703ZM14.8115 23.0835H17.1099C17.3249 23.0835 17.5311 22.998 17.6832 22.846C17.8353 22.6939 17.9207 22.4877 17.9207 22.2727C17.9207 22.0576 17.8353 21.8514 17.6832 21.6993C17.5311 21.5473 17.3249 21.4618 17.1099 21.4618H14.8083C14.8137 21.3732 14.8083 21.2856 14.8158 21.1959C14.9315 19.5581 15.3131 17.9624 15.9477 16.4554C16.6092 14.9177 17.5247 13.5023 18.6558 12.2684L19.7001 13.3116C19.7744 13.3913 19.8639 13.4552 19.9633 13.4995C20.0628 13.5438 20.1702 13.5676 20.279 13.5695C20.3879 13.5715 20.496 13.5514 20.597 13.5107C20.6979 13.4699 20.7897 13.4092 20.8667 13.3322C20.9436 13.2552 21.0043 13.1635 21.0451 13.0625C21.0859 12.9616 21.1059 12.8534 21.104 12.7446C21.1021 12.6357 21.0783 12.5283 21.0339 12.4289C20.9896 12.3294 20.9257 12.2399 20.8461 12.1657L19.8028 11.1214C22.4807 8.68136 25.5444 7.35488 28.9325 7.18191V9.11703C28.9325 9.33207 29.018 9.53831 29.17 9.69036C29.3221 9.84242 29.5283 9.92784 29.7433 9.92784C29.9584 9.92784 30.1646 9.84242 30.3167 9.69036C30.4687 9.53831 30.5541 9.33207 30.5541 9.11703V7.22083C31.0482 7.26948 31.5174 7.33002 31.9563 7.42083C34.8374 7.97434 37.5433 9.38082 39.6795 11.3495L39.1465 11.8813C39.0691 11.9562 39.0074 12.0457 38.965 12.1446C38.9225 12.2436 38.9002 12.35 38.8993 12.4576C38.8984 12.5653 38.919 12.672 38.9598 12.7717C39.0006 12.8713 39.0609 12.9618 39.137 13.0379C39.2132 13.114 39.3038 13.1741 39.4034 13.2149C39.5031 13.2556 39.6099 13.276 39.7175 13.2751C39.8252 13.2741 39.9316 13.2517 40.0305 13.2091C40.1294 13.1666 40.2188 13.1048 40.2936 13.0273L40.8092 12.5127C41.5958 13.3997 42.2704 14.38 42.8179 15.4316C43.7811 17.2802 44.313 19.3559 44.4341 21.4618H42.9044C42.6893 21.4618 42.4831 21.5473 42.331 21.6993C42.179 21.8514 42.0936 22.0576 42.0936 22.2727C42.0936 22.4877 42.179 22.6939 42.331 22.846C42.4831 22.998 42.6893 23.0835 42.9044 23.0835H44.4525C44.3368 25.7397 43.5638 28.3634 42.1498 30.5645C41.6806 31.2867 41.1249 31.9645 40.5206 32.6045L39.7292 31.8132C39.655 31.7335 39.5655 31.6696 39.466 31.6253C39.3666 31.581 39.2592 31.5571 39.1503 31.5552C39.0415 31.5533 38.9333 31.5733 38.8324 31.6141C38.7314 31.6549 38.6397 31.7156 38.5627 31.7926C38.4857 31.8696 38.425 31.9613 38.3842 32.0622C38.3435 32.1632 38.3234 32.2713 38.3254 32.3802C38.3273 32.4891 38.3511 32.5964 38.3954 32.6959C38.4397 32.7954 38.5036 32.8849 38.5833 32.9591L39.3465 33.7234C36.6828 36.0023 33.6763 37.1007 30.5541 37.2088V35.9072C30.5541 34.8337 28.9325 34.8337 28.9325 35.9072V37.1796C25.4342 36.9072 22.1974 35.3634 19.7434 33.1818L22.165 31.4251C22.3392 31.2988 22.456 31.1084 22.4899 30.896C22.5238 30.6835 22.4718 30.4663 22.3455 30.2921C22.2192 30.1179 22.0289 30.001 21.8164 29.9672C21.604 29.9333 21.3867 29.9852 21.2126 30.1115L18.6526 31.9678C18.6277 31.9861 18.6136 32.0142 18.5909 32.0348C18.3747 31.7969 18.1553 31.5602 17.9564 31.3105C16.0342 28.891 14.9737 26.0759 14.8115 23.0835Z"
                                                    />
                                                    <path
                                                        d="M10.0051 16.051C10.2091 16.1187 10.4317 16.1027 10.6239 16.0064C10.816 15.9101 10.9621 15.7414 11.03 15.5375C13.5867 7.85317 21.3143 2.00887 29.405 1.64238C37.2688 1.29644 45.2936 6.14831 48.6969 13.2683L48.0547 13.6704C47.2266 14.1894 47.3304 15.4142 48.2223 15.7958C49.1444 16.1893 50.4677 17.0164 51.0785 17.3439C51.1792 17.3976 51.2902 17.4294 51.4041 17.4372C51.518 17.4451 51.6323 17.4287 51.7394 17.3893C51.8466 17.3499 51.9442 17.2884 52.0259 17.2086C52.1076 17.1289 52.1716 17.0328 52.2136 16.9266C52.6579 15.8023 52.5055 14.3504 52.6352 13.0942C52.739 12.0942 51.6536 11.4175 50.805 11.9483L50.0796 12.4023C46.325 4.6921 37.9574 -0.394368 29.3305 0.0240085C20.4548 0.425088 12.2959 6.59371 9.49054 15.0261C9.42279 15.2301 9.43883 15.4527 9.53512 15.6448C9.63142 15.837 9.80008 15.9831 10.004 16.051H10.0051ZM49.2374 20.3472C49.0071 20.8542 48.9996 21.4131 49.2158 21.8823C49.6633 22.8542 51.1401 22.1796 50.6882 21.2034C50.6741 21.1709 50.6752 21.0996 50.7141 21.0153C50.9498 20.4899 51.952 20.8185 52.0363 22.5363C52.1304 24.4639 51.1347 26.4034 49.5606 27.3666C49.3876 27.4713 49.26 27.637 49.2028 27.831C49.1456 28.025 49.163 28.2334 49.2515 28.4152C49.3401 28.5971 49.4934 28.7393 49.6814 28.8139C49.8694 28.8885 50.0785 28.8901 50.2677 28.8185C51.6542 28.3013 53.1446 28.1245 54.6136 28.3028C54.8262 28.3262 55.0396 28.2658 55.2083 28.1344C55.3771 28.003 55.488 27.8109 55.5174 27.599C55.544 27.3857 55.4848 27.1706 55.3528 27.0009C55.2208 26.8312 55.0269 26.7209 54.8136 26.6942C54.0495 26.5994 53.2775 26.5874 52.5109 26.6585C53.3001 25.4271 53.7282 23.9374 53.6568 22.4574C53.4774 18.8142 50.1498 18.3212 49.2374 20.3472ZM56.8957 25.0985C57.6438 24.7807 58.5909 24.4315 59.5768 24.2834C59.5076 25.1947 59.4038 26.1039 59.2471 27.0034C59.0601 28.0606 60.659 28.3396 60.8438 27.2844C61.2438 24.9947 61.3768 22.6553 61.2363 20.331C61.2151 20.1223 61.114 19.9298 60.9542 19.794C60.7943 19.6582 60.5881 19.5895 60.3787 19.6024C60.1694 19.6153 59.9731 19.7087 59.8311 19.863C59.689 20.0174 59.6122 20.2207 59.6168 20.4304C59.6611 21.1645 59.6665 21.8996 59.6536 22.6336C58.8566 22.7283 58.0734 22.9151 57.3195 23.1904L57.0903 19.4737C57.0211 18.3818 55.406 18.5158 55.4709 19.5731L55.7682 24.4023C55.7766 24.5317 55.8158 24.6573 55.8827 24.7684C55.9495 24.8796 56.042 24.9732 56.1523 25.0413C56.2627 25.1095 56.3878 25.1502 56.5171 25.1602C56.6464 25.1701 56.7762 25.149 56.8957 25.0985Z"
                                                    />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="feature-card-content">
                                            <h6>Best Support 24/7</h6>
                                            <p>Curabitur convallis enimatnora ullamcorper sagittis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-content-wrap">
                                <div class="eg-tag2">
                                    <span>
                                        Our Experience
                                    </span>
                                </div>
                                <h2>We Are The Best For Providing The Travel Arrangement.</h2>
                                <p>Nunc volutpat sagittis cursus. Praesent sed dolor pellentesque, consectetur velit sit amet, pharetra ipsum. Fusce eu ultrices tortor. Praesent vehicula commodo purus at vulputate.</p>
                                <div class="activities-counter two">
                                    <div class="row justify-content-center g-lg-4 gy-5">
                                        <div class="col-sm-4 divider d-flex justify-content-sm-start">
                                            <div class="single-activity">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                                        <g>
                                                            <path
                                                                d="M14.582 10.3524C14.7367 10.3524 14.8851 10.413 14.9945 10.5208C15.1039 10.6287 15.1654 10.775 15.1654 10.9275H16.332C16.332 10.4699 16.1477 10.0311 15.8195 9.70749C15.4913 9.38393 15.0462 9.20215 14.582 9.20215C14.1179 9.20215 13.6728 9.38393 13.3446 9.70749C13.0164 10.0311 12.832 10.4699 12.832 10.9275H13.9987C13.9987 10.775 14.0602 10.6287 14.1696 10.5208C14.2789 10.413 14.4273 10.3524 14.582 10.3524ZM20.4154 10.3524C20.5701 10.3524 20.7184 10.413 20.8278 10.5208C20.9372 10.6287 20.9987 10.775 20.9987 10.9275H22.1654C22.1654 10.4699 21.981 10.0311 21.6528 9.70749C21.3246 9.38393 20.8795 9.20215 20.4154 9.20215C19.9512 9.20215 19.5061 9.38393 19.1779 9.70749C18.8497 10.0311 18.6654 10.4699 18.6654 10.9275H19.832C19.832 10.775 19.8935 10.6287 20.0029 10.5208C20.1123 10.413 20.2607 10.3524 20.4154 10.3524ZM15.7487 12.6529H14.582C14.582 13.4155 14.8893 14.1469 15.4363 14.6862C15.9833 15.2255 16.7252 15.5284 17.4987 15.5284C18.2722 15.5284 19.0141 15.2255 19.5611 14.6862C20.1081 14.1469 20.4154 13.4155 20.4154 12.6529H19.2487C19.2487 13.1104 19.0643 13.5493 18.7361 13.8729C18.4079 14.1964 17.9628 14.3782 17.4987 14.3782C17.0346 14.3782 16.5894 14.1964 16.2613 13.8729C15.9331 13.5493 15.7487 13.1104 15.7487 12.6529Z"
                                                            />
                                                            <path
                                                                d="M26.832 10.3521H25.6368C25.6555 10.2714 25.6651 10.1888 25.6654 10.106V9.03797C25.6648 8.83696 25.6105 8.63964 25.5081 8.46582C25.4058 8.29199 25.2588 8.14777 25.082 8.04762V7.47653C25.082 5.49363 24.2831 3.59194 22.8609 2.18982C21.4388 0.787703 19.5099 0 17.4987 0C15.4875 0 13.5586 0.787703 12.1365 2.18982C10.7143 3.59194 9.91537 5.49363 9.91537 7.47653V8.04762C9.73859 8.14777 9.59164 8.29199 9.48925 8.46582C9.38687 8.63964 9.33265 8.83696 9.33203 9.03797V10.106C9.33231 10.1888 9.3419 10.2714 9.36061 10.3521H8.16536C7.08278 10.3533 6.04488 10.7779 5.27938 11.5326C4.51387 12.2873 4.08327 13.3106 4.08203 14.3779V28.1807C4.08203 28.3333 4.14349 28.4796 4.25289 28.5874C4.36228 28.6953 4.51065 28.7559 4.66536 28.7559H6.41536V33.9319C6.41536 34.0845 6.47682 34.2307 6.58622 34.3386C6.69562 34.4464 6.84399 34.507 6.9987 34.507H27.9987C28.1534 34.507 28.3018 34.4464 28.4112 34.3386C28.5206 34.2307 28.582 34.0845 28.582 33.9319V28.7559H30.332C30.4867 28.7559 30.6351 28.6953 30.7445 28.5874C30.8539 28.4796 30.9154 28.3333 30.9154 28.1807V14.3779C30.9141 13.3106 30.4835 12.2873 29.718 11.5326C28.9525 10.7779 27.9146 10.3533 26.832 10.3521ZM26.2487 11.5023V16.1372C26.0551 16.1152 25.8603 16.1038 25.6654 16.1033H23.0625C23.5086 15.7449 23.8688 15.2937 24.1171 14.7819C24.3654 14.2701 24.4957 13.7105 24.4987 13.1432V11.5023H26.2487ZM23.9154 20.7042V19.554H25.082V20.7042H23.9154ZM25.082 21.8545V24.1549H23.9154V21.8545H25.082ZM23.9154 18.4038V17.2535H25.082V18.4038H23.9154ZM17.4987 1.15023C18.3417 1.14902 19.1766 1.31183 19.9557 1.62933C20.7348 1.94682 21.4426 2.41277 22.0387 3.00046C22.6348 3.58815 23.1074 4.28604 23.4294 5.05413C23.7515 5.82221 23.9166 6.6454 23.9154 7.47653V7.66344L19.6535 3.61174C19.5886 3.549 19.5094 3.5024 19.4226 3.4758C19.3358 3.4492 19.2438 3.44335 19.1542 3.45876C19.0646 3.47321 18.9797 3.50808 18.9061 3.5606C18.8326 3.61312 18.7725 3.68183 18.7307 3.76127L18.0978 4.96499C17.989 5.16977 17.8394 5.3508 17.658 5.49726C17.4766 5.64371 17.267 5.75256 17.0419 5.81731C16.8058 5.88889 16.5574 5.91285 16.3117 5.88775C16.066 5.86265 15.8279 5.78902 15.6116 5.67123C14.9649 5.3218 14.2106 5.21854 13.4918 5.38105C12.773 5.54357 12.1397 5.96055 11.712 6.55289L11.082 7.44949C11.0911 5.77691 11.7709 4.17578 12.9731 2.9956C14.1753 1.81542 15.8022 1.15203 17.4987 1.15023ZM10.4987 9.03797H11.082C11.1765 9.03797 11.2695 9.01536 11.3531 8.97208C11.4368 8.9288 11.5085 8.86615 11.5621 8.78952L12.6704 7.20622C12.9324 6.84677 13.3191 6.59455 13.7571 6.49735C14.1951 6.40015 14.654 6.46472 15.0469 6.67884C15.4003 6.86945 15.7886 6.98878 16.1892 7.02985C16.5898 7.07093 16.9947 7.03294 17.3803 6.91809C17.7541 6.80885 18.1017 6.62645 18.4024 6.38178C18.703 6.13712 18.9506 5.83521 19.1303 5.4941L19.4033 4.97649L23.507 8.87866C23.6158 8.98197 23.7609 9.0397 23.9119 9.03969H24.4952V10.1077H23.9154C23.7607 10.1077 23.6123 10.1683 23.5029 10.2761C23.3935 10.384 23.332 10.5303 23.332 10.6828V13.1449C23.3276 13.6448 23.1843 14.1339 22.9177 14.5591C22.6512 14.9843 22.2715 15.3294 21.82 15.5569L19.4622 16.7796C18.8566 17.0933 18.1828 17.2571 17.4987 17.2571C16.8146 17.2571 16.1408 17.0933 15.5352 16.7796L13.1774 15.5569C12.7256 15.3293 12.3458 14.9839 12.0792 14.5584C11.8127 14.1328 11.6695 13.6433 11.6654 13.1432V10.6811C11.6654 10.5285 11.6039 10.3823 11.4945 10.2744C11.3851 10.1666 11.2367 10.106 11.082 10.106H10.4987V9.03797ZM21.9064 27.6056H13.091C13.2479 27.3465 13.3506 27.059 13.3932 26.7601C13.4357 26.4612 13.4172 26.157 13.3387 25.8653C13.2602 25.5735 13.1233 25.3002 12.9361 25.0614C12.749 24.8226 12.5152 24.6231 12.2487 24.4747V17.2535H12.9849C13.2425 18.2408 13.8258 19.1155 14.6429 19.7402C15.4601 20.3648 16.4647 20.7037 17.4987 20.7037C18.5327 20.7037 19.5373 20.3648 20.3545 19.7402C21.1716 19.1155 21.7549 18.2408 22.0125 17.2535H22.7487V24.4747C22.4822 24.6231 22.2484 24.8226 22.0613 25.0614C21.8741 25.3002 21.7372 25.5735 21.6587 25.8653C21.5802 26.157 21.5617 26.4612 21.6042 26.7601C21.6468 27.059 21.7495 27.3465 21.9064 27.6056ZM14.2904 17.4295L14.9956 17.7953C15.7683 18.1964 16.6284 18.4061 17.5016 18.4061C18.3749 18.4061 19.235 18.1964 20.0076 17.7953L20.7129 17.4295C20.4518 18.0578 20.0071 18.5953 19.4352 18.9736C18.8634 19.3519 18.1903 19.5539 17.5016 19.5539C16.813 19.5539 16.1399 19.3519 15.568 18.9736C14.9962 18.5953 14.5514 18.0578 14.2904 17.4295ZM8.7487 11.5023H10.4987V13.1432C10.5017 13.7105 10.632 14.2701 10.8803 14.7819C11.1286 15.2937 11.4888 15.7449 11.9349 16.1033H9.33203C9.1371 16.1038 8.94235 16.1152 8.7487 16.1372V11.5023ZM9.91537 20.7042V19.554H11.082V20.7042H9.91537ZM11.082 21.8545V24.1549H9.91537V21.8545H11.082ZM9.91537 18.4038V17.2535H11.082V18.4038H9.91537ZM5.2487 14.3779C5.24955 13.7153 5.48208 13.0732 5.90712 12.5598C6.33215 12.0465 6.92369 11.6933 7.58203 11.5599V16.4046C6.66674 16.7246 5.85915 17.2882 5.2487 18.0328V14.3779ZM5.2487 22.4296V21.2793C5.24985 20.3121 5.60419 19.3776 6.24689 18.6468C6.88959 17.9159 7.77768 17.4377 8.7487 17.2995V24.1549H5.2487V22.4296ZM5.2487 27.6056V25.3052H11.082C11.3915 25.3052 11.6882 25.4263 11.907 25.6421C12.1258 25.8578 12.2487 26.1503 12.2487 26.4554C12.2487 26.7605 12.1258 27.053 11.907 27.2687C11.6882 27.4844 11.3915 27.6056 11.082 27.6056H5.2487ZM27.4154 33.3568H7.58203V28.7559H27.4154V33.3568ZM29.7487 27.6056H23.9154C23.6059 27.6056 23.3092 27.4844 23.0904 27.2687C22.8716 27.053 22.7487 26.7605 22.7487 26.4554C22.7487 26.1503 22.8716 25.8578 23.0904 25.6421C23.3092 25.4263 23.6059 25.3052 23.9154 25.3052H29.7487V27.6056ZM29.7487 22.4296V24.1549H26.2487V17.2995C27.2197 17.4377 28.1078 17.9159 28.7505 18.6468C29.3932 19.3776 29.7475 20.3121 29.7487 21.2793V22.4296ZM29.7487 18.0334C29.1382 17.2887 28.3307 16.7252 27.4154 16.4052V11.5599C28.0737 11.6933 28.6652 12.0465 29.0903 12.5598C29.5153 13.0732 29.7479 13.7153 29.7487 14.3779V18.0334Z"
                                                            />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="content">
                                                    <div class="number">
                                                        <h5 class="counter">3.5</h5>
                                                        <span>K+</span>
                                                    </div>
                                                    <p>Happy Traveler</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 divider d-flex justify-content-sm-center">
                                            <div class="single-activity">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                                        <g>
                                                            <path
                                                                d="M22.8537 10.3898C23.1461 10.1048 23.2493 9.68656 23.1232 9.29821C22.997 8.90993 22.6676 8.63219 22.2636 8.57353L19.3298 8.14718C19.3231 8.1462 19.3167 8.14361 19.3112 8.13962C19.3057 8.13563 19.3013 8.13036 19.2983 8.12428L17.9863 5.46592C17.8055 5.09978 17.4397 4.87235 17.0314 4.87235C16.623 4.87235 16.2571 5.09978 16.0764 5.46592L14.7644 8.12428C14.7614 8.13038 14.757 8.13566 14.7515 8.13965C14.746 8.14364 14.7396 8.14622 14.7328 8.14718L11.7991 8.57353C11.3951 8.63219 11.0658 8.90986 10.9395 9.29821C10.8133 9.68649 10.9165 10.1049 11.209 10.3898L13.3319 12.4592C13.3367 12.4639 13.3404 12.4698 13.3425 12.4762C13.3446 12.4827 13.3451 12.4896 13.3439 12.4963L12.8428 15.4182C12.7738 15.8206 12.9362 16.2196 13.2664 16.4597C13.5967 16.6998 14.0263 16.7308 14.3879 16.5408L17.0119 15.1612C17.018 15.158 17.0247 15.1564 17.0315 15.1564C17.0383 15.1564 17.045 15.158 17.051 15.1612L19.675 16.5408C19.8281 16.6215 19.9985 16.6639 20.1716 16.6641C20.3914 16.6641 20.6099 16.5952 20.7965 16.4596C21.1268 16.2196 21.2891 15.8205 21.2201 15.4181L21.147 14.9921C21.0993 14.7136 20.8347 14.5265 20.5564 14.5745C20.4228 14.5974 20.3037 14.6725 20.2253 14.7833C20.147 14.894 20.1159 15.0313 20.1388 15.165L20.2119 15.591C20.2137 15.6013 20.2163 15.6167 20.1952 15.6321C20.1742 15.6474 20.1603 15.6402 20.1511 15.6353L17.5271 14.2557C17.3743 14.1754 17.2042 14.1334 17.0316 14.1334C16.859 14.1334 16.6889 14.1754 16.5361 14.2557L13.9121 15.6353C13.9029 15.6401 13.889 15.6474 13.868 15.6321C13.847 15.6168 13.8496 15.6013 13.8514 15.591L14.3526 12.6692C14.3818 12.499 14.3692 12.3243 14.3158 12.1601C14.2625 11.9959 14.17 11.8471 14.0463 11.7266L11.9234 9.6573C11.916 9.65006 11.9047 9.63912 11.9127 9.61431C11.9208 9.58956 11.9363 9.5873 11.9466 9.5858L14.8802 9.15951C15.0511 9.1347 15.2134 9.0687 15.3531 8.96721C15.4928 8.86573 15.6057 8.73179 15.6821 8.57695L16.9941 5.91859C16.9987 5.90923 17.0057 5.89521 17.0317 5.89521C17.0577 5.89521 17.0646 5.9093 17.0693 5.91859L18.3813 8.57688C18.4576 8.73173 18.5705 8.86567 18.7102 8.96717C18.8499 9.06867 19.0122 9.13468 19.183 9.15951L22.1168 9.58587C22.1271 9.58731 22.1426 9.58963 22.1507 9.61437C22.1587 9.63912 22.1474 9.65013 22.1401 9.65737L20.0171 11.7267C19.8935 11.8472 19.801 11.996 19.7477 12.1602C19.6943 12.3244 19.6817 12.4991 19.7109 12.6692L19.7922 13.1432C19.8035 13.2094 19.8278 13.2727 19.8636 13.3296C19.8994 13.3864 19.9461 13.4356 20.0009 13.4744C20.0558 13.5132 20.1177 13.5408 20.1832 13.5556C20.2488 13.5704 20.3165 13.5722 20.3827 13.5608C20.4489 13.5495 20.5123 13.5252 20.5691 13.4894C20.6259 13.4536 20.6751 13.4069 20.7139 13.3521C20.7527 13.2972 20.7803 13.2353 20.7951 13.1698C20.8099 13.1043 20.8117 13.0365 20.8004 12.9703L20.7191 12.4963C20.7179 12.4896 20.7184 12.4827 20.7205 12.4763C20.7226 12.4698 20.7262 12.4639 20.7311 12.4592L22.8537 10.3898ZM10.2857 3.48213C10.1754 3.14272 9.88753 2.89998 9.53432 2.84871L7.35946 2.53269L6.38692 0.561816C6.229 0.241758 5.90915 0.0429688 5.55225 0.0429688C5.19534 0.0429688 4.87556 0.241758 4.71758 0.561816L3.74503 2.53262L1.57018 2.84864C1.21696 2.89998 0.929102 3.14272 0.818839 3.48206C0.708575 3.82147 0.79881 4.18705 1.05441 4.43622L2.62811 5.97027L2.25657 8.13638C2.22652 8.30758 2.24531 8.48379 2.31081 8.6448C2.3763 8.80581 2.48585 8.94511 2.62688 9.04672C2.78539 9.16264 2.97662 9.22523 3.173 9.22548C3.32429 9.22527 3.47325 9.18822 3.60701 9.11754L5.55225 8.09488L7.49748 9.11754C7.81337 9.28365 8.18894 9.25651 8.47769 9.04672C8.76644 8.83692 8.90835 8.48815 8.84799 8.13638L8.47646 5.97034L10.0502 4.43636C10.1751 4.31547 10.2635 4.16185 10.3051 3.99308C10.3467 3.82432 10.34 3.64724 10.2857 3.48213ZM7.72765 5.27164C7.6196 5.37697 7.53878 5.507 7.49216 5.65051C7.44554 5.79402 7.43451 5.94672 7.46002 6.09544L7.80817 8.1251L5.9853 7.16677C5.85173 7.09657 5.7031 7.0599 5.55221 7.0599C5.40132 7.0599 5.25269 7.09657 5.11912 7.16677L3.29632 8.12503L3.64447 6.09523C3.66999 5.94652 3.65896 5.79382 3.61232 5.65032C3.56568 5.50682 3.48485 5.37681 3.37678 5.2715L1.90213 3.83411L3.94006 3.53791C4.08939 3.51621 4.2312 3.45852 4.35327 3.36983C4.47535 3.28113 4.57403 3.16408 4.64081 3.02877L5.55218 1.18211L6.46368 3.02891C6.53046 3.16419 6.62914 3.28121 6.7512 3.36989C6.87327 3.45856 7.01506 3.51622 7.16437 3.53791L9.2023 3.83411L7.72765 5.27164ZM33.2439 3.48199C33.1908 3.31647 33.0922 3.16925 32.9593 3.05721C32.8264 2.94517 32.6646 2.87284 32.4925 2.84851L30.3177 2.53248L29.3451 0.561816C29.1872 0.241758 28.8674 0.0429688 28.5105 0.0429688C28.1536 0.0429688 27.8338 0.241758 27.6758 0.561816L26.7032 2.53255L24.5283 2.84857C24.1751 2.89991 23.8873 3.14266 23.7769 3.48206C23.6667 3.82147 23.7569 4.18705 24.0125 4.43622L25.5863 5.9702L25.2147 8.13624C25.1544 8.48802 25.2963 8.83679 25.585 9.04658C25.7435 9.1625 25.9348 9.22509 26.1312 9.22534C26.2824 9.22513 26.4314 9.18808 26.5652 9.1174L28.5104 8.09475L30.4556 9.1174C30.7715 9.28352 31.1471 9.25638 31.4358 9.04651C31.7246 8.83672 31.8664 8.48795 31.8061 8.13624L31.4346 5.97014L33.0084 4.43615C33.2639 4.18705 33.3541 3.82146 33.2439 3.48199ZM30.6859 5.27157C30.5778 5.37689 30.497 5.50691 30.4503 5.65042C30.4037 5.79394 30.3927 5.94664 30.4182 6.09537L30.7663 8.1251L28.9435 7.16684C28.8099 7.09664 28.6613 7.05996 28.5104 7.05996C28.3595 7.05996 28.2109 7.09664 28.0773 7.16684L26.2545 8.1251L26.6026 6.0953C26.6282 5.94658 26.6171 5.79388 26.5705 5.65037C26.5238 5.50686 26.443 5.37686 26.3349 5.27157L24.8601 3.83411L26.8983 3.53791C27.0476 3.51622 27.1894 3.45854 27.3115 3.36984C27.4336 3.28115 27.5323 3.16409 27.5991 3.02877L28.5105 1.18211L29.4218 3.02877C29.4886 3.16411 29.5873 3.28117 29.7094 3.36987C29.8315 3.45857 29.9733 3.51624 30.1227 3.53791L32.1606 3.83411L30.6859 5.27157ZM34.7632 13.4174C34.6451 13.2292 34.4877 13.0687 34.3018 12.9469C34.1159 12.8251 33.9059 12.7449 33.6862 12.7117C33.3791 12.6645 33.065 12.7113 32.7851 12.8461C32.5052 12.9808 32.2727 13.1972 32.1183 13.4668C31.9528 13.3532 31.765 13.2763 31.5674 13.241C30.8766 13.1182 30.1929 13.529 29.977 14.1966L29.7372 14.9377C29.6074 14.8506 29.4638 14.7859 29.3125 14.7463C28.5876 14.5595 27.8463 14.973 27.6244 15.6877L27.4674 16.1933C27.2947 16.0763 27.0988 15.9983 26.893 15.9645C26.186 15.8486 25.512 16.2588 25.2903 16.94L23.6665 21.9265C23.2796 22.0997 22.4747 22.5089 21.6466 23.2283C21.5959 23.2724 21.5544 23.326 21.5244 23.3861C21.4945 23.4463 21.4766 23.5117 21.4719 23.5787C21.4672 23.6457 21.4758 23.713 21.4971 23.7767C21.5184 23.8404 21.5521 23.8993 21.5961 23.95C21.6402 24.0007 21.6938 24.0422 21.7539 24.0721C21.814 24.1021 21.8795 24.12 21.9465 24.1247C22.0135 24.1294 22.0807 24.1208 22.1444 24.0995C22.2081 24.0782 22.267 24.0445 22.3177 24.0005C23.2949 23.1513 24.2483 22.7908 24.2567 22.7876C24.2589 22.7869 24.2608 22.7858 24.2629 22.785C24.2731 22.7811 24.2831 22.7766 24.2932 22.772C24.2988 22.7694 24.3047 22.767 24.3102 22.7641C24.3209 22.7588 24.3311 22.7528 24.3414 22.7467C24.3461 22.744 24.3509 22.7414 24.3554 22.7386C24.3667 22.7313 24.3775 22.7234 24.3883 22.7152C24.3915 22.7129 24.395 22.7107 24.3981 22.7082C24.4118 22.6973 24.4251 22.6858 24.4379 22.6733L26.7165 20.4475L27.9395 19.2528C28.0314 19.163 28.1552 19.1133 28.2837 19.1147H28.2846C28.3484 19.1153 28.4115 19.1285 28.4702 19.1536C28.5288 19.1787 28.5819 19.2152 28.6264 19.261C28.6724 19.3081 28.7083 19.3641 28.732 19.4255C28.7557 19.487 28.7666 19.5526 28.7641 19.6184V19.6187C28.7603 19.7221 28.7236 19.8216 28.6592 19.9026L24.7691 24.799C24.6861 24.9035 24.6472 25.0363 24.6608 25.1691C24.6744 25.3019 24.7393 25.4242 24.8418 25.5097C24.8462 25.5133 24.8509 25.5165 24.8553 25.52C24.8639 25.5268 24.8725 25.5335 24.8815 25.5395C24.8869 25.5433 24.8926 25.5466 24.8982 25.55C24.9065 25.5552 24.9147 25.5604 24.9232 25.5651C24.9293 25.5684 24.9355 25.5714 24.9416 25.5745C24.95 25.5787 24.9583 25.5827 24.9669 25.5864C24.9733 25.5892 24.9798 25.5917 24.9863 25.5943C25.0013 25.6 25.0166 25.6051 25.0321 25.6095C25.041 25.612 25.0498 25.6142 25.0588 25.6161C25.0655 25.6176 25.0721 25.6191 25.0788 25.6202C25.088 25.6219 25.0972 25.6232 25.1065 25.6243C25.1131 25.6252 25.1196 25.6261 25.1261 25.6266C25.1359 25.6274 25.1457 25.6278 25.1555 25.628C25.1602 25.6282 25.1649 25.6287 25.1696 25.6287C25.1706 25.6287 25.1716 25.6285 25.1726 25.6284C25.2007 25.6282 25.2287 25.6257 25.2564 25.6209C25.28 25.6168 25.3033 25.6111 25.3262 25.6038C25.33 25.6025 25.3337 25.6012 25.3375 25.5999C25.3609 25.5918 25.3836 25.5821 25.4056 25.5708C25.4083 25.5694 25.4109 25.5677 25.4135 25.5663C25.437 25.5537 25.4594 25.5393 25.4806 25.5232L27.5871 23.9089C29.3937 22.5243 30.7567 20.7022 31.5684 18.5986C31.6849 18.2967 31.7895 17.9904 31.8822 17.6803L32.9602 14.0743C32.9988 13.9575 33.0775 13.8581 33.1824 13.7938C33.2874 13.7295 33.4117 13.7045 33.5333 13.7233C33.6859 13.7463 33.815 13.831 33.8971 13.9617C33.9792 14.0924 33.9993 14.2455 33.9539 14.393L32.3378 19.6373C32.2536 19.9119 32.1704 20.1868 32.0881 20.4621C31.386 22.8011 30.5901 25.4523 28.7989 26.9149L24.8459 30.1428C24.7872 30.1908 24.7398 30.2512 24.7073 30.3197C24.6748 30.3883 24.658 30.4631 24.658 30.539V33.9334H19.7886V29.1563C19.8139 28.9353 20.0505 27.093 21.024 25.5145C21.0592 25.4573 21.0829 25.3938 21.0936 25.3275C21.1043 25.2612 21.1018 25.1934 21.0863 25.1281C21.0708 25.0627 21.0426 25.001 21.0033 24.9466C20.9639 24.8921 20.9143 24.846 20.8571 24.8107C20.7999 24.7755 20.7364 24.7518 20.6701 24.7411C20.6038 24.7304 20.536 24.7329 20.4706 24.7484C20.4053 24.7639 20.3436 24.7921 20.2892 24.8314C20.2347 24.8707 20.1886 24.9204 20.1533 24.9776C18.9929 26.8593 18.7767 28.99 18.768 29.0797C18.7664 29.096 18.7656 29.1123 18.7656 29.1287V34.4448C18.7656 34.5805 18.8195 34.7106 18.9154 34.8065C19.0114 34.9024 19.1415 34.9563 19.2771 34.9563H25.1695C25.3051 34.9563 25.4352 34.9024 25.5311 34.8065C25.6271 34.7106 25.6809 34.5805 25.6809 34.4448V30.7815L29.4459 27.707C31.4798 26.0461 32.3235 23.2355 33.0679 20.7559C33.1509 20.4792 33.2329 20.2059 33.3154 19.9382L34.9315 14.6939C34.997 14.4815 35.0158 14.2576 34.9868 14.0373C34.9578 13.817 34.8815 13.6055 34.7632 13.4174ZM27.0584 17.5097L26.9884 17.7351L26.5354 19.1943L25.2104 20.4886L26.2627 17.2567C26.2896 17.1729 26.3423 17.0998 26.4134 17.0479C26.4845 16.9961 26.5702 16.9682 26.6582 16.9683C26.681 16.9683 26.7041 16.9701 26.7273 16.9739C26.8905 17.0007 26.9775 17.106 27.0148 17.1664C27.0522 17.2268 27.1075 17.3517 27.0584 17.5097ZM29.3225 16.2196L29.1264 16.8262L28.698 18.1505C28.6137 18.1266 28.5275 18.11 28.4403 18.1011C28.3925 18.0958 28.3445 18.0927 28.2964 18.0919L28.2782 18.0918C28.1619 18.0918 28.0476 18.1049 27.9369 18.1304L28.0355 17.8131V17.8129L28.6013 15.9909C28.63 15.8981 28.6934 15.8199 28.7783 15.7726C28.8632 15.7253 28.963 15.7125 29.0571 15.7369C29.1591 15.7632 29.2433 15.8286 29.2941 15.9209C29.345 16.0133 29.3551 16.1193 29.3225 16.2196ZM31.6926 14.7424L30.9019 17.3872C30.8318 17.6217 30.7542 17.8539 30.6693 18.0834C30.4175 18.7645 30.1001 19.4194 29.7218 20.0392L29.7221 20.038C29.7309 20.009 29.7384 19.9799 29.7453 19.9507C29.7476 19.9412 29.7494 19.9317 29.7515 19.9222C29.7627 19.8704 29.7712 19.818 29.777 19.7653C29.778 19.7557 29.7792 19.7462 29.7801 19.7365C29.7829 19.7063 29.7848 19.676 29.7858 19.6457C29.7867 19.6154 29.7864 19.5851 29.7855 19.5549C29.7852 19.5454 29.7846 19.5361 29.7841 19.5266C29.7815 19.4737 29.7761 19.4209 29.768 19.3685C29.7666 19.3591 29.7653 19.3497 29.7636 19.3403C29.7586 19.3114 29.7528 19.2826 29.7463 19.254L29.7456 19.2509C29.7385 19.2213 29.7305 19.192 29.7217 19.1629C29.719 19.1538 29.7159 19.1449 29.713 19.1359C29.7031 19.1053 29.6923 19.0751 29.6806 19.0452C29.6728 19.0253 29.6645 19.0056 29.6558 18.9862C29.6519 18.9772 29.648 18.9683 29.6439 18.9594C29.6315 18.9329 29.6184 18.9067 29.6045 18.8809L29.6024 18.8768C29.5893 18.8529 29.5756 18.8292 29.5612 18.8058L30.2958 16.5343L30.2959 16.5341L30.9502 14.5111C31.0096 14.3274 31.1978 14.2145 31.3881 14.248C31.5374 14.2746 31.617 14.3716 31.6511 14.427C31.6852 14.4825 31.736 14.5971 31.6926 14.7424ZM16.232 29.0799C16.2225 28.9778 15.976 26.5571 14.5967 24.5977C13.4655 22.9907 11.9205 22.1881 11.3336 21.9262L9.70993 16.94C9.48818 16.2588 8.81374 15.8485 8.10725 15.9645C7.90147 15.9983 7.70548 16.0763 7.53282 16.1933L7.3758 15.6877C7.15391 14.9729 6.41234 14.5594 5.68767 14.7463C5.53637 14.7859 5.39278 14.8506 5.26288 14.9377L5.02315 14.1966C4.80727 13.5289 4.12347 13.1179 3.4327 13.241C3.23309 13.2766 3.04578 13.3545 2.88186 13.4668C2.72739 13.1972 2.4949 12.9808 2.21502 12.8461C1.93514 12.7113 1.62099 12.6645 1.31397 12.7117C1.0942 12.7449 0.884177 12.8251 0.698271 12.9469C0.512365 13.0686 0.354961 13.2292 0.236827 13.4174C0.118516 13.6055 0.0422394 13.817 0.0132155 14.0373C-0.0158084 14.2577 0.00310545 14.4817 0.0686631 14.694L1.68475 19.9384C1.76726 20.2062 1.84929 20.4794 1.93234 20.7561C2.56665 22.8689 3.28559 25.2637 4.76352 26.9422C4.8079 26.9926 4.86178 27.0338 4.92208 27.0634C4.98238 27.093 5.04793 27.1104 5.11496 27.1146C5.182 27.1189 5.24922 27.1099 5.31278 27.0882C5.37634 27.0664 5.43499 27.0324 5.48539 26.988C5.53581 26.9436 5.57699 26.8897 5.60657 26.8294C5.63616 26.7691 5.65358 26.7035 5.65783 26.6365C5.66209 26.5695 5.65309 26.5022 5.63136 26.4387C5.60963 26.3751 5.57559 26.3164 5.53119 26.266C4.20106 24.7554 3.51616 22.4744 2.91207 20.4618C2.82826 20.1828 2.74555 19.9071 2.66229 19.637L1.0462 14.3926C1.00074 14.2452 1.02091 14.0921 1.10301 13.9614C1.18511 13.8307 1.31431 13.7462 1.46682 13.723C1.58845 13.7042 1.71279 13.7292 1.81774 13.7935C1.92268 13.8578 2.00142 13.9572 2.03994 14.0741L2.32705 15.0345C2.32713 15.0346 2.32717 15.0349 2.32719 15.0351L3.1179 17.68C3.14504 17.7707 3.17348 17.861 3.20253 17.9508C3.91777 20.1601 5.22166 22.0911 6.99907 23.5768C7.02984 23.6025 7.0608 23.6279 7.09184 23.6533C7.1975 23.7401 7.30456 23.8252 7.41299 23.9085L9.51941 25.5229C9.54095 25.5394 9.56351 25.5535 9.58675 25.5662L9.59434 25.5705C9.61655 25.5821 9.63945 25.5917 9.66283 25.5998C9.66646 25.601 9.67001 25.6024 9.6737 25.6036C9.70026 25.6122 9.72749 25.6185 9.75512 25.6225C9.77917 25.6262 9.80345 25.6281 9.82778 25.6283L9.83045 25.6285C9.83469 25.6285 9.83886 25.628 9.8431 25.6279C9.85362 25.6276 9.86401 25.6273 9.87454 25.6264C9.88056 25.6259 9.88651 25.625 9.89238 25.6243C9.90855 25.6226 9.9246 25.6199 9.94044 25.6161C9.95622 25.6126 9.97184 25.6084 9.98727 25.6035C9.99643 25.6006 10.0054 25.5973 10.0145 25.5938C10.0297 25.5881 10.0446 25.5815 10.0591 25.574C10.065 25.5711 10.0709 25.5683 10.0765 25.5651C10.0854 25.5602 10.0939 25.5549 10.1025 25.5495C10.1079 25.5461 10.1133 25.543 10.1184 25.5394C10.1275 25.5332 10.1364 25.5263 10.1452 25.5195C10.1495 25.5161 10.1539 25.5131 10.1582 25.5095C10.2607 25.424 10.3257 25.3017 10.3393 25.1689C10.3529 25.0361 10.314 24.9032 10.231 24.7987L6.34084 19.9023C6.26748 19.8096 6.23036 19.6934 6.23641 19.5754C6.24246 19.4573 6.29127 19.3455 6.37372 19.2608C6.41817 19.215 6.47127 19.1785 6.52993 19.1534C6.58859 19.1283 6.65164 19.1151 6.71545 19.1145H6.71579C6.77954 19.1136 6.84283 19.1254 6.90201 19.1491C6.96119 19.1729 7.01509 19.2081 7.0606 19.2527L10.5623 22.6731C10.5751 22.6856 10.5884 22.6972 10.6022 22.7081L10.6074 22.7118C10.6197 22.7214 10.6324 22.7304 10.6454 22.7388C10.6478 22.7403 10.6504 22.7416 10.6527 22.743C10.6652 22.7506 10.6777 22.7578 10.6906 22.7643C10.695 22.7664 10.6995 22.7683 10.7039 22.7703C10.7148 22.7754 10.7257 22.7803 10.7368 22.7846C10.7387 22.7853 10.7406 22.7863 10.7425 22.787C10.7605 22.7937 12.557 23.4769 13.7602 25.1862C14.9158 26.828 15.1848 28.9219 15.2116 29.1561V33.9332H10.3422V30.5387C10.3422 30.4629 10.3253 30.388 10.2928 30.3195C10.2603 30.251 10.213 30.1905 10.1543 30.1426L7.0649 27.6198C7.01288 27.5773 6.953 27.5454 6.88867 27.5261C6.82435 27.5067 6.75684 27.5003 6.69001 27.507C6.62317 27.5138 6.55833 27.5336 6.49917 27.5654C6.44001 27.5972 6.38769 27.6404 6.34522 27.6924C6.30273 27.7444 6.27091 27.8043 6.25157 27.8687C6.23222 27.933 6.22574 28.0005 6.23249 28.0673C6.23924 28.1341 6.25908 28.199 6.29089 28.2582C6.3227 28.3173 6.36585 28.3696 6.41788 28.4121L9.31933 30.7814V34.4448C9.31933 34.5804 9.37321 34.7105 9.46913 34.8064C9.56505 34.9023 9.69514 34.9562 9.83079 34.9562H15.7232C15.8588 34.9562 15.9889 34.9023 16.0848 34.8064C16.1807 34.7105 16.2346 34.5804 16.2346 34.4448V29.1286C16.2344 29.1123 16.2335 29.0961 16.232 29.0799ZM5.39769 18.8769C5.39687 18.8784 5.39618 18.88 5.39529 18.8816C5.38142 18.9073 5.36843 18.9333 5.35612 18.9596C5.35189 18.9686 5.34806 18.9776 5.34402 18.9867C5.33104 19.0159 5.31895 19.0455 5.30779 19.0755C5.30041 19.0955 5.29358 19.1157 5.28708 19.1359C5.28414 19.145 5.28107 19.1539 5.27826 19.1631C5.26951 19.1921 5.26145 19.2214 5.25447 19.2509C5.25406 19.2524 5.25386 19.2541 5.25345 19.2556C5.24689 19.2836 5.24128 19.3118 5.23643 19.3401C5.23472 19.3498 5.23335 19.3596 5.23185 19.3693C5.22372 19.4213 5.2184 19.4736 5.21592 19.5261C5.21544 19.5359 5.21476 19.5456 5.21448 19.5553C5.21359 19.5855 5.21332 19.6156 5.21421 19.6458L5.21442 19.6489C5.2153 19.6782 5.21729 19.7074 5.21988 19.7366C5.2207 19.7463 5.22193 19.7558 5.22303 19.7654C5.22645 19.797 5.23088 19.8285 5.23629 19.8598C5.23998 19.8809 5.24415 19.902 5.24873 19.9229C5.25071 19.9321 5.25256 19.9413 5.25475 19.9505C5.26179 19.9802 5.26951 20.0099 5.27833 20.0392C4.77664 19.2179 4.37982 18.329 4.09831 17.3873L3.3076 14.7424C3.26412 14.5972 3.31484 14.4825 3.34896 14.4271C3.38307 14.3717 3.46264 14.2748 3.61193 14.2483C3.63449 14.2442 3.65705 14.2423 3.67941 14.2423C3.84504 14.2423 3.99755 14.3494 4.04991 14.5114L4.97441 17.3697L5.43898 18.8061C5.42442 18.8294 5.41067 18.853 5.39769 18.8769ZM7.0109 18.1211C7.00153 18.1192 6.99231 18.1172 6.98294 18.1155C6.94176 18.1084 6.9003 18.1029 6.85866 18.0992C6.84875 18.0983 6.83884 18.0978 6.82893 18.0972C6.79364 18.0947 6.75828 18.0934 6.7229 18.0933C6.71354 18.0933 6.70424 18.093 6.69481 18.0932C6.65297 18.0939 6.61127 18.0965 6.56964 18.1006C6.5598 18.1016 6.55016 18.103 6.54038 18.1042C6.50456 18.1085 6.4689 18.1141 6.43347 18.1209C6.42499 18.1225 6.41658 18.1238 6.40817 18.1256C6.3727 18.1331 6.33735 18.1415 6.30242 18.1516L5.88892 16.8733L5.67748 16.2197C5.66139 16.1706 5.65561 16.1187 5.66051 16.0673C5.66542 16.0159 5.6809 15.9661 5.70599 15.9209C5.73066 15.8756 5.76446 15.8358 5.80526 15.8041C5.84606 15.7724 5.89298 15.7495 5.94306 15.7368C6.03713 15.7125 6.13697 15.7253 6.22183 15.7727C6.3067 15.82 6.37008 15.8982 6.39881 15.991L6.96455 17.8129L6.96462 17.8131L7.06354 18.1315C7.0461 18.1275 7.02847 18.1245 7.0109 18.1211ZM9.38058 20.0889L8.4647 19.1943L8.01161 17.7351L7.94154 17.5097C7.8926 17.3517 7.9479 17.2269 7.98516 17.1664C8.02241 17.106 8.1095 17.0007 8.27275 16.974C8.37124 16.9573 8.47245 16.9767 8.55779 17.0286C8.64312 17.0806 8.70685 17.1616 8.73725 17.2567L9.78964 20.4886L9.38058 20.0889Z"
                                                            />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="content">
                                                    <div class="number">
                                                        <h5 class="counter">2.5</h5>
                                                        <span>K+</span>
                                                    </div>
                                                    <p>Tours Success</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 d-flex justify-content-sm-end">
                                            <div class="single-activity">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                                        <g>
                                                            <path
                                                                d="M21.3281 19.1406C21.248 19.1406 21.1688 19.1229 21.0962 19.0889C21.0236 19.0549 20.9594 19.0053 20.9081 18.9438L18.3378 15.8594H16.9531V14.7656H18.5938C18.6739 14.7657 18.7531 14.7833 18.8257 14.8173C18.8982 14.8513 18.9625 14.9009 19.0138 14.9625L21.3281 17.7395L23.6425 14.9625C23.6938 14.9009 23.758 14.8513 23.8306 14.8173C23.9032 14.7833 23.9823 14.7657 24.0625 14.7656H33.3594C33.5044 14.7656 33.6435 14.708 33.7461 14.6054C33.8486 14.5029 33.9062 14.3638 33.9062 14.2188V2.1875C33.9062 2.04246 33.8486 1.90336 33.7461 1.8008C33.6435 1.69824 33.5044 1.64062 33.3594 1.64062H9.29688C9.15183 1.64062 9.01273 1.69824 8.91018 1.8008C8.80762 1.90336 8.75 2.04246 8.75 2.1875V14.2188C8.75 14.3638 8.80762 14.5029 8.91018 14.6054C9.01273 14.708 9.15183 14.7656 9.29688 14.7656H10.9375V15.8594H9.29688C8.86175 15.8594 8.44445 15.6865 8.13678 15.3788C7.8291 15.0712 7.65625 14.6539 7.65625 14.2188V2.1875C7.65625 1.75238 7.8291 1.33508 8.13678 1.0274C8.44445 0.719726 8.86175 0.546875 9.29688 0.546875H33.3594C33.7945 0.546875 34.2118 0.719726 34.5195 1.0274C34.8271 1.33508 35 1.75238 35 2.1875V14.2188C35 14.6539 34.8271 15.0712 34.5195 15.3788C34.2118 15.6865 33.7945 15.8594 33.3594 15.8594H24.3184L21.7481 18.9438C21.6968 19.0053 21.6326 19.0549 21.56 19.0889C21.4875 19.1229 21.4083 19.1406 21.3281 19.1406Z"
                                                            />
                                                            <path
                                                                d="M9.29688 21.3281H6.01562V20.2344H9.10492L10.4584 19.1521C10.7792 18.8964 11.0381 18.5715 11.2158 18.2017C11.3934 17.832 11.4853 17.4268 11.4844 17.0166V13.6719C11.4844 13.5268 11.542 13.3877 11.6446 13.2852C11.7471 13.1826 11.8862 13.125 12.0312 13.125C16.3565 13.125 16.4062 16.3734 16.4062 16.4062V20.7812H15.3125V16.4062C15.3087 16.2001 15.1971 14.4539 12.5781 14.2401V17.0166C12.5795 17.5909 12.451 18.1581 12.2022 18.6757C11.9534 19.1934 11.5908 19.648 11.1415 20.0058L9.63867 21.2089C9.54158 21.2863 9.42104 21.3283 9.29688 21.3281Z"
                                                            />
                                                            <path
                                                                d="M21.875 24.6094H16.9531V23.5156H21.875C22.1651 23.5156 22.4433 23.4004 22.6484 23.1953C22.8535 22.9902 22.9688 22.712 22.9688 22.4219C22.9688 22.1318 22.8535 21.8536 22.6484 21.6485C22.4433 21.4434 22.1651 21.3281 21.875 21.3281H14.2188V20.2344H21.875C22.4552 20.2344 23.0116 20.4648 23.4218 20.8751C23.832 21.2853 24.0625 21.8417 24.0625 22.4219C24.0625 23.002 23.832 23.5584 23.4218 23.9687C23.0116 24.3789 22.4552 24.6094 21.875 24.6094Z"
                                                            />
                                                            <path
                                                                d="M22.4219 27.8906H17.5V26.7969H22.4219C22.712 26.7969 22.9902 26.6816 23.1953 26.4765C23.4004 26.2714 23.5156 25.9932 23.5156 25.7031C23.5156 25.413 23.4004 25.1348 23.1953 24.9297C22.9902 24.7246 22.712 24.6094 22.4219 24.6094H17.5V23.5156H22.4219C23.002 23.5156 23.5584 23.7461 23.9687 24.1563C24.3789 24.5666 24.6094 25.123 24.6094 25.7031C24.6094 26.2833 24.3789 26.8397 23.9687 27.2499C23.5584 27.6602 23.002 27.8906 22.4219 27.8906Z"
                                                            />
                                                            <path
                                                                d="M21.875 31.1719H16.9531V30.0781H21.875C22.1651 30.0781 22.4433 29.9629 22.6484 29.7578C22.8535 29.5527 22.9688 29.2745 22.9688 28.9844C22.9688 28.6943 22.8535 28.4161 22.6484 28.211C22.4433 28.0059 22.1651 27.8906 21.875 27.8906H16.9531V26.7969H21.875C22.4552 26.7969 23.0116 27.0273 23.4218 27.4376C23.832 27.8478 24.0625 28.4042 24.0625 28.9844C24.0625 29.5645 23.832 30.1209 23.4218 30.5312C23.0116 30.9414 22.4552 31.1719 21.875 31.1719Z"
                                                            />
                                                            <path
                                                                d="M20.7812 34.4531H10.3906C9.48489 34.3828 8.6329 33.9955 7.98438 33.3594H6.01562V32.2656H8.20312C8.34815 32.2657 8.48723 32.3233 8.58977 32.4259C9.05804 32.947 9.70065 33.279 10.3966 33.3594H20.7812C21.0713 33.3594 21.3495 33.2441 21.5546 33.039C21.7598 32.8339 21.875 32.5557 21.875 32.2656C21.875 31.9755 21.7598 31.6973 21.5546 31.4922C21.3495 31.2871 21.0713 31.1719 20.7812 31.1719H16.9531V30.0781H20.7812C21.3614 30.0781 21.9178 30.3086 22.328 30.7188C22.7383 31.1291 22.9688 31.6855 22.9688 32.2656C22.9688 32.8458 22.7383 33.4022 22.328 33.8124C21.9178 34.2227 21.3614 34.4531 20.7812 34.4531Z"
                                                            />
                                                            <path
                                                                d="M4.92188 34.4531H1.64062C1.2055 34.4531 0.788205 34.2803 0.480528 33.9726C0.172851 33.6649 0 33.2476 0 32.8125L0 20.7812C0 20.3461 0.172851 19.9288 0.480528 19.6212C0.788205 19.3135 1.2055 19.1406 1.64062 19.1406H4.92188C5.357 19.1406 5.7743 19.3135 6.08197 19.6212C6.38965 19.9288 6.5625 20.3461 6.5625 20.7812V32.8125C6.5625 33.2476 6.38965 33.6649 6.08197 33.9726C5.7743 34.2803 5.357 34.4531 4.92188 34.4531ZM1.64062 20.2344C1.49558 20.2344 1.35648 20.292 1.25393 20.3946C1.15137 20.4971 1.09375 20.6362 1.09375 20.7812V32.8125C1.09375 32.9575 1.15137 33.0966 1.25393 33.1992C1.35648 33.3018 1.49558 33.3594 1.64062 33.3594H4.92188C5.06692 33.3594 5.20602 33.3018 5.30857 33.1992C5.41113 33.0966 5.46875 32.9575 5.46875 32.8125V20.7812C5.46875 20.6362 5.41113 20.4971 5.30857 20.3946C5.20602 20.292 5.06692 20.2344 4.92188 20.2344H1.64062Z"
                                                            />
                                                            <path
                                                                d="M2.73438 21.3283H3.82812V22.422H2.73438V21.3283ZM23.5156 11.4845C23.4308 11.4844 23.3472 11.4648 23.2712 11.4271L21.3281 10.4553L19.3851 11.4298C19.2915 11.4766 19.1864 11.4955 19.0824 11.4844C18.9784 11.4733 18.8797 11.4326 18.7981 11.367C18.7166 11.3015 18.6555 11.214 18.6222 11.1148C18.5888 11.0156 18.5847 10.909 18.6102 10.8075L19.098 8.85513L18.1388 7.41576C18.0831 7.33337 18.0509 7.23735 18.0457 7.13805C18.0405 7.03874 18.0625 6.93989 18.1093 6.85215C18.1561 6.76441 18.2259 6.69108 18.3113 6.64007C18.3966 6.58905 18.4943 6.56228 18.5938 6.56263H19.9418L20.8715 5.16537C20.9244 5.09463 20.9931 5.03721 21.0721 4.99765C21.151 4.9581 21.2382 4.9375 21.3265 4.9375C21.4148 4.9375 21.5019 4.9581 21.5809 4.99765C21.6599 5.03721 21.7286 5.09463 21.7815 5.16537L22.7145 6.56263H24.0625C24.1615 6.56262 24.2587 6.58948 24.3436 6.64036C24.4285 6.69123 24.4981 6.76421 24.5448 6.85151C24.5915 6.93881 24.6136 7.03715 24.6088 7.13604C24.604 7.23493 24.5725 7.33066 24.5175 7.41302L23.5583 8.8524L24.0461 10.8047C24.0663 10.8854 24.0678 10.9696 24.0506 11.0509C24.0334 11.1322 23.9979 11.2085 23.9467 11.2741C23.8956 11.3396 23.8302 11.3926 23.7555 11.4291C23.6808 11.4656 23.5988 11.4845 23.5156 11.4845ZM21.3281 9.29701C21.413 9.29693 21.4967 9.31659 21.5726 9.35443L22.6953 9.91662L22.4372 8.88302C22.4185 8.80887 22.4155 8.73163 22.4285 8.65627C22.4415 8.58091 22.4702 8.50912 22.5127 8.44552L23.0404 7.65638H22.4219C22.3319 7.65639 22.2432 7.63419 22.1639 7.59174C22.0845 7.54929 22.0168 7.4879 21.9669 7.41302L21.3281 6.45326L20.6894 7.41138C20.6396 7.48656 20.572 7.54827 20.4926 7.59101C20.4133 7.63376 20.3245 7.65621 20.2344 7.65638H19.6159L20.1425 8.44662C20.185 8.51021 20.2136 8.582 20.2266 8.65736C20.2396 8.73272 20.2367 8.80997 20.218 8.88412L19.9598 9.91771L21.0837 9.35552C21.1595 9.3173 21.2432 9.29727 21.3281 9.29701ZM31.1719 11.4845C31.0871 11.4844 31.0034 11.4648 30.9274 11.4271L28.9844 10.4553L27.0413 11.4298C26.9477 11.4766 26.8427 11.4955 26.7387 11.4844C26.6346 11.4733 26.536 11.4326 26.4544 11.367C26.3728 11.3015 26.3117 11.214 26.2784 11.1148C26.2451 11.0156 26.2409 10.909 26.2664 10.8075L26.7542 8.85513L25.795 7.41576C25.7393 7.33337 25.7071 7.23735 25.702 7.13805C25.6968 7.03874 25.7187 6.93989 25.7655 6.85215C25.8123 6.76441 25.8822 6.69108 25.9675 6.64007C26.0529 6.58905 26.1506 6.56228 26.25 6.56263H27.598L28.5277 5.16537C28.5806 5.09463 28.6493 5.03721 28.7283 4.99765C28.8073 4.9581 28.8944 4.9375 28.9827 4.9375C29.0711 4.9375 29.1582 4.9581 29.2372 4.99765C29.3162 5.03721 29.3848 5.09463 29.4377 5.16537L30.3707 6.56263H31.7188C31.8178 6.56262 31.9149 6.58948 31.9998 6.64036C32.0848 6.69123 32.1543 6.76421 32.201 6.85151C32.2477 6.93881 32.2699 7.03715 32.2651 7.13604C32.2603 7.23493 32.2287 7.33066 32.1737 7.41302L31.2145 8.8524L31.7023 10.8047C31.7225 10.8854 31.7241 10.9696 31.7069 11.0509C31.6897 11.1322 31.6541 11.2085 31.603 11.2741C31.5519 11.3396 31.4864 11.3926 31.4117 11.4291C31.337 11.4656 31.255 11.4845 31.1719 11.4845ZM28.9844 9.29701C29.0692 9.29693 29.1529 9.31659 29.2288 9.35443L30.3516 9.91662L30.0934 8.88302C30.0747 8.80887 30.0718 8.73163 30.0848 8.65627C30.0978 8.58091 30.1264 8.50912 30.1689 8.44552L30.6966 7.65638H30.0781C29.9881 7.65639 29.8995 7.63419 29.8201 7.59174C29.7407 7.54929 29.6731 7.4879 29.6231 7.41302L28.9844 6.45326L28.3456 7.41138C28.2959 7.48656 28.2283 7.54827 28.1489 7.59101C28.0695 7.63376 27.9808 7.65621 27.8906 7.65638H27.2721L27.7987 8.44662C27.8412 8.51021 27.8699 8.582 27.8829 8.65736C27.8959 8.73272 27.8929 8.80997 27.8742 8.88412L27.6161 9.91771L28.7399 9.35552C28.8158 9.3173 28.8995 9.29727 28.9844 9.29701ZM15.8594 11.4845C15.7746 11.4844 15.6909 11.4648 15.6149 11.4271L13.6719 10.4553L11.7288 11.4298C11.6352 11.4766 11.5302 11.4955 11.4262 11.4844C11.3221 11.4733 11.2235 11.4326 11.1419 11.367C11.0603 11.3015 10.9992 11.214 10.9659 11.1148C10.9326 11.0156 10.9284 10.909 10.9539 10.8075L11.4417 8.85513L10.4825 7.41576C10.4268 7.33337 10.3946 7.23735 10.3895 7.13805C10.3843 7.03874 10.4062 6.93989 10.453 6.85215C10.4998 6.76441 10.5697 6.69108 10.655 6.64007C10.7404 6.58905 10.8381 6.56228 10.9375 6.56263H12.2855L13.2152 5.16537C13.2681 5.09463 13.3368 5.03721 13.4158 4.99765C13.4948 4.9581 13.5819 4.9375 13.6702 4.9375C13.7586 4.9375 13.8457 4.9581 13.9247 4.99765C14.0037 5.03721 14.0723 5.09463 14.1252 5.16537L15.0582 6.56263H16.4062C16.5053 6.56262 16.6024 6.58948 16.6873 6.64036C16.7723 6.69123 16.8418 6.76421 16.8885 6.85151C16.9352 6.93881 16.9574 7.03715 16.9526 7.13604C16.9478 7.23493 16.9162 7.33066 16.8612 7.41302L15.902 8.8524L16.3898 10.8047C16.41 10.8854 16.4116 10.9696 16.3944 11.0509C16.3772 11.1322 16.3416 11.2085 16.2905 11.2741C16.2394 11.3396 16.1739 11.3926 16.0992 11.4291C16.0245 11.4656 15.9425 11.4845 15.8594 11.4845ZM13.6719 9.29701C13.7567 9.29693 13.8404 9.31659 13.9163 9.35443L15.0391 9.91662L14.7809 8.88302C14.7622 8.80887 14.7593 8.73163 14.7723 8.65627C14.7853 8.58091 14.8139 8.50912 14.8564 8.44552L15.3841 7.65638H14.7656C14.6756 7.65639 14.587 7.63419 14.5076 7.59174C14.4282 7.54929 14.3606 7.4879 14.3106 7.41302L13.6719 6.45326L13.0331 7.41138C12.9834 7.48656 12.9158 7.54827 12.8364 7.59101C12.757 7.63376 12.6683 7.65621 12.5781 7.65638H11.9596L12.4862 8.44662C12.5287 8.51021 12.5574 8.582 12.5704 8.65736C12.5834 8.73272 12.5804 8.80997 12.5617 8.88412L12.3036 9.91771L13.4274 9.35552C13.5033 9.3173 13.587 9.29727 13.6719 9.29701ZM25.7031 21.3283H30.0781V22.422H25.7031V21.3283ZM25.3165 19.8479L27.7774 17.3869L28.5507 18.1602L26.0898 20.6211L25.3165 19.8479ZM25.3165 24.1758L26.0898 23.4026L28.5507 25.8635L27.7774 26.6368L25.3165 24.1758Z"
                                                            />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="content">
                                                    <div class="number">
                                                        <h5 class="counter">99.5</h5>
                                                        <span>%</span>
                                                    </div>
                                                    <p>Positives Review</p>
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

        <div class="home3-testimonial-section mtb80">
            <div class="row mb-40">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title2 two text-center">
                        <h2>Reviews by Travellers</h2>
                        <p>Etiam ac tortor id purus commodo vulputate. Vestibulum porttitor erat felis and sed vehicula tortor malesuada gravida. Mauris volutpat enim quis.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card-slider-area">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="swiper home3-testimonial-card-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card2">
                                        <ul class="rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                     
                                        <p>“I cannot express enough how satisfied I am with the webgot deve services provided by Egens Lab from the initial.”</p>
                                        <div class="tesimonial-card-bottom">
                                          
                                            <div class="author-area">
                                                <div class="author-img">
                                                    <img src="assets/img/testi-author-img1.png" alt />
                                                </div>
                                                <div class="author-name-desig">
                                                    <h5>Client Name</h5>
                                                    <span>Founder, Egenslab</span>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card2">
                                        <ul class="rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                     
                                        <p>“I cannot express enough how satisfied I am with the webgot deve services provided by Egens Lab from the initial.”</p>
                                        <div class="tesimonial-card-bottom">
                                          
                                            <div class="author-area">
                                                <div class="author-img">
                                                    <img src="assets/img/testi-author-img2.png" alt />
                                                </div>
                                                <div class="author-name-desig">
                                                    <h5>Client Name</h5>
                                                    <span>Founder, Egenslab</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card2">
                                        <ul class="rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                     
                                        <p>“I cannot express enough how satisfied I am with the webgot deve services provided by Egens Lab from the initial.”</p>
                                        <div class="tesimonial-card-bottom">
                                          
                                            <div class="author-area">
                                                <div class="author-img">
                                                    <img src="assets/img/testi-author-img3.png" alt />
                                                </div>
                                                <div class="author-name-desig">
                                                    <h5>Client Name</h5>
                                                    <span>Founder, Egenslab</span>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card2">
                                        <ul class="rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                      
                                        <p>“I cannot express enough how satisfied I am with the webgot deve services provided by Egens Lab from the initial.”</p>
                                        <div class="tesimonial-card-bottom">
                                          
                                            <div class="author-area">
                                                <div class="author-img">
                                                    <img src="assets/img/testi-author-img2.png" alt />
                                                </div>
                                                <div class="author-name-desig">
                                                    <h5>Client Name</h5>
                                                    <span>Founder, Egenslab</span>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card2">
                                        <ul class="rating">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                     
                                        <p>“I cannot express enough how satisfied I am with the webgot deve services provided by Egens Lab from the initial.”</p>
                                        <div class="tesimonial-card-bottom">
                                         
                                            <div class="author-area">
                                                <div class="author-img">
                                                    <img src="assets/img/testi-author-img1.png" alt />
                                                </div>
                                                <div class="author-name-desig">
                                                    <h5>Client Name</h5>
                                                    <span>Founder, Egenslab</span>
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

        <div class="home3-teams-section mtb80">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="section-title2 two">
                            <h2>Meet Our Team</h2>
                          
                        </div>
                        <div class="slider-btn-grp4">
                            <div class="slider-btn teams-card-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                    <path
                                        d="M15.9512 0.869644C13.5972 7.34699 13.5419 12.9847 15.8404 19.1322C15.9511 19.4021 15.8404 19.7319 15.6188 19.8819C15.3973 20.0618 15.0927 20.0318 14.8988 19.8219C10.1356 14.7839 5.28936 11.7252 0.470783 10.6756C0.193853 10.6157 1.79767e-06 10.3458 1.82127e-06 10.0759C1.84749e-06 9.77599 0.193853 9.50611 0.470783 9.44613C5.26167 8.36657 10.1633 5.24785 15.0096 0.179928C15.1204 0.0599765 15.2588 -1.97214e-06 15.425 -1.95762e-06C15.5358 -1.94793e-06 15.6465 0.0299873 15.7573 0.119951C15.9788 0.26989 16.0619 0.569767 15.9512 0.869644Z"
                                    />
                                </svg>
                            </div>
                            <div class="slider-btn teams-card-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                    <path
                                        d="M0.0488516 19.1304C2.40275 12.6531 2.45814 7.01538 0.159624 0.867897C0.0488521 0.598007 0.159624 0.268143 0.381167 0.118204C0.602711 -0.0617224 0.907334 -0.0317344 1.10118 0.17818C5.86437 5.21612 10.7106 8.27486 15.5292 9.32443C15.8061 9.38441 16 9.6543 16 9.92419C16 10.2241 15.8061 10.494 15.5292 10.5539C10.7383 11.6335 5.83668 14.7522 0.990413 19.8201C0.879641 19.9401 0.741176 20.0001 0.575018 20.0001C0.464247 20.0001 0.353474 19.9701 0.242703 19.8801C0.0211589 19.7302 -0.0619202 19.4303 0.0488516 19.1304Z"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teams-slider-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper teams-card-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="teams-card2">
                                            <div class="teams-img">
                                                <img src="assets/img/team1.png" alt />
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                                    </li>
                                                  
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="teams-content">
                                                <h4>Guide Name</h4>
                                                <span>Tour Guide</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="teams-card2">
                                            <div class="teams-img">
                                                <img src="assets/img/team2.png" alt />
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                                    </li>
                                                  
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="teams-content">
                                                <h4>Guide Name</h4>
                                                <span>Tour Guide</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="teams-card2">
                                            <div class="teams-img">
                                                <img src="assets/img/team3.png" alt />
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="teams-content">
                                                <h4>Guide Name</h4>
                                                <span>Tour Guide</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="teams-card2">
                                            <div class="teams-img">
                                                <img src="assets/img/team4.png" alt />
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="teams-content">
                                                <h4>Guide Name</h4>
                                                <span>Tour Guide</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="teams-card2">
                                            <div class="teams-img">
                                                <img src="assets/img/team5.png" alt />
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                                    </li>
                                                  
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="teams-content">
                                                <h4>Guide Name</h4>
                                                <span>Tour Guide</span>
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
        
        <!-- ~~~ Footer Section ~~~ -->
		<?php include('./components/footer.php') ?>
        <!-- End Footer Section -->

    <!-- modal login form -->
    <div class="modal modal-lg fade login-modal" id="user-login"
    data-bs-backdrop="static" 
    data-bs-keyboard="false" 
    tabindex="-1"
    aria-labelledby="aboutUsLabel" 
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-clode-btn" data-bs-dismiss="modal"></div>
                <!-- <div class="modal-header">
                    <img src="assets/img/login-modal-header-img.jpg" alt />
                </div> -->
                <div class="modal-body">
                    <div class="login-registration-form lodalForm">
                        <div class="contact-form-area">
                            <h3>Plan Your Next Trip</h3>
                       <!-- ~~~ Footer Section ~~~ -->
                        <?php include('./components/cta-form.php') ?>
                        <!-- End Footer Section -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal login form -->

        <script type="text/javascript">
            $(window).on('load',function(){
                var delayMs = 1500; // delay in milliseconds
                
                setTimeout(function(){
                    $('#user-login').modal('show');
                }, delayMs);
            });
        </script>  
    </body>

   
</html>
