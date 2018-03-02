<?php global $setting_page_id; ?>
<?php if ( has_nav_menu( 'footer-3' ) ) : ?>
  <nav class="footer-nav">
    <h3 class="footer-nav__title"><?php echo theme_get_CFS_field( 'footer_menu_3_title', $setting_page_id ); ?></h3>
    <?php wp_nav_menu( array(
      'theme_location' => 'footer-3',
      'menu_class' => 'footer-nav__list clearlist',
      'container' => false
    ) ); ?>
  </nav>
<?php endif; ?>