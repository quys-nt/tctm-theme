<a href="<?php the_permalink() ?>" class="p-archive__cats--item">
  <div class="p-archive__cats--img">
    <?php
    $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
  </div>
  <div>
    <div class="p-archive__cats--intro"><span class="p-archive__cats--date"><?php the_date();?></span> <span class="p-archive__cats--icon01"></span> <span class="p-archive__cats--cat"><?php sb_get_sub_cat(); ?></span></div>
    <h3 class="p-archive__cats--title02"><?php the_title(); ?></h3>
    <p class="p-archive__cats--desc02"><?php the_excerpt(); ?></p>
  </div>
</a>