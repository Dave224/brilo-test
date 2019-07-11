<?php

namespace Components\Program;

class ProgramFactory
{
    /**
     * @return ProgramModel
     */
    public static function create()
    {
        global $post;
        return new ProgramModel($post);
    }
}