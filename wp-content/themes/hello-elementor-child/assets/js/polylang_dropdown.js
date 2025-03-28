(function ($, window) {
	var switchLang = $(".switchLang .switchLang__list");
	if (switchLang.length > 0) {
		switchLang.each(function () {
			let htmlDropdown = null;
			let switchLang_item = $(this);
			let current_lang = switchLang_item.find("li.current-lang");
			let class_el = current_lang.attr("class");

			let content = current_lang.find("a").html();
			htmlDropdown = $("<a href='javascript:void(0);'></a>").html(content).addClass("switchLang__link selected current-lang");

			let first_option = $("<li></li>", {
				class: "switchLang__item init",
			});

			first_option.addClass(class_el);

			switchLang_item.prepend(first_option.append(htmlDropdown));

			current_lang.remove();

			var top = 4;
			if ($(window).width() < 1024) {
				top = 0;
			}
			switchLang_item.children("li:not(.init)").each(function () {
				$(this).css("top", "calc(100% + " + top + "px)");
				top = top + $(this).outerHeight();
			});
		});

		switchLang.on("click", ".init", function () {
			$(this).closest("ul").children("li:not(.init, .current-lang)").toggle();
			$(this).toggleClass("current-lang");
		});

		switchLang.on("click", "li:not(.init)", function () {
			let allOptions = $(this).closest("ul").children("li:not(.init)");
			allOptions.removeClass("selected");
			$(this).addClass("selected");
		});

		$(document).on("click", function (event) {
			if (!$(event.target).closest(switchLang).length) {
				switchLang.find("li:not(.init)").hide();
				switchLang.find(".init").removeClass("current-lang");
			}
		});
	}

	$(".lang-item-vi")
		.find("img")
		.attr(
			"src",
			"data:image/svg+xml,%3Csvg width='28' height='20' viewBox='0 0 28 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='28' height='20' rx='2' fill='white'/%3E%3Cmask id='mask0_2017_4735' style='mask-type:luminance' maskUnits='userSpaceOnUse' x='0' y='0' width='28' height='20'%3E%3Crect width='28' height='20' rx='2' fill='white'/%3E%3C/mask%3E%3Cg mask='url(%23mask0_2017_4735)'%3E%3Crect width='28' height='20' fill='%23EA403F'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M14 12.34L10.4733 14.8541L11.7745 10.7231L8.29366 8.1459L12.6246 8.1069L14 4L15.3754 8.1069L19.7063 8.1459L16.2255 10.7231L17.5267 14.8541L14 12.34Z' fill='%23FFFE4E'/%3E%3C/g%3E%3C/svg%3E%0A"
		);
	$(".lang-item-vi").find("span").text("VIE");
	$(".lang-item-en")
		.find("img")
		.attr(
			"src",
			"data:image/svg+xml,%3Csvg width='28' height='20' viewBox='0 0 28 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='28' height='20' rx='2' fill='white'/%3E%3Cmask id='mask0_298_43709' style='mask-type:luminance' maskUnits='userSpaceOnUse' x='0' y='0' width='28' height='20'%3E%3Crect width='28' height='20' rx='2' fill='white'/%3E%3C/mask%3E%3Cg mask='url(%23mask0_298_43709)'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M28 0H0V1.33333H28V0ZM28 2.66667H0V4H28V2.66667ZM0 5.33333H28V6.66667H0V5.33333ZM28 8H0V9.33333H28V8ZM0 10.6667H28V12H0V10.6667ZM28 13.3333H0V14.6667H28V13.3333ZM0 16H28V17.3333H0V16ZM28 18.6667H0V20H28V18.6667Z' fill='%23D02F44'/%3E%3Crect width='12' height='9.33333' fill='%2346467F'/%3E%3Cg filter='url(%23filter0_d_298_43709)'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M2.66671 1.99999C2.66671 2.36818 2.36823 2.66666 2.00004 2.66666C1.63185 2.66666 1.33337 2.36818 1.33337 1.99999C1.33337 1.63181 1.63185 1.33333 2.00004 1.33333C2.36823 1.33333 2.66671 1.63181 2.66671 1.99999ZM5.33337 1.99999C5.33337 2.36818 5.0349 2.66666 4.66671 2.66666C4.29852 2.66666 4.00004 2.36818 4.00004 1.99999C4.00004 1.63181 4.29852 1.33333 4.66671 1.33333C5.0349 1.33333 5.33337 1.63181 5.33337 1.99999ZM7.33337 2.66666C7.70156 2.66666 8.00004 2.36818 8.00004 1.99999C8.00004 1.63181 7.70156 1.33333 7.33337 1.33333C6.96518 1.33333 6.66671 1.63181 6.66671 1.99999C6.66671 2.36818 6.96518 2.66666 7.33337 2.66666ZM10.6667 1.99999C10.6667 2.36818 10.3682 2.66666 10 2.66666C9.63185 2.66666 9.33337 2.36818 9.33337 1.99999C9.33337 1.63181 9.63185 1.33333 10 1.33333C10.3682 1.33333 10.6667 1.63181 10.6667 1.99999ZM3.33337 3.99999C3.70156 3.99999 4.00004 3.70152 4.00004 3.33333C4.00004 2.96514 3.70156 2.66666 3.33337 2.66666C2.96518 2.66666 2.66671 2.96514 2.66671 3.33333C2.66671 3.70152 2.96518 3.99999 3.33337 3.99999ZM6.66671 3.33333C6.66671 3.70152 6.36823 3.99999 6.00004 3.99999C5.63185 3.99999 5.33337 3.70152 5.33337 3.33333C5.33337 2.96514 5.63185 2.66666 6.00004 2.66666C6.36823 2.66666 6.66671 2.96514 6.66671 3.33333ZM8.66671 3.99999C9.0349 3.99999 9.33337 3.70152 9.33337 3.33333C9.33337 2.96514 9.0349 2.66666 8.66671 2.66666C8.29852 2.66666 8.00004 2.96514 8.00004 3.33333C8.00004 3.70152 8.29852 3.99999 8.66671 3.99999ZM10.6667 4.66666C10.6667 5.03485 10.3682 5.33333 10 5.33333C9.63185 5.33333 9.33337 5.03485 9.33337 4.66666C9.33337 4.29847 9.63185 3.99999 10 3.99999C10.3682 3.99999 10.6667 4.29847 10.6667 4.66666ZM7.33337 5.33333C7.70156 5.33333 8.00004 5.03485 8.00004 4.66666C8.00004 4.29847 7.70156 3.99999 7.33337 3.99999C6.96518 3.99999 6.66671 4.29847 6.66671 4.66666C6.66671 5.03485 6.96518 5.33333 7.33337 5.33333ZM5.33337 4.66666C5.33337 5.03485 5.0349 5.33333 4.66671 5.33333C4.29852 5.33333 4.00004 5.03485 4.00004 4.66666C4.00004 4.29847 4.29852 3.99999 4.66671 3.99999C5.0349 3.99999 5.33337 4.29847 5.33337 4.66666ZM2.00004 5.33333C2.36823 5.33333 2.66671 5.03485 2.66671 4.66666C2.66671 4.29847 2.36823 3.99999 2.00004 3.99999C1.63185 3.99999 1.33337 4.29847 1.33337 4.66666C1.33337 5.03485 1.63185 5.33333 2.00004 5.33333ZM4.00004 5.99999C4.00004 6.36818 3.70156 6.66666 3.33337 6.66666C2.96518 6.66666 2.66671 6.36818 2.66671 5.99999C2.66671 5.6318 2.96518 5.33333 3.33337 5.33333C3.70156 5.33333 4.00004 5.6318 4.00004 5.99999ZM6.00004 6.66666C6.36823 6.66666 6.66671 6.36818 6.66671 5.99999C6.66671 5.6318 6.36823 5.33333 6.00004 5.33333C5.63185 5.33333 5.33337 5.6318 5.33337 5.99999C5.33337 6.36818 5.63185 6.66666 6.00004 6.66666ZM9.33337 5.99999C9.33337 6.36818 9.0349 6.66666 8.66671 6.66666C8.29852 6.66666 8.00004 6.36818 8.00004 5.99999C8.00004 5.6318 8.29852 5.33333 8.66671 5.33333C9.0349 5.33333 9.33337 5.6318 9.33337 5.99999ZM10 8C10.3682 8 10.6667 7.70152 10.6667 7.33333C10.6667 6.96514 10.3682 6.66666 10 6.66666C9.63185 6.66666 9.33337 6.96514 9.33337 7.33333C9.33337 7.70152 9.63185 8 10 8ZM8.00004 7.33333C8.00004 7.70152 7.70156 8 7.33337 8C6.96518 8 6.66671 7.70152 6.66671 7.33333C6.66671 6.96514 6.96518 6.66666 7.33337 6.66666C7.70156 6.66666 8.00004 6.96514 8.00004 7.33333ZM4.66671 8C5.0349 8 5.33337 7.70152 5.33337 7.33333C5.33337 6.96514 5.0349 6.66666 4.66671 6.66666C4.29852 6.66666 4.00004 6.96514 4.00004 7.33333C4.00004 7.70152 4.29852 8 4.66671 8ZM2.66671 7.33333C2.66671 7.70152 2.36823 8 2.00004 8C1.63185 8 1.33337 7.70152 1.33337 7.33333C1.33337 6.96514 1.63185 6.66666 2.00004 6.66666C2.36823 6.66666 2.66671 6.96514 2.66671 7.33333Z' fill='url(%23paint0_linear_298_43709)'/%3E%3C/g%3E%3C/g%3E%3Cdefs%3E%3Cfilter id='filter0_d_298_43709' x='1.33337' y='1.33333' width='9.33337' height='7.66666' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha'/%3E%3CfeOffset dy='1'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0'/%3E%3CfeBlend mode='normal' in2='BackgroundImageFix' result='effect1_dropShadow_298_43709'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='effect1_dropShadow_298_43709' result='shape'/%3E%3C/filter%3E%3ClinearGradient id='paint0_linear_298_43709' x1='1.33337' y1='1.33333' x2='1.33337' y2='7.99999' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='white'/%3E%3Cstop offset='1' stop-color='%23F0F0F0'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E%0A"
		);
	$(".lang-item-en").find("span").text("ENG");
})(jQuery, window);
