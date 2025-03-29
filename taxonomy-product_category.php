<?php get_header(); ?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="/">Trang Chủ</a></li>
          <li><span><?php single_cat_title();?></span></li>
        </ul>
      </nav>
    </div>
  </div>


  <section class="p-product__archive02">
    <div class="l-container">
      <h1 class="p-product__archive--title03"><?php single_cat_title();?></h1>
      <?php if (have_posts()) : ?>
        <div class="p-product__archive--inner03">
          <?php
          while (have_posts()) {
            the_post();
            get_template_part('template-parts/product-02', get_post_format());
          }
          wp_reset_query();
          ?>
        </div>
      <?php else: ?>
        <p class="c-text__white01" style="margin-top: 30px;">Không có sản phẩm nào trong danh mục này.</p>
      <?php endif; ?>
      <div class="c-paging">
        <div class="c-paging">
          <?php
          echo paginate_links(
            array(
              'mid_size'     => 1,
              'prev_text'    => sprintf(__('←')),
              'next_text'    => sprintf(__('→')),
            )
          );
          ?>
        </div>
      </div>
  </section>

</main>

<?php get_footer(); ?>