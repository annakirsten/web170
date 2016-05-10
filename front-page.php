<?php get_header(); ?>

<div id="wrapper">
<main class="inner procedures-services">

<div id="content">

<?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>

<h2><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h2>

<?php the_content(''); ?>

<?php endwhile; endif; //end the loop ?>

<p>front-page.php</p>

</div> <!--end content-->

</main>

</div>  <!--end wrapper-->

<?php get_footer(); ?>
