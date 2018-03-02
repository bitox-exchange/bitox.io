<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

    <?php if ( has_post_thumbnail() ) :
      $imageUrl = get_the_post_thumbnail_url( null, 'full');
    else :
      $imageUrl = get_template_directory_uri() . '/demo-content/images/name.jpg';
    endif; ?>
    <div class="entry-header__img" style="background-image: url(<?php echo $imageUrl; ?>)"></div>

    <div class="entry-box entry-box--full-lg">
      <div class="entry-box__inner">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </div>
    </div>

	</header>

	<div class="entry-content">
    <div class="container">
      <?php the_content(); ?>
    </div>
	</div>

</article>
