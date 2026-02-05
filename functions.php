<?php
/**
 * ctoi functions and definitions.
 *
 * @package WordPress
 * @subpackage ctoi
 * @since ctoi 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'ctoi_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'ctoi_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'ctoi_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'ctoi_editor_style' );

// Enqueues the theme stylesheet on the front.
if ( ! function_exists( 'ctoi_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'ctoi-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style(
			'ctoi-google-careers',
			get_parent_theme_file_uri( 'assets/css/google-careers.css' ),
			array( 'ctoi-style' ),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'ctoi-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'ctoi_enqueue_styles' );

// Enqueues Google Fonts (Inter + Playfair Display - premium internship portal).
if ( ! function_exists( 'ctoi_enqueue_fonts' ) ) :
	/**
	 * Enqueues Inter and Playfair Display from Google Fonts.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_enqueue_fonts() {
		$heading_font = get_theme_mod( 'ctoi_heading_font', 'Playfair Display' );
		$body_font    = get_theme_mod( 'ctoi_body_font', 'Inter' );

		$fonts = array( 'Inter:300,400,500,600,700', 'Playfair+Display:400,500,600,700', 'Roboto:300,400,500,700' );
		if ( 'Roboto' === $body_font || 'Roboto' === $heading_font ) {
			$fonts[] = 'Roboto:300,400,500,700';
		}
		if ( 'Manrope' === $body_font || 'Manrope' === $heading_font ) {
			$fonts[] = 'Manrope:300,400,500,600,700';
		}
		$font_url = add_query_arg(
			array(
				'family'  => rawurlencode( implode( '&family=', array_unique( $fonts ) ) ),
				'display' => 'swap',
			),
			'https://fonts.googleapis.com/css2'
		);
		wp_enqueue_style(
			'ctoi-fonts',
			$font_url,
			array(),
			null
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'ctoi_enqueue_fonts', 5 );

// Preconnect to Google Fonts for faster font loading.
if ( ! function_exists( 'ctoi_font_preconnect' ) ) :
	/**
	 * Adds preconnect for Google Fonts.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_font_preconnect() {
		echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	}
endif;
add_action( 'wp_head', 'ctoi_font_preconnect', 1 );

// Registers custom block styles.
if ( ! function_exists( 'ctoi_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'ctoi' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'         => 'google-outline',
				'label'        => __( 'Outline (Primary)', 'ctoi' ),
				'inline_style' => '
				.wp-block-button.is-style-google-outline .wp-block-button__link {
					background: transparent !important;
					color: var(--ctoi-primary, var(--wp--preset--color--primary, #D4AF37)) !important;
					border: 1px solid var(--ctoi-primary, var(--wp--preset--color--primary, #D4AF37));
				}
				.wp-block-button.is-style-google-outline .wp-block-button__link:hover {
					background: color-mix(in srgb, var(--ctoi-primary, #D4AF37) 12%, transparent) !important;
					border-color: var(--ctoi-primary-hover, var(--wp--preset--color--primary-hover, #B8860B));
				}',
			)
		);
	}
endif;
add_action( 'init', 'ctoi_block_styles' );

// Theme Customizer for admin: colors, layout sizes, fonts.
if ( ! function_exists( 'ctoi_customize_register' ) ) :
	/**
	 * Registers theme customizer settings for look and feel.
	 *
	 * @since ctoi 1.0
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 * @return void
	 */
	function ctoi_customize_register( $wp_customize ) {
		$wp_customize->add_section(
			'ctoi_appearance',
			array(
				'title'    => __( 'ctoi Look & Feel', 'ctoi' ),
				'priority' => 30,
			)
		);

		// Primary color.
		$wp_customize->add_setting(
			'ctoi_primary_color',
			array(
				'default'           => '#D4AF37',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ctoi_primary_color',
				array(
					'label'   => __( 'Primary Color (buttons, links)', 'ctoi' ),
					'section' => 'ctoi_appearance',
				)
			)
		);

		// Primary hover color.
		$wp_customize->add_setting(
			'ctoi_primary_hover_color',
			array(
				'default'           => '#B8860B',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ctoi_primary_hover_color',
				array(
					'label'   => __( 'Primary Hover Color', 'ctoi' ),
					'section' => 'ctoi_appearance',
				)
			)
		);

		// Content width.
		$wp_customize->add_setting(
			'ctoi_content_width',
			array(
				'default'           => '720',
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			'ctoi_content_width',
			array(
				'label'       => __( 'Content Width (px)', 'ctoi' ),
				'description' => __( 'Max width for article content. 600–900 recommended.', 'ctoi' ),
				'section'     => 'ctoi_appearance',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 500,
					'max'  => 1200,
					'step' => 20,
				),
			)
		);

		// Wide layout width.
		$wp_customize->add_setting(
			'ctoi_wide_width',
			array(
				'default'           => '1340',
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			'ctoi_wide_width',
			array(
				'label'       => __( 'Wide Layout Width (px)', 'ctoi' ),
				'description' => __( 'Max width for full-width sections. 1200–1600 recommended.', 'ctoi' ),
				'section'     => 'ctoi_appearance',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 1000,
					'max'  => 1920,
					'step' => 40,
				),
			)
		);

		// Heading font.
		$wp_customize->add_setting(
			'ctoi_heading_font',
			array(
				'default'           => 'Playfair Display',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'ctoi_heading_font',
			array(
				'label'   => __( 'Heading Font', 'ctoi' ),
				'section' => 'ctoi_appearance',
				'type'    => 'select',
				'choices' => array(
					'Playfair Display' => 'Playfair Display (serif)',
					'Inter'            => 'Inter (sans-serif)',
					'Roboto'           => 'Roboto',
					'Manrope'          => 'Manrope',
				),
			)
		);

		// Body font.
		$wp_customize->add_setting(
			'ctoi_body_font',
			array(
				'default'           => 'Inter',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			'ctoi_body_font',
			array(
				'label'   => __( 'Body Font', 'ctoi' ),
				'section' => 'ctoi_appearance',
				'type'    => 'select',
				'choices' => array(
					'Inter'   => 'Inter',
					'Roboto'  => 'Roboto',
					'Manrope' => 'Manrope',
				),
			)
		);
	}
endif;
add_action( 'customize_register', 'ctoi_customize_register' );

// Output customizer CSS variables.
if ( ! function_exists( 'ctoi_customizer_css' ) ) :
	/**
	 * Outputs CSS variables from theme customizer.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_customizer_css() {
		$primary       = get_theme_mod( 'ctoi_primary_color', '#D4AF37' );
		$primary_hover = get_theme_mod( 'ctoi_primary_hover_color', '#B8860B' );
		$content_width = get_theme_mod( 'ctoi_content_width', 720 );
		$wide_width    = get_theme_mod( 'ctoi_wide_width', 1340 );
		$heading_font  = get_theme_mod( 'ctoi_heading_font', 'Playfair Display' );
		$body_font    = get_theme_mod( 'ctoi_body_font', 'Inter' );

		$heading_family = '"Playfair Display", Georgia, serif';
		if ( 'Inter' === $heading_font ) {
			$heading_family = 'Inter, system-ui, sans-serif';
		} elseif ( 'Roboto' === $heading_font ) {
			$heading_family = 'Roboto, sans-serif';
		} elseif ( 'Manrope' === $heading_font ) {
			$heading_family = 'Manrope, sans-serif';
		}

		$body_family = 'Inter, system-ui, sans-serif';
		if ( 'Roboto' === $body_font ) {
			$body_family = 'Roboto, sans-serif';
		} elseif ( 'Manrope' === $body_font ) {
			$body_family = 'Manrope, sans-serif';
		}

		$css = sprintf(
			':root {
				--ctoi-primary: %s;
				--ctoi-primary-hover: %s;
				--ctoi-content-width: min(90vw, %dpx);
				--ctoi-wide-width: min(95vw, %dpx);
				--ctoi-heading-font: %s;
				--ctoi-body-font: %s;
			}
			.wp-block-button__link:not(.has-background),
			.wp-element-button:not(.has-background) {
				background-color: var(--ctoi-primary) !important;
			}
			.wp-block-button__link:not(.has-background):hover,
			.wp-element-button:not(.has-background):hover {
				background-color: var(--ctoi-primary-hover) !important;
			}
			.alignwide { max-width: var(--ctoi-wide-width) !important; }
			.wp-block-group.alignwide { max-width: var(--ctoi-wide-width) !important; }
			h1, h2, h3, h4, h5, h6, .wp-block-heading { font-family: var(--ctoi-heading-font); }
			body, .wp-block-group, p { font-family: var(--ctoi-body-font); }',
			esc_attr( $primary ),
			esc_attr( $primary_hover ),
			absint( $content_width ),
			absint( $wide_width ),
			esc_attr( $heading_family ),
			esc_attr( $body_family )
		);
		wp_add_inline_style( 'ctoi-style', $css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'ctoi_customizer_css', 20 );

// Registers pattern categories.
if ( ! function_exists( 'ctoi_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_pattern_categories() {

		register_block_pattern_category(
			'ctoi_page',
			array(
				'label'       => __( 'Pages', 'ctoi' ),
				'description' => __( 'A collection of full page layouts.', 'ctoi' ),
			)
		);

		register_block_pattern_category(
			'ctoi_post-format',
			array(
				'label'       => __( 'Post formats', 'ctoi' ),
				'description' => __( 'A collection of post format patterns.', 'ctoi' ),
			)
		);

		register_block_pattern_category(
			'ctoi_internship',
			array(
				'label'       => __( 'Internship Portal', 'ctoi' ),
				'description' => __( 'Patterns for the internship portal: hero, listings, search, forms.', 'ctoi' ),
			)
		);
	}
endif;
add_action( 'init', 'ctoi_pattern_categories' );

// Add "Look & Feel" link under Appearance for theme customizer.
if ( ! function_exists( 'ctoi_add_look_and_feel_menu' ) ) :
	/**
	 * Adds Look & Feel submenu under Appearance.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_add_look_and_feel_menu() {
		add_theme_page(
			__( 'Look & Feel', 'ctoi' ),
			__( 'Look & Feel', 'ctoi' ),
			'edit_theme_options',
			'ctoi-look-and-feel',
			'ctoi_look_and_feel_redirect'
		);
	}

	/**
	 * Redirects to Customizer with ctoi Look & Feel section focused.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_look_and_feel_redirect() {
		$url = add_query_arg(
			array( 'autofocus[section]' => 'ctoi_appearance' ),
			admin_url( 'customize.php' )
		);
		wp_safe_redirect( $url );
		exit;
	}
endif;
add_action( 'admin_menu', 'ctoi_add_look_and_feel_menu', 15 );

// Add "Edit Navigation" link under Appearance for easy access to header/navigation editing.
if ( ! function_exists( 'ctoi_add_edit_navigation_menu' ) ) :
	/**
	 * Adds Edit Navigation submenu under Appearance.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_add_edit_navigation_menu() {
		add_theme_page(
			__( 'Edit Navigation', 'ctoi' ),
			__( 'Edit Navigation', 'ctoi' ),
			'edit_theme_options',
			'ctoi-edit-navigation',
			'ctoi_edit_navigation_redirect'
		);
	}

	/**
	 * Redirects to Site Editor for header/navigation editing.
	 * Uses JavaScript redirect to avoid "headers already sent" when WordPress
	 * outputs font CSS or other content before our callback runs.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_edit_navigation_redirect() {
		$theme = wp_get_theme();
		$slug  = $theme->get_stylesheet();
		$url   = add_query_arg(
			array(
				'postType' => 'wp_template_part',
				'post'     => $slug . '//header-ctoi',
			),
			admin_url( 'site-editor.php' )
		);
		$url = esc_url( $url );
		$msg = esc_html__( 'Redirecting to Site Editor...', 'ctoi' );
		$link_text = esc_html__( 'Click here if not redirected', 'ctoi' );
		echo '<script>window.location.replace("' . esc_js( $url ) . '");</script><p>' . $msg . ' <a href="' . $url . '">' . $link_text . '</a></p>';
		exit;
	}
endif;
add_action( 'admin_menu', 'ctoi_add_edit_navigation_menu', 20 );

// Registers block binding sources.
if ( ! function_exists( 'ctoi_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since ctoi 1.0
	 *
	 * @return void
	 */
	function ctoi_register_block_bindings() {
		register_block_bindings_source(
			'ctoi/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'ctoi' ),
				'get_value_callback' => 'ctoi_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'ctoi_register_block_bindings' );

// Customize wp-login.php to match Google Careers style.
if ( ! function_exists( 'ctoi_login_styles' ) ) :
	/**
	 * Enqueues Google Careers style for wp-login.php.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_login_styles() {
		$font_url = add_query_arg(
			array(
				'family'  => rawurlencode( 'Roboto:300,400,500,700' ),
				'display' => 'swap',
			),
			'https://fonts.googleapis.com/css2'
		);
		wp_enqueue_style(
			'ctoi-login-fonts',
			$font_url,
			array(),
			null
		);
		wp_enqueue_style(
			'ctoi-login-google-careers',
			get_parent_theme_file_uri( 'assets/css/login-google-careers.css' ),
			array( 'login' ),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'login_enqueue_scripts', 'ctoi_login_styles', 20 );

if ( ! function_exists( 'ctoi_login_header_url' ) ) :
	/**
	 * Login logo link points to home.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_login_header_url() {
		return home_url( '/' );
	}
endif;
add_filter( 'login_headerurl', 'ctoi_login_header_url' );

if ( ! function_exists( 'ctoi_login_header_text' ) ) :
	/**
	 * Login logo title.
	 *
	 * @since ctoi 1.0
	 */
	function ctoi_login_header_text() {
		return get_bloginfo( 'name' );
	}
endif;
add_filter( 'login_headertext', 'ctoi_login_header_text' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'ctoi_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since ctoi 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function ctoi_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
