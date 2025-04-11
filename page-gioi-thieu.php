<?php get_header(); ?>
<main>
  
<div class="c-mv__brand">
  <div class="c-mv__brand--item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/banner-home-page.jpg" alt="banner home page">
  </div>
</div>

<section class="c-about">
  <div class="l-container">
    <div class="c-about__inner">
      <div class="c-about__left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-showroom-03.jpg" alt="Giới thiệu Công ty">
      </div>
      <div class="c-about__right">
        <h1 class="c-title__01">Giới thiệu Công ty</h1>
        <div class="c-desc__01 c-about__desc">
          TCTM là một công ty tư nhân có trụ sở chính tại Việt Nam. Sứ mệnh của công ty là cung cấp cho người tiêu
          dùng Việt Nam các thiết bị gia dụng hàng đầu nhằm nâng cao mức sống. TCTM là đơn vị phân phối chính thức
          độc quyền tại Việt Nam các sản phẩm mang thương hiệu KDK (Nhật Bản); KadeKa (Nhật Bản) và Bertazzoni
          (Italia).
        </div>
        <div class="c-btn__group01">
          <a href="<?php echo get_home_url(); ?>/lien-he/" class="c-btn__01">Liên Hệ</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-about__vison">
  <div class="l-container">
    <div class="p-about__vison--box">
      <div>
        <h2 class="c-title__01">Tầm nhìn</h2>
        <p class="c-desc__01 c-about__desc">TCTM hướng đến trở thành đối tác chiến lược hàng đầu, mang đến những sản
          phẩm chất lượng cao và giải pháp tối ưu cho người tiêu dùng Việt Nam.</p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-02.png" alt="Tầm nhìn">
      </div>
    </div>
  </div>
</section>

<section class="p-about__misson">
  <div class="l-container">
    <div class="c-text--align-center01">
      <h2 class="c-title__01">Giá trị cốt lõi trình & Sứ mệnh</h2>
    </div>

    <div class="p-about__misson--list">
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-01.png" alt="Tập trung vào Khách hàng">
        </div>
        <h3 class="p-about__misson--sub-title">Tập trung<br>vào Khách hàng</h3>
        <p class="p-about__misson--desc">Cung cấp dịch vụ và hỗ trợ xuất sắc để đáp ứng nhu cầu đa dạng của người tiêu dùng Việt Nam.</p>
      </div>
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-02.png" alt="Chất lượng">
        </div>
        <h3 class="p-about__misson--sub-title">Chất lượng</h3>
        <p class="p-about__misson--desc">Cung cấp các sản phẩm tuân thủ các tiêu chuẩn cao nhất về hiệu suất và độ tin cậy.</p>
      </div>
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-04.png" alt="Chính trực">
        </div>
        <h3 class="p-about__misson--sub-title">Chính trực</h3>
        <p class="p-about__misson--desc">Kinh doanh với sự trung thực và minh bạch và đặt sự hài lòng về trải nghiệm của khách hàng làm trọng tâm.</p>
      </div>
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-03.png" alt="Đối tác">
        </div>
        <h3 class="p-about__misson--sub-title">Đối tác</h3>
        <p class="p-about__misson--desc">Xây dựng mối quan hệ bền chặt và lâu dài với các nhà cung cấp và nhà phân phối dựa trên sự tin tưởng và tôn trọng lẫn nhau.</p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/section-partner'); ?>

<section class="p-about__support">
  <div class="l-container">
    <div class="c-text--align-center01">
      <h2 class="c-title__01">Dịch Vụ Hỗ Trợ Khách Hàng</h2>
      <div class="c-desc__01">
        TCTM cam kết mang đến trải nghiệm dịch vụ chuyên nghiệp và tận tâm:
      </div>
    </div>
    <div class="p-about__support--list">
      <div class="p-about__support--item">
        <div class="p-about__support--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-support-01.png" alt="Tư vấn chuyên sâu">
        </div>
        <h3 class="p-about__support--title">Tư vấn chuyên sâu</h3>
        <p>Hỗ trợ khách hàng lựa chọn sản phẩm phù hợp với nhu cầu.</p>
      </div>
      <div class="p-about__support--item">
        <div class="p-about__support--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-support-02.png" alt="Bảo hành chính hãng">
        </div>
        <h3 class="p-about__support--title">Bảo hành chính hãng</h3>
        <p>Đảm bảo quyền lợi với chính sách bảo hành minh bạch, rõ ràng.</p>
      </div>
      <div class="p-about__support--item">
        <div class="p-about__support--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-support-03.png" alt="Dịch vụ hậu mãi">
        </div>
        <h3 class="p-about__support--title">Dịch vụ hậu mãi</h3>
        <p>Hỗ trợ lắp đặt, bảo trì và sửa chữa nhanh chóng.</p>
      </div>
      <div class="p-about__support--item">
        <div class="p-about__support--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-support-04.png" alt="Chăm sóc khách hàng">
        </div>
        <h3 class="p-about__support--title">Chăm sóc khách hàng</h3>
        <p>Đội ngũ sẵn sàng hỗ trợ qua hotline, email và trực tiếp tại showroom.</p>

      </div>
    </div>
    <p class="p-about__support--text01">Chúng tôi luôn đồng hành để mang đến sự hài lòng và yên tâm cho khách hàng!</p>
  </div>
</section>

</main>
<?php get_footer(); ?>