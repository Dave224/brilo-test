<?php

namespace Components\ProgramQuery;

class ProgramQueryFactory
{

    /** @return ProgramQuery */
    public static function create($keyValue)
    {
        return new ProgramQuery($keyValue);
    }

}
