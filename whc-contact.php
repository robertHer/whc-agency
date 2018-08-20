<?php
/**
 * The template for displaying all pages
 *
 * Template Name: whc-contact
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
<div id="primary" class=" container-fluid">
		
			<div class="row ">
				<div class="col-md-8 mx-auto">

					
					
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
	</div>
	
	</div>

<section id="map">
	<div class="container-fluid">
			<?php
       $mapargs = array(
           'post_per_page'=>1,
           'post_type' => 'maps',
           'order' => 'ASC'
	   		);
        $maps = new WP_Query($mapargs);
        ?>
           <?php if($maps -> have_posts()): while($maps -> have_posts()): $maps -> the_post() 
           
		   ?>
				<div class="row">
					<?php the_content() ?>
					
			</div>
			<?php endwhile; endif; ?>
			</div>

		</section>

	

<?php

get_footer();
