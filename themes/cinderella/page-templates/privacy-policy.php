<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="fullpage">
				<section class="section">
					<section class="about-section-1 cp-section cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-tittle"><?php echo CFS()->get( 'pp_tittle' ); ?></h2>
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down"></i>
					</section>
				</section>
				
				<section class="section fp-auto-height">
					<section class="pivacy-section-2 cp-section cp-marketing-section">
						<h2 class="cp-marketing-tittle about-page"><?php echo CFS()->get( 'pp_section_2_tittle' ); ?></h2>
						<p class="cp-marketing-copy"><?php echo CFS()->get( 'pp_message' ); ?></p>
					</section>

					<section class="cp-information-"> 
						<h2 class="cp-information-you-give"><?php echo CFS()->get( 'information_title' ); ?></h2>
            <p class="cp-information-message"><?php echo CFS()->get('information_message'); ?></p>
					</section>

					<section class="cp-purple-section">
						<h2 class="personal-info"><?php echo CFS()->get( 'personal_information_tittle' ); ?></h2>
            <p class="personal-info-message"><?php echo CFS()->get( 'personal_information_message' ); ?></p>
             <?php echo CFS()->get('personal_information_message_2'); ?>
					</section>

					<section class="cp-title-section section-above-footer">
						<h2 class="cp-hyperlink-title"><?php echo CFS()->get('hyperlinks_title'); ?></h2>
            <p class="cp-hyperlink-message"><?php echo CFS()->get('hyperlinks_message'); ?></p>
					
					</section>
					<?php get_footer(); ?>
				</section> <!--end of section fp-auto-height -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->