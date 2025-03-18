<div class="c-blogs__item">
  <div class="c-blogs__img">
    <a href="<?php the_permalink() ?>">
      <?php
      $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
      $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
      ?>
      <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
    </a>
  </div>
  <div class="c-blogs__contents">
    <a href="<?php the_permalink() ?>">
      <h3 class="c-title__02 c-blogs__title"><?php the_title(); ?></h3>
    </a>
    <div class="c-blogs__desc"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink() ?>" class="c-blogs__link">Xem Thêm</a>
  </div>
</div>