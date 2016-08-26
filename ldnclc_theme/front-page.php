<?php
/**
 * Front Page template
 *
 *
 * @package ldnclc_theme
 */

get_header(); ?>

 <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>London Connected Learning Centre</h1>
                        <h3>Learning with Technology</h3>
                        <hr class="intro-divider">
                        <!--<ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="contact.html" class="btn btn-default btn-lg"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name">Contact</span></a>
                            </li>
                            <li>
                                <a href="services.html" class="btn btn-default btn-lg"><i class="fa fa-bell fa-fw"></i> <span class="network-name">About</span></a>
                            </li>
                        </ul>-->
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#CLC-what-we-do" class="btn btn-default btn-lg"><i class="fa fa-angle-double-down fa-fw"></i> <span class="network-name"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 hidden-xs" style="position: absolute; top: 20px">
                        <a href="http://twitter.com/LdnCLC" target="_blank">
                            <i class="fa fa-twitter fa-1x pull-right footer-social-logo"></i>
                        </a>
                        <a href="http://vimeo.com/londonclc" target="_blank">
                            <i class="fa fa-vimeo pull-right footer-social-logo"></i>
                        </a>
                    </div>
                    <div id="CLC-what-we-do" style="position: absolute; bottom: 1px;"></div><!-- THIS EMPTY DIV ADJUSTS FOR THE MENU BAR WHEN YOU CLICK ON THE DOWN ARROW-->
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->   
    <!-- Services Boxes-->
    <div class="content-section-b">
        <div class="container">
            <div class="row spacer20"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size:50px;" class="thin-title">What we do</h1>
                </div>
            </div>
            <div class="row spacer50"></div>
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
            <div class="row spacer20"></div>
        </div>
    </div>

    <div class="content-section-c">
        <div class="container">
            <div class="row spacer20"></div>                    
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <blockquote>
                    <h1 class="index-page-quote">“London Connected Learning Centre has become synonymous with high quality work. Schools involved are clear that they would be disadvantaged not to have the guidance and expertise that the CLC possesses.”</h1>
                    <footer style="font-size:100%;">David Boyle <cite title="Source Title">Principal, Dunraven School</cite></footer>
                    </blockquote>
                </div>
            </div>
            <div class="row spacer20"></div>
        </div>
    </div>


    <div class="content-section-b">
        <div class="container">
            <div class="row home-page-special-vertical-align">
                <div class="col-lg-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">London Connected Learning Centre</h2>
                    <p class="lead">London Connected Learning Centre (CLC), part of <a href="https://www.educationdevelopmenttrust.com/" target="_blank">Education Development Trust</a>, is an award-winning organisation that helps schools and other settings use digital technologies to improve learning.</p>
                    <p class="lead">The term Connected Learning describes our approach and activities. We make links between learning at school and at home, we involve children and young people in using digital technologies to create, experiment, design and explore, we foster collaboration between teachers, students and parents and we work in partnership with businesses, community and cultural organisations. 
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                    <picture>
                        <source media="(min-width: 992px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-460.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-350.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-750.jpg" class="img-responsive"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-750.jpg 750w, 
                                    php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-460.jpg 460w,
                                    php bloginfo('stylesheet_directory'); ?>/images/clc_tutor_with_pupil-350.jpg 350w"
                            sizes="100vw"
                            alt="CLC Tutor assisting a pupil at a computer" />
                    </picture>
                   
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-b -->

    <div class="content-section-c">
        <div class="container">
            <div class="row home-page-special-vertical-align">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What we do</h2>
                    <p class="lead">London CLC provides a range of in-school and centre based professional learning opportunities for educators, activities and projects for children and young people, and independent, tailored technology solutions for schools and other organisations.  We can help with planning your school’s digital strategy, shaping your computing curriculum, developing your teachers’ practice and re-designing your network. We work with schools from across London, throughout the UK, and beyond.</p>
                    <p class="lead">Contact <a href="mailto:jlawrence@londonclc.org.uk">Julia Lawrence</a> to discuss your needs, or alternatively browse our <a href="<?php bloginfo('stylesheet_directory'); ?>/images/London_CLC_Brochure_2016-2017.pdf" target="_blank">brochure</a> for ideas and inspiration.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <picture>
                        <source media="(min-width: 992px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-460.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-350.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-750.jpg" class="img-responsive"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-750.jpg 750w, 
                                    php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-460.jpg 460w,
                                    php bloginfo('stylesheet_directory'); ?>/images/pupils_on_camera-350.jpg 350w"
                            sizes="100vw"
                            alt="Pupils recording a scene in front of a green screen" />
                    </picture>
                   
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-b -->

    <div class="content-section-b">
        <div class="container">
            <div class="row home-page-special-vertical-align">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Us</h2>
                    <p class="lead">The London CLC team is made up of expert teachers, computing and multimedia specialists, trainers, technicians, filmmakers, designers and family learning tutors. We won the 2015 NAACE Impact Award for Technical Support, the 2014 NAACE Impact Award for Curriculum Support Services and the Association of Learning Technologist Team of the Year award in 2012.  The Centre is part of the Computing for Schools Network of Excellence for the teaching of computer science and is part of  the LGFL recognised Support Framework.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <picture>
                        <source media="(min-width: 992px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-460.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-350.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-750.jpg" class="img-responsive"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-750.jpg 750w, 
                                    php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-460.jpg 460w,
                                    php bloginfo('stylesheet_directory'); ?>/images/boy_with_robot-350.jpg 350w"
                            sizes="100vw"
                            alt="A primary school problem solving with a robot" />
                    </picture>
                 
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->
<?php

get_footer();