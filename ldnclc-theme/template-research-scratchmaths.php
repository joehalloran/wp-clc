<?php
/*
 * Template Name: Research- ScratchMaths
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
                    <?php get_template_part( 'template-parts/people', 'joe' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">London CLC is a partner supporting the IOE UCL London Knowledge Lab led research project ScratchMaths.</p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/scratchmaths700x400.jpg" class="img-responsive services-feature-image">
                    <p>The research, which has been funded by the Education Endowment Fund,  seeks to establish how the learning of computer programming in Scratch (the  free online programming environment that was developed by MIT Media Lab) can improve mathematics performance at Key Stage 2. It runs from 2014 to 2017 and if successful, will be rolled out across England. The project will develop a module of pupil material and assessments for teachers to guide the teaching of programming.</p>
                    <a class="btn btn-primary" style="margin-bottom:10px;" href="http://www.scratchmaths.org/" target="_blank">Visit the ScratchMaths Website</a>
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