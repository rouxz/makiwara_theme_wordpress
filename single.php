<?php
/**
 * Theme created for makiwara.me
 * display a single post
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>

<?php get_header(); ?>
<section id="#container">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					/* content of post */
                    get_template_part( 'content', get_post_format() );
            ?>
            <!-- include link to previous or next page -->
            <article id="post-<?php the_ID(); ?>" class="shadow minimal">
                Previous | Next
            </article>
            <?php ?>
            <?php

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

</section>
<?php
get_sidebar();
get_footer();
?>