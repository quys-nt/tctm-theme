<?php get_header(); ?>

<main>
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner">
      <nav class="l-container">
        <ul>
          <li><a href="/">Trang Chủ</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </nav>
    </div>
  </div>

  <section class="p-product__archive">
    <div class="l-container">
      <h1 class="c-text__white01"><?php the_title(); ?></h1>
      <article>
        <div class="c-text__white01">
          <?php the_content(); ?>
        </div>
      </article>
    </div>
  </section>

</main>

<?php get_footer(); ?>