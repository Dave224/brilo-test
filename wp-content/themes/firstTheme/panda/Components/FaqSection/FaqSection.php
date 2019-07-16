<?php
use Components\FaqQuery\FaqQueryFactory;
use Components\PageTheme\PageThemeFactory;

$Faqs = FaqQueryFactory::create();
$ThemeSettings = PageThemeFactory::create();
?>

<?php if ($Faqs->hasPosts()) :?>
    <section id="faq" class="faq-section pt-1 pt-lg-3 pb-2">
        <?php if ($ThemeSettings->isTitlesTitlefaq()) :?>
        <header class="mb-1 mb-lg-3 container">
            <h2 class="base-heading"><?= $ThemeSettings->getTitleFaq();?></h2>
        </header>
        <?php endif; ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-xl-10">

                    <div class="row justify-content-between">
                        <?php $Faqs->thePosts(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>