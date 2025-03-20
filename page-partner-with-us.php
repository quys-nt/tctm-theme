<?php get_header(); ?>
<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>/en/">Home</a></li>
          <li><span>Partner</span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="c-about">
    <div class="l-container">
      <div class="c-about__inner">
        <div class="c-about__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-dealer-zone-01.png" alt="Partner with us">
        </div>
        <div class="c-about__right">
          <h1 class="c-title__01">Partner with us</h1>
          <p class="c-desc__01 c-about__desc">
            Join Thành Công Trading & Marketing in conquering the high-end home appliance market full of potential! We are not just a distributor but also a companion, supporting partners in building and growing their businesses.
            Enjoy exclusive policies and have the opportunity to access trending products.
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
        <h2 class="c-title__01">Contact Us</h2>
        <p class="c-desc__01 c-text__white01">
          Do you want to collaborate with us?<br>
          Just send us your questions, and we will get back to you!
        </p>
      </div>
      <div class="c-contact__inner">
        <div class="c-contact__item">
          <h3 class="c-title__02 c-contact__title02">THANH CONG TRADING & MARKETING COMPANY LIMITED</h3>
          <div class="c-text__white01">
            <p>
              Address: No. 00.08 Tower B2, Complex Apartment Lot M2 (Sarimi), No. 72 Nguyen Co Thach, An Loi Dong Ward, Thu Duc City, HCMC
              <br><br>
              Hotline: 19001145
              <br><br>
              Working hours: Monday - Saturday<br>
              Closed on Sundays and holidays
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