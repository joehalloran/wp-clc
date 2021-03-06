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
                <div class="col-md-8">

				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );


					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
            </div>
        </div>
    </div>
<?php

get_footer();
