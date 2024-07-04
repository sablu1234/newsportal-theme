<?php
// function newsportal_theme(){
//     add_theme_support('post-thumbnails');
//     add_theme_support('post-formats',array('aside','gallery','sqote','image','video'));
// }
// add_action('after_setup_theme','newsportal_theme')


if(!function_exists('ourtheme')){
    function ourtheme(){
        add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme','ourtheme');


?>