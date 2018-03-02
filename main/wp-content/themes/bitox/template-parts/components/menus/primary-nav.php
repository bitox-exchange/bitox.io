<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="primary-nav" class="primary-nav ml-lg-auto col-12 col-lg-auto" role="navigation">
    <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class' => 'primary-nav__list clearlist',
      'container' => false
    ) ); ?>
  </nav>
<?php endif; ?>
