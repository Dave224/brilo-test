<?php
use Components\FaqQuery\FaqQueryFactory;
use Components\PageTheme\PageThemeFactory;

$Faqs = FaqQueryFactory::create();
$ThemeSettings = PageThemeFactory::create();
?>p

<section id="faq" class="faq-section pt-1 pt-lg-3 pb-2">
    <header class="mb-1 mb-lg-3 container">
        <h2 class="base-heading"><?php echo $ThemeSettings->getTitleFaq();?></h2>
    </header>

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