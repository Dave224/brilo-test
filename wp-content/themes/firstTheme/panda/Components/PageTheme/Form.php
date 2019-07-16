<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section id="app-form-section" class="app-form-section pt-2 pt-lg-3 pb-2">
	<div class="container">
		<header class="mb-2 mb-lg-3">
			<h2 class="base-heading text-white"><?= $ThemeSettings->getTitleApplication();?></h2>
		</header>

		<div class="row justify-content-center text-white">
			<div class="col-lg-10" data-aos="fade-up">
				<div class="row mb-1 text-center">
					<div class="col-md-6 mb-1">
						<div id="app-form-box--beginner" class="bg-semitran pt-2 pt-sm-1 pb-1 app-form-box">
							<h3 class="app-form-box__heading"><?= $ThemeSettings->getStartBeginnersTitle();?></h3>
							<div class="price"><?= $ThemeSettings->getStartBeginnersPrice();?> Kč</div>
							<div class="note">Maximální počet účastníků: <?= $ThemeSettings->getStartBeginnersMaxCandidate();?></div>

							<div class="tag-capacity tag-capacity--left">
								<div class="tag-capacity__icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/user.svg" alt="" /></div>
								<div><?= $ThemeSettings->getStartBeginnersActualCandidate();?> / <?= $ThemeSettings->getStartBeginnersMaxCandidate();?></div>
							</div>
						</div>
					</div>

					<div class="col-md-6 mb-1">
						<div id="app-form-box--pro" class="bg-semitran pt-2 pt-sm-1 pb-1 app-form-box">
							<h3 class="app-form-box__heading"><?= $ThemeSettings->getStartAdvancedTitle();?></h3>
							<div class="price"><?= $ThemeSettings->getStartAdvancedPrice();?> Kč</div>
							<div class="note">Maximální počet účastníků: <?= $ThemeSettings->getStartAdvancedMaxCandidate();?></div>

							<div class="tag-capacity tag-capacity--right">
								<div class="tag-capacity__icon"><img src="<?= get_template_directory_uri(); ?>/images/ico/user.svg" alt="" /></div>
								<div><?= $ThemeSettings->getStartAdvancedActualCandidate();?> / <?= $ThemeSettings->getStartAdvancedMaxCandidate();?></div>
							</div>
						</div>
					</div>
				</div>

				<form action="#" class="app-form">
					<div class="row bg-semitran mr-0 ml-0 pt-1 pt-lg-2 pb-1 mb-1">
						<div class="col-md-6 mb-1">
							<div class="input-wrap"><input type="text" id="app-form-name" /> <label for="app-form-name">Jméno a Příjmení</label> <span class="focus-line"></span></div>

							<div class="input-wrap"><input type="email" id="app-form-email" /> <label for="app-form-email">Email</label> <span class="focus-line"></span></div>

							<div class="input-wrap"><input type="tel" id="app-form-tel" /> <label for="app-form-tel">Telefon</label> <span class="focus-line"></span></div>

							<select id="" name="">
								<option value="1">Pro začátečníky (2.9.2018)</option>
								<option value="2">Pro pokročilé (3.9.2018)</option>
							</select>
						</div>

						<div class="col-md-6 mb-0 mb-lg-1">
							<div class="textarea-wrap"><textarea placeholder="Doplňující informace"></textarea></div>
						</div>
					</div>

					<div class="text-center mb-1">Odesláním Souhlasím se <a href="#">zpracováním osobních údajů</a></div>

					<div class="btn-container text-center mb-1">
						<div class="btn btn--primary btn--big">Odeslat nezávaznout přihlášku</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="app-form-section__bg">
		<picture>
			<source srcset="" data-srcset="images/bg/keyboard.webp" type="image/webp" />
			<img src="" data-src="images/bg/keyboard.png" alt="" />
		</picture>
	</div>
</section>