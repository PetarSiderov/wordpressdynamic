<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_wordPrees
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
				<div class="post-details">
                                <span class="glyphicon glyphicon-user"></span>
                               		<?php the_author(); ?>
                                <span class="glyphicon glyphicon-time"></span>
                                	<time><?php the_date() ;?></time>
                                <span class="glyphicon glyphicon-folder-open"></span>
									<?php the_category(', '); ?>
                                <span class="glyphicon glyphicon-tags"></span>
									<?php the_tags('',', ',''); ?>
                                <div class="post-comments-badge">
                                    <a href=""><span class="glyphicon glyphicon-comment">

                                    </span> <?php comments_number(0, 1, '%'); ?></a>
								</div> <!-- post-comments-badge -->

									 <?php 
									 	edit_post_link( 'Edit', '<div><i class="fa fa-pencil"> </i>', '</div>' );
									 ?>
                            </div><!-- post detail --> 
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if( has_post_thumbnail() ) { // check for feature img} ?>
			<div class="post-image">
				<?php the_post_thumbnail() ?>
			</div><!-- post-image -->
	<?php }  ?>
        <div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- post-excerpt -->
		</div>					
	<?php bootstrap2wordpress_post_thumbnail(); ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
