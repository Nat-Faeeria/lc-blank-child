<?php get_header(); ?>

    <section class="posts-page">
        <h1><?php _e("Testimonies"); ?></h1>

        <div class="testimonies-container">
            <?php
            $i=0;
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    if ($i%2==0) :
                        echo "<a class='max-width' href='"; echo the_permalink(); echo "'><article class='testimony-even testimony-container'>";
                    else :
                        echo "<a class='max-width' href='"; echo the_permalink(); echo "'><article class='testimony-odd testimony-container'>";
                    endif;
                    get_template_part( 'content', "testimony" );
                    echo "</article></a>";
                    $i++;
                endwhile;
            else :
                get_template_part( 'content', 'none' );
            endif;
            ?>
        </div>
    </section>

<?php get_footer(); ?>