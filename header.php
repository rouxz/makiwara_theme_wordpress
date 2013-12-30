<?php
/**
 * makiwara header
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>



<header class="darker" <?php body_class(); ?>>
		<div id="title" class="dark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
		<nav><tpl:Categories>
            <div class="top_button"><a href="{{tpl:CategoryURL}}" title="{{tpl:CategoryTitle encode_html="1"}}">
            {{tpl:CategoryTitle encode_html="1"}}
        </a></div></tpl:Categories></nav>
		<div id="searchbox">
            <form action="" method="get">
                <label for="q">Search:</label>
                <input name="q" id="q" type="text" size="10"
                value="" accesskey="4" />
                <input type="submit" class="submit" value="ok" />
            </form>
        </div>
</header>

<div id="middle" class="clear">




