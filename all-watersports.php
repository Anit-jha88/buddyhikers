<?php
include('admin/config.php');
$currentPage = 'watersportsPage';
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
                            <h1>View all Watersports</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>View all Watersports</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-grid-section mtb80">
            <div class="container">
                <div class="row gy-5 ">
                     <?php 
                    $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Watersports' order by `id` asc");
					while($row= $qry->fetch_assoc()):
					
                    ?>
                      <div class="col-lg-4 col-md-6">
                        <div class="package-card3 style-3">
                            <a href="watersports-details.php?id=<?php echo $row['id'] ?>" class="package-card-img">
                                <img src="<?php echo validate_image($row['image1']) ?>" alt />
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
                <!--<div class="row mt-50">-->
                <!--    <div class="col-lg-12">-->
                <!--        <nav class="inner-pagination-area">-->
                <!--            <ul class="pagination-list">-->
                <!--                <li>-->
                <!--                    <a href="#" class="shop-pagi-btn"><i class="bi bi-chevron-left"></i></a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#">1</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#" class="active">2</a>-->
                <!--                </li>-->
                               
                <!--                <li>-->
                <!--                    <a href="#">3</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#" class="shop-pagi-btn"><i class="bi bi-chevron-right"></i></a>-->
                <!--                </li>-->
                <!--            </ul>-->
                <!--        </nav>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
     
        <!-- ~~~ Footer Section ~~~ -->
		<?php include('./components/footer.php') ?>
        <!-- End Footer Section -->
       
    </body>

   
</html>
