<?php

add_action("init", "register_faq_post_type");

function register_faq_post_type()
{
    // --- post type ------------------------

    $labels = [
        "name" => __("Faq", "WPA_DOMAIN"),
        "singular_name" => __("Faq", "WPA_DOMAIN"),
        "add_new" => __("Přidat faq", "WPA_DOMAIN"),
        "add_new_item" => __("Přidat novou faq", "WPA_DOMAIN"),
        "edit_item" => __("Změnit faq", "WPA_DOMAIN"),
        "new_item" => __("Nová faq", "WPA_DOMAIN"),
        "view_item" => __("Zobrazit faq", "WPA_DOMAIN"),
        "all_items" => __("Všechny faq", "WPA_DOMAIN"),
        "search_items" => __("Hledat faq", "WPA_DOMAIN"),
        "not_found" => __("Žádné faq nenalezeny", "WPA_DOMAIN"),
        "not_found_in_trash" => __("Žádné faq v koši", "WPA_DOMAIN"),
        "menu_name" => __("Faqs", "WPA_DOMAIN"),
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "capability_type" => KT_WP_POST_KEY,
        "query_var" => true,
        "rewrite" => ["slug" => FAQ_SLUG, "with_front" => false],
        "has_archive" => false,
        "hierarchical" => false,
        "menu_position" => 5,
        "menu_icon" => "dashicons-info",
        "supports" => [
            KT_WP_POST_TYPE_SUPPORT_TITLE_KEY,
            KT_WP_POST_TYPE_SUPPORT_EDITOR_KEY,
            KT_WP_POST_TYPE_SUPPORT_THUMBNAIL_KEY,
            KT_WP_POST_TYPE_SUPPORT_PAGE_ATTRIBUTES_KEY,
            KT_WP_POST_TYPE_SUPPORT_EXCERPT_KEY,
        ],
    ];

    register_post_type(FAQ_KEY, $args);
}

// --- admin sloupce ---------------------------

if (is_admin()) { // vlastní sloupce v administraci
//    $FaqColumns = new KT_Admin_Columns(FAQ_KEY);
//    $FaqColumns->addColumn("menu_order", [
//        KT_Admin_Columns::LABEL_PARAM_KEY => __("Pořadí", "WPA_DOMAIN"),
//        KT_Admin_Columns::TYPE_PARAM_KEY => KT_Admin_Columns::POST_PROPERTY_TYPE_KEY,
//        KT_Admin_Columns::PROPERTY_PARAM_KEY => "menu_order",
//        KT_Admin_Columns::SORTABLE_PARAM_KEY => true,
//        KT_Admin_Columns::INDEX_PARAM_KEY => 3,
//    ]);
}
