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

							<div class="header__search">
								<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
									<input type="text" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>" />
									<button type="submit">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.58317 17.5C13.9554 17.5 17.4998 13.9556 17.4998 9.58333C17.4998 5.21108 13.9554 1.66667 9.58317 1.66667C5.21092 1.66667 1.6665 5.21108 1.6665 9.58333C1.6665 13.9556 5.21092 17.5 9.58317 17.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M18.3332 18.3333L16.6665 16.6667" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</button>
								</form>
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
	</header>

	<main class="mainBodyContent">