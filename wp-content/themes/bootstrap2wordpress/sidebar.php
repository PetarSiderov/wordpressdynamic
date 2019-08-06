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
<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
    <?php endif; ?>
</div>


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

                <?php
                // wp-query to get all published posts without pagination
                $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <div class="widget"> 
                    <?php if ( $allPostsWPQuery->have_posts() ) : ?>
                        <h4> Blog post </h4><hr>
                            <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
                                <p>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </p>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'There no posts to display.' ); ?></p>
                    <?php endif; ?> 
                </div>   
            <!-- listing all categories dinamicly -->             
              <?php  $categories = get_categories();
                foreach($categories as $category) {
                    echo '<div class="widget"><h4>Categories</h4><hr><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                } 
               ?>
</main><!-- #secondary -->
