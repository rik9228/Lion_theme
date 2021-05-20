<!-- footer start -->
<footer class="footer">
  <div class="footer__wrapper">
    <div class="homeLogo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="homeLogo__link">
        <picture>
          <source class="footer__homeLogo" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img_homelogo_footer_pc@2x.png" media="(min-width: 1025px)" />
          <source class="footer__homeLogo" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img_homelogo_footer_sp@2x.png" media="(max-width: 1024px)" />
          <img class="footer__homeLogo" src="<?php echo get_template_directory_uri(); ?>/img/common/img_homelogo_footer_pc@2x" alt="ロゴ画像：トップ戻る" />
          <picture>
      </a>
    </div>
    <div class="footer__box">
      <nav class="navi-footer">

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'fNav',
          'container'       => 'ul',
          'items_wrap'      => '<ul class="navi-footer__listFrame">%3$s</ul>',
        ));
        ?>

      </nav>
      <p class="footer__copyright">
        <small>Copyright @2021 Lion All rights reserved.</small>
      </p>
    </div>
  </div>
</footer>
<!-- footer end -->

<?php wp_footer(); ?>
</body>

</html>
