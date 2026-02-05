<?php
/**
 * Title: Header (Google Careers Style)
 * Slug: ctoi/header-internship
 * Categories: ctoi_internship, header
 * Block Types: core/template-part/header
 * Description: Site header matching Google Careers design.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}},"color":{"background":"#ffffff"},"border":{"width":"0 0 1px 0","color":"#e8eaed"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-border-color" style="border-width:0 0 1px 0;border-color:#e8eaed;background-color:#ffffff;padding-top:16px;padding-bottom:16px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontFamily":"var:preset|font-family|roboto","fontSize":"1.25rem","fontWeight":"500"},"color":{"text":"#202124"}}} /-->
				<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontSize":"0.9375rem"},"color":{"text":"#5f6368"}}} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'ctoi' ); ?>","url":"/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Internships', 'ctoi' ); ?>","url":"/internships/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'For Candidates', 'ctoi' ); ?>","url":"/candidate/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'For Companies', 'ctoi' ); ?>","url":"/for-companies/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Upload Resume', 'ctoi' ); ?>","url":"/upload-resume/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'My Dashboard', 'ctoi' ); ?>","url":"/my-dashboard/"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Company Dashboard', 'ctoi' ); ?>","url":"/company-dashboard/"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"/login/","className":"is-style-google-outline","style":{"typography":{"fontSize":"0.875rem"}}} -->
					<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/login/" style="font-size:0.875rem"><?php esc_html_e( 'Sign in', 'ctoi' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
