<?php
use Components\Program\ProgramFactory;
use Components\PageTheme\PageThemeFactory;

$Program = ProgramFactory::create();
$ThemeSettings = PageThemeFactory::create();
?>

<?php if (!empty($Program->getContent())) :?>
    <li data-aos="fade-up"><?= $Program->getContent(); ?></li>
<?php endif; ?>