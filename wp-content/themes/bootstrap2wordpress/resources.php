<?php 
/*
    Template Name: Resources Page 
*/
get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );
// $resource_img = get_field('resource_image');
// $resource_url = get_field('resource_url');
// $button_text = get_field('button_text');

?>

    <?php if (has_post_thumbnail() ) {  // check for feature image ?>

        <section id="ResourceImg" class="feature-image" style=" background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover" data-type="background" data-speed="5">
            <div class="container">
                <h1 id="ResourceH1" class="page-title text-center"><?php the_title(); ?></h1>
            </div>
    </section>

    <?php } else  { // fall back image ?>

        <section id="ResourceImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
            <div class="container">
                <h1 id="ResourceH1" class="page-title text-center"><?php the_title(); ?></h1>
            </div>
        </section>

    <?php }  ?>

       <!--BOOST YOUR INCOME -->
       <section id="boost-income">
        <div class="container">
            <p class="resurce-p"> 

            <?php while( have_posts() ) : the_post();  ?>
                    <?php the_content(); ?>
             <?php endwhile; //end of the loop  ?>
            </p>
            <?php $loop = new WP_Query(array('post_type'=> 'resource', 'order_by' => 'post_id', 'order'=> 'ASC')); ?>

            <div class="resource-row clearfix">
                <div class="resource">
                <?php while( $loop -> have_posts() )  : $loop -> the_post(); ?>
                    <?php 
                        $resource_img = get_field('resource_image');
                        $resource_url = get_field('resource_url');
                        $button_text = get_field('button_text');
                    ?>
                    <div class="row">
                    <div class="col-sm-4 ">
                   
                        <img src="<?php echo $resource_img['url'] ?>" alt="<?php echo $resource_img['alt'] ?>" />
                            <h3><a href="<?php echo $resource_url ?>"><?php the_title(); ?></a></h3> 
                        <?php the_content(); ?>
                            <?php if(!empty($button_text) ) : ?>
                                <a href="<?php echo $resource_url ?>" class="btn btn-success" ><?php echo $button_text ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile ?>
                 </div>
                </div>
            </div>
        </div>
        <!--Container-->
    </section>
<?php get_footer()?>