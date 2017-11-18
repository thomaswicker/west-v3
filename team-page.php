<?php
/*
Template Name: Team Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-team">

  <header class="team-title">

    <div id="contactUsRibbonTeam">
      <a href="http://www.west-inc.com/locations/" class="btn btn-success">
        <i class="fa fa-phone" style="margin-right: 8px"></i>Contact Us
      </a>
    </div>

    <div class="team-title">
      <h5>Senior Management & Board of Directors</h5>
      <h6>Click on the Names Below to View Team Member Profiles</h6>
    </div>

  </header>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
      <hr>

  <?php endwhile; else: ?>

  <p>There are no posts or pages here</p>

  <?php endif; ?>

  <section style="float: left; width: 100%; margin-top: 20px; padding-top: 20px; padding-bottom: 20px; text-align: center;">
    <a href="http://www.west-inc.com/staff-directory" class="btn btn-success" style="padding: 12px 30px">
      <i style="padding: 0px 8px 0px 0px;" class="fa fa-user"></i>View Full Staff Directory
    </a>
  </section>

</section><!-- /.main-wrapper-team -->

<?php get_footer(); ?>
