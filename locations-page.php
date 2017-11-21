<?php
/*
Template Name: Locations Page Template
*/
?>

<?php get_header(); ?>

<section class="main-wrapper-locations">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
              <hr>

            <?php endwhile; else: ?>
              <p class="warning-text">There are no posts or pages or something went wrong. Please try again later.</p>
            <?php endif; ?>

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
