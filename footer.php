<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Web_Droyd
 * @since 1.0
 * @version 1.2
 */
global $setting_post_id;
?>

<footer class="footer-section">

	<div class="footer-top-section">

		<div class="footer-top-section-container">

			<div class="container">

				<div class="row">

					<div class="col-md-4">

						<div class="widget-block widget-block-text">

							<div class="widget-block-container">

								<div class="widget-block-title">
									<h6>About us</h6>
								</div>

								<div class="widget-block-body">
									<?php the_field('about_content',$setting_post_id);?>

								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2">

						<div class="widget-block widget-block-link">

							<div class="widget-block-container">

								<div class="widget-block-title">
									<h6>Quick Links</h6>
								</div>

								<div class="widget-block-body">

									<?php  wp_nav_menu( array(
										'menu'   => 'Quick Links',
										'menu_class' => 'links-block',
									) ); ?>

								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">

						<div class="widget-block widget-block-posts">

							<div class="widget-block-container">

								<div class="widget-block-title">
									<h6>Latest Posts</h6>
								</div>

								<div class="widget-block-body">

									<ul class="blog-posts">
										<?php $args = array('post_type' => 'post', 'posts_per_page' => 2);
										$loop = new WP_Query($args );
										while ( $loop->have_posts() ) : $loop->the_post(); ?>
											<li>
												<?php if (has_post_thumbnail( $post->ID ) ){ ?>
													<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
													<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="item-image overlay-hover scale-hover-2x">
														<img class="lazyload" src="<?php echo $image[0]; ?>" data-src="<?php echo $image[0]; ?>" alt="Latest Posts" />
													</a>
												<?php } ?>
												

												<div class="blog-item-body">

													<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="blog-item-small-title"><?php the_title();?></a>

													<div class="blog-item-meta">
														<span class="item-meta-date">
															<time><?php echo get_the_date();?></time>
														</span>

													</div>
												</div>
											</li>
										<?php endwhile;
										wp_reset_postdata();
										?>
										<!--post-->
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">

						<div class="widget-block widget-block-projects">

							<div class="widget-block-container">
								<div class="widget-block-title">
									<h6>Connect on LinkedIN</h6>
								</div>
								<div class="widget-block-body">
									<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="vishalsingla34"><a class="LI-simple-link" href='https://in.linkedin.com/in/vishalsingla34?trk=profile-badge'>Vishal Singla</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-copyright-section">

		<div class="footer-copyright-section-container">

			<div class="container">

				<div class="row">

					<div class="copyright-widget widget-left-side">

						<div class="copyright-widget-container">

							<div class="info-block">

								<div class="info-block-container">
									<p>
										<a href="<?php echo esc_url(home_url('/'))?>" title="WebDroyd" target="_blank">WebDroyd</a> &copy; Copyright <?php echo date('Y');?> - All Rights Reserved | DMCA Protected
									</p>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyloadxt/1.1.0/jquery.lazyloadxt.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyloadxt/1.1.0/jquery.lazyloadxt.bg.js'></script>
<?php wp_footer(); ?>
</body>
</html>
