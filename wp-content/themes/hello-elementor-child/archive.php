<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basetheme
 */

get_header();

$current_category = get_queried_object();
$category_id = $current_category->term_id;
$banner_image = get_field("banner_image", "category_" . $category_id) ?? '';
$banner_title = get_field("banner_title", "category_" . $category_id) ?? '';
$banner_desc = get_field("banner_description", "category_" . $category_id) ?? '';
if ($banner_image) :
?>
	<div class="secSpace">
		<div class="news-banner"
			style="background-image: url('<?php echo $banner_image; ?>');">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<?php if ($banner_title) : ?>
							<h1 class="news-banner__title">
								<?php echo $banner_title; ?>
							</h1>
						<?php endif;
						if ($banner_desc):
						?>
							<p class="news-banner__desc">
								<?php echo $banner_desc; ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="xxx">
	<div class="secSpace">
		<?php
		$select_style = get_field("select_style", "category_" . $category_id); // Lấy ACF field
		$blog_news_tabs = get_field('blog_news_tabs', 'option') ?? [];
		if ($blog_news_tabs):
		?>
			<!-- News -- Tin tức -->
			<section class="secSpace blogNews-tabs">
				<div class="tabs">
					<?php foreach ($blog_news_tabs as $item) :
						$translated_category_id = function_exists('pll_get_term') ? pll_get_term($item['category']) : '';
						if ($translated_category_id) :
							$active_class = ($category_id ===  $translated_category_id) ? 'tabs__item--active' : '';
					?>
							<a href="<?php echo get_term_link($translated_category_id); ?>" class="tabs__item <?php echo $active_class; ?>">
								<?php echo get_cat_name($translated_category_id); ?>
							</a>
					<?php endif;
					endforeach; ?>
				</div>
			</section>
		<?php endif; ?>
		<?php if ($select_style == 1): ?>
			<!-- Kiến thức xe hơi --  -->
			<?php
			$recent_posts = get_posts([
				'numberposts'  => 10,
				'post_status'  => 'publish',
				'category'     => $category_id,
			]);
			?>
			<!--  -->
			<section class="secSpace postList-style2">
				<div class="container">
					<h1 class="car-knowledge__title"><?php single_cat_title(); ?></h1>
					<!--  -->
					<?php if (!empty($recent_posts)) :
						$posts_to_display = array_slice($recent_posts, 0, 4);
					?>
						<div class="row g-4">
							<?php foreach ($posts_to_display as $post) :
								$post_id = $post->ID;
							?>
								<div class="col-lg-3 col-md-6">
									<a href="<?php echo get_permalink($post_id); ?>" class="related-news">
										<img class="related-news__image"
											src="<?php echo get_the_post_thumbnail_url($post_id, 'medium') ?: get_stylesheet_directory_uri() . '/assets/images/no_image.jpg'; ?>"
											alt="<?php echo get_the_title($post_id); ?>">
										<div class="related-news__content">
											<h3 class="related-news__title"><?php echo get_the_title($post_id); ?></h3>
											<div class="related-news__info">
												<div class="related-news__meta">
													<div class="related-news__category">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
																stroke="white" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
														<span>
															<?php echo $current_category->name; ?>
														</span>
													</div>
													<div class="related-news__date">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
																stroke="white" stroke-miterlimit="10" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
														</svg>
														<span><?php echo get_the_date('d/m/Y', $post_id); ?></span>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php
							endforeach; ?>
							<!--  -->
							<?php $posts_to_display = array_slice($recent_posts, 4, 6);
							foreach ($posts_to_display as $post) :
								$post_id = $post->ID;
							?>
								<div class="col-lg-4">
									<a href="<?php echo get_permalink($post_id); ?>" class="highlight-news-item">
										<img class="highlight-news-item__image"
											src="<?php echo get_the_post_thumbnail_url($post_id, 'medium') ?: get_stylesheet_directory_uri() . '/assets/images/no_image.jpg'; ?>"
											alt="<?php echo get_the_title($post_id); ?>">
										<div class="highlight-news-item__content">
											<h3 class="highlight-news-item__title"><?php echo get_the_title($post_id); ?>
											</h3>
											<div class="highlight-news-item__info">
												<div class="highlight-news-item__meta">
													<div class="highlight-news-item__category">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
																stroke="white" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
														<span>
															<?php echo $current_category->name; ?>
														</span>
													</div>
													<div class="highlight-news-item__date">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
																stroke="white" stroke-miterlimit="10" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
														</svg>
														<span><?php echo get_the_date('d/m/Y', $post_id); ?></span>
													</div>
												</div>
												<button class="highlight-news-item__button"><?php _e('Xem ngay', 'child_theme') ?></button>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					<?php wp_reset_postdata();
					endif; ?>
			</section>

			<!--  -->
			<?php
			$featured_news = get_field("featured_news", "category_" . $category_id) ?? '';
			if ($featured_news) :
			?>
				<div class="secSpace">
					<div class="container">
						<h2 class="highlight-news__title">
							<?php _e("Tin nổi bật", "child_theme"); ?>
						</h2>
						<div class="row">
							<?php foreach ($featured_news as $post_id) :
								$post_title = get_the_title($post_id);
								$post_url = get_permalink($post_id);
								$post_thumbnail = get_the_post_thumbnail_url($post_id, 'medium') ?: get_stylesheet_directory_uri() . '/assets/images/no_image.jpg';
								$post_date = get_the_date('d/m/Y', $post_id);
								$categories = get_the_category($post_id);
							?>
								<div class="col-lg-3">
									<a href="<?php echo $post_url ?>" class="related-news">
										<img class="related-news__image" src="<?php echo $post_thumbnail; ?>" alt="<?php echo $post_title; ?>">
										<div class="related-news__content">
											<h3 class="related-news__title"><?php echo $post_title; ?></h3>
											<div class="related-news__info">
												<div class="related-news__meta">
													<div class="related-news__category">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M13.6668 11.1001H10.3335" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M15.2134 5.33325H8.78671C7.36671 5.33325 6.21338 6.49325 6.21338 7.90659V17.2999C6.21338 18.4999 7.07338 19.0066 8.12671 18.4266L11.38 16.6199C11.7267 16.4266 12.2867 16.4266 12.6267 16.6199L15.88 18.4266C16.9334 19.0133 17.7934 18.5066 17.7934 17.2999V7.90659C17.7867 6.49325 16.6334 5.33325 15.2134 5.33325Z"
																stroke="white" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
														<span>
															<?php echo $categories[0]->name ?>
														</span>
													</div>
													<div class="related-news__date">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M9.3335 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14.6665 5.33325V7.33325" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path d="M6.3335 10.0601H17.6668" stroke="white" stroke-miterlimit="10"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M18 9.66659V15.3333C18 17.3333 17 18.6666 14.6667 18.6666H9.33333C7 18.6666 6 17.3333 6 15.3333V9.66659C6 7.66659 7 6.33325 9.33333 6.33325H14.6667C17 6.33325 18 7.66659 18 9.66659Z"
																stroke="white" stroke-miterlimit="10" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 13.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M14.463 15.1334H14.469" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 13.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M11.9972 15.1334H12.0031" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 13.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
															<path d="M9.52938 15.1334H9.53537" stroke="white" stroke-linecap="round"
																stroke-linejoin="round" />
														</svg>
														<span><?php echo $post_date; ?></span>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php
		elseif ($select_style == 2):
			require CHILD_PATH . '/template-parts/cat_news.php';
		endif; ?>
	</div>
</div>
<?php
get_footer();
