<?php get_header(); ?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><span>Trở Thành Đối Tác</span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="c-about">
    <div class="l-container">
      <div class="c-about__inner">
        <div class="c-about__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-dealer-zone-01.jpg" alt="Trở thành đại lý của chúng tôi">
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

  <section class="c-contact">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Liên Hệ Với Chúng Tôi</h2>
        <p class="c-desc__01 c-text__white01">
          Vui lòng để lại thông tin bên dưới, chúng tôi sẽ liên hệ với bạn
        </p>
      </div>
      <div class="c-contact__inner">
        <div class="c-contact__item">
          <div class="c-contact__form01">
            <?php echo do_shortcode('[contact-form-7 id="b77c7b5" title="Form liên hệ VN"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>