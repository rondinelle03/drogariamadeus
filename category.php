<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>


                                          
        
        <section class="redes-sociais grey lighten-3">
        	<div class="container">
				<div class="row">
					<div class="col s12 m9 l9">
						<div class="white z-depth-1 boxcapa ">
							<h1 class="titulo">
								<span style="width: 100%;">
									 ÚLTIMAS<strong>DO BLOG</strong>
								</span>
							</h1>

 						

								
				          			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

									
										<div class="col s12 m6 l3">
											<a href="<?php the_permalink(); ?>" class="link-not">
											<div class="img-foto">
												<div class="ico-plu"><img src="imgs/ico-plus.jpg"></div>
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


         				 <div class="navigation">
				            <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
				          </div>  
						</div>
					</div>			


					<?php
					  /* Busca o arquivo header.php do tema e includa na página */
					  get_sidebar();
					?>



				</div><!--.row-->
        	</div>
        </section>

<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>
