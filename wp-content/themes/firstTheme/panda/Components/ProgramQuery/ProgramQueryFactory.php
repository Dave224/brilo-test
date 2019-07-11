<?php

namespace Components\ProgramQuery;

class ProgramQueryFactory
{
    /** @return ProgramQuery */
    public static function create()
    {
        return new ProgramQuery();
    }
}
