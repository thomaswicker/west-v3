<?php
/*
Template Name: Careers __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container careers-page-container">

  <?php get_template_part('partials/superhero/superhero-careers'); ?>

  <?php get_template_part('partials/callout-btn'); ?>

  <div class="sm-nav--careers"><?php get_template_part('partials/sm-nav'); ?></div>

  <section class="body-container--inner careers-page--inner">
    <article class="bci--left careers-page--inner-left">
      <?php if( get_field('page_title') ): ?>
        <h1 class="main-title">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('body_content') ): ?>
        <div class="body-content">
  				<?php the_field( 'body_content' ); ?>
        </div>

        <?php if( get_field('title_of_bullet_list') ): ?>
          <h4 class="title-of-list">
            <?php the_field( 'title_of_bullet_list' ); ?>
          </h4>
        <?php endif; ?>

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

          <a class="btn btn-mini btn-primary" href="https://west-inc.hua.hrsmart.com/hr/ats/JobSearch/viewAll" target="_blank">View Available Careers <i class="fa fa-arrow-right" style="margin-left4px;"></i></a>

        <?php endif; ?>
      <?php endif; ?>
    </article>

    <aside class="bci--right careers-page--inner-right">
      <?php echo do_shortcode("[huge_it_slider id='1']"); ?>

      <?php if( get_field('sidebar_text') ): ?>
        <div class="sidebar-text">
          <?php the_field( 'sidebar_text' ); ?>
        </div>
      <?php endif; ?>
    </aside>
</section>

<?php get_footer(); ?>
