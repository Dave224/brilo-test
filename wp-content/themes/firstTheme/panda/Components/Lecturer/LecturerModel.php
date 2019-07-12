<?php

namespace Components\Lecturer;

use Utils\Util;

class LecturerModel extends \KT_WP_Post_Base_Model
{

    private $ThumbnailId;
    function __construct(\WP_Post $post)
    {
        parent::__construct($post, LecturerConfig::FORM_PREFIX);
        $this->ThumbnailId = $this->getThumbnailId();
    }


    //? --- Getry ------------------------------------------------------------

    //* --- Hlavní parametry
    //* --- Prefix: Params
    public function getLecturerWWW()
    {
        return $this->getMetaValue(LecturerConfig::PARAMS_WWW);
    }

    public function getLecturerDescription()
    {
        return $this->getMetaValue(LecturerConfig::PARAMS_DESCRIPTION);
    }

    public function getThumbnailSrc()
    {
        return Util::getImageSrc($this->ThumbnailId, IMAGE_SIZE_192x192);
    }

}
