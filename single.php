<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

											<?php if (has_post_thumbnail( $post->ID ) ) { ?>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
												<div class="blog-item-media">
													<img class="lazyload" src="<?php echo $image[0]; ?>" data-src="<?php echo $image[0]; ?>" />
												</div>
											<?php } ?>

											<div class="blog-item-body">					

												<div class="blog-item-meta">

													<span class="item-meta-date">
														<time><?php echo get_the_date();?></time>
													</span>
													<span class="item-meta-category">
														<?php $categories = get_the_category();
														if ( ! empty( $categories ) ) { ?>
														 Category:
															<?php $lastElements = end($categories);
															foreach($categories as $category) {
																if($category == $lastElements) {
																	echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_html( $category->name ) . '">' . esc_html( $category->name ) . '</a>';
																}
																else
																{ 
																	echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_html( $category->name ) . '">' . esc_html( $category->name ) . '</a>'. ' , ';
																}
															}
														} ?>
													</span>

												</div>

												<div class="blog-item-description">

													<?php while( have_posts() ): the_post(); ?>

														<?php the_content(); ?>          

													<?php endwhile; ?>
													<p>Thanks for reading this article. This post is about, <strong>"<?php the_title() ?>"</strong> and last updated on <?php echo get_the_date(); ?>. I am sure your visit to us must be quite satisfying and in line with your expectations from us.</p> 
												</div>
												
											</div>
										</div>
									</article>

									<div class="share-block">
										<span>Share on:</span>

										<div class="social-icons-block icons-style-1">
											<?php echo do_shortcode('[addtoany]');?>
											
										</div>
									</div>

									<div class="wd-navigation-block">
										<nav aria-label="Single Page navigation">

											<ul class="wd-pager">
												<?php $prev_post = get_adjacent_post(false, '', true);
												if(!empty($prev_post)) {
													echo '<li class="previous"><a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"> <img class="lazyload" src="https://www.webdroyd.com/wp-content/themes/webdroyd/assets/images/prev.png"> <div class="wd-pager-title">
													<span>Previous:</span><h6> ' . $prev_post->post_title . '</h6></div></a></li>'; } ?>

													<?php $next_post = get_adjacent_post(false, '', false);
													if(!empty($next_post)) {
														echo '<li class="next"><a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '"> <img class="lazyload" src="https://www.webdroyd.com/wp-content/themes/webdroyd/assets/images/next.png
														"> <div class="wd-pager-title">
														<span>Next:</span><h6> ' . $next_post->post_title . '</h6></div></a></li>'; } ?>
													</ul>
												</nav>
											</div>

											<div class="author-block">

												<div class="author-block-container">

													<div class="section-title section-title-sm">
														<h2 class="section-main-title">About the author</h2>
													</div>

													<div class="author-block-avatar">
														<a href="<?php echo site_url();?>/portfolio/" title="">
															<img class="lazyload" src="<?php echo get_template_directory_uri();?>/assets/images/author.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/author.png" alt="Author - Vishal Singla">
														</a>
													</div>
													<div class="author-block-body">

														<div class="author-block-title">
															<h5><a href="<?php echo site_url();?>/portfolio/" title="Vishal Singla">Vishal Singla</a></h5>
														</div>

														<div class="author-block-description">
															<p>I am a PHP Developer working in the computer software industry. I am skilled in WordPress, Core-PHP, HTML, jQuery and JavaScript. In my free time I go through various youTube Tech channels and learn something about new technologies every day.</p>
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
			</div>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer();
