<?php if( get_field('main_header_image') ): ?>
  <header class="careers-page--header superhero tall team" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
    <?php if( get_field('page_title') ): ?>
      <h2 class="superhero-title">
        <?php the_title(); ?>
      </h2>
    <?php endif; ?>
  </header>
<?php endif; ?>
