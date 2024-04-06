<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
  $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
?>

  <div class="blog-details-section mtb80">
            <div class="container">
                <div class="row g-lg-4 gy-5 justify-content-center">
                    <div class="col-lg-8">
                        <div class="post-thumb mb-30">
                            <img src="<?php echo $image[0];?>" alt />
                        </div>
                        <div class="post-title mb-30">
                            <h1><?php the_title();?></h1>
                        </div>
                       
                       <?php the_content();?>
                        
                       
                       
                      
                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-area">
                            <div class="single-widget mb-30">
                             
                               <form action="<?php echo home_url(); ?>" id="search-form" method="get">
                                    <div class="search-box">
                                          <input type="text" name="s" id="s" value="type your search" onblur="if(this.value=='')this.value='type your search'"
    onfocus="if(this.value=='type your search')this.value=''" />
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
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
endwhile; // End of the loop.

get_footer();
