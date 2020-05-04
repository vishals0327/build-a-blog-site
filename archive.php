<?php
/**
 * The template for displaying archive pages
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
				<?php the_archive_title( '<h1 class="breadcrumb-main-title">', '</h1>' );?>
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

								<div class="blog-items-wrapper blog-col-1 blog-items-small-thumbs">

									<?php if ( have_posts() ) : ?>
										
										<?php while ( have_posts() ) : the_post(); ?>

											<article class="blog-item format-standard">

												<div class="blog-item-container">

													<?php if (has_post_thumbnail( $post->ID ) ) { ?>
														<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
														<div class="blog-item-media">
															<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="overlay-hover-2x scale-hover">
																<img class="lazyload" src="<?php echo $image[0]; ?>" data-src="<?php echo $image[0]; ?>" alt="Latest Posts" />
															</a>
														</div>
													<?php } ?>
													<div class="blog-item-body">

														<div class="blog-item-meta">
															<span class="item-meta-format">
																<a href="<?php the_permalink();?>">
																	<i class="fa fa-link"></i>
																	<i class="fa fa-link"></i>
																</a>
															</span>
															<span class="item-meta-date">
																<time><?php echo get_the_date();?></time>
															</span>
															

														</div>

														<h2 class="blog-item-title">
															<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
														</h2>

														<div class="blog-item-description">
															<?php $text = get_the_content() ; ?>    
															<?php $trimmed = wp_trim_words( $text, $num_words = 20, $more = null ); ?>
															<p><?php echo $trimmed ; ?></p>
														</div>

														<div class="blog-item-read-btn">
															<a href="<?php the_permalink();?>">Read more <i class="fa fa-long-arrow-right"></i></a>
														</div>
													</div>
												</div>
											</article>

										<?php endwhile; ?>

										<div class="wd-navigation-block">
											<nav aria-label="Page navigation">
												<?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
											</nav>
										</div>

										<?php else : ?>

											<article class="format-standard">

												<div class="blog-item-container">

													<div class="blog-item-body">

														<h2 class="blog-item-title">
															Nothing Found!
														</h2>

														<div class="blog-item-description">
															<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'webdroyd' ); ?></p>
														</div>
													</div>
												</div>
											</article>

										<?php endif; ?>
									</div>

									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>




	<?php get_footer();
