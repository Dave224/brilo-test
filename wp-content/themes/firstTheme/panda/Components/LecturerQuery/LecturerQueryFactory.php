<?php

namespace Components\LecturerQuery;

class LecturerQueryFactory
{
    /** @return LecturerQuery */
    public static function create()
    {
        return new LecturerQuery();
    }
}
