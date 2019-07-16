<?php

namespace Components\Lecturer;

class LecturerConfig implements \KT_Configable
{
    const FORM_PREFIX = "lecturer";

    // --- fieldsety ---------------------------

    public static function getAllGenericFieldsets()
    {
        return self::getAllNormalFieldsets() + self::getAllSideFieldsets();
    }

    public static function getAllNormalFieldsets()
    {
        return [
            self::PARAMS_FIELDSET => self::getParamsFieldset(),
        ];
    }

    public static function getAllSideFieldsets()
    {
        return [];
    }


    // --- Hlavní parametry ---------------------------

    const PARAMS_FIELDSET = self::FORM_PREFIX . "-params";
    const PARAMS_WWW = self::PARAMS_FIELDSET . "-www";
    const PARAMS_DESCRIPTION = self::PARAMS_FIELDSET . "-description";

    public static function getParamsFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::PARAMS_FIELDSET, __("Parametry", "WPA_DOMAIN"));
        $fieldset->setPostPrefix(self::PARAMS_FIELDSET);

        $fieldset->addText(self::PARAMS_WWW, __("WWW stránky:", "WPA_DOMAIN"));
        $fieldset->addText(self::PARAMS_DESCRIPTION, __("Popisek:", "WPA_DOMAIN"));

        return $fieldset;
    }

}
