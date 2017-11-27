<?php
/*
Template Name: About Careers Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper">

  <div id="contactUsRibbon"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

  <div class="container">

    <section class="aboutWestCareersBodyContainer">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
      <hr>

      <?php endwhile; else: ?>

      <p>There are no posts or pages here</p>

      <?php endif; ?>

    </section><!-- /.aboutWestCareersBodyContainer -->

  </div>

</section><!-- /.main-wrapper -->

<?php get_footer(); ?>
