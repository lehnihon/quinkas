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
	<section id="descricao" class="sobre-desc detalhes-cerv">
		<div class="container">
			<div class="col-md-2 text-center wow fadeInLeft">
				<img class="e-cinza cerv-g" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv3bg.jpg"; ?>"/>
			</div>
			<div class="col-md-10 text-left wow fadeIn">
				<h1>Stout</h1>
				<p>Stout é um tipo de cerveja escuram seu sabor apesar de intenso, não é muito 
amargo e possui notas de chocolate e café.
</p>
				<p><strong>Ingredientes:</strong><br>
Malte, água, lúpulos de aroma, lúpulos de amargor e leveduras.</p>
				<p><strong>Dados técnicos:</strong><br>
Álcool (ABV) 5%; Cor (SRM) 36; Amargor (IBU) 45; OG 1,050; FG 1,011.</p>
				<p><strong>Temperatura de consumo:</strong><br>
8-12ºC</p>
			</div><br>
			<div class="row">
				<div class="col-md-12 text-center wow fadeIn">
					<div class="risca"></div><h2 class="risca-titulo">cervejas</h2><div class="risca"></div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-3 col-md-offset-1 text-center wow fadeInLeft">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv1b.jpg"; ?>"/>
					<h2>Weiss</h2>
					<a href="<?php echo esc_url( home_url( '/weiss' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
				</div>
				<div class="col-md-4 text-center wow fadeInUp">
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
