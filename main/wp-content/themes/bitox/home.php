<?php
/*
 * Template Name: Home
 */
?>

<?php get_header(); ?>

	<main id="main" class="site-main" role="main">

    <?php get_template_part( 'template-parts/components/intro' ); ?>

    <?php get_template_part( 'template-parts/components/advantages' ); ?>

    <?php get_template_part( 'template-parts/components/advantages-2' ); ?>

    <?php get_template_part( 'template-parts/components/how-works' ); ?>

    <?php get_template_part( 'template-parts/components/carousel-partners' ); ?>

    <?php get_template_part( 'template-parts/components/carousel-testimonials' ); ?>

    <?php get_template_part( 'template-parts/components/get-started' ); ?>

  </main>

<?php get_footer(); ?>
