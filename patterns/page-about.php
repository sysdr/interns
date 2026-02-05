<?php
/**
 * Title: About Us (SEO)
 * Slug: ctoi/page-about
 * Categories: ctoi_page, ctoi_internship
 * Description: SEO-optimized About page for the internship portal.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

?>
<!-- wp:group {"align":"full","className":"ctoi-gc-page","style":{"spacing":{"padding":{"top":"clamp(12px,2vw,24px)","bottom":"clamp(12px,2vw,24px)","left":"clamp(12px,2vw,24px)","right":"clamp(12px,2vw,24px)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ctoi-gc-page" style="padding-top:clamp(12px,2vw,24px);padding-bottom:clamp(12px,2vw,24px);padding-left:clamp(12px,2vw,24px);padding-right:clamp(12px,2vw,24px)">
	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.5rem)"},"color":{"text":"#1A1A1A"}}} -->
	<h1 class="wp-block-heading" style="color:#1A1A1A;font-size:clamp(1.75rem,4vw,2.5rem)"><?php esc_html_e( 'About Our Internship Portal', 'ctoi' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#5f6368"}}} -->
	<p class="has-text-color" style="color:#5f6368;font-size:1.125rem"><?php esc_html_e( 'Connecting talented candidates with top companies through AI-powered matching.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#1A1A1A"}}} -->
	<h2 class="wp-block-heading" style="color:#1A1A1A;font-size:1.25rem"><?php esc_html_e( 'Our Mission', 'ctoi' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"color":{"text":"#1A1A1A"}}} -->
	<p class="has-text-color" style="color:#1A1A1A"><?php esc_html_e( 'We bridge the gap between ambitious interns and innovative companies. Our platform uses AI to parse resumes, extract skills, and match candidates to the right opportunities—so you spend less time searching and more time building your career.', 'ctoi' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#1A1A1A"}}} -->
	<h2 class="wp-block-heading" style="color:#1A1A1A;font-size:1.25rem"><?php esc_html_e( 'Students', 'ctoi' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:list -->
	<ul class="wp-block-list">
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Upload your resume once—our AI extracts your skills automatically', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Browse internships from companies actively hiring', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Apply with one click and track your application status', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#1A1A1A"}}} -->
	<h2 class="wp-block-heading" style="color:#1A1A1A;font-size:1.25rem"><?php esc_html_e( 'Companies', 'ctoi' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:list -->
	<ul class="wp-block-list">
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Post internships and reach qualified candidates instantly', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Search our AI-indexed candidate database by skills and experience', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Review applications and shortlist the best fit for your team', 'ctoi' ); ?></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
	<!-- wp:buttons {"layout":{"type":"flex"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"url":"/internships/"} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/internships/"><?php esc_html_e( 'Browse Internships', 'ctoi' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-google-outline","url":"/companies/"} -->
		<div class="wp-block-button is-style-google-outline"><a class="wp-block-button__link wp-element-button" href="/companies/"><?php esc_html_e( 'Companies', 'ctoi' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
