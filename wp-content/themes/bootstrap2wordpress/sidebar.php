<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_wordPrees
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->


<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><i>Subscribe to our mailing list</h4>
                </div> <!-- modal-header -->
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us,
                    we're going to give you our best-selling courses, <i>for free!</i></p>
                    <form class="form-inline">
                        <input type="text"id="usr" placeholder="Your first name"class="form-control">
                        <input class="form-control" placeholder="and your email" type="text"  id="pwd">
                        <button type="button" class="btn btn-danger">Subsciribe</button>
                    </form>
                    <hr>
                    <p>
                        By providing your email consent to receiving occasional promotional emails & newsletters.
                        No Spam, Just good stuff. We respect your privacy & you may unsubscribe at any time.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
