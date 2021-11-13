<?php 

/**
 * Template Name: Front Page
 */

get_header() ?>

<!-- this is where the background image will live -->
<div class="container-fluid" id="heroSection" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri(); ?>/img/movingHeaderResized.png');">
    <div class="row" id="heroRow" >
        <div class="col-xl-2 col-lg-1 col-md-1"></div>
        <div class="col-xl-8 col-lg-10 col-md-10" id="heroTitleCol">
            <h1 id="heroTitle">We Are <strong><em>The Solution</em></strong> to <strong><em>All</em></strong> Your Moving Needs</h1>
        </div>
        <div class="col-xl-2 col-lg-1 col-md-1"></div>
    </div>
</div>

<!-- main scheduling C2A -->
<div class="container-fluid" id="contactContainer">
        <div id="schedule">
            <h1>Free Estimate</h1>
            <div class="row g-3">
                <?php if ( is_active_sidebar( 'contact_container' ) ) : ?>
                    <?php dynamic_sidebar( 'contact_container' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- top section -->
    <div id="topBodySection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 bodySection">
                    <h1>We Make Moving Easy!</h1>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 bodySection whiteCardboard">
                            <p class="bodyContent layeredWhiteBox">
                                Moving is stressful. Through our research and screening-process, we take the pressure off of you, ensuring that you can move into your new home, worry-free. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- call us divider -->
    <section id="contactDivider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-1"></div>
                <div class="col-lg-8 col-md-10 col-sm-12" id="dividerContainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="callUsHeader"><a href="www.montanamovingsolutions.com/home/">Click Here</a> or Call<span class="big"></span> For<span class="newLine"></span> a Free Quote!</h2>
                        </div>
                        <div class="col-lg-12">
                            <h1 id="callUsNumber"><a href="tel:+14068859192">406.885.9192</a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- about section -->
    <section id="aboutSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 bodySection">
                    <div class="row">
                        <h1>About Us</h1>
                        <div class="col-md-12 col-sm-12  bodySection whiteCardboard">
                            <p class="bodyContent layeredWhiteBox">
                                We are the premier Flathead Valley Family-Owned moving company in Montana. We specialize in vehicle transportation, storage unit transportation, along with local and long distance moves. We are <em>your</em> affordable solution to all of your moving needs. <br/>
                                We know it's hard to find reliable people out there. That's why we're here: to provide the most reliable and trustworthy moving service in the Flathead Valley! <br/>
                                Fill out the Contact Form or Give Us A Call to get a FREE QUOTE!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <hr/>
    <!-- card section -->
    <section class="serviceSection">
        <div class="container-fluid">
            <h1>Services</h1>
            <div class="row h-100">
                <?php if ( is_active_sidebar( 'wp_widget_bootstrap_card' ) ) : ?>
                    <?php dynamic_sidebar( 'wp_widget_bootstrap_card' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- team section -->
    <!-- <section class="teamSection py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bodySection">
                    <h2 style="text-align: center;">Meet Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="row">
                        <div class="col-md-12 circleImageDiv">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">John Doe</h5>
                                <h6 class="subtitle mb-3">Moving Specialist</h6>
                                <p>"I've been moving stuff since I was 3"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="row">
                        <div class="col-md-12 circleImageDiv">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">John Doe</h5>
                                <h6 class="subtitle mb-3">Moving Specialist</h6>
                                <p>"I've been moving stuff since I was 3"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="row">
                        <div class="col-md-12 circleImageDiv">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">John Doe</h5>
                                <h6 class="subtitle mb-3">Moving Specialist</h6>
                                <p>"I've been moving stuff since I was 3"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="row">
                        <div class="col-md-12 circleImageDiv">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">John Doe</h5>
                                <h6 class="subtitle mb-3">Moving Specialist</h6>
                                <p>"I've been moving stuff since I was 3"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php get_footer() ?>