<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="breadcrumb-main-title">Search Results for: <?php the_search_query();?></h1>
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


								<div class="search-items-wrapper">


									<ul class="list-posts" id="catPage_listing">
										<?php if ( have_posts() ) : ?>
											<?php /* Start the Loop */ ?>
											<?php while ( have_posts() ) : the_post(); ?>

												<article class="search-item">

													<div class="search-item-container">

														<div class="search-item-body">

															<div class="search-item-meta">
																<span class="item-meta-format">
																	<i class="fa fa-link"></i>
																</span>
																<span class="item-meta-date">
																	<time><?php echo get_the_date();?></time>
																</span>
															</div>

															<h2 class="search-item-title">
																<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
															</h2>

															<div class="search-item-description">
																<?php $text = get_the_content() ; ?>    
																<?php $trimmed = wp_trim_words( $text, $num_words = 20, $more = null ); ?>
																<p><?php echo $trimmed ; ?></p>
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
											
										</ul>
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
