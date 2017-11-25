<?php
/*
Template Name: Staff Landing Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="staff-landing-container">
  <section id="staff" class="slc--inner">
    <article class="slc--inner-left">

      <header class="staff-landing-header">
        <?php if( get_field('page_subtitle') ): ?>
          <h1 class="main-title">
            <?php the_field( 'page_title' ); ?>
          </h1>
        <?php endif; ?>

        <?php if( get_field('page_subtitle') ): ?>
          <h2 class="main-subtitle">
            <?php the_field( 'page_subtitle' ); ?>
          </h2>
        <?php endif; ?>

        <div class="input-container">
          <input class="search" placeholder="Search" />

          <div class="btn-container">
            <button id="sort-on-name" class="sort sort-name btn btn-secondary btn-mini" data-sort="name">
              Sort on Name <i class="fa fa-sort-desc"></i>
            </button>

            <button id="sort-on-title" class="sort sort-title btn btn-secondary btn-mini" data-sort="title">
              Sort on Title <i class="fa fa-sort-desc"></i>
            </button>
          </div>
        </div>

      </header>

      <ul class="list staff-landing-list">
        <?php
          $args = array(
            'post_type' => 'staff',
            'posts_per_page' => -1,
            'orderby'=>'title','order'=>'ASC'
          );

          $the_query = new WP_Query( $args );
        ?>

        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <li class="staff-tile">
          <div class="staff-tile--left">
            <img src="<?php the_field( 'staff_member_photo' ); ?>" alt="Photo of <?php the_field( 'staff_member_short_name' ); ?>" class="staff-member-photo">
          </div>

          <div class="staff-tile--right">
            <h2 class="name profile-name"  data-sort="name"><?php the_title(); ?></h2>

            <?php if( get_field('staff_member_title') ): ?>
              <h3 class="title staff-member-job-title" data-sort="title"><?php the_field( 'staff_member_title' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field('staff_member_email_address') ): ?>
              <a href="mailto: <?php the_field( 'staff_member_email_address' ); ?>" class="btn btn-primary" alt="Email Me Button">Email</a>
            <?php endif; ?>

            <?php if( get_field('staff_member_profile_page') == 'yes' ): ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-inline" alt="View Profile">View Profile <i class="fa fa-arrow-right"></i></a>
            <?php endif; ?>
          </div>
        </li>

        <?php endwhile; else: ?>
          <div class="failure-message">There are no staff members to display or something went wrong. Please try again later, we may be undergoing unscheduled maintenance.</div>
        <?php endif; ?>

      </ul>
    </article>

    <aside class="slc--inner-right">
      <div class="sidebar-container">
        <h3>About WEST</h3>

        <ul class="subnav-sidebar staff">
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
            <a href="http://www.west-inc.com/about/staff/">
              <i class="fa fa-chevron-right"></i>
              Our Staff
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
            <a href="http://www.west-inc.com/news-events/">
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
