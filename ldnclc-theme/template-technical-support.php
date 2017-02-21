<?php
/*
 * Template Name: Technical Support
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
                     <?php get_template_part( 'template-parts/people', 'krzysz' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">We can ensure your school’s ICT systems are fit for purpose. Our technical team provides regular weekly technical support for schools as well as one off system audits, network installations, advice and technology solutions.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/tech-team-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/tech-team-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tech-team800x451.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/tech-team800x451.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/tech-team-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/tech-team-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/tech-team-400.jpg 400w"
                            sizes="90vw"
                            alt="The London CLC technical services team with Naace award trophy" />
                    </picture>
                    <!-- <img class="img-responsive services-feature-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/tech-team800x451.jpg"> -->
                    <h2 class="services-subtitle">Awards</h2>
                    <p>In March 2015 the London CLC Technical Services team won the <a href="http://www.naace.co.uk/conference2015/impactawards" target="_blank">Naace Impact Award</a> for Technical Support in Schools. We were delighted to be recognised by Naace and grateful to our partner schools for nominating us for this award. We are also pleased to announce that London CLC is part of the LGFL recognised Support Framework.</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <img class="img-responsive about-us-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/LGfLRecognised.png">
                            <img class="img-responsive about-us-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/Naace_Winner_2015.jpg">
                        </div>
                    </div>
                    <h2 class="services-subtitle">Services</h2>

                    <p>We support schools with procurement, iPad management, computer imaging, server upgrades, MinecraftEDU server installation and network maintenance.</p>

                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-blue"></i></div> 
                    <h4 class="services-list-heading">Weekly Maintenance</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-green"></i></div> 
                    <h4 class="services-list-heading">Network Upgrades</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-orange"></i></div> 
                    <h4 class="services-list-heading">Server Deployment</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-orange"></i></div> 
                    <h4 class="services-list-heading">iPad and Laptop Deployment</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-blue"></i></div> 
                    <h4 class="services-list-heading">System Audits</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-green"></i></div> 
                    <h4 class="services-list-heading">Procurement Advice</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="spacer20"></div>
            
                    <h2 class="services-subtitle">Testimonials</h2>
                    <blockquote>
                        <p>"The London CLC provide us with outstanding technical support – from responding quickly to crises, to planning long- term upgrades and ‘future proofing’ of systems, to keeping us on top of all the latest developments in technology which make our lives  so much easier. Teachers need the kit there, ready to go and working in order to be able to deliver high-quality lessons. London CLC make sure that our classrooms are always fully operational. However, more than that, they do it with skill, understanding and a great sense of humour.”</p>
                        <footer>Headteacher <cite>Rosendale Primary School</cite></footer>
                    </blockquote>
                    <blockquote>
                        <p>“I am incredibly impressed with the support from the CLC. I had high hopes about the quality of support that you and your colleagues would be able to give, but even these expectations have been surpassed.”</p>
                        <footer>Headteacher <cite>Peters Hill Primary School, Dudley</cite></footer>
                    </blockquote>
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