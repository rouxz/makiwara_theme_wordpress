<?php
/**
 * Theme created for makiwara.me
 * 404 error
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>
<?php get_header(); ?>

<section id="#container">
	<article id="post-<?php the_ID(); ?>" class="shadow post content_main content_height_wrap">
		<h1 class="post">Page not found</h1>
			<!--Category-->
			<h2 class="post"></h2>
			<!--  Content of the post-->
			<div class="post-content">
				<?php
					Error 404 - Page not found
				?>
			</div>
				
			<footer class="post">
				<!-- footer of the post -->
			</footer>
</article><!-- #post-## -->
</section>
<?php
get_sidebar();
get_footer();
?>