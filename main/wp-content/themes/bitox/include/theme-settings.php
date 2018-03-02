<?php

class ThemeSetting
{
  const settingPageSlug = 'theme-settings';

  public static function init()
  {
    if ( !get_page_by_path( self::settingPageSlug, 'page' ) ) {
      wp_insert_post( array(
        'post_title' => 'Theme Settings',
        'post_name'  => 'theme-settings',
        'post_type'  => 'page',
        'post_status' => 'private',
      ) );
    }

    $GLOBALS['setting_page_id'] = self::getSettingPageId();
  }

  /**
   * @return array|null|WP_Post
   */
  public static function getSettingPage()
  {
    return get_page_by_path( self::settingPageSlug, 'page' );
  }

  /**
   * @return int
   */
  public static function getSettingPageId()
  {
    return pll_get_post( self::getSettingPage()->ID );
  }
}

ThemeSetting::init();
