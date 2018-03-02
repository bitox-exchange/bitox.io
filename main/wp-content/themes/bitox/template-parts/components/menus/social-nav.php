<?php global $setting_page_id; ?>
<?php if ( has_nav_menu( 'social' ) ) : ?>
  <p><?php echo theme_get_CFS_field( 'footer_social_menu_title', $setting_page_id ); ?></p>
  <nav class="social-nav">
    <?php wp_nav_menu( array(
      'theme_location' => 'social',
      'menu_class' => 'social-nav__list clearlist',
      'container' => false,
      'link_before' => '<span>',
      'link_after' => '</span>'
    ) ); ?>
  </nav>
<?php endif; ?>
