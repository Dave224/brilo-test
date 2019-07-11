<?php
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section id="program" class="container program-list-section pt-3 mb-1 mb-lg-3">
	<header class="mb-2 mb-lg-3">
		<h2 class="base-heading"><?php echo $ThemeSettings->getTitleProgramm();?></h2>
	</header>

	<div class="row justify-content-between">
		<div class="col-md-6 col-lg-5 program-list-block">
			<header>
				<h3 class="program-list-block__heading"><?php echo $ThemeSettings->getStartBeginnersTitle();?></h3>
			</header>

			<ol class="program-list">
				<li data-aos="fade-up">Úvod do WordPressu - jak funguje, jaké má výhody a co je možné s ním vytvářet za webové projekty.</li>
				<li data-aos="fade-up">Výběr vzhledu a instalace šablony. Jak správně vybrat a na co si dát pozor.</li>
				<li data-aos="fade-up">Nejpoužívanější pluginy, které nesmí na žádném projektu chybět a jak je efektivně používat.</li>
				<li data-aos="fade-up">Bezpečnost a jak chránit své webové projekty před napadením nechtěným hostem</li>
				<li data-aos="fade-up">Výběr vzhledu a instalace šablony. Jak správně vybrat a na co si dát pozor.</li>
				<li data-aos="fade-up">Bezpečnost a jak chránit své webové projekty před napadením nechtěným hostem</li>
				<li data-aos="fade-up">Nejpoužívanější pluginy, které nesmí na žádném projektu chybět a jak je efektivně používat.</li>
			</ol>
		</div>

		<div class="col-md-6 col-lg-5 program-list-block">
			<header>
				<h3 class="program-list-block__heading"><?php echo $ThemeSettings->getStartAdvancedTitle();?></h3>
			</header>

			<ol class="program-list">
				<li data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li data-aos="fade-up">Aliquam at porttitor sem. Aliquam erat volutpat.</li>
				<li data-aos="fade-up">Donec placerat nisl magna, et faucibus arcu condimentum sed.</li>
				<li data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li data-aos="fade-up">Aliquam at porttitor sem. Aliquam erat volutpat.</li>
			</ol>
		</div>
	</div>
</section>