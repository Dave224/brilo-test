<?php
use Components\Program\ProgramFactory;
use Components\PageTheme\PageThemeFactory;

$Program = ProgramFactory::create();
$ThemeSettings = PageThemeFactory::create();
?>

<li data-aos="fade-up"><?= $Program->getContent(); ?></li>