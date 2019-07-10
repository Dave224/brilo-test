<?php

namespace Components\Advanteges;

class AdvantegesFactory
{
    /**
     * @return AdvantegesModel
     */
    public static function create()
    {
        global $post;
        return new AdvantegesModel($post);
    }
}