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
		echo '<span class="breadcrumbs"><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> / ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " / ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
		echo '</span>';
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

/* Create post type solutions */
function create_post_type_3() {
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
        'name' => 'Cases',
        'singular_name' => 'Cases',
        'menu_name' => 'Cases',
        'name_admin_bar' => 'Cases',
        'add_new' => 'Toevoegen',
        'add_new_item' => 'Voeg cases toe',
        'new_item' => 'Case',
        'edit_item' => 'Bewerk case',
        'view_item' => 'Bekijk case',
        'all_items' => 'Alle cases',
        'search_items' => 'Zoek cases',
        'not_found' => 'Geen cases gevonden',
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'cases'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-tag',
        'hierarchical' => false,
		'taxonomies'  => array( 'category' ),
    );
    register_post_type('case', $args);
}
add_action('init', 'create_post_type_3');


/* Optionpage*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Algemene instellingen',
		'menu_title'	=> 'Algemeen',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header instellingen',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer instellingen',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));	
}

function filter_projects() {
	$catSlug = $_POST['category'];
  $typeSlug = $_POST['type'];
  $idSlug = $_POST['content'];

  $ajaxposts = new WP_Query([
    'post_type' => $typeSlug,
    'posts_per_page' => 8,
    'category_name' => $catSlug,
    'orderby' => 'menu_order', 
    'order' => 'desc'
  ]);

  // $ajaxposts = new WP_Query([
  //   'post_type' => $typeSlug,
  //   'posts_per_page' => 8,
  //   'category_name' => $catSlug,
  //   'orderby' => 'menu_order', 
  //   'order' => 'desc',
  //   'meta_query' =>
  //     array(
  //       'meta_key' => 'field_617fc258c002d',
  //       'meta_value' => $idSlug,
  //       'compare' => 'LIKE'
  //     ),
  // ]);

	$response = '';

	if($ajaxposts->have_posts()) {
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		global $post;
		$title = $post->post_title;
		$content = $post->post_content;
		// $link = $post->the_permalink();

		$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		echo '<div class="position-relative post-container mt-5">';
		echo '<div class="post me-4 clickable">';
		echo  	'<img class="post-image" src="'.$backgroundImg[0] .'?>" style="width: 100%; height: 200px; object-fit: cover;"></img>';
		echo 	'<p class="post-title mt-4">'. $title .'</p>';
		echo 	'<p class="post-exerpt">'. $content .'</p>';
		echo 	'<a class="d-none" href="'. get_permalink() .'"></a>';
		echo '</div>';
		echo '</div>';
	  endwhile;
	} else {
	  echo 'Geen '. $typeSlug .' gevonden';
	}
	exit;
  }
  add_action('wp_ajax_filter_projects', 'filter_projects');
  add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');