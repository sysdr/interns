<?php
/**
 * Title: Home Page (Google Careers Style)
 * Slug: ctoi/page-home-portal
 * Categories: ctoi_internship, ctoi_page
 * Description: Home page matching Google Careers design.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

$hero_img = get_theme_file_uri( 'assets/images/hero-careers.svg' );
?>
<!-- wp:group {"align":"full","className":"ctoi-home-hero ctoi-google-careers-page","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ctoi-home-hero ctoi-google-careers-page" style="padding-top:0;padding-bottom:0">
	<!-- Hero: Search for your career -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"color":{"background":"#ffffff"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 720px)"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:clamp(1.5rem, 3vw, 2rem);font-weight:400"><?php esc_html_e( 'Search for your career', 'ctoi' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"8px"} -->
			<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:search {"label":"<?php esc_attr_e( 'Search internships', 'ctoi' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search by role, skill, or company...', 'ctoi' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'ctoi' ); ?>","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}},"border":{"width":"1px","color":"#dadce0","radius":"24px"}} /-->
			<!-- wp:spacer {"height":"12px"} -->
			<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:image {"align":"center","sizeSlug":"large","className":"candidate-hero-image","style":{"size":{"width":"100%","height":"140px"}}} -->
			<figure class="wp-block-image aligncenter size-large candidate-hero-image"><img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php esc_attr_e( 'Search for your career', 'ctoi' ); ?>" style="max-width:100%;max-height:140px;height:auto;object-fit:contain"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Careers: Jobs, Students, Your career -->
	<!-- wp:group {"align":"full","className":"ctoi-section-white","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull ctoi-section-white" style="padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
		<div class="wp-block-group" style="padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.25rem;font-weight:400"><?php esc_html_e( 'Careers', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"12px"} -->
			<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"12px"}}},"className":"ctoi-careers-cards"} -->
			<div class="wp-block-columns alignwide ctoi-careers-cards">
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"className":"ctoi-careers-card","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"16px","right":"16px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"layout":{"type":"default"}} -->
					<div class="wp-block-group ctoi-careers-card" style="border-width:1px;border-color:#e8eaed;border-radius:8px;padding-top:14px;padding-right:16px;padding-bottom:14px;padding-left:16px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Jobs', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Browse all internship opportunities from top companies.', 'ctoi' ); ?></p>
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
					<!-- wp:group {"className":"ctoi-careers-card","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"16px","right":"16px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"layout":{"type":"default"}} -->
					<div class="wp-block-group ctoi-careers-card" style="border-width:1px;border-color:#e8eaed;border-radius:8px;padding-top:14px;padding-right:16px;padding-bottom:14px;padding-left:16px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Students', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Internships designed for students and recent graduates.', 'ctoi' ); ?></p>
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
					<!-- wp:group {"className":"ctoi-careers-card","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"16px","right":"16px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"layout":{"type":"default"}} -->
					<div class="wp-block-group ctoi-careers-card" style="border-width:1px;border-color:#e8eaed;border-radius:8px;padding-top:14px;padding-right:16px;padding-bottom:14px;padding-left:16px">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
						<h3 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Your career', 'ctoi' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
						<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Upload your resume. Get discovered by companies. Build your future.', 'ctoi' ); ?></p>
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

	<!-- Latest internships -->
	<!-- wp:group {"align":"full","className":"ctoi-section-gray","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull ctoi-section-gray" style="background-color:#f8f9fa;padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
		<div class="wp-block-group" style="padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading" style="color:#202124;font-size:1.25rem;font-weight:400"><?php esc_html_e( 'Latest internships', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":"8px"} -->
			<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:pattern {"slug":"ctoi/internship-grid"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Equal Opportunity -->
	<!-- wp:group {"align":"full","className":"ctoi-equal-opportunity","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)"}}},"color":{"background":"#f8f9fa"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull ctoi-equal-opportunity has-background" style="background-color:#f8f9fa;padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 800px)"}} -->
		<div class="wp-block-group" style="padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px);margin-left:auto;margin-right:auto">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading" style="color:#202124;font-size:1.125rem;font-weight:400"><?php esc_html_e( 'Equal Opportunity', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"},"color":{"text":"#5f6368"}}} -->
			<p style="color:#5f6368;font-size:1rem;line-height:1.6"><?php esc_html_e( 'ctoi is proud to be an equal opportunity employer. We are committed to building a workforce that is representative of the users we serve, creating a culture of belonging, and providing equal employment opportunity regardless of race, creed, color, religion, gender, sexual orientation, gender identity/expression, national origin, disability, age, or any other basis protected by law.', 'ctoi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- CTA -->
	<!-- wp:group {"align":"full","className":"ctoi-section-white","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull ctoi-section-white" style="padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 720px)"}} -->
		<div class="wp-block-group" style="padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.25rem;font-weight:400"><?php esc_html_e( 'Ready to get started?', 'ctoi' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
			<p class="has-text-align-center" style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Sign in with Google to create your account.', 'ctoi' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"url":"/login/","style":{"typography":{"fontSize":"0.875rem"},"color":{"background":"#4285F4","text":"#ffffff"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/login/" style="font-size:0.875rem;background-color:#4285F4;color:#fff"><?php esc_html_e( 'Sign in', 'ctoi' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
