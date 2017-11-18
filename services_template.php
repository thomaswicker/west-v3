<?php
/*
Template Name: Services Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="services-page-container">
	<?php if( get_field('main_header_image') ): ?>
		<header class="spc--header">
			<?php if( get_field('page_title') ): ?>
				<div class="main-header-title <?php the_field( 'subnav_active_label' ); ?>" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
				</div>
			<?php endif; ?>
		</header>
	<?php endif; ?>

	<section class="spc--inner">
		<article class="spc--inner-left">
			<?php if( get_field('page_title') ): ?>
				<h1 class="main-title">
					<?php the_field( 'page_title' ); ?>
				</h1>
			<?php endif; ?>

			<?php if( get_field('body_content') ): ?>
				<section class="body-content">
					<div class="bc--left">
						<?php the_field( 'body_content' ); ?>

						<?php if( get_field('title_of_bullet_list') ): ?>
							<h4 class="title-of-list">
								<?php the_field( 'title_of_bullet_list' ); ?>
							</h4>
						<?php endif; ?>

						<!-- BEGIN CODE SNIPPET THAT LOOPS THROUGH BULLED CONTENT FROM THE WORDPRESS UI -->
						<?php if( have_rows('bulleted_content') ): ?>

							<ul class="bulleted-list">

							<?php while( have_rows('bulleted_content') ): the_row();

								// vars
								$bulleteditem = get_sub_field('bulleted_item');

								?>

								<li class="bulleted-item">
									<?php echo $bulleteditem; ?>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>
						<!-- END CODE SNIPPET THAT LOOPS THROUGH BULLED CONTENT FROM THE WORDPRESS UI -->
						
					</div>
			<?php endif; ?>

			<?php if( get_field('image_inside_body_content') ): ?>
				<div class="bc--right">
					<img class='services-feature-image' src='<?php the_field( 'image_inside_body_content' ); ?>' alt="<?php the_field( 'page_title' ); 	?> Image">
				</div>
			<?php endif; ?>
			</section>

			<?php if( get_field('page_subtitle') ): ?>
				<h2 class="subtitle">
					<?php the_field( 'page_subtitle' ); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_field('body_content_extra_section') ): ?>
				<p class="body-content-extra-section">
					<?php the_field( 'body_content_extra_section' ); ?>
				</p>
			<?php endif; ?>

		</article>

		<aside class="spc--inner-right">
			<?php if( get_field('news') ): ?>
				<section class="recent-news-container">
					<h3>Recent News</h3>

					<section class="spc--right-news">
						<?php
							$post_objects = get_field('news');

							if( $post_objects ): ?>
							    <ul>
							    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post); ?>
							        <li>
												<h4><?php the_field( 'news_title' ); ?></h4>
												<p><?php the_field('news_content'); ?></p>
							        </li>
							    <?php endforeach; ?>
							    </ul>
							    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif;

							/*
							*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
							*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
							*/

							$post_objects = get_field('news');

							if( $post_objects ): ?>
							    <ul>
							    <?php foreach( $post_objects as $post_object): ?>
							        <li>
												<h4><a href="<?php the_permalink(); ?>"><?php the_field( 'news_title' ); ?></a></h4>
												<p><?php the_field('news_content'); ?></[span]>
							        </li>
							    <?php endforeach; ?>
							    </ul>
							<?php endif;
						?>
					</section>
				</section>
			<?php endif; ?>

			<section class="services-subnav-container">
				<h3>Our Services</h3>

				<ul class="services-subnav-sidebar <?php the_field( 'subnav_active_label' ); ?>">
					<li class="avianspeciesresearchandmanagement-link">
						<a href="http://www.west-inc.com/avian-species-research-and-management/">
							Avian Species Research & Management
						</a>
					</li>

					<li class="aerialsurveyandtelemetry-link">
						<a href="http://www.west-inc.com/services/aerial-survey-and-telemetry/">
							Aerial Survey & Telemetry
						</a>
					</li>

					<li class="batresearchandmonitoring-link">
						<a href="http://www.west-inc.com/services/bat-research-and-monitoring/">
							Bat Research & Monitoring
						</a>
					</li>

					<li class="biggameresearchandmonitoring-link">
						<a href="http://www.west-inc.com/services/big-game-research-and-management/">
							Big Game Research & Monitoring
						</a>
					</li>

					<li class="conservationandmitigationbanking-link">
						<a href="http://www.west-inc.com/services/conservation-and-mitigation-banking/">
							Conservation & Mitigation Banking
						</a>
					</li>

					<li class="deserttortoisemanagement-link">
						<a href="http://www.west-inc.com/services/desert-tortoise-management/">
							Desert Tortoise Management
						</a>
					</li>

					<li class="gis-link">
						<a href="http://www.west-inc.com/services/geographic-information-systems/">
							GIS
						</a>
					</li>

					<li class="habitatconservationplans-link">
						<a href="http://www.west-inc.com/services/habitat-conservation-plans/">
							Habitat Conservation Plans
						</a>
					</li>

					<li class="nepa-link">
						<a href="http://www.west-inc.com/services/national-environmental-policy-act/">
							NEPA
						</a>
					</li>

					<li class="nrda-link">
						<a href="http://www.west-inc.com/services/natural-resource-damage-assessments">
							NRDA
						</a>
					</li>

					<li class="statisticsandbiometrics-link">
						<a href="http://www.west-inc.com/services/statistics-and-biometrics/">
							Statistics & Biometrics
						</a>
					</li>

					<li class="vegetationsamplingandplantsurveys-link">
						<a href="http://www.west-inc.com/services/vegetation-sampling-and-plant-surveys/">
							Vegetation Sampling & Plant Surveys
						</a>
					</li>

					<li>
						<li class="wetlandsandwaterquality-link">
							<a href="http://www.west-inc.com/services/wetlands-and-water-quality">
								Wetlands & Water Quality
							</a>
						</a>
					</li>

					<li class="wildliferesearchandmanagement-link last-link">
						<a href="http://www.west-inc.com/services/wildlife-research-and-management/">
							Wildlife Research & Management
						</a>
					</li>

				</ul>
			</section>


			<?php if( have_rows('project_profiles') ): ?>
				<div class="project-profiles-container">
					<h3>Project Profiles</h3>

						<ul class="project-profiles">
							<?php while( have_rows('project_profiles') ): the_row();

								// vars
								$image = get_sub_field('project_profile_image');

								?>

								<li class="detail">

									<?php if( $image ): ?>
										<a href="<?php echo $image; ?>" target="_blank">
											<img class="services-feature-image" src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
										</a>
									<?php endif; ?>

								    <?php echo $content; ?>

								</li>
								<?php endwhile; ?>
							</ul>
						</div>
				<?php endif; ?>

		</aside>
	</section>

</section>

<?php get_footer(); ?>
