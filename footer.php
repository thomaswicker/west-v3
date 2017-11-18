
<footer id="footer-1" class="footer">

	<div class="container">


		<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">

			<div class="footerSection">
				<h5>Social Media</h5>
			</div><!-- /.subpage-title -->

			<ul class="social-links">

				<li><a class="facebook" href="https://www.facebook.com/pages/Western-EcoSystems-Technology-WEST-Inc/125604770807646"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="https://twitter.com/WestEcoSystems"><i class="fa fa-twitter"></i></a></li>
				<li><a class="linkedin" href="http://www.linkedin.com/company/1458419"><i class="fa fa-linkedin"></i></a></li>
				<li><a class="flickr" href="http://www.flickr.com/photos/58961170@N06/"><i class="fa fa-flickr"></i></a></li>

			</ul><!-- /.social-links -->

			<div class="twitterFooter">

				<?php if ( dynamic_sidebar('footer_left') ) : ?>

				<?php else: ?>
					<h5>Twitter</h5>
					<p>Install TwiGet Twitter Plugin and place widget to go here</p>
				<?php endif; ?>

			</div>


		</div><!-- /.col-md-3 -->

		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 footer_middle">

			<div class="footerSection2">
				<h5>News & Events</h5>
			</div><!-- /.subpage-title -->

			<article class="footerPostContainer">

			 <?php

                $args = array(
                    'post_type' => 'events',
                    'posts_per_page' => 3,

                );

                $the_query = new WP_Query( $args );
            ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <h2><?php the_title() ;?></h2>
              	<p><?php the_field ( 'description' ); ?></p>
              	<span><?php the_field( 'links' ); ?></span>

              	<hr style="border: 1px solid #dddddd;">

            <?php endwhile; else: ?>

                <p>There are no Events to show</p>

            <?php endif; ?>



        </article>

		</div><!-- /.col-md-6 footer_middle -->

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer_right">
			<div class="footerSection">
				<?php if ( dynamic_sidebar('footer_right') ) : ?>

				<?php else: ?>
					<p>There are no Flickr images to show</p>
				<?php endif; ?>
			</div><!-- /.subpage-title -->

		</div><!-- /.col-md-3 footer_right -->
	</div><!-- /.container -->

</footer><!-- /#footer-1 -->

<footer id="footer-2" class="footer">
	<div class="container">
		<div class="col-xs-12 col-sm-6 footer-info-wrapper">
			<span>WEST Inc. ©Copyright <?php echo date( 'Y' ); ?>  All Rights Reserved.</span>
		</div><!-- /.footer-info-wrapper -->
		<div class="col-xs-12 col-sm-6 footer-links-wrapper">
			<ul class="list-inline">
				<li><a href="http://www.xirimedia.com/" target="_blank">Site Design: XIRI Media</a></li>
			</ul>
		</div><!-- /.footer-links-wrapper -->
	</div><!-- /.container -->
</footer><!-- /#footer-2 -->


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


</body>

</html>
