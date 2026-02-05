<?php
/**
 * Title: Internship Hero (Google Careers Style)
 * Slug: ctoi/hero-internship
 * Categories: ctoi_internship, banner
 * Description: Hero section for internships archive.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-hero-internship","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,20px)","bottom":"clamp(12px,2vw,20px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-hero-internship" style="padding-top:clamp(12px,2vw,20px);padding-bottom:clamp(12px,2vw,20px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 720px)"}} -->
	<div class="wp-block-group" style="margin-left:auto;margin-right:auto">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","fontWeight":"400"},"color":{"text":"#202124"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:clamp(2rem, 4vw, 3rem);font-weight:400"><?php esc_html_e( 'Find your internship', 'ctoi' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
		<p class="has-text-align-center" style="color:#5f6368;font-size:1rem"><?php esc_html_e( 'Browse opportunities from top companies.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"24px"} -->
		<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'ctoi' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search by role, skill, or company...', 'ctoi' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'ctoi' ); ?>","style":{"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}},"border":{"width":"1px","color":"#dadce0","radius":"24px"}} /-->
		<!-- wp:spacer {"height":"32px"} -->
		<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"url":"/internships/","style":{"typography":{"fontSize":"0.875rem"},"color":{"background":"#4285F4","text":"#ffffff"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/internships/" style="font-size:0.875rem;background-color:#4285F4;color:#fff"><?php esc_html_e( 'Browse all', 'ctoi' ); ?></a></div>
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
