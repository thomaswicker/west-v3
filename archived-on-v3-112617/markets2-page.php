<?php
/*
Template Name: Markets2 Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-markets">

    <div id="contactUsRibbonMarkets">
        <a href="http://www.west-inc.com/locations/">
            <button class="btn btn-success">
                <i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us
            </button>
        </a>
    </div>

    <div class="container" style="overflow-x: hidden;">

        <div style="overflow-x: hidden;">

            <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="overflow-x: hidden;">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php the_content(); ?>

                <?php endwhile; else: ?>

                <?php endif; ?>

            </section>

        </div>

    </div><!-- / container -->

</section><!-- / main-wrapper-markets-->

<?php get_footer(); ?>
