<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>


       

                            
        
        <section>
        	<div class="row">
			         <div class="slider">
			    <ul class="slides">
			    	<?php query_posts(array( 'post_type' => 'destaque','showposts' => '4' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			      <li>
			      <img src="<?php the_field('imagem_principal'); ?>">
			      </li>
			    <?php endwhile; endif; ?> 
	         	<?php wp_reset_query(); ?> 
			      
			    </ul>
			  </div>
        	</div>
        </section>


        <section>
        	<div class="container">
				<h2 class="titulo">
					<span>
						ÚLTIMAS <strong>DO BLOG</strong>
					</span>
				</h2>
				<div class="row">

				
				 <?php query_posts(array( 'post_type' => 'post','showposts' => '4' )); ?>
          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					
						<div class="col s12 m6 l3">
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
						</div>

					<?php endwhile; endif; ?> 
	         	<?php wp_reset_query(); ?>   		

						
					
				</div>
        	</div>
        </section>


        <section class="redes-sociais grey lighten-3">
        	<div class="container">
				<div class="row">
					<div class="col s12 m4 l4">
						<div class="white z-depth-1 boxcapa">
							<h2 class="titulo">
								<span>
									SIGA <strong>NOSSA FANPAGE</strong>
								</span>
							</h2>
							<div class="fb-page" data-href="https://www.facebook.com/drogariaamadeusoficial/" data-tabs="timeline" data-height="430" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/drogariaamadeusoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/drogariaamadeusoficial/">Drogaria Amadeus</a></blockquote></div>
						</div><!--.white z-depth-2-->
					</div>



					<div class="col s12 m4 l4">
						<div class="white z-depth-1 boxcapa">
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




					<div class="col s12 m4 l4">
						<div class="white z-depth-1 boxcapa">
							<h2 class="titulo">
								<span>
									SIGA <strong style="letter-spacing: -2px;">NOSSO INSTAGRAM</strong>
								</span>
							</h2>
							<div class="center">
								<div style="position: relative; height: 16px; width: 100%; overflow: hidden; padding-top:133.33333333333331%;"><iframe src="//widgets-code.websta.me/w/07a984d55607?ck=MjAxNy0xMi0xMlQwMTo0NDo0Mi4wMDBa" class="websta-widgets" allowtransparency="true" frameborder="0" scrolling="no" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe> <!-- WEBSTA WIDGETS - widgets.websta.me --></div>
							</div>
						</div><!--.white z-depth-2-->
					</div>


				</div><!--.row-->
        	</div>
        </section>

<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>
