<?php
global $setting_page_id;
$testimonials_args = array(
  'post_type' => 'testimonials',
  'post_per_page' => -1,
  'post_status' => array( 'publish' )
);
$testimonials_query = new WP_Query( $testimonials_args );
if ( $testimonials_query->have_posts() ) : ?>
  <div class="carousel-testimonials d-flex align-items-center">
    <div class="carousel-testimonials__container container">
      <div class="headline">
        <h2 class="headline__title"><?php echo theme_get_CFS_field( 'testimonials_title', $setting_page_id ); ?></h2>
      </div>

      <div id="carousel-testimonials-comment" class="carousel-testimonials-comment">

        <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
        // Set variables
        // Output
        ?>
          <div class="carousel-testimonials-comment__item">
            <?php the_content(); ?>
          </div>
        <?php
        // /Output
        endwhile; ?>

      </div><!--/#carousel-testimonials-comment-->

      <div id="carousel-testimonials">

        <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
        // Set variables
        // Output
        ?>
          <div class="carousel-testimonials__item">
            <div class="carousel-testimonials__item-inner">

              <div class="carousel-testimonials__item-avatar-wrapper">
                <?php
                $testimonial_avatar = wp_get_attachment_image_src( CFS()->get( 'avatar' ), 'carousel-testimonials-avatar' );
                $testimonial_avatar_url = $testimonial_avatar[0];
                echo sprintf(
                  '<img class="carousel-testimonials__item-avatar" src="%s" alt="%s">',
                  $testimonial_avatar_url, CFS()->get( 'author' )
                );
                ?>
              </div>

              <div class="carousel-testimonials__item-author carousel-testimonials--hide"><?php echo CFS()->get( 'author' ); ?></div>

              <div class="carousel-testimonials__item-position carousel-testimonials--hide"><?php echo CFS()->get( 'position' ); ?></div>

            </div>
          </div>
        <?php
        // /Output
        endwhile; ?>

      </div><!--/#carousel-testimonials-->
    </div>
  </div><!--/carousel-testimonials-->
  <?php wp_reset_postdata();
endif; ?>
