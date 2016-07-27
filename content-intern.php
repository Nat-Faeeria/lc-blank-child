<a class="article-link" href="<?php esc_url(the_permalink()); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id())[0]; ?>') center scroll no-repeat; background-size: cover;">
        <div class="desc">
            <div class="intern-name-container"><h2><?php the_title(); ?></h2><div class="intern-flag flag-icon flag-icon-squared flag-icon-<?php the_field("country") ?>"></div></div>
            <div><span class="bold">Job : </span><span><?php echo the_field('job') ?></span></div>
            <div><span class="bold">Studies : </span><span><?php echo the_field('studies') ?></span></div>
        </div>
    </article>
</a>
