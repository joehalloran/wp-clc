<?php
/*
 * Template Name: Research Projects
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
                    <p class="lead">London Connected Learning Centre is involved in education research. Our recent and current research projects include:</p>
                    <div class="row">
                        <div class="col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="<?php echo (site_url().'/services/research-projects/reflected/'); ?>"><h3>ReflectED</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/reflected_logo400.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>ReflectED is an approach that develops pupil’s metacognition as a tool for learning. Rosendale Primary School in Lambeth has been developing the ReflectED approach...</p>
                                <a href="<?php echo (site_url().'/services/research-projects/reflected/'); ?>" role="button" class="btn btn-primary">Find out more</a>
                            </div>
                        </div>
                        <div class="col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="<?php echo (site_url().'/services/research-projects/talis-video-study/'); ?>"><h3>The TALIS Video Study</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/talis-400.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>A pioneering, international study, which seeks to improve understanding of which aspects of teaching are related to pupil learning, and the nature of those relationships...</p>
                                <a href="<?php echo (site_url().'/services/research-projects/talis-video-study/'); ?>" role="button" class="btn btn-primary">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="<?php echo (site_url().'/services/research-projects/scratchmaths/'); ?>"><h3>ScratchMaths</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/scratchmaths-400.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>London CLC is a partner supporting the IOE UCL London Knowledge Lab led research project ScratchMaths.  The research, which has been funded by the Education...</p>
                                <a href="<?php echo (site_url().'/services/research-projects/scratchmaths/'); ?>" role="button" class="btn btn-primary">Find out more</a>
        				    </div>
                        </div>
                        <div class="col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="<?php echo (site_url().'/services/research-projects/blogging/'); ?>"><h3>Blogs & writing</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy-400.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>There is plenty of evidence to show that blogging arouses students’ interest and enthusiasm for writing, but very little attention has been paid to its effects on the quality of writing...</p>
                                <a href="<?php echo (site_url().'/services/research-projects/blogging/'); ?>" role="button" class="btn btn-primary">Find out more</a>
                            </div>
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