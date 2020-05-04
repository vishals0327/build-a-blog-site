<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Web_Droyd
 * @since 1.0
 * @version 1.0
 */
global $setting_post_id;

?>

<div class="main-sidebar">

	<div class="main-sidebar-container">

		<div class="widget-block widget-block-social-icons">

			<div class="widget-block-container">

				<div class="widget-block-title">
					<h6>Stay connected</h6>
				</div>

				<div class="widget-block-body">

					<div class="social-icons-block icons-style-1">
						<ul>
							<li>
								<a href="<?php the_field('facebook_link',$setting_post_id);?>" target="_blank" title="Facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('linkedin_link',$setting_post_id);?>" target="_blank" title="LinkedIn">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('codepen_link',$setting_post_id);?>" target="_blank" title="Codepen">
									<i class="fa fa-codepen" aria-hidden="true"></i>
									<i class="fa fa-codepen" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('github_link',$setting_post_id);?>" target="_blank" title="Github">
									<i class="fa fa-github-square" aria-hidden="true"></i>
									<i class="fa fa-github-square" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-block widget-block-text">

			<div class="widget-block-container">

				<div class="widget-block-title">
					<h6>Reach us</h6>
				</div>

				<div class="widget-block-body">
					<strong>Email:</strong>
					<p><a href="mailto:<?php the_field('email',$setting_post_id);?>" title="Email" target="_blank"><span>[email]</span></a></p>
					<strong>Phone:</strong>
					<p><a href="tel:+918729058220" title="+91 872-905-8220"><?php the_field('phone_number',$setting_post_id);?></a></p>
					<strong>Location:</strong>
					<p><?php the_field('address',$setting_post_id);?></p>
				</div>
			</div>
		</div>

		<div class="widget-block widget-block-categories">

			<div class="widget-block-container">

				<div class="widget-block-title">
					<h6>Categories</h6>
				</div>

				<div class="widget-block-body">
					<?php 
					$categories = get_categories(array(	
						'hide_empty' => true
					));
					echo '<ul class="categories-block">';
					foreach ($categories as $category) {
						echo '<li><a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' . $category->name . '<span>' . $category->category_count . '</span></a></li>';
					}
					echo '</ul>';
					?>
				</div>
			</div>
		</div>

		<div class="widget-block widget-block-posts">

			<div class="widget-block-container">

				<div class="widget-block-title">
					<h6>Popular Posts</h6>
				</div>

				<div class="widget-block-body">

					<ul class="blog-posts">
						<?php $args = array(
							'post_type' => 'post',
							'orderby'   => 'rand',
							'posts_per_page' => 3
						);
						$loop = new WP_Query($args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li>
								<?php if (has_post_thumbnail( $post->ID ) ){ ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="item-image overlay-hover scale-hover-2x">
										<img class="lazyload" data-src="<?php echo $image[0]; ?>" alt="Latest Posts" />
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
					</ul>
				</div>
			</div>
		</div>


		<div class="widget-block widget-block-tags">

			<div class="widget-block-container">

				<div class="widget-block-title">
					<h6>Tags Cloud</h6>
				</div>

				<div class="widget-block-body">

					<div class="tags-block">

						<div class="tags-block-container">
							<?php 
							$tags = get_tags(array(
								'hide_empty' => true
							));
							echo '<ul>';
							foreach ($tags as $tag) {
								echo '<li><a href="' . get_category_link($tag->term_id) . '" title="' . $tag->name . '" class="btn btn-wd-grey btn-wd-sm">' . $tag->name . '</a></li>';
							}
							echo '</ul>';
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-block widget-block-facebook">

<div class="widget-block-container">

<div class="widget-block-title">
<h6>Find us on Facebook</h6>
</div>

<div class="widget-block-body">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
<div class="fb-page" 
  data-href="https://www.facebook.com/Webdroyd"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"></div>
</div>
</div>
</div>
	</div>
</div>
