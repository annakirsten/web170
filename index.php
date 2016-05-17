<?php get_header(); ?>

<div id="wrapper">

<main class="inner">

<div id="content">

<?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>

<article id="<?php the_ID(); ?>" class="blog-excerpt">

<h2><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h2>

<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?></small>

<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>

<?php the_excerpt(''); //show the excerpt ?>

</article>

<?php endwhile; endif; //end the loop ?>

<p>index.php</p>

</div> <!--end content-->

</main>

<?php get_sidebar(); ?>

</div>  <!--end wrapper-->

<?php get_footer(); ?>
