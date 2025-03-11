<?php
add_theme_support('menus');
function theme_shop_sport_setup()
{
  // Add support for various theme features
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'theme_shop_sport_setup');

function theme_shop_sport_enqueue_styles()
{
  wp_enqueue_style('theme-shop-sport-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_shop_sport_enqueue_styles');




function sb_get_current_url()
{
  if (is_singular()) {
    return get_permalink();
  } else {
    global $wp;
    $current_url = trailingslashit(home_url($wp->request));
    return $current_url;
  }
}

function sub_jdJson()
{
  if (is_archive()) {
    echo ',{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 2,
      "name": "' . single_cat_title('', false) . '",
      "item": "' .  sb_get_current_url() . '"
    }] }';
  }
  if (is_page()) {
    echo ',{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 2,
      "name": "' . get_the_title() . '",
      "item": "' .  sb_get_current_url() . '"
    }] }';
  }
  if (is_single()) {
    if (get_the_category()) {
      $categories = get_the_category();
      $category = reset($categories);
      echo ',{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 2,
      "name": "' . $category->name . '",
      "item": "' .  get_category_link($category->term_id) . '"
    }] }
    ';
    }
    echo ',{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 3,
      "name": "' . get_the_title() . '",
      "item": "' .  sb_get_current_url() . '"
    }] },
    ';
  }
}

function sb_get_img_og()
{
  if (!is_singular()) {
    $ogpImg = get_stylesheet_directory_uri() . '/assets/imgs/home-pages.png';
    echo $ogpImg;
  } else {
    $urlThumbnail = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail');
    if ($urlThumbnail) {
      $postThumbnail = $urlThumbnail;
    } else {
      if (catch_that_image()) {
        $postThumbnail = catch_that_image();
      } else {
        $postThumbnail = null;
      }
    }
    $postThumbnail == null ? $ogpImg = get_stylesheet_directory_uri() . '/assets/img/home-pages.png' : $ogpImg = $postThumbnail;
    echo $ogpImg;
  }
}

function catch_that_image()
{
  global $post;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if (empty($first_img)) {
    $first_img = false;
  }
  return $first_img;
}

function remove_category_base()
{
  add_filter('category_link', function ($link) {
    return str_replace('/category/', '/', $link);
  }, 10, 1);

  add_action('init', function () {
    global $wp_rewrite;
    $wp_rewrite->extra_permastructs['category']['struct'] = '/%category%';
    flush_rewrite_rules(); // Cập nhật lại quy tắc rewrite
  });
}
remove_category_base();


function get_current_language()
{
  $current_url = $_SERVER['REQUEST_URI'];

  $is_localhost = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false);
  $prefix = $is_localhost ? '/capital-local/' : '/';

  $path = str_replace($prefix, '', $current_url);

  if (preg_match('/^en\//', $path)) {
    return array('short' => 'en', 'full' => 'en-US');
  } else {
    return array('short' => 'vi', 'full' => 'vi-VN');
  }
}

function get_language_urls($slug)
{
  $base_url = home_url();
  $en_url = $base_url . '/en/' . $slug;
  $vi_url = $base_url . '/' . $slug;
  return array('en' => $en_url, 'vi' => $vi_url);
}
