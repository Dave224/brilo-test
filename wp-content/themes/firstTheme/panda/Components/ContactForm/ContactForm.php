<?php
use Components\ContactForm\ContactFormFactory;
use Components\ContactForm\ContactFormConfig;

$FormPresenter = ContactFormFactory::create();
$Form = $FormPresenter->getForm();
$Form->addAttrClass("app-form contact-form");
$fieldset = $FormPresenter->getFieldset();


$NameField = $fieldset[ContactFormConfig::NAME];

$PhoneField = $fieldset[ContactFormConfig::PHONE];

$EmailField = $fieldset[ContactFormConfig::EMAIL];

$MessageField = $fieldset[ContactFormConfig::MESSAGE];

$ProgramField = $fieldset[ContactFormConfig::PROGRAM_LIST];
?>

<?= $Form->getFormHeader(); ?>
<div class="row bg-semitran mr-0 ml-0 pt-1 pt-lg-2 pb-1 mb-1">
    <div class="col-md-6 mb-1">
        <div class="input-wrap">
            <?= $NameField->getField(); ?>

<!--            <span class="fake-placeholder">--><?php //_e("Jméno a Příjmení", "WPA_DOMAIN"); ?><!--</span>-->
    <!--        <span class="required-notice">--><?php //_e("Jméno je povinná položka", "WPA_DOMAIN"); ?><!--</span>-->
            <span class="focus-line"></span>
        </div>

        <div class="input-wrap">
            <?= $EmailField->getField(); ?>

<!--            <span class="fake-placeholder">--><?php //_e("Email*", "WPA_DOMAIN"); ?><!--</span>-->
    <!--        <span class="required-notice">--><?php //_e("E-mail je povinná položka", "WPA_DOMAIN"); ?><!--</span>-->
            <span class="focus-line"></span>
        </div>

        <div class="input-wrap">
            <?= $PhoneField->getField(); ?>

<!--            <span class="fake-placeholder">--><?php //_e("Telefon", "WPA_DOMAIN"); ?><!--</span>-->
    <!--        <span class="required-notice">--><?php //_e("Povinné", "WPA_DOMAIN"); ?><!--</span>-->
            <span class="focus-line"></span>
        </div>
        <?= $ProgramField->getField(); ?>
    </div>
    <div class="col-md-6 mb-0 mb-lg-1">
        <div class="textarea-wrap">
            <?= $MessageField->getField(); ?>
        </div>
    </div>
</div>

    <div class="text-center mb-1"><?php _e("Odesláním souhlasím se", "WPA_DOMAIN"); ?> <a href="https://www.brilo.cz/gdpr/" target="_blank"><?php _e("zpracováním osobních údajů", "WPA_DOMAIN"); ?></a></div>

    <div class="btn-container text-center mb-1">
        <div class="btn btn--primary btn--big submitButton">
            <?php _e("Odeslat nezávaznou přihlášku", "WPA_DOMAIN"); ?>
        </div>
    </div>

<div class="d-none">
    <?= $fieldset[KT_Contact_Form_Base_Config::FAVOURITE]->getControlHtml(); ?>
    <?= $fieldset[KT_Contact_Form_Base_Config::NONCE]->getField(); ?>
</div>


<?= $Form->getFormFooter(); ?>