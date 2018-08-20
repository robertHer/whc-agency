<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: whc-services 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc_theme-1
 */

get_header();
?>

    

<section>
    <div class="container">

        <div class="row">
            <?php
    $productargs = array(
        'post_per_page'=>3,
        'post_type' => 'products',
        'order' => 'ASC'
    );
    $products = new WP_Query($productargs);
    ?>
        <?php if($products -> have_posts()): while($products -> have_posts()): $products -> the_post() 
        
        ?>     

        <div class="col-md-3">
            <h2>
             <?php the_title(); ?>
            </h2>             
         <div class="img-box">
             <?php the_post_thumbnail(); ?>
            </div>                
            <p>
                <?php the_content(); ?>
            </p>
        </div>
        <?php endwhile; endif; ?>
    
      <div class="col-md-3">
          
        <aside id="secondary" class="widget-area">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </aside>
        
    </div>
</div>
</div>
</section> 

	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main"> -->


		<!-- </main> -->
        <!-- #main -->
	<!-- </div> -->
    <!-- #primary -->

<?php
get_footer();
