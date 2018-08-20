<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: whc-about
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
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-3">
                <?php get_sidebar(); ?>
				</div>
				<div class="col-md-9">
					
					<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
            
		endwhile; // End of the loop.
		?>
    </div>
    <!-- <div class="col-md-3">
		
		
    
    </div> -->
    </div>
</div>
</section>

<?php

get_footer();