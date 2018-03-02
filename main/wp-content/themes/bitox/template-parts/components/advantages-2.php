<?php if ( $advantages_2 = theme_get_CFS_field( 'advantages_2' ) ) : ?>
<div id="faq" class="advantages-2">
  <div class="page-container container">

    <div class="advantages-2__items">
      <?php foreach ($advantages_2 as $advantage_2) : ?>
        <div class="advantage-2 row">
          <div class="col-6 advantage-2__img-col">
            <img src="<?php echo $advantage_2['image']; ?>" alt="<?php echo $advantage_2['title']; ?>">
          </div>

          <div class="col-6 advantage-2__text-col">
            <div class="headline text-left">
              <h2 class="headline__title"><?php echo $advantage_2['title']; ?></h2>
              <p class="headline__description"><?php echo $advantage_2['description']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>
<?php endif; ?>
