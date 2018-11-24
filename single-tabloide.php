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
 								<h3><?php echo strip_tags(get_the_title()); ?></h3>
							<div class="texto">
									
								 <?php the_content(); ?> 

							</div>
							<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?>   
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
