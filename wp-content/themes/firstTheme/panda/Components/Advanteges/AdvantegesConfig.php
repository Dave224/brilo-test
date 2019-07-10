<?php

namespace Components\Advanteges;

class AdvantegesConfig implements \KT_Configable
{
    const FORM_PREFIX = "advanteges";

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
//        $fieldset = new \KT_Form_Fieldset(self::PARAMS_FIELDSET, __("Hlavní parametry", "RLG_DOMAIN"));
//        $fieldset->setPostPrefix(self::PARAMS_FIELDSET);
//
//        $fieldset->addText(self::PARAMS_TITLE, __("Titulek:", "RLG_DOMAIN"));
//        $fieldset->addNumeric(self::PARAMS_ORDER, __("Pořadí:", "RLG_DOMAIN"));
//
//        return $fieldset;
//    }

}
