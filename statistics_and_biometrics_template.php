<?php
/*
Template Name: Statistics & Biometrics __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container publications-and-reports-page-container">
  <section class="body-container--inner parpc--inner">
    <article class="bci--left parpc-page--inner-left">

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
          'meta_key'   => 'publication_category',
          'meta_value'   => 'statistics-and-biometrics',
          'post_type' => 'publications'
        );

        $theField = get_field('publication_id');

        $the_query = new WP_Query( $args );
      ?>

        <h3 class="publications-report-subheader">Books (sorted by year and lead author)</h3>
        <ul class="books-list">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('publication_type') == 'book' ): ?>
              <li class="publication-list-item">
                <div class="pbi--left">
                  <?php if( get_field('publication_title') ): ?>
                    <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('publication_details') ): ?>
                    <p class="publication-details"><?php the_field( 'publication_details' ); ?></p>
                  <?php endif; ?>
                </div>

                <div class="pbi--right">
                  <?php if( get_field('publication_link') ): ?>
                    <a href="<?php the_field( 'publication_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                  <?php endif; ?>
                </div>
              </li>
            <?php endif; ?>

          <?php endwhile; else: ?>
            <p>There are no books to show or something went wrong. Please try back again later.</p>
          <?php endif; ?>
        </ul>


        <h3 class="publications-report-subheader">Publications (sorted by year and lead author)</h3>
        <ul class="publications-list">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('publication_type') == 'publication' ): ?>
              <li class="publication-list-item">
                <div class="pbi--left">
                  <?php if( get_field('publication_title') ): ?>
                    <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('publication_details') ): ?>
                    <p class="publication-details"><?php the_field( 'publication_details' ); ?></p>
                  <?php endif; ?>

                  <?php if( get_field('email_before_download_link') ): ?>
                    <aside class="email-before-download-container">
                      <h3>
                        <i class="fa fa-envelope"></i>
                        <span>Please provide your name and email before downloading this PDF:</span>
                      </h3>

                      <div class="<?php the_field( 'email_before_download_link' ); ?>)">
                        <?php echo do_shortcode('[email-download download_id="'.get_field('email_before_download_link').'" contact_form_id="2022"]'); ?>
                      </div>

                    </aside>
                  <?php endif; ?>
                </div>

                <div class="pbi--right">
                  <?php if( get_field('publication_link') ): ?>
                    <a href="<?php the_field( 'publication_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                  <?php endif; ?>
                </div>
              </li>
            <?php endif; ?>

          <?php endwhile; else: ?>
            <p>There are no publications to show or something went wrong. Please try back again later.</p>
          <?php endif; ?>
        </ul>

    </article>

    <aside class="bci--right parpc-page--inner-right">
      <?php get_template_part('partials/sidebar/publications-sidebar'); ?>
    </aside>
</section>

<?php get_footer(); ?>
