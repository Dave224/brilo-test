<?php
use Components\Post\PostConfig;

use Components\PageFront\PageFrontConfig;
use Components\PageTheme\PageThemeConfig;


//* --- theme ------------------------

KT_MetaBox::createMultiple(PageThemeConfig::getAllNormalFieldsets(), KT_WP_Configurator::getThemeSettingSlug(), KT_MetaBox_Data_Type_Enum::OPTIONS);

$themeSideMetaboxes = KT_MetaBox::createMultiple(PageThemeConfig::getAllSideFieldsets(), KT_WP_Configurator::getThemeSettingSlug(), KT_MetaBox_Data_Type_Enum::OPTIONS, false);
foreach ($themeSideMetaboxes as $themeSideMetabox) {
    $themeSideMetabox->setContext(KT_MetaBox::CONTEXT_SIDE);
    $themeSideMetabox->register();
}

//* --- front page ------------------------

$pageFrontMetaboxes = KT_MetaBox::createMultiple(PageFrontConfig::getAllNormalFieldsets(), KT_WP_PAGE_KEY, KT_MetaBox_Data_Type_Enum::POST_META, false);
foreach ($pageFrontMetaboxes as $pageFrontMetabox) {
    $pageFrontMetabox->setIsOnlyForFrontPage(true);
    $pageFrontMetabox->register();
}

//* --- post ------------------------

registerMetabox(PostConfig::class, POST_KEY);


//-------------------------------------------
//* shortcut for registration basic metaboxes
function registerMetabox($configName, $key)
{
    KT_MetaBox::createMultiple($configName::getAllGenericFieldsets(), $key, KT_MetaBox_Data_Type_Enum::POST_META);
}
