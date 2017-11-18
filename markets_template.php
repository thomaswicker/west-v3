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

		</aside>
	</section>

</section>

<?php get_footer(); ?>
