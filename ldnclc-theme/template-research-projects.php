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
                 	<?php get_template_part( 'template-parts/sidebar', 'sarah' );?>
                   
                </div>
                <div class="col-sm-10 col-md-8">
                    <div class="row">
                        <div class="col-md-10 col-sm-9">
                            <p class="lead">London Connected Learning Centre is involved in education practice based research. We have recently developed a partnership with <a href="http://www.workingoutwhatworks.com" target="_blank"> researchED</a>, the grass-roots, teacher-led organisation that aims to improve research literacy in the education community.</p>
                        </div>
                        <div class="col-md-2 col-xs-5 col-sm-3">
                            <a href="http://www.workingoutwhatworks.com" target="_blank">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/researched_logo_100w.png" class="img-responsive" alt="ResearchED Logo">
                            </a>
                        </div>
                    </div>
                    <p class="lead">Our recent and current research projects include:</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="research-projects/blogging.html"><h3>Blogs & writing</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/maryam_and_boy270x154.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>There is plenty of evidence to show that blogging arouses students’ interest and enthusiasm for writing, but very little attention has been paid to its effects on the quality of writing...</p>
                                <a href="research-projects/blogging.html" role="button" class="btn btn-primary">Find out more</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="research-projects/reflected.html"><h3>ReflectED</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/reflected_logo270x154.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>ReflectED is an approach that develops pupil’s metacognition as a tool for learning. Rosendale Primary School in Lambeth has been developing the ReflectED approach...</p>
                                <a href="research-projects/reflected.html" role="button" class="btn btn-primary">Find out more</a>
                            </div>
                        </div>

                        <div class="col-md-4 hidden-sm clc-col">
                            <div class="clc-box">
                                <a href="research-projects/scratch-maths.html"><h3>ScratchMaths</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/scratchmaths270x154.jpg" class="img-responsive hidden-xs"> 
                                <hr class="hidden-xs">
                                <p>London CLC is a partner supporting the IOE UCL London Knowledge Lab led research project ScratchMaths.  The research, which has been funded by the Education...</p>
                                <a href="research-projects/scratch-maths.html" role="button" class="btn btn-primary">Find out more</a>
        				    </div>
                        </div>
                    </div>
                    <div class="row visible-sm">
                        <div class="col-sm-6 clc-col">
                            <div class="clc-box">
                                <a href="research-projects/scratch-maths.html"><h3>ScratchMaths</h3></a>
                                <hr>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/scratchmaths700x400.jpg" class="img-responsive"> 
                                <hr>
                                <p>London CLC is a partner supporting the IOE UCL London Knowledge Lab led research project ScratchMaths.  The research, which has been funded by the Education...</p>
                                <a href="research-projects/scratch-maths.html" role="button" class="btn btn-primary">Find out more</a>
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