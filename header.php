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
<meta name="google-site-verification" content="JRbUjmsCeL21Ij5oqZfB7r1llnyoCOTF_IFZcjZBDm0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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
					><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">DELIVERY</a></li
					><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">ONDE ENCONTRAR</a></li
					><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">CONTATO</a></li>
				</ul>								
			</div>
			<div class="row header-logo">
				<div class="col-md-3 col-md-offset-4 logo-center">
					
				</div>
				<div class="col-md-offset-3 col-md-2 redes">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href=""></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
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
							><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">DELIVERY</a></li
							><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">ONDE ENCONTRAR</a></li
							><li><a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">CONTATO</a></li>
						</ul>
					</nav><!-- #site-navigation -->						
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


