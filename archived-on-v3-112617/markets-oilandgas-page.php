<?php
/*
Template Name: Markets Oil and Gas Template
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

                <ul class="marketsSidebar">
                 	<li><i class="fa fa-angle-right"></i>Renewable</li>
                  <ul class="marketsSidebarInner">
                   	<li><i class="fa fa-caret-right"></i><a href="http://www.west-inc.com/energy">Wind</a></li>
                   	<li><i class="fa fa-caret-right"></i><a href="http://www.west-inc.com/solar">Solar</a></li>
                   	<li><i class="fa fa-caret-right"></i><a href="http://www.west-inc.com/international">International</a></li>
                  </ul>
                 	<li><i class="fa fa-angle-right"></i><a href="http://www.west-inc.com/power-lines">Power Lines</a></li>
                 	<li class="marketsSidebarActive"><i class="fa fa-angle-right"></i><a href="http://www.west-inc.com/oil-and-gas">Oil and Gas</a></li>
                 	<li><i class="fa fa-angle-right"></i><a href="http://www.west-inc.com/pipelines">Pipelines</a></li>
                 	<li><i class="fa fa-angle-right"></i><a href="http://www.west-inc.com/mining">Mining</a></li>
                </ul>

                <!-- ############### BEGIN PROJECT PROFILES ############### -->

                <?php
                $args = array(
                  'post_type' => 'projectprofiles',
                  'cat' => '29'
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                  <section class="project-profiles-header">
                    <h5>Project Profile</h5>
                  </section>

                  <section class="project-profiles-sidebar-container">

                  <div class="ppsc--inner">
                    <a href="<?php the_field('projectprofileimg'); ?>">
                      <img src="<?php the_field('projectprofileimg'); ?>" alt="<?php the_title(); ?>" />
                    </a>
                  </div>

                  <?php endwhile; else : ?>
                    <div class="ppsc--inner">
                      <p></p>
                    </div>
                  <?php endif; ?>

                </section>
              </section>
        </div>

    </div><!-- / container -->

</section><!-- / main-wrapper-markets-->

<?php get_footer(); ?>
