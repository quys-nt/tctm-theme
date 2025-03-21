<?php get_header(); ?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><?php sb_get_sub_cat(); ?></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="c-article__detail">
    <div class="l-container">
      <div class="c-article__inner01">
        <div class="p-archive__cats--intro c-text__white01"><span class="p-archive__cats--date"><?php the_date(); ?></span> <span class="p-archive__cats--icon01"></span> <span class="p-archive__cats--cat"><?php sb_get_sub_cat(); ?></span></div>
        <h1 class="c-title__01 c-article__title01"><?php the_title(); ?></h1>
      </div>
      <div class="c-article__thumbnail">
        <?php
        $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
        <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
      </div>
      <div class="c-article__inner01">
        <article class="c-article__contents">
          <?php the_content(); ?>
        </article>
      </div>
    </div>
  </section>
  <?php
  $categories = get_the_category($post->ID);
  if ($categories) {
    $category_ids = array();
    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args = array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'showposts' => 3,
      'caller_get_posts' => 1
    );
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
  ?>
      <section class="c-article__blogs">
        <div class="l-container">
          <div class="c-text--align-center01">
            <h2 class="c-title__01">Bài Viết Tương Tự</h2>
          </div>
          <div class="c-article__blogs--box01">
            <?php
            while ($my_query->have_posts()) {
              $my_query->the_post();
              get_template_part('template-parts/post-03', get_post_format());
            }
            ?>
          </div>
        </div>
      </section>
  <?php
    }
  }
  ?>

  <section class="c-about">
    <div class="l-container">
      <div class="c-about__inner">
        <div class="c-about__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-dealer-zone-01.png" alt="Trở thành đại lý của chúng tôi">
        </div>
        <div class="c-about__right">
          <h1 class="c-title__01">Trở thành đại lý của chúng tôi</h1>
          <p class="c-desc__01 c-about__desc">
            Cùng Thành Công Trading & Marketing chinh phục thị trường thiết bị gia dụng cao cấp đầy tiềm năng! Chúng
            tôi không chỉ là nhà phân phối, mà còn là đối tác đồng hành, hỗ trợ bạn xây dựng và phát triển kinh doanh.
            Tận hưởng chính sách ưu đãi dành riêng cho đại lý và cơ hội tiếp cận những sản phẩm dẫn đầu xu hướng.
          </p>
          <div class="c-btn__group01">
            <a href="mailto:info@tctm.com.vn" class="c-btn__01">Email: info@tctm.com.vn</a>
            <a href="tel:19001145" class="c-btn__01">Hotline: 19001145</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>