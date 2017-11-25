<?php
/*
Template Name: Home Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="superhero home">
  <?php if( function_exists('cyclone_slider') ) cyclone_slider('westslides'); ?>
</section>

<?php get_template_part('partials/callout-btn'); ?>

<div class="sm-nav--home"><?php get_template_part('partials/sm-nav'); ?></div>

<section class="body-container home-page-container">
  <section class="body-container--inner hpc--inner">
    <article class="bci--left hpc-page--inner-left">
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
  			<?php the_field( 'body_content' ); ?>
      <?php endif; ?>
    </article>

    <aside class="bci--right hpc-page--inner-right">
      <?php if( get_field('sidebar_image') ): ?>
        <img class='home-page-sidebar-image' src='<?php the_field( 'sidebar_image' ); ?>' alt="<?php the_field( 'sidebar_image' ); 	?> Image">
      <?php endif; ?>

      <?php if( get_field('sidebar_title') ): ?>
        <h3 class="bold-subtitle">
          <?php the_field( 'sidebar_title' ); ?>
        </h3>
      <?php endif; ?>

      <?php if( get_field('sidebar_content') ): ?>
        <?php the_field( 'sidebar_content' ); ?>
      <?php endif; ?>

      <div class="sidebar-contact-box">
        <span>Contact us with your project inquiries.</span>

        <a href="http://www.west-inc.com/locations" class="btn btn-primary btn-small">
          Contact
        </a>
      </div>

    </aside>
  </section>

</section>

<?php get_footer(); ?>
