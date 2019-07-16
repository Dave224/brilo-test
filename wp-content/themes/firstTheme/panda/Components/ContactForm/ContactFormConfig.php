<?php
namespace Components\ContactForm;

use Enums\ProgramEnum;
use Utils\Util;

class ContactFormConfig extends \KT_Contact_Form_Base_Config
{
    const PROGRAM_LIST = "program-list";


    public static function getFieldset($splittedName = false, $exactedPhone = true, $requiredPhone = true)
    {
        /** @var KT_Fieldset $fieldset */
        $fieldset = parent::getFieldset(false, false, false);

        $ProgramTypes = new ProgramEnum();

        $ProgramOptions = Util::arrayRemoveByKey($ProgramTypes->getTranslates(), ProgramEnum::NONE);

        $fieldset->addSelect(self::PROGRAM_LIST)->setOptionsData($ProgramOptions);

        return $fieldset;
    }
}