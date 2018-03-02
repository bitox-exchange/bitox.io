<?php
global $setting_page_id;
$theme_setting_page_args = array(
  'post_type' => 'page',
  'p' => ThemeSetting::getSettingPage()->ID,
  'post_status' => array( 'publish', 'private' ),
);
$theme_setting_page_query = new WP_Query( $theme_setting_page_args );
if ( $theme_setting_page_query->have_posts() ) :
  while ($theme_setting_page_query->have_posts()) : $theme_setting_page_query->the_post();
    // Set variables
    // Output
    ?>

    <?php if ( theme_get_CFS_field( 'enable_carousel_partners' ) ) : $carousel_partners = theme_get_CFS_field( 'carousel_partners' ); ?>
      <div id="partners" class="carousel-partners d-flex align-items-center">
        <div class="carousel-partners__container container">
          <div class="headline">
            <h2 class="headline__title"><?php echo theme_get_CFS_field( 'partners_title' ); ?></h2>
          </div>

          <div id="carousel-partners">

            <?php
            foreach ( $carousel_partners as $carousel_partners_item ) :
              echo '<div class="carousel-partners__items">';
              foreach ( $carousel_partners_item['image_group'] as $carousel_partners_item_image_group ) : ?>
                <div class="carousel-partners__item">
                  <div class="carousel-partners__item-inner">

                    <img class="carousel-partners__item-img" src="<?php echo $carousel_partners_item_image_group['image']; ?>" alt="Partner logo">

                  </div>
                </div>
              <?php endforeach;
              echo '</div><!--/.carousel-partners__items-->';
            endforeach; ?>

          </div>

        </div>
      </div><!--/carousel-partners-->
    <?php endif; ?>

    <?php
    // /Output
  endwhile; ?>
  <?php wp_reset_postdata();
endif; ?>
