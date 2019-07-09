<?php
use Utils\Util;
use Components\PageTheme\PageThemeFactory;
$ThemeSettings = PageThemeFactory::create();?>

<section id="contact" class="contact-person-section mt-2 mt-lg-3 mb-2 mb-lg-3">
    <div class="container">
        <header>
            <h2 class="base-heading">Kontaktní osoba</h2>
        </header>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 lecturer-block">
                <div class="lecturer-block__inner">
                    <div class="lecturer-block__img lecturer-block__img--same-size"><img src="<?php echo Util::getImageSrc($ThemeSettings->getContactPersonPhoto(), IMAGE_SIZE_192x192);?>" data-src="<?php echo Util::getImageSrc($ThemeSettings->getContactPersonPhoto(), IMAGE_SIZE_192x192);?>" alt="person" /></div>

                    <div class="lecturer-block__name"><?php echo $ThemeSettings->getContactPersonName();?></div>
                    <a href="tel:<?php echo $ThemeSettings->getContactPersonPhone();?>" class="lecturer-block__tel d-block d-md-none"><?php echo $ThemeSettings->getContactPersonPhone();?></a>
                    <div class="lecturer-block__tel d-none d-md-block"><?php echo $ThemeSettings->getContactPersonPhone();?></div>
                    <a href="mailto:<?php echo $ThemeSettings->getContactPersonMail();?>" class="lecturer-block__email"><?php echo $ThemeSettings->getContactPersonMail();?></a>
                </div>
            </div>
        </div>
    </div>
</section>

