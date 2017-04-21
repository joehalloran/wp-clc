<?php
/*
 * Template Name: Arts Award
 *
 * @package ldnclc_theme
 */

get_header(); ?>

 <!-- Page Content -->
     <!-- Page Content -->
    <div class="content-section-b">
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
                <?php get_template_part( 'template-parts/region', 'header' );?>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-2 hidden-xs">
                    <?php get_template_part( 'template-parts/people', 'kim' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">How can digital technologies help children and young people create exciting and innovative works of art, record and reflect upon their Arts Award journey and share their experiences and skills with others?</p>
                    <p class="lead">The CLC are delighted to be an Arts Award supporter. We run workshops for children and young people from schools and other settings, as well as CPD for teachers and arts award facilitators wishing to use technology to enhance their offer.</p>
                    <p class="lead">For further details and to arrange a session please contact Kim Morrison <a href="mailto:kmorrison@londonclc.org.uk">kmorrison@londonclc.org.uk</a></p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-800x450.jpg" class="img-responsive services-feature-image" 
                                    srcset="<?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/girl-wiring-LED-cardboard-city-400.jpg 400w"
                            sizes="90vw"
                            alt="Girls wiring LED into cardboard city" />
                    </picture>
                    <h2>Discover: ages 5 and up</h2>
                    <ul>
                        <li>
                            <h3>Discover the arts<br />
                            <small>Take part in different arts activities.</small></h3>
                            <p>Would you like to become a filmmaker, use a computer to present a self-portrait or use online tools to create imaginative, innovative designs? From 3D printing to games design the CLC’s range of technology based workshops allow you to explore and discover new ways of creating art.</p>
                        </li>
                        <li>
                            <h3>Find out<br />
                            <small>Experience artists and their work.</small></h3>
                            <p>Do you know how to use a computer to research your artist and see their work? Explore galleries and artworks around the world without leaving your chair! Learn which websites trustworthy, find out where you can meet artists in your area and record and present your research.</p>
                        </li>
                        <li>
                            <h3>Share<br />
                            <small>Show discoveries to others.</small></h3>
                            <p>Learn how to make a book, a comic, a podcast or a short film and share your discoveries and new found skills with others.</p>
                        </li>
                    </ul>
                    <h2>Explore: ages 7 and up</h2>
                    <ul>
                        <li>
                            <h3>Explore<br />
                            <small>Experience the work of artists and arts organisations.</small></h3>
                            <p>London Connected Learning Centre works with a variety of arts partner organisations, Let us know what you’d like to do and we’ll see if we can help.</p>
                        </li>
                        <li>
                            <h3>Create<br />
                            <small>Make art to show skills and creativity.</small></h3>
                            <p>Would you like to become a filmmaker, use a computer to present a self-portrait or use online tools to create imaginative, innovative designs? From 3D printing to games design the CLC’s range of technology based workshops allow you to explore and discover new ways of creating art.</p>
                        </li>
                        <li>
                            <h3>Present<br />
                            <small>Share achievements with others.</small></h3>
                            <p>Learn how to make a book, a comic, a podcast, a short film, blog or online portfolio and share your discoveries and new found skills with others.</p>
                        </li>
                    </ul>
                    <h2>Bronze: ages 11 and up</h2>
                    <ul>
                        <li>    
                            <h3>Experience the arts<br />
                            <small>As an audience member and record a response.</small></h3>
                            <p>Work with one of CLC’s arts partner organisations, see some fantastic art and use the latest digital technologies to record, critique and analyse what you see.</p>
                        </li>
                        <li>
                            <h3>Arts inspiration<br />
                            <small>Research the work and life of an inspiring artist or craftsperson arts.</small></h3>
                            <p>Explore galleries and artworks around the world without leaving your chair! Learn which websites trustworthy, find out where you can meet artists in your area and record and present your research.</p>
                        </li>
                        <li>    
                            <h3>Skills share<br />
                            <small>Pass on arts skills to others by leading a workshop or by giving a presentation.</small></h3>
                            <p>Use the latest digital technologies to make a digital book, a short film, blog or online portfolio and share your discoveries and new found skills with others.</p>
                        </li>
                    </ul>
                    <h2>Teachers and arts award facilitators</h2>
                    <p>Our unique range of CPD sessions show simple and effective technologies that can be used in your setting. From film-making to blogging, digital portfolios, 3D printing and design these sessions can enhance the arts award experience.</p>
                </div>
                <div class="col-md-2 hidden-xs hidden-sm">
                  <?php get_template_part( 'template-parts/sidebar', 'social' );?>
                </div>
            </div>
        </div>
    </div>
    <!-- End content section b -->

<?php

get_footer();