<?php
/**
 * Title: Internship Grid (Google Careers Style)
 * Slug: ctoi/internship-grid
 * Categories: ctoi_internship
 * Description: Grid layout matching Google Careers job cards.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"},"className":"ctoi-internship-grid"} -->
<div class="wp-block-group ctoi-internship-grid">
	<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"internship","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"className":"ctoi-internship-cards"} -->
			<!-- wp:group {"className":"ctoi-internship-card","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"14px","right":"14px"}},"border":{"width":"1px","color":"#e8eaed","radius":"8px"},"layout":{"type":"default"}} -->
			<div class="wp-block-group ctoi-internship-card" style="border-width:1px;border-color:#e8eaed;border-radius:8px;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px;box-shadow:0 2px 8px rgba(26,26,26,0.04);transition:box-shadow 0.2s ease, transform 0.2s ease">
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"clamp(1rem,1.5vw,1.125rem)","fontWeight":"500"},"color":{"text":"#1A1A1A"}}} /-->
				<!-- wp:post-date {"style":{"typography":{"fontSize":"clamp(0.75rem,1vw,0.8125rem)"},"color":{"text":"#5f6368"}}} /-->
				<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"clamp(0.875rem,1.2vw,0.9375rem)"},"color":{"text":"#5f6368"}}} /-->
				<!-- wp:post-link {"fontSize":"small","style":{"elements":{"link":{"color":{"text":"#4285F4"}}}}} -->
				<?php esc_html_e( 'View details', 'ctoi' ); ?> →
				<!-- /wp:post-link -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#5f6368"}}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5f6368"}}} -->
			<p style="color:#5f6368"><?php esc_html_e( 'No internships found.', 'ctoi' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
