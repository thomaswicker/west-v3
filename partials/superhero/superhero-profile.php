<?php if( get_field('main_header_image') ): ?>
  <header class="profile-page--header superhero" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
    <?php if( get_field('page_title') ): ?>
      <h2 class="superhero-title">
        <?php the_field( 'page_title' ); ?>
      </h2>

      <?php get_template_part('partials/sm-nav'); ?>

      <?php get_template_part('partials/callout-btn'); ?>

    <?php endif; ?>
  </header>
<?php endif; ?>
