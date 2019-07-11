<?php

namespace Enums;

final class ProgramEnum extends \KT_Enum
{
    const NONE = 0;
    const BEGINNERS = "Pro začátečníky";
    const ADVANCED = "Pro pokročilé";

    function __construct($value = null)
    {
        parent::__construct($value ?: self::NONE);
        $translates = [];
        $translates[self::NONE] = KT_EMPTY_SYMBOL;
        $translates[self::BEGINNERS] = __("Pro začátečníky", "RLG_DOMAIN");
        $translates[self::ADVANCED] = __("Pro pokročilé", "RLG_DOMAIN");

        $this->setTranslates($translates);
    }
}
