<?php

$config = new KT_WP_Configurator();

$config->setDisplayLogo()
    ->setPostArchiveMenu()
    ->setAllowCookieStatement()
    ->setAllowSession();

$config->addThemeSupport(KT_WP_THEME_SUPPORT_POST_THUMBNAILS_KEY);

$config->addPostTypeSupport(KT_WP_POST_TYPE_SUPPORT_EXCERPT_KEY, [KT_WP_PAGE_KEY]);

$config->setExcerptText("...");

$config->pageRemover()
    ->removeComments()
    ->removeSubPage("themes.php", "theme-editor.php");

$config->metaboxRemover()
    ->removeMetabox("tagsdiv-news-type", KT_WP_POST_KEY, "normal")
    ->removeRevisionsMetabox();


// --- images ------------------------------

//? -- FancyboxPreview size
$config->addImageSize(IMAGE_SIZE_192x192, 192, 192, true);

$config->addImageSize(IMAGE_SIZE_300x300, 300, 300, true);


$config->setImagesLazyLoading(true)
    ->setImagesLinkClasses(true);

// --- styly ---------------------------

$config->assetsConfigurator()->addStyle("theme-style", get_template_directory_uri() . "/style.css")
    ->setVersion(20190111)
    ->setEnqueue();


$config->assetsConfigurator()
    ->addStyle("google-font", "https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext")
    ->setEnqueue();

// --- scripty ------------------------------

$config->assetsConfigurator()
    ->addScript("theme-functions-script", get_template_directory_uri() . "/functions.min.js")
    ->addLocalizationData("myAjax", ["ajaxurl" => admin_url("admin-ajax.php")])
    ->setInFooter(true)
    ->setVersion(20190507)
    ->setEnqueue();


// --- menu ---------------------------

$config->addWpMenu(NAVIGATION_MAIN_MENU, __("Menu v hlavičce", "WPA_DOMAIN"));
$config->addWpMenu(NAVIGATION_FOOTER_MENU, __("Menu v patičce", "WPA_DOMAIN"));


// --- sidebars ------------------------------


// --- dashboard ------------------------------

$config->metaboxRemover()->clearWordpressDashboard(true)
    ->removeDashboardMetabox("icl_dashboard_widget")
    ->removeDashboardMetabox("wpseo-dashboard-overview");

// --- widgety ------------------------------

$config->widgetRemover()
    ->removeAllSystemWidgets(true, true, true)
    ->removeWidget("bcn_widget");

// --- head ------------------------------

$config->headRemover()->removeRecommendSystemHeads();

// --- Stránka s theme options ------------------------------

$config->setThemeSettingsPage();

// --- aktivace dynamickych fieldsetu ------------------------------

$config->setEnableDynamicFieldsets();


// --- incializace ------------------------------

$config->initialize();

KT_Termmeta::activate();


// TODO: Move it somewhere else
// Load cdn Fancybox only on pages where is gallery
add_action("wp_enqueue_scripts", "fancybox_method_enque_script_callback");
function fancybox_method_enque_script_callback()
{
    if (get_post_gallery()) {
        wp_register_script("fancybox-js", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js", "", "", true);
        wp_enqueue_style("fancybox-style", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css");
        wp_enqueue_script("fancybox-js");
    }
}

