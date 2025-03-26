<?php

/**
 * Template name: Demo
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package car_theme
 */

get_header();
?>
<div class="pb-5" style="background-color: #c0c0c0;padding-top:150px;">
	<div class="container">
		<?php
		$job_title    = isset($_GET['job_title']) ? sanitize_text_field($_GET['job_title']) : '';
		$job_location = isset($_GET['job_location']) ? sanitize_text_field($_GET['job_location']) : '';

		$args = array(
			'post_type'      => 'recruitment',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		);

		// Kiểm tra và thêm điều kiện tìm kiếm theo tiêu đề công việc
		if (!empty($job_title)) {
			$args['s'] = $job_title;
		}

		// Kiểm tra và thêm điều kiện tìm kiếm theo vị trí công việc
		if (!empty($job_location)) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'location',
					'field'    => 'slug',
					'terms'    => $job_location,
				),
			);
		}

		$query = new WP_Query($args);

		// Lấy danh sách tất cả các location từ taxonomy 'location'
		$locations = get_terms(array(
			'taxonomy'   => 'location', // Tên taxonomy
			'hide_empty' => true, // Hiển thị cả taxonomy không có bài viết
		));
		?>
		<form class="search_job" id="search_job" method="GET">
			<div class="search_job_inner">
				<div class="row search_job_row align-items-center">
					<div class="col position-relative">
						<div class="search_input_wrapper">
							<input type="text" name="job_title" class="search_input form-control"
								placeholder="Nhập vị trí công việc..." value="<?php echo esc_attr($job_title); ?>">
							<span class="search_icon"></span>
						</div>
					</div>
					<div class="col-auto">
						<div class="search_job_line"></div>
					</div>
					<div class="col-4 position-relative">
						<div class="search_location_wrapper">
							<span class="search_location_icon"></span>
							<select name="job_location" class="search_location <?php echo !empty($job_location) ? '' : "select_placeholder"; ?>">
								<option value="">Chọn nơi làm việc</option>
								<?php if (!empty($locations) && !is_wp_error($locations)) : ?>
									<?php foreach ($locations as $location) : ?>
										<option value="<?php echo esc_attr($location->slug); ?>"
											<?php selected($job_location, $location->slug); ?>>
											<?php echo esc_html($location->name); ?>
										</option>
									<?php endforeach; ?>
								<?php endif; ?>
							</select>
							<span class="dropdown_icon"></span>
						</div>
					</div>
					<div class="col-auto">
						<button class="search_button" type="submit">Tìm kiếm</button>
					</div>
				</div>
			</div>
		</form>

		<div class="accordion_job">
			<?php
			if ($query->have_posts()) {
				$index = 0;
				while ($query->have_posts()) {
					$query->the_post();
					$hiddenClass = ($index >= 3) ? 'd-none' : '';
			?>
					<div class="accordion_job_item <?php echo $hiddenClass; ?>">
						<div class="accordion_job_header">
							<div class="accordion_job_header_top">
								<h3 class="accordion_job_title">
									<?php the_title() ?>
								</h3>
								<div class="accordion_job_toggle" data-open="Xem chi tiết" data-close="Thu gọn">
									Xem chi tiết
								</div>
							</div>
							<div class="accordion_job_header_bottom">
								<div class="accordion_job_address">
									<div class="icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9999 13.43C13.723 13.43 15.1199 12.0331 15.1199 10.31C15.1199 8.58687 13.723 7.19 11.9999 7.19C10.2768 7.19 8.87988 8.58687 8.87988 10.31C8.87988 12.0331 10.2768 13.43 11.9999 13.43Z" stroke="#5D6B82" stroke-width="1.5" />
											<path d="M3.61971 8.49C5.58971 -0.169998 18.4197 -0.159997 20.3797 8.5C21.5297 13.58 18.3697 17.88 15.5997 20.54C13.5897 22.48 10.4097 22.48 8.38971 20.54C5.62971 17.88 2.46971 13.57 3.61971 8.49Z" stroke="#5D6B82" stroke-width="1.5" />
										</svg>
									</div>
									<div class="text">
										<?php echo get_field('address'); ?>
									</div>
								</div>
								<div class="accordion_job_income">
									<div class="icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.5 13.75C9.5 14.72 10.25 15.5 11.17 15.5H13.05C13.85 15.5 14.5 14.82 14.5 13.97C14.5 13.06 14.1 12.73 13.51 12.52L10.5 11.47C9.91 11.26 9.51001 10.94 9.51001 10.02C9.51001 9.17999 10.16 8.48999 10.96 8.48999H12.84C13.76 8.48999 14.51 9.26999 14.51 10.24" stroke="#5D6B82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M12 7.5V16.5" stroke="#5D6B82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="#5D6B82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M22 6V2H18" stroke="#5D6B82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M17 7L22 2" stroke="#5D6B82" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="text">
										<?php echo get_field('income'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion_job_content">
							<div class="accordion_job_content_title">
								Mô tả công việc
							</div>
							<div class="accordion_job_content_editor editor">
								<?php echo get_field('job_description'); ?>
							</div>
							<div class="accordion_job_btn_wrap">
								<button type="button" class="accordion_job_btn">
									Ứng tuyển
								</button>
							</div>
						</div>
					</div>
			<?php
					$index++;
				};
			} else {
				echo 'Không có bài viết nào phù hợp.';
			}
			?>
		</div>

		<div class="show_all_job_btn">
			<div class="show_all_job">
				<div class="text">
					Xem thêm công việc khác
				</div>
				<div class="icon">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
