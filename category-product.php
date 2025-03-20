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

  <section class="p-archive__cats">
    <div class="p-archive__container">
      <div class="p-archive__cats--box01">
        <h1 class="c-title__01"><?php the_title(); ?></h1>
        <div class="c-desc__01 p-archive__cats--desc01">
          <?php the_archive_description(); ?>
        </div>
      </div>

      <div class="p-archive__cats--inner01">
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-02', get_post_format());
          }
        }
        wp_reset_query();
        ?>
      </div>


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