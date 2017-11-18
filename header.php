<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- BEGIN EDITING YOUR KEYWORDS HERE, ONLY EDIT THE ITEMS WITHIN THE QUOTES OF THE CONTENT TAG -->

    <meta name="keywords" content="WEST Inc, Western Ecosystems">

<!-- END EDITING YOUR KEYWORDS HERE, ONLY EDIT THE ITEMS WITHIN THE QUOTES OF THE CONTENT TAG -->


    <meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; maximum-scale=1">
    <link rel="shortcut icon" href="http://www.west-inc.com/wp-content/themes/west_theme/images/favicon.ico">
    <meta name="robots" content="index, follow">
    <title>
     <?php
        if (function_exists('is_tag') && is_tag()) {
           single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
           wp_title(''); echo ' Archive - '; }
        elseif (is_search()) {
           echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
        elseif (is_404()) {
           echo 'Not Found - '; }
        if (is_home()) {
           bloginfo('name'); echo ' - '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
           echo ' - page '. $paged; }
     ?>
    </title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.foundation5.zurb.com/foundation.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

    <meta name="google-site-verification" content="P0NISTZKlL74-AN72rElfJ0T0NFnUI3lHcpRJnZ6mtA" />

</head>

<body <?php body_class(); ?>>

   <header id="header" class="header">
      <nav class="navbar navbar-default navbar-background" role="navigation">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a id="navbarBrand" href="http://www.west-inc.com/"><img src="<?php bloginfo( 'template_directory' ); ?>/images/headerLogo.png" alt="Western Ecosystems Logo"/></a>
          </div>

          <div class="collapse navbar-collapse navbar-ex1-collapse">

              <ul class="nav navbar-nav">

                <?php if (function_exists('getNavMenu')): ?>
                    <?php echo getNavMenu('main-menu','click'); ?>
                <?php endif; ?>

              </ul><!-- /.nav -->

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <!-- BEGIN GOOGLE ANALYTICS TRACKING CODE -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28583434-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- END GOOGLE ANALYTICS TRACKING CODE -->
</header><!-- /#header -->
