<?php

namespace Components\PageTheme;

use Utils\Util;

class PageThemeModel extends \KT_WP_Options_Base_Model
{

    public function __construct()
    {
        parent::__construct(PageThemeConfig::FORM_PREFIX);
    }

    //? --- getry & setry ------------------------

    //* --- Kdy začínáme - začátečníci
    //* --- Prefix: StartBeginners

    public function getStartBeginnersTitle()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_TITLE);
    }

    public function getStartBeginnersDate()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_DATE);
    }

    public function getStartBeginnersPlace()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_PLACE);
    }

    public function getStartBeginnersAddress()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_ADDRESS);
    }

    public function getStartBeginnersMaxCandidate()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_MAX_CANDIDATE);
    }

    public function getStartBeginnersActualCandidate()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_ACTUAL_CANDIDATE);
    }

    public function getStartBeginnersPrice()
    {
        return $this->getOption(PageThemeConfig::START_BEGINNERS_PRICE);
    }

    //* --- Kdy začínáme - pokročilý
    //* --- Prefix: StartAdvanced

    public function getStartAdvancedTitle()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_TITLE);
    }

    public function getStartAdvancedDate()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_DATE);
    }

    public function getStartAdvancedPlace()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_PLACE);
    }

    public function getStartAdvancedAddress()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_ADDRESS);
    }

    public function getStartAdvancedMaxCandidate()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_MAX_CANDIDATE);
    }

    public function getStartAdvancedActualCandidate()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_ACTUAL_CANDIDATE);
    }

    public function getStartAdvancedPrice()
    {
        return $this->getOption(PageThemeConfig::START_ADVANCED_PRICE);
    }

    //* --- Kontaktní osoba
    //* --- Prefix: ContactPerson

    public function getContactPersonName()
    {
        return $this->getOption(PageThemeConfig::CONTACT_PERSON_NAME);
    }

    public function getContactPersonPhone()
    {
        return $this->getOption(PageThemeConfig::CONTACT_PERSON_PHONE);
    }

    public function getContactPersonMail()
    {
        return $this->getOption(PageThemeConfig::CONTACT_PERSON_MAIL);
    }

    public function getContactPersonPhoto()
    {
        return $this->getOption(PageThemeConfig::CONTACT_PERSON_PHOTO);
    }

    //* --- Titulky sekcí
    //* --- Prefix: Titles

    public function getTitleHome()
    {
        return $this->getOption(PageThemeConfig::TITLES_HOME);
    }

    public function getTitleStart()
{
    return $this->getOption(PageThemeConfig::TITLES_START);
}

    public function getTitleProgramm()
    {
        return $this->getOption(PageThemeConfig::TITLES_PROGRAMM);
    }

    public function getTitleLectors()
    {
        return $this->getOption(PageThemeConfig::TITLES_LECTORS);
    }

    public function getTitleFaq()
    {
        return $this->getOption(PageThemeConfig::TITLES_FAQ);
    }

    public function getTitleContactPerson()
    {
        return $this->getOption(PageThemeConfig::TITLES_CONTACT_PERSON);
    }

    public function getTitleApplication()
    {
        return $this->getOption(PageThemeConfig::TITLES_APPLICATION);
    }

    //* --- Ostaní
    //* --- Prefix: Other

    public function getOtherNearestDate()
    {
        return $this->getOption(PageThemeConfig::OTHER_NEAREST_DATE);
    }

    //? --- veřejné metody ------------------------------------------------------

}
