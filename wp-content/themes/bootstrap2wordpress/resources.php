<?php 
/*
    Template Name: Resources Page 
*/
get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );
?>

    <?php if (has_post_thumbnail() ) {  // check for feature image ?>

        <section id="ResourceImg" class="feature-image" style=" background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover" data-type="background" data-speed="5">
            <div class="container">
                <h1 id="ResourceH1" class="page-title text-center">Resource</h1>
            </div>
    </section>

    <?php } else  { // fall back image ?>

        <section id="ResourceImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
            <div class="container">
                <h1 id="ResourceH1" class="page-title text-center">Resource</h1>
            </div>
        </section>

    <?php }  ?>
       <!--BOOST YOUR INCOME -->
       <section id="boost-income">
        <div class="container">
            <p class="resurce-p"> 
                Welcome to the Bootstrap to WordPress resource page! On this page, I will provide you with usefull resources,
                plugins, tools, applications and websites to help make your life as a coder a little bit easier. 
                <b>I recommend adding this page to your bookmarks for convenient future reference.</b>
                <br>
                <br>
                <small>
                <i>
                    Please keep in mind some of the following resources aare amy affiliate links, and should you decide
                    to make a pruchase, I will earn a small commission -at no extra cost to you!.
                    Please keep in mind some of the following resources aare amy affiliate links, and should you decide
                    to make a pruchase, I will earn a small commission -at no extra cost to you!.
                </i>
                </small>
            </p>
            <div class="resource-row clearfix">
                <div class="resource">
                    <div class="row">
                    <div class="col-sm-3 ">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/justhost-logo.jpg" alt="justhost-logo">
                    <h3><a href="www.justhost.com">Justhost</a></h3> 
                    <p> 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 

                    </p>
                    <button type="button" class="btn btn-success">Get started with Justhost</button>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/coda2-logo.jpg" alt="coda2-logo">
                    <h3><a href="www.coda2.com">Coda2</a></h3> 
                    <p> 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 

                    </p>
                    <button type="button" class="btn btn-success">Check out coda 2</button>
                    </div>
                    <div class="col-sm-3 col-sm-offset-2">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dropbox-logo.jpg" alt="dropbox-logo">
                    <h3><a href="www.dropbox.com">Dropbox</a></h3> 
                    <p> 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 
                        When I made a web site very first time about 7 years ext 

                    </p>
                    <button type="button" class="btn btn-success">Try dropbox for free</button>
                    </div>
                </div>
                   
                    
                </div>
            </div>
        </div>
        <!--Container-->
    </section>
<?php get_footer()?>