<?php
$lang_data = get_current_language();
$lang = $lang_data['short'];
$lang_full = $lang_data['full'];

// Lấy slug và URL cho hreflang
$current_path = trim($_SERVER['REQUEST_URI'], '/');
$is_localhost = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false);
$prefix = $is_localhost ? 'capital-local/' : '';
$path = str_replace($prefix, '', $current_path);
$slug = ($lang == 'en' ? str_replace('en/', '', $path) : $path);

$urls = get_language_urls($slug);
$en_url = $urls['en'];
$vi_url = $urls['vi'];
?>
<?php
// $lang_data = get_current_language();
// $lang = $lang_data['short'];
// $lang_full = $lang_data['full'];

// $base_url = home_url();
// $current_path = trim($_SERVER['REQUEST_URI'], '/');
// $slug = ($lang == 'en' ? str_replace('en/', '', $current_path) : $current_path);
// $en_url = $base_url . '/en/' . $slug;
// $vi_url = $base_url . '/' . $slug;
?>

<footer class="c-footer">
  <div class="c-footer__container">
    <div class="c-footer__group01">
      <div class="c-footer__item01">
        <a href="<?php echo get_template_directory_uri(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-capital.svg" alt="logo capital">
        </a>
        <?php if ($lang == 'en') { ?>
          <p class="c-footer__text01">
            CÔNG TY TNHH THƯƠNG MẠI & TIẾP THỊ THÀNH CÔNG<br>
            <br>
            Address: No. 00.08 Tower B2, Complex Apartment Lot M2 (Sarimi), No. 72 Nguyen Co Thach, An Loi Dong Ward,
            Thu Duc City, HCMC<br>
            <br>
            Hotline: <a href="tel:19001145" class="c-text__yellow01">19001145</a><br>
            <br>
            <span class="c-text__yellow01">
              Working hours: Monday - Saturday<br>
              Sunday and holidays closed
            </span>
          </p>
        <?php } else { ?>
          <p class="c-footer__text01">
            CÔNG TY TNHH THƯƠNG MẠI & TIẾP THỊ THÀNH CÔNG<br>
            <br>
            Đ/C: Số 00.08 Tháp B2, Khu chung cư phức hợp Lô M2 (Sarimi), số 72 Nguyễn Cơ Thạch, P. An Lợi Đông,
            TP. Thủ Đức, TP. HCM<br>
            <br>
            Hotline: <a href="tel:19001145" class="c-text__yellow01">19001145</a><br>
            <br>
            <span class="c-text__yellow01">
              Thời gian làm việc: Thứ hai - Thứ bảy<br>
              Chủ nhật và các ngày lễ nghỉ
            </span>
          </p>
        <?php } ?>
      </div>
      <div class="c-footer__item c-footer__menu">
        <?php if ($lang == 'en') { ?>
          <ul>
            <li><a href="/en/#">Warranty policy</a></li>
            <li><a href="/en/#">User manual dụng</a></li>
            <li><a href="/en/#">List of warranty centers</a></li>
            <li><a href="/en/#">Product installation instructions</a></li>
          </ul>
        <?php } else { ?>
        <ul>
          <li><a href="#">Chính sách bảo hành</a></li>
          <li><a href="#">Tài liệu hướng dẫn sử dụng</a></li>
          <li><a href="#">Danh sách trung tâm bảo hành</a></li>
          <li><a href="#">Hướng dẫn lắp đặt sản phẩm</a></li>
        </ul>
        <?php } ?>
      </div>
      <div class="c-footer__item c-footer__menu">
        <?php if ($lang == 'en') { ?>
          <ul>
            <li><a href="<?php echo get_home_url(); ?>/en/product">Products</a></li>
            <li><a href="<?php echo get_home_url(); ?>/en/news">Blog & News</a></li>
            <li><a href="<?php echo get_home_url(); ?>/en/contact">Contact</a></li>
            <li><a href="<?php echo get_home_url(); ?>/en/partner-with-us">Partner with us</a></li>
          </ul>
        <?php } else { ?>
        <ul>
          <li><a href="<?php echo get_home_url(); ?>/san-pham">Sản phẩm</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tin-tuc">Blog & News</a></li>
          <li><a href="<?php echo get_home_url(); ?>/lien-he">Liên hệ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tro-thanh-doi-tac">Trở thành đối tác</a></li>
        </ul>
        <?php } ?>
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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/venders/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>

</html>