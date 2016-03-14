<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabthemes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div id="st-container" class="st-container st-effect-1">

<div class="sidetrigger" data-effect="st-effect-1">
	<i class="fa fa-arrow-left"></i>
	<i class="fa fa-arrow-right"></i>
</div>


<div class="st-menu st-effect-1" id="menu-1">
	<div class="sidebox">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div>

<div class="st-pusher">
	<div class="st-content">
		<div class="st-content-inner">


			<div id="page" class="hfeed site">
				<div id="search-box">
					<div class="container"> <div class="row">
						<div class="col-md-12">
							<?php get_search_form();?>
						</div>
					</div></div>
				</div>

				<header id="masthead" class="site-header" role="banner">
					<div class="container"> <div class="row">
						<div class="top">
						<div class="col-sm-4">
							<div class="site-branding">
									
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

							</div><!-- .site-branding -->
						</div> 
						<div class="col-sm-8">
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'qubez' ) ); ?>
							</nav><!-- #site-navigation -->	
						</div>
						<div class="menu-trig">	</div>
						<div class="strigger"><i class="fa fa-search"></i></div>
						</div>
					</div></div>
				</header><!-- #masthead -->

				<div id="content" class="site-content">

