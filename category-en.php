<?php get_header(); ?>

<main>

  <div class="c-mv">
    <div class="c-mv__slider js-slider-mv">
      <div>
        <a href="https://capitalmktgcomvn702.mbws.vn/" target="_blank">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-01.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-01-sp.png" alt="img mv 01">
          </picture>
        </a>
      </div>
      <div>
        <a href="https://vn.bertazzoni.com/" target="_blank">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-02.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-02-sp.png" alt="img mv 02">
          </picture>
        </a>
      </div>
      <div>
        <a href="https://capitalmktgcomvn990.mbws.vn/" target="_blank">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-03.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-mv-03-sp.png" alt="img mv 03">
          </picture>
        </a>
      </div>
    </div>
  </div>

  <section class="c-about">
    <div class="l-container">
      <div class="c-about__inner">
        <div class="c-about__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-01.png" alt="About Us">
        </div>
        <div class="c-about__right">
          <h1 class="c-title__01">About Us</h1>
          <p class="c-desc__01 c-about__desc">
            <strong>Thanh Cong Trading & Marketing Co., Ltd. (TCTM)</strong> is the official distributor of
            <strong>KDK, KADEKA, BERTAZZONI, and EUROCAVE</strong> products in Vietnam, starting from <strong>January
              1, 2025</strong>.
            <br><br>
            TCTM aims to become a <strong>leading strategic partner</strong>, bringing <strong>high-quality
              products</strong> and <strong>optimal solutions</strong> to Vietnamese consumers.
          </p>
          <div class="c-btn__group01">
            <a href="/en/about" class="c-btn__01 is-icon">Details</a>
            <a href="#contact" class="c-btn__01">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="c-partner">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Distribution Brands</h2>
        <p class="c-desc__01">
          <strong>THANH CONG Trading & Marketing Co., Ltd.</strong> is the exclusive authorized distributor of premium
          appliance brands, including <strong>KDK</strong> – a high-end fan brand from Japan, <strong>KADEKA</strong>
          – a pioneer in the wine chilling and preservation industry in Singapore, <strong>BERTAZZONI</strong> – a
          kitchen appliance brand with over <strong>140 years of history from Italy</strong>, and
          <strong>EUROCAVE</strong> – a premium wine storage brand from France.
        </p>
      </div>
      <div class="c-partner__inner">
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-kadeka.png" alt="logo kadeka">
          <h3 class="c-partner__desc-en">A pioneer in the wine chilling and preservation industry in Singapore.</h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-kdk.png" alt="logo kdk">
          <h3 class="c-partner__desc-en">A high-end electric fan brand with over 115 years of history from Japan.</h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-bertazzoni.png" alt="logo bertazzoni">
          <h3 class="c-partner__desc-en">A premium kitchen appliance brand with over 140 years of history from Italy.
          </h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-eurocave.png" alt="logo eurocave">
          <h3 class="c-partner__desc-en">A premium wine storage brand from France.</h3>
        </div>
      </div>
    </div>
  </section>

  <?php
  $showpost = false;
  if ($showpost) {
  ?>
    <section class="c-blogs">
      <div class="l-container">
        <div class="c-text--align-center01">
          <h2 class="c-title__01">Tin tức</h2>
        </div>
        <div class="c-blogs__inner">
          <?php
          $args = array(
            'post_type' => 'post',
            'category_name' => 'news',
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
  <?php
  }
  ?>

  <section class="c-contact" id="contact">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Contact Us</h2>
        <p class="c-desc__01 c-text__white01">
          Do you want to collaborate with us?<br>
          Just send us your questions, and we will get back to you!
        </p>
      </div>
      <div class="c-contact__inner">
        <div class="c-contact__item">
          <h3 class="c-title__02 c-contact__title02">Contact us directly</h3>
          <p class="c-text__white01">
            You can reach us via:
          </p>
          <div class="c-contact__box01">
            <div class="c-contact__item02">
              <p class="c-contact__title03">Email:</p>
              <p><a href="mailto:info@tctm.com.vn" class="c-contact__link01">info@tctm.com.vn</a></p>
            </div>
            <div class="c-contact__item02">
              <p class="c-contact__title03">Phone:</p>
              <p><a href="tel:19001145" class="c-contact__link01">Hotline: 19001145</a></p>
            </div>
          </div>
        </div>
        <div class="c-contact__item">
          <div class="c-contact__form01">
            <?php echo do_shortcode('[contact-form-7 id="3102f76" title="Form liên hệ EN"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>