<?php
if(!function_exists('mystdinfo')){
    function wporg_custom_post_type() {
        register_post_type('wporg_product',
            array(
                'menu_position'         => 3,
                  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ,'headway-seo'),
                    'public'      => true,
                    'has_archive' => true,
                    'labels'=>array(
                        'name'                  => _x( 'All girl fridnds name', 'Post Type General Name' ),
                        'singular_name'         => _x( 'Post Type', 'Post Type Singular Name'),
                        'menu_name'             => __( 'All girl friends name'),
                        'add_new'               => __( 'add girl friend name' ),
                        'not_found'             => __( 'Not found girl fridends name', 'text_domain' ),
                        'featured_image'        => __( 'Set girlfriend image', 'text_domain' ),
                    ),
            )
        );
    }
    add_action('init', 'wporg_custom_post_type');


    
}


?>