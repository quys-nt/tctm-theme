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

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

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

<!-- <div class="c-popup js-popup">
  <div class="c-popup__inner">
    <img class="js-img-popup-01 <?php echo $lang == "vi" ? "" : "u-d-none";?>" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-popup-01.png" alt="img popup">
    <img class="js-img-popup-02 <?php echo $lang == "en" ? "" : "u-d-none";?>" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img-popup-02.png" alt="img popup">
    <button class="c-popup__close js-btn-close-popup">close</button>
  </div>
  <div class="c-popup__select">
    <div class="c-popup__flag js-popup-show-menu">
      <img class="js-img-popup-01 <?php echo $lang == "vi" ? "" : "u-d-none";?>" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-vn.jpg" alt="flag vn">
      <img class="js-img-popup-02 <?php echo $lang == "en" ? "" : "u-d-none";?>" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-en.jpg" alt="flag en">
    </div>
    <ul>
      <li>
        <a href="#" data-flag="popup-01" class="js-popup-select-menu">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-vn.jpg" alt="flag vn">
        </a>
      </li>
      <li>
        <a href="#" data-flag="popup-02" class="js-popup-select-menu">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-en.jpg" alt="flag en">
        </a>
      </li>
    </ul>
  </div>
</div> -->

<body <?php body_class(); ?>>
  <header class="c-header js-header">
    <div class="c-header__container">
      <div class="c-header__logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-capital.svg" alt="logo capital">
        </a>
      </div>
      <nav class="c-header__nav js-menu-header">
        <?php if ($lang == "en") {
        ?>
          <ul>
            <li class="active-page"><a href="<?php echo get_home_url(); ?>/en/">Home</a></li>
            <li><a href="<?php echo get_home_url(); ?>/en/about/">About</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href=#>Support and Service</a></li>
            <li><a href="<?php echo get_home_url(); ?>/en/partner-with-us/">Partner</a></li>
            <li><a href="<?php echo get_home_url(); ?>/san-pham/">E commerce</a></li>
            <li class="c-header__sub-menu-flag">
              <a href="#" class="c-header__btn03 js-show-menu-flag"><span>EN</span>/VN</a>
              <ul>
                <li>
                  <a href="<?php echo get_home_url(); ?>" class="js-hide-menu-flag">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-vn.jpg" alt="flag Viet Nam">
                    <span>Việt Nam</span>
                  </a>
                </li>
                <li>
                  <span class="js-hide-menu-flag">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-en.jpg" alt="flag Viet Nam">
                    <span>English</span>
                  </span>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo get_home_url(); ?>/en/contact/" class="c-header__btn01">Contact</a></li>
          </ul>
        <?php
        } else {
        ?>
          <ul>
            <li class="active-page"><a href="<?php echo get_home_url(); ?>">Trang Chủ</a></li>
            <li><a href="<?php echo get_home_url(); ?>/gioi-thieu/">Giới Thiệu</a></li>
            <li><a href="#">Thương Hiệu</a></li>
            <li><a href="#">Hỗ trợ và Dịch Vụ</a></li>
            <li><a href="<?php echo get_home_url(); ?>/tro-thanh-doi-tac/">Trở Thành Đối Tác</a></li>
            <li><a href="<?php echo get_home_url(); ?>/san-pham/">Mua Hàng Online</a></li>
            <li class="c-header__sub-menu-flag">
              <a href="#" class="c-header__btn03 js-show-menu-flag">EN/<span>VN</span></a>
              <ul>
                <li>
                  <span class="js-hide-menu-flag">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-vn.jpg" alt="flag Viet Nam">
                    <span>Việt Nam</span>
                  </span>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>/en/" class="js-hide-menu-flag">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/flag-en.jpg" alt="flag Viet Nam">
                    <span>English</span>
                  </a>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo get_home_url(); ?>/lien-he/" class="c-header__btn01">Liên Hệ</a></li>
          </ul>
        <?php } ?>
      </nav>
      <a href="#" class="c-header__btn02 js-btn-show-menu">button</a>
    </div>
  </header>