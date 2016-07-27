<a class="article-link" href="<?php esc_url(the_permalink()); ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id())[0]; ?>') center scroll no-repeat; background-size: cover;">
    <div class="desc">
        <h2><?php the_title(); ?></h2>
        <span class="bold time">Posted on <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time></span>
        <?php the_field("country") ?>
        <?php the_excerpt(); ?>
    </div>
</article></a>
