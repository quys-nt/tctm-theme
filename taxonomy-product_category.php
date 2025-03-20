<?php get_header(); ?>

<main>
    <div class="c-breadcrumb">
        <div class="c-breadcrumb__inner">
            <nav class="l-container">
                <ul>
                    <li><a href="/">Trang Chủ</a></li>
                    <li><span>Danh mục sản phẩm</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="p-product__archive">
        <div class="l-container">
            <div class="p-product__archive--inner">
                <div class="p-product__archive--left">
                    <ul class="p-product__archive--cats">
                        <li><a href="/">Bertazzoni</a></li>
                        <li><a href="/">KAdeKA</a></li>
                        <li><a href="/">KDK</a></li>
                        <li><a href="/">EuroCave</a></li>
                    </ul>
                </div>
                <div class="p-product__archive--right">
                    <div class="p-product__archive--box01">
                        <h1 class="p-product__archive--title01">Danh mục sản phẩm</h1>
                        <div class="p-product__archive--box02">
                            <p class="p-product__archive--text01">Showing 1-10 of 100 Products</p>
                            <p class="p-product__archive--text01">Sort by: <span class="c-text__yellow01">Most Popular</span><i class="p-product__archive--icon01"></i></p>
                        </div>
                    </div>
                    <?php if (have_posts()) : ?>
                        <div class="p-product__archive--inner02">
                            <?php
                            while (have_posts()) {
                                the_post();
                                get_template_part('template-parts/product', get_post_format());
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    <?php else: ?>
                        <p class="c-text__white01" style="margin-top: 30px;">Không có sản phẩm nào trong danh mục này.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>