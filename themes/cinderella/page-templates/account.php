<?php
/**
 * Template Name: Account Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="fullpage">
				<section class="">
					<div class="account-photo">
						<h2 class="account-message"><?php echo CFS()->get( '' ); ?></h2>
					</div>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>

				<section="form">
					<a class="button" href="http://localhost:3000/cinderella">Login</a>
					<!-- Remember Me button here and forgot your password? button-->
					<div class="or">Or <span class="line"></span></div>
					<div class="account-register">
						<p>No account yet?</p>
						<a class="button" href="http://localhost:3000/cinderella">Register</a>
				</section>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>