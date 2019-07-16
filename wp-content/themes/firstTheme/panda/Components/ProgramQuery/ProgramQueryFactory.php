<?php

namespace Components\ProgramQuery;

class ProgramQueryFactory
{
    const BEGINNERS = "Pro začátečníky";
    const ADVANCED = "Pro pokročilé";
    /** @return ProgramQuery */
    public static function create()
    {
        return new ProgramQuery(self::BEGINNERS);
    }

    /** @return ProgramQuery */
    public static function create2()
    {
        return new ProgramQuery(self::ADVANCED);
    }
}
