<?php
/**
 * Title: For Companies
 * Slug: ctoi/page-company-onboarding
 * Categories: ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page","style":{"spacing":{"padding":{"top":"clamp(24px,4vw,48px)","bottom":"clamp(24px,4vw,48px)"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull ctoi-page" style="padding-top:clamp(24px,4vw,48px);padding-bottom:clamp(24px,4vw,48px)">
	<!-- wp:heading -->
	<h1 class="wp-block-heading ctoi-h1"><?php esc_html_e( 'For Companies', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:shortcode -->
	[ctoi_company_profile]
	<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
