<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


function register_rocket_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_rocket_menus' );


function remove_actions_woo()
{
	remove_action( 'homepage', 'storefront_product_categories', 20 );
	remove_action( 'homepage', 'storefront_recent_products', 30 );
	remove_action( 'homepage', 'storefront_featured_products', 40 );
	remove_action( 'homepage', 'storefront_popular_products', 50 );
	remove_action( 'homepage', 'storefront_on_sale_products', 60 );
	remove_action( 'homepage', 'storefront_best_selling_products', 70 );
	remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	remove_action( 'storefront_header', 'storefront_product_search', 40 );

	add_action( 'storefront_header', 'storefront_product_search', 70 );
}

add_action( 'init', 'remove_actions_woo' );


add_theme_support( 'post-thumbnails' ); 

function add_theme_css_and_scripts() {

	$parent_style = "parent-style";

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/rocket-styles.css', array($parent_style), '1.1', 'all');
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/all.js', array ( 'jquery' ), 1.1, true);
}




add_action( 'wp_enqueue_scripts', 'add_theme_css_and_scripts' );


if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Site branding wrapper and display
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		echo '
		<div class="site-branding">
			<a href="/rocket_gdl/"><img src="'.get_stylesheet_directory_uri().'/assets/images/logo-header-rocket-gdl.svg" alt="Rocket GDL logo"></a>
		</div>';
	}
}


if ( ! function_exists( 'storefront_page_header' ) ) {
	/**
	 * Display the page header
	 *
	 * @since 1.0.0
	 */
	function storefront_page_header() {
		if ( is_front_page() && is_page_template( 'template-fullwidth.php' ) ) {
			return;
		}

		?>
		<header class="entry-header">
			<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<?php
	}
}




function banner_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Banners', 'Post Type General Name' ),
        'singular_name'       => _x( 'Banner', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Banners' ),
        'parent_item_colon'   => __( 'Banner Padre' ),
        'all_items'           => __( 'Todos los Banners' ),
        'view_item'           => __( 'Ver Banner' ),
        'add_new_item'        => __( 'Agregar Banner' ),
        'add_new'             => __( 'Agregar Nuevo Banner' ),
        'edit_item'           => __( 'Editar Banner' ),
        'update_item'         => __( 'Actualizar Banner' ),
        'search_items'        => __( 'Buscar Banner' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
    $args = array(
        'label'               => __( 'Banners' ),
        'description'         => __( 'Banners Home Rocket GDL' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'page',
    );
     
    register_post_type( 'banner', $args );
}
add_action( 'init', 'banner_custom_post_type' );


function proyecto_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Proyectos', 'Post Type General Name' ),
        'singular_name'       => _x( 'Proyecto', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Proyectos' ),
        'parent_item_colon'   => __( 'Proyecto Padre' ),
        'all_items'           => __( 'Todos los proyectos' ),
        'view_item'           => __( 'Ver proyecto' ),
        'add_new_item'        => __( 'Agregar proyecto' ),
        'add_new'             => __( 'Agregar Nuevo Proyecto' ),
        'edit_item'           => __( 'Editar proyecto' ),
        'update_item'         => __( 'Actualizar proyecto' ),
        'search_items'        => __( 'Buscar proyecto' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
    $args = array(
        'label'               => __( 'Proyectos' ),
        'description'         => __( 'Proyectos Rocket GDL' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'query_var'			  => true,
        'publicly_queryable'  => true,
    );
     
    register_post_type( 'proyecto', $args );
}
add_action( 'init', 'proyecto_custom_post_type' );




