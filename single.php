<?php get_header(); ?>

    <div class="grey-wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="the-post">
            <div class="top-margin"></div>
            <div class="post-header" style="background: linear-gradient(rgba(88,88,88, 0.4),rgba(88,88,88, 0.4)), url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id())[0]; ?>') center scroll no-repeat; background-size: cover;">
                <h1><?php the_title(); ?></h1>
                <span class="bold"><?php _e("Posted on ")?><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time> <?php _e(" by "); the_author() ?></span>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
        </article>
    </div>

<?php get_footer(); ?>