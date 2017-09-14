<?php
get_header(); ?>
<div id="banner" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php 
			    echo do_shortcode("[metaslider id=4]"); 
			?>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<section id="descricao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h1>Nossas Cervejas</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 fadeInLeft wow">
					<a href="<?php echo esc_url( home_url( '/weiss' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv1.png"; ?>"/></a>
					<div class="desc-container">
						<h2>Weiss</h2>
						<p>
							Sabor tipicamente alemão, bem leve e muito refrescante
						</p>
						<a href="<?php echo esc_url( home_url( '/weiss' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
					</div>
				</div>
				<div class="col-md-6 fadeInRight wow">
					<a href="<?php echo esc_url( home_url( '/stout' )); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv2.png"; ?>"/></a>
					<div class="desc-container">
						<h2>Stout</h2>
						<p>
							Cerveja escura, sabor intenso com notas de chocolate e café.
						</p>
						<a href="<?php echo esc_url( home_url( '/stout' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 fadeInLeft wow">
					<a href="<?php echo esc_url( home_url( '/ipa' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv3.png"; ?>"/></a>
					<div class="desc-container">
						<h2>IPA</h2>
						<p>
							Rubra, frutada e encorpada, com alto grau de amargor.
						</p>
						<a href="<?php echo esc_url( home_url( '/ipa' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
					</div>
				</div>
				<div class="col-md-6 fadeInRight wow">
					<a href="<?php echo esc_url( home_url( '/smoked' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cerv4.png"; ?>"/></a>
					<div class="desc-container">
						<h2>Smoked</h2>
						<p>
							Cerveja tipo Rauchbier, produzida a partir de malte defumado.
						</p>
						<a href="<?php echo esc_url( home_url( '/smoked' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/conheca.png"; ?>"/></a>
					</div>
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
