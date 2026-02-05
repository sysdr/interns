<?php
/**
 * Title: Application Form
 * Slug: ctoi/application-form
 * Categories: ctoi_internship
 * Description: Form for candidates to apply for internships.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"className":"ctoi-apply-form","style":{"spacing":{"padding":{"top":"clamp(40px,6vw,64px)","bottom":"clamp(40px,6vw,64px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ctoi-apply-form" style="padding-top:clamp(40px,6vw,64px);padding-bottom:clamp(40px,6vw,64px)">
	<!-- wp:group {"align":"wide","className":"ctoi-apply-card","style":{"spacing":{"padding":{"top":"clamp(32px,4vw,48px)","bottom":"clamp(32px,4vw,48px)","left":"clamp(24px,4vw,40px)","right":"clamp(24px,4vw,40px)"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide ctoi-apply-card" style="padding-top:clamp(32px,4vw,48px);padding-right:clamp(24px,4vw,40px);padding-bottom:clamp(32px,4vw,48px);padding-left:clamp(24px,4vw,40px);max-width:min(95vw,600px);margin:0 auto;box-shadow:0 4px 24px rgba(26,26,26,0.08);border-radius:12px;border:1px solid rgba(26,26,26,0.06)">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Apply for This Internship', 'ctoi' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Submit your application below. You must be logged in to apply.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40);" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong><?php esc_html_e( 'Select Resume', 'ctoi' ); ?></strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php esc_html_e( 'Choose from your uploaded resumes or upload a new one.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
		<div style="height:var(--wp--preset--spacing--20);" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong><?php esc_html_e( 'Cover Letter', 'ctoi' ); ?></strong></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Tell the employer why you\'re a great fit for this role.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Write your cover letter...', 'ctoi' ); ?>"} -->
		<p></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40);" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Submit Application', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
