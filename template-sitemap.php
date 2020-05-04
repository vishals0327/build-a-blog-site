<?php
	/*Template Name: Sitemap Template
	*/
	
	get_header(); ?>


	<div class="page-title-section page-title-section-wide grey-background-color">

		<div class="section-container">

			<div class="breadcrumb-title">

				<div class="container">
					<h1 class="breadcrumb-main-title"><?php the_title();?></h1>
				</div>
			</div>

			
		</div>
	</div>

	<div class="page-body">

		<div class="main-content">

			<div class="main-content-container">

				<div class="wd-section">

					<div class="section-container">

						<div class="container">

							<div class="row">

								<div class="col-md-12">
									<div class="sitemap-block">
										<div class="sitemap-block-container">
											<div class="col-md-3">
												<?php  wp_nav_menu( array(
													'menu'   => 'Header Menu',										
												) ); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>	