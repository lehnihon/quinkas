	<footer id="footer">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-bot.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-3">
					<h2>Entre em <br>contato</h2>
					<p>
						Fale com a <strong>Quinkas</strong>. <br> Será um prazer receber o seu contato.
					</p>
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cel.jpg"; ?>"/>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<h2>Assine nossa <br>Newsletter</h2>
					<p>
						Fique por dentro das nossas<br> novidades, promoções e <br>lançamentos.
					</p>
					<?php echo do_shortcode('[contact-form-7 id="26" title="News"]'); ?>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<h2>Esteja sempre <br>com a gente!</h2>
					<p>
						Continue conectado com <br> a <strong>Quinkas</strong> em suas redes sociais favoritas.
					</p>
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCHycCe88ZrQTeGi7YJneyhA?view_as=subscriber"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/quinkasbier"></a></li>
						<li class="twitter"><a target="_blank" href="https://www.facebook.com/QuinkasBier-257209691435462/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-5">
					<span>Rua Nova Hamburgo, 99 - Ipiranga - São Paulo - SP</span>
				</div>
				<div class="col-md-5">
					<ul class="menu">
						<li><a href="<?php echo esc_url( home_url( '/contato' )); ?>">Trabalhe Conosco</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contato' )); ?>">Fornecedor</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contato' )); ?>">Parcerias</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contato' )); ?>">Contato</a></li>
					</ul>
				</div>
				<div class="col-md-1 col-md-offset-1 text-right">
					<a target="_blank" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
