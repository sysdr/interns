<?php
/**
 * Title: Company Onboarding (Google Careers Style)
 * Slug: ctoi/page-company-onboarding
 * Categories: ctoi_internship, ctoi_page
 * Description: Company signup matching Google Careers design.
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
		<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:2rem;font-weight:400"><?php esc_html_e( 'Companies', 'ctoi' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
		<p class="has-text-align-center" style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Find talented interns. Post opportunities. Build your team.', 'ctoi' ); ?></p>
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
					<li><?php esc_html_e( 'AI-powered candidate search — find candidates by skills, experience, and location', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Resumes processed automatically — structured data, no manual parsing', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Direct applications — candidates apply to your internships with one click', 'ctoi' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'SEO-optimized listings — your internships appear in Google Job Search', 'ctoi' ); ?></li>
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
					<p class="has-text-align-center" style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Sign in with Google to create your company account.', 'ctoi' ); ?></p>
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
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Create company profile', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Add your company name, description, and logo.', 'ctoi' ); ?></p>
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
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Post your first internship', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'List the role, skills needed, and location.', 'ctoi' ); ?></p>
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
					<h4 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:500"><?php esc_html_e( 'Search & hire', 'ctoi' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<p style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Browse our candidate database and review applications.', 'ctoi' ); ?></p>
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
			<!-- wp:button {"url":"/candidates/","style":{"typography":{"fontSize":"0.875rem"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/candidates/" style="font-size:0.875rem"><?php esc_html_e( 'Search candidates', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"url":"/post-internship/","className":"is-style-google-outline","style":{"typography":{"fontSize":"0.875rem"}}} -->
			<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/post-internship/" style="font-size:0.875rem"><?php esc_html_e( 'Post an internship', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
