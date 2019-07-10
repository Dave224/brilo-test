<?php

namespace Components\Advanteges;

use Utils\Util;

class AdvantegesModel extends \KT_WP_Post_Base_Model
{


    function __construct(\WP_Post $post)
    {
        parent::__construct($post, AdvantegesConfig::FORM_PREFIX);

    }


    //? --- Getry ------------------------------------------------------------

    //* --- Hlavní parametry
    //* --- Prefix: Params

//    public function getParamsTitle()
//    {
//        return $this->getMetaValue(AdvantegesConfig::PARAMS_TITLE);
//    }
//
//    public function getParamsOrder()
//    {
//        return $this->getMetaValue(AdvantegesConfig::PARAMS_ORDER);
//    }

}
