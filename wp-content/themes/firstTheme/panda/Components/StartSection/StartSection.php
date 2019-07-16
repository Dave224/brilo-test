<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section class="container when-we-start-section">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-10 bg-white when-we-start-section__inner" data-aos="fade-up" data-aos-offset="0">
			<header class="text-center">
				<h2 class="when-we-start-section__heading"><?= $ThemeSettings->getTitleStart();?></h2>
			</header>

			<div class="row">
				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/bike.svg" alt="Pro začátečníky" /></div>

					<div class="subheading"><?= $ThemeSettings->getStartBeginnersTitle();?></div>

					<div class="date"><?= $ThemeSettings->getStartBeginnersDate();?></div>

					<div class="adress"><?= $ThemeSettings->getStartBeginnersPlace();?> <span>( <?= $ThemeSettings->getStartBeginnersAddress();?> )</span></div>

					<div class="btn-container">
						<div id="when-we-start-section__btn--beginner" class="btn btn--gradient" data-kt-target="#app-form-section"><?php _e("Přihláška", "WPA_DOMAIN")?></div>
					</div>

					<div class="link-wrap"><a href="#program"><?php _e("Celý program", "WPA_DOMAIN")?></a></div>
				</div>

				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/rocket.svg" alt="Pro pokročilé" /></div>

					<div class="subheading"><?= $ThemeSettings->getStartAdvancedTitle();?></div>

					<div class="date"><?= $ThemeSettings->getStartAdvancedDate();?></div>

					<div class="adress"><?= $ThemeSettings->getStartAdvancedPlace();?> <span>( <?= $ThemeSettings->getStartAdvancedAddress();?> )</span></div>

					<div class="btn-container">
						<div id="when-we-start-section__btn--pro" class="btn btn--gradient" data-kt-target="#app-form-section"><?php _e("Přihláška", "WPA_DOMAIN")?></div>
					</div>

					<div class="link-wrap"><a href="#program"><?php _e("Celý program", "WPA_DOMAIN")?></a></div>
				</div>
			</div>
		</div>
	</div>
</section>