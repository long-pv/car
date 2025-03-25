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
				<div class="row search_job_row align-items-center">
					<div class="col position-relative">
						<div class="search_input_wrapper">
							<input type="text" name="job_title" class="search_input form-control" placeholder="Nhập vị trí công việc...">
							<span class="search_icon"></span>
						</div>
					</div>
					<div class="col-auto">
						<div class="search_job_line">
						</div>
					</div>
					<div class="col-4 position-relative">
						<div class="search_location_wrapper">
							<span class="search_location_icon"></span>
							<select name="job_location" class="search_location select_placeholder">
								<option selected disabled value="">Chọn nơi làm việc</option>
								<option value="hanoi">Hà Nội</option>
								<option value="hochiminh">Hồ Chí Minh</option>
								<option value="danang">Đà Nẵng</option>
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
			for ($i = 0; $i < 4; $i++) :
				$hiddenClass = ($i >= 3) ? 'd-none' : '';
			?>
				<div class="accordion_job_item <?php echo $hiddenClass; ?>">
					<div class="accordion_job_header">
						<div class="accordion_job_header_top">
							<h3 class="accordion_job_title">
								Kế Toán Nội Bộ
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
									204/8 Cao Đạt, Quận 5, TP Hồ Chí Minh
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
									Thỏa thuận
								</div>
							</div>
						</div>
					</div>
					<div class="accordion_job_content">
						<div class="accordion_job_content_title">
							Mô tả công việc
						</div>
						<div class="accordion_job_content_editor editor">
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
							Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
						</div>
						<div class="accordion_job_btn_wrap">
							<button type="button" class="accordion_job_btn">
								Ứng tuyển
							</button>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>

		<div class="show_all_job">
			Xem thêm công việc khác
		</div>

		<style>
			.accordion_job {
				width: 100%;
				display: flex;
				flex-direction: column;
				gap: 24px;
			}

			.accordion_job_btn_wrap {
				display: flex;
				justify-content: center;
				margin-top: 24px;
			}

			.accordion_job_btn {
				background-color: #0052FF !important;
				border-radius: 1000px !important;
				padding: 16px 24px;
				font-size: 24px !important;
				font-weight: 700;
				line-height: 32px;
				color: #FFFFFF !important;
				border: none !important;
				outline: none !important;
			}

			.accordion_job_content_editor {
				max-height: 400px;
				overflow-y: auto;
			}

			.accordion_job_content_title {
				color: #15294B;
				font-size: 20px;
				font-weight: 600;
				line-height: 32px;
				margin-bottom: 16px;
			}

			.accordion_job_item {
				border-radius: 16px;
				background-color: #fff;
				box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.16);
				-webkit-box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.16);
				-moz-box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.16);
				padding: 32px;
			}

			.accordion_job_header {
				cursor: pointer;

			}

			.accordion_job_content {
				display: none;
				padding: 10px;
			}

			.accordion_job_header_top {
				display: flex;
				align-items: center;
				justify-content: space-between;
				gap: 16px;
				padding-bottom: 22px;
				border-bottom: 1px solid #C2C7D0;
			}

			.accordion_job_title {
				margin: 0px !important;
				font-size: 32px !important;
				line-height: 1;
				font-weight: 600 !important;
				color: #15294B !important;
			}

			.accordion_job_toggle {
				color: #0052FF;
				font-size: 20px;
				line-height: 28px;
				font-weight: 500;
			}

			.accordion_job_header_bottom {
				display: flex;
				align-items: center;
				justify-content: space-between;
				gap: 16px;
				padding-top: 24px;
			}

			.accordion_job_address {
				display: flex;
				gap: 16px;
			}

			.accordion_job_address .icon {
				display: inline-flex;
				margin-top: 1px;
			}

			.accordion_job_address .text {
				font-size: 18px;
				color: #5D6B82;
				font-weight: 600;
				line-height: 26px;
			}

			.accordion_job_income {
				display: flex;
				gap: 16px;
			}

			.accordion_job_income .icon {
				display: inline-flex;
				margin-top: 1px;
			}

			.accordion_job_income .text {
				font-size: 18px;
				color: #5D6B82;
				font-weight: 600;
				line-height: 26px;
			}

			.accordion_job_content {
				padding-top: 32px;
			}
		</style>

		<style>
			.search_job {
				border: 2px solid #91B5FF;
				border-radius: 100px;
				padding: 12px 24px;
				background: #fff;
				margin-bottom: 32px;
			}

			.search_job_line {
				width: 1px;
				height: 30px;
				background-color: #B3B9C4;
			}

			.search_job_row {
				--bs-gutter-x: 32px;
			}

			.search_job_inner {
				width: 100%;
			}

			.search_input_wrapper {
				position: relative;
			}

			.search_input {
				padding-right: 35px;
				height: 60px;
				padding: 16px;
				padding-left: 32px !important;
				border: none !important;
				outline: none !important;
				color: #354764;
				font-size: 20px;
				font-weight: 600;
				line-height: 28px;
			}

			.search_input::placeholder {
				color: #B3B9C4;
				font-weight: 400;
			}

			.search_icon {
				position: absolute;
				left: 0px;
				top: 50%;
				transform: translateY(-50%);
				width: 24px;
				height: 24px;
				background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z' stroke='%230052FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M22 22L20 20' stroke='%230052FF' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			.search_location_wrapper {
				position: relative;
				display: flex;
				align-items: center;
			}

			.search_location_icon {
				position: absolute;
				left: 0px;
				top: 50%;
				transform: translateY(-50%);
				width: 24px;
				height: 24px;
				background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11.9999 13.43C13.723 13.43 15.1199 12.0331 15.1199 10.31C15.1199 8.58687 13.723 7.19 11.9999 7.19C10.2768 7.19 8.87988 8.58687 8.87988 10.31C8.87988 12.0331 10.2768 13.43 11.9999 13.43Z' stroke='%230052FF' stroke-width='1.5'/%3E%3Cpath d='M3.61971 8.49C5.58971 -0.169998 18.4197 -0.159997 20.3797 8.5C21.5297 13.58 18.3697 17.88 15.5997 20.54C13.5897 22.48 10.4097 22.48 8.38971 20.54C5.62971 17.88 2.46971 13.57 3.61971 8.49Z' stroke='%230052FF' stroke-width='1.5'/%3E%3C/svg%3E%0A");
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			.search_location {
				appearance: none;
				-webkit-appearance: none;
				-moz-appearance: none;
				cursor: pointer;
				height: 60px;
				padding: 16px 32px;
				outline: none !important;
				border: none !important;
				color: #354764;
				font-size: 20px;
				font-weight: 600;
				line-height: 28px;
			}

			.select_placeholder {
				color: #B3B9C4;
				font-weight: 400;
			}

			.dropdown_icon {
				position: absolute;
				right: 0px;
				top: 50%;
				transform: translateY(-50%);
				width: 24px;
				height: 24px;
				background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19.9201 8.95001L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95001' stroke='%23354764' stroke-width='1.5' stroke-miterlimit='10' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			.search_button {
				padding: 16px 24px;
				background-color: #0052FF !important;
				font-size: 20px !important;
				font-weight: 600 !important;
				line-height: 28px;
				color: #FFFFFF !important;
				border-radius: 1000px;
				outline: none !important;
				border: none !important;
				min-width: 150px;
				transition: all 0.3s;
			}

			.search_button:hover {
				transition: all 0.3s;
				background-color: #3745AF !important;
			}
		</style>
	</div>
</div>

<?php
get_footer();
