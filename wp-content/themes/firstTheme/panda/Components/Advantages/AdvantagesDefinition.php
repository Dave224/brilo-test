<?php

add_action("init", "register_advantages_post_type");

function register_advantages_post_type()
{
    // --- post type ------------------------

    $labels = [
        "name" => __("Výhody", "RLG_DOMAIN"),
        "singular_name" => __("Výhoda", "RLG_DOMAIN"),
        "add_new" => __("Přidat výhodu", "RLG_DOMAIN"),
        "add_new_item" => __("Přidat novou výhodu", "RLG_DOMAIN"),
        "edit_item" => __("Změnit výhodu", "RLG_DOMAIN"),
        "new_item" => __("Nový výhoda", "RLG_DOMAIN"),
        "view_item" => __("Zobrazit výhodu", "RLG_DOMAIN"),
        "all_items" => __("Všechny výhody", "RLG_DOMAIN"),
        "search_items" => __("Hledat výhodu", "RLG_DOMAIN"),
        "not_found" => __("Žádné výhody nenalezeny", "RLG_DOMAIN"),
        "not_found_in_trash" => __("Žádné výhody v koši", "RLG_DOMAIN"),
        "menu_name" => __("Výhody", "RLG_DOMAIN"),
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "capability_type" => KT_WP_POST_KEY,
        "query_var" => true,
        "rewrite" => ["slug" => ADVANTAGES_SLUG, "with_front" => false],
        "has_archive" => false,
        "hierarchical" => false,
        "menu_position" => 4,
        "menu_icon" => "dashicons-yes",
        "supports" => [
            KT_WP_POST_TYPE_SUPPORT_TITLE_KEY,
            KT_WP_POST_TYPE_SUPPORT_EDITOR_KEY,
            KT_WP_POST_TYPE_SUPPORT_THUMBNAIL_KEY,
            KT_WP_POST_TYPE_SUPPORT_PAGE_ATTRIBUTES_KEY,
            KT_WP_POST_TYPE_SUPPORT_EXCERPT_KEY,
        ],
    ];

    register_post_type(ADVANTAGES_KEY, $args);
}

// --- admin sloupce ---------------------------

if (is_admin()) { // vlastní sloupce v administraci
//    $AdvantagesColumns = new KT_Admin_Columns(ADVANTAGES_KEY);
//    $AdvantagesColumns->addColumn("menu_order", [
//        KT_Admin_Columns::LABEL_PARAM_KEY => __("Pořadí", "RLG_DOMAIN"),
//        KT_Admin_Columns::TYPE_PARAM_KEY => KT_Admin_Columns::POST_PROPERTY_TYPE_KEY,
//        KT_Admin_Columns::PROPERTY_PARAM_KEY => "menu_order",
//        KT_Admin_Columns::SORTABLE_PARAM_KEY => true,
//        KT_Admin_Columns::INDEX_PARAM_KEY => 3,
//    ]);
}
