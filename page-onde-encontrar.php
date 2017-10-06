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
	<section id="descricao" class="contato onde sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1>Onde Encontrar</h1>
					<p>Veja onde você pode encontrar a sua Quinkas Bier</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

					$i = 1;
					$args = array(

						'posts_per_page' => 9,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'paged' => $paged);
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<div class="row">
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-6">
									<article id="post-<?php the_ID(); ?>" >
										<header class="entry-header">
											<?php if ( has_post_thumbnail() && !is_search() ) { ?>
												<?php the_post_thumbnail('', array(
													'class' => "e-cinza img-responsive",
												)); ?>
											<?php } ?>
										</header> <!-- /.entry-header -->
										<div class="entry-summary">
											<h2 class="entry-title"><?php the_title(); ?></h2>
											<?php the_content(); ?>

										</div> <!-- /.entry-summary -->

									</article> <!-- /#post -->
								</div>
								<?php
								if($i % 2 == 0):
								?>
									</div><div class="row">
								<?php	
								endif;
								$i++;
								?>
							<?php endwhile; ?>
						</div>
						<div class="paginacao">
						<?php
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $query->max_num_pages
						) );
						?>
						</div>
					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<div class="col-md-12  text-center">
					<a href="<?php echo esc_url( home_url( '/parceiro' ) ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro.jpg"; ?>"/></a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
