<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Web_Droyd
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="page-title-section page-title-section-wide grey-background-color">

	<div class="section-container">

		<div class="breadcrumb-title">

			<div class="container">
				<h1 class="breadcrumb-main-title"><?php the_title() ?></h1>
			</div>
		</div>

	</div>
</div>

<div class="page-body page-right-sidebar">

	<div class="main-content">

		<div class="main-content-container">

			<div class="wd-section">

				<div class="section-container">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="blog-items-wrapper blog-single-item">

									<article class="blog-item format-standard">

										<div class="blog-item-container">
											
											<div class="blog-item-body">

												<div class="blog-item-description">
													
													<?php while( have_posts() ): the_post(); ?>

														<?php the_content(); ?>          

													<?php endwhile; ?>

												</div>

											</div>

										</div>

									</article>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();
