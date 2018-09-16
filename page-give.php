<?php

get_header(); ?>
<div class="hero-area">
    <h1>Give Back</h1>
</div>

    <?php
    $query = new WP_Query( array( 'category_name' => 'give' ) );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
        <article <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        </article>
       <?php endwhile;
    else :
        echo 'No posts';
    endif;


get_footer();
