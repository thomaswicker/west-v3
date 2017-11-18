<?php
/*
Template Name: Events Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper test">

<div id="contactUsRibbon"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

    <div class="container">
            
        <ul class="eventsBodyContainer col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <?php

                $args = array(
                    'post_type' => 'events'
                );

                $the_query = new WP_Query( $args );

            ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <li>
                <h2><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>
                <h3><?php the_field( 'subtitle' ); ?></h3>
                <hr style="border: 1px solid #dddddd;">
                <p><?php the_field( 'description' ); ?></p>
                <span><?php the_field( 'links' ); ?></span>

            </li>

            <?php endwhile; else: ?>
                
                <p>There are no posts or pages here</p>

            <?php endif; ?>

        </ul><!-- / eventsBodyContainer -->    
                                                                
    </div><!-- / container -->
    
</div><!-- / main-wrapper -->

<script>
    
// A $( document ).ready() block.
$( document ).ready(function() {
    $("h2 > a").each(function(){
    $(this).replaceWith($(this).html());
    });
});
</script>

<?php get_footer(); ?>