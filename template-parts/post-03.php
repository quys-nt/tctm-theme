<div class="c-article__blogs--item">
  <a href="<?php the_permalink() ?>" class="c-article__blogs--img">
    <?php
    $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
  </a>
  <a href="<?php the_permalink() ?>">
    <h3 class="c-article__blogs--title01"><?php the_title(); ?></h3>
  </a>
  <div class="c-article__blogs--desc">
    <?php the_excerpt(); ?>
  </div>
</div>