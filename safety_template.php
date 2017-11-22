<?php
/*
Template Name: Safety __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container safety-page-container">

  <?php get_template_part('partials/superhero/superhero-safety'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--safety"><?php get_template_part('partials/sm-nav'); ?></div>

  <section class="body-container--inner safety-page--inner">
    <article class="bci--left safety-page--inner-left">
      <?php if( get_field('page_subtitle') ): ?>
        <h1 class="main-title">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subtitle">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php if( get_field('body_content_first_section') ): ?>
        <div class="body-content-text">
          <div class="bct--left">
            <?php the_field( 'body_content_first_section' ); ?>
          </div>

          <div class="bct--right">
            <?php if( get_field('first_image_inside_body_content') ): ?>
              <img src="<?php the_field( 'first_image_inside_body_content' ); ?>" alt="<?php the_field( 'first_image_inside_body_content' ); ?>">
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- BEGIN CODE SNIPPET THAT LOOPS THROUGH BULLED CONTENT FROM THE WORDPRESS UI -->
      <?php if( have_rows('bulleted_content') ): ?>

        <ul class="bulleted-list">

        <?php while( have_rows('bulleted_content') ): the_row();

          // vars
          $bulleteditem = get_sub_field('bulleted_item');

          ?>

          <li class="bulleted-item">
            <?php echo $bulleteditem; ?>
          </li>

        <?php endwhile; ?>

        </ul>

      <?php endif; ?>

      <?php if( get_field('body_content_second_section') ): ?>
        <div class="body-content-text">
          <div class="bct--left">
            <?php the_field( 'body_content_second_section' ); ?>
          </div>
          <div class="bct--right">
            <?php if( get_field('first_image_inside_body_content') ): ?>
              <img src="<?php the_field( 'second_image_inside_body_content' ); ?>" alt="<?php the_field( 'second_image_inside_body_content' ); ?>">

              <img style="margin-top: 50px;" src="<?php the_field( 'third_image_inside_body_content' ); ?>" alt="<?php the_field( 'third_image_inside_body_content' ); ?>">

            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

    </article>

    <aside class="bci--right safety-page--inner-right">
      <?php get_template_part('partials/sidebar/about-sidebar'); ?>
    </aside>
</section>

<?php get_footer(); ?>
