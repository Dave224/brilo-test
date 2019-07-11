<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section id="contacts" class="lecturers-section pt-2 pt-lg-3">
	<div class="container">
		<header class="mb-2 mb-lg-3">
			<h2 class="base-heading"><?php echo $ThemeSettings->getTitleLectors();?></h2>
		</header>

		<div class="row justify-content-center">
			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_01.png" alt="person" /></div>
					<div class="lecturer-block__name">Hugh Jackman</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">hughjackman.com</a>
					<div class="lecturer-block__about">Decathlon champion musketeer frightfully nice luxurious godlike.</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_02.png" alt="person" /></div>
					<div class="lecturer-block__name">Ryan Reynolds</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">ryanreynolds.com</a>
					<div class="lecturer-block__about">Um yesbaby pit fighter ron burgundy boxing champion brush</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_03.png" alt="person" /></div>
					<div class="lecturer-block__name">James McAvoy</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">jamesmcavoy.com</a>
					<div class="lecturer-block__about">Hulk hogan pencil brush ding-dong challenge you to a duel.</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_04.png" alt="person" /></div>
					<div class="lecturer-block__name">Michael Fassbender</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">michaelfassbender.com</a>
					<div class="lecturer-block__about">Hello, we’re cockneys cream bun disaster groucho marx French café patron terry thomas.</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_05.png" alt="person" /></div>
					<div class="lecturer-block__name">Liev Schreiber</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">lievschreiber.com</a>
					<div class="lecturer-block__about">Face broom burt reynolds kris kristofferson. Sergeant major theodore roosevelt tricky</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_06.png" alt="person" /></div>
					<div class="lecturer-block__name">Josef omáčka</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">josefomacka.com</a>
					<div class="lecturer-block__about">Face broom burt reynolds kris kristofferson. Sergeant major.</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_07.png" alt="person" /></div>
					<div class="lecturer-block__name">Josef Omáčka</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">josefomacka.com</a>
					<div class="lecturer-block__about">Face broom burt reynolds kris kristofferson. Sergeant major.</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 lecturer-block">
				<div class="lecturer-block__inner">
					<div class="lecturer-block__img"><img src="<?= get_template_directory_uri(); ?>/images/content/person_08.png" alt="person" /></div>
					<div class="lecturer-block__name">Josef omáčka</div>
					<a href="https://www.google.cz" target="_blank" class="lecturer-block__web">josefomacka.com</a>
					<div class="lecturer-block__about">Face broom burt reynolds kris kristofferson. Sergeant major.</div>
				</div>
			</div>
		</div>
	</div>
</section>