<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

        <div class="intro-banner">
			<?php if ($ThemeSettings->isTitlesTitlehome()) :?>
			<header>
				<h1 class="d-none"><?= $ThemeSettings->getTitleHome();?></h1>
				<div class="wpp">Wordpress</div>
				<div class="aca">Academy</div>
				<span>Powered by brilo</span>
            </header>
			<?php endif; ?>

            <div class="intro-banner__img"><img src="<?= get_template_directory_uri(); ?>/images/ico/WP_box.svg" alt="box" /></div>
        </div>

		<div class="bg-header">
			<picture>
				<source srcset="<?= get_template_directory_uri(); ?>/images/bg/header.webp" type="image/webp" />
				<img src="<?= get_template_directory_uri(); ?>/images/bg/header.png" alt="header background" />
			</picture>
		</div>