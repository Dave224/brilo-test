<?php
use Utils\Util;
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section id="contact" class="contact-person-section mt-2 mt-lg-3 mb-2 mb-lg-3">
    <div class="container">

        <?php if ($ThemeSettings->isTitlesTitlecontactperson()) :?>
            <header>
                <h2 class="base-heading"><?= $ThemeSettings->getTitleContactPerson();?></h2>
            </header>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 lecturer-block">
                <div class="lecturer-block__inner">
                    <?php if ($ThemeSettings->isContactpersonPhoto()) :?>
                        <div class="lecturer-block__img lecturer-block__img--same-size"><img src="<?= Util::getImageSrc($ThemeSettings->getContactPersonPhoto(), IMAGE_SIZE_192x192);?>" alt="person" /></div>
                    <?php endif; ?>

                    <?php if ($ThemeSettings->isContactpersonName()) :?>
                        <div class="lecturer-block__name"><?= $ThemeSettings->getContactPersonName();?></div>
                    <?php endif; ?>

                    <?php if ($ThemeSettings->isContactpersonPhone()) :?>
                        <a href="tel:<?= $ThemeSettings->getContactPersonPhone();?>" class="lecturer-block__tel d-block d-md-none"><?= $ThemeSettings->getContactPersonPhone();?></a>
                        <div class="lecturer-block__tel d-none d-md-block"><?= $ThemeSettings->getContactPersonPhone();?></div>
                    <?php endif; ?>

                    <?php if ($ThemeSettings->isContactpersonMail()) :?>
                        <a href="mailto:<?= $ThemeSettings->getContactPersonMail();?>" class="lecturer-block__email"><?= $ThemeSettings->getContactPersonMail();?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

