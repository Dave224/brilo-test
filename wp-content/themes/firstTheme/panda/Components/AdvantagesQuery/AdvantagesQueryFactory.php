<?php

namespace Components\AdvantagesQuery;

class AdvantagesQueryFactory
{
    /** @return AdvantagesQuery */
    public static function create()
    {
        return new AdvantagesQuery();
    }
}
