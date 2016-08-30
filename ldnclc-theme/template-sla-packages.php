<?php
/*
 * Template Name: SLA Packages
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
                    <?php get_template_part( 'template-parts/sidebar', 'kim' );?>
                </div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead">We offer Service Level Agreements to London schools. Our SLAs are designed to help schools use digital technologies to enhance students’ learning across the curriculum.</p>
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey-680.jpg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey-560.jpg">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey800x450.jpg" class="img-responsive services-feature-image"
                            srcset="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey800x450.jpg 800w, 
                                    <?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey-680.jpg 680w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey-560.jpg 560w,
                                    <?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey-400.jpg 400w"
                            sizes="90vw"
                            alt="Pupil with Makey Makey electronic device" />
                    </picture>
                    <!-- <img class="img-responsive services-feature-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/boy_with_makeymakey800x450.jpg"> -->
                    <h2 class="services-subtitle">Primary Brochure</h2>
                    <p>Our brochure details our offer to primary schools. We also offer bespoke programmes for secondary schools and other settings.</p>
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/images/London_CLC_Brochure_2016-2017.pdf" target="_blank">
                    <p>View/ download our brochure.</p></a>
                    <div class="row">
                        <a href="<?php bloginfo('stylesheet_directory'); ?>/images/London_CLC_Brochure_2016-2017.pdf" target="_blank">
                        <div class="col-lg-4 col-sm-5 col-xs-6">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_brochure_cover_1617-450x639.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-sm-5 col-xs-6">
                        <img class="img-responsive"  src="<?php bloginfo('stylesheet_directory'); ?>/images/clc_brochure_page_1617-450x639.jpg" alt="">
                        </div>
                        </a>
                    </div>
                    </a>
                    <h2 class="services-subtitle">Packages</h2>
                    <p>Our SLA packages combine in-school INSET, centre based CPD and conferences for teachers, workshops for pupils, technology loans, and family learning projects. Our service level agreements enable schools to have a sustained programme, which supports whole school aims and plans.
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#cpd" aria-expanded="false" aria-controls="computing">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-blue "></i>
                            </div>
                            <h4 class="services-list-heading" style="font-weight: 400">Teacher CPD <b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="cpd">
                            <li>
                                <p>We run regular and ongoing professional learning at our centre in Clapham and can also provide bespoke CPD in your setting. Our professional learning programmes focus on equipping teachers with specialist skills and knowledge that have direct applications in the classroom. We build and sustain relationships with teachers, enabling them to be part of communities of practice; for example through our computing subject leaders’ course and subject forums for maths, science, EYFS, MFL, humanities and English. We also provide sessions that help educators develop the specific technical skills they need to help their students’ learning.</p>
                                <a href="cpd.html"  target="_blank">See all teacher CPD sessions</a>
                            </li>
                        </div>
                    </ul>
                    <!-- <hr class="services-hr"> -->
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#advice" aria-expanded="false" aria-controls="computing">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-dark-green"></i>
                            </div>
                            <h4 class="services-list-heading" style="font-weight: 400">Consultancy and Advice<b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="advice">
                            <li>
                                <p>Every SLA package includes a number of in-school or centre-based consultancy sessions offering one-to-one support in a specific area.</p> 
                                <a href="consultancy.html" target="_blank">See all consultancy sessions</a>
                            </li>
                        </div>
                    </ul>
                    <!-- <hr class="services-hr"> -->
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#workshops" aria-expanded="false" aria-controls="computing">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-light-orange"></i>
                            </div>
                            <h4 class="services-list-heading" style="font-weight: 400">Pupil Workshops<b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="workshops">
                            <li>
                                <p>These practical workshops can take place at the CLC’s Clapham centre or in school. The sessions are led by a CLC staff member but are designed so that the class teacher can take a leading role. The activities have been developed with reference to the national curriculum programmes of study. Sessions have been split into specific support for delivery of the computing programmes of study and sessions to facilitate using technology to support cross-curricular learning.</p>
                                <a href="pupil-workshops.html" target="_blank">See full list of pupil workshops</a>
                            </li>
                        </div>
                    </ul>
                    <!-- <hr class="services-hr"> -->
                    <ul class="nav nav-pills nav-stacked services-dropdown">
                        <a data-toggle="collapse" href="#loans" aria-expanded="false" aria-controls="computing">
                            <div class="services-asterisk">
                                <i class="fa fa-asterisk clc-dark-orange"></i>
                            </div>
                            <h4 class="services-list-heading" style="font-weight: 400">Equipment Loans<b class="caret"></b></h4>
                        </a>
                        <div class="collapse" id="loans">
                            <li>
                                <p>The CLC has a range of equipment and hardware that schools can borrow for the period of a short term. The CLC will provide help-sheets including curriculum ideas, video tutorials and maintenance support for the duration of the loan. Loans can be combined with CLC or school-based training to help ensure that equipment is used most effectively.</p>
                                <a href="sla-technology-loans.html" target="_blank">See all equipment loans</a>
                            </li>
                        </div>
                    </ul>
                    <!-- <hr class="services-hr"> -->
                   
                    <h2 class="services-subtitle">Pricing</h2>
                    <div class="spacer10"></div>
                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr><th>Package Level</th><th>Bronze</th><th>Silver</th><th>Gold</th><th>Platinum</th></tr>
                        </thead>
                        <tr><td>CPD - Twilight - Whole school staff</td><td>1</td><td>1</td><td>1</td><td>2</td></tr>
                        <tr><td>CPD - Half-day in school - Whole school staff</td><td>0</td><td>0</td><td>1</td><td>1</td></tr>
                        <tr><td>Pupils/Students: Half-day at CLC for Whole Class</td><td>5</td><td>1</td><td>2</td><td>2</td></tr>
                        <tr><td>Pupils/Students: Full-day at CLC for whole Class</td><td>0</td><td>4</td><td>4</td><td>6</td></tr>
                        <tr><td>Technology Loans</td><td>3</td><td>3</td><td>4</td><td>5</td></tr>
                        <tr><td>Half-day consultancy</td><td>1</td><td>1</td><td>2</td><td>2</td></tr>
                        <tr><td>Half-day, CLC based CPD - Single Attendee  </td><td>4</td><td>5</td><td>6</td><td>6</td></tr>
                        <tr><td>Full-day, CLC based CPD - Single Attendee</td><td>4</td><td>5</td><td>6</td><td>6</td></tr>
                        <tr><td>Access to newsletters, tutorials, help sheets and other teaching materials.</td><td>No Charge</td><td>No Charge</td><td>No Charge</td><td>No Charge</td></tr>
                        <tr><td>General Advice- email or telephone</td><td>No Charge</td><td>No Charge</td><td>No Charge</td><td>No Charge</td></tr>
                        <tr><td><strong>COST</strong></td><td><strong>£3,275</strong></td><td><strong>£4,425</strong></td><td><strong>£5,575</strong></td><td><strong>£6,800</strong></td></tr>
                    </table> 
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