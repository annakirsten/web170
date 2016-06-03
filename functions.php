<?php

/*
Theme Name: WEB170 Spring 2016
Author: Anna Sabo
Author URI: http://www.annaksabo.com
Description: Theme for WEB170 Sp 2016 Site
*/

//register menus
register_nav_menus(array(
	'main-menu' => __( 'Main' ),
));

//register sidebars
register_sidebar(2, array(
	'name' => __( 'dynamic_sidebar' ),
	'id' => 'sidebar-1',
	'before_widget' => '<div id="%1$s class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>',
));

//make thumbnails
add_theme_support('post-thumbnails');

?>