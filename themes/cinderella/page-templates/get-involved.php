<?php
/**
 * Template Name: Get Involved Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="get-involved-section-1">
			<?php echo CFS()->get( 'get_involved_no_gift' ); ?>
		</section>
		<section class="get-involved-section-2">
			<p>There are a few ways you can help The Cinderella Project thrive</p>
			<div class="get-inv-nav-wrapper">
				<ul class="help-nav">
					<li>Donations</li>
						<div class="donations-section-1">
							<p>100% of every donation received goes to make the students’ experience with the Cinderella Project better.
Cash donations help us purchase harder to obtain items such as large or small clothing/shoe sizes! 
We also rely on them to pay costs such as storage, dry cleaning and transportation amongst other expenses.</p>
							<p><a class="button-link" href="<?php the_permalink(); ?>">Pledge now</a></p>
						</div>
						<div class="donations-section-2">
							<h3>In-kind Donations</h3>
					<!-- in kind donations background image-->
						</div>
						<div class ="donations-section-3">
							<h3>Boutique Day is a monumental event…</h3>
							<p>and in order to make it all possible, we rely on donations of student care packages, formal wear, and much more. If you can provide support for any of the below items, we would greatly appreciate your donation! Each has an impact on a student’s experience.</p>
							<h3>Our Wishlist</h3>
							<div class="wishlist-menu">
								<ul>
 									<div class="get-wishlist-posts">
     							 		<?php
          								$args = array( 'post_type' => 'wishlist',
          								'posts_per_page' => 20,
									   'order' => 'ASC');
          								$wishlist_posts = get_posts( $args );
     							 		?>
       									 <?php foreach ( $wishlist_posts as $post ) : setup_postdata( $post ); ?>
										<li><?php echo get_the_title(); ?></li>
										<li><p>item</p></li>
										<?php endforeach ?>
								</ul> <!-- end of help nav -->
									</div>
						</div>
						<div class="drop-off-donations">
							<!--Drop off donations background image and title-->
							<h2><?php echo CFS()->get( 'drop_off_locations_title' ); ?></h2>
							<p><?php echo CFS()->get( 'drop_off_locations_dates' ); ?></p>

						</div>
						<div class="ideas-donations">
							<h2>Ideas for other donations? Get in touch!</h2>
							<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
						</div>
					<li>Sponsorships</li>
					<li>Fundraising</li>
					<li>Volunteer</li>
				</ul>
			</div>
		</section>
		



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
