<?php
get_header(); ?>
<div id="banner" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</div>
<div id="content">
	<section id="descricao" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1>Cervejas</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center wow fadeInLeft">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv1b.jpg"; ?>"/>
					<h2>Weiss</h2>
					<a href="<?php echo esc_url( home_url( '/weiss' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
				</div>
				<div class="col-md-3 text-center wow fadeInUp">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv2b.jpg"; ?>"/>
					<h2>Stout</h2>
					<a href="<?php echo esc_url( home_url( '/stout' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
				</div>
				<div class="col-md-3 text-center wow fadeInUp">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv3b.jpg"; ?>"/>
					<h2>IPA</h2>
					<a href="<?php echo esc_url( home_url( '/ipa' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
				</div>
				<div class="col-md-3 text-center wow fadeInRight">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv4b.jpg"; ?>"/>
					<h2>Smoked</h2>
					<a href="<?php echo esc_url( home_url( '/smoked' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
				</div>
			</div>
		</div>
	</section>
	<section id="detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12  wow fadeInUp">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/play.png"; ?>"/>
					<p>Feita com os melhores ingredientes</p>
					<p class="amarelo">Em um processo exclusivo</p>
				</div>
			</div>
		</div>		
	</section>
</div>

<?php get_footer(); ?>
