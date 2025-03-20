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
        <h2 class="c-title__01">Liên Hệ Với Chúng Tôi</h2>
        <p class="c-desc__01 c-text__white01">
          Vui lòng để lại thông tin bên dưới, chúng tôi sẽ liên hệ với bạn
        </p>
      </div>
      <div class="c-contact__inner">
        <div class="c-contact__item">
          <h3 class="c-title__02 c-contact__title02">CÔNG TY TNHH THƯƠNG MẠI & TIẾP THỊ THÀNH CÔNG</h3>
          <div class="c-text__white01">
            <p>
              Đ/C: Số 00.08 Tháp B2, Khu chung cư phức hợp Lô M2 (Sarimi), số 72 Nguyễn Cơ Thạch, P. An Lợi Đông, TP. Thủ Đức, TP. HCM
              <br><br>
              Hotline: 19001145
              <br><br>
              Thời gian làm việc: Thứ hai - Thứ bảy<br>
              Chủ nhật và các ngày lễ nghỉ
            </p>
          </div>
        </div>
        <div class="c-contact__item">
          <div class="c-contact__form01">
            <form action="#" method="post">
              <div class="c-contact__group01">
                <div class="c-contact__box02">
                  <input type="text" name="name" placeholder="Họ và Tên">
                </div>
                <div class="c-contact__box02">
                  <input type="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="c-contact__group01">
                <div class="c-contact__box02">
                  <input type="text" name="phone" placeholder="Số Điện Thoại">
                </div>
                <div class="c-contact__box02">
                  <input type="text" name="title" placeholder="Chủ Đề">
                </div>
              </div>
              <div class="c-contact__box02">
                <textarea name="message" placeholder="Nội Dung"></textarea>
              </div>
              <div class="c-contact__box03">
                <button type="submit" class="c-btn__01">Gửi Tin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>