<?php get_header(); ?>

<main>

  <div class="c-mv__brand">
    <?php if (have_rows('slider_mv_th', '')) : ?>
      <?php while (have_rows('slider_mv_th', '')) : the_row(); ?>
        <?php
        $imagePC = get_sub_field('slider_img_th_pc');
        $imageSP = get_sub_field('slider_img_th_sp');
        $sliderlink = get_sub_field('link_th_img');
        ?>
        <div class="c-mv__brand--item">
          <a href="<?php echo $sliderlink ? esc_url($sliderlink) : "#"; ?>" target="_blank">
            <img src="<?php echo esc_url($imagePC['url']); ?>" alt="<?php echo esc_url($imagePC['alt']); ?>">
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); ?>