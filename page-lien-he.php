<?php get_header(); ?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><span>Liên Hệ</span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="c-contact">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h1 class="c-title__01">Liên Hệ Với Chúng Tôi</h1>
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

  <div class="c-contact__maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7839.051426186004!2d106.724279!3d10.770989!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525f607ffc9c5%3A0x397b3d9e65ee1bbe!2sChung%20c%C6%B0%20Sarimi!5e0!3m2!1svi!2sus!4v1742401594418!5m2!1svi!2sus" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</main>

<?php get_footer(); ?>