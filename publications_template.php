<?php
/*
Template Name: Wildlife Monitoring & Research __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="publications-and-reports-page-container">
  <?php if( get_field('main_header_image') ): ?>
    <header class="parpc--header">
      <?php if( get_field('page_title') ): ?>
        <div class="main-header-title <?php the_field( 'subnav_active_label' ); ?>" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
        </div>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <section class="parpc--inner">
    <?php
      $args = array(
          'post_type' => 'publications'
      );

      $the_query = new WP_Query( $args );
    ?>

    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <li>
      <?php if( get_field('book_image') ): ?>
        <img class='book-image' src='<?php the_field( 'book_image' ); ?>' alt="<?php the_field( 'book_image' ); 	?> Image">
      <?php endif; ?>

      <?php if( get_field('book_title') ): ?>
        <h3><?php the_field( 'book_title' ); ?></h3>
      <?php endif; ?>

      <?php if( get_field('book_details') ): ?>
        <h4><?php the_field( 'book_details' ); ?></h4>
      <?php endif; ?>

      <?php if( get_field('book_metadata') ): ?>
        <h5><?php the_field( 'book_metadata' ); ?></h5>
      <?php endif; ?>

      <?php if( get_field('book_description') ): ?>
        <p><?php the_field( 'book_description' ); ?></p>
      <?php endif; ?>

      <?php if( get_field('book_button_link') ): ?>
        <a href="<?php the_field( 'book_button_link' ); ?>" class="btn btn-primary" target="_blank"><?php the_field( 'book_button_label' ); ?></a>
      <?php endif; ?>
    </li>

    <?php endwhile; else: ?>
      <p>There are no publications or reports or something went wrong. Please try back again later.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
