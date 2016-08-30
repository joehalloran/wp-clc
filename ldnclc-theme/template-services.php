<?php
/*
 * Template Name: Services
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

            <!-- Services Boxes-->
            <div class="row">
                <!-- CPD Box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="cpd.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/teachers-at-cpd-sq-360x360.jpg" class="img-responsive" alt="">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-mortar-board clc-blue fa-lg"></i>
                        </div>
                        <h2 class="services-title">Teacher CPD</h2>
                    </div>
                    </a>
                </div>
                <!-- SLA Box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="sla-packages.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/boy-with-makey-makey-sq-360x360.jpg" class="img-responsive" alt="">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-child clc-dark-green fa-lg"></i>
                        </div>
                        <h2 class="services-title">SLA Packages</h2>
                    </div>
                    </a>
                </div>
                <!-- Tech Support Box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="technical-support.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tech_support-sq-360x360.jpg" class="img-responsive" alt=""> 
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-server clc-light-blue fa-lg"></i>
                        </div>
                        <h2 class="services-title">Tech Support</h2>
                    </div>
                    </a>
                </div>
                <!-- Family learning box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="family-learning.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/family-learning-sq-360x360.jpg" class="img-responsive" alt=""> 
                     <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-users clc-dark-orange fa-lg"></i>
                        </div>
                        <h2 class="services-title">Family Learning</h2>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <!-- Venue Hire box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="venue-hire.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-sq-360x360.jpg" class="img-responsive" alt=""> 
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-building clc-light-orange fa-lg"></i>
                        </div>
                        <h2 class="services-title">Venue Hire</h2>
                    </div>
                    </a>
                </div>
                <!-- Advice box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="consultancy.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/advice-sq-360x360.jpg" class="img-responsive" alt="">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-briefcase clc-light-blue fa-lg"></i>
                        </div>
                        <h2 class="services-title">Consultancy</h2>
                    </div>
                    </a>
                </div>
                <!-- Research box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="research-project.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/girl_on_computer-sq-360x360.jpg" class="img-responsive" alt="">
                     <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-book clc-light-green fa-lg"></i>
                        </div>
                        <h2 class="services-title">Research</h2>
                    </div>
                    </a>
                </div>
                <!-- Projects Box -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="bespoke-projects.html">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/camera_and_edit-sq-360x360.jpg" class="img-responsive" alt="">
                    <div class="services-box">
                        <div class="services-icon">
                            <i class="fa fa-pencil-square-o clc-light-orange fa-lg"></i>
                        </div>
                        <h2 class="services-title">Projects</h2>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>   
    <!-- /.container -->

<?php

get_footer();