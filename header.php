<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo wp_get_document_title(); ?></title>
  <meta name="title" content="<?php echo wp_get_document_title(); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- ogp -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php echo home_url(add_query_arg(array(), $wp->request)); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:image" content="<?php sb_get_img_og(); ?>">
  <?php
  if (is_home()) {
    echo '<meta property="og:type" content="website">';
  } else {
    echo '<meta property="og:type" content="article">';
  }
  ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "quynt",
        "item": "https://beauthy.jp/"
      }]
    }
    <?php sub_jdJson(); ?>
  </script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/imgs/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/imgs/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/imgs/favicon/favicon-16x16.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/venders/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/venders/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" media="all">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="c-header js-header">
    <div class="c-header__container">
      <div class="c-header__logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-capital.svg" alt="logo capital">
        </a>
      </div>
      <nav class="c-header__nav js-menu-header">
        <ul>
          <li><a href="<?php echo get_home_url(); ?>/gioi-thieu/">Về Chúng Tôi</a></li>
          <li><a href="<?php echo get_home_url(); ?>/thuong-hieu">Thương Hiệu</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tin-tuc/">Tin tức</a></li>
          <li><a href="https://thanhcong.felixvn.com/cpmTCTM/landing.xhtml" target="_blank">Bảo Hành Điện Tử</a></li>
          <li>
            <a href="#">Chính Sách Bảo Hành</a>
            <ul>
              <li><a href="https://drive.google.com/file/d/1wcZ8qkZvq_BKd43F_m75CRD0SL-ufgMo/view?usp=drive_link" target="_blank">Chính Sách Bảo Hành</a></li>
              <li><a href="https://drive.google.com/file/d/1id_j3csdaarK2aM7RBVmLVfJDNngLmo-/view?usp=sharing" target="_blank">Chính Sách Đổi Hàng</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_home_url(); ?>/san-pham/">Tài liệu Sản phẩm</a></li>
          <li><a href="<?php echo get_home_url(); ?>/lien-he/" class="c-header__btn01">Liên Hệ</a></li>
        </ul>
      </nav>
      <a href="#" class="c-header__btn02 js-btn-show-menu">button</a>
    </div>
  </header>