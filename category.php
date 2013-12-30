<?php
/**
 * Theme created for makiwara.me
 * display all the post of a category
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>

<?php get_header(); ?>

<section id="#container">

    <!-- header for explaining the related category -->
    <?php if ( have_posts() ) : ?>
    <header class="category shadow">
        <h1><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

    <?php
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
            printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
    ?>
    </header>
    
     <!--display the related posts -->
    <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
                get_template_part( 'content', get_post_format() );

            endwhile;

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