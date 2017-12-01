
<footer id="footer-1" class="footer">
	<section class="footer--left">

		<h4><i class="fa fa-twitter"></i> Twitter Feed</h4>

		<div class="twitter-footer">
			<?php if ( dynamic_sidebar('footer_left') ) : ?>
			<?php else: ?>
				<h5>WEST Twitter Feed</h5>
				<p class="warning-text">Something went wrong or there are no tweets to display. Please try again later.</p>
			<?php endif; ?>
		</div>
	</section>

	<section class="footer--middle">
		<h4><i class="fa fa-newspaper-o"></i> News & Events</h4>

		<ul class="footer-events">
			<?php
				$args = array(
			  	'post_type' => 'events',
			  	'posts_per_page' => 5
				);

				$the_query = new WP_Query( $args );
			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li>
					<h2><?php the_title() ;?></h2>

					<?php if( get_field('description') ): ?>
						<p><?php the_field( 'description' ); ?></p>
					<?php endif; ?>

					<?php if( get_field('links') ): ?>
						<span><?php the_field( 'links' ); ?></span>
					<?php endif; ?>
				</li>

				<hr style="border: 1px solid #dddddd;">

			<?php endwhile; else: ?>
			  <p class="warning-text">There are no Events to show or something went wrong. Please try again later.</p>
			<?php endif; ?>
	  </ul>

	</section>

	<section class="footer--right">
		<h4><i class="fa fa-camera"></i> WEST Photos from Flickr</h4>

		<div class="flickr-photos">

			<?php if ( dynamic_sidebar('footer_right') ) : ?>

			<?php else: ?>
				<p class="warning-text">There are no Flickr images to show or something went wrong. Please try again later.</p>
			<?php endif; ?>
		</div>
	</section>
</footer>





<footer id="footer-2" class="footer-alt">
	<section class="footer-alt--left">
		WEST Inc. ©Copyright <?php echo date( 'Y' ); ?>  All Rights Reserved.
	</section>

	<section class="footer-alt--right">
		<a href="http://www.xiri.io/" target="_blank">Site Design: XIRI Media</a>
	</section>
</footer>


<script src="http://www.west-inc.com/wp-content/themes/west_theme/js/jquery.isotope.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
	// jQuery Cycle Plugin for Featured Images
	$("#cycle").cycle();

    // Isotope Portfolio
    var container = $('#isotope-portfolio-container');
    var filter = $('.portfolio-filter');

    $(window).load(function () {
        // Initialize Isotope
        container.isotope({
            itemSelector: '.portfolio-item-wrapper1'
        });
        $('.portfolio-filter a').click(function () {
            var selector = $(this).attr('data-filter');
            container.isotope({ filter: selector });
        });
        filter.find('a').click(function () {
            var selector = $(this).attr('data-filter');
            filter.find('a').parent().removeClass('active');
            $(this).parent().addClass('active');
        });
    });
    $(window).smartresize(function () {
        container.isotope('reLayout');
    });
 });

</script>



<?php wp_footer(); ?>

<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0024/5642.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
