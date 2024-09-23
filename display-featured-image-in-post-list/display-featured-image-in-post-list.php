<?php
   /*
   Plugin Name: Display Featured Image In Post List 
   Description: The ‘Display Featured Image In Post List’ is a WordPress plugin which will create a new column called ‘Featured Image’ on your All Posts page that displays Featured Images/Post Thumbnails in your admin panel.
   Version: 2.5
   Author: PlainSurf Solutions
   Author URI: https://plainsurf.com/
   Requires PHP at least: 7.0
   License: GPLv2 or later
   License URI: https://www.gnu.org/licenses/gpl-2.0.html
   */

function dfipl_show_thumb_add_pic_column($columns) {
    $columns['img'] = 'Featured Image';
    return $columns;
}

function dfipl_show_thumb_manage_pic_column($column_name, $post_id) {
    if( $column_name == 'img' ) {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }
    return $column_name;
}

add_filter('manage_posts_columns', 'dfipl_show_thumb_add_pic_column');
add_filter('manage_posts_custom_column', 'dfipl_show_thumb_manage_pic_column', 10, 2);
?>
