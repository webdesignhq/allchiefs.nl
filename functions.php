<?php 

if ( ! function_exists( 'website_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function website_setup() 
{ 
	
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'website' ),
		'secondary' => __( 'Secondary Menu', 'website' ),
		'footer_moreinfo' => __( 'Footer Meer informatie', 'website' ),
		'footer_customerservice' => __( 'Footer Klantenservice', 'website' )
	) );
	
	if ( ! isset ( $content_width) )
    $content_width = 1200;

	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'custom-background' );
	add_post_type_support( 'page', 'excerpt' );
	

	
}
endif; // website setup
add_action( 'after_setup_theme', 'website_setup' );


/* Adding breadcrubs */
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> /";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " / ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}


/* Posibility to add a custom logo */
function website_custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'website_custom_logo_setup' );


add_theme_support( 'post-thumbnails' ); 


/* Create post type chiefs */
function create_post_type() {
	$supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => 'Chiefs',
        'singular_name' => 'Chiefs',
        'menu_name' => 'Chiefs',
        'name_admin_bar' => 'Chiefs',
        'add_new' => 'Toevoegen',
        'add_new_item' => 'Voeg chief toe',
        'new_item' => 'Chief',
        'edit_item' => 'Bewerk chief',
        'view_item' => 'Bekijk chief',
        'all_items' => 'Alle chiefs',
        'search_items' => 'Zoek chiefs',
        'not_found' => 'Geen chiefs gevonden',
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'chiefs'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-tag',
        'hierarchical' => false,
		'taxonomies'  => array( 'category' ),
    );
    register_post_type('chief', $args);
}
add_action('init', 'create_post_type');

/* Create post type solutions */
function create_post_type_2() {
	$supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => 'Oplossingen',
        'singular_name' => 'Oplossingen',
        'menu_name' => 'Oplossingen',
        'name_admin_bar' => 'Oplossingen',
        'add_new' => 'Toevoegen',
        'add_new_item' => 'Voeg oplossing toe',
        'new_item' => 'Oplossing',
        'edit_item' => 'Bewerk oplossing',
        'view_item' => 'Bekijk oplossing',
        'all_items' => 'Alle oplossingen',
        'search_items' => 'Zoek oplossingen',
        'not_found' => 'Geen oplossingen gevonden',
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'solutions'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-tag',
        'hierarchical' => false,
		'taxonomies'  => array( 'category' ),
    );
    register_post_type('solution', $args);
}
add_action('init', 'create_post_type_2');

?>