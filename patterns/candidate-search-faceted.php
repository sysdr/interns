<?php
/**
 * Title: Candidate Search (Faceted)
 * Slug: ctoi/candidate-search-faceted
 * Categories: ctoi_internship
 * Description: Faceted search interface for companies to find candidates.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"className":"ctoi-candidate-search","style":{"spacing":{"padding":{"top":"clamp(40px,6vw,64px)","bottom":"clamp(40px,6vw,64px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ctoi-candidate-search" style="padding-top:clamp(40px,6vw,64px);padding-bottom:clamp(40px,6vw,64px)">
	<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(1.25rem,2vw,1.5rem)"},"color":{"text":"#1A1A1A"}}} -->
	<h2 class="wp-block-heading" style="color:#1A1A1A;font-size:clamp(1.25rem,2vw,1.5rem)"><?php esc_html_e( 'Find Candidates', 'ctoi' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"clamp(24px,4vw,48px)"}}},"className":"ctoi-search-columns"} -->
	<div class="wp-block-columns ctoi-search-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"className":"ctoi-search-filters","style":{"spacing":{"padding":{"top":"clamp(24px,3vw,32px)","bottom":"clamp(24px,3vw,32px)","left":"clamp(24px,3vw,32px)","right":"clamp(24px,3vw,32px)"}},"border":{"width":"1px","color":"#e8eaed","radius":"10px"},"layout":{"type":"default"}} -->
			<div class="wp-block-group ctoi-search-filters" style="border-width:1px;border-color:#e8eaed;border-radius:10px;padding-top:clamp(24px,3vw,32px);padding-right:clamp(24px,3vw,32px);padding-bottom:clamp(24px,3vw,32px);padding-left:clamp(24px,3vw,32px);box-shadow:0 2px 12px rgba(26,26,26,0.04)">
				<!-- wp:heading {"level":4,"fontSize":"medium"} -->
				<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Filters', 'ctoi' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Skills', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:search {"label":"<?php esc_attr_e( 'Search skills...', 'ctoi' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'e.g. Python, React', 'ctoi' ); ?>","width":100,"widthUnit":"%"} /-->
				<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
				<div style="height:var(--wp--preset--spacing--30);" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Experience', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( '0–1 years / 1–3 years / 3+ years', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
				<div style="height:var(--wp--preset--spacing--30);" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Apply Filters', 'ctoi' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:search {"label":"<?php esc_attr_e( 'Search candidates', 'ctoi' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search by name, skills, or education...', 'ctoi' ); ?>","width":100,"widthUnit":"%","className":"is-style-default"} /-->
			<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
			<div style="height:var(--wp--preset--spacing--30);" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Search results will appear here. Connect the ctoi-portal plugin for live data.', 'ctoi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
