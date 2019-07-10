<?php

namespace Components\AdvantegesQuery;

class AdvantegesQueryFactory
{
    /** @return AdvantegesQuery */
    public static function create()
    {
        return new AdvantegesQuery();
    }
}
