<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class='professional-profile-detail'>
      <section class="ppd--left">
        <img class="recipe-feature-image" src="<?php the_field( 'profile_photo' ); ?>" alt="Photo of <?php the_field( 'profile_shortname' ); ?>">

        <a href="mailto: <?php the_field( 'profile_email_address' ); ?>" class="profile-email-address-btn">
          <i class="fa fa-email"></i>
          Email Me
        </a>

        <a href="<?php the_field( 'profile_linkedin_url' ); ?>" class="profile-linkedin-btn">
          <i class="fa fa-linkedin"></i>
          <?php the_field( 'profile_shortname' ); ?>'s LinkedIn
        </a>
      </section>

      <section class="ppd--right">
        <h2 class="profile-name">
          <?php the_title(); ?>
        </h2>

        <h3 class="profile-job-title">
          <?php the_field( 'profile_job_title' ); ?>
        </h3>

        <p class="profile-body-text">
          <?php the_field( 'profile_body_text' ); ?>
        </p>
      </section>

    </article>

  <?php endwhile; ?>
  <?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
