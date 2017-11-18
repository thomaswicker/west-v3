<?php
/*
Template Name: Culture __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container culture-page-container">

  <?php get_template_part('partials/superhero/superhero-culture'); ?>

  <section class="body-container--inner culture-page--inner">
    <article class="bci--left culture-page--inner-left">

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subtitle">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php if( get_field('body_content') ): ?>
        <div class="body-content-text">
          <?php the_field( 'body_content' ); ?>
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
    </article>

    <aside class="bci--right culture-page--inner-right">
      <?php get_template_part('partials/sidebar/about-sidebar'); ?>
    </aside>
</section>

<?php get_footer(); ?>
