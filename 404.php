<?php get_header(); ?>

<main>
  <section class="notFound">
    <div class="notFound__wrapper wrapper">
      <h1 class="notFound__title">お探しのページが見つかりませんでした。</h1>
      <p class="notFound__sentence">一時的にアクセスできないか、
        移動または削除された可能性があります。<br>
        URLに間違いがないかご確認をお願いいたします。</p>
      <div class="notFound__box link-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="contact-link notFound__link ">
          <p data-en="BACK TO TOP" class="contact-link__title">トップへ戻る</p>
        </a>
        <!-- <a href="#" class="link notFound__link">BACK TO TOP</a> -->
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
