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

<!-- 
<div class="modal_custom_title">
Trở thành đối tác của CarDoctor!
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="company_name" class="form_label">Tên công ty <span class="req">*</span></label>
			[text* company_name class:form_control placeholder "Nhập tên công ty của quý khách"]
		</div>
		<div class="col-md-6">
			<label for="full_name" class="form_label">Họ và tên <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Nhập họ tên của quý khách"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="email" class="form_label">Email <span class="req">*</span></label>
			[email* email class:form_control placeholder "Nhập email của quý khách"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Số điện thoại <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Nhập số điện thoại"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="company_address" class="form_label">Địa chỉ quý công ty <span class="req">*</span></label>
			[text* company_address class:form_control placeholder "Nhập địa chỉ công ty của quý khách"]
		</div>
		<div class="col-md-6">
			<label for="website" class="form_label">Đường link website của quý khách</label>
			[url website class:form_control placeholder "Nhập website của quý khách"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<label for="message" class="form_label">Thông tin gửi cho CarDoctor</label>
			[textarea message class:form_textarea placeholder "Nhập thông tin"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* checkbox-162 class:form_check_input use_label_element "Tôi đồng ý"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "Gửi thông tin"]
			</div>
		</div>
	</div>
</div>
-->

<!-- 
<div class="modal_custom_title">
	Thông tin ứng tuyển
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="full_name" class="form_label">Họ và tên <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Nhập họ tên của bạn"]
		</div>
		<div class="col-md-6">
			<label for="job_position" class="form_label">Vị trí ứng tuyển <span class="req">*</span></label>
			[text* job_position class:form_control placeholder "Nhập vị trí ứng tuyển của bạn"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="email" class="form_label">Email <span class="req">*</span></label>
			[email* email class:form_control placeholder "Nhập email của bạn"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Số điện thoại <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Nhập số điện thoại của bạn"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label for="work_location" class="form_label">Nơi mong muốn làm việc</label>
			[select work_location class:form_control form_select "Chọn nơi làm việc" "Hà Nội" "TP. Hồ Chí Minh" "Đà Nẵng"]
		</div>
		<div class="col-md-12">
			<label for="start_date" class="form_label">Thời gian có thể bắt đầu công việc</label>
			[date start_date class:form_control placeholder "Chọn thời gian bắt đầu"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div for="cv_upload" class="form_label">Upload CV/Portfolio <span class="req">*</span></div>
			<label class="form_file_label">
				[file* cv_upload class:form_file filetypes:pdf/*|doc/*|docx/* limit:2mb]
				<span class="form_note">Doc, Docx, PDF (<25MB) <span>Tải file lên</span></span>

			</label>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* terms class:form_check_input use_label_element "Tôi đồng ý"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "Ứng tuyển ngay"]
			</div>
		</div>
	</div>
</div> 
-->

<!-- 
<div class="modal_custom_title">
	Thông tin khách hàng
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="garage_name" class="form_label">Tên Garage <span class="req">*</span></label>
			[text* garage_name class:form_control placeholder "Nhập tên Garage của bạn"]
		</div>
		<div class="col-md-6">
			<label for="full_name" class="form_label">Họ và tên <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Nhập họ tên của bạn"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="garage_address" class="form_label">Địa chỉ Garage của quý khách <span class="req">*</span></label>
			[text* garage_address class:form_control placeholder "Nhập địa chỉ Garage"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Số điện thoại <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Nhập số điện thoại"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<label for="service" class="form_label">Dịch vụ Garage của quý khách cung cấp <span class="req">*</span></label>
			[select* service multiple class:form_control "Bảo dưỡng" "Sửa chữa" "Sơn xe" "Khác"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* checkbox-terms class:form_check_input use_label_element "Tôi đồng ý với các điều khoản dịch vụ và chính sách bảo mật của CarDoctor"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "Gửi thông tin"]
			</div>
		</div>
	</div>
</div> 
-->

<div class="pb-5" style="background-color: #c0c0c0;padding-top:150px;">
	<div class="container">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		</button>

		<button class="btn_form_hop_tac">
			Hợp tác
		</button>
		<button class="btn_form_ung_tuyen">
			Ứng tuyển
		</button>
		<button class="btn_form_thong_tin">
			Thông tin
		</button>

		<!-- Modal -->
		<div class="modal fade modal_custom" id="form_hop_tac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal_custom_dialog">
				<div class="modal-content modal_custom_content">
					<!-- <button type="button" class="close modal_custom_close" data-dismiss="modal" aria-label="Close"></button> -->
					<div class="modal-body modal_custom_body">
						<?php
						echo do_shortcode('[contact-form-7 id="16cbaa0" title="Contact form 1"]');
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal_custom" id="form_ung_tuyen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal_custom_dialog">
				<div class="modal-content modal_custom_content">
					<div class="modal-body modal_custom_body">
						<?php
						echo do_shortcode('[contact-form-7 id="0710ba2" title="ứng tuyển"]');
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal_custom" id="form_thong_tin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal_custom_dialog">
				<div class="modal-content modal_custom_content">
					<div class="modal-body modal_custom_body">
						<?php
						echo do_shortcode('[contact-form-7 id="7f868da" title="Đăng ký"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
