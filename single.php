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
<section id="container">
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
				<article id="post-link-<?php the_ID(); ?>" class="shadow content_main content_height_minimal">
					<?php  previous_post_link(); ?> <?php if (get_previous_post() != '' && get_next_post_link() != '') { echo '|';} ?> <?php next_post_link(); ?>
				</article>
            
             <!-- include comments -->
			<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ){
						echo '<article id="post-comment-',the_ID(),' class="shadow content_main content_height_wrap">';
						comments_template();
						echo '</article>';
					}
				
                 endwhile;
            ?>

</section>
<?php
get_sidebar();
get_footer();
?>