<?php
use Components\LecturerQuery\LecturerQueryFactory;
use Components\PageTheme\PageThemeFactory;

$Lecturer = LecturerQueryFactory::create();
$ThemeSettings = PageThemeFactory::create();
?>

<?php if ($Lecturer->hasPosts()) :?>
    <section id="contacts" class="lecturers-section pt-2 pt-lg-3">
        <div class="container">
            <?php if ($ThemeSettings->isTitlesTitlelectors()) :?>
                <header class="mb-2 mb-lg-3">
                    <h2 class="base-heading"><?= $ThemeSettings->getTitleLectors();?></h2>
                </header>
            <?php endif; ?>

            <div class="row justify-content-center">
                <?php $Lecturer->thePosts();?>
            </div>
        </div>
    </section>
<?php endif; ?>