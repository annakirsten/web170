<?php get_header(); ?>

<div id="content">

<!-- Begin Flex Slider -->
<div class="flexslider">
<ul class="slides">
    <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/office.jpg" alt="office">
        <p class="slider-caption">Image One: In a metus neque. Donec sed est metus, in cursus lectus. </p>
        <a href="#"><button class="slider-button">Learn More</button></a>
    </li>
	<li>
        <img src="<?php bloginfo('template_directory'); ?>/images/exam.jpg" alt="exam">
        <p class="slider-caption">Image Two: In a metus neque. Donec sed est metus, in cursus lectus. </p>
        <a href="#"><button class="slider-button">Learn More</button></a>
    </li>
    <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/form.jpg" alt="form">
        <p class="slider-caption">Image Three: In a metus neque. Donec sed est metus, in cursus lectus. </p>
        <a href="#"><button class="slider-button">Learn More</button></a>
    </li>
    <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/microscope.jpg" alt="microscope">
        <p class="slider-caption">Image Four: In a metus neque. Donec sed est metus, in cursus lectus. </p>
        <a href="#"><button class="slider-button">Learn More</button></a>
    </li>
</ul>
</div>
<!-- End Flex Slider -->

<div id="wrapper">
<main>

<div class="widget container left">

<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop one, pulls SEO text ?>
<h3><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title ?></a></h3>
<?php the_content(''); ?>
<?php endwhile; endif; //end the loop ?>

</div>  <!--end widget container left-->

<div class="widget container center">

<h3>Latest Postings</h3>

<?php rewind_posts(); //stop loop one ?>
<?php query_posts('showposts=5'); //give loop two directions ?>
<?php while (have_posts()) : the_post(); //start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; //end loop two ?>

</div>  <!--end widget container center-->

<div class="widget container right">

<h3>Loop 3 Here</h3>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

</div>  <!--end widget container right-->

</main>

<p>front-page.php</p>

</div>  <!--end wrapper-->

</div> <!--end content-->

<?php get_footer(); ?>
