<?php
/*
Template Name: Workshops __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container workshops-page-container">
  <section class="body-container--inner wpc--inner">
    <article class="bci--left wpc-page--inner-left">

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
          'post_type' => 'west_workshops',
          'order'=>'workshop_start_date'
        );

        $the_query = new WP_Query( $args );
      ?>

      <ul class="workshops-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="list-item">
            <section class="wl--left">
              <?php if( get_field('workshop_name') ): ?>
                <h3 class="title-of-workshop"><?php the_field( 'workshop_name' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('workshop_content') ): ?>
                <p class="workshop-content">
                  <?php the_field( 'workshop_content' ); ?>
                </p>
              <?php endif; ?>

              <div class="workshop-start-date">
                <strong>Event starts:</strong>
                <?php the_field('workshop_start_date'); ?>
              </div>

              <div class="workshop-end-date">
                <strong>Event ends:</strong>
                <?php the_field('workshop_end_date'); ?>
              </div>

              <ul class="workshop-links">
                <li class="workshop-link">
                  <a href="<?php the_field('workshop_link'); ?>" target="_blank" class="btn btn-primary">
                    More Details
                  </a>
                </li>
              </ul>
            </section>

            <section class="wl--right">
              <div class="workshop-image">
                <img src="<?php the_field('workshop_photo'); ?>" alt="<?php the_field( 'workshop_name' ); ?>">
              </div>
            </section>

            <?php endwhile; else: ?>
              <p class="warning-text">There are no computer programs to show or something went wrong. Please try back again later.</p>
            <?php endif; ?>
          </li>
        </ul>

    </article>

    <aside class="bci--right wpc-page--inner-right">
      <?php get_template_part('partials/sidebar/resources-sidebar--workshops'); ?>
    </aside>
</section>

<?php get_footer(); ?>
