<?php get_header(); ?>
<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>/en/">Home</a></li>
          <li><span>Contact</span></li>
        </ul>
      </nav>
    </div>
  </div>

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
            <?php echo do_shortcode('[contact-form-7 id="ab46e61" title="Form liên hệ tiếng Anh"]'); ?>
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