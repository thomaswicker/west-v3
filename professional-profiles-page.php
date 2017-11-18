<?php
/*
Template Name: Professional Profiles Template
*/
?>

<?php get_header(); ?>

    <div class="main-wrapper-personnel">

        <div id="contactUsRibbonPersonnel"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

        <div class="container">

            <div class="professional-profiles-header">
            </div>

            <div class="professionalProfilesBodyContainer col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div id="professionalProfilesContainer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php endwhile; else: ?>

                    <p>There are no posts or pages here</p>

                    <?php endif; ?>

                </div><!--END #professionalProfilesContainer -->

                <section style="float: left; width: 100%; margin-top: 10px; padding-top: 20px; padding-bottom: 20px; text-align: center;">
                  <a href="http://www.west-inc.com/staff-directory" class="btn btn-success" style="padding: 12px 30px">
                    <i style="padding: 0px 8px 0px 0px;" class="fa fa-user"></i>View Full Staff Directory
                  </a>
                </section>

            </div><!--END #professionalProfilesBodyContainer -->

        </div><!--END .container -->

    </div><!--END .main-wrapper-personnel -->

<?php get_footer(); ?>
