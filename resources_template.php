<?php
/*
Template Name: Resources __TEMPLATE__
*/
?>

<?php get_header(); ?>

<section class="body-container publications-and-reports-page-container">
  <section class="body-container--inner parpc--inner">
    <article class="bci--left parpc-page--inner-left email-before-download-container">

      <?php if( get_field('page_title') ): ?>
        <h1 class="main-title">
          <?php the_field( 'page_title' ); ?>
        </h1>
      <?php endif; ?>

      <?php if( get_field('page_subtitle') ): ?>
        <h2 class="main-subtitle">
          <?php the_field( 'page_subtitle' ); ?>
        </h2>
      <?php endif; ?>

      <?php
        $args = array(
          'post_type' => 'publications',
          'posts_per_page' => -1,
          'orderby'=>'title',
          'order'=>'ASC'
        );

        $theField = get_field('publication_id');

        $the_query = new WP_Query( $args );
      ?>

        <h3 class="publications-report-subheader">Books <span>(sorted by year and lead author)</span></h3>

        <div class="resources--search">
          <input type="text" id="resources-search--books" placeholder="search books" class="resources-search" onkeyup="filterBooks()">
        </div>

        <ul id="books-list" class="books-list">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('publication_type') == 'book' ): ?>
              <li class="publication-list-item">
                <div class="pbi--left">
                  <?php if( get_field('publication_title') ): ?>
                    <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('publication_details') ): ?>
                    <p class="publication-details"><?php the_field( 'publication_details' ); ?></p>
                  <?php endif; ?>
                </div>

                <div class="pbi--right">
                  <a href="<?php the_field( 'publication_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                </div>
              </li>
            <?php endif; ?>

          <?php endwhile; else: ?>
            <p>There are no books to show or something went wrong. Please try back again later.</p>
          <?php endif; ?>
        </ul>


        <h3 class="publications-report-subheader">Publications <span>(sorted by year and lead author)</span></h3>

        <div class="resources--search">
          <input type="text" id="resources-search--publications" placeholder="search publications" class="resources-search" onkeyup="filterPublications()">
        </div>

        <ul id="publications-list" class="publications-list">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('publication_type') == 'publication' ): ?>
              <li class="publication-list-item">
                <div class="pbi--left">
                  <?php if( get_field('publication_title') ): ?>
                    <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('publication_details') ): ?>
                    <p class="publication-details"><?php the_field( 'publication_details' ); ?></p>
                  <?php endif; ?>

                  <?php if( get_field('email_before_download_link') ): ?>
                    <aside class="email-before-download-container">
                      <h3>
                        <i class="fa fa-exclamation-triangle"></i>
                        <span>Please provide your name and email before downloading this PDF:</span>
                      </h3>

                      <div class="<?php the_field( 'email_before_download_link' ); ?>)">
                        <?php echo do_shortcode('[email-download download_id="'.get_field('email_before_download_link').'" contact_form_id="2022"]'); ?>
                      </div>

                    </aside>
                  <?php endif; ?>
                </div>

                <div class="pbi--right">
                  <a href="<?php the_field( 'publication_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                </div>
              </li>
            <?php endif; ?>

          <?php endwhile; else: ?>
            <p class="warning-text">There are no publications/reports to show or something went wrong. Please try back again later.</p>
          <?php endif; ?>
        </ul>


        <h3 class="publications-report-subheader">Reports <span>(sorted by year and lead author)</span></h3>

        <div class="resources--search">
          <input type="text" id="resources-search--reports" placeholder="search reports" class="resources-search" onkeyup="filterReports()">
        </div>

        <ul id="reports-list" class="reports-list">
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if( get_field('publication_type') == 'report' ): ?>
              <li class="publication-list-item">
                <div class="pbi--left">
                  <?php if( get_field('publication_title') ): ?>
                    <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
                  <?php endif; ?>

                  <?php if( get_field('publication_details') ): ?>
                    <p class="publication-details"><?php the_field( 'publication_details' ); ?></p>
                  <?php endif; ?>

                  <?php if( get_field('email_before_download_link') ): ?>
                    <aside class="email-before-download-container">
                      <h3>
                        <i class="fa fa-exclamation-triangle"></i>
                        <span>Please provide your name and email before downloading this PDF:</span>
                      </h3>

                      <div class="<?php the_field( 'email_before_download_link' ); ?>)">
                        <?php echo do_shortcode('[email-download download_id="'.get_field('email_before_download_link').'" contact_form_id="2022"]'); ?>
                      </div>

                    </aside>
                  <?php endif; ?>
                </div>

                <div class="pbi--right">
                  <a href="<?php the_field( 'publication_link' ); ?>" target="_blank" class="<?php the_field( 'icon_link_image' ); ?>"></a>
                </div>
              </li>
            <?php endif; ?>

          <?php endwhile; else: ?>
            <p class="warning-text">There are no publications to show or something went wrong. Please try back again later.</p>
          <?php endif; ?>
        </ul>

    </article>

    <aside class="bci--right parpc-page--inner-right">
      <?php get_template_part('partials/sidebar/resources-sidebar--publications'); ?>
    </aside>
</section>

<script>
  function filterBooks() {
      // Declare variables
      var input, filter, ul, li, a, i;
      input = document.getElementById('resources-search--books');
      filter = input.value.toUpperCase();
      ul = document.getElementById('books-list');
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("div")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }

  function filterPublications() {
      // Declare variables
      var input, filter, ul, li, a, i;
      input = document.getElementById('resources-search--publications');
      filter = input.value.toUpperCase();
      ul = document.getElementById('publications-list');
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("div")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }

  function filterReports() {
      // Declare variables
      var input, filter, ul, li, a, i;
      input = document.getElementById('resources-search--reports');
      filter = input.value.toUpperCase();
      ul = document.getElementById('reports-list');
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("div")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }
</script>

<?php get_footer(); ?>
