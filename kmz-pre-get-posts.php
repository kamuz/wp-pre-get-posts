<?php

/**
 * Plugin Name: Custom Loop with pre_get_posts
 * Description: Demonstrate how to customize the WordPress Standart Loop using pre_get_posts()
 * Plugin URL: https://wpninja.pp.ua
 * Author: Vladimir Kamuz
 * Version: 1.0
 */

/**
 * Custom Loop using pre_get_posts hook
 */
function custom_loop_pre_get_posts($query){

    if(!is_admin() && $query->is_main_query()){
        $query->set('posts_per_page', 1);
        $query->set('order', 'ASC');
        $query->set('cat', '5');
    }

}

// add action
add_action('pre_get_posts', 'custom_loop_pre_get_posts');