<?php

// Adds close button to nav menu on mobile
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary_navigation' ){
        $items .= '<i class="nav__checkbox icon icon--close" type="checkbox"></i>';
    }
    return $items;
}
