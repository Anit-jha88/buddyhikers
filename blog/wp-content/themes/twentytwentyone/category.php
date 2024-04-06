<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

        <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 101.02%), url(https://bizebrand.in/demo2/buddyhikers/assets/img/innerpage/inner-banner-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <h1>Blog </h1>
                            <ul class="breadcrumb-list">
                                <li><a href="https://demo.mkstechnosoft.com/buddyhikers/index.php">Home</a></li>
                                <li><?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?> </li>
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
                                <?php
                                // Get parent categories
                                $parent_categories = get_categories(array(
                                'parent' => 0 ,
                                'hide_empty' => false
                                ));
                                
                                // Loop through parent categories
                                foreach ($parent_categories as $parent_category) {
                                // Query to count posts in the current category
                                $category_post_count = new WP_Query(array(
                                'category__in' => array($parent_category->term_id),
                                'posts_per_page' => -1, // Get all posts
                                'post_status' => 'publish' // Only count published posts
                                ));
                                
                                // Output category name and post count
                                echo '<li><a href="' . esc_url(get_category_link($parent_category->term_id)) . '">' . $parent_category->name . ' <span>(' . $category_post_count->found_posts . ')</span></a></li>';
                                
                                // Reset post data
                                wp_reset_postdata();
                                }
                                ?>
                                   
                                
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
                            
                                  <?php 
                                    while ( have_posts() ) : the_post(); 
                                    $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
                                    ?>
                 
                    <div class=" col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="<?php the_permalink();?>" class="card-img"><img src="<?php echo $image[0];?>" alt /></a>
                                <a href="#." class="date">
                                    <span>
                                        <strong><?php echo get_the_date('d');?></strong> <br />
                                        <?php echo get_the_date('F');?>
                                    </span>
                                </a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content-top">
                                    <ul>
                                        <li>
                                            <a href="#."><?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></a>
                                        </li>
                                    </ul>
                                </div>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                                <div class="book-btn">
                                    <a href="<?php the_permalink();?>" class="primary-btn2">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <?php endwhile; // End the loop. Whew. ?>
                    
                  
                 
                </div>
            </div>
                   
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-lg-12">-->
                <!--        <nav class="inner-pagination-area">-->
                <!--            <ul class="pagination-list">-->
                <!--                <li>-->
                <!--                    <a href="#." class="shop-pagi-btn"><i class="bi bi-chevron-left"></i></a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#.">1</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#." class="active">2</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#.">3</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#."><i class="bi bi-three-dots"></i></a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#.">6</a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="#." class="shop-pagi-btn"><i class="bi bi-chevron-right"></i></a>-->
                <!--                </li>-->
                <!--            </ul>-->
                <!--        </nav>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>


    


	

<?php get_footer(); ?>
