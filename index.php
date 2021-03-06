<?php
/**
 * Theme created for makiwara.me
 * Index page
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>
<?php get_header(); ?>


<section id="container">
		<?php
			if ( have_posts() ) {
				// Start the Loop.
				while ( have_posts() ){ 
					the_post();
					get_template_part( 'content', get_post_format() );
				};
				//include pagination
				//<article class="shadow content_main content_height_wrap">
				//	posts_nav_link();
				//</article>
			}
			else {
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			}
		?>
</section>

<?php get_sidebar( 'content' ); ?>
<?php
get_sidebar();
get_footer();
?>	