<?php
/*
Template Name: Events __TEMPLATE __
*/
?>

<?php get_header(); ?>

<section class="body-container events-page-container">

  <?php get_template_part('partials/superhero/superhero-news-and-events'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--events">
    <?php get_template_part('partials/sm-nav'); ?>
  </div>

  <section class="body-container--inner events-page--inner">
    <article class="bci--left events-page--inner-left">
      <ul class="events-list">
          <?php
            $args = array(
                'post_type' => 'events'
            );
            $the_query = new WP_Query( $args );
          ?>

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <h2><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>
                <h3><?php the_field( 'subtitle' ); ?></h3>
                <hr style="border: 1px solid #dddddd;">
                <p><?php the_field( 'description' ); ?></p>
                <span><?php the_field( 'links' ); ?></span>
            </li>

            <?php endwhile; else: ?>
              <p class="warning-text">There are no posts or pages here</p>
          <?php endif; ?>
      </ul><!-- / eventsBodyContainer -->
    </article>

    <aside class="bci--right events-page--inner-right">
      <?php get_template_part('partials/sidebar/about-sidebar'); ?>
    </aside>
  </section>

</section>
<?php get_footer(); ?>
