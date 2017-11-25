<?php
/*
Template Name: Book Store (Landing Page) __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container bookstore-page-container">
  <section class="body-container--inner bspc--inner">
    <article class="bci--left bspc-page--inner-left">

      <?php if( get_field('page_title') ): ?>
        <h1 class="main-header">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subheader">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php
        $args = array(
          'post_type' => 'books'
        );

        $the_query = new WP_Query( $args );
      ?>

      <ul class="bookstore-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="list-item">
            <div class="pbi--left">
              <?php if( get_field('book_image') ): ?>
                <img src="<?php the_field( 'book_image' ); ?>" alt="<?php the_field( 'book_title' ); ?>">
              <?php endif; ?>
            </div>

            <div class="pbi--right">
              <?php if( get_field('book_title') ): ?>
                <h3 class="book-title"><?php the_field( 'book_title' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('book_details') ): ?>
                <h4 class="book-details"><?php the_field( 'book_details' ); ?></h4>
              <?php endif; ?>

              <?php if( get_field('book_metadata') ): ?>
                <h5 class="book-metadata"><?php the_field( 'book_metadata' ); ?></h5>
              <?php endif; ?>

              <?php if( get_field('book_description') ): ?>
                <?php the_field( 'book_description' ); ?>
              <?php endif; ?>

              <?php if( get_field('book_button_link') ): ?>
                <a href="<?php the_field( 'book_button_link' ); ?>" class="btn btn-mini btn-primary" target="_blank">
                  <?php the_field( 'book_button_label' ); ?>
                </a>
              <?php endif; ?>
            </div>

            <?php endwhile; else: ?>
              <p>There are no books to show or something went wrong. Please try back again later.</p>
            <?php endif; ?>
          </li>
        </ul>

    </article>

    <aside class="bci--right bspc-page--inner-right">
      <?php get_template_part('partials/sidebar/publications-root-sidebar-bookstore'); ?>
    </aside>
</section>

<?php get_footer(); ?>
