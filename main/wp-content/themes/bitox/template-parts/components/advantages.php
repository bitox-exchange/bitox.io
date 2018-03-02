<?php if ( $advantages = theme_get_CFS_field( 'advantages' ) ) : ?>
<div id="advantages" class="advantages">
  <div class="page-container container">

    <div class="headline">
      <h2 class="headline__title"><?php echo theme_get_CFS_field( 'advantages_title' ); ?></h2>
      <p class="headline__description"><?php echo theme_get_CFS_field( 'advantages_description' ); ?></p>
    </div>

    <div class="advantages__items row">
      <?php foreach ($advantages as $advantage) : ?>
        <div class="col-6 col-sm-3 advantage d-flex">
          <div class="advantage__image-wrapper">
            <img src="<?php echo $advantage['image']; ?>" alt="<?php echo $advantage['title']; ?>">
          </div>
          <h3 class="advantage__title"><?php echo $advantage['title']; ?></h3>
          <p class="advantage__description"><?php echo $advantage['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>
<?php endif; ?>
