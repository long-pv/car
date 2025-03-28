(function ($, window) {
	// ----- longpv ------
	// Open and close the mobile menu
	$(".header .header__toggleItem").on("click", function () {
		menu_open_sp();
	});

	$(".mainBodyContent").on("click", function () {
		if (!$(this).hasClass("menu__openSp")) return;
		menu_open_sp();
	});

	function menu_open_sp() {
		$("body").toggleClass("mobile-menu-open");
		$(".header__menusp").toggleClass("active");
		$(".header__toggleItem").toggle();
		$(".mainBodyContent").toggleClass("menu__openSp");
	}

	$(".menu-item-has-children > .dropdown-arrow").click(function (e) {
		e.preventDefault();
		var $submenu = $(this).siblings(".sub-menu");

		if ($submenu.length) {
			$submenu.stop(true, true).slideToggle();
			$(this).parent().toggleClass("open");
			$(".sub-menu").not($submenu).slideUp();
			$(".menu-item-has-children").not($(this).parent()).removeClass("open");
		}
	});
	// end mobile menu

	// wpadminbar
	function adjustPadding() {
		if ($(".page_inner").length > 0) {
			$("body").css("padding-top", $("#header").outerHeight(true));
		}
		if ($("#wpadminbar").length > 0) {
			$(".header").css("margin-top", $("#wpadminbar").outerHeight(true));
		}
	}

	adjustPadding();
	$(window).resize(adjustPadding);

	function swapPositions() {
		$(".car_animation_block").each(function () {
			let currentPos = $(this).attr("data-pos"); // Lấy vị trí hiện tại

			// Xác định vị trí tiếp theo theo vòng tròn
			let newPos = currentPos === "1" ? "2" : currentPos === "2" ? "3" : currentPos === "3" ? "4" : "1";

			$(this).attr("data-pos", newPos); // Cập nhật data-pos
		});
	}

	// Lặp lại hiệu ứng mỗi 3 giây
	setInterval(swapPositions, 3000);

	var Slider_Staff_List_Widget = function ($scope, $) {
		$scope.find(".staff_slider").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			dots: false,
			arrows: true,
		});
	};

	$(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction("frontend/element_ready/staff_list_widget.default", Slider_Staff_List_Widget);
		elementorFrontend.hooks.addAction("frontend/element_ready/staff_about_widget.default", Slider_Staff_List_Widget);
	});

	var Slider_Partners_List_Widget = function ($scope, $) {
		$scope.find(".partners_slider").slick({
			slidesToShow: 8,
			slidesToScroll: 4,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
					},
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					},
				},
			],
		});
	};

	$(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction("frontend/element_ready/partners_list_widget.default", Slider_Partners_List_Widget);
	});

	var Departments_Slider_Widget = function ($scope, $) {
		$scope.find(".departments_list").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			dots: false,
			arrows: true,
		});
	};

	$(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction("frontend/element_ready/departments_widget.default", Departments_Slider_Widget);
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 80) {
			if (!$("#header").hasClass("header_dark")) {
				$("#header").addClass("header_scrolled");
			}
		} else {
			$("#header").removeClass("header_scrolled");
		}
	});

	$(document).on("click", "a", function (event) {
		var target = $(this).attr("href");
		// Kiểm tra nếu href là một anchor link (bắt đầu bằng #)
		if (target.startsWith("#")) {
			event.preventDefault();
			scrollSmooth(target);
		}
	});

	if (window.location.hash) {
		scrollSmooth(window.location.hash);
	}

	function scrollSmooth(target) {
		var targetElement = $(target);
		if (targetElement.length > 0) {
			$("html, body").animate(
				{
					scrollTop: targetElement.offset().top - 150,
				},
				500
			);
		}
	}

	$(".click_url .elementor-button").click(function (event) {
		event.preventDefault(); // Ngăn chặn hành vi mặc định
		var link = $(this).attr("href"); // Lấy URL của nút
		var btn = $(this);

		btn.addClass("animate-btn"); // Thêm class để kích hoạt hiệu ứng

		setTimeout(function () {
			window.open(link, "_blank");
		}, 2000);
	});

	$('select[name="job_location"]').on("change", function () {
		$(this).removeClass("select_placeholder");
	});

	$(".accordion_job_header").click(function () {
		$(".accordion_job_content").slideUp();
		$(".accordion_job_toggle").text(function () {
			return $(this).data("open");
		});

		var content = $(this).closest(".accordion_job_item").find(".accordion_job_content");
		var toggle = $(this).find(".accordion_job_toggle");

		if (!content.is(":visible")) {
			content.slideDown();
			toggle.text(toggle.data("close"));
		}
	});

	let items = $(".accordion_job_item");
	if (items.length < 4) {
		$(".show_all_job").hide();
	}

	$(".show_all_job").on("click", function () {
		$(".accordion_job_item.d-none").removeClass("d-none");
		$(this).hide();
	});

	$(".tin_noi_bat_slider").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});

	$(".header_search_link").on("click", function (event) {
		event.stopPropagation(); // Ngăn chặn sự kiện lan lên document
		$(".quick_result").toggle();
	});

	$(document).on("click", function (event) {
		if (!$(event.target).closest(".quick_result, .header_search_link").length) {
			$(".quick_result").hide();
		}
	});

	$('.box_search input[name="s"]').on("keyup", function () {
		let searchQuery = $(this).val();

		if (searchQuery.length > 2) {
			$.ajax({
				type: "POST",
				url: ajax_url,
				data: {
					action: "ajax_search",
					search: searchQuery,
				},
				beforeSend: function () {
					$(".ket_qua").html("");
				},
				success: function (response) {
					$(".ket_qua").html(response);
				},
			});
		} else {
			$(".ket_qua").html("");
		}
	});

	$(".btn_form_hop_tac").click(function () {
		$("#form_hop_tac").modal("show");
	});

	$(".btn_form_ung_tuyen").click(function () {
		$("#form_ung_tuyen").modal("show");
	});

	$(".btn_form_thong_tin").click(function () {
		$("#form_thong_tin").modal("show");
	});

	$(".custom_dropdown_button").on("click", function (e) {
		e.stopPropagation();
		$(".custom_dropdown_button").removeClass("down_show");
		var dropdownMenu = $(this).next(".custom_dropdown_menu");
		$(".custom_dropdown_menu").not(dropdownMenu).hide();
		$(this).toggleClass("down_show");
		dropdownMenu.toggle();
	});

	$(document).on("click", function () {
		$(".custom_dropdown_menu").hide();
		$(".custom_dropdown_button").removeClass("down_show");
	});

	$(".custom_dropdown_menu").on("click", function (e) {
		e.stopPropagation();
	});

	document.addEventListener("DOMContentLoaded", function () {
		document.addEventListener("wpcf7invalid", function (event) {
			const checkboxes = document.querySelectorAll('input[name="service[]"]');
			let isChecked = false;

			checkboxes.forEach((checkbox) => {
				if (checkbox.checked) {
					isChecked = true;
				}
			});

			if (!isChecked) {
				const dropdownMenu = document.querySelector(".custom_dropdown_menu");
				if (dropdownMenu) {
					dropdownMenu.style.display = "block";
				}
			}
		});
	});

	// ----- vucoder ------
	//
	//
	//
	//
	// ----- longbn ------
	//
	//
	//
	//
})(jQuery, window);
