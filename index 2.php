<?php

get_header(); ?>
<div class="hero-area">
    <h1><?php bloginfo('description') ?></h1>
</div>
<h2 class="featured-pets">Featured Pets</h2>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    

    <article <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </article>


    <?php endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>