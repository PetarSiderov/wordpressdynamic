<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_wordPrees
 */

?>

   <!--Sign up-->
   <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-3">
                    <h2>Are you ready to take your coding skills
                        to the <strong>next level</strong> ?
                    </h2>
                    <p><a href="#" class="btn btn-lg btn-block btn-success">Yes sign me up</a></p>
                </div><!-- end-col -->
            </div><!-- row-->
        </div><!-- container-->
    </section><!-- signup -->
    <!--FOOTER-->
    <footer> 
        <div class="container">
             <div class="col-sm-4">
                 <p><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="bootstrap to wordpress "></a></p>
             </div> <!-- col-sm-3-->
             <div class="col-sm-6">
      
                <?php 
						wp_nav_menu( array(
						
						'theme_location'  => 'menu-2',
                        'container'       => 'ul',
                        'container_class' => 'list-unstyled',
                        'menu_class'      => 'list-inline',
                        ));
					?>
             </div><!-- end-col  ---> 
            <div class="col-sm-2">
                 <p class="pull-right">&copy;<?php bloginfo('name'); ?><?php echo date('Y') ?> <?php  the_author(); ?> </p>
            </div>
        </div><!-- container --->
    </footer>

</body>
</html>
<?php wp_footer(); ?>
  <!--BOOTSTRAP CORE JAVASCRIPT
        Placed at the end of the document so the pages load faster
        -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <script src="//use.typekit.net/gla7wnd.js"></script>
    <script> try { Typekit.load(); } catch (e) { }</script>
</body>
</html>
