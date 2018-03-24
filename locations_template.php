<?php
/*
Template Name: Locations Page  __TEMPLATE__
*/
?>


<?php get_header(); ?>

<section class="body-container locations-page-container">

  <header id="google-map" class="google-map">
    <?php echo do_shortcode("[wpgmza id='1']"); ?>
  </header>

  <section class="body-container--inner locations-page--inner">
    <article class="bci--left locations-page--inner-left">
      <div id="locationsForm">
        <?php echo do_shortcode("[contact-form-7 id='3973' title='Contact Page Form']"); ?>
      </div>
    </article>

    <aside class="bci--right locations-page--inner-right">
      <p class="addressLine1">International Corporate Headquarters</p>
      <p class="addressLine2">415 W. 17th St, Suite 200</p>
      <p class="addressLine3">Cheyenne, Wyoming 82001</p>
      <p class="locationsPhone">Phone: (307) 634-1756</p>
      <p class="locationsFax">Fax: (307) 637-6981</p>
      <p class="locationsEmail"><a href="mailto:marketing@west-inc.com">marketing@west-inc.com</a></p>

      <p class="addressLine1">WEST, ULC Headquarters</p>
      <p class="addressLine2">Suite 303, 1000 9th Ave SW</p>
      <p class="addressLine3">Calgary, Alberta, T2P 2Y6</p>
      <p class="locationsPhone">Phone: 403.265.0343</p>
      <p class="locationsEmail"><a href="mailto:marketing@west-ulc.ca">marketing@west-ulc.ca</a></p>
    </aside>
</section>

<?php get_footer(); ?>
