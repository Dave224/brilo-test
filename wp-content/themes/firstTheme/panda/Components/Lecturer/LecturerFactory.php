<?php

namespace Components\Lecturer;

class LecturerFactory
{
    /**
     * @return LecturerModel
     */
    public static function create()
    {
        global $post;
        return new LecturerModel($post);
    }
}