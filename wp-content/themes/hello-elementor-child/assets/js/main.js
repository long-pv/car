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
		$("body").css("padding-top", $("#header").outerHeight(true));
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
						slidesToShow: 3,
					},
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
					},
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
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
	// ----- vucoder ------
})(jQuery, window);
