<?php
/**
 * Title: Company Dashboard
 * Slug: ctoi/page-company-dashboard
 * Categories: ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page","style":{"spacing":{"padding":{"top":"clamp(24px,4vw,48px)","bottom":"clamp(24px,4vw,48px)"}}},"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
<div class="wp-block-group alignfull ctoi-page" style="padding-top:clamp(24px,4vw,48px);padding-bottom:clamp(24px,4vw,48px)">
	<!-- wp:heading -->
	<h1 class="wp-block-heading ctoi-h1"><?php esc_html_e( 'Company Dashboard', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:shortcode -->
	[ctoi_company_dashboard]
	<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
