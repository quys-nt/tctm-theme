<?php get_header(); ?>
<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><span>Giới thiệu Công ty</span></li>
        </ul>
      </nav>
    </div>
  </div>

<section class="c-about">
  <div class="l-container">
    <div class="c-about__inner">
      <div class="c-about__left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-01.png" alt="Giới thiệu Công ty">
      </div>
      <div class="c-about__right">
        <h1 class="c-title__01">Giới thiệu Công ty</h1>
        <div class="c-desc__01 c-about__desc">
          TCTM là một công ty tư nhân có trụ sở chính tại Việt Nam. Sứ mệnh của công ty là cung cấp cho người tiêu
          dùng Việt Nam các thiết bị gia dụng hàng đầu nhằm nâng cao mức sống. TCTM là đơn vị phân phối chính thức
          độc quyền tại Việt Nam các sản phẩm mang thương hiệu KDK (Nhật Bản); KadeKa (Nhật Bản) và Bertazzoni
          (Italia).
          <br>
          <br>
          <strong>TẦM NHÌN</strong>: TCTM hướng đến trở thành đối tác chiến lược hàng đầu, mang đến những sản phẩm
          chất lượng cao và giải pháp tối ưu cho người tiêu dùng Việt Nam.
        </div>
        <p class="c-about__desc">Giá trị cốt lõi trình & Sứ mệnh bày như ví dụ</p>
        <ul class="c-about__desc c-about__desc-02">
          <li><strong>Tập trung vào Khách hàng</strong>: Cung cấp dịch vụ và hỗ trợ xuất sắc để đáp ứng nhu cầu đa
            dạng của người tiêu dùng Việt Nam.</li>
          <li><strong>Chất lượng</strong>: Cung cấp các sản phẩm tuân thủ các tiêu chuẩn cao nhất về hiệu suất và độ
            tin cậy.</li>
          <li><strong>Chính trực</strong>: Kinh doanh với sự trung thực và minh bạch và đặt sự hài lòng về trải
            nghiệm của khách hàng làm trọng tâm.</li>
          <li><strong>Đối tác</strong>: Xây dựng mối quan hệ bền chặt và lâu dài với các nhà cung cấp và nhà phân
            phối dựa trên sự tin tưởng và tôn trọng lẫn nhau.</li>
        </ul>
        <div class="c-btn__group01">
          <a href="/lien-he/" class="c-btn__01">Liên Hệ</a>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-01.png" alt="Hệ Thống">
        </div>
        <h3 class="p-about__misson--sub-title">Hệ Thống</h3>
        <p class="p-about__misson--desc">Xây dựng hệ thống phân phối chuyên nghiệp, hiệu quả và bền vững.</p>
      </div>
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-02.png" alt="Dịch Vụ">
        </div>
        <h3 class="p-about__misson--sub-title">Dịch Vụ</h3>
        <p class="p-about__misson--desc">Đảm bảo dịch vụ hậu mãi tận tâm, nâng cao trải nghiệm khách hàng.</p>
      </div>
      <div class="p-about__misson--item">
        <div class="p-about__misson--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon-about-03.png" alt="Hợp Tác">
        </div>
        <h3 class="p-about__misson--sub-title">Hợp Tác</h3>
        <p class="p-about__misson--desc">Hợp tác chặt chẽ với các đối tác để phát triển thị trường và mở rộng thương
          hiệu.</p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/section-partner'); ?>

<section class="p-about__support">
  <div class="l-container">
    <div class="c-text--align-center01">
      <h2 class="c-title__01">DỊCH VỤ HỖ TRỢ KHÁCH HÀNG</h2>
      <div class="c-desc__01">
        TCTM cam kết mang đến trải nghiệm dịch vụ chuyên nghiệp và tận tâm:
      </div>
    </div>
    <div class="p-about__support--inner">
      <ul>
        <li>
          <strong>Tư vấn chuyên sâu:</strong> Hỗ trợ khách hàng lựa chọn sản phẩm phù hợp với nhu cầu.
        </li>
        <li>
          <strong>Bảo hành chính hãng:</strong> Đảm bảo quyền lợi với chính sách bảo hành minh bạch, rõ ràng.
        </li>
        <li>
          <strong>Dịch vụ hậu mãi:</strong> Hỗ trợ lắp đặt, bảo trì và sửa chữa nhanh chóng.
        </li>
        <li>
          <strong>Chăm sóc khách hàng:</strong> Đội ngũ sẵn sàng hỗ trợ qua hotline, email và trực tiếp tại
          showroom.
        </li>
      </ul>
      <p class="p-about__support--text01">Chúng tôi luôn đồng hành để mang đến sự hài lòng và yên tâm cho khách hàng!</p>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>