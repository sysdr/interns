<?php
/**
 * Title: Upload Resume
 * Slug: ctoi/page-upload-resume
 * Categories: ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page","style":{"spacing":{"padding":{"top":"clamp(24px,4vw,48px)","bottom":"clamp(24px,4vw,48px)"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull ctoi-page" style="padding-top:clamp(24px,4vw,48px);padding-bottom:clamp(24px,4vw,48px)">
	<!-- wp:heading -->
	<h1 class="wp-block-heading ctoi-h1"><?php esc_html_e( 'Upload Your Resume', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"ctoi-muted"} -->
	<p class="ctoi-muted"><?php esc_html_e( 'Upload your resume (PDF, DOC, DOCX, or TXT). Our AI will extract your skills so companies can find you.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:shortcode -->
	[ctoi_resume_upload]
	<!-- /wp:shortcode -->
	<!-- wp:paragraph {"className":"ctoi-muted"} -->
	<p class="ctoi-muted"><?php esc_html_e( 'Already uploaded?', 'ctoi' ); ?> <a href="/student-dashboard/"><?php esc_html_e( 'View your dashboard', 'ctoi' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
