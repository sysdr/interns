<?php
/**
 * Title: For Students
 * Slug: ctoi/page-for-students
 * Categories: ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page","style":{"spacing":{"padding":{"top":"clamp(24px,4vw,48px)","bottom":"clamp(24px,4vw,48px)"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull ctoi-page" style="padding-top:clamp(24px,4vw,48px);padding-bottom:clamp(24px,4vw,48px)">
	<!-- wp:heading -->
	<h1 class="wp-block-heading ctoi-h1"><?php esc_html_e( 'For Students', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"ctoi-muted"} -->
	<p class="ctoi-muted"><?php esc_html_e( 'Find internships, upload your resume, and get matched with opportunities.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/internships/"><?php esc_html_e( 'Browse Internships', 'ctoi' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/login/"><?php esc_html_e( 'Sign In', 'ctoi' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
