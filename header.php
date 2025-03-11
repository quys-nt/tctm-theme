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

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?></title>
  <meta name="title" content="<?php echo wp_get_document_title(); ?> | Blogs coffee, coffee làm việc, quán coffee đẹp...">
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

<div class="c-popup js-popup">
  <div class="c-popup__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-popup-<?php echo $lang == "en" ? "02" : "01" ?>.png" alt="img popup">
    <?php
    if (is_user_logged_in()) {
    ?>
      <button class="c-popup__close js-btn-close-popup">close</button>
    <?php
    }
    ?>
  </div>
</div>

<body <?php body_class(); ?>>
  <header class="c-header js-header">
    <div class="c-header__container">
      <div class="c-header__logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-capital.png" alt="logo capital">
        </a>
      </div>
      <nav class="c-header__nav js-menu-header">
        <ul>
          <li class="active-page"><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/gioi-thieu">Giới Thiệu</a></li>
          <li><a href="<?php echo get_home_url(); ?>/thuong-hieu">Thương Hiệu</a></li>
          <li><a href="<?php echo get_home_url(); ?>/ho-tro-va-dich-vu">Hổ trợ và Dịch Vụ</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tin-tuc">Tin Tức</a></li>
          <li><a href="<?php echo get_home_url(); ?>/tro-thanh-doi-tac">Trở Thành Đối Tác</a></li>
          <li><a href="<?php echo get_home_url(); ?>/mua-hang-online">Mua Hàng Online</a></li>
          <?php
          if ($lang == "vi") {
          ?>
            <li><a href="<?php echo get_home_url(); ?>/en" class="c-header__btn03">EN/<span>VN</span></a></li>
          <?php
          } else {
          ?>
            <li><a href="<?php echo get_home_url(); ?>/" class="c-header__btn03"><span>EN</span>/VN</a></li>
          <?php
          }
          ?>
          <li><a href="<?php echo get_home_url(); ?>/lien-he" class="c-header__btn01">Liên Hệ</a></li>
        </ul>
      </nav>
      <a href="#" class="c-header__btn02 js-btn-show-menu">button</a>
    </div>
  </header>