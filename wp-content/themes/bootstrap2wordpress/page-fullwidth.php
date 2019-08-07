<?php 
/* Template Name: Full-Width Template

*/
get_header();

$thumbnailurl = wp_get_attachment_url(get_post_thumbnail_id($post -> ID));
?>
    <?php if ( has_post_thumbnail()) { ?>
    <section id="SourceImg" class="feature-image feature-image-default-alt" style="background:url( '<?php echo $thumbnailurl; ?>') no-repeat; background-size:cover" data-type="background" data-speed="5">
        <div class="container">
            <h1 id="SourceH1" class="page-title text-center"><?php the_title(); ?></h1>
        </div>
    </section>
    <?php } else { // fall back image ?>
    <section id="SourceImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
        <div class="container">
            <h1 id="SourceH1" class="page-title text-center"><?php the_title(); ?></h1>
        </div>
    </section>   
    <?php }  ?>
 
 <div class="container">
     <div class="row">
        <div class="content" class="col-sm-12">
        <main>   
            <?php while(have_posts()): the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <main>
        </div><!-- content --> 
    </div><!-- row -->
</div><!-- container -->
  
<?php
get_footer();

?>