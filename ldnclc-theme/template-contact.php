<?php
/*
 * Template Name: Contact
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
            <div class="row spacer20"></div>
            <div class="row">
                <!-- Map Column -->
                <!-- Contact Details Column -->
                <div class="col-md-4 col-sm-5">
                    <h2>Contact Details</h2>
                    <p>
                        London Connected Learning Centre,<br>Rectory Grove,<br>London, SW4 0EL<br>
                    </p> 
                    <p><a href="mailto:info@londonclc.org.uk"><i class="fa fa-envelope-o fa-lg clc-blue"></i> info@londonclc.org.uk</a>
                    </p>
                    <p><i class="fa fa-phone fa-lg clc-blue"></i><span style="margin-left: 7px;">0207 720 7514</span></p>
                    <p><i class="fa fa-clock-o fa-lg clc-blue"></i><span style="margin-left: 5px;">Mon - Fri: 8:30 AM to 5:00 PM</span></p>
                    <p><i class="fa fa-fax fa-lg clc-blue"></i><span style="margin-left: 7px;">Fax: 0207 498 8089</span></p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="http://twitter.com/LdnCLC" target="_blank"><i class="fa fa-twitter-square clc-blue fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://vimeo.com/londonclc" target="_blank"><i class="fa fa-vimeo-square clc-blue fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-8 col-sm-7">
                    <div class="google-maps">
                    <!-- Embedded Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9942.342291878804!2d-0.141309!3d51.465765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20233c9cf2722d65!2sLondon+Connected+Learning+Centre!5e0!3m2!1sen!2suk!4v1438356748871" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-8 col-lg-9 col-sm-7">
                    <h2>Visiting London CLC</h2>
                    <p>London CLC is based in Clapham, in south London.  We are based in a beautifully refurbished Victorian school building at the junction of Rectory Grove and North Street in Clapham Old Town. <a href="<?php echo (site_url().'/venue-hire/'); ?>" target="_blank">Find out more</a> about hiring space in our building.</p>
                    <p>If you are coming from Clapham Common tube, exit by the stairs on the right. When you have reached street level turn left and walk down The Pavement past the fire station. The CLC is on the left.<p>
                    <p>London CLC is well served by public transport via Clapham Junction on National Rail services, Clapham Common via the Underground Northern Line, Wandsworth Road via the London Overground and is also on numerous local bus routes.<p>
                    <p>Visit <a href="https://tfl.gov.uk/plan-a-journey/">Transport for London</a> to plan your journey.</p>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-5 tfl-box">
                    <div class="spacer20"></div>
                    <script >(function(w){w.to='SW4+OEL';w.url='https://tfl.gov.uk'; return w; })(window.tfl = window.tfl || {});</script><script src='https://tfl.gov.uk/cdn/static/scripts/specific/widgets/jp-widget.js'></script>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>   
        <!-- /.container -->

<?php

get_footer();