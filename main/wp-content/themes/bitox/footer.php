	<footer id="footer" class="site-footer" role="contentinfo">

    <div class="container">
      <div class="row justify-content-between site-footer__column-container">

        <div class="site-footer__column col-12 col-lg-4">
          <?php if ( get_theme_mod( 'custom_logo' ) ) {
            $siteLogo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
            $siteLogoUrl = $siteLogo[0];
          } else {
            $siteLogoUrl = get_template_directory_uri() . '/demo-content/images/base/logo.png';
          }
          echo sprintf( '<img class="site-footer__logo" src="%s" alt="Logo">', $siteLogoUrl ); ?>

          <p class="site-footer__description">
            <?php bloginfo( 'description' ); ?>
          </p>

          <?php get_template_part( 'template-parts/components/menus/social-nav' ); ?>
        </div>

        <div class="footer-nav-column site-footer__column col-6 col-sm-3 col-lg-2">
          <?php get_template_part( 'template-parts/components/menus/footer-nav' ); ?>
        </div>

        <div class="footer-nav-column site-footer__column col-6 col-sm-3 col-lg-2">
          <?php get_template_part( 'template-parts/components/menus/footer-nav-2' ); ?>
        </div>

        <div class="footer-nav-column site-footer__column footer-nav-column col-6 col-sm-3 col-lg-2">
          <?php get_template_part( 'template-parts/components/menus/footer-nav-3' ); ?>
        </div>

        <div class="footer-nav-column site-footer__column col-6 col-sm-3 col-lg-2">
          <?php get_template_part( 'template-parts/components/menus/footer-nav-4' ); ?>
        </div>

        <div class="site-footer__column col-12">
          <div class="site-footer__separator"></div>
        </div>

        <div class="site-footer__column col-12">
          <p class="site-footer__copyright text-center text-sm-right">&copy; <?php echo date("Y") . ' ' . get_bloginfo( 'title' ); ?> All rights reserved</p>
        </div>

      </div>
    </div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
