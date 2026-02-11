<?php
/**
 * Title: Portal Home
 * Slug: ctoi/page-home-portal
 * Categories: ctoi
 * Description: Hero, Global Search, Feature Grid, Life at ctoi
 */
?>
<!-- wp:group {"align":"full","className":"ctoi-page ctoi-portal","style":{"spacing":{"padding":{"top":"clamp(48px,8vw,96px)","bottom":"clamp(48px,8vw,96px)"}}},"layout":{"type":"constrained","contentSize":"min(96vw, 1200px)"}} -->
<div class="wp-block-group alignfull ctoi-page ctoi-portal" style="padding-top:clamp(48px,8vw,96px);padding-bottom:clamp(48px,8vw,96px)">
	<!-- wp:group {"className":"ctoi-hero","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ctoi-hero">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem,6vw,4rem)","fontWeight":"600"}}} -->
		<h1 class="wp-block-heading has-text-align-center">Build for <span class="ctoi-accent">everyone</span>.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","className":"ctoi-muted","style":{"typography":{"fontSize":"1.125rem"}}} -->
		<p class="has-text-align-center ctoi-muted" style="font-size:1.125rem"><?php esc_html_e( 'Find internships. Connect with companies. Launch your career.', 'ctoi' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:html -->
		<div class="ctoi-global-search">
			<svg class="ctoi-search-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
			<form action="<?php echo esc_url( home_url( '/internships/' ) ); ?>" method="get" role="search">
				<input type="search" name="s" placeholder="<?php esc_attr_e( 'Search internships...', 'ctoi' ); ?>" />
			</form>
		</div>
		<!-- /wp:html -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
		<div class="wp-block-buttons" style="margin-top:2rem">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/internships/"><?php esc_html_e( 'Browse Internships', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/login/"><?php esc_html_e( 'Sign In', 'ctoi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"ctoi-feature-grid","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ctoi-feature-grid">
		<!-- wp:group {"className":"ctoi-feature-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group ctoi-feature-item">
			<div class="ctoi-feature-icon blue">🔍</div>
			<h3><?php esc_html_e( 'Discover', 'ctoi' ); ?></h3>
			<p><?php esc_html_e( 'Browse internships from top companies. Filter by role, location, and term.', 'ctoi' ); ?></p>
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"ctoi-feature-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group ctoi-feature-item">
			<div class="ctoi-feature-icon green">✓</div>
			<h3><?php esc_html_e( 'Apply', 'ctoi' ); ?></h3>
			<p><?php esc_html_e( 'One-click apply with your resume. Track your applications in your dashboard.', 'ctoi' ); ?></p>
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"ctoi-feature-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group ctoi-feature-item">
			<div class="ctoi-feature-icon red">🚀</div>
			<h3><?php esc_html_e( 'Launch', 'ctoi' ); ?></h3>
			<p><?php esc_html_e( 'Get matched with opportunities. Start your career journey today.', 'ctoi' ); ?></p>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"ctoi-life-section","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ctoi-life-section">
		<!-- wp:heading {"textAlign":"center","level":2,"className":"ctoi-h2"} -->
		<h2 class="wp-block-heading has-text-align-center ctoi-h2"><?php esc_html_e( 'Life at ctoi', 'ctoi' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph -->
				<p class="ctoi-muted"><?php esc_html_e( 'We believe in connecting talented students with meaningful opportunities. Our platform brings together ambitious interns and forward-thinking companies to build the future of work.', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph -->
				<p class="ctoi-muted"><?php esc_html_e( 'Whether you are looking for your first internship or a company seeking top talent, ctoi provides the tools and support to make great matches happen.', 'ctoi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
