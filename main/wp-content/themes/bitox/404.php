<?php get_header(); ?>

	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
      <div class="container">

        <header class="page-header">
          <h1 class="page-title color-black"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
        </header>

        <div class="page-content">
          <?php get_search_form(); ?>
        </div>

      </div>
		</section>

	</main>

<?php get_footer(); ?>
