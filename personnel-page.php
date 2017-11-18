<?php
/*
Template Name: Personnel Template
*/
?>

<?php get_header(); ?>
           
        <div id="main-wrapper-personnel" class="main-wrapper-personnel">

            <div id="contactUsRibbonPersonnel"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>
                
            <section id="action-box">
                    
                <div class="container">
                        
                    <div class="personnelBodyContainer">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php endwhile; else: ?>
            
                    <p>There are no posts or pages here</p>

                    <?php endif; ?>

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /#contact-us -->

</div><!-- /.main-wrapper -->

<?php get_footer(); ?>