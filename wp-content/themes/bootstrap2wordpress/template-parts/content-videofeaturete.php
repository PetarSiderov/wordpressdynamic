<?php
    $video_from_youtube = get_field('video_from_youtube');
    $header_for_video = get_field('header_for_video');
?>
    <!--VIDEO FETURETTE-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo $header_for_video ?></h2>
                    <?php echo $video_from_youtube ?>
                    </div><!-- col -->
            </div><!-- row-->
        </div><!-- container -->
    </section><!-- featurette-->
