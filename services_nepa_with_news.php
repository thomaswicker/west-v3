<?php
/*
Template Name: Services => NEPA => with NEWS
*/
?>

<?php get_header(); ?>

<section class="main-wrapper">

	<div id="contactUsRibbonServices">
		<a href="http://www.west-inc.com/locations/" class="btn btn-success">
			<i class="fa fa-phone" style="margin-right: 8px"></i>Contact Us
		</a>
	</div>

	<section id="main-and-sidebar">
		<div class="container">
				<div class="col-md-8">
					<div class="services-wrapper">

						<article class="services">

							<!-- BEGIN PARTIAL CONTENT COMING FROM WORDPRESS INTERFACE -->

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>

							<?php endwhile; else: ?>

								<p>There are no posts or pages here</p>

							<?php endif; ?>

							<!-- END PARTIAL CONTENT COMING FROM WORDPRESS INTERFACE -->

						</article><!--END .services -->

					</div><!--END .services-wrapper -->

				</div><!--END .col-md-8 -->

				<aside class="col-md-4 sidebar">

					<!-- ################## BEGIN Aerial Survey Recent News Box ################## -->

					<div class="services-title-recent-news">
						<h5 class="ourServicesHeader">Recent News</h5>
					</div>

					<ul class="services-news-box">

						<?php

						$args = array(
							'post_type' => 'news',
							'cat' => '17'
						);

						$the_query = new WP_Query( $args );

						?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<li>
								<h3><i class="fa fa-newspaper-o"></i><?php the_field( 'news_title' ); ?></h3>
								<p><?php the_field( 'news_content' ); ?></p>
							</li>

						<?php endwhile; else: ?>

							<p>There are no posts or pages here</p>

						<?php endif; ?>

					</ul>

					<!-- ################## END Aerial Survey Recent News Box ################## -->

					<section class="widget categories services-sidebar-box">

						<div class="services-title">
							<h5 class="ourServicesHeader">Our Services</h5>
						</div>

						<ul class="servicesSidebar">
							<li>
								<a href="http://www.west-inc.com/avian-species-research-management/"><i class="fa fa-angle-right"></i>Avian Species Research & Management</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/aerial-survey-telemetry/"><i class="fa fa-angle-right"></i>Aerial Survey & Telemetry</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/bat-research-monitoring/"><i class="fa fa-angle-right"></i>Bat Research & Monitoring</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/big-game-research-monitoring/"><i class="fa fa-angle-right"></i>Big Game Research & Monitoring</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/conservation-mitigation-banking/"><i class="fa fa-angle-right"></i>Conservation & Mitigation Banking</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/desert-tortoise-management/"><i class="fa fa-angle-right"></i>Desert Tortoise Management</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/gis/"><i class="fa fa-angle-right"></i>GIS</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/habitat-conservation-plans/"><i class="fa fa-angle-right"></i>Habitat Conservation Plans</a>
							</li>

							<li class="sidebarActive">
								<a href="http://www.west-inc.com/nepa/"><i class="fa fa-angle-right"></i>NEPA</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/nrda/"><i class="fa fa-angle-right"></i>NRDA</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/statistics-biometrics/"><i class="fa fa-angle-right"></i>Statistics & Biometrics</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/vegetation-sampling-plant-surveys/"><i class="fa fa-angle-right"></i>Vegetation Sampling & Plant Surveys</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/wetlands-water-quality/"><i class="fa fa-angle-right"></i>Wetlands & Water Quality</a>
							</li>

							<li>
								<a href="http://www.west-inc.com/wildlife-research-management/"><i class="fa fa-angle-right"></i>Wildlife Research & Management</a>
							</li>

						</ul>

					</section><!-- / widget categories -->

					<!-- ############### BEGIN PROJECT PROFILES ############### -->

					<?php
						$args = array(
							'post_type' => 'projectprofiles',
							'cat' => '17'
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

					<!-- ############### END PROJECT PROFILES ############### -->
				</aside><!-- / col-md-4 sidebar -->

		</div><!-- / container -->

	</section><!-- / main-and-sidebar -->

</section><!-- / main-wrapper-->

<?php get_footer(); ?>
