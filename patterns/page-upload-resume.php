<?php
/**
 * Title: Upload Resume
 * Slug: ctoi/page-upload-resume
 * Categories: ctoi_internship, ctoi_page
 * Description: Candidate resume upload with AI processing.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-form","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,24px)","bottom":"clamp(12px,2vw,24px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-form" style="padding-top:clamp(12px,2vw,24px);padding-bottom:clamp(12px,2vw,24px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(1.5rem,3vw,2rem)"},"color":{"text":"#1A1A1A"}}} -->
	<h1 class="wp-block-heading" style="color:#1A1A1A;font-size:clamp(1.5rem,3vw,2rem)"><?php esc_html_e( 'Upload Your Resume', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"color":{"text":"#5f6368"}}} -->
	<p class="has-text-color" style="color:#5f6368"><?php esc_html_e( 'Upload your resume (PDF, DOC, DOCX, or TXT). Our AI will extract your skills so companies can find you.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:shortcode -->
	[ctoi_resume_upload]
	<!-- /wp:shortcode -->
	<!-- wp:paragraph {"style":{"color":{"text":"#5f6368"}}} -->
	<p class="has-text-color" style="color:#5f6368"><?php esc_html_e( 'Already uploaded?', 'ctoi' ); ?> <a href="/my-dashboard/"><?php esc_html_e( 'View your dashboard', 'ctoi' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
