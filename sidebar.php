		


					<div class="col s12 m3 l3">

						<div class="white z-depth-1 boxcapa int-capa">
							<h2 class="titulo">
								<span>
									ÚLTIMA <strong>DO BLOG</strong>
								</span>
							</h2>
							<?php query_posts(array( 'post_type' => 'post','showposts' => '1' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="link-not">
							<div class="img-foto">
								<div class="ico-plu"><img src="<?php bloginfo('template_url'); ?>/imgs/ico-plus.jpg"></div>
								<img src="<?php the_field('imagem_capa'); ?>" class="img-not">
							</div>
							<h5><?php echo strip_tags(get_the_title()); ?></h5>
							<p><? $content = get_the_excerpt();
                                echo substr($content, 0, 100);
                                ?>...</p>
							</a>
								<?php endwhile; endif; ?> 
         	<?php wp_reset_query(); ?> 
						</div><!--.white z-depth-2-->


						<div class="white z-depth-1 boxcapa int-capa">
							<h2 class="titulo">
								<span>
									TABLOIDE <strong>DE OFERTAS</strong>
								</span>
							</h2>
							<div class="center">
								<?php query_posts(array( 'post_type' => 'tabloide','showposts' => '1' )); ?>
          						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
									<a href="<?php the_field('endereco_do_issu'); ?>" target="_blank"><img src="<?php the_field('imagem_do_tabloide'); ?>"></a>
								<?php endwhile; endif; ?> 
	         				<?php wp_reset_query(); ?> 
							</div>
						</div><!--.white z-depth-2-->

						
					</div>

