<?php
/**
 * Title: Candidate Onboarding (Google Careers Style)
 * Slug: ctoi/page-candidate-onboarding
 * Categories: ctoi_internship, ctoi_page
 * Description: Candidate signup matching Google Careers design.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:64px;padding-bottom:64px">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"2rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:2rem;font-weight:400"><?php esc_html_e( 'For Candidates', 'ctoi' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
		<p class="has-text-align-center" style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Find internships that match your skills. Get discovered by companies. Launch your career.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"48px"} -->
		<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
				<h2 class="wp-block-heading" style="color:#202124;font-size:1.25rem;font-weight:500"><?php esc_html_e( 'Why ctoi?', 'ctoi' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
				<ul class="wp-block-list" style="color:#5f6368;font-size:0.9375rem">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'AI-powered resume parsing — your skills are automatically extracted and searchable', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'One-click applications — apply to internships with your saved resume', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Companies find you — get discovered when they search for your skills', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Google Sign-In — no lengthy forms, get started in seconds', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="border-width:1px;border-color:#e8eaed;border-radius:8px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
					<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
					<h3 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Get started', 'ctoi' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p class="has-text-align-center" style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Sign in with Google to create your candidate profile.', 'ctoi' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:shortcode -->
					[ctoi_google_login]
					<!-- /wp:shortcode -->
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#5f6368"}}} -->
					<p class="has-text-align-center" style="color:#5f6368;font-size:0.8125rem"><?php esc_html_e( 'Already have an account?', 'ctoi' ); ?> <a href="/login/"><?php esc_html_e( 'Log in', 'ctoi' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"64px"} -->
		<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.25rem;font-weight:500"><?php esc_html_e( 'Next steps after sign up', 'ctoi' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:24px;padding-bottom:24px">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#4285F4"}}} -->
					<p style="color:#4285F4;font-size:1.25rem;font-weight:500">1</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Upload your resume', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'PDF, DOC, or DOCX. Our AI extracts your skills automatically.', 'ctoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:24px;padding-bottom:24px">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#4285F4"}}} -->
					<p style="color:#4285F4;font-size:1.25rem;font-weight:500">2</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Browse internships', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Search by skills, location, and industry.', 'ctoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:24px;padding-bottom:24px">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#4285F4"}}} -->
					<p style="color:#4285F4;font-size:1.25rem;font-weight:500">3</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1rem","fontWeight":"500"},"color":{"text":"#202124"}}} -->
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Apply & get hired', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Apply with one click. Companies reach out directly.', 'ctoi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"48px"} -->
		<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"url":"/upload-resume/","style":{"typography":{"fontSize":"0.875rem"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/upload-resume/" style="font-size:0.875rem"><?php esc_html_e( 'Upload resume', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"url":"/internships/","className":"is-style-google-outline","style":{"typography":{"fontSize":"0.875rem"}}} -->
			<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/internships/" style="font-size:0.875rem"><?php esc_html_e( 'Browse internships', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
