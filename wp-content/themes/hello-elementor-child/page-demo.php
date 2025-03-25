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
		<form class="search_job" id="search_job" method="GET">
			<div class="search_job_inner">
				<div class="row align-items-center">
					<div class="col position-relative">
						<div class="search_input_wrapper">
							<input type="text" class="search_input form-control" placeholder="Nhập vị trí công việc...">
							<span class="search_icon">🔍</span>
						</div>
					</div>
					<div class="col-auto position-relative">
						<div class="search_location_wrapper">
							<span class="search_location_icon">📍</span>
							<select class="search_location form-select custom_select">
								<option selected>Chọn nơi làm việc</option>
								<option value="hanoi">Hà Nội</option>
								<option value="hochiminh">Hồ Chí Minh</option>
								<option value="danang">Đà Nẵng</option>
							</select>
							<span class="dropdown_icon">▼</span>
						</div>
					</div>
					<div class="col-auto">
						<button class="search_button btn btn-primary" type="submit">Tìm kiếm</button>
					</div>
				</div>
			</div>
		</form>

		<style>
			.search_job {
				border: 2px solid #dcdcdc;
				border-radius: 50px;
				padding: 10px 20px;
				background: #fff;
				max-width: 800px;
				margin: auto;
			}

			.search_job_inner {
				width: 100%;
			}

			.search_input_wrapper {
				position: relative;
			}

			.search_input {
				padding-right: 35px;
			}

			.search_icon {
				position: absolute;
				right: 10px;
				top: 50%;
				transform: translateY(-50%);
				color: #666;
				font-size: 18px;
			}

			.search_location_wrapper {
				position: relative;
				display: flex;
				align-items: center;
			}

			.search_location_icon {
				position: absolute;
				left: 10px;
				color: #666;
			}

			.custom_select {
				appearance: none;
				-webkit-appearance: none;
				-moz-appearance: none;
				padding-left: 30px;
				padding-right: 30px;
				cursor: pointer;
			}

			.dropdown_icon {
				position: absolute;
				right: 10px;
				color: #666;
				pointer-events: none;
			}

			.search_button {
				border-radius: 50px;
				font-weight: bold;
				transition: background 0.3s;
				padding: 8px 15px;
			}

			.search_button:hover {
				background: #0052cc;
			}
		</style>
	</div>
</div>

<?php
get_footer();
