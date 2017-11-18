<?php
/*
Template Name: Media Page __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="media-page-container">
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
				<section class="bc--left">
          <div class="body-content">
						<?php the_field( 'body_content' ); ?>

						<?php if( get_field('title_of_bullet_list') ): ?>
							<h4 class="title-of-list">
								<?php the_field( 'title_of_bullet_list' ); ?>
							</h4>
						<?php endif; ?>
          </div>
        </section>

        <section class="bc--right">
          XXXXXX
        </section>
      <?php endif; ?>

    </article>

    <aside class="mpc--inner-right">
      YYYYYY
    </aside>
</section>

<?php get_footer(); ?>
