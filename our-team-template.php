<?php
/*
Template Name: Our Team Landing Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container our-team-landing-container">
  <section class="body-container--inner otlc--inner">
    <h1 class="our-team-landing-header">Our Team</h1>

    <?php

        $args = array(
            'post_type' => 'our_team',
            'orderby'=>'order_of_placement',
            'order'=>'ASC'
        );

        $the_query = new WP_Query( $args );

    ?>

    <section class="our-team--row-1">
      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php if( get_field('order_of_placement') == '1' ): ?>
          <article class="team-member-tile">
            <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-1" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

            <?php if( get_field('team_member_name') ): ?>
              <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
            <?php endif; ?>

            <?php if( get_field('team_member_job_title') ): ?>
              <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field('board_of_directors') ): ?>
              <h4 class="bod-title">Board of Directors</h4>
            <?php endif; ?>
          </article>
        <?php endif; ?>

        <?php if( get_field('order_of_placement') == '2' ): ?>
          <article class="team-member-tile">
            <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-2" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

            <?php if( get_field('team_member_name') ): ?>
              <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
            <?php endif; ?>

            <?php if( get_field('team_member_job_title') ): ?>
              <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field('board_of_directors') ): ?>
              <h4 class="bod-title">Board of Directors</h4>
            <?php endif; ?>
          </article>
        <?php endif; ?>


        <?php endwhile; else: ?>
          <article class="failure-message">
            <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
          </article>
        <?php endif; ?>
      </section>


      <section class="our-team--row-2">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php if( get_field('order_of_placement') == '3' ): ?>
            <article class="team-member-tile">
              <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-3" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

              <?php if( get_field('team_member_name') ): ?>
                <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
              <?php endif; ?>

              <?php if( get_field('team_member_job_title') ): ?>
                <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('board_of_directors') ): ?>
                <h4 class="bod-title">Board of Directors</h4>
              <?php endif; ?>
            </article>
          <?php endif; ?>

          <?php if( get_field('order_of_placement') == '4' ): ?>
            <article class="team-member-tile">
              <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank"class="team-member-photo tile-4" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

              <?php if( get_field('team_member_name') ): ?>
                <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
              <?php endif; ?>

              <?php if( get_field('team_member_job_title') ): ?>
                <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('board_of_directors') ): ?>
                <h4 class="bod-title">Board of Directors</h4>
              <?php endif; ?>
            </article>
          <?php endif; ?>

          <?php if( get_field('order_of_placement') == '5' ): ?>
            <article class="team-member-tile">
              <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-5" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

              <?php if( get_field('team_member_name') ): ?>
                <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
              <?php endif; ?>

              <?php if( get_field('team_member_job_title') ): ?>
                <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('board_of_directors') ): ?>
                <h4 class="bod-title">Board of Directors</h4>
              <?php endif; ?>
            </article>
          <?php endif; ?>

          <?php if( get_field('order_of_placement') == '6' ): ?>
            <article class="team-member-tile">
              <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-6" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

              <?php if( get_field('team_member_name') ): ?>
                <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
              <?php endif; ?>

              <?php if( get_field('team_member_job_title') ): ?>
                <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('board_of_directors') ): ?>
                <h4 class="bod-title">Board of Directors</h4>
              <?php endif; ?>
            </article>
          <?php endif; ?>


          <?php endwhile; else: ?>
            <article class="failure-message">
              <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
            </article>
          <?php endif; ?>
        </section>



        <section class="our-team--row-3">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('order_of_placement') == '7' ): ?>
              <article class="team-member-tile">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-7" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title">Board of Directors</h4>
                <?php endif; ?>
              </article>
            <?php endif; ?>

            <?php if( get_field('order_of_placement') == '8' ): ?>
              <article class="team-member-tile">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-8" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title">Board of Directors</h4>
                <?php endif; ?>
              </article>
            <?php endif; ?>

            <?php if( get_field('order_of_placement') == '9' ): ?>
              <article class="team-member-tile">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-9" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title">Board of Directors</h4>
                <?php endif; ?>
              </article>
            <?php endif; ?>

            <?php if( get_field('order_of_placement') == '10' ): ?>
              <article class="team-member-tile">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-10" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title">Board of Directors</h4>
                <?php endif; ?>
              </article>
            <?php endif; ?>


            <?php endwhile; else: ?>
              <article class="failure-message">
                <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
              </article>
            <?php endif; ?>
          </section>


    </section>
  </section>

<?php get_footer(); ?>
