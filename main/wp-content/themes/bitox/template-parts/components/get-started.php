<?php global $setting_page_id; ?>
<div class="get-started">
  <div class="container">
    <div class="headline text-left text-sm-center">
      <h2 class="headline__title"><?php echo theme_get_CFS_field( 'get_started_title' ); ?></h2>
      <p class="headline__description"><?php echo theme_get_CFS_field( 'get_started_description' ); ?></p>
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
  </div>
</div>
