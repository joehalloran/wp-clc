<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

            <div class="row">
            	<div class="col-md-4 col-md-push-8">
					<?php
					get_template_part( 'template-parts/sidebar', 'filter-clc_teacher_cpd' );
					 ?>
				</div>
                <div class="col-md-8 col-md-pull-4">

				<?php
				$the_query = new WP_Query( array( 
					'posts_per_page' => 50,
					'post_type' => 'clc_teacher_cpd',
					'order'   => 'ASC',
					'orderby'   => 'meta_value' ,
					'meta_key'  => 'teacher-cpd-key-info-date',
					'meta_value'   => date( "Y-m-d" ),
					'meta_compare' => '>',
				) );



				// The Loop
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						
						get_template_part( 'template-parts/content-clc_teacher_cpd' );


					endwhile;

					// Previous/next page navigation.
					the_posts_pagination();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</div>
				
            </div>
        </div>
    </div>
<?php

get_footer();
