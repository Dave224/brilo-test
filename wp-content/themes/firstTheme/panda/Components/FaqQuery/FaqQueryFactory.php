<?php

namespace Components\FaqQuery;

class FaqQueryFactory
{
    /** @return FaqQuery */
    public static function create()
    {
        return new FaqQuery();
    }
}
