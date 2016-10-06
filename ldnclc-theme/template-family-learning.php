<?php
/*
 * Template Name: Family Learning
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
                    <?php get_template_part( 'template-parts/people', 'suki' );?>
                </div>
        		<div class="col-sm-10 col-md-8">
                    <p class="lead">Our programmes build on existing strengths within the family, celebrate diversity and support the learning and skills of both children and adult family members involved. London CLC has a long history of supporting family learning in schools and children’s centres in the London borough of Lambeth.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/family-learning-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/family-learning-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/family-learning-800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/family-learning-800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/family-learning-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/family-learning-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/family-learning-400.jpg 400w"
                            sizes="90vw"
                            alt="Parents and children taking photographs with digital cameras on a Family Learning course" />
                    </picture>
                    <h2 class="services-subtitle">Aims</h2>
                    <p>Our family learning courses aim to:</p>
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-blue"></i></div> 
                    <h4 class="services-list-heading">Raise the achievement of pupils through supporting their learning in the home</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-green"></i></div> 
                    <h4 class="services-list-heading">Improve adults' personal skills in order for them to be able to support their children’s education</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-orange"></i></div> 
                    <h4 class="services-list-heading">Improve adults’ skills to enable them to access further learning and employment</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-orange"></i></div> 
                    <h4 class="services-list-heading">Contribute to a culture of learning in the family</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-blue"></i></div> 
                    <h4 class="services-list-heading">Support relationships between home and school</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <h2 class="services-subtitle">Courses</h2>
                    <p>Courses include:</p>
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-green"></i></div> 
                    <h4 class="services-list-heading">E-safety for families</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-light-orange"></i></div> 
                    <h4 class="services-list-heading">Basic digital skills</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-orange"></i></div> 
                    <h4 class="services-list-heading">Animation</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <div class="services-asterisk"> <i class="fa fa-asterisk clc-dark-blue"></i></div> 
                    <h4 class="services-list-heading">Digital photography</h4><br>
                    <!-- <hr class="services-hr"> -->
                    <h2 class="services-subtitle">Costs</h2>
                    <p>Schools in the London Borough of Lambeth can access this programme without charge. Schools in other local authorities can use their pupil premium funding for CLC family learning programmes.</p>
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