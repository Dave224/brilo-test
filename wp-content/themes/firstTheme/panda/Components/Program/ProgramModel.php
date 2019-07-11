<?php

namespace Components\Program;

use Utils\Util;

class ProgramModel extends \KT_WP_Post_Base_Model
{


    function __construct(\WP_Post $post)
    {
        parent::__construct($post, ProgramConfig::FORM_PREFIX);

    }


    //? --- Getry ------------------------------------------------------------
    public function getProgramCategory()
    {

        return $this->getMetaValue(ProgramConfig::PROGRAM_LIST);
    }
}
