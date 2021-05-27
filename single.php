<?php get_header(); ?>
<main>
  <section class="single section">
    <div class="single__wrapper wrapper">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <div class="single__box">
            <p class="single__title">
              <?php the_title(); ?>
            </p>
            <div class="single__partition">
              <p class="single__date">
                <time datetime="<?php echo get_the_date('Y.m.d'); ?>">
                  <?php the_date('Y/m/d'); ?>
                </time>
              </p>
              <?php $categories = get_the_category();
              foreach ($categories as $category) : ?>
                <a class="single__category" href="<?php echo esc_url(home_url('/')) ?><?php echo $category->category_nicename; ?>">
                  <?php echo $category->cat_name; ?></a>
              <?php endforeach;
              ?>
            </div>
            <div class="single__partition--02">
              <?php the_content(); ?>
            </div>
          </div>
      <?php } // end while
      } // end if
      ?>
      <div class="single__partition--03">
        <ul class="single__listFrame">
          <?php if (get_previous_post()) : ?>
            <li class="single__list single__list--prev">
              <?php previous_post_link('%link', '前の記事へ'); ?>
            </li>
          <?php else : ?>
            <li class="single__list single__list">
            </li>
          <?php endif; ?>
          <li class="single__list single__list--home">
            <a href="<?php echo esc_url(home_url('/blog')) ?>">
              新着情報一覧へ戻る
            </a>
          </li>
          <?php if (get_next_post()) : ?>
            <li class="single__list single__list--next">
              <?php next_post_link('%link', '次の記事へ'); ?>
            </li>
          <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
