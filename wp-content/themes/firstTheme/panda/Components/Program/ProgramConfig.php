<?php

namespace Components\Program;

use Enums\ProgramEnum;
use Utils\Util;

class ProgramConfig implements \KT_Configable
{
    const FORM_PREFIX = "program";
    const PROGRAM_LIST = "program-list";


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


    const PARAMS_FIELDSET = self::FORM_PREFIX . "-program";
    public static function getParamsFieldset()
    {
        $fieldset = new \KT_Form_Fieldset(self::PARAMS_FIELDSET, __("Zařázení", "RLG_DOMAIN"));
        $fieldset->setPostPrefix(self::PARAMS_FIELDSET);

        $ProgramTypes = new ProgramEnum();
        $ProgramOptions = Util::arrayRemoveByKey($ProgramTypes->getTranslates(), ProgramEnum::NONE);

        $fieldset->addSelect(self::PROGRAM_LIST)->setOptionsData($ProgramOptions);

        return $fieldset;
    }
}
