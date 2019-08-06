<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_wordPrees
 */

get_header();
?>

	<section id="blogImg" class="feature-image feature-image-default-alt" data-type="background" data-speed="5">
		<div class="container">
			<h1 id="BlogH1" class="page-title text-center"><?php the_title(); ?></h1>
		</div>
	</section>

	<div class="container">
	<div class="row" id="primary">
	<main id="content" class="col-md-9" role="main">

		<div id="primary" class="content-area">
			<main id="main" class="col-md-10 " >
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

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
			</main><!-- #main -->
				<!-- ================================= SIDERBARR  -======= ---->
				<main  class="col-sm-1"> 
					<?php get_sidebar(); ?>
				</main>
		</div><!-- #primary -->		
	</main><!-- content -->
	</div><!-- primary -->
	</div><!-- container -->

<?php

get_footer();
?>
