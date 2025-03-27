<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basetheme
 */

get_header();
?>

<!-- banner -->
<?php
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
<?php
else:
	echo '<div class="py-5"></div>';
endif; 
?>
<!-- end banner -->

<!-- tab category -->
<?php
$select_style = get_field("select_style", "category_" . $category_id); // Lấy ACF field
if (LANG == 'en') {
	// blog_news_tabs_en
	$blog_news_tabs = get_field('blog_news_tabs_en', 'option') ?? [];
} else {
	$blog_news_tabs = get_field('blog_news_tabs', 'option') ?? [];
}
if ($blog_news_tabs):
?>
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
<?php
endif;
?>
<!-- end tabs -->

<?php
if ($select_style == 1):
	require CHILD_PATH . '/template-parts/cat_exp.php';
elseif ($select_style == 2):
	require CHILD_PATH . '/template-parts/cat_news.php';
endif;
?>

<?php
get_footer();