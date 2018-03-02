<?php global $setting_page_id; ?>
<div class="intro">
  <div class="container">

    <div class="intro__branding">
      <h1><?php echo theme_get_CFS_field( 'intro_title' ); ?></h1>
      <p class="intro__description"><?php echo theme_get_CFS_field( 'intro_description' ); ?></p>
    </div>

    <div class="row no-gutters intro__items-group">
      <div class="col-5 col-lg-12">
        <?php if ( $button_get_started_title = theme_get_CFS_field( 'button_get_started_title', $setting_page_id ) ) {
          $button_get_started_link = theme_get_CFS_field( 'button_get_started_link', $setting_page_id );
          echo sprintf(
            '<a class="btn btn--lg btn-primary mr-3 mb-3" href="%s" target="%s">%s</a>',
            $button_get_started_link['url'].$button_get_started_link['text'],
            $button_get_started_link['target'] == 'none' ? null : $button_get_started_link['target'],
            $button_get_started_title
          );
        }
        if ( $button_how_works_title = theme_get_CFS_field( 'button_how_works_title', $setting_page_id ) ) {
          $button_how_works_link = theme_get_CFS_field( 'button_how_works_link', $setting_page_id );
          echo sprintf(
            '<a class="btn btn--lg btn-default mb-3" href="%s" target="%s">%s</a>',
            $button_how_works_link['url'].$button_how_works_link['text'],
            $button_how_works_link['target'] == 'none' ? null : $button_how_works_link['target'],
            $button_how_works_title
          );
        } ?>
      </div>

      <div class="col-7 intro__image-wrapper">
        <?php
        $intro_image_link = theme_get_CFS_field( 'intro_image_link' );
        echo sprintf(
          '<a href="%s" target="%s"><img src="%s"></a>',
          $intro_image_link['url'].$intro_image_link['text'],
          $intro_image_link['target'] == 'none' ? null : $intro_image_link['target'],
          theme_get_CFS_field( 'intro_image' )
        );
        ?>
      </div>
    </div>

  </div>
</div>
