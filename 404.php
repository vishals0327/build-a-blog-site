<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

								<div class="section-title text-center">
									<h2 class="section-main-title section-main-title-lg"><?php _e( '404!', 'webdroyd' ); ?></h2>
									<p class="section-subtitle"><?php _e( 'We cant locate what you are looking for. Please select a navigation item above.', 'webdroyd' ); ?></p>
									<div class="section-button">
										<a href="<?php echo esc_url(home_url('/'))?>" class="btn btn-wdroyd">Back to home</a>
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

<?php get_footer();
