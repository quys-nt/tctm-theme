<?php get_header(); ?>

<main>

  <div class="c-mv">
    <div class="c-mv__slider js-slider-mv">
      <?php if (have_rows('slider_mv', 'option')) : ?>
        <?php while (have_rows('slider_mv', 'option')) : the_row(); ?>
          <?php
          $imagePC = get_sub_field('slider_img_pc');
          $imageSP = get_sub_field('slider_img_sp');
          $sliderlink = get_sub_field('link_img');
          ?>
          <?php if ($sliderlink) :?>
            <a href="<?php echo $sliderlink ? esc_url($sliderlink) : "#"; ?>" target="_blank">
          <?php endif ;?>
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo esc_url($imagePC['url']); ?>">
              <img src="<?php echo $imageSP ? esc_url($imageSP['url']) : esc_url($imagePC['url']); ?>" alt="<?php echo esc_url($imagePC['alt']); ?>">
            </picture>
          <?php if ($sliderlink) :?>
            </a>
          <?php endif ;?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_template_part('template-parts/section-partner'); ?>

  <section class="c-about">
    <div class="l-container">
      <div class="c-about__inner">
        <div class="c-about__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-showroom-03.jpg" alt="Về chúng tôi">
        </div>
        <div class="c-about__right">
          <h1 class="c-title__01">Về chúng tôi</h1>
          <p class="c-desc__01 c-about__desc">
            Công Ty TNHH Thương Mại & Tiếp Thị Thành Công (TCTM) là đơn vị phân phối chính thức các sản phẩm thương
            hiệu KDK, KADEKA và BERTAZZONI, EUROCAVE cung cấp tại thị trường Việt Nam, bắt đầu từ ngày 1/1/2025.
            <br><br>
            TCTM hướng đến trở thành đối tác chiến lược hàng đầu, mang đến những sản phẩm chất lượng cao và giải pháp
            tối ưu cho người tiêu dùng Việt Nam.
          </p>
          <div class="c-btn__group01">
            <a href="<?php echo get_home_url(); ?>/gioi-thieu/" class="c-btn__01 is-icon">Xem Chi Tiết</a>
            <a href="#contact" class="c-btn__01">Liên Hệ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="c-blogs">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Tin tức</h2>
      </div>
      <div class="c-blogs__inner">
        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'tin-tuc',
          'posts_per_page' => 3,
        );
        $blogs = new WP_Query($args);
        if ($blogs->have_posts()) :
          while ($blogs->have_posts()) : $blogs->the_post();
            get_template_part('template-parts/post', get_post_format());
          endwhile;
        endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <section class="c-showroom">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Experience Center</h2>
      </div>
      <div class="c-showroom__inner">
        <div class="c-showroom__item">
          <div class="c-showroom__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-showroom-02.jpg" alt="Experience Center">
          </div>
          <p class="c-showroom__text01">
            <strong>Địa chỉ:</strong> Số 00.08 Tháp B2, Khu chung cư phức hợp Lô M2 (Sarimi), số 72 Nguyễn Cơ Thạch, P. An Lợi Đông, TP. Thủ Đức, TP. HCM
          </p>
          <p class="c-showroom__text01"><strong>Tel:</strong> <a href="tel:19001145">19001145</a></p>
          <p class="c-showroom__text01"><strong>Email:</strong> <a href="mailto:info@tctm.com.vn">info@tctm.com.vn</a>
          </p>
          <div class="c-showroom__text01">
            <strong>Thời gian làm việc:</strong>
            <p>
              8:30 – 17.30: Thứ hai - Thứ bảy.<br>
              Chủ nhật và các ngày lễ nghỉ
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="c-contact02" id="contact">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Liên hệ</h2>
      </div>
      <div class="c-contact__inner02">
        <div class="c-contact__item01">
          <div class="c-contact__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-comment01.png" alt="icon commnet">
          </div>
          <h3 class="c-title__03">Yêu cầu hỗ trợ</h3>
          <p class="c-desc__01">
            Bạn muốn tư vấn để hiểu rõ hơn về sản phẩm.<br> Liên hệ với các chuyên gia của chúng tôi để được hỗ trợ
            cụ thể về sản phẩm và hỗ trợ kỹ thuật.
          </p>
          <div class="c-contact__modal">
            <button popovertarget="modal-contact" class="c-btn__01 c-contact__modal--btn01">Yêu cầu</button>
            <div id="modal-contact" popover class="c-contact__modal--body">
              <h2 class="c-contact__modal--title01">Nhập thông tin yêu cầu</h2>
              <?php echo do_shortcode('[contact-form-7 id="e8f0631" title="Form Liên Hệ Home Page"]'); ?>
              <h3 class="c-contact__modal--title02">Hoặc gọi cho chúng tôi</h3>
              <a href="tel:19001145" class="c-contact__modal--link01">19001145</a>
              <button popovertarget="modal-contact" class="c-contact__modal--btn02">Close</button>
            </div>
          </div>
        </div>
        <div class="c-contact__item01">
          <div class="c-contact__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-phone01.png" alt="icon phone">
          </div>
          <h3 class="c-title__03">Liên hệ chúng tôi</h3>
          <p class="c-desc__01">Hotline 24/7: <a href="tel:1900 1145" class="c-contact__link02">1900 1145</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="c-showroom">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">E-Catalogue</h2>
      </div>
      <div class="p-product__archive--inner03">
        <?php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 4,
          'post_status' => 'publish',
        );
        $product_query = new WP_Query($args);
        if ($product_query->have_posts()) :
          while ($product_query->have_posts()) : $product_query->the_post();
            get_template_part('template-parts/product-02', get_post_format());
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Không có sản phẩm nào được tìm thấy.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>