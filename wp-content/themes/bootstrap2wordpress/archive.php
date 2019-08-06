<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_wordPrees
 */

get_header();
?>
<section id="blogImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
        <div class="container">
			<?php 	$categories = get_the_category();
 
			if ( ! empty( $categories ) ) { ?>
				<h1 id="BlogH1" class="page-title text-center"><?php echo $categories[0]->name  ?></h1>  
			<?php }  ?>
				
		</div>
</section>

<div class="container">
	<div class="row">
	<div id="primary" >
		<main class="col-sm-9">
			<br>
			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
			?>
		</main>	
		<main class="col-sm-3 pull-right"> 
			<?php get_sidebar(); ?>
		</main>		
	</div><!-- #primary -->
	</div> <!-- row -->
</div><!--container -->

<?php
get_footer();
?>
