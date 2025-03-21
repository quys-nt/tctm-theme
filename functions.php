<?php

function theme_shop_sport_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('menus');
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

function custom_rewrite_rules()
{
  $pages = array(
    'about'       => 75,
    'contact'       => 81,
    'partner-with-us'       => 77,
  );

  foreach ($pages as $slug => $page_id) {
    if (get_post_status($page_id) && get_post_type($page_id) === 'page') {
      add_rewrite_rule(
        "^en/{$slug}/?$",
        "index.php?page_id=$page_id",
        'top'
      );
    }
  }
}
add_action('init', 'custom_rewrite_rules');

function sb_get_sub_cat()
{
  if (get_the_category()) {
    $categories = get_the_category();
    foreach ($categories as $key => $category) {
      if ($key == 1) {
        echo ', ';
      }
      echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
    }
  }
}

function create_product_post_type()
{
  $labels = array(
    'name'               => 'Products',              // Tên chung của post type
    'singular_name'      => 'Product',              // Tên đơn số
    'menu_name'          => 'Products',             // Tên hiển thị trên menu
    'name_admin_bar'     => 'Product',              // Tên trên thanh admin bar
    'add_new'            => 'Add New',              // Nút thêm mới
    'add_new_item'       => 'Add New Product',      // Tiêu đề khi thêm sản phẩm mới
    'new_item'           => 'New Product',          // Tên mục mới
    'edit_item'          => 'Edit Product',         // Chỉnh sửa sản phẩm
    'view_item'          => 'View Product',         // Xem sản phẩm
    'all_items'          => 'All Products',         // Tất cả sản phẩm
    'search_items'       => 'Search Products',      // Tìm kiếm sản phẩm
    'not_found'          => 'No products found.',   // Không tìm thấy sản phẩm
    'not_found_in_trash' => 'No products found in Trash.' // Không tìm thấy trong thùng rác
  );

  $args = array(
    'labels'             => $labels,               // Gán nhãn ở trên
    'public'             => true,                  // Công khai để truy cập
    'publicly_queryable' => true,                  // Có thể truy vấn qua URL
    'show_ui'            => true,                  // Hiển thị giao diện quản trị
    'show_in_menu'       => true,                  // Hiển thị trong menu admin
    'query_var'          => true,                  // Cho phép truy vấn
    'rewrite'            => array('slug' => 'san-pham'), // Slug URL là "product"
    'capability_type'    => 'post',                // Quyền giống như bài viết
    'has_archive'        => true,                  // Có trang lưu trữ
    'hierarchical'       => false,                 // Không phân cấp (giống bài viết, không giống trang)
    'menu_position'      => null,                  // Vị trí menu mặc định
    'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'), // Hỗ trợ các tính năng
    'menu_icon'          => 'dashicons-cart',
  );

  register_post_type('product', $args);            // Đăng ký post type "product"
}
add_action('init', 'create_product_post_type');      // Gắn hàm vào hook "init"

function create_product_taxonomy()
{
  $labels = array(
    'name'              => 'Product Categories',        // Tên chung của taxonomy
    'singular_name'     => 'Product Category',         // Tên đơn số
    'search_items'      => 'Search Product Categories', // Tìm kiếm danh mục
    'all_items'         => 'All Product Categories',   // Tất cả danh mục
    'parent_item'       => 'Parent Product Category',  // Danh mục cha
    'parent_item_colon' => 'Parent Product Category:', // Danh mục cha (có dấu hai chấm)
    'edit_item'         => 'Edit Product Category',    // Chỉnh sửa danh mục
    'update_item'       => 'Update Product Category',  // Cập nhật danh mục
    'add_new_item'      => 'Add New Product Category', // Thêm danh mục mới
    'new_item_name'     => 'New Product Category Name', // Tên danh mục mới
    'menu_name'         => 'Product Categories',       // Tên hiển thị trên menu
  );

  $args = array(
    'hierarchical'      => true,                       // Phân cấp giống danh mục (có thể có cha-con)
    'labels'            => $labels,                    // Gán nhãn ở trên
    'show_ui'           => true,                       // Hiển thị giao diện quản trị
    'show_admin_column' => true,                       // Hiển thị cột trong bảng sản phẩm
    'query_var'         => true,                       // Cho phép truy vấn
    'rewrite'           => array('slug' => 'danh-muc'), // Slug URL là "product-category"
  );

  register_taxonomy('product_category', array('product'), $args); // Đăng ký taxonomy và gắn với "product"
}
add_action('init', 'create_product_taxonomy');

function reset_rewrite_rules()
{
  flush_rewrite_rules();
}
add_action('init', 'reset_rewrite_rules');

function get_product_categories()
{
  $terms = get_terms(array(
    'taxonomy' => 'product_category',
    'hide_empty' => false,
  ));

  if (!empty($terms) && !is_wp_error($terms)) {
    echo '<ul class="p-product__archive--cats">';
    foreach ($terms as $term) {
      echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
  } else {
    echo '<p>Không có danh mục nào.</p>';
  }
}
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

// function get_current_language() {
//   $current_url = $_SERVER['REQUEST_URI'];
//   if (preg_match('/^\/en\//', $current_url)) {
//       return array('short' => 'en', 'full' => 'en-US');
//   } else {
//       return array('short' => 'vi', 'full' => 'vi-VN');
//   }
// }
