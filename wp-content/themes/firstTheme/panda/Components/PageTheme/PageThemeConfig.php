<?php

namespace Components\PageTheme;

use Utils\Util;

class PageThemeConfig implements \KT_Configable
{
    const FORM_PREFIX = "theme-settings";

    // --- fieldsety ---------------------------

    public static function getAllGenericFieldsets()
    {
        return self::getAllNormalFieldsets() + self::getAllSideFieldsets();
    }

    public static function getAllNormalFieldsets()
    {
        return [
            self::START_BEGINNERS_FIELDSET => self::getStartBeginnersFieldset(),
            self::START_ADVANCED_FIELDSET => self::getStartAdvancedFieldset(),
            self::CONTACT_PERSON_FIELDSET => self::getContactPersonFieldset(),
            self::TITLES_FIELDSET => self::getTitlesFieldset(),
            self::OTHER_FIELDSET => self::getOtherFieldset(),
            self::ANALYTICS_FIELDSET => self::getAnalyticsFieldset(),
        ];
    }

    public static function getAllSideFieldsets()
    {
        return [];
    }

    // --- KDY ZAČÍNÁME - ZAČÁTEČNÍCI ------------------------

    const START_BEGINNERS_FIELDSET = self::FORM_PREFIX . "-start-beginners";
    const START_BEGINNERS_TITLE = self::START_BEGINNERS_FIELDSET . "-title";
    const START_BEGINNERS_DATE = self::START_BEGINNERS_FIELDSET . "-date";
    const START_BEGINNERS_PLACE = self::START_BEGINNERS_FIELDSET . "-place";
    const START_BEGINNERS_ADDRESS = self::START_BEGINNERS_FIELDSET . "-address";
    const START_BEGINNERS_MAX_CANDIDATE = self::START_BEGINNERS_FIELDSET . "-max-candidate";
    const START_BEGINNERS_ACTUAL_CANDIDATE = self::START_BEGINNERS_FIELDSET . "-actual-candidate";
    const START_BEGINNERS_PRICE = self::START_BEGINNERS_FIELDSET . "-price";


    public static function getStartBeginnersFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::START_BEGINNERS_FIELDSET, __("Kdy začínáme - začátečníci", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::START_BEGINNERS_FIELDSET);

        $fieldset->addText(self::START_BEGINNERS_TITLE, __("Titulek:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_BEGINNERS_DATE, __("Datum:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_BEGINNERS_PLACE, __("Místo:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_BEGINNERS_ADDRESS, __("Adresa:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_BEGINNERS_MAX_CANDIDATE, __("Maximální počet uchazečů:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_BEGINNERS_ACTUAL_CANDIDATE, __("Aktuální počet uchazečů:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_BEGINNERS_PRICE, __("Cena:", "RLG_DOMAIN"));
        return $fieldset;
    }

    // --- KDY ZAČÍNÁME - POKROČILÝ ------------------------

    const START_ADVANCED_FIELDSET = self::FORM_PREFIX . "-start-advanced";
    const START_ADVANCED_TITLE = self::START_ADVANCED_FIELDSET . "-title";
    const START_ADVANCED_DATE = self::START_ADVANCED_FIELDSET . "-date";
    const START_ADVANCED_PLACE = self::START_ADVANCED_FIELDSET . "-place";
    const START_ADVANCED_ADDRESS = self::START_ADVANCED_FIELDSET . "-address";
    const START_ADVANCED_MAX_CANDIDATE = self::START_ADVANCED_FIELDSET . "-max-candidate";
    const START_ADVANCED_ACTUAL_CANDIDATE = self::START_ADVANCED_FIELDSET . "-actual-candidate";
    const START_ADVANCED_PRICE = self::START_ADVANCED_FIELDSET . "-price";


    public static function getStartAdvancedFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::START_ADVANCED_FIELDSET, __("Kdy začínáme - pokročilý", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::START_ADVANCED_FIELDSET);

        $fieldset->addText(self::START_ADVANCED_TITLE, __("Titulek:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_ADVANCED_DATE, __("Datum:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_ADVANCED_PLACE, __("Místo:", "RLG_DOMAIN"));
        $fieldset->addText(self::START_ADVANCED_ADDRESS, __("Adresa:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_ADVANCED_MAX_CANDIDATE, __("Maximální počet uchazečů:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_ADVANCED_ACTUAL_CANDIDATE, __("Aktuální počet uchazečů:", "RLG_DOMAIN"));
        $fieldset->addNumeric(self::START_ADVANCED_PRICE, __("Cena:", "RLG_DOMAIN"));
        return $fieldset;
    }


    // --- KONTAKTNÍ OSOBA ------------------------

    const CONTACT_PERSON_FIELDSET = self::FORM_PREFIX . "-contact-person";
    const CONTACT_PERSON_NAME = self::CONTACT_PERSON_FIELDSET . "-name";
    const CONTACT_PERSON_PHONE = self::CONTACT_PERSON_FIELDSET . "-phone";
    const CONTACT_PERSON_MAIL = self::CONTACT_PERSON_FIELDSET . "-email";
    const CONTACT_PERSON_PHOTO = self::CONTACT_PERSON_FIELDSET . "-photo";


    public static function getContactPersonFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::CONTACT_PERSON_FIELDSET, __("Kontaktní osoba", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::CONTACT_PERSON_FIELDSET);

        $fieldset->addText(self::CONTACT_PERSON_NAME, __("Jméno:", "RLG_DOMAIN"));
        $fieldset->addText(self::CONTACT_PERSON_PHONE, __("Telefon:", "RLG_DOMAIN"));
        $fieldset->addText(self::CONTACT_PERSON_MAIL, __("E-mail:", "RLG_DOMAIN"));
        $fieldset->addMedia(self::CONTACT_PERSON_PHOTO, __("Foto:", "RLG_DOMAIN"));
        return $fieldset;
    }

    // --- TITULKY SEKCÍ ------------------------

    const TITLES_FIELDSET = self::FORM_PREFIX . "-titles";
    const TITLES_HOME = self::TITLES_FIELDSET . "-home";
    const TITLES_START = self::TITLES_FIELDSET . "-start";
    const TITLES_PROGRAMM = self::TITLES_FIELDSET . "-programm";
    const TITLES_LECTORS = self::TITLES_FIELDSET . "-lectors";
    const TITLES_FAQ = self::TITLES_FIELDSET . "-faq";
    const TITLES_CONTACT_PERSON = self::TITLES_FIELDSET . "-person";
    const TITLES_APPLICATION = self::TITLES_FIELDSET . "-application";

    public static function getTitlesFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::TITLES_FIELDSET, __("Titulky sekcí", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::TITLES_FIELDSET);

        $fieldset->addText(self::TITLES_HOME, __("Úvod:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_START, __("Kdy začínáme:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_PROGRAMM, __("Program:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_LECTORS, __("Přednášející:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_FAQ, __("FAQ:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_CONTACT_PERSON, __("Kontaktní osoba:", "RLG_DOMAIN"));
        $fieldset->addText(self::TITLES_APPLICATION, __("Přihláška:", "RLG_DOMAIN"));
        return $fieldset;
    }

    // --- OSTATNÍ ------------------------

    const OTHER_FIELDSET = self::FORM_PREFIX . "-other";
    const OTHER_NEAREST_DATE = self::OTHER_FIELDSET . "-nearest_date";

    public static function getOtherFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::OTHER_FIELDSET, __("Ostatní", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::OTHER_FIELDSET);

        $fieldset->addText(self::OTHER_NEAREST_DATE, __("Nejbližší termín:", "RLG_DOMAIN"));
        return $fieldset;
    }

    // --- ANALYTIKA ------------------------

    const ANALYTICS_FIELDSET = self::FORM_PREFIX . "-analytics";
    const ANALYTICS_HEADER_CODE = self::ANALYTICS_FIELDSET . "-header-code";
    const ANALYTICS_BODY_CODE = self::ANALYTICS_FIELDSET . "-body-code";

    public static function getAnalyticsFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::ANALYTICS_FIELDSET, __("Analytika", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::ANALYTICS_FIELDSET);

        $fieldset->addTextarea(self::ANALYTICS_HEADER_CODE, __("Kód v header:", "RLG_DOMAIN"))
            ->setFilterSanitize(FILTER_DEFAULT);

        $fieldset->addTextarea(self::ANALYTICS_BODY_CODE, __("Kód v body:", "RLG_DOMAIN"))
            ->setFilterSanitize(FILTER_DEFAULT);

        return $fieldset;
    }
}
