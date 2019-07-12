<?php

namespace Components\Faq;

class FaqFactory
{
    /**
     * @return FaqModel
     */
    public static function create()
    {
        global $post;
        return new FaqModel($post);
    }
}