<?php
/*
 * Template Name: Venue Hire
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
                <div class="col-sm-12">
                	<div class="banner-top-image">
                	</div>
                </div>
            </div>
            <div class="row spacer20"></div>
        	<div class="row">
                <div class="col-sm-2 hidden-xs">
                	<?php get_template_part( 'template-parts/sidebar', 'venue_hire_kim' );?>
                </div>
        		<div class="col-sm-10 col-md-8">
			    	<p class="lead">London City Learning Centre is a unique training centre based next to Clapham Common, offering five well equipped, light, airy and modern spaces ideal for professional learning, conferences, meetings events and filming. All spaces can be arranged to suit your needs; wireless internet access, equipment hire, technical support and catering are available. We cannot currently open on Sundays.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front_800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front_800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front-400.jpg 400w"
                            sizes="90vw"
                            alt="The London CLC building at night" />
                    </picture>
                    <!-- <img class="img-responsive services-feature-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_building_front_800x450.jpg" alt=""> -->
                    <h2 class="services-subtitle">Clapham Old Town</h2>
                    <p>Our bespoke training centre is located in Clapham Old Town. The area benefits from excellent transportation links. It is easily accessible via Clapham Junction on National Rail services, Clapham Common via the Northern Line, Wandsworth Road via the London Overground and also numerous local bus routes.</p>
                    <p>Clapham Old Town is next to Clapham Common and is situated next to many bars, restaurants, pubs, independent shops and other conveniences, whilst also being a few minutes from the rest of Clapham and its high street.</p>
                    <h2 class="services-subtitle">Spaces</h2>
					<div class="row">
						<div class="col-md-4 col-sm-6 text-center team-page-spacing">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/conference_room-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/conference_room-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>
		                    <h3 class="venue-room-title">The Conference Room<br>
		                        <small>Capacity: 50</small>
		                    </h3>
		                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conferenceRoom">Learn More</button>
		                </div>
		                <div class="col-md-4 col-sm-6 text-center team-page-spacing">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/macsuite-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/macsuite-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>
		                    <h3 class="venue-room-title">The Computer Suite<br>
		                        <small>Capacity: 30 plus tutor</small>
		                    </h3>
		                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#macSuite">Learn More</button>
		                </div>
		                <div class="col-md-4 col-sm-6 text-center team-page-spacing">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/small-meeting-2-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/small-meeting-2-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>
		                    <h3 class="venue-room-title">The Small Meeting Room<br>
		                        <small>Capacity: 8</small>
		                    </h3>
		                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallMeeting">Learn More</button>
		                </div>
		                <div class="col-md-4 col-sm-6 text-center team-page-spacing">
		                    <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/clc_door-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_door-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>  
		                    <h3>The Studio<br>
		                        <small>Capacity: 10</small>
		                    </h3>
		                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studio">Learn More</button>
		                </div>
		                <div class="col-md-4 col-sm-6 text-center team-page-spacing">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/breakout_space-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/breakout_space-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>
		                    <h3 class="venue-room-title-two">The Breakout Space</h3>
		                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#breakout">Learn More</button>
		                </div>
		                <div class="col-md-4 col-sm-6 text-center team-page-spacing">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/catering-290.jpg">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/catering-400.jpg" class="img-responsive img-rounded img-center" alt="" />
                            </picture>
		                    <h3>Catering
		                    </h3>
		                    <p>Refreshments and catering can be arranged for all events. Please <a href="contact.html" target="_blank">contact us</a> for prices and further information.</p>
							</div>
		            </div>
		            <div class="row">
		            	<div class="col-md-6"> 
		                    <div class="spacer20"></div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ApprovedVenueWhite.jpg" style="max-width: 50%"    class="img-responsive">
		                    <h4><small>London Connected Learning Centre is a Hire Space Approved Venue</small></h4>
		            	</div>
		            </div>	
		        </div>
		        <div class="col-md-2 hidden-xs hidden-sm">
                     <?php get_template_part( 'template-parts/sidebar', 'venue_hire_social' );?>
                </div>
            </div>
       	</div>
    </div>
    <!-- /.container -->

    <!-- MODALS -->

    <!-- Conference Room Modal -->
    <div class="modal fade" id="conferenceRoom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">The Conference Room</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-conf" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol> -->

                      <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/conference_room.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Conference Room
                                </div>
                            </div>
                            <!-- <div class="item">
                                <img src="http://placehold.it/600x400" alt="...">
                                <div class="carousel-caption">
                                    The Conference Room
                                </div>
                            </div> -->
                        </div>

                        <!-- Controls -->
                        <!-- <a class="left carousel-control" href="#carousel-conf" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-conf" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                    </div>
                    <div>
                        <p>The conference room is a large room with a built-in projector – perfect for larger groups, conferences, seminars and events. The space can also be cleared for movement or performing arts workshops. Laptops can be provided should you require them.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a role="button" class="btn btn-default" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1gSkTLxBsktUrF6vfldP0HbQZLeiUwMXDnzIt-8YzFMw/viewform" target="_blank">Book</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Conference Room Modal-->

    <!-- Macsuite Modal -->
    <div class="modal fade" id="macSuite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">The Computer Suite</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-mac" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                      <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/macsuite.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Computer Suite
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/macsuite2-600x400.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Computer Suite
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/macsuite3-600x400.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Computer Suite
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-mac" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-mac" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div>
                        <p>A state-of-the-art computer suite with 30 Apple Mac computers, a teacher station and a large 84cm LED display board.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a role="button" class="btn btn-default" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1gSkTLxBsktUrF6vfldP0HbQZLeiUwMXDnzIt-8YzFMw/viewform" target="_blank">Book</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Macsuite Modal-->

    <!-- Small Meeting Room Modal -->
    <div class="modal fade" id="smallMeeting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">The Small Meeting Room</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-smallMeet" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                      <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/small-meeting-1-600.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Small Meeting Room
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/small-meeting-2-600.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Small Meeting Room
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-smallMeet" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-smallMeet" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div>
                        <p>This meeting room is ideal for smaller groups wishing to hire space. It is a bright, quiet and modern space and can be equipped with projectors, flip charts and laptops for meetings.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a role="button" class="btn btn-default" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1gSkTLxBsktUrF6vfldP0HbQZLeiUwMXDnzIt-8YzFMw/viewform" target="_blank">Book</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Small Meeting Room Modal-->

    <!-- Studio Modal -->
    <div class="modal fade" id="studio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">The Studio</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-studio" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        </ol>

                      <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_door.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Studio
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <!-- <a class="left carousel-control" href="#carousel-studio" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-studio" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                    </div>
                    <div>
                        <p>The studio is a medium-sized, flexible space that can be used for filming and recording or as a meeting room or classroom. It’s equipped with an interactive LCD touch screen, iMac and green screen. Hire of filming equipment can be arranged. Please contact the CLC team for more information.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a role="button" class="btn btn-default" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1gSkTLxBsktUrF6vfldP0HbQZLeiUwMXDnzIt-8YzFMw/viewform" target="_blank">Book</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Studio Modal-->

    <!-- Break Out Space Modal -->
    <div class="modal fade" id="breakout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">The Breakout Space</h4>
                </div>
                <div class="modal-body">
                    <div id="carousel-breakout" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol> -->

                      <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/breakout_space.jpg" alt="...">
                                <div class="carousel-caption">
                                    The Breakout Space
                                </div>
                            </div>
                            <!--<div class="item">
                                <img src="http://placehold.it/600x400" alt="...">
                                <div class="carousel-caption">
                                    The Breakout Space
                                </div>
                            </div> -->
                        </div>

                        <!-- Controls -->
                        <!-- <a class="left carousel-control" href="#carousel-breakout" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-breakout" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                    </div>
                    <div>
                        <p>The breakout space is a shared space which may be used groups hiring other rooms. The high windows allow in plenty of natural light, while sofas and a pull-out kitchen make it a great place to have lunch or refreshments.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a role="button" class="btn btn-default" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1gSkTLxBsktUrF6vfldP0HbQZLeiUwMXDnzIt-8YzFMw/viewform" target="_blank">Book</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Break Out Space Modal-->

    <!-- END MODALS -->

<?php

get_footer();