<?php
/*
Template Name: Directory Template
*/
?>

<?php get_header(); ?>

<div class="main-wrapper-team">

    <div id="contactUsRibbonPersonnel"><a href="http://www.west-inc.com/locations/"><button class="btn btn-success"><i style="padding: 0px 8px 0px 0px;" class="fa fa-phone"></i>Contact Us</button></a></div>

    <div class="container">

        <div class="staffDirectoryBodyContainer">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staffDirectory">

            <div id="subheaderMainStaffDirectoryTop">
                <h1>Staff Directory</h1>
                <h2 class="clickOnStaffDirectory">Click on a Staff Member Below to Send them an Email</h2>
            </div>

                <hr class="hidden-xs" style="border: 1px solid #dddddd; margin: 0px 0px -20px 0px;">

                <ul class="nav nav-pills portfolio-filter staffDirectorySortMenu col-lg-12 col-md-12 col-sm-12 hidden-xs">

                <li><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".a">A</a></li>
                <li><a href="#" data-filter=".b">B</a></li>
                <li><a href="#" data-filter=".c">C</a></li>
                <li><a href="#" data-filter=".d">D</a></li>
                <li><a href="#" data-filter=".e">E</a></li>
                <li><a href="#" data-filter=".f">F</a></li>
                <li><a href="#" data-filter=".G">G</a></li>
                <li><a href="#" data-filter=".h">H</a></li>
                <li><a href="#" data-filter=".i">I</a></li>
                <li><a href="#" data-filter=".j">J</a></li>
                <li><a href="#" data-filter=".k">K</a></li>
                <li><a href="#" data-filter=".l">L</a></li>
                <li><a href="#" data-filter=".m">M</a></li>
                <li><a href="#" data-filter=".n">N</a></li>
                <li><a href="#" data-filter=".o">O</a></li>
                <li><a href="#" data-filter=".p">P</a></li>
                <li><a href="#" data-filter=".q">Q</a></li>
                <li><a href="#" data-filter=".r">R</a></li>
                <li><a href="#" data-filter=".s">S</a></li>
                <li><a href="#" data-filter=".t">T</a></li>
                <li><a href="#" data-filter=".u">U</a></li>
                <li><a href="#" data-filter=".v">V</a></li>
                <li><a href="#" data-filter=".w">W</a></li>
                <li><a href="#" data-filter=".x">X</a></li>
                <li><a href="#" data-filter=".y">Y</a></li>
                <li><a href="#" data-filter=".z">Z</a></li>

                </ul>

                    <hr class="hidden-xs" style="border: 1px solid #dddddd; margin: 0px 0px -20px 0px;">

                        <ul id="isotope-portfolio-container" class="subheaderMainStaffDirectoryContainer col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>
                            <hr>

                        <?php endwhile; else: ?>
                
                        <p>There are no posts or pages here</p>

                        <?php endif; ?>


                        </ul>
                                               
                    </div>

                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /#contact-us -->

</div><!-- /.main-wrapper -->



<?php get_footer(); ?>

