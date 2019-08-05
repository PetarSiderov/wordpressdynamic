<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<main id="main" class="col-md-12" >
				<?php while ( have_posts())  
				
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();
				?>
				<?php 
				?>
			</main>
		</div>
	</main>
	
	</div>
	<main  class="col-sm-1"> 
		<?php get_sidebar(); ?>
	</main>
</div>
<?php

get_footer();
