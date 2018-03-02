<?php if ( $how_works = theme_get_CFS_field( 'how_works' ) ) : ?>
<div id="how-works" class="how-works advantages">
  <div class="page-container container">

    <div class="headline">
      <h2 class="headline__title"><?php echo theme_get_CFS_field( 'how_works_title' ); ?></h2>
      <p class="headline__description"><?php echo theme_get_CFS_field( 'how_works_description' ); ?></p>
    </div>

    <div class="advantages__items row justify-content-center">
      <?php $i = 0; foreach ($how_works as $how_work) : $i++; ?>
        <div class="col-6 col-sm-3 advantage d-flex">
          <h3 class="advantage__title"><?php echo $how_work['title']; ?></h3>
          <div class="advantage__number-group d-flex align-items-center">
            <div class="advantage__number"><?php echo $i; ?></div>
            <div class="advantage__separator"></div>
          </div>
          <p class="advantage__description"><?php echo $how_work['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>
<?php endif; ?>
