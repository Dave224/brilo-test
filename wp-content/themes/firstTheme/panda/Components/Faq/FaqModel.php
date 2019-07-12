<?php

namespace Components\Faq;

use Utils\Util;

class FaqModel extends \KT_WP_Post_Base_Model
{


    function __construct(\WP_Post $post)
    {
        parent::__construct($post, FaqConfig::FORM_PREFIX);

    }


    //? --- Getry ------------------------------------------------------------

    //* --- Hlavní parametry
    //* --- Prefix: Params


}
