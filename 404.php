<?php
/**
 * Theme created for makiwara.me
 *
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>
<?php get_header(); ?>


	<article id="post-<?php the_ID(); ?>" class="shadow post">
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

<?php
get_sidebar();
get_footer();
?>