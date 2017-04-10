<?php
/*
 * Template Name: Research - Talis
 *
 * @package ldnclc_theme
 */

get_header(); ?>

  <!-- Page Content -->
    <div class="content-section-a">
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
                <?php get_template_part( 'template-parts/region', 'header' );?>
            <!-- /.row -->

        	<!-- Content Row -->
        	<div class="row">
                <div class="col-sm-2 hidden-xs">
                    <?php get_template_part( 'template-parts/people', 'kim' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">The TALIS Video Study is a pioneering, international study, which seeks to improve understanding of which aspects of teaching are related to pupil learning, and the nature of those relationships.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/talis-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/talis-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/talis-800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/talis-800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/talis-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/talis-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/talis-400.jpg 400w"
                            sizes="90vw"
                            alt="Teacher and pupil at a computer, writing on a blog" />
                    </picture>
                    <div class="spacer20"></div>
                    <p>The study, which is being led by the Organisation for Economic Co-operation and Development (OECD), will focus particularly on the teaching of mathematics in secondary schools.</p>
                    <p>Over approximately one year, more than 750 mathematics teachers in nine countries (including England) will be filmed as they teach quadratic equations. Th e study will provide a valuable opportunity to explore how teachers teach in different countries and contexts.</p>
                    <h2>Find out more</h2>
                    <p><a class="btn btn-primary" href="<?php bloginfo('stylesheet_directory'); ?>/images/EdDevTrust_TALIS_leaflet_FINAL.pdf" target="_blank">Download the TALIS leaflet</a></p>
                    <h2>Are you interested?</h2>
                    <p>We will be recruiting schools for the TALIS Video Study from April 2017 onwards. Data collection will begin in October 2017.</p>
                    <p>If your school is interested in being involved or if you have any further questions, please contact <a href="mailto:TALISvideostudy@educationdevelopmenttrust.com">TALISvideostudy@educationdevelopmenttrust.com</a></p>
                    <p>Also for more information on the OECD TALIS Video Study, see <a href="http://www.oecd.org/edu/school/TALIS-2018-video-study-brochure-ENG.pdf" target="_blank">www.oecd.org/edu/school/TALIS-2018-video-study-brochure-ENG.pdf</a>
                </div>
                <div class="col-md-2 hidden-xs hidden-sm">
                   <?php get_template_part( 'template-parts/sidebar', 'social' );?>
                </div>
			</div>
       	</div>
    </div>
    <!-- /.container -->

<?php

get_footer();