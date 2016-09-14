<?php
/**
 * The single post template file.
 *
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
                    <?php get_template_part( 'template-parts/sidebar', 'teacher-cpd-info' ); ?>
				</div>
                <div class="col-md-8 col-md-pull-4">
                	<h2>Course Description</h2>
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

						get_template_part( 'template-parts/sidebar', 'teacher-cpd-outcomes' );

						get_template_part( 'template-parts/sidebar', 'materials' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

				endif; ?>

				</div>
	        </div>
        </div>
    </div>
<?php

get_footer();
