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
<div class="form_group">
	<div class="row">
		<div class="col-md-6">
			<label for="company_name" class="form_label">Tên công ty <span class="req">*</span></label>
			[text* company_name class:form_control placeholder "Nhập tên công ty"]
		</div>
		<div class="col-md-6">
			<label for="full_name" class="form_label">Họ và tên <span class="req">*</span></label>
			[text* full_name class:form_control placeholder "Nhập họ tên"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="email" class="form_label">Email <span class="req">*</span></label>
			[email* email class:form_control placeholder "Nhập email"]
		</div>
		<div class="col-md-6">
			<label for="phone_number" class="form_label">Số điện thoại <span class="req">*</span></label>
			[tel* phone_number class:form_control placeholder "Nhập số điện thoại"]
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="company_address" class="form_label">Địa chỉ công ty <span class="req">*</span></label>
			[text* company_address class:form_control placeholder "Nhập địa chỉ"]
		</div>
		<div class="col-md-6">
			<label for="website" class="form_label">Website</label>
			[url website class:form_control placeholder "Nhập đường link website"]
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

<div class="pb-5" style="background-color: #c0c0c0;padding-top:150px;">
	<div class="container">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade modal_custom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal_custom_dialog">
				<div class="modal-content modal_custom_content">
					<!-- <button type="button" class="close modal_custom_close" data-dismiss="modal" aria-label="Close"> -->
					</button>
					<div class="modal-body modal_custom_body">
						<div class="modal_custom_title">
							Trở thành đối tác của CarDoctor!
						</div>
						<?php
						echo do_shortcode('[contact-form-7 id="dc52ef2" title="Contact form 1"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
