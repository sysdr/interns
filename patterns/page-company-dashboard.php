<?php
/**
 * Title: Company Dashboard
 * Slug: ctoi/page-company-dashboard
 * Categories: ctoi_internship, ctoi_page
 * Description: Company dashboard for managing internships and applications.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-dashboard ctoi-google-careers-page ctoi-company-dashboard","style":{"spacing":{"padding":{"top":"clamp(24px,4vw,48px)","bottom":"clamp(24px,4vw,48px)","left":"clamp(16px,4vw,48px)","right":"clamp(16px,4vw,48px)"}}},"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
<div class="wp-block-group alignfull ctoi-dashboard ctoi-google-careers-page ctoi-company-dashboard" style="padding-top:clamp(24px,4vw,48px);padding-bottom:clamp(24px,4vw,48px);padding-left:clamp(16px,4vw,48px);padding-right:clamp(16px,4vw,48px)">
	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(1.5rem,3vw,2rem)","fontWeight":"400"},"color":{"text":"#202124"}}} -->
	<h1 class="wp-block-heading" style="color:#202124;font-size:clamp(1.5rem,3vw,2rem);font-weight:400"><?php esc_html_e( 'Company Dashboard', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:shortcode -->
	[ctoi_company_dashboard]
	<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
