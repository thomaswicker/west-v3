<?php
/*
Template Name: RSF Proceedings __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container publications-and-reports-page-container">
  <section class="body-container--inner parpc--inner">
    <article class="bci--left parpc-page--inner-left rsf-inner--left">

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

      <?php
        $args = array(
          'meta_key'   => 'publication_category',
          'meta_value'   => 'rsf-proceedings',
          'post_type' => 'publications',
          'posts_per_page' => -1,
          'orderby'=>'title',
          'order'=>'ASC'
        );

        $theField = get_field('publication_id');

        $the_query = new WP_Query( $args );
      ?>

      <h3 class="publications-report-subheader">Publications (sorted by year and lead author)</h3>
      <h4 class="publications-report-subheader-alt">I. General Methodology</h4>

      <ul class="publications-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php if( get_field('publication_section_for_rsf') == 'general-methodology' ): ?>
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
                <?php if( get_field('icon_link_image') ): ?>
                  <a href="<?php the_field( 'email_before_download_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                <?php endif; ?>
              </div>
            </li>
          <?php endif; ?>

        <?php endwhile; else: ?>
          <p class="warning-text">There are no publications to show or something went wrong. Please try back again later.</p>
        <?php endif; ?>
      </ul>

      <h4 class="publications-report-subheader-alt">II. Methods & Applications</h4>

      <ul class="publications-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php if( get_field('publication_section_for_rsf') == 'methods-and-applications' ): ?>
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
                <?php if( get_field('icon_link_image') ): ?>
                  <a href="<?php the_field( 'email_before_download_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                <?php endif; ?>
              </div>
            </li>
          <?php endif; ?>

        <?php endwhile; else: ?>
          <p class="warning-text">There are no publications to show or something went wrong. Please try back again later.</p>
        <?php endif; ?>
      </ul>

    </article>

    <aside class="bci--right parpc-page--inner-right">
      <?php get_template_part('partials/sidebar/publications-sidebar'); ?>
    </aside>
</section>

<?php get_footer(); ?>
