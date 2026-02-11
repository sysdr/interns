<?php
/**
 * Title: Login
 * Slug: ctoi/page-login
 * Categories: ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page","style":{"spacing":{"padding":{"top":"48px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-page" style="padding-top:48px;padding-bottom:80px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"400px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Sign in', 'ctoi' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","className":"ctoi-muted"} -->
		<p class="has-text-align-center ctoi-muted"><?php esc_html_e( 'Use your Google account to access ctoi.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:shortcode -->
		[ctoi_google_login]
		<!-- /wp:shortcode -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
