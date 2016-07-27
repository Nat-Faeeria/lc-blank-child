<?php get_header(); ?>

    <section class="posts-page">
        <h1><?php _e("Blog and news"); ?></h1>

        <div class="posts-container">
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                else :
                    get_template_part( 'content', 'none' );
                endif;
            ?>
        </div>
    </section>

<?php get_footer(); ?>