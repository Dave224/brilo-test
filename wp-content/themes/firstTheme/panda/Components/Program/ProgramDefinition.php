<?php

add_action("init", "register_program_post_type");

function register_program_post_type()
{
    // --- post type ------------------------

    $labels = [
        "name" => __("Program", "WPA_DOMAIN"),
        "singular_name" => __("Program", "WPA_DOMAIN"),
        "add_new" => __("Přidat do programu", "WPA_DOMAIN"),
        "add_new_item" => __("Přidat novou část programu", "WPA_DOMAIN"),
        "edit_item" => __("Změnit program", "WPA_DOMAIN"),
        "new_item" => __("Nový program", "WPA_DOMAIN"),
        "view_item" => __("Zobrazit program", "WPA_DOMAIN"),
        "all_items" => __("Všechny části programu", "WPA_DOMAIN"),
        "search_items" => __("Hledat program", "WPA_DOMAIN"),
        "not_found" => __("Žádné části programu nenalezeny", "WPA_DOMAIN"),
        "not_found_in_trash" => __("Žádné části programu v koši", "WPA_DOMAIN"),
        "menu_name" => __("Program", "WPA_DOMAIN"),
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "capability_type" => KT_WP_POST_KEY,
        "query_var" => true,
        "rewrite" => ["slug" => PROGRAM_SLUG, "with_front" => false],
        "has_archive" => false,
        "hierarchical" => false,
        "menu_position" => 6,
        "menu_icon" => "dashicons-calendar",
        "supports" => [
            KT_WP_POST_TYPE_SUPPORT_TITLE_KEY,
            KT_WP_POST_TYPE_SUPPORT_EDITOR_KEY,
            KT_WP_POST_TYPE_SUPPORT_THUMBNAIL_KEY,
            KT_WP_POST_TYPE_SUPPORT_PAGE_ATTRIBUTES_KEY,
            KT_WP_POST_TYPE_SUPPORT_EXCERPT_KEY,
        ],
    ];

    register_post_type(PROGRAM_KEY, $args);
}

// --- admin sloupce ---------------------------

if (is_admin()) { // vlastní sloupce v administraci
//    $ProgramColumns = new KT_Admin_Columns(PROGRAM_KEY);
//    $ProgramColumns->addColumn("menu_order", [
//        KT_Admin_Columns::LABEL_PARAM_KEY => __("Pořadí", "WPA_DOMAIN"),
//        KT_Admin_Columns::TYPE_PARAM_KEY => KT_Admin_Columns::POST_PROPERTY_TYPE_KEY,
//        KT_Admin_Columns::PROPERTY_PARAM_KEY => "menu_order",
//        KT_Admin_Columns::SORTABLE_PARAM_KEY => true,
//        KT_Admin_Columns::INDEX_PARAM_KEY => 3,
//    ]);
}
