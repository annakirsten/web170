<aside class="procedures-services">

<?php 

if($post->post_parent) { //current page has parent

	echo '<h2>'.get_the_title($post->post_parent).'</h2>';

	echo '<ul>';
	wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,));
	echo '</ul>';
	
}else{ //current page has no parent

	echo '<ul>';
	wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));
	echo '</ul>';

}

if(!(is_page())){

	echo '<h2><a href="blog">Blog</a></h2>';
	echo '<ul>';
	wp_list_categories(array('title_li' => '',));
	echo '</ul>';

}

?>

<!--<h3><a href="#">About Skin Surgery Center</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet risus eget tortor bibendum aliquam eget in mi. Phasellus ultrices rutrum nisl in vestibulum. </p>
<div class="learn-more"><h4><a href="#">Learn More<img src="<?php //bloginfo('template_directory'); ?>/images/arrow-r-black.png" alt="arrow"></a></h4></div>

<h3><a href="contact.php">Office Locations</a></h3>
<a href="contact.php"><img src="<?php //bloginfo('template_directory'); ?>/images/map-thumb.png" alt="map"></a>

<h3><a href="forms_notices.php">Patient Forms</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet risus eget tortor bibendum aliquam eget in mi. Phasellus ultrices rutrum nisl in vestibulum. </p>
<div class="learn-more"><h4><a href="forms_notices.php">Learn More<img src="<?php //bloginfo('template_directory'); ?>/images/arrow-r-black.png" alt="arrow"></a></h4></div>

<h3><a href="#">Skin Cancer Education</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet risus eget tortor bibendum aliquam eget in mi. Phasellus ultrices rutrum nisl in vestibulum. </p>
<div class="learn-more"><h4><a href="#">Learn More<img src="<?php //bloginfo('template_directory'); ?>/images/arrow-r-black.png" alt="arrow"></a></h4></div>
-->
</aside>