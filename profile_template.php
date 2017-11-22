<?php
/*
Template Name: Profile Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container profile-page-container">
  <?php get_template_part('partials/superhero/superhero-profile'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--profile"><?php get_template_part('partials/sm-nav'); ?></div>

  <section class="body-container--inner ppc--inner">
    <article class="bci--left ppc--inner-left">
      <?php if( get_field('page_title') ): ?>
        <h1 class="main-title">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subtitle">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php if( get_field('body_content') ): ?>
        <section class="body-content-text">
          <div class="bct--left">
            <?php the_field( 'body_content' ); ?>
          </div>

          <div class="bct--right">
            <?php if( get_field('image_inside_body_content') ): ?>
              <img src="<?php the_field( 'image_inside_body_content' ); ?>" alt="<?php the_field( 'image_inside_body_content' ); ?>">
            <?php endif; ?>
          </div>
        </section>
      <?php endif; ?>

    </article>

    <aside class="bci--right ppc--inner-right">
      <?php get_template_part('partials/sidebar/about-sidebar'); ?>
    </aside>
</section>

<?php get_footer(); ?>
