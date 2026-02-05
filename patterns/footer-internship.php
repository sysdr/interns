<?php
/**
 * Title: Footer (Google Careers Style)
 * Slug: ctoi/footer-internship
 * Categories: ctoi_internship, footer
 * Block Types: core/template-part/footer
 * Description: Footer matching Google Careers design.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-footer","style":{"spacing":{"padding":{"top":"clamp(16px,2vw,24px)","bottom":"clamp(12px,2vw,20px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"color":{"background":"#ffffff"},"border":{"width":"1px 0 0 0","color":"#e8eaed"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ctoi-footer has-border-color has-background" style="border-width:1px 0 0 0;border-color:#e8eaed;background-color:#ffffff;padding-top:clamp(16px,2vw,24px);padding-bottom:clamp(12px,2vw,20px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="color:#202124;font-size:1.125rem;font-weight:400"><?php esc_html_e( 'Follow Life at ctoi on', 'ctoi' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:spacer {"height":"8px"} -->
		<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#5f6368","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
		<!-- wp:spacer {"height":"12px"} -->
		<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem","fontWeight":"400"},"color":{"text":"#202124"}}} -->
		<h2 class="wp-block-heading" style="color:#202124;font-size:1rem;font-weight:400"><?php esc_html_e( 'More about us', 'ctoi' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#5f6368"}}} -->
		<p style="color:#5f6368;font-size:1rem"><a href="/about/"><?php esc_html_e( 'About', 'ctoi' ); ?></a> · <a href="/faq/"><?php esc_html_e( 'FAQ', 'ctoi' ); ?></a> · <a href="/login/"><?php esc_html_e( 'Log in', 'ctoi' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"12px"} -->
		<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:separator {"style":{"color":{"background":"#e8eaed"}}} -->
		<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#e8eaed;color:#e8eaed"/>
		<!-- /wp:separator -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#5f6368"}}} -->
		<p class="has-text-align-center" style="color:#5f6368;font-size:0.8125rem"><?php esc_html_e( 'Privacy', 'ctoi' ); ?> · <?php esc_html_e( 'Terms', 'ctoi' ); ?> · <?php esc_html_e( 'Manage cookies', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
