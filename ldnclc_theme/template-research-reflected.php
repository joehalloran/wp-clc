<?php
/*
 * Template Name: Research - Reflected
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
                    <?php get_template_part( 'template-parts/sidebar', 'joe' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">ReflectED is an approach that develops pupil’s metacognition as a tool for learning. Rosendale Primary School in Lambeth has been developing the ReflectED approach to teach these skills using digital portfolios.</p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/reflected_logo700x250.jpg" class="services-feature-image img-responsive">
			    	<p>Children record learning through photographs, written records and audio recordings, which are then tagged by subject or responses to the topic. Pupils are then encouraged to review and reflect on these records over time with teachers and peers. Teachers can also look across these tags to get an overview of the areas that pupils are enjoying or struggling with, and identify specific pupil needs. This helps pupils, and their teachers, understand and develop strategies for learning. London CLC has worked in partnership with Rosendale School and the National Educational Trust to develop the ReflectED approach.</p>
                    <a class="btn btn-primary" style="margin-bottom:10px;" href="https://educationendowmentfoundation.org.uk/projects/reflected-meta-cognition-rosendale-primary-school/" target="_blank">Visit the EEF Project Page</a><br>
                    <a class="btn btn-primary" href="http://reflectedlearning.org.uk" target="_blank">Visit the ReflectED Website</a>
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