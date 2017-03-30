<?php
/*
 * Template Name: Digital Champions
 *
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

            <div class="row">
                <div class="col-sm-2 hidden-xs">
                     <?php get_template_part( 'template-parts/people', 'suki' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">The Lambeth <a href="http://digichamps.co.uk/" target="_blank">Digital Champions programme</a> can help you and your family improve your computer skills and get online.</p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/digital_champions_logo.png" class="img-responsive services-feature-image" alt="Digital Champions logo" />     
                    <div class="row spacer20"></div>        
                    <p>If you’ve never used a computer or you just want to brush up on your IT skills, give us a call and get FREE training and support on things such as:</p>
                    <ul>
                        <li>How to use the internet to manage bills or claim benefits</li>
                        <li>How to set up an email account</li>
                        <li>How to search the internet to look for information or jobs</li>
                    </ul>
                    <p>If you already have good computer skills and want to help others, we need you too. We’re looking to recruit members of the community who are willing to help others develop digital skills and confidence. Full training is provided.</p>
                    <a class="btn btn-lg btn-primary" href="http://digichamps.co.uk/" target="_blank">Find out more</a>
                </div>
                <div class="col-md-2 hidden-xs hidden-sm">
                     <?php get_template_part( 'template-parts/sidebar', 'social' );?>
                </div>               
            </div>
           
        </div>
    </div>


<?php

get_footer();