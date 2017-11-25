<?php
/*
Template Name: Our Team Landing Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container our-team-landing-container">

  <?php get_template_part('partials/superhero/superhero-team'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--team"><?php get_template_part('partials/sm-nav'); ?></div>

  <section class="body-container--inner otlc--inner">
    <article class="bci--left otlc-page--inner-left">
      <header class="otlc--header">
        <?php if( get_field('page_title') ): ?>
          <h1 class="main-title"><?php the_field( 'page_title' ); ?></h1>
        <?php endif; ?>

        <?php if( get_field('page_subtitle') ): ?>
          <h2 class="main-subtitle"><?php the_field( 'page_subtitle' ); ?></h2>
        <?php endif; ?>
      </header>

      <?php
        $args = array(
            'post_type' => 'our_team',
            'orderby'=>'order_of_placement',
            'order'=>'ASC'
        );

        $the_query = new WP_Query( $args );
      ?>

      <section class="our-team--row our-team--row-1">
        <div class="our-team--row-1--inner">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('order_of_placement') == '1' ): ?>
              <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-1" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title"></h4>
                <?php endif; ?>

                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                  <i class="fa fa-arrow-right"></i>
                </a>

              </article>
            <?php endif; ?>

            <?php if( get_field('order_of_placement') == '2' ): ?>
              <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-2" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                <?php if( get_field('team_member_name') ): ?>
                  <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                <?php endif; ?>

                <?php if( get_field('team_member_job_title') ): ?>
                  <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                <?php endif; ?>

                <?php if( get_field('board_of_directors') ): ?>
                  <h4 class="bod-title"></h4>
                <?php endif; ?>

                <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </article>
            <?php endif; ?>


            <?php endwhile; else: ?>
              <article class="failure-message">
                <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
              </article>
            <?php endif; ?>
          </div>
        </section>


        <section class="our-team--row our-team--row-2">
          <div class="our-team--row-2--inner">
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <?php if( get_field('order_of_placement') == '3' ): ?>
                <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-3" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                  <?php if( get_field('team_member_name') ): ?>
                    <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                  <?php endif; ?>

                  <?php if( get_field('team_member_job_title') ): ?>
                    <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('board_of_directors') ): ?>
                    <h4 class="bod-title"></h4>
                  <?php endif; ?>

                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </article>
              <?php endif; ?>

              <?php if( get_field('order_of_placement') == '4' ): ?>
                <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank"class="team-member-photo tile-4" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                  <?php if( get_field('team_member_name') ): ?>
                    <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                  <?php endif; ?>

                  <?php if( get_field('team_member_job_title') ): ?>
                    <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('board_of_directors') ): ?>
                    <h4 class="bod-title"></h4>
                  <?php endif; ?>

                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </article>
              <?php endif; ?>

              <?php if( get_field('order_of_placement') == '5' ): ?>
                <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-5" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                  <?php if( get_field('team_member_name') ): ?>
                    <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                  <?php endif; ?>

                  <?php if( get_field('team_member_job_title') ): ?>
                    <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('board_of_directors') ): ?>
                    <h4 class="bod-title"></h4>
                  <?php endif; ?>

                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </article>
              <?php endif; ?>

              <?php if( get_field('order_of_placement') == '6' ): ?>
                <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-6" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                  <?php if( get_field('team_member_name') ): ?>
                    <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                  <?php endif; ?>

                  <?php if( get_field('team_member_job_title') ): ?>
                    <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('board_of_directors') ): ?>
                    <h4 class="bod-title"></h4>
                  <?php endif; ?>

                  <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </article>
              <?php endif; ?>


              <?php endwhile; else: ?>
                <article class="failure-message">
                  <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
                </article>
              <?php endif; ?>
            </div>
          </section>



          <section class="our-team--row our-team--row-3">
            <div class="our-team--row-3--inner">
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php if( get_field('order_of_placement') == '7' ): ?>
                  <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-7" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                    <?php if( get_field('team_member_name') ): ?>
                      <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('team_member_job_title') ): ?>
                      <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                    <?php endif; ?>

                    <?php if( get_field('board_of_directors') ): ?>
                      <h4 class="bod-title"></h4>
                    <?php endif; ?>

                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </article>
                <?php endif; ?>

                <?php if( get_field('order_of_placement') == '8' ): ?>
                  <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-8" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                    <?php if( get_field('team_member_name') ): ?>
                      <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('team_member_job_title') ): ?>
                      <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                    <?php endif; ?>

                    <?php if( get_field('board_of_directors') ): ?>
                      <h4 class="bod-title"></h4>
                    <?php endif; ?>

                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </article>
                <?php endif; ?>

                <?php if( get_field('order_of_placement') == '9' ): ?>
                  <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-9" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                    <?php if( get_field('team_member_name') ): ?>
                      <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('team_member_job_title') ): ?>
                      <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                    <?php endif; ?>

                    <?php if( get_field('board_of_directors') ): ?>
                      <h4 class="bod-title"></h4>
                    <?php endif; ?>

                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </article>
                <?php endif; ?>

                <?php if( get_field('order_of_placement') == '10' ): ?>
                  <article class="team-member-tile <?php the_field( 'team_member_shortname' ); ?>">
                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-member-photo tile-10" style="background-image: url('<?php the_field( 'team_member_photo' ); ?>')"></a>

                    <?php if( get_field('team_member_name') ): ?>
                      <h1 class="team-member-name"><?php the_field( 'team_member_name' ); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('team_member_job_title') ): ?>
                      <h3 class="team-member-job-title"><?php the_field( 'team_member_job_title' ); ?></h3>
                    <?php endif; ?>

                    <?php if( get_field('board_of_directors') ): ?>
                      <h4 class="bod-title"></h4>
                    <?php endif; ?>

                    <a href="<?php the_field( 'team_member_bio_link' ); ?>" target="_blank" class="team-photo-arrow">
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </article>
                <?php endif; ?>


                <?php endwhile; else: ?>
                  <article class="failure-message">
                    <h2>There are no team members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</h2>
                  </article>
                <?php endif; ?>
              </div>
            </section>
          </article>

        <aside class="bci--right otlc-page--inner-right">
          <div class="sidebar-container">
          	<h3>About WEST</h3>

          	<ul class="subnav-sidebar team">
          		<li class="about-subnav--profile">
          			<a href="http://www.west-inc.com/about/profile-page/">
          				<i class="fa fa-chevron-right"></i>
          				Profile
          			</a>
          		</li>

          		<li class="about-subnav--team">
          			<a href="http://www.west-inc.com/about/our-team/">
          				<i class="fa fa-chevron-right"></i>
          				WEST Core Team
          			</a>
          		</li>

          		<li class="about-subnav--staff">
          			<a href="http://www.west-inc.com/about/staff/">
          				<i class="fa fa-chevron-right"></i>
          				Our Staff
          			</a>
          		</li>

          		<li class="about-subnav--culture">
          			<a href="http://www.west-inc.com/about/culture-page/">
          				<i class="fa fa-chevron-right"></i>
          				Culture
          			</a>
          		</li>

          		<li class="about-subnav--safety">
          			<a href="http://www.west-inc.com/about/safety-page/">
          				<i class="fa fa-chevron-right"></i>
          				Health & Safety
          			</a>
          		</li>

          		<li class="about-subnav--news">
          			<a href="http://www.west-inc.com/news-events/">
          				<i class="fa fa-chevron-right"></i>
          				News & Events
          			</a>
          		</li>

          		<li class="about-subnav--westulc">
          			<a href="http://west-ulc.ca/" target="_blank">
          				<i class="fa fa-chevron-right"></i>
          				WEST, ULC Canada
          			</a>
          		</li>

          		<li class="about-subnav--locations last-item">
          			<a href="http://www.west-inc.com/locations/">
          				<i class="fa fa-chevron-right"></i>
          				Locations
          			</a>
          		</li>
          	</ul>
          </div>

        </aside>
      </section>
    </section>

    <?php get_footer(); ?>
