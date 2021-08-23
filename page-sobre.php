<?php get_header(); ?>
	<div class="content-area">
		<main>
			
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-4">Barra Lateral</aside>
						<div class="news col-md-8">
							<?php
							//Se a condicao for verdade - Existe posts
								if(have_posts(  )):
									//Comeca o loop e renderiza o post
									while(have_posts(  )): the_post(  );
							?>
							<!-- Renderizando as strings -->
							<p>Esta é a página sobre!</p>
							<?php 
							// Finaliza do loop
									endwhile;
							// Se a condicao é falsa
								else:
							?>
								<p>There's nothing yet to be displayed...</p>
							<?php endif; ?>	
						</div>						
					</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>