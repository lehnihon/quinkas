<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Quinkas-Bier.png"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header" class="fadeIn wow header">
		<div class="container">
			<div class="menu-responsivo">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="<?php echo esc_url( home_url( '/cervejas' ) ); ?>">CERVEJAS</a></li
					><li><a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">A QUINKAS</a></li
					><li><a href="<?php echo esc_url( home_url( '/visite' ) ); ?>">VISITE A FÁBRICA</a></li
					><li><a href="<?php echo esc_url( home_url( '/delivery' ) ); ?>">DELIVERY</a></li
					><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ONDE ENCONTRAR</a></li
					><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">CONTATO</a></li>
				</ul>								
			</div>
			<div class="row header-logo">
				<div class="col-md-3 col-md-offset-4">
					<a href="<?php echo esc_url( home_url( '' ) ); ?>"><img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a>
				</div>
				<div class="col-md-offset-3 col-md-2 redes">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCHycCe88ZrQTeGi7YJneyhA?view_as=subscriber"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/quinkasbier"></a></li>
						<li class="twitter"><a target="_blank" href="https://www.facebook.com/QuinkasBier-257209691435462/"></a></li>
					</ul>					
				</div>
			</div><!-- .row -->
			<div class="row header-menu">
				<div class="col-md-12">
					<nav>
						<ul class="menu-principal clearfix">
							<li><a href="<?php echo esc_url( home_url( '/cervejas' ) ); ?>">CERVEJAS</a></li
							><li><a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">A QUINKAS</a></li
							><li><a href="<?php echo esc_url( home_url( '/visite' ) ); ?>">VISITE A FÁBRICA</a></li
							><li><a href="<?php echo esc_url( home_url( '/delivery' ) ); ?>">DELIVERY</a></li
							><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ONDE ENCONTRAR</a></li
							><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">CONTATO</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


