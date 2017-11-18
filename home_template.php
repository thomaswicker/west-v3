<?php
/*
Template Name: Home Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="home-page-container">
  <?php if( get_field('main_header_image') ): ?>
    <header class="hpc--header">
      <?php if( get_field('page_title') ): ?>
        <div class="main-header-title <?php the_field( 'subnav_active_label' ); ?>" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
        </div>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <section class="hpc--inner">
    <article class="hpc--inner-left">
      <?php if( get_field('page_title') ): ?>
        <h1 class="main-title">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_title') ): ?>
        <h2 class="main-subtitle">
          <?php the_field( 'page_title' ); ?>
        </h2>
      <?php endif; ?>

      <?php if( get_field('body_content') ): ?>
				<?php the_field( 'body_content' ); ?>
      <?php endif; ?>
    </article>

    <aside class="hpc--inner-right">
      <?php if( get_field('sidebar_title') ): ?>
        <?php the_field( 'sidebar_title' ); ?>
      <?php endif; ?>

      <?php if( get_field('sidebar_content') ): ?>
        <?php the_field( 'sidebar_content' ); ?>
      <?php endif; ?>

      <?php if( get_field('sidebar_image') ): ?>
        <img class='home-page-sidebar-image' src='<?php the_field( 'sidebar_image' ); ?>' alt="<?php the_field( 'sidebar_image' ); 	?> Image">
      <?php endif; ?>
    </aside>
</section>

<?php get_footer(); ?>
