<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section class="container when-we-start-section">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-10 bg-white when-we-start-section__inner" data-aos="fade-up" data-aos-offset="0">
			<?php if ($ThemeSettings->isTitlesTitlestart()) :?>
			<header class="text-center">
				<h2 class="when-we-start-section__heading"><?= $ThemeSettings->getTitleStart();?></h2>
			</header>
			<?php endif; ?>

			<div class="row">
				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/bike.svg" alt="Pro začátečníky" /></div>
					<?php if ($ThemeSettings->isStartbeginnersTitle()) :?>
					<div class="subheading"><?= $ThemeSettings->getStartBeginnersTitle();?></div>
					<?php endif; ?>

					<?php if ($ThemeSettings->isStartbeginnersDate()) :?>
					<div class="date"><?= $ThemeSettings->getStartBeginnersDate();?></div>
					<?php endif; ?>

					<?php if ($ThemeSettings->isStartbeginnersPlace() || $ThemeSettings->isStartbeginnersAddress()) :?>
					<div class="adress"><?= $ThemeSettings->getStartBeginnersPlace();?> <span>( <?= $ThemeSettings->getStartBeginnersAddress();?> )</span></div>
					<?php endif; ?>

					<div class="btn-container">
						<div id="when-we-start-section__btn--beginner" class="btn btn--gradient" data-kt-target="#app-form-section"><?php _e("Přihláška", "WPA_DOMAIN")?></div>
					</div>

					<div class="link-wrap"><a href="#program"><?php _e("Celý program", "WPA_DOMAIN")?></a></div>
				</div>

				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/rocket.svg" alt="Pro pokročilé" /></div>

					<?php if ($ThemeSettings->isStartadvancedTitle()) :?>
					<div class="subheading"><?= $ThemeSettings->getStartAdvancedTitle();?></div>
					<?php endif; ?>

					<?php if ($ThemeSettings->isStartadvancedDate()) :?>
					<div class="date"><?= $ThemeSettings->getStartAdvancedDate();?></div>
					<?php endif; ?>

					<?php if ($ThemeSettings->isStartadvancedPlace() || $ThemeSettings->isStartadvancedAddress()) :?>
					<div class="adress"><?= $ThemeSettings->getStartAdvancedPlace();?> <span>( <?= $ThemeSettings->getStartAdvancedAddress();?> )</span></div>
					<?php endif; ?>

					<div class="btn-container">
						<div id="when-we-start-section__btn--pro" class="btn btn--gradient" data-kt-target="#app-form-section"><?php _e("Přihláška", "WPA_DOMAIN")?></div>
					</div>

					<div class="link-wrap"><a href="#program"><?php _e("Celý program", "WPA_DOMAIN")?></a></div>
				</div>
			</div>
		</div>
	</div>
</section>