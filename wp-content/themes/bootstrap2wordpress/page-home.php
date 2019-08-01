<?php
/*  
    Template Name: Home Page
    
*/
//custom fields 

$prelaunch_price = get_post_meta( 9, 'prelaunch_price', true );
$launch_price = get_post_meta( 9, 'launch_price', true );
$final_price = get_post_meta( 9, 'final_price', true );
$course_url = get_post_meta( 9, 'course_url', true);
$button_text = get_post_meta( 9, 'button_text', true);
$optin_text = get_post_meta( 9, 'optin_text', true);
$button_optn_text = get_post_meta(9 , 'button_optn_text', true);

//Advanced custom fields 
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1 = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2 = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_description');

$who_feature_image = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body =  get_field('who_section_body');

get_header();
?>

 <!--Hero-->
 <section id="hero" data-type="backgroud" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">

                    <div class="col-sm-5">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
                    </div>
                    <!--col-->
                    <h1><?php bloginfo('name') ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?> </p>
                    <div class="col-sm-7 hero-text">
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends soon!</small> </h4>
                                <span><?php echo $prelaunch_price ?></span>
                            </div><!-- price -->
                            <div class="price">
                                <h4>Launch Price <small>Coming soon!</small> </h4>
                                <span><?php echo $launch_price ?></span>
                            </div><!-- price -->
                            <div class="price">
                                <h4>Final Price<small>Coming soon!</small> </h4>
                                <span><?php echo $final_price ?></span>
                            </div><!-- price -->
                        </div>
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?> </a></p>
                    </div>
                    <!--col-->
                </div>
            </div><!-- container -->
        </article>
    </section><!-- hero -->

    <!--OPT IN SECTION-->
    <section id="optin">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text ?></p>
                </div>
                <!--col-->

                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                       <?php echo $button_optn_text ?>
                    </button>
                </div>

            </div>
        </div>
        <!--Container-->
    </section>

    <!--BOOST YOUR INCOME -->
    <section id="boost-income">
        <div class="container">

            <div class="section-header">

            <!--- If feature exists -->
                <?php if( !empty($income_feature_image)) : ?>
                    <img src="<?php echo $income_feature_image['url']; ?>"
                     alt="<?php echo $income_feature_image['alt']; ?>">
                <?php endif; ?>
                <h2><?php echo $income_section_title ?></h2>
                <!-- <?php var_dump($income_section_title) ?>  - adding debbuger php --> 
            </div>
            <!--section-header-->

            <p class="lead">
                <?php echo $income_section_description ?> 
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1?></h3>
                    <p><?php echo $reason_1_description ?>
                    </p>
                </div><!-- col -->
                <div class="col-sm-6">
                    <h3><?php echo $reason_2 ?></h3>
                    <p><?php echo $reason_2_description ?></p>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <!--Container-->
    </section>

    <!--WHO BENEFITS-->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
            <?php if( !empty($who_feature_image)) : ?>
                <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
            <?php endif; ?>
                <h2><?php echo $who_section_title ?></h2>
            </div><!-- section header -->

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $who_section_body ?>
                </div><!--col-->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- who benefits -->

    <!--COURSE FEATURES-->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
                <h2>Course Features</h2>
            </div>
            <!--section header -->
            <div class="row">
                <div class="col-sm-2">
                    <i class="ci ci-computer"></i>
                    <h4>Lifetime access to 80+ lectures</h4>

                </div>
                <!--col-->
                <div class="col-sm-2">
                    <i class="ci ci-watch"></i>
                    <h4>10+ hours of HD video content</h4>
                </div>
                <!--col-->
                <div class="col-sm-2">
                    <i class="ci ci-calendar"></i>
                    <h4>30-day money back guarantee</h4>
                </div>
                <!--col-->
                <div class="col-sm-2">
                    <i class="ci ci-community"></i>
                    <h4>access to a community of like-minded students</h4>
                </div>
                <!--col-->
                <div class="col-sm-2">
                    <i class="ci ci-instructor"></i>
                    <h4>Direct access to the instructor</h4>
                </div>
                <!--col-->
                <div class="col-sm-2">
                    <i class="ci ci-device"></i>
                    <h4>Accessible content on your mobile devices</h4>
                </div>
                <!--col-->
            </div><!-- row -->
        </div><!-- course features -->
    </section><!-- course fetures-->

    <!--PROJECT FEATURES-->
    <section id="project-feature">
        <div class="container">

            <div class="section-header">
                <h2>Final Project Features</h1>
                    <p class="lead">Throughout this entire course, you work towards building an incredibly beautifull
                        website.
                        Want to see the website <strong>you</strong> are going to build ? <em>This website your're using
                            right now is the website you will hava
                            built entirely by yourself, bu the end of this course
                        </em>
                    </p>

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-design.png" alt="Design">
                            <h3>Sexy &amp; Modern Design</h3>
                            <p>You get to work with a modern, professional quality
                                design &amp; layout</p>
                        </div><!-- col -->
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-code.png" alt="Code">
                            <h3>Quality HTML5 &amp; CCS3</h3>
                            <p>You get to work with a modern, professional quality
                                design &amp; layout</p>
                        </div><!-- col -->
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-design.png" alt="Design">
                            <h3>Easy to use CMS</h3>
                            <p>You get to work with a modern, professional quality
                                design &amp; layout</p>
                        </div><!-- col -->
                    </div><!-- row -->
            </div><!-- section-header -->

        </div><!-- container -->
    </section><!-- project-feature -->

    <!--VIDEO FETURETTE-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch the course introduction</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/dPOO-NwLKHg" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div><!-- col -->
            </div><!-- row-->
        </div><!-- container -->
    </section><!-- featurette-->

    <!--Instructor-->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your instructor <small>Brad Hussey</small></h2>
                        </div><!-- end col-->
                        <div class="col-lg-4">
                            <a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com/+bradhussey" target="_blank" class="badge social gplus"><i
                                    class="fa fa-google-plus"></i></a>
                        </div><!-- end col-->
                    </div><!-- row -->

                    <p class="lead">
                        A highly skilled professional, Brad Hussey is a
                        passionate and experienced web designer, devloper,
                        blogger and digital entrepreneur.
                    </p>
                    <p>
                        A highly skilled professional, Brad Hussey is a
                        passionate and experienced web designer, devloper,
                        blogger and digital entrepreneur.
                    </p>
                    <p>
                        A highly skilled professional, Brad Hussey is a
                        passionate and experienced web designer, devloper,
                        blogger and digital entrepreneur.
                    </p>
                    <p>
                        A highly skilled professional, Brad Hussey is a
                        passionate and experienced web designer, devloper,
                        blogger and digital entrepreneur.
                    </p>

                    <hr>

                    <h3 class="marginInstructor">The numbers <small> They Don't lie</small></h3>
                    <br>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41.000+<span> students</span>
                                </div>
                            </div>
                            <!--num-->
                        </div><!-- end col-->

                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568<span> reviews</span>
                                </div>
                            </div>
                            <!--num-->
                        </div><!-- end col-->

                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>courses</span>
                                </div>
                            </div>
                            <!--num-->
                        </div><!-- end col-->

                    </div><!-- row -->

                </div><!-- col -->
                <div class="col-md-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/brad-elvis.png" class="img-responsive" alt="Image">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- instructor -->

    <!--Testimonials-->
    <section id="kudos">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2> What People are saying about Brad </h2>

                    <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast paced, easy to follow, and just funny
                                enough to keep you chuckling as you're slamming out lines of code.
                                <cite>
                                    &mdash; Brennan, graduate of all of Brad's courses
                                </cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->
                    <br>
                    <br>
                    <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/ben.png" alt="Ilustration of a man with a moustache">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast paced, easy to follow, and just funny
                                enough to keep you chuckling as you're slamming out lines of code.
                                <cite>
                                    &mdash; Brennan, graduate of all of Brad's courses
                                </cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->
                    <br>
                    <br>
                    <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/aj.png" alt="Ilustration of a man with a beard">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast paced, easy to follow, and just funny
                                enough to keep you chuckling as you're slamming out lines of code.
                                <cite>
                                    &mdash; Brennan, graduate of all of Brad's courses
                                </cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->
                    <br>
                    <br>
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/ernest.png" alt="Ilustration of a man with a goatee">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                These videos are well created, concise, fast paced, easy to follow, and just funny
                                enough to keep you chuckling as you're slamming out lines of code.
                                <cite>
                                    &mdash; Brennan, graduate of all of Brad's courses
                                </cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->

                </div><!-- end col -->
            </div><!-- row -->
        </div>
        <!--container-->
    </section><!-- kudos -->

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i>Subscribe to our mailing list</h4>
                </div> <!-- modal-header -->
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us,
                    we're going to give you our best-selling courses, <i>for free!</i></p>
                    <form class="form-inline">
                        <input type="text"id="usr" placeholder="Your first name"class="form-control">
                        <input class="form-control" placeholder="and your email" type="text"  id="pwd">
                        <button type="button" class="btn btn-danger">Subsciribe</button>
                    </form>
                    <hr>
                    <p>
                        By providing your email consent to receiving occasional promotional emails & newsletters.
                        No Spam, Just good stuff. We respect your privacy & you may unsubscribe at any time.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();

?>
