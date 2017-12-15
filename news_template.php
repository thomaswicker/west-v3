<?php
/*
Template Name: News __TEMPLATE __
*/
?>

<?php get_header(); ?>

<section class="body-container news-page-container">

  <?php get_template_part('partials/superhero/superhero-news-and-events'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--news">
    <?php get_template_part('partials/sm-nav'); ?>
  </div>

  <section class="body-container--inner news-page--inner">
    <article class="bci--left news-page--inner-left">
      <ul class="news-list">
          <?php
            $args = array(
              'post_type' => 'news',
              'order'=>'DESC'
            );
            $the_query = new WP_Query( $args );
          ?>

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li>
              <?php if( get_field('news_title') ): ?>
                <h2> <?php the_field( 'news_title' ); ?></h2>
              <?php endif; ?>

              <?php if( get_field('news_content') ): ?>
                <?php the_field( 'news_content' ); ?>
              <?php endif; ?>

              <?php if( get_field('news_photo') ): ?>
                <img src="<?php the_field( 'news_photo' ); ?>" class="inline-news-photo" alt="Photo of <?php the_field( 'news_photo' ); ?>">
              <?php endif; ?>

              <?php if( get_field('news_links') ): ?>
                <a href="<?php the_field( 'news_links' ); ?>" class="inline-news-link">Click Here for More Info</a>
              <?php endif; ?>
            </li>

            <?php endwhile; else: ?>
            <p class='warning-text'>There are no news items to show or something went wrong. Please try again later.</p>
          <?php endif; ?>
      </ul>
    </article>

    <aside class="bci--right news-page--inner-right">
      <div class="sidebar-container">
      	<h3>About WEST</h3>

      	<ul class="subnav-sidebar news">
      		<li class="about-subnav--profile">
      			<a href="http://www.west-inc.com/about/profile-page/">
      				<i class="fa fa-chevron-right"></i>
      				Profile
      			</a>
      		</li>

      		<li class="about-subnav--team">
      			<a href="http://www.west-inc.com/about/our-team/">
      				<i class="fa fa-chevron-right"></i>
      				WEST Core Team
      			</a>
      		</li>

      		<li class="about-subnav--staff">
            <a href="http://www.west-inc.com/about/professional-profiles/">
      				<i class="fa fa-chevron-right"></i>
      				Professional Profiles
      			</a>
      		</li>

      		<li class="about-subnav--culture">
      			<a href="http://www.west-inc.com/about/culture-page/">
      				<i class="fa fa-chevron-right"></i>
      				Culture
      			</a>
      		</li>

      		<li class="about-subnav--safety">
      			<a href="http://www.west-inc.com/about/safety-page/">
      				<i class="fa fa-chevron-right"></i>
      				Health & Safety
      			</a>
      		</li>

      		<li class="about-subnav--news">
      			<a href="http://www.west-inc.com/news-news/">
      				<i class="fa fa-chevron-right"></i>
      				News & Events
      			</a>
      		</li>

      		<li class="about-subnav--westulc">
      			<a href="http://west-ulc.ca/" target="_blank">
      				<i class="fa fa-chevron-right"></i>
      				WEST, ULC Canada
      			</a>
      		</li>

      		<li class="about-subnav--locations last-item">
      			<a href="http://www.west-inc.com/locations/">
      				<i class="fa fa-chevron-right"></i>
      				Locations
      			</a>
      		</li>
      	</ul>
      </div>
    </aside>
  </section>

</section>
<?php get_footer(); ?>
