<?php
use Components\PageTheme\PageThemeFactory;
use Components\ProgramQuery\ProgramQueryFactory;
use Enums\ProgramEnum;

$ThemeSettings = PageThemeFactory::create();
$ProgramBegginers = ProgramQueryFactory::create(ProgramEnum::BEGINNERS);
$ProgramAdvanced = ProgramQueryFactory::create(ProgramEnum::ADVANCED);

?>
<?php if ($ProgramBegginers->hasPosts()) :?>
<section id="program" class="container program-list-section pt-3 mb-1 mb-lg-3">
    <?php if ($ThemeSettings->isTitlesTitleprogramm()) :?>
    <header class="mb-2 mb-lg-3">
		<h2 class="base-heading"><?= $ThemeSettings->getTitleProgramm();?></h2>
    </header>
    <?php endif; ?>

    <div class="row justify-content-between">
        <div class="col-md-6 col-lg-5 program-list-block">
            <header>
                <h3 class="program-list-block__heading"><?php _e("Pro začátečníky", "WPA_DOMAIN")?></h3>
            </header>
            <ol class="program-list">
                <?php $ProgramBegginers->thePosts();?>
            </ol>
        </div>

        <div class="col-md-6 col-lg-5 program-list-block">
            <header>
                <h3 class="program-list-block__heading"><?php _e("Pro pokročilé", "WPA_DOMAIN")?></h3>
            </header>
            <ol class="program-list">
                <?php $ProgramAdvanced->thePosts();?>
            </ol>
        </div>
    </div>
</section>
<?php endif; ?>