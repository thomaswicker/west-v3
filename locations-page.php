<?php
/*
Template Name: Locations Page Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-locations">

<div id="contactUsRibbonLocations"><button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i style="padding: 0px 8px 0px 0px;" class="fa fa-search"></i>View All Locations</button></div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>
                <hr>

            <?php endwhile; else: ?>
    
            <p>There are no posts or pages here</p>

            <?php endif; ?>

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /#contact-us -->

</div><!-- /.main-wrapper -->

<?php get_footer(); ?>