<?php get_header(); ?>

<?php
$terms = get_the_terms(get_the_ID(), 'product_category');
$term_slug = '';
if ($terms && !is_wp_error($terms)) {
  $term_slug = $terms[0]->slug;
}
$args = array(
  'post_type' => 'product',
  'posts_per_page' => 5,
  'post__not_in' => array(get_the_ID()),
  'tax_query' => array(
    array(
      'taxonomy' => 'product_category',
      'field' => 'slug',
      'terms' => $term_slug,
    ),
  ),
);
$related_products = new WP_Query($args);
?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="/">Trang Chủ</a></li>
          <?php if ($terms) : ?>
            <li><a href="<?php echo get_category_link($terms[0]->term_taxonomy_id);?>"><?php echo $terms[0]->name?></a></li>
          <?php endif; ?>
          <li><span>single product</span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="p-product__single--inner01">
    <div class="l-container">
      <div class="p-product__single--box01">
        <?php
        $multiImg = get_field("grallry_single_product", "");
        if (!$multiImg) {
        ?>
          <div class="p-product__single--slider js-slider-single-prod">
            <div>
              <?php
              $thumbnailNull = get_template_directory_uri() . '/assets/imgs/img-dummy-01.jpg';
              $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
              ?>
              <img src="<?php echo $thumbnail ? $thumbnail : $thumbnailNull; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" loading="lazy">
            </div>
          </div>
        <?php } else { ?>
          <div class="p-product__single--slider js-slider-single-prod">
            <?php foreach ($multiImg as $item): ?>
              <div>
                <img src="<?php echo $item["img_single_product"]["url"] ?>" alt="<?php echo $item["img_single_product"]["alt"] ?>" loading="lazy">
              </div>
            <?php endforeach; ?>
          </div>
        <?php } ?>
        <div>
          <div class="p-product__single--content01">
            <h1 class="p-product__single--title01"><?php the_title(); ?></h1>
            <div class="p-product__single--intro01">
              <?php the_excerpt(); ?>
            </div>
            <a href="tel:19001145" class="c-btn__01 p-product__single--link01">Liên Hệ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-product__single--inner02">
    <div class="l-container">
      <div class="p-product__single--box02">
        <button data-tab="tab01" class="p-product__single--btn01 js-btn-tab-prod is-active">Giới thiệu chung</button>
        <?php
        $specifications = get_field("specifications");
        if ($specifications) {
        ?>
          <button data-tab="tab02" class="p-product__single--btn01 js-btn-tab-prod">Thông số kỹ thuật</button>
        <?php
        }
        ?>
        <?php if ($related_products->have_posts()): ?>
          <button data-tab="tab03" class="p-product__single--btn01 js-btn-tab-prod">Sản phẩm liên quan</button>
        <?php endif; ?>
      </div>
      <div class="p-product__single--wrap">
        <div class="p-product__single--box03 p-product__single--tab js-tab-prod is-active" id="tab01">
          <article class="c-article__contents">
            <?php the_content(); ?>
          </article>
        </div>
        <div class="p-product__single--box03 p-product__single--tab js-tab-prod" id="tab02">
          <article class="p-product__single--content02">
            <?php echo $specifications; ?>
          </article>
        </div>

        <?php if ($related_products->have_posts()) : ?>
          <div class="p-product__single--tab js-tab-prod" id="tab03">
            <div class="p-product__single--box04">
              <?php
              while (have_posts()) {
                the_post();
                get_template_part('template-parts/product', get_post_format());
              }
              ?>
            </div>
          </div>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>