<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package carbon-agency
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'carbon_agency_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_setup() {
	add_editor_style( './assets/css/style-shared.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation', 'search', 'blocks' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "carbon-agency-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'carbon_agency_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_styles() {
	wp_enqueue_style(
		'carbon-agency-style',
		get_stylesheet_uri(),
		[],
		carbon_agency_VERSION
	);
	wp_enqueue_style(
		'carbon-agency-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.css' ),
		[],
		carbon_agency_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'carbon_agency_styles' );

/**
 * Enqueue the admin CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_admin_styles() {
	wp_enqueue_style(
		'carbon-agency-theme-info-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		carbon_agency_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'carbon_agency_admin_styles' );

/**
 * Custom Menu Page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_menu_page() {
    add_submenu_page(
        'themes.php', // Parent slug: 'themes.php' is for Appearance menu
        'Theme Page', // Page title
        'Carbon Agency Info', // Menu title
        'manage_options', // Capability
        'theme-menu-page', // Menu slug
        'carbon_agency_menu_page_callback' // Callback function
    );
}
add_action('admin_menu', 'carbon_agency_menu_page');

function carbon_agency_menu_page_callback() {
	$theme         = wp_get_theme();
    $theme_name    = $theme->get('Name');
    $theme_version = $theme->get( 'Version' );
    $theme_slug    = $theme->get_template();
    ?>
    <div class="theme-wrap">
    	<div class="theme-wrap-inner">
	        <h1><?php echo esc_html__( 'Welcome to the', 'carbon-agency' ) . ' ' . esc_html( $theme_name ) . ' ' . esc_html( $theme_version ); ?></h1>
	        <p><?php echo esc_html( $theme_name ) . ' ' . esc_html__( 'is now installed and ready to use.', 'carbon-agency' ); ?></p>
	        <div class="quick-links">
	        	<?php
	        	echo '<a href="' . esc_url( 'https://www.kantipurthemes.com/' ) . esc_html__( 'carbon-pro', 'carbon-agency' ) . '" target="_blank" class="button button-hero button-primary">' . esc_html__( 'Buy Pro', 'carbon-agency' ).'</a>';
	        	echo '<a href="' . esc_url( 'https://www.kantipurthemes.com/' . esc_html( $theme_slug ) ) . '" target="_blank" class="button button-hero button-secondary">' . esc_html__( 'Theme Info', 'carbon-agency' ).'</a>';
	        	?>
	        </div>
    	</div>
    </div>
    <?php
}

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );




function my_faq_whatsapp() {
    return '
    <div class="wrapper-faq-whatsapp">
        <a href="https://wa.me/+989301193394" class="message-box" target="_blank">
            <div class="message-text">
                پیام به واتس اپ پشتیبان فروش دوره
            </div>
        </a>
    </div>
    ';
}
add_shortcode('faq_whatsapp', 'my_faq_whatsapp');