<footer class="c-footer">
  <div class="c-footer__container">
    <div class="c-footer__group01">
      <div class="c-footer__item01">
        <a href="<?php echo get_template_directory_uri(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-capital.svg" alt="logo capital">
        </a>
        <p class="c-footer__text01">
          <strong>CÔNG TY TNHH THƯƠNG MẠI & TIẾP THỊ THÀNH CÔNG</strong>
        </p>
        <p class="c-footer__text02">
          <b>Địa chỉ:</b> Căn số 00.08 Tháp B2, Khu chung cư phức hợp Lô M2 (Sarimi), số 72 Nguyễn Cơ Thạch, P. An Lợi Đông, TP. Thủ Đức, TP. HCM
        </p>
        <p class="c-footer__text02">
          <b>Hotline:</b> <a href="tel:19001145">19001145</a>
        </p>
        <p class="c-footer__text02">
          <b>Email:</b> <a href="mailto:info@tctm.com.vn">info@tctm.com.vn</a>
        </p>
        <p class="c-footer__text02">
          <b>Thời gian làm việc:</b> <br>
          Thứ hai – Thứ bảy: 08:30 – 17:30<br>
          Chủ nhật và các ngày lễ nghỉ<br>
        </p>
        <ul class="c-footer__social02">
          <li><a href="https://zalo.me/2380433647108267875" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-zalo-02.jpg" alt="icon zalo">
            </a></li>
          <li><a href="https://www.linkedin.com/company/thanh-cong-trading-marketing/about/?viewAsMember=true" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-linkedin-01.jpg" alt="icon linkedin">
            </a></li>
        </ul>
      </div>
      <div class="c-footer__item c-footer__menu">
        <?php if (have_rows('menu_footer_1', 'option')) : ?>
          <ul class="footer-menu-1">
            <?php while (have_rows('menu_footer_1', 'option')) : the_row(); ?>
              <?php
              $name = get_sub_field('name_url');
              $url  = get_sub_field('url');
              ?>
              <li>
                <?php if ($url) : ?>
                  <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
                    <?php echo esc_html($name); ?>
                  </a>
                <?php else : ?>
                  <?php echo esc_html($name); ?>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="c-footer__item c-footer__menu">
        <?php if (have_rows('menu_footer_1', 'option')) : ?>
          <ul class="footer-menu-1">
            <?php while (have_rows('menu_footer_2', 'option')) : the_row(); ?>
              <?php
              $name = get_sub_field('name_url');
              $url  = get_sub_field('url');
              ?>
              <li>
                <?php if ($url) : ?>
                  <a href="<?php echo get_home_url() . '/' .  $url; ?>">
                    <?php echo esc_html($name); ?>
                  </a>
                <?php else : ?>
                  <?php echo esc_html($name); ?>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="c-footer__item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.525718298502!2d106.7242792!3d10.7709886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525f607ffc9c5%3A0x397b3d9e65ee1bbe!2sChung%20c%C6%B0%20Sarimi!5e0!3m2!1svi!2s!4v1741539284699!5m2!1svi!2s" width="348" height="296" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="c-footer__group02">
      ©2022 Company Name. All rights reserved
    </div>
  </div>
</footer>

<ul class="c-footer__social">
  <li>
    <a href="tel:19001145">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-phone-03.png" alt="icon phone">
    </a>
  </li>
  <li>
    <a href="https://zalo.me/2380433647108267875" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-zalo.png" alt="icon zalo">
    </a>
  </li>
</ul>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/venders/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>

</html>