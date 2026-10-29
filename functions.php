<?php
/**
 * Soleya theme functions.
 *
 * The markup, CSS and JS are ported 1:1 from the Astro build (soleya-site/dist).
 * WordPress' default front-end output is stripped so each page renders exactly
 * like the Astro page it replaces.
 */

/**
 * URL of a file in the theme's assets/ folder.
 */
function soleya_asset( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/**
 * Cache-busting version for a file in assets/.
 */
function soleya_asset_version( $path ) {
	$file = get_template_directory() . '/assets/' . ltrim( $path, '/' );
	return file_exists( $file ) ? (string) filemtime( $file ) : null;
}

/**
 * Current request path relative to the site root, e.g. "/blogs/mains-namaste/".
 * Mirrors Astro.url.pathname, which the header uses for its active states.
 */
function soleya_current_path() {
	$path = (string) wp_parse_url( isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/', PHP_URL_PATH );
	$base = rtrim( (string) wp_parse_url( home_url(), PHP_URL_PATH ), '/' );
	if ( '' !== $base && str_starts_with( $path, $base ) ) {
		$path = substr( $path, strlen( $base ) );
	}
	return '' === $path ? '/' : $path;
}

/*
 * Theme setup.
 */
add_action(
	'after_setup_theme',
	function () {
		// The page card on /blogs/ and the home page reads the Page excerpt.
		add_post_type_support( 'page', 'excerpt' );
	}
);

// The Astro reference has no WordPress toolbar above the page.
add_filter( 'show_admin_bar', '__return_false' );

/*
 * Blog card / article fields (native custom fields, editable in the admin).
 */
add_action(
	'init',
	function () {
		$fields = array(
			'soleya_introduction' => array( 'post', 'page' ),
			'soleya_image'        => array( 'post', 'page' ),
			'soleya_image_alt'    => array( 'post', 'page' ),
			'soleya_source_label' => array( 'post' ),
			'soleya_source_url'   => array( 'post' ),
			'soleya_category'     => array( 'page' ),
			'soleya_blog_listing' => array( 'page' ),
		);
		foreach ( $fields as $key => $post_types ) {
			foreach ( $post_types as $post_type ) {
				register_post_meta(
					$post_type,
					$key,
					array(
						'type'          => 'string',
						'single'        => true,
						'show_in_rest'  => true,
						'auth_callback' => function () {
							return current_user_can( 'edit_posts' );
						},
					)
				);
			}
		}
	}
);

/*
 * Assets.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'soleya-site', soleya_asset( 'css/site.css' ), array(), soleya_asset_version( 'css/site.css' ) );

		// Lucide (all icons) is only loaded on the home page, as on the Astro site.
		if ( is_front_page() ) {
			wp_enqueue_script_module( 'soleya-lucide', soleya_asset( 'js/lucide.js' ), array(), soleya_asset_version( 'js/lucide.js' ) );
		}
	}
);

// Print the stylesheet tag in the same form as the Astro build.
add_filter(
	'style_loader_tag',
	function ( $tag, $handle, $href ) {
		if ( 'soleya-site' === $handle ) {
			return '<link rel="stylesheet" href="' . esc_url( $href ) . '">';
		}
		return $tag;
	},
	10,
	3
);

// WordPress 6.9+ adds a script-module ID that is absent from the Astro output.
add_filter(
	'wp_script_attributes',
	function ( $attributes ) {
		if ( 'soleya-lucide-js-module' === ( $attributes['id'] ?? '' ) ) {
			unset( $attributes['id'] );
		}
		return $attributes;
	}
);

/*
 * Remove WordPress' default front-end output (styles, scripts, meta and links)
 * that the Astro pages do not have. Head tags are hardcoded per template.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		foreach ( array( 'wp-block-library', 'wp-block-library-theme', 'classic-theme-styles', 'global-styles', 'core-block-supports', 'wp-block-styles-placeholder', 'wp-global-styles-placeholder' ) as $handle ) {
			wp_dequeue_style( $handle );
		}
	},
	100
);

add_action(
	'init',
	function () {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'rest_output_link_wp_head' );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'rel_canonical' );
		remove_action( 'wp_head', 'wp_robots', 1 );
		remove_action( 'wp_head', 'wp_resource_hints', 2 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );
		remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
		remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
		remove_action( 'wp_footer', 'wp_enqueue_stored_styles', 1 );
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		remove_action( 'template_redirect', 'rest_output_link_header', 11 );
		remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
		add_filter( 'wp_speculation_rules_configuration', '__return_null' );
	}
);
