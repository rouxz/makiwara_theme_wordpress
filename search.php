<?php
/**
 * Theme created for makiwara.me
 * display all the results of a search
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>

<?php get_header(); ?>

<section id="container">

    <!-- header for explaining the related category -->
    <header class="shadow content_main content_height_minimal">
        <h1 class="category">Search for : <?php the_search_query(); ?></h1>
    </header>
    
     <!--display the related posts -->
    <?php
		if ( have_posts() ) :
            // Start the Loop.
            while ( have_posts() ) : the_post();

            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
                get_template_part( 'content', get_post_format() );

            endwhile;
			//include pagination
			<article class="shadow content_main content_height_minimal">
				posts_nav_link();
			</article>
        else :
            // If no content, include the "No posts found" template.
            get_template_part( 'content', 'none' );

        endif;
    ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>