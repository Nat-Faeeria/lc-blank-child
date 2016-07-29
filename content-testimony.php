<div class="testimony-person">
    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id())[0]; ?>" />
    <h2><?php the_title(); ?></h2>
</div>
<div class="testimony-text"><?php the_excerpt(); ?></div>