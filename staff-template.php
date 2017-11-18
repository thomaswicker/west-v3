<?php
/*
Template Name: Staff Landing Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container staff-landing-container">

  <section class="body-container--inner slc--inner">
    <h1 class="staff-landing-header">Our Staff</h1>

    <ul class="staff-landing-list">
      <?php

          $args = array(
              'post_type' => 'staff',
              'posts_per_page' => -1,
              'orderby'=>'title','order'=>'ASC'
          );

          $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <li class="staff-tile">
        <div class="staff-tile--left">
          <img src="<?php the_field( 'staff_member_photo' ); ?>" alt="Photo of <?php the_field( 'staff_member_short_name' ); ?>" class="staff-member-photo">
        </div>

        <div class="staff-tile--right">
          <h2 class="profile-name"><?php the_title(); ?></h2>

          <?php if( get_field('staff_member_title') ): ?>
            <h3 class="staff-member-job-title"><?php the_field( 'staff_member_title' ); ?></h3>
          <?php endif; ?>

          <?php if( get_field('staff_member_email_address') ): ?>
            <a href="mailto: <?php the_field( 'staff_member_email_address' ); ?>" class="btn btn-primary" alt="Email Me Button">Email</a>
          <?php endif; ?>

          <?php if( get_field('staff_member_profile_page') == 'yes' ): ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-secondary" alt="View Profile">View Profile</a>
          <?php endif; ?>
        </div>
      </li>

      <?php endwhile; else: ?>
        <div class="failure-message">There are no staff members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</div>
      <?php endif; ?>

    </ul>
  </section>

</section>

<?php get_footer(); ?>
