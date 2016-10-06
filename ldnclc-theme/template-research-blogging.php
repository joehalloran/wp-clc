<?php
/*
 * Template Name: Research - Blogging
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
                     <?php get_template_part( 'template-parts/people', 'sarah' );?>
                </div>
        		<div class="col-sm-10 col-md-8">
			    	<p class="lead">There is plenty of evidence to show that blogging arouses students’ interest and enthusiasm for writing, but very little attention has been paid to its effects on the quality of writing in general, or about its potential for developing students’ writing in new directions.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-400.jpg 400w"
                            sizes="90vw"
                            alt="Teacher and pupil at a computer, writing on a blog" />
                    </picture>
                    <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy800x450.jpg" class="img-responsive services-feature-image"> -->
                    <div class="spacer20"></div> 
                    <p>Our research project set out to study practice in blogging, with a particular emphasis on children’s writing and to compare children’s writing on the blog with their other writing.</p>
                    <p>We were interested in the potential of blogging for developing students’ writing in new directions, what makes for effective practice in blogging, how approaches to blogging differ, the ways in which teachers frame tasks for blogging, and how they respond to children’s writing on class blogs.  The four classes we studied presented an interesting range of slightly different assumptions and practices in blogging. We set out some of our own assumptions about educational blogging, which were:</p>
                    <ul>
                        <li>school blogging  is different from personal blogging at home</li>
                        <li>blogging is a new way of developing writing</li>
                        <li>blogging offers a new approach to teaching & learning</li>
                    </ul>

                    <p>The research project was commissioned by Education Development Trust and can be found on the <a href="https://www.educationdevelopmenttrust.com/en-GB/our-research/our-research-library/2014/r-blogging-2014" target="_blank">Education Development Trust research site</a>.</p>
                    <p>A longer version of the report including full case studies can be found here:</p>
                    <a class="btn btn-primary" href="http://issuu.com/lambethcitylearningcentre/docs/education_blogs_report__2_" target="_blank">Download the full report</a>

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