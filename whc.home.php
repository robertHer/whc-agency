<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: whc-home 
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

	<section id="header" style="background-color:#f5f5f5; height:90vh;" >
	
		<div class="container-fluid">
			<div class="row" style="margin-top:30px;">

				 <?php
       $args = array(
           'post_per_page'=>3,
           'post_type' => 'services',
           'order' => 'ASC'
        );
        $services = new WP_Query($args);
        ?>
           <?php if($services -> have_posts()): while($services -> have_posts()): $services -> the_post() 
           
           ?>     

				<div class="col-md-6 my-auto p-4">
					<h2 class="text-dark"><?php the_title() ?></h2>
					<p>
				<?php the_content(); ?>
					</p>
				</div>
			    <div class="col-md-4">
				<div class="img-box">
                <?php the_post_thumbnail(); ?>
            </div>  
				</div>
				<!-- <h1>header</h1> -->

				<?php endwhile; endif; ?>
			</div>

		</div>

	</section>

		<section id="welcome-section" style="margin-bottom:40px;">
			<div class="container">
				<div class="row " style="margin-top:60px;">

					<?php
       $welcomeargs = array(
		   'post_per_page'=>1,
           'post_type' => 'welcomes',
           'order' => 'ASC'
        );
        $welcome = new WP_Query($welcomeargs);
        ?>
           <?php if($welcome -> have_posts()): while($welcome -> have_posts()): $welcome -> the_post() 
           
           ?> 
				

				<div class="col-md-6 text-center mx-auto">
					<h2><?php the_title() ?></h2>
					<p><?php the_content() ?></p>
				</div>
				<?php endwhile; endif; ?>
</div>



				<div class="row ">
					
					<?php
       $welcomecolargs = array(
           'post_per_page'=>3,
           'post_type' => 'welcomecols',
           'order' => 'ASC'
        );
        $welcomecol = new WP_Query($welcomecolargs);
        ?>
           <?php if($welcomecol -> have_posts()): while($welcomecol -> have_posts()): $welcomecol -> the_post() 
           
		   ?> 

		   <div class="col-md-4" style="">
            <h2>
                
            </h2>             
            <div class="img-box">
                <?php the_post_thumbnail(); ?>
            </div>                
            <p>
               <?php the_content(); ?>
            </p>
       </div> 
		   


				<?php endwhile; endif; ?>
				</div>
			</div>
		</section>


		<section id="facts">

		<div class="container-fluid bg-dark" style="height:30vh;">
			<div class="row">

			<?php
       $factargs = array(
           'post_per_page'=>4,
           'post_type' => 'facts',
           'order' => 'ASC'
        );
        $facts = new WP_Query($factargs);
        ?>
           <?php if($facts -> have_posts()): while($facts -> have_posts()): $facts -> the_post() 
           
		   ?>
		   

				<div class="col-md-3" style="margin-top:30px; border-left: 1px solid gray;">
					<?php the_content() ?>
				</div>

			<?php endwhile; endif; ?>
			</div>
		</div>


		

		</section>


		<section id="feedback" style="margin-top:60px; padding:30px;height:70vh;" >
			<div class="container-fluid">
				<?php
       $testimonialargs = array(
           'post_per_page'=>1,
           'post_type' => 'testimonials',
           'order' => 'ASC'
        );
        $testimonials = new WP_Query($testimonialargs);
        ?>
           <?php if($testimonials -> have_posts()): while($testimonials -> have_posts()): $testimonials -> the_post() 
           
		   ?>
				<div class="row">
					<div class="col-md-6">
						<h2><?php the_title() ?></h2>
						<br>
						<div>

							<?php the_content() ?> 
						</div>
					</div>
					<div class="col-md-4" >
						<?php the_post_thumbnail() ?>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</section>


		<section id="form" style="background-color:#f5f5f5;">
			<div class="container">
			<?php
       $formargs = array(
           'post_per_page'=>1,
           'post_type' => 'forms',
           'order' => 'ASC'
        );
        $forms = new WP_Query($formargs);
        ?>
           <?php if($forms -> have_posts()): while($forms -> have_posts()): $forms -> the_post() 
           
		   ?>
				<div class="row ">
					<div class="col-md-6">
					<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
					</div>
					<div class="col-md-4">
						<div> <?php the_content()?></div>
					</div>

				<?php endwhile; endif; ?>
				</div>
			</div>

		</section>


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


		<section id="subs">
			<div class="container">
				<div class="row text-center">
				<?php
       $subscribeargs = array(
           'post_per_page'=>1,
           'post_type' => 'subscribes',
           'order' => 'ASC'
	   		);
        $subscribes = new WP_Query($subscribeargs);
        ?>
           <?php if($subscribes -> have_posts()): while($subscribes -> have_posts()): $subscribes -> the_post() 
           
		   ?>
					<div class="col-md-6 mx-auto">
						<h2> <?php the_title() ?> </h2>
						<p> <?php the_content()  ?>  </p>
					</div>
					<?php endwhile; endif; ?>
				</div>
					<div class="row ">
						<div class="col-md-6">
						
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
