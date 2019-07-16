<?php use Utils\Util;
use Components\PageTheme\PageThemeFactory;

$Theme = PageThemeFactory::create(); ?>

<header class="main-header">
	<a href="#" class="wp-logo"><img src="<?= get_template_directory_uri(); ?>/images/ico/wp_logo.svg" alt="" /></a>

	<nav class="main-nav">
		<div class="close-button">
			<svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
				<path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
			</svg>
		</div>

		<ul class="main-nav__list">
			<li><a href="#home" data-kt-target="#home"><?php _e("Úvod", "WPA_DOMAIN")?></a></li>
			<li><a href="#program" data-kt-top-offset="48" data-kt-target="#program"><?php _e("Program", "WPA_DOMAIN")?></a></li>
			<li><a href="#contacts" data-kt-top-offset="48" data-kt-target="#contacts"><?php _e("Přednášející", "WPA_DOMAIN")?></a></li>
			<li><a href="#app-form-section" data-kt-top-offset="48" data-kt-target="#app-form-section"><?php _e("Přihláška", "WPA_DOMAIN")?></a></li>
			<li><a href="#faq" data-kt-top-offset="48" data-kt-target="#faq"><?php _e("FAQ", "WPA_DOMAIN")?></a></li>
			<li><a href="#contact" data-kt-top-offset="48" data-kt-target="#contact"><?php _e("Kontakt", "WPA_DOMAIN")?></a></li>
		</ul>
	</nav>

	<?php if ($Theme->isOtherNearestdate()) :?>
		<div class="closest-term">
			<div class="closest-term__icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/calendar.svg" alt="calendar" /></div>

			<div class="closest-term__text"><?php _e("Nejbližší termín", "WPA_DOMAIN")?></div>

			<div class="closest-term__date"><?= $Theme->getOtherNearestDate()?></div>
		</div>
	<?php endif; ?>

	<div class="btn-application-wrap"><a href="#app-form-section" data-kt-top-offset="0" data-kt-target="#app-form-section" class="btn btn--primary"><?php _e("Přihláška", "WPA_DOMAIN")?></a></div>

	<div class="ham-button">
		<span class="ham-button__text"><?php _e("Menu", "WPA_DOMAIN")?></span> <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			<path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
		</svg>
	</div>

	<div class="js-mask"></div>
</header>