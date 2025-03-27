<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package car_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<script>
		var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header" class="header">
		<div class="container">
			<div class="header__inner">
				<div class="row">
					<div class="col-4 col-lg-1">
						<a href="<?php echo home_url(); ?>" class="header__logo">
							<?php $logo_url = CHILD_URI . '/assets/images/logo.svg'; ?>
							<img src="<?php echo $logo_url; ?>" alt="logo">
						</a>
					</div>

					<div class="col-8 col-lg-11">
						<div class="header__navInner">
							<!-- menu PC -->
							<?php
							if (has_nav_menu('menu-1')) {
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'container' => 'nav',
										'container_class' => 'header__menupc',
										'depth' => 1,
									)
								);
							}
							?>
							<!-- end -->

							<div class="header_right">
								<?php
								switch_lang();
								?>

								<a class="header_search_link" href="javascript:void(0);">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M22 22L20 20" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>

							<!-- button toggle menu mobile -->
							<div class="header__toggle">
								<span class="header__toggleItem header__toggleItem--open"></span>
								<span class="header__toggleItem header__toggleItem--close"></span>
							</div>
							<!-- end -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- menu Mobile -->
		<div class="header__menusp">
			<?php
			if (has_nav_menu('menu-1')) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container' => 'nav',
						'container_class' => 'header__menuspInner',
						'depth' => 1,
					)
				);
			}
			?>
		</div>

		<div class="quick_result">
			<div class="container">
				<form class="box_search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<span class="icon"></span>
					<input type="text" name="s" placeholder="<?php echo LANG == 'en' ? 'Search on CarDoctor' : 'Tìm kiếm trên Cardoctor'; ?>" value="<?php echo get_search_query(); ?>" />
				</form>

				<div class="ket_qua_box">
					<div class="title">
						<?php echo LANG == 'en' ? 'Quick search' : 'Tìm kiếm nhanh'; ?>
					</div>

					<div class="ket_qua">
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="mainBodyContent">