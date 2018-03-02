<?php global $setting_page_id; ?>
<nav class="top-nav">
  <ul class="top-nav__list clearlist">
    <?php 
    /*if ( $button_login_title = theme_get_CFS_field( 'button_login_title', $setting_page_id ) ) {
      $button_login_link = theme_get_CFS_field( 'button_login_link', $setting_page_id );
      echo sprintf(
        '<li><a href="%s" target="%s">%s</a></li>',
        $button_login_link['url'].$button_login_link['text'],
        $button_login_link['target'] == 'none' ? null : $button_login_link['target'],
        $button_login_title
      );
    }*/
    if ( $button_get_started_title = theme_get_CFS_field( 'button_get_started_title', $setting_page_id ) ) {
      $button_get_started_link = theme_get_CFS_field( 'button_get_started_link', $setting_page_id );
      echo sprintf(
        '<li><a class="btn btn-primary" href="%s" target="%s" onClick="setCookie();">%s</a></li>',
        //$button_get_started_link['url'].$button_get_started_link['text'],
        'http://' . $_SERVER['HTTP_HOST'] ,
        $button_get_started_link['target'] == 'none' ? null : $button_get_started_link['target'],
        $button_get_started_title
      );
    } ?>
  </ul>
</nav> 
<script>
function setCookie() {    
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "is_started=ok; " + expires + ";path=/";
}
</script>