<?php
/**
 * Theme created for makiwara.me
 * display a post
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>


<article id="post-<?php the_ID(); ?>" class="shadow post content_main content_height_wrap">
<h1 class="post"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
    <!--Category-->
    <h2 class="post"></h2>
    <!--  Content of the post-->
	<div class="post-content">
		<?php
			the_content();
		?>
	</div>
        
    <footer class="post">
        <!-- footer of the post -->
        <p class="small_space">par <span class="post_author"><?php the_author() ?></span> le <span class="post_date"><?php the_date() ?></span></p>
		<!-- tags of the post -->
		<p>
			<?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
        </p>  
    </footer>
</article><!-- #post-## -->


	

	

