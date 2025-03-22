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
<div class="secSpace" style="background-color: #c0c0c0;">
	<div class="container">
		<h2>Button</h2>
		<a href="#" class="btn_start">
			Xem thêm
		</a>
		<a href="#" class="btn_down_app">
			Xem thêm
		</a>
		<a href="#" class="btn_see_more">
			Xem thêm
		</a>
		<a href="#" class="btn_view_all">
			Xem thêm
		</a>

		<div class="sec_title">
			Tiêu đề section
		</div>


		<div class="car_animation">
			<div class="car_animation_block" data-pos="1">
				<div class="car_animation_number">27,000+</div>
				<div class="car_animation_text">Khách hàng</div>
			</div>
			<div class="car_animation_block" data-pos="2">
				<div class="car_animation_number">1,000+</div>
				<div class="car_animation_text">Đại diện kinh doanh</div>
			</div>
			<div class="car_animation_block" data-pos="3">
				<div class="car_animation_number">2,500+</div>
				<div class="car_animation_text">Điểm cung cấp dịch vụ</div>
			</div>
			<div class="car_animation_block" data-pos="4">
				<div class="car_animation_number">160+</div>
				<div class="car_animation_text">Điểm kinh doanh</div>
			</div>
		</div>

		<div class="short_service_box">
			<img class="short_service_img_center" src="<?php echo CHILD_URI . '/assets/images/center_service.png'; ?>" alt="DriverPlus">

			<div class="short_service">
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
				<div class="short_service_item">
					<img src="<?php echo CHILD_URI . '/assets/images/car_1.png'; ?>" class="short_service_icon" alt="DriverPlus">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
