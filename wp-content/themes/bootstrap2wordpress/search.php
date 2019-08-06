<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap_to_wordPrees
 */

get_header();
?>


<section id="blogImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
		<div class="container">
			<h1 id="BlogH1" class="page-title text-center">Search Result for: "<?php echo  get_search_query(); ?>"</h1>
		</div>
	</section>
<div class="container">
	<div id="primary" class="row">
		<main id="content" class='col-sm-8'>
		<?php if ( have_posts() ) : ?>
				<p>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

					else :

					get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
		</main><!-- main -->
		<aside class="col-sm-4">
			   <?php get_sidebar(); ?>
		</aside>
	</div><!-- row -->
</div><!-- container -->
			

<?php

get_footer();
?>