<?php
/*  
    Template Name: Home Page
    
*/

$project_features_title  = get_field('project_feature_title');
$project_feature_body    = get_field('project_feature_body');

$instructor_section_title   = get_field('instructor_section_title');
$instructor_name            = get_field('instructor_name');
$bio_excerpt                = get_field('bio_excerpt');
$full_bio                   = get_field('full_bio');
$twitter_username           = get_field('twitter_username');
$facebook_username          = get_field('facebook_username');
$google_username            = get_field('google_plus_username_');
$number_of_students         = get_field('number_of_students');
$number_of_reviews_         = get_field('number_of_reviews_');
$number_of_courses          = get_field('number_of_courses');

get_header();
?>
<br>
<br>
 <!--Hero-->
 <?php
		while ( have_posts() ) :
			the_post();

            get_template_part( 'template-parts/content', 'hero' );
            get_template_part('template-parts/content', 'opt' );
            get_template_part('template-parts/content', 'boostyourincome' );
            get_template_part('template-parts/content', 'benefits' );
            get_template_part('template-parts/content', 'coursefeaturete');
            get_template_part('template-parts/content', 'projectfeaturete');
            get_template_part('template-parts/content', 'videofeaturete');
            get_template_part('template-parts/content', 'instructor');
            get_template_part('template-parts/content', 'testimonials');
            get_template_part('template-parts/content', 'signup');
            get_template_part('template-parts/content', 'subscribemodal');
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>

<?php

get_footer();

?>
