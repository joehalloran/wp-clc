<?php
/*
 * Template Name: Consultancy
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
            		<?php get_template_part( 'template-parts/sidebar', 'julia' );?>
            	</div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">London CLC can provide a range of consultancy and advice to support schools and other organisations in developing a digital strategy, finding technical solutions and planning and assessing the curriculum.</p>
                    <p class="lead">Contact Julia Lawrence if you would like to arrange a consultancy session.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/advice-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/advice-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/advice800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/advice800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/advice-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/advice-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/advice-400.jpg 400w"
                            sizes="90vw"
                            alt="Teachers engaged in discussion during consultancy meeting" />
                    </picture>
                   	<h2 class="services-subtitle">Areas of consultancy</h2>
                   	<ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#computing" aria-expanded="false" aria-controls="computing">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-blue "></i>
                            </div>
                            <h4 class="services-list-heading">Computing <b class="caret"></b></h4>     
                        </a>
                        <div class="collapse" id="computing">
                            <li>
                                Computing assessment and progression
                            </li>
                            <li>
                          		Curriculum planning
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#blogging" aria-expanded="false" aria-controls="blogging">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-dark-green "></i>
                            </div>
                            <h4 class="services-list-heading">Blogging <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="blogging">
                            <li>
                                Blogging – Technical set-up (class accounts/templates/basic settings)
                            </li>
                            <li>
                                Blogging – The Pedagogy (effective use of class blogs to improve children’s learning)
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#crossCurricular" aria-expanded="false" aria-controls="crossCurricular">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-light-orange "></i>
                            </div>
                            <h4 class="services-list-heading">Cross Curricular use of technology <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="crossCurricular">
                            <li>
                                Using technology to support cross curricular learning
                            </li>
                            <li>
                                Subject-specific consultancy, eg technology to support maths/science/english
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#eSafety" aria-expanded="false" aria-controls="eSafety">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-orange "></i>
                            </div>
                            <h4 class="services-list-heading">E-Safety <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="eSafety">
                            <li>
                                E-Safety audit
                            </li>
                            <li>
                                Governor e-safety briefings
                            </li>
                            <li>
                                E-Safety for parents
                            </li>
                            <li>
                                E-Safety Mark
                            </li>
                            <li>
                                Creating an acceptable use policy/policies
                            </li>
                            <li>
                                E-Safety Assemblies
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#technical" aria-expanded="false" aria-controls="technical">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-light-blue "></i>
                            </div>
                            <h4 class="services-list-heading">Technical <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="technical">
                            <li>
                                IT procurement and advice
                            </li>
                            <li>
                                IT infrastructure health check
                            </li>
                            <li>
                                Google apps
                            </li>
                            <li>
                                Wifi Audit
                            </li>
                            <li>
                                iPad set-up advice
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#slt" aria-expanded="false" aria-controls="slt">
                                <div class="services-asterisk">
                                    <i class="fa fa-asterisk clc-light-green "></i>
                                </div>
                                <h4 class="services-list-heading">SLT <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="slt">
                            <li>
                                ICT Mark and the SRF
                            </li>
                            <li>
                                Digital strategy and ICT Vision
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#widerSchoolCommunity" aria-expanded="false" aria-controls="widerSchoolCommunity">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-dark-orange "></i>
                            </div>
                            <h4 class="services-list-heading">Wider School Community <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="widerSchoolCommunity">
                            <li>
                                Family learning and working with parents
                            </li>
                            <li>
                                E-Safety for parents
                            </li>
                            <li>
                                Bid writing
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#marketingComms" aria-expanded="false" aria-controls="marketingComms">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-dark-blue "></i>
                            </div>
                            <h4 class="services-list-heading">Marketing and Communication <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="marketingComms">
                            <li>
                                Using twitter and social media tools for school promotion
                            </li>
                            <li>
                                Advice on school website & online presence
                            </li>
                        </div>
                        <!-- <hr class="services-hr"> -->
                    </ul>
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