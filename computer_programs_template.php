<?php
/*
Template Name: Computer Programs (Landing Page)__TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container computer-programs-page-container">
  <section class="body-container--inner cppc--inner">
    <article class="bci--left cppc-page--inner-left">

      <?php if( get_field('page_title') ): ?>
        <h1 class="main-header">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subheader">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php
        $args = array(
          'post_type' => 'computerprograms'
        );

        $the_query = new WP_Query( $args );
      ?>

      <ul class="computer-programs-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="list-item">
            <div class="pbi--left">
              <?php if( get_field('title_of_computer_program') ): ?>
                <h3 class="title-of-computer-program"><?php the_field( 'title_of_computer_program' ); ?></h3>
              <?php endif; ?>

              <?php if( get_field('body_content_for_computer_program') ): ?>
                <?php the_field( 'body_content_for_computer_program' ); ?>
              <?php endif; ?>
            </div>

            <div class="pbi--right">
              <?php if( have_rows('computer_program_button') ): ?>
                <?php while( have_rows('computer_program_button') ): the_row();
                  // vars
                  $buttonName = get_sub_field('button_name');
                  $buttonLink = get_sub_field('button_link');
                  $buttonClass = get_sub_field('button_class');

                ?>

                  <a href="<?php echo $buttonLink; ?>" target="_blank" class="btn btn-mini btn-<?php echo $buttonClass; ?>">
                    <?php echo $buttonName; ?>
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>

            <?php endwhile; else: ?>
              <p>There are no computer programs to show or something went wrong. Please try back again later.</p>
            <?php endif; ?>
          </li>
        </ul>

    </article>

    <aside class="bci--right cppc-page--inner-right">
      <?php get_template_part('partials/sidebar/publications-root-sidebar-computer-programs'); ?>
    </aside>
</section>

<?php get_footer(); ?>
