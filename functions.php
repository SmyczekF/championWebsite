<?php

register_sidebar(array('name'=>'right'));

// Clean up wordpres <head>
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    $manifest = json_decode(file_get_contents('build/assets.json', true));
    $main = $manifest->main;
    wp_enqueue_style('theme-css', get_template_directory_uri() . "/build/" . $main->css,  false, null);
    wp_enqueue_script('theme-js', get_template_directory_uri() . "/build/" . $main->js, ['jquery'], null, true);
}, 100);


/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');
    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'mini')
    ]);
    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    // add_theme_support('customize-selective-refresh-widgets');


}, 20);


add_action('rest_api_init', function () {
	$namespace = 'presspack/v1';
	register_rest_route( $namespace, '/path/(?P<url>.*?)', array(
		'methods'  => 'GET',
		'callback' => 'get_post_for_url',
	));
});

/**
* This fixes the wordpress rest-api so we can just lookup pages by their full
* path (not just their name). This allows us to use React Router.
*
* @return WP_Error|WP_REST_Response
*/
function get_post_for_url($data)
{
    $postId    = url_to_postid($data['url']);
    $postType  = get_post_type($postId);
    $controller = new WP_REST_Posts_Controller($postType);
    $request    = new WP_REST_Request('GET', "/wp/v2/{$postType}s/{$postId}");
    $request->set_url_params(array('id' => $postId));
    return $controller->get_item($request);
}

add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }
    return $classes;
}



// Our custom post type function
function create_reviews_posttype() {

    $labels = array(
        'name'                => __( 'Opinie' ),
        'singular_name'       => __( 'Opinia' ),
        'menu_name'           => __( 'Opinie' ),
        'parent_item_colon'   => __( 'Nadrzędna opinia' ),
        'all_items'           => __( 'Wszystkie opinie' ),
        'view_item'           => __( 'Zobacz opinię' ),
        'add_new_item'        => __( 'Dodaj nową opinię' ),
        'add_new'             => __( 'Dodaj opinię' ),
        'edit_item'           => __( 'Edytuj opinię' ),
        'update_item'         => __( 'Aktualizuj opinię' ),
        'search_items'        => __( 'Szukaj opinii' ),
        'not_found'           => __( 'Nie znaleziono' ),
        'not_found_in_trash'  => __( 'Nie znaleziono w koszu' ),
    );

    register_post_type( 'reviews',
        array(
            'labels'      => $labels,
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'reviews'),
            // Features this CPT supports in Post Editor
            'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_reviews_posttype' );


// Our custom lectors type function
function create_lectors_posttype() {

    $labels = array(
        'name'                => __( 'Lektorzy' ),
        'singular_name'       => __( 'Lektor' ),
        'menu_name'           => __( 'Lektorzy' ),
        'parent_item_colon'   => __( 'Nadrzędny Lektor' ),
        'all_items'           => __( 'Wszyscy Lektorzy' ),
        'view_item'           => __( 'Zobacz Lektora' ),
        'add_new_item'        => __( 'Dodaj nowegpo Lektora' ),
        'add_new'             => __( 'Dodaj Lektora' ),
        'edit_item'           => __( 'Edytuj Lektora' ),
        'update_item'         => __( 'Aktualizuj Lektora' ),
        'search_items'        => __( 'Szukaj Lektora' ),
        'not_found'           => __( 'Nie znaleziono' ),
        'not_found_in_trash'  => __( 'Nie znaleziono w koszu' ),
    );

    register_post_type( 'lectors',
        array(
            'labels'      => $labels,
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'lectors'),
            // Features this CPT supports in Post Editor
            'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_lectors_posttype' );

/* get avatar URL */
function scrapeImage($text) {
    $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
    preg_match($pattern, $text, $link);
    $link = $link[1];
    $link = urldecode($link);
    return $link;

}