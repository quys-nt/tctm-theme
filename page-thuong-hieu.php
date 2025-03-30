<?php get_header(); ?>

<main>

  <div class="c-mv">
    <div class="c-mv__slider js-slider-mv">
      <?php if (have_rows('slider_mv_th', '')) : ?>
        <?php while (have_rows('slider_mv_th', '')) : the_row(); ?>
          <?php
          $imagePC = get_sub_field('slider_img_th_pc');
          $imageSP = get_sub_field('slider_img_th_sp');
          $sliderlink = get_sub_field('link_th_img');
          ?>
          <a href="<?php echo $sliderlink ? esc_url($sliderlink) : "#"; ?>" target="_blank">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo esc_url($imagePC['url']); ?>">
              <img src="<?php echo $imageSP ? esc_url($imageSP['url']) : esc_url($imagePC['url']); ?>" alt="<?php echo esc_url($imagePC['alt']); ?>">
            </picture>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>