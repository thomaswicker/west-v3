<?php get_header(); ?>

<section class="main-wrapper-index">

<div id="contactUsRibbonIndex"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

<section class="featuredImageSlider"> 
	<?php if( function_exists('cyclone_slider') ) cyclone_slider('westslides'); ?>
</section>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <hr>

    <?php endwhile; else: ?>

    <p>There are no posts or pages here</p>

    <?php endif; ?>


 </section><!-- /.main-wrapper-index --> 


<?php get_footer(); ?>