<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section class="container when-we-start-section">
	<div class="row justify-content-center">
		<div class="col-11 col-lg-10 bg-white when-we-start-section__inner" data-aos="fade-up" data-aos-offset="0">
			<header class="text-center">
				<h2 class="when-we-start-section__heading"><?php echo $ThemeSettings->getTitleStart();?></h2>
			</header>

			<div class="row">
				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/bike.svg" alt="Pro začátečníky" /></div>

					<div class="subheading"><?php echo $ThemeSettings->getStartBeginnersTitle();?></div>

					<div class="date"><?php echo $ThemeSettings->getStartBeginnersDate();?></div>

					<div class="adress"><?php echo $ThemeSettings->getStartBeginnersPlace();?> <span>( <?php echo $ThemeSettings->getStartBeginnersAddress();?> )</span></div>

					<div class="btn-container">
						<div id="when-we-start-section__btn--beginner" class="btn btn--gradient" data-kt-target="#app-form-section">Přihláška</div>
					</div>

					<div class="link-wrap"><a href="#program">Celý program</a></div>
				</div>

				<div class="col-md-6 when-we-start-section__col">
					<div class="icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/rocket.svg" alt="Pro pogročilé" /></div>

					<div class="subheading"><?php echo $ThemeSettings->getStartAdvancedTitle();?></div>

					<div class="date"><?php echo $ThemeSettings->getStartAdvancedDate();?></div>

					<div class="adress"><?php echo $ThemeSettings->getStartAdvancedPlace();?> <span>( <?php echo $ThemeSettings->getStartAdvancedAddress();?> )</span></div>

					<div class="btn-container">
						<div id="when-we-start-section__btn--pro" class="btn btn--gradient" data-kt-target="#app-form-section">Přihláška</div>
					</div>

					<div class="link-wrap"><a href="#program">Celý program</a></div>
				</div>
			</div>
		</div>
	</div>
</section>