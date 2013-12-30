<?php
/**
 * Theme created for makiwara.me
 * display a post
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>


<article id="post-<?php the_ID(); ?>" class="shadow minimal">
<h1 class="post"><a href=""></a></h1>
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
        <p class="small_space">By <span class="post_author"><?php the_author() ?></span> on <span class="post_date"><?php the_date() ?></span></p>
		<!-- tags of the post -->
		<p>
			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
        </p>
        
    </footer>
</article><!-- #post-## -->


	

	

