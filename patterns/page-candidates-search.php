<?php
/**
 * Title: Search Candidates
 * Slug: ctoi/page-candidates-search
 * Categories: ctoi_internship, ctoi_page
 * Description: AI-powered candidate search for companies.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-gc-page","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,24px)","bottom":"clamp(12px,2vw,24px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-gc-page" style="padding-top:clamp(12px,2vw,24px);padding-bottom:clamp(12px,2vw,24px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(1.5rem,3vw,2rem)"},"color":{"text":"#1A1A1A"}}} -->
	<h1 class="wp-block-heading" style="color:#1A1A1A;font-size:clamp(1.5rem,3vw,2rem)"><?php esc_html_e( 'Search Candidates', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"color":{"text":"#5f6368"}}} -->
	<p class="has-text-color" style="color:#5f6368"><?php esc_html_e( 'Find talented candidates by skills, experience, and location.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:shortcode -->
	[ctoi_candidate_search]
	<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
