<?php

get_header(); ?>
<div class="hero-area">
    <h1><?php bloginfo('description') ?></h1>
</div>
<?php
    $query = new WP_Query( array( 'category_name' => 'urgent' ) );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
        <article <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        </article>
       <?php endwhile;
    endif; ?>
<h2 class="featured-pets">Featured Pets</h2>
<?php
    $query = new WP_Query( array( 'category_name' => 'featured' ) );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
        <article <?php post_class(); ?>>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        </article>
       <?php endwhile;
    else :
        echo 'No posts';
    endif; ?>

    <?php
    $query = new WP_Query( array( 'category_name' => 'about' ) );
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

?>