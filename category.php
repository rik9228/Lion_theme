<?php get_header(); ?>

<main>
  <!-- mainVisual-second start -->
  <section class="mainVisual-second" data-page="blog">
    <div class="mainVisual-second__wrapper wrapper">
      <h1 class="title mainVisual-second__title" data-en="Blog">ブログ</h1>
    </div>
  </section>
  <!-- mainVisual-second end -->

  <section class="posts">
    <div class="posts__wrapper wrapper">
      <?php get_template_part('template_parts/category_tabs') ?>
      <div class="posts__box">

        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post(); ?>

            <div class="card">
              <div class="card__wrapper">
                <a href="<?php the_permalink(); ?>" class="card__link">
                  <div class="card__image-wrap">
                    <?php echo get_thumb_img('full', 'card__image--blog'); ?>
                  </div>
                  <div class="card__box">
                    <p class="card__date"><time datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time></p>
                    <p class="card__category"><?php echo get_the_category(); ?></p>
                  </div>
                  <p class="card__title"><?php the_title(); ?></p>
                </a>
              </div>
            </div>

        <?php } // end while
        } // end if
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
