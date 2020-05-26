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
          'post_type' => 'west_publications',
          'posts_per_page' => -1,
          'meta_key'			=> 'publication_year',
          'orderby'			=> 'meta_value',
          'order'=>'DESC'
        );

        $theField = get_field('publication_id');

        $the_query = new WP_Query( $args );
      ?>

      <h3 class="publications-report-subheader">WEST Publications</h3>

      <div class="resources--search">
        <input type="text" id="resources-search--publications" placeholder="Search Publications" onkeyup="filterPublications()">
      </div>

      <h1><?php the_field( 'type_of_publication' ); ?></h1>

        <ul id="publications-list" class="publications-list">
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="publication-list-item">
            <div class="publication-content-container">
              <?php if( get_field('publication_title') ): ?>
                <h3 class="publication-title"><?php the_field( 'publication_title' ); ?></h3>
              <?php endif; ?>
              
              <div class="publication-author-title">Authors:</div>

              <?php if( have_rows('publication_authors') ): ?>
                <?php while( have_rows('publication_authors') ): the_row(); 
                  // vars
                  $authorName = get_sub_field('author_name');
                  $westTeamStatus = get_sub_field('west_team_member');
                ?>

                <div class="publication-author">
                  <?php if( $westTeamStatus == 'Yes' ): ?>
                    <p class="publication-author-name alt"><?php echo $authorName; ?></p>
                  <?php endif; ?>

                  <?php if( $westTeamStatus == 'No' ): ?>
                    <p class="publication-author-name "><?php echo $authorName; ?></p>
                  <?php endif; ?>
                </div>

              <?php endwhile; ?>
              <?php endif; ?>

              <?php if( get_field('publication_year') ): ?>
                <div class="publication-year">
                  Publication Year: <?php the_field( 'publication_year' ); ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="tag-container">
              <?php if( have_rows('publication_links') ): ?>
                <?php while( have_rows('publication_links') ): the_row(); 
                  // vars
                  $publicationLink = get_sub_field('publication_link');
                  $publicationType = get_sub_field('type_of_publication');
                ?>

                <?php if( get_sub_field('type_of_publication') == 'PDF' ): ?>
                  <a href="<?php echo $publicationLink; ?>" class="btn btn-pub-pdf tag-type" target="_blank">
                    <i class="fa fa-file-pdf-o" style="margin-right: 5px;" aria-hidden="true"></i>
                    PDF
                  </a>
                <?php endif; ?>

                <?php if( get_sub_field('type_of_publication') == 'Book' ): ?>
                  <a href="<?php echo $publicationLink; ?>" class="btn btn-pub-book tag-type" target="_blank">
                    <i class="fa fa-book" style="margin-right: 5px;" aria-hidden="true"></i>  
                    Book
                  </a>
                <?php endif; ?>

                <?php if( get_sub_field('type_of_publication') == 'URL' ): ?>
                  <a href="<?php echo $publicationLink; ?>" class="btn btn-pub-url tag-type" target="_blank">
                    <i class="fa fa-link" style="margin-right: 5px;" aria-hidden="true"></i>
                    URL
                  </a>
                <?php endif; ?>
              <?php endwhile; ?> 
            </div>

          <?php endif; ?>

        </li>

        <?php endwhile; else: ?>
          <li>There are no publications to show or something went wrong. Please try back again later.</li>
        <?php endif; ?>
      </ul>
      <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




    </article>

    <aside class="bci--right parpc-page--inner-right">
      <?php get_template_part('partials/sidebar/resources-sidebar--publications'); ?>
    </aside>
</section>

<script>
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
</script>

<?php get_footer(); ?>
