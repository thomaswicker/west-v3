<!-- THIS IS TEMPLATE FOR THE PROFESSIONAL PROFILES SINGLE PAGE -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class='professional-profile-detail'>
      <header class="ppd--header">
        <a href=" http://www.west-inc.com/professional-profiles-new/" class="btn-back-to-team">
          <i class="fa fa-arrow-left"></i>
          <span>Back to Profiles Page</span>
        </a>
      </header>

      <section class="ppd--left">
        <img class="profile-detail-image" src="<?php the_field( 'profile_photo' ); ?>" alt="Photo of <?php the_field( 'profile_shortname' ); ?>">

        <div class="profile-links">
          <?php if( get_field('profile_email_address') ): ?>
            <a href="mailto: <?php the_field( 'profile_email_address' ); ?>" class="btn btn-primary profile-email-address-btn">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              Email Me
            </a>
          <?php endif; ?>

          <?php if( get_field('profile_linkedin_url') ): ?>
            <a href="<?php the_field( 'profile_linkedin_url' ); ?>" class="btn profile-linkedin-btn">
              <i class="fa fa-linkedin"></i>
              <?php the_field( 'profile_shortname' ); ?>'s LinkedIn
            </a>
          <?php endif; ?>
        </div>
      </section>

      <section class="ppd--middle">
        <h2 class="profile-name">
          <?php the_title(); ?>
        </h2>

        <h3 class="profile-job-title">
          <?php the_field( 'profile_job_title' ); ?>
        </h3>

        <div class="profile-body-text">
          <?php the_field( 'profile_body_text' ); ?>
        </div>
      </section>

      <section class="ppd--right">
        <h4>ABOUT WEST & TEAM</h4>

        <ul>
          <li>
            <a href="#" class="active">
              <i class="fa fa-caret-right"></i>
              Our Team
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-caret-right"></i>
              Culture
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-caret-right"></i>
              News & Events
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-caret-right"></i>
              Contact Us
            </a>
          </li>
        </ul>
      </section>

    </article>

  <?php endwhile; ?>
  <?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
