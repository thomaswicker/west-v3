<?php
/*
Template Name: Reports and Programs Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-reports">

<div id="contactUsRibbonReports"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

    <div class="container">

        <div class="row">

            <section id="reports-wrapper-main">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>
                <hr>

                <?php endwhile; else: ?>
    
                <p>There are no posts or pages here</p>

                <?php endif; ?>
                                                            
            </section> <!-- / reports-wrapper-main -->   
          
        </div><!-- / row -->

    </div><!-- / container -->

</section><!-- / main-wrapper-reports -->

<?php get_footer(); ?>