<?php
/**
 * Theme created for makiwara.me
 * Header of page
 *
 * @package WordPress
 * @subpackage makiwara
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>


<div id="wrapper">
<header id="main_header" class="darker shadow">
		<div id="title" class="dark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
		<nav id="navbar">
			<?php $args = array(
				'type'                     => 'post',
				'child_of'                 => 0,
				'parent'                   => '',
				'orderby'                  => 'name',
				'order'                    => 'ASC',
				'hide_empty'               => 1,
				'hierarchical'             => 1,
				'exclude'                  => '',
				'include'                  => '',
				'number'                   => '10',
				'taxonomy'                 => 'category',
				'pad_counts'               => false 
			); 
			$categories = get_categories( $args ); 
			foreach ($categories as $category) {
				echo '<div class="top_button"><a href="'.get_category_link( $category->cat_ID ).'" title="">'.$category->cat_name.'</a></div>';
				};
		  
		  ?></nav>
		<!-- champ de recherche -->
		<aside id="searchbox">
            <form action="<?php echo home_url( '/' ); ?>" method="get">
                <input name="s" id="q" type="text" size="10" class="header" 
                value="" accesskey="4" placeholder="Search the blog..."/>
                <input type="submit" class="submit header" value="" />
            </form>
        </aside>
</header>

<div id="middle" class="clear">




