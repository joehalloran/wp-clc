<?php
/*
 * Template Name: Equipment Loans
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
                    <?php get_template_part( 'template-parts/sidebar', 'tim' );?>
                </div>
        		<div class="col-sm-10 col-md-8">
			    	<p class="lead">The CLC has an extensive technology equipment loans library available to schools that have CLC Service Level Agreement packages and Lambeth Secondary Schools.  The library, which includes robots, 3D printers, Raspberry Pis, e-readers, data-loggers, iPads, Microbits, 3D doodler pens, cameras and much more, enable schools to augment their own equipment without making unnecessary purchases and allow teachers to research new technologies before a school invests.</p>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                            <h3 class="thin-title">SLA Schools</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="thin-title">Lambeth Secondary Schools</h3>
                        </div>
                    </div>
                    <div class="row">
                        <!-- SLA LOANS -->
                        <div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-6">
                            
                            <a href="<?php echo (site_url().'/services/sla-packages/'); ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/boy-with-makey-makey-sq-360x360.jpg" class="img-responsive" alt=""> 
                            <div class="services-box">
                                <div class="services-icon">
                                    <i class="fa fa-caret-square-o-right clc-dark-orange fa-lg"></i>
                                </div>
                                <h3 class="services-title">More Info</h3>
                            </div>
                            </a>
                        </div>
                        <!-- LAMBETH SECONDARY LOANS -->
                        <div class="col-md-4 col-md-offset-1 col-sm-4  col-sm-offset-2 col-xs-6">
                            
                            <a href="<?php echo (site_url().'/services/equipment-loans/technology-loans-for-lambeth-secondary-schools/'); ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/secondary_pupils_with_camera-sq-360x360.jpg" class="img-responsive">
                            <div class="services-box">
                                <div class="services-icon">
                                    <i class="fa fa-caret-square-o-right clc-dark-green fa-lg"></i>
                                </div>
                                <h3 class="services-title">More Info</h3>
                            </div>
                            </a>
                        </div>
        			</div>
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