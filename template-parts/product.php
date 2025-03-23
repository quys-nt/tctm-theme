<div class="p-product__archive--item">
  <div class="p-product__archive--img">
    <?php
    $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
  </div>
  <div class="p-product__archive--box03">
    <h3 class="p-product__archive--title02"><?php the_title(); ?></h3>
    <?php
    $external_link = get_field('link_product_external');
    $link = $external_link ? $external_link : get_the_permalink();
    ?>
    <a href="<?php echo esc_url($link); ?>" class="p-product__archive--link">Xem Chi Tiết</a>
  </div>
</div>