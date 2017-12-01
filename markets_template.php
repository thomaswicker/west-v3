<?php
/*
Template Name: Markets Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="markets-page-container">
	<?php if( get_field('main_header_image') ): ?>
		<header class="mpc--header">
			<?php if( get_field('page_title') ): ?>
				<div class="main-header-title <?php the_field( 'subnav_active_label' ); ?>" style="background-image: url('<?php the_field( 'main_header_image' ); ?>')">
				</div>
			<?php endif; ?>
		</header>
	<?php endif; ?>

	<a href="http://www.west-inc.com/locations/" class="contact-us-btn markets btn btn-primary btn-small">
		<i class="fa fa-phone"></i>
		<span>Contact Us</span>
	</a>

	<?php get_template_part('partials/sm-nav'); ?>

	<section class="mpc--inner">
		<article class="mpc--inner-left">
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
					<img class='markets-feature-image' src='<?php the_field( 'image_inside_body_content' ); ?>' alt="<?php the_field( 'page_title' ); 	?> Image">
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
											<img class="markets-feature-image" src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
										</a>
									<?php endif; ?>

								    <?php echo $content; ?>

								</li>
								<?php endwhile; ?>
							</ul>
						</div>
				<?php endif; ?>
		</article>

		<aside class="mpc--inner-right">
			<section class="markets-subnav-container">

				<?php if( get_field('parent_category') == 'energy' ): ?>
					<h3>Energy Resources</h3>

					<ul class="markets-subnav-sidebar <?php the_field( 'subnav_active_label' ); ?>">
						<li class="renewable-header">
							Renewable Energy
						</li>
						<ul class="mss--inner">
							<li class="windpower-link">
								<a href="http://www.west-inc.com/markets/wind-power/">
									Wind Power
								</a>
							</li>

							<li class="solarpower-link">
								<a href="http://www.west-inc.com/markets/solar-power/">
									Solar Power
								</a>
							</li>

							<li class="internationalmarkets-link">
								<a href="http://www.west-inc.com/markets/international-markets/">
									International Markets
								</a>
							</li>
						</ul>

						<li class="powerlines-link">
							<a href="http://www.west-inc.com/markets/power-lines/">
								Power Lines
							</a>
						</li>

						<li class="oilandgas-link">
							<a href="http://www.west-inc.com/markets/oil-and-gas/">
								Oil and Gas
							</a>
						</li>

						<li class="pipelines-link">
							<a href="http://www.west-inc.com/markets/pipelines/">
								Pipelines
							</a>
						</li>

						<li class="mining-link">
							<a href="http://www.west-inc.com/markets/mining/">
								Mining
							</a>
						</li>
					</ul>
				<?php endif; ?>

				<?php if( get_field('parent_category') == 'government' ): ?>
					<h3>Goverments Resources</h3>

					<ul class="markets-subnav-sidebar <?php the_field( 'subnav_active_label' ); ?>">
						<li class="government-link">
							<a href="http://www.west-inc.com/markets/government/">
								Government
							</a>
						</li>

						<li class="usfws-link">
							<a href="http://www.west-inc.com/markets/us-fish-and-wildlife-service/">
								USFWS
							</a>
						</li>

						<li class="blm-link">
							<a href="http://www.west-inc.com/markets/bureau-of-land-management/">
								BLM
							</a>
						</li>

						<li class="usforestservice-link">
							<a href="http://www.west-inc.com/markets/us-forest-service/">
								US Forest Service
							</a>
						</li>

						<li class="armycorpsofengineers-link">
							<a href="http://www.west-inc.com/markets/army-corps-engineers/">
								Army Corps of Engineers
							</a>
						</li>
					</ul>
				<?php endif; ?>

				<?php if( get_field('parent_category') == 'infrastructure' ): ?>
					<h3>Infrastructure Resources</h3>

					<ul class="markets-subnav-sidebar <?php the_field( 'subnav_active_label' ); ?>">
						<li class="infrastructure-link">
							<a href="http://www.west-inc.com/markets/infrastructure/">
								Infrastructure
							</a>
						</li>

						<li class="transportation-link">
							<a href="http://www.west-inc.com/markets/transportation/">
								Transportation
							</a>
						</li>

						<li class="damsandreservoirs-link">
							<a href="http://www.west-inc.com/markets/dams-and-reservoirs/">
								Dams & Reservoirs
							</a>
						</li>
					</ul>
				<?php endif; ?>
			</section>

			<section class="representative-clients">
				<h3>Representative Clients</h3>

				<ul class="list-of-clients">
					<li>Alameda County, CA</li>
					<li>Bonneville Power Administration</li>
					<li>Bureau of Indian Affairs</li>
					<li>Bureau of Land Management</li>
					<li>City of Buffalo, WY</li>
					<li>City of Casper, WY</li>
					<li>City of Cheyenne, WY</li>
					<li>City of Fort Collins, CO</li>
					<li>City of Greeley, CO</li>
					<li>City of Laramie, WY</li>
					<li>Atlantic Richfield CNFER – Minister of Natural Resources</li>
					<li>Denali National Park</li>
					<li>Department of Energy – Casper, WY</li>
					<li>Dickinson County Baseline</li>
					<li>F.E. Warren AFB</li>
					<li>Federal Highway Administration</li>
					<li>Government of the Northwest Territories</li>
					<li>Kittitas County, Washington</li>
					<li>Klickitat County, Washington</li>
					<li>Missouri Department of Conservation</li>
					<li>Montana Department of Transportation</li>
					<li>National Marine Fisheries Serv.</li>
					<li>National Renewable Energy Laboratory</li>
					<li>Nebraska Department of Roads</li>
					<li>NOAA</li>
					<li>North Cascades National Park</li>
					<li>Northeast Fisheries Science Center</li>
					<li>Office of Surface Mining</li>
					<li>Olympic National Park</li>
					<li>Oregon Department of Fish &amp; Wildlife</li>
					<li>Province of British Columbia</li>
					<li>Province of Saskatchewan</li>
					<li>Rock River School–Albany County School Dist. #1</li>
					<li>Rocky Mtn. Forest &amp; Range Experiment.Station</li>
					<li>State of Alaska</li>
					<li>State of Colorado</li>
					<li>State of Idaho</li>
					<li>State of Michigan</li>
					<li>State of Missouri</li>
					<li>State of Montana</li>
					<li>State of Nebraska</li>
					<li>State of Wyoming</li>
					<li>Town of Torrington, WY</li>
					<li>U.S. Army Corp of Engineers</li>
					<li>U.S. Bureau of Reclamation</li>
					<li>U.S. Dept of Agriculture</li>
					<li>U.S. Dept of Commerce – Juneau</li>
					<li>U.S. Dept of Interior Office of Surface Mining</li>
					<li>U.S. Dept of Justice – Envir. Enforcement Sect</li>
					<li>U.S. Environmental Protection Agency</li>
					<li>U.S. Fish &amp; Wildlife Service</li>
					<li>U.S. Forest Service</li>
					<li>U.S. National Biological Service</li>
					<li>U.S. National Park Service</li>
					<li>U.S.G.S. Biological Resources Division</li>
					<li>Umatilla National Forest</li>
					<li>UMESC – Upper Midwest Envir. Sciences Center</li>
					<li>Wrangell St. Elias National Park</li>
					<li>Wyoming Department of Environmental Quality</li>
					<li>Wyoming Department of Transportation</li>
					<li>Wyoming Game and Fish Department</li>
					<li>Wyoming Water Development Commission</li>
				</ul>
			</section>

		</aside>
	</section>

</section>

<?php get_footer(); ?>
