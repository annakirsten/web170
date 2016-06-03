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

//custom title tag
function get_my_title_tag () {
	global $post; //access post variable
	
	if (is_front_page()){ //if front page
		bloginfo('description'); //get site's tagline
	} elseif ( is_page () || is_single () ) {
		the_title(); //title of page or posting
	} else { //everything else
		bloginfo('description'); //get site's tagline
	}
	
	if ($post->post_parent) { //if destination page
		echo ' | '; //separator
		echo get_the_title($post->post_parent); //display parent page
	}
	
	echo ' | '; //separator
	bloginfo('name'); //site name
	echo ' | '; //separator
	echo 'Seattle, WA'; //location
}

//enable page excerpts
add_post_type_support('page','excerpt')

?>
