<?php get_header(); ?>

<div id="wrapper">

<main class="inner">

<div id="content">

<?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>

<h2><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h2>

<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?></small>

<?php the_post_thumbnail('large'); ?>

<?php the_content(''); ?>

<?php endwhile; endif; //end the loop ?>

<p>single.php</p>

</div> <!--end content-->

</main>

<?php get_sidebar(); ?>

</div>  <!--end wrapper-->

<?php get_footer(); ?>
