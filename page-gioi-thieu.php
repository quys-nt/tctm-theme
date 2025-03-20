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
          <p class="c-desc__01 c-about__desc">
            TCTM là một công ty tư nhân có trụ sở chính tại Việt Nam. Sứ mệnh của công ty là cung cấp cho người tiêu
            dùng Việt Nam các thiết bị gia dụng hàng đầu nhằm nâng cao mức sống. TCTM là đơn vị phân phối chính thức
            độc quyền tại Việt Nam các sản phẩm mang thương hiệu KDK (Nhật Bản); KadeKa (Nhật Bản) và Bertazzoni
            (Italia).
          </p>
          <p class="c-about__desc">Giá trị cốt lõi của công ty bao gồm:</p>
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

  <section class="p-about__misson">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Sứ Mệnh</h2>
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

  <section class="p-about__review">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Nhận Xét Của Khách Hàng</h2>
      </div>
      <div class="p-about__review--slider js-slider-review">
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-02.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-03.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
        <div>
          <div class="p-about__review--box01">
            <div class="p-about__review--box02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-about-review-01.png" alt="reviewer">
              <div>
                <p class="p-about__review--text01">Viezh Robert</p>
                <p class="p-about__review--text02">Warsaw, Poland</p>
              </div>
            </div>
            <p class="p-about__review--text03">
              “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there
              have been no problems. LaslesVPN always the best”.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="c-partner">
    <div class="l-container">
      <div class="c-text--align-center01">
        <h2 class="c-title__01">Các Thương Hiệu Đang Phân Phối</h2>
        <p class="c-desc__01">CÔNG TY TNHH THƯƠNG MẠI & TIẾP THỊ THÀNH CÔNG là Nhà phân phối uỷ quyền chính hãng của
          các Thương hiệu thiết bị cao cấp như KDK - Thương hiệu quạt cao cấp từ Nhật Bản, KAdeKA - Một trong nhưng
          đơn vị tiên phong trong ngành công nghiệp tủ ướp và bảo quản vang tại Singapore, Bertazzoni - Thương hiệu
          thiết bị bếp hơn 140 năm từ Ý, EuroCave - Thương hiệu tủ rượu cao cấp từ Pháp.</p>
      </div>
      <div class="c-partner__inner">
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-kdk.png" alt="logo kdk">
          <h3 class="c-partner__desc">Thương hiệu quạt điện cao cấp hơn 115 năm từ Nhật Bản</h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-kadeka.png" alt="logo kadeka">
          <h3 class="c-partner__desc">Một trong nhưng đơn vị tiên phong trong ngành công nghiệp tủ ướp và bảo quản
            vang tại Singapore</h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-bertazzoni.png" alt="logo bertazzoni">
          <h3 class="c-partner__desc">Thương hiệu thiết bị bếp cao cấp hơn 140 năm từ Ý</h3>
        </div>
        <div class="c-partner__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-eurocave.png" alt="logo eurocave">
          <h3 class="c-partner__desc">Thương hiệu tủ rượu cao cấp từ Pháp</h3>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>