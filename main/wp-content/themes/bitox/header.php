<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body body-header-fixed"); ?>>

	<header id="header" class="site-header">

    <div class="container">
      <div class="row no-gutters justify-content-between align-items-center">

        <div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
            <?php if ( get_theme_mod( 'custom_logo' ) ) {
              $siteLogo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
              $siteLogoUrl = $siteLogo[0];
            } else {
              $siteLogoUrl = get_template_directory_uri() . '/demo-content/images/base/logo.png';
            }
            echo sprintf( '<img class="site-logo" src="%s" alt="Logo">', $siteLogoUrl ); ?>
          </a>
        </div>

        <button id="hamburger" class="hamburger">
          <div class="hamburger__inner">
            <div class="hamburger__lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </button>

        <?php get_template_part( 'template-parts/components/menus/primary-nav' ); ?>

        <div class="top-items-group">
          <div class="d-flex align-items-center">

            <div id="lang-switcher" class="lang-switcher">
              <div id="lang-switcher-btn" class="lang-switcher__btn d-flex align-items-center">
                <span id="lang-switcher-current-lang" class="lang-switcher__current-lang">
                  <?php echo pll_current_language(); ?>
                </span>
                <span id="lang-switcher-arrow" class="lang-switcher__arrow"></span>
              </div>
              <ul id="lang-switcher-list" class="lang-switcher__list clearlist">
                <?php pll_the_languages( ['display_names_as' => 'slug' ] );?>
              </ul>
            </div>

            <div class="site-header__separator"></div>

            <?php get_template_part( 'template-parts/components/menus/top-nav' ); ?>

          </div>
        </div>

      </div>
    </div>

	</header>
