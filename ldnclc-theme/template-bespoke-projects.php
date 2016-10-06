<?php
/*
 * Template Name: Bespoke Projects
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

            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-2 hidden-xs">
                    <?php get_template_part( 'template-parts/people', 'kim' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">The CLC delivers a range of bespoke projects for schools, businesses and cultural organisations.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit_800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit_800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-400.jpg 400w"
                            sizes="90vw"
                            alt="Pupils editing a film on a laptop" />
                    </picture>
                    <h2 class="services-subtitle">Recent projects</h2>
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-blue"></i></div> 
                    <h4 class="services-list-heading">Professional learning for cultural organisations on the effective use of social media to engage schools</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-green"></i></div> 
                    <h4 class="services-list-heading">IBM corporate citizenship commission to run teacher summer schools in Manchester and London</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-orange"></i></div>
                    <h4 class="services-list-heading">A school commission to support a creative assessment framework</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-orange"></i></div> 
                    <h4 class="services-list-heading">CPD on the use of technology within EYFS for the Wigmore Hall’s early years team, a half term project delivered with Rambert Dance to create a documentary about the company</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-blue"></i></div> 
                    <h4 class="services-list-heading">A film commission by the London Borough of Lambeth’s Early Years Team to create resources for teachers on effective phonics teaching</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-green"></i></div> 
                    <h4 class="services-list-heading">A school commission to support targeted pupil premium families</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <h2 class="services-subtitle">Testimonial</h2>
                    <blockquote>"IBM has benefitted from the deep expertise that London Connected Learning Centre possesses in delivering digital education for teachers, to implement a programme of professional development for teachers that on our own we would have been unable to do."
                    <footer>Mark Wakefield, <cite title="Source Title">Corporate Citizenship & Corporate Affairs Manager, IBM UK</cite></footer></blockquote>
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