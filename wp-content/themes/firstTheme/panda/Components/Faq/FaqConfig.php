<?php

namespace Components\Faq;

class FaqConfig implements \KT_Configable
{
    const FORM_PREFIX = "faq";

    // --- fieldsety ---------------------------

    public static function getAllGenericFieldsets()
    {
        return self::getAllNormalFieldsets() + self::getAllSideFieldsets();
    }

    public static function getAllNormalFieldsets()
    {
//        return [
//            self::PARAMS_FIELDSET => self::getParamsFieldset(),
//        ];
    }

    public static function getAllSideFieldsets()
    {
        return [];
    }


    // --- Hlavní parametry ---------------------------

//    const PARAMS_FIELDSET = self::FORM_PREFIX . "-params";
//    const PARAMS_TITLE = self::PARAMS_FIELDSET . "-title";
//    const PARAMS_ORDER = self::PARAMS_FIELDSET . "-order";
//
//    public static function getParamsFieldset()
//    {
//        $fieldset = new \KT_Form_Fieldset(self::PARAMS_FIELDSET, __("Hlavní parametry", "WPA_DOMAIN"));
//        $fieldset->setPostPrefix(self::PARAMS_FIELDSET);
//
//        $fieldset->addText(self::PARAMS_TITLE, __("Titulek:", "WPA_DOMAIN"));
//        $fieldset->addNumeric(self::PARAMS_ORDER, __("Pořadí:", "WPA_DOMAIN"));
//
//        return $fieldset;
//    }

}
