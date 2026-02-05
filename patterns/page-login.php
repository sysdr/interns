<?php
/**
 * Title: Login (Google Careers Style)
 * Slug: ctoi/page-login
 * Categories: ctoi_internship, ctoi_page
 * Description: Sign-in page matching Google Careers design.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-login-page","style":{"spacing":{"padding":{"top":"48px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-login-page" style="padding-top:48px;padding-bottom:80px">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#5f6368"}}} -->
		<p style="color:#5f6368;font-size:0.875rem"><a href="/" style="color:#4285F4;text-decoration:none">← <?php esc_html_e( 'Back to home', 'ctoi' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"32px"} -->
		<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"align":"center","layout":{"type":"constrained","contentSize":"400px"}} -->
		<div class="wp-block-group aligncenter">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px","left":"40px","right":"40px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"color":{"background":"#ffffff"},"layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-background" style="border-width:1px;border-color:#e8eaed;border-radius:8px;background-color:#ffffff;padding-top:48px;padding-right:40px;padding-bottom:48px;padding-left:40px">
				<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
				<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.75rem;font-weight:400"><?php esc_html_e( 'Sign in', 'ctoi' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
				<p class="has-text-align-center" style="color:#5f6368;font-size:0.9375rem"><?php esc_html_e( 'Use your Google account to access ctoi.', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":"32px"} -->
				<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:shortcode -->
					[ctoi_google_login]
					<!-- /wp:shortcode -->
				</div>
				<!-- /wp:group -->

				<!-- wp:spacer {"height":"24px"} -->
				<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:separator {"style":{"color":{"background":"#e8eaed"}}} -->
				<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#e8eaed;color:#e8eaed"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#5f6368"}}} -->
				<p class="has-text-align-center" style="color:#5f6368;font-size:0.8125rem"><?php esc_html_e( 'New to ctoi?', 'ctoi' ); ?> <a href="/students/"><?php esc_html_e( 'Students', 'ctoi' ); ?></a> · <a href="/companies/"><?php esc_html_e( 'Companies', 'ctoi' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
