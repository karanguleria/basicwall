<?php
add_action('wp_enqueue_scripts', 'basikwall_style');

function basikwall_style() {
    // wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Your code goes below.
 */
function register_my_menus() {
    register_nav_menus(
            array(
                'about-menu' => __('About Menu'),
                'products-menu' => __('Products Menu'),
                'inspiration-menu' => __('Inspiration Menu'),
                'professionals-menu' => __('Professionals Menu'),
                'support-menu' => __('Support Menu')
            )
    );
}

add_action('init', 'register_my_menus');

/*
 * Started Banner - Creating a function to create our CPT For Banner
 */

function custom_post_type_banner() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Banner', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('Banner', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('Banner', 'twentytwenty'),
        'parent_item_colon' => __('Parent Banner', 'twentytwenty'),
        'all_items' => __('All Banner', 'twentytwenty'),
        'view_item' => __('View Banner', 'twentytwenty'),
        'add_new_item' => __('Add New Banner', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit Banner', 'twentytwenty'),
        'update_item' => __('Update Banner', 'twentytwenty'),
        'search_items' => __('Search Banner', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('banner', 'twentytwenty'),
        'description' => __('Banner', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type('banner', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */


add_action('init', 'custom_post_type_banner', 0);

/* Ending Of Banner */

/*
 * Started Events - Creating a function to create our CPT For Events
 */

function custom_post_type_events() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Events', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('Events', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('Events', 'twentytwenty'),
        'parent_item_colon' => __('Parent Events', 'twentytwenty'),
        'all_items' => __('All Events', 'twentytwenty'),
        'view_item' => __('View Events', 'twentytwenty'),
        'add_new_item' => __('Add New Events', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit Events', 'twentytwenty'),
        'update_item' => __('Update Events', 'twentytwenty'),
        'search_items' => __('Search Events', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('events', 'twentytwenty'),
        'description' => __('Events', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type('events', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */


add_action('init', 'custom_post_type_events', 0);

/* Ending Of Events */


/*
 * Started Career - Creating a function to create our CPT For Career
 */

function custom_post_type_career() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Career', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('Career', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('Career', 'twentytwenty'),
        'parent_item_colon' => __('Parent Career', 'twentytwenty'),
        'all_items' => __('All Career', 'twentytwenty'),
        'view_item' => __('View Career', 'twentytwenty'),
        'add_new_item' => __('Add New Career', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit Career', 'twentytwenty'),
        'update_item' => __('Update Career', 'twentytwenty'),
        'search_items' => __('Search Career', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('Career', 'twentytwenty'),
        'description' => __('Career', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type('Career', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */


add_action('init', 'custom_post_type_career', 0);

/* Ending Of Career */

/*
 * Creating a function to create our CPT For FAQ
 */

function custom_post_type_faq() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('FAQ', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('FAQ', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('FAQ', 'twentytwenty'),
        'parent_item_colon' => __('Parent FAQ', 'twentytwenty'),
        'all_items' => __('All FAQ', 'twentytwenty'),
        'view_item' => __('View FAQ', 'twentytwenty'),
        'add_new_item' => __('Add New FAQ', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit FAQ', 'twentytwenty'),
        'update_item' => __('Update FAQ', 'twentytwenty'),
        'search_items' => __('Search FAQ', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('FAQ', 'twentytwenty'),
        'description' => __('FAQ', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type('FAQ', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */


add_action('init', 'custom_post_type_faq', 0);
/* Ending Of FAQ */
/*
 * Creating a function to create our CPT For Photo-Gallery
 */

function custom_post_type_photogallery() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Photo Gallery', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('Photo Gallery', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('Photo Gallery', 'twentytwenty'),
        'parent_item_colon' => __('Parent Photo Gallery', 'twentytwenty'),
        'all_items' => __('All Photo Gallery', 'twentytwenty'),
        'view_item' => __('View Photo Gallery', 'twentytwenty'),
        'add_new_item' => __('Add New Photo Gallery', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit Photo Gallery', 'twentytwenty'),
        'update_item' => __('Update Photo Gallery', 'twentytwenty'),
        'search_items' => __('Search Photo Gallery', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('Photo Gallery', 'twentytwenty'),
        'description' => __('Photo Gallery', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type('Photo Gallery', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */


add_action('init', 'custom_post_type_photogallery', 0);

//changes for the just the live site 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// change the breadcrumb on the product page
add_filter( 'woocommerce_get_breadcrumb', 'custom_breadcrumb', 20, 2 );
function custom_breadcrumb( $crumbs, $breadcrumb ) {

    // only on the single product page
    if ( ! is_product() ) {
        return $crumbs;
    }
    
    // gets the first element of the array "$crumbs"
    $new_crumbs[] = reset( $crumbs );
    // gets the last element of the array "$crumbs"
    $new_crumbs[] = end( $crumbs );

    return $new_crumbs;

}
add_action( 'woocommerce_after_add_to_cart_button', 'misha_after_add_to_cart_btn' );

function misha_after_add_to_cart_btn(){
	echo '<a href="https://basikwall.com/find-a-dealer/" class="btn-find-dealer">Find a Dealer</a>';
}

//add_action('woocommerce_product_after_tabs', 'category_products');

function category_products() {
    ?> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Item Code</th> 
                <th scope="col">Finish</th>
                <th scope="col">W.(FT) (R.O SIZE)</th>
                <th scope="col">H.(FT) (R.O. SIZE)</th>
                <th scope="col">Size D</th>
                <th scope="col">Opening Config(Int. View)</th>
                <th scope="col">MSRP</th>
                <th scope="col">Add to Cart</th>
                <!--<th scope="col">Wishlist</th>-->
            </tr>
        </thead> 
        <tbody>


            <?php
            $args = array(
                'product_cat' => 'glass-wall-system',
                'posts_per_page' => -1,
                'orderby' => 'rand'
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
                ?>
                <tr class="tr_product cat_5 sub_cat_28">
                    <td scope="row"><?php the_title(); ?>
                        <div class="box-hover">
                            <div class="">
                                <?php if (has_post_thumbnail($loop->post->ID))
                                    echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                else
                                    echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
                                ?>
                            </div>
                        </div>
                    </td>
                    <td><?php echo get_field("finish",$loop->post->ID); ?></td>
                    <td><?php echo get_field("width",$loop->post->ID); ?></td>
                    <td><?php echo get_field("height",$loop->post->ID); ?></td>
                    <td><?php echo get_field("frame_depth",$loop->post->ID); ?></td>
                    <td><?php echo get_field("opening_config",$loop->post->ID); ?></td>
                    
                    
                    <td><?php echo $product->get_price_html(); ?></td>
                    

                    <td>
                          <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>

                    </td>
                    <!--<td><a href="<?php // echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="wishlist " data-id="1"><img src="../img/heart-icon.png"><img class="selected-wish" src="../img/heart-icon-red.png"></a></td>-->
                </tr>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
        </tbody>
    </table>
    <!--/.products-->
    <?php
}

function filter_search($query) {
    if ($query->is_search) {
    $query->set('post_type', array('post', 'page', 'events'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');


function add_class_to_third_level_menu_items( $classes, $item, $args, $depth ) {
    // Parent that has children inside 3rd level
    if ( $depth === 1 && in_array( 'menu-item-has-children', $item->classes ) ) {
        $classes[] = 'third-level-parent';
    }

    // Children of that parent (3rd level items)
    if ( $depth === 2 ) {
        $classes[] = 'third-level-child';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_to_third_level_menu_items', 10, 4 );
