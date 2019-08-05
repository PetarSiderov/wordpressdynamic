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

<main id="secondary" class="widget-area">
				<div class="widget" >
                        <h4>Join our Mailing List</h4>
                        <hr>
                        <p>Keep up-to-date with the latest news, and we'll <b>
                            send you a discount for the course!
                        </b>
                        <br>
                        <br>
                        <button type="button" class="btn-success">Click here to subscribe</button>
                    </div>
                    <div class="widget">
                        <form class="search-form">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </form>
                    </div>
                    <div class="widget">
                        <h4> About bootstrap to wordpress</h4>
                        <hr>
                        <p>Your Reference List should be located on a separate page at the end of your essay and titled: 
                                    Reference List. It should include the details of all your in-text citations, arranged alphabetically
                                    A-Z by author surname.
                        </p>
                    </div>
                    <div class="widget">
                        <h4> About bootstrap to wordpress</h4>
                        <hr>
                        <p ><a href="/">Blog post #1</a></p>
                        <p ><a href="/">Blog post #2</a></p>
                        <p ><a href="/">Blog post #3</a></p>
                        <p ><a href="/">Blog post #4</a></p>
                    </div>

                    <div class="widget">
                        <h4> About bootstrap to wordpress</h4>
                        <hr>
                        <p ><a href="/">Category #1</a></p>
                        <p ><a href="/">Category #2</a></p>
                        <p ><a href="/">Category #3</a></p>
                        <p ><a href="/">Category #4</a></p>
                        <p ><a href="/">Category #5</a></p>
                    </div>
</main><!-- #secondary -->
