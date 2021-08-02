<?php

function load_stylesheets(){

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
		array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/css/style.css', 
		array(), false, 'all');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', '', 1, true);

	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs(){
	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'), 
		'footer-menu' => __('Footer Menu', 'theme'),
	)
);
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

/**
 * Filter the except length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
			'total' => $total_pages,
			'prev_text' => 'Назад',
			'next_text' => 'Вперед',
        ));
    }
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );