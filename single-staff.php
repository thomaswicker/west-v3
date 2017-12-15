<!-- THIS IS TEMPLATE FOR THE PROFESSIONAL PROFILES SINGLE PAGE -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class='professional-profile-detail'>
      <header class="ppd--header">
        <a href=" http://www.west-inc.com/professional-profiles/" class="btn-back-to-team">
          <i class="fa fa-arrow-left"></i>
          <span>Back to Professional Profiles</span>
        </a>
      </header>

      <section class="ppd--left">
        <img class="profile-detail-image" src="<?php the_field( 'staff_member_photo' ); ?>" alt="Photo of <?php the_field( 'staff_member_short_name' ); ?>">

        <div class="profile-links">
          <?php if( get_field('staff_member_email_address') ): ?>
            <a href="mailto: <?php the_field( 'staff_member_email_address' ); ?>" class="btn btn-primary profile-email-address-btn">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              Email <?php the_field( 'staff_member_short_name' ); ?>
            </a>
          <?php endif; ?>

          <?php if( get_field('staff_member_linkedin_url') ): ?>
            <a href="<?php the_field( 'staff_member_linkedin_url' ); ?>" class="btn profile-linkedin-btn">
              <i class="fa fa-linkedin"></i>
              LinkedIn
            </a>
          <?php endif; ?>
        </div>
      </section>

      <section class="ppd--middle">
        <h2 class="profile-name">
          <?php the_title(); ?>
        </h2>

        <h3 class="profile-job-title">
          <?php the_field( 'staff_member_job_title' ); ?>
        </h3>

        <div class="profile-body-text">
          <?php the_field( 'staff_member_body_text' ); ?>
        </div>
      </section>

      <section class="ppd--right">
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
      </section>

    </article>

  <?php endwhile; ?>
  <?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
