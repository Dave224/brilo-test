<?php

namespace Components\Advantages;

class AdvantagesFactory
{
    /**
     * @return AdvantagesModel
     */
    public static function create()
    {
        global $post;
        return new AdvantagesModel($post);
    }
}