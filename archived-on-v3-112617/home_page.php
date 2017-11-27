<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-index">

   <div id="contactUsRibbonServices">
		 <a href="http://www.west-inc.com/locations/" class="btn btn-success">
			 <i class="fa fa-phone" style="margin-right: 8px"></i>
       <span>Contact Us</span>
		 </a>
	 </div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
      <hr>

  <?php endwhile; else: ?>

  <p>There are no posts or pages here</p>

  <?php endif; ?>

 </section><!-- /#action-box -->

</section><!-- /.main-wrapper-index -->

<?php get_footer(); ?>
