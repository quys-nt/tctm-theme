<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="title" content="<?php echo wp_get_document_title(); ?> | Blogs coffee, coffee làm việc, quán coffee đẹp...">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- ogp -->
  <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
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
  <link rel="manifest" href="/site.webmanifest">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" media="all">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="c-header">
    <div class="c-header__container">
      <div class="c-header__logo">
        <a href="#">
          <?php
          if (has_custom_logo()) {
            echo get_custom_logo();
          } else {
            echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
          }
          ?>
        </a>
      </div>
      <nav class="c-header__nav">
        <ul>
          <li class="active-page"><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/gioi-thieu">Giới Thiệu</a></li>
          <li><a href="<?php echo get_home_url(); ?>/thuong-hieu">Thương  Hiệu</a></li>
          <li><a href="<?php echo get_home_url(); ?>/ho-tro-va-dich-vu">Hổ trợ và Dịch Vụ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tin-tuc">Tin Tức</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tro-thanh-doi-tac">Trở Thành Đối Tác</a></li>
          <li><a href="<?php echo get_home_url(); ?>/mua-hang-online">Mua Hàng Online</a></li>
          <li><a href="#">EN/<span>JP</a></li>
          <li><a href="<?php echo get_home_url(); ?>/lien-he" class="c-header__btn01">Liên Hệ</a></li>
        </ul>
      </nav>
    </div>
  </header>