<?php

namespace Components\Advantages;

use Utils\Util;

class AdvantagesModel extends \KT_WP_Post_Base_Model
{


    function __construct(\WP_Post $post)
    {
        parent::__construct($post, AdvantagesConfig::FORM_PREFIX);

    }


    //? --- Getry ------------------------------------------------------------

    //* --- Hlavní parametry
    //* --- Prefix: Params

//    public function getParamsTitle()
//    {
//        return $this->getMetaValue(AdvantagesConfig::PARAMS_TITLE);
//    }
//
//    public function getParamsOrder()
//    {
//        return $this->getMetaValue(AdvantagesConfig::PARAMS_ORDER);
//    }

}
