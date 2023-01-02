<?php register_nav_menus(array('pkey' => 'menu' ) );?>
<?php add_theme_support( 'post-thumbnails' );?>



<?php add_theme_support('custom-logo'
);?>

<?php add_post_type_support( 'page', 'excerpt' ) ?>

<?php add_post_type_support( 'movies', 'excerpt' ) ?>



<?php 
function create_posttype() {
  
    register_post_type( 'movies',
    
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
  
        ) 
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




?>

<?php 

/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/

function wporg_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'course', [ 'movies' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );

?>


