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
				
			
				<div class="post-image">
					<?php the_post_thumbnail() ?>
				</div>
			
				<div class="col-md-12" style="background: white"> 
					<a href="<?php get_permalink(); ?>"><h3><?php the_title(); ?> </h3></a>
						<div class="post-details">
						<span class="glyphicon glyphicon-user"></span>
							<?php the_author(); ?>
					<span class="glyphicon glyphicon-time"></span>
							<time><?php the_date() ;?></time>
					<span class="glyphicon glyphicon-folder-open"></span>
							<?php the_category(', '); ?>
					<span class="glyphicon glyphicon-tags"> </span>
							<?php the_tags('',', ',''); ?>
					<div class="post-comments-badge">
							<a href="<?php comments_link()?>"><span class="glyphicon glyphicon-comment">
							</span> <?php comments_number(0, 1, '%'); ?></a>
					</div> <!-- post-comments-badge -->
					<?php 
							edit_post_link( ' Edit', '<i class="fa fa-pencil"> </i> ', '' );
					?>
					<hr>
					</div><!-- post detail --> 
					<br>
					
					<?php while ( have_posts())  
				
						the_post();
						//get_template_part( 'template-parts/content', get_post_type() );
						
						the_content();
						the_post_navigation();

						if(comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
					<?php 
					?>
				</div>
				</main>
			</div>
		</main>
		<br>
		
		<main  class="col-sm-1"> 
			<?php get_sidebar(); ?>
		</main>
	</div>
		
</div>
<?php get_footer(); ?>
