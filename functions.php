<?php
// if(!function_exists('mytheme')){
//     function mytheme(){
//         add_theme_support('post-thumbnails');
//     }
//     function ourtheme($name){
//         return $name= str_replace(__('Set featured image'),__('hasan featured image'), $name);
//     }
//     add_filter('admin_post_thumbnail_html','ourtheme');
// }
// add_action('after_setup_theme','mytheme');




if(!function_exists('mystdinfo')){
    function wporg_custom_post_type() {
        register_post_type('wporg_product',
            array(
                'labels'      => array(
                    'name'          => __('hasan posts', 'textdomain'),
                    'singular_name' => __('Product', 'textdomain'),
                ),
                    'public'      => true,
                    'has_archive' => true,
            )
        );
    }
    add_action('init', 'wporg_custom_post_type');
}
?>