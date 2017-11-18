<?php
/*
Template Name: Professional Profiles Landing Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

  <section class="professional-profiles-container">

    <header class="professional-profiles-header">Our Team</header>

    <ul class="professional-profiles-list">
      <?php

          $args = array(
              'post_type' => 'profiles'
          );

          $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <li class="profile-tile">
        <a href="<?php the_permalink() ;?>">
          <div class="pt--left">
            <img src="<?php the_field( 'profile_photo' ); ?>" alt="Photo of <?php the_field( 'profile_shortname' ); ?>">
          </div>

          <div class="pt--middle">
            <h2 class="profile-name"><?php the_title() ;?></h2>
            <h3 class="profile-job-title"><?php the_field( 'profile_job_title' ); ?></h3>
          </div>

          <div class="pt--right">
            <i class="fa fa-arrow-right"></i>
          </div>
        </a>
      </li>

      <?php endwhile; else: ?>
          <p>There are no profiles to show or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</p>
      <?php endif; ?>

    </ul>

    <section class="view-staff-directory-container">
      <a href="http://www.west-inc.com/staff-directory" class="btn btn-success">
        <i style="padding: 0px 8px 0px 0px;" class="fa fa-user"></i>
        <span>View Full Staff Directory</span>
      </a>
    </section>

  </section>

<?php get_footer(); ?>
