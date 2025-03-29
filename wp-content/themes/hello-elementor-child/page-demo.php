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
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
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
				[file* cv_upload class:form_file filetypes:pdf|doc|docx limit:2mb]
				<span class="form_note">Doc, Docx, PDF (<25MB) <span>Tải file lên</span></span>

			</label>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
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
			<div class="custom_dropdown">
				<div class="custom_dropdown_button">Chọn dịch vụ</div>
				<div class="custom_dropdown_menu">
					[checkbox* service use_label_element "Sửa xe" "Car Spa" "Độ xe" "Khác"]
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
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

<!-- <div class="modal_custom_title">
	Customer Information
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="garage_name" class="form_label">Garage’s Name <span class="req">*</span></label>
			[text* garage_name class:form_control placeholder "Your garage’s name "]
		</div>
		<div class="col-md-6">
			<label for="full_name" class="form_label">Full Name <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Your full name"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="garage_address" class="form_label">Your Garage’s Address <span class="req">*</span></label>
			[text* garage_address class:form_control placeholder "Your garage’s address"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Phone Number <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Your phone Number"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<label for="service" class="form_label">Services provided by your garage <span class="req">*</span></label>
			<div class="custom_dropdown">
				<div class="custom_dropdown_button">Choose your service</div>
				<div class="custom_dropdown_menu">
					[checkbox* service use_label_element "Car Repair" "Car Spa" "Car Modifications" "Other"]
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "SUBMIT"]
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="modal_custom_title">
	Application information
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="full_name" class="form_label">Full Name <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Your full name"]
		</div>
		<div class="col-md-6">
			<label for="job_position" class="form_label">Job Apply <span class="req">*</span></label>
			[text* job_position class:form_control placeholder "Your job apply"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="email" class="form_label">Email <span class="req">*</span></label>
			[email* email class:form_control placeholder "Your email"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Phone Number <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Your phone number"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label for="work_location" class="form_label">Preferred Work Location </label>
			[select work_location class:form_control form_select "Ho Chi Minh City" "Ha Noi City"]
		</div>
		<div class="col-md-12">
			<label for="start_date" class="form_label">When can you start?</label>
			[date start_date class:form_control placeholder "Choose your start time"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div for="cv_upload" class="form_label">Upload CV/Portfolio <span class="req">*</span></div>
			<label class="form_file_label">
				[file* cv_upload class:form_file filetypes:pdf|doc|docx limit:2mb]
				<span class="form_note">Doc, Docx, PDF (<25MB) <span>Upload file</span></span>

			</label>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "APPLY NOW"]
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="modal_custom_title">
	Become CarDoctor’s Partner
</div>
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="company_name" class="form_label">Company‘s name <span class="req">*</span></label>
			[text* company_name class:form_control placeholder "Your company‘s name"]
		</div>
		<div class="col-md-6">
			<label for="full_name" class="form_label">Full name <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Your full name"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="email" class="form_label">Email <span class="req">*</span></label>
			[email* email class:form_control placeholder "Your email"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Phone Number <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Your phone number"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="company_address" class="form_label">Company’ s address <span class="req">*</span></label>
			[text* company_address class:form_control placeholder "Your company’s address"]
		</div>
		<div class="col-md-6">
			<label for="website" class="form_label">Your company website‘s URL</label>
			[url website class:form_control placeholder "Your website‘s URL"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<label for="message" class="form_label">How can CarDoctor help you? Leave us a message!</label>
			[textarea message class:form_textarea placeholder "Enter information"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			[checkbox* agree_to_terms class:form_check_input use_label_element "Tôi đồng ý"]
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form_btn">
				[submit class:btn class:btn_form_submit "SUBMIT"]
			</div>
		</div>
	</div>
</div> -->

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
		<button class="btn_form_thong_tin_thanh_cong">
			Thông tin 2
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

		<div class="modal fade modal_custom" id="form_thong_tin_thanh_cong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal_custom_dialog">
				<div class="modal-content modal_custom_content">
					<div class="modal-body modal_custom_body">
						<div class="form_thanh_cong">
							<div class="icon">
								<svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_359_51966)">
										<path d="M111.224 45.1539C112.717 50.2954 113.455 55.7567 113.309 61.4057C112.572 89.8865 88.3847 113.382 59.8941 113.326C30.5795 113.269 6.7393 89.4347 6.67273 60.1222C6.60616 30.729 30.5053 6.7273 59.8985 6.67273C72.2355 6.64981 83.6121 10.8375 92.6684 17.878C93.8613 18.8057 95.5377 18.7926 96.7295 17.8627C96.7469 17.8485 96.7655 17.8343 96.783 17.8201C98.4801 16.4952 98.4943 13.9206 96.795 12.5979C92.6848 9.39792 88.1872 6.75895 83.3556 4.71588C75.9561 1.58578 68.0981 0 60 0C51.9019 0 44.0439 1.58578 36.6444 4.71697C29.4991 7.73901 23.0839 12.0642 17.5746 17.5735C12.0653 23.0828 7.73901 29.4991 4.71806 36.6433C1.58687 44.0439 0 51.9019 0 60C0 68.0981 1.58687 75.9561 4.71697 83.3567C7.73901 90.502 12.0642 96.9172 17.5735 102.427C23.0828 107.936 29.4991 112.262 36.6433 115.283C44.0439 118.413 51.9019 120 59.9989 120C68.0959 120 75.955 118.414 83.3556 115.283C90.5009 112.261 96.9161 107.936 102.425 102.427C107.935 96.9172 112.261 90.5009 115.282 83.3567C118.412 75.9561 119.999 68.0981 119.999 60C119.999 54.2604 119.201 48.642 117.623 43.221C116.917 40.796 113.851 40.0397 112.084 41.8437C112.067 41.8612 112.049 41.8786 112.032 41.8972C111.191 42.7561 110.888 44.0003 111.223 45.155L111.224 45.1539Z" fill="#2FC816" />
										<path d="M58.0079 70.1738C65.8146 58.173 94.5278 27.2813 118.34 11.2336C119.351 10.5525 120.493 11.8895 119.655 12.7757C97.0336 36.665 72.854 63.6866 58.9672 87.0532C58.5809 87.7037 57.6466 87.7266 57.2428 87.087C50.2547 76.0182 44.2619 60.1069 31.4152 55.2317C30.4613 54.8693 30.553 53.5204 31.5451 53.2814C43.8559 50.315 49.6239 60.8436 58.009 70.1738V70.1749L58.0079 70.1738Z" fill="#2FC816" />
									</g>
									<defs>
										<clipPath id="clip0_359_51966">
											<rect width="120" height="120" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>

							<div class="title">
								Gửi Thông tin thành công!
							</div>
							<div class="desc">
								Cảm ơn quý khách đã gửi thông tin cho CarDoctor , chúng tôi sẽ tìm kiếm thông tin phù hợp với những thông tin mà quý khách cung cấp , vui lòng để ý điện thoại
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
