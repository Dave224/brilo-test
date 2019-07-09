<?php use Utils\Util;
use Components\PageTheme\PageThemeFactory;

$Theme = PageThemeFactory::create(); ?>

<header class="main-header">
	<a href="#" class="wp-logo"><img src="" data-src="images/ico/wp_logo.svg" alt="" /></a>

	<nav class="main-nav">
		<div class="close-button">
			<svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
				<path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
			</svg>
		</div>

		<ul class="main-nav__list">
			<li><a href="#home" data-kt-target="#home">Úvod</a></li>
			<li><a href="#program" data-kt-top-offset="48" data-kt-target="#program">Program</a></li>
			<li><a href="#contacts" data-kt-top-offset="48" data-kt-target="#contacts">Přednášející</a></li>
			<li><a href="#app-form-section" data-kt-top-offset="48" data-kt-target="#app-form-section">Přihláška</a></li>
			<li><a href="#faq" data-kt-top-offset="48" data-kt-target="#faq">FAQ</a></li>
			<li><a href="#contact" data-kt-top-offset="48" data-kt-target="#contact">Kontakt</a></li>
		</ul>
	</nav>

	<div class="closest-term">
		<div class="closest-term__icon"><img src="" data-src="images/ico/calendar.svg" alt="calendar" /></div>

		<div class="closest-term__text">Nejbližší termín</div>

		<div class="closest-term__date">17.12.2018</div>
	</div>

	<div class="btn-application-wrap"><a href="#app-form-section" data-kt-top-offset="0" data-kt-target="#app-form-section" class="btn btn--primary">Přihláška</a></div>

	<div class="ham-button">
		<span class="ham-button__text">Menu</span> <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			<path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
		</svg>
	</div>

	<div class="js-mask"></div>
</header>

<header class="header-main">

	<?php if ($Theme->isContactPhone() || $Theme->isContactEmail()) : ?>
	<div class="container header-top-bar">

		<span><?php _e("Potřebujete poradit?", "RLG_DOMAIN"); ?></span>

		<?php if ($Theme->isContactPhone()) : ?>
		<span class="header-contact header-contact-phone">
			<img src="" data-src="<?= get_template_directory_uri(); ?>/images/ico/phone-primary.svg" alt="phone icon">
			<span><?= $Theme->getContactPhoneFancy(); ?></span>
		</span>
		<?php endif; ?>

		<?php if ($Theme->isContactEmail()) : ?>
		<a class="header-contact header-contact-mail" href="mailto:<?= $Theme->getContactEmail(); ?>">
			<img src="" data-src="<?= get_template_directory_uri(); ?>/images/ico/mail-primary.svg" alt="mail icon">
			<span><?= $Theme->getContactEmailFancy(); ?></span>
		</a>
		<?php endif; ?>

	</div>
	<?php endif; ?>

	<div class="container">
		<a class="header-brand" href="<?= home_url(); ?>">
			<img src="" data-src="<?= get_template_directory_uri(); ?>/images/ico/rolig-logo.svg" alt="rolig logo" draggable="false" />
		</a>

		<nav class="nav-main">
			<ul>
				<li class="nav-home">
					<a href="<?= home_url(); ?>">
						<?= Util::renderSvg("home"); ?>
						<span><?php _e("Úvod", "RLG_DOMAIN"); ?></span>
					</a>
				</li>

				<?php KT::theWpNavMenu(NAVIGATION_MAIN_MENU, 3); ?>
			</ul>
		</nav>

		<?php get_template_part(COMPONENTS_PATH . "Header/HeaderSearchForm"); ?>

		<div class="header-nav-button">
			menu
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="header-mask"></div>
</header>