<?php get_header(); ?>

	<main id="main" class="site-main" role="main">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <?php if ( !empty( get_search_query() ) ) : ?>
            <h1 class="page-title color-black"><?php printf( esc_html__( 'Search Results for: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          <?php else : ?>
            <h1 class="page-title color-black">Search</h1>
          <?php endif; ?>
        </header>

        <?php get_search_form(); ?>

        <?php if ( !empty( get_search_query() ) ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'search' ); ?>

          <?php endwhile; ?>

          <?php the_posts_navigation(); ?>
        <?php endif; ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </div>
	</main>

<?php get_footer(); ?>
