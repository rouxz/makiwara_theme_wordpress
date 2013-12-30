<?php
/**
 * Theme created for makiwara.me

 */
?>

<?php get_header(); ?>

<section id="main-content" class="main-content">
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</section><!-- #main-content -->
<?php get_sidebar( 'content' ); ?>

<?php
get_sidebar();
get_footer();
?>