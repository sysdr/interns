<?php
/**
 * Title: For Candidates (Google Careers Style)
 * Slug: ctoi/page-candidate-careers
 * Categories: ctoi_internship, ctoi_page
 * Description: Candidate page matching https://www.google.com/about/careers exactly.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

$hero_img    = get_theme_file_uri( 'assets/images/candidate-hero.svg' );
$resume_img  = get_theme_file_uri( 'assets/images/candidate-resume.svg' );
$students_img = get_theme_file_uri( 'assets/images/candidate-students.svg' );
$career_img  = get_theme_file_uri( 'assets/images/candidate-career.svg' );
$life_img    = get_theme_file_uri( 'assets/images/candidate-life.svg' );
$equal_img   = get_theme_file_uri( 'assets/images/candidate-equal.svg' );

?>
<!-- wp:group {"align":"full","className":"ctoi-candidate-careers ctoi-google-careers-page","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ctoi-candidate-careers ctoi-google-careers-page" style="padding-top:0;padding-bottom:0">
	<!-- Hero: Search for your career -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"96px","bottom":"96px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:96px;padding-bottom:96px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:clamp(2rem, 4vw, 3rem);font-weight:400"><?php esc_html_e( 'Search for your career', 'ctoi' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"24px"} -->
			<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:search {"label":"<?php esc_attr_e( 'Search internships', 'ctoi' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search by role, skill, or company...', 'ctoi' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'ctoi' ); ?>","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#dadce0","radius":"24px"}} /-->
			<!-- wp:spacer {"height":"56px"} -->
			<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:image {"align":"center","sizeSlug":"large","className":"candidate-hero-image"} -->
			<figure class="wp-block-image aligncenter size-large candidate-hero-image"><img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php esc_attr_e( 'Search for your career', 'ctoi' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Careers: Jobs, Students, Your career -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:64px;padding-bottom:64px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.75rem;font-weight:400"><?php esc_html_e( 'Careers', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"color":{"background":"#ffffff"},"layout":{"type":"default"}} -->
					<div class="wp-block-group has-border-color has-background" style="border-width:1px;border-color:#e8eaed;border-radius:8px;background-color:#ffffff;padding-top:32px;padding-right:24px;padding-bottom:32px;padding-left:24px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Jobs', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Browse all internship opportunities.', 'ctoi' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"url":"/internships/","style":{"typography":{"fontSize":"0.875rem"},"color":{"background":"#4285F4","text":"#ffffff"}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/internships/" style="font-size:0.875rem;background-color:#4285F4;color:#fff"><?php esc_html_e( 'View jobs', 'ctoi' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"color":{"background":"#ffffff"},"layout":{"type":"default"}} -->
					<div class="wp-block-group has-border-color has-background" style="border-width:1px;border-color:#e8eaed;border-radius:8px;background-color:#ffffff;padding-top:32px;padding-right:24px;padding-bottom:32px;padding-left:24px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Students', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Internships for students.', 'ctoi' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"url":"/internships/","className":"is-style-google-outline","style":{"typography":{"fontSize":"0.875rem"}}} -->
						<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/internships/" style="font-size:0.875rem"><?php esc_html_e( 'Explore', 'ctoi' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"color":{"background":"#ffffff"},"layout":{"type":"default"}} -->
					<div class="wp-block-group has-border-color has-background" style="border-width:1px;border-color:#e8eaed;border-radius:8px;background-color:#ffffff;padding-top:32px;padding-right:24px;padding-bottom:32px;padding-left:24px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Your career', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Upload resume. Get discovered.', 'ctoi' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"url":"/upload-resume/","className":"is-style-google-outline","style":{"typography":{"fontSize":"0.875rem"}}} -->
						<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/upload-resume/" style="font-size:0.875rem"><?php esc_html_e( 'Get started', 'ctoi' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Follow Life at ctoi on -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#f8f9fa"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#f8f9fa;padding-top:64px;padding-bottom:64px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'Follow Life at ctoi on', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"32px"} -->
			<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:image {"align":"center","sizeSlug":"large"} -->
			<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( $life_img ); ?>" alt="<?php esc_attr_e( 'Life at ctoi', 'ctoi' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- How we work -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:80px;padding-bottom:80px">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $resume_img ); ?>" alt="<?php esc_attr_e( 'How we work', 'ctoi' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
				<h2 class="wp-block-heading" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'How we work', 'ctoi' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
				<p style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Upload your resume once. Our AI extracts your skills. Companies find you when your skills match.', 'ctoi' ); ?></p>
				<!-- wp:button {"url":"/upload-resume/","style":{"typography":{"fontSize":"0.875rem"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/upload-resume/" style="font-size:0.875rem;background-color:#4285F4;color:#fff"><?php esc_html_e( 'Upload resume', 'ctoi' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- How we hire -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#f8f9fa"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#f8f9fa;padding-top:64px;padding-bottom:64px">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
				<h2 class="wp-block-heading" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'How we hire', 'ctoi' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
				<p style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Apply with one click. Companies review your profile and reach out directly.', 'ctoi' ); ?></p>
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $students_img ); ?>" alt="<?php esc_attr_e( 'How we hire', 'ctoi' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- More about us -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:64px;padding-bottom:64px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'More about us', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
			<p style="color:#5f6368;font-size:1rem"><a href="/about/" style="color:#4285F4"><?php esc_html_e( 'About us', 'ctoi' ); ?></a> · <a href="/faq/" style="color:#4285F4"><?php esc_html_e( 'FAQ', 'ctoi' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Equal Opportunity -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"80px"}},"color":{"background":"#f8f9fa"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#f8f9fa;padding-top:64px;padding-bottom:80px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'Equal Opportunity', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
			<p style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'ctoi is proud to be an equal opportunity employer. We are committed to building a workforce that is representative of the users we serve, creating a culture of belonging, and providing equal employment opportunity regardless of race, creed, color, religion, gender, sexual orientation, gender identity/expression, national origin, disability, age, or any other basis protected by law.', 'ctoi' ); ?></p>
			<!-- wp:spacer {"height":"32px"} -->
			<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:image {"align":"center","sizeSlug":"large"} -->
			<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( $equal_img ); ?>" alt="<?php esc_attr_e( 'Equal opportunity', 'ctoi' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Sign in CTA -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"80px"}},"color":{"background":"#ffffff"},"border":{"width":"0 1px 0 0","color":"#e8eaed"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-border-color has-background" style="border-width:0 1px 0 0;border-color:#e8eaed;background-color:#ffffff;padding-top:64px;padding-bottom:80px">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.5rem;font-weight:400"><?php esc_html_e( 'Ready to get started?', 'ctoi' ); ?></h2>
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
			<p class="has-text-align-center" style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Sign in with Google to create your candidate profile.', 'ctoi' ); ?></p>
			<!-- wp:spacer {"height":"24px"} -->
			<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:shortcode -->
				[ctoi_google_login]
				<!-- /wp:shortcode -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#5f6368"}}} -->
			<p class="has-text-align-center" style="color:#5f6368;font-size:0.875rem"><?php esc_html_e( 'Already have an account?', 'ctoi' ); ?> <a href="/login/"><?php esc_html_e( 'Log in', 'ctoi' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
