<?php
use Components\PageTheme\PageThemeFactory;
use Components\ProgramQuery\ProgramQueryFactory;

$ThemeSettings = PageThemeFactory::create();
$Program = ProgramQueryFactory::create();
?>

<section id="program" class="container program-list-section pt-3 mb-1 mb-lg-3">
	<header class="mb-2 mb-lg-3">
		<h2 class="base-heading"><?= $ThemeSettings->getTitleProgramm();?></h2>
    </header>

    <div class="row justify-content-between">
        <div class="col-md-6 col-lg-5 program-list-block">
            <header>
                <h3 class="program-list-block__heading"><?php _e("Pro začátečníky", "WPA_DOMAIN")?></h3>
            </header>
            <ol class="program-list">
                <?php $Program->theBegginersPosts();?>
            </ol>
        </div>

        <div class="col-md-6 col-lg-5 program-list-block">
            <header>
                <h3 class="program-list-block__heading"><?php _e("Pro pokročilé", "WPA_DOMAIN")?></h3>
            </header>
            <ol class="program-list">
                <?php $Program->theAdvancedPosts();?>
            </ol>
        </div>
    </div>
</section>