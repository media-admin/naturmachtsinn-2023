<?php

/* === NATUR MACHT SINN CUSTOM POST TYPES === */
function naturmachtsinn_post_types()
{
  add_post_type_support("team", "thumbnail");
  add_post_type_support("team", "excerpt");

  add_filter("naturmachtsinn_gallery_metabox_post_types", function ($types) {
    $types[] = "gallery";
    return $types;
  });

  /* --- Custom Post Type PROJEKTE --- */
  $labels = [
    "name" => "Projekte",
    "add_new" => "Neues Projekt erstellen",
    "edit_item" => "Projekt bearbeiten",
    "singular_name" => "Projekt",
    "all_items" => "Alle Projekte",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("project", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "labels" => $labels,
    "taxonomies" => ["project-category"],
    "supports" => [
      "editor",
      "revisions",
      "thumbnail",
      "title",
      "excerpt",
      "custom-fields",
    ],
    "has_archive" => false,
    "exclude_from_search" => false,
    "rewrite" => [
      "slug" => "projekt",
      "with_front" => true,
      "pages" => true,
      "feeds" => true,
    ],
    "menu_position" => 8,
    "show_in_admin_bar" => true,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-hammer",
  ]);

  add_post_type_support("project", "thumbnail");

  /* --- Custom Post Type FAQ --- */
  $labels = [
    "name" => "FAQs",
    "add_new" => "Neue FAQ erstellen",
    "edit_item" => "FAQ bearbeiten",
    "singular_name" => "FAQ",
    "all_items" => "Alle FAQs",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("faq", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "taxonomies" => ["faq-category"],
    "labels" => $labels,
    "supports" => [
      "editor",
      "page-attributes",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "has_archive" => false,
    "exclude_from_search" => false,
    "rewrite" => [
      "slug" => "faq",
      "with_front" => true,
      "pages" => true,
      "feeds" => true,
    ],
    "menu_position" => 9,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-lightbulb",
  ]);

  add_post_type_support("faq", "thumbnail");

  /* --- Custom Post Type TEAM MEMBER --- */
  $labels = [
    "name" => "Team-Mitglieder",
    "add_new" => "Neues Team-Mitglied hinzufügen",
    "edit_item" => "Team-Mitglied bearbeiten",
    "singular_name" => "Team-Mitglied",
    "all_items" => "Alle Team-Mitglieder",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("team-member", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "taxonomies" => ["team-member-category"],
    "labels" => $labels,
    "has_archive" => false,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "team-members"],
    "menu_position" => 10,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-id",
  ]);

  add_post_type_support("team-member", "thumbnail");

  /* --- Custom Post Type PARTNER --- */
  $labels = [
    "name" => "Partner",
    "add_new" => "Neuen Partner anlegen",
    "edit_item" => "Partner bearbeiten",
    "singular_name" => "Partner",
    "all_items" => "Alle Partner",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("partner", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "taxonomies" => ["partner-category"],
    "labels" => $labels,
    "supports" => [
      "editor",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "has_archive" => false,
    "exclude_from_search" => false,
    "menu_position" => 11,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-networking",
  ]);

  add_post_type_support("partner", "thumbnail");

  /* --- Custom Post Type AKTUELLER HINWEIS --- */
  $labels = [
    "name" => "Hinweis",
    "add_new" => "Neuen Hinweis erstellen",
    "edit_item" => "Hinweis bearbeiten",
    "singular_name" => "Hinweis",
    "all_items" => "Alle Hinweise",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("notification", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "supports" => [
      "editor",
      "page-attributes",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "labels" => $labels,
    "has_archive" => false,
    "exclude_from_search" => true,
    "rewrite" => ["slug" => "hinweise"],
    "menu_position" => 12,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-bell",
  ]);
}

/* === NATUR MACHT SINN CUSTOM TAXONOMIES === */

function naturmachtsinn_taxonomies()
{
  /* --- Custom Taxonomie PROJEKT-KATEGORIE --- */
  $labels = [
    "name" => _x("Projekt-Kategorie", "taxonomy general name"),
    "singular_name" => _x("Projekt-Kategorie", "taxonomy singular name"),
    "search_items" => __("Projekt-Kategorien durchsuchen"),
    "popular_items" => __("Meist benutzte Projekt-Kategorien"),
    "all_items" => __("Alle Projekt-Kategorien"),
    "parent_item" => __("Übergeordnete Projekt-Kategorie"),
    "parent_item_colon" => __("Übergeordnete Projekt-Kategorien:"),
    "edit_item" => __("Projekt-Kategorie bearbeiten"),
    "update_item" => __("Projekt-Kategorie aktualisieren"),
    "add_new_item" => __("Neue Projekt-Kategorien hinzufügen"),
    "new_item_name" => __("Name der neuen Projekt-Kategorien"),
  ];

  register_taxonomy(
    "project-category",
    ["project"],
    [
      "hierarchical" => true,
      "labels" => $labels,
      "show_ui" => true,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "query_var" => true,
      "rewrite" => ["slug" => "projects"],
    ]
  );

  /* --- Custom Taxonomie FAQ-KATEGORIE --- */
  $labels = [
    "name" => _x("FAQ-Kategorie", "taxonomy general name"),
    "singular_name" => _x("FAQ-Kategorie", "taxonomy singular name"),
    "search_items" => __("FAQ-Kategorien durchsuchen"),
    "popular_items" => __("Meist benutzte FAQ-Kategorien"),
    "all_items" => __("Alle FAQ-Kategorien"),
    "parent_item" => __("Übergeordnete FAQ-Kategorie"),
    "parent_item_colon" => __("Übergeordnete FAQ-Kategorien:"),
    "edit_item" => __("FAQ-Kategorie bearbeiten"),
    "update_item" => __("FAQ-Kategorie aktualisieren"),
    "add_new_item" => __("Neue FAQ-Kategorien hinzufügen"),
    "new_item_name" => __("Name der neuen FAQ-Kategorien"),
  ];

  register_taxonomy(
    "faq-category",
    ["faq"],
    [
      "hierarchical" => true,
      "labels" => $labels,
      "show_ui" => true,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "query_var" => true,
      "rewrite" => ["slug" => "faqs"],
    ]
  );

  /* --- Custom Taxonomie TEAM-MEMBER-KATEGORIE --- */
  $labels = [
    "name" => _x("Team-Mitglieder-Kategorie", "taxonomy general name"),
    "singular_name" => _x(
      "Team-Mitglieder-Kategorie",
      "taxonomy singular name"
    ),
    "search_items" => __("Team-Mitglieder-Kategorien durchsuchen"),
    "popular_items" => __("Meist benutzte Team-Mitglieder-Kategorien"),
    "all_items" => __("Alle Team-Mitglieder-Kategorien"),
    "parent_item" => __("Übergeordnete Team-Mitglieder-Kategorie"),
    "parent_item_colon" => __("Übergeordnete Team-Mitglieder-Kategorien:"),
    "edit_item" => __("v-Kategorie bearbeiten"),
    "update_item" => __("Team-Mitglieder-Kategorie aktualisieren"),
    "add_new_item" => __("Neue Team-Mitglieder-Kategorien hinzufügen"),
    "new_item_name" => __("Name der neuen Team-Mitglieder-Kategorien"),
  ];

  register_taxonomy(
    "team-member-category",
    ["team-member"],
    [
      "hierarchical" => true,
      "labels" => $labels,
      "show_ui" => true,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "query_var" => true,
    ]
  );

  /* --- Custom Taxonomie PARTNER-KATEGORIE --- */
  $labels = [
    "name" => _x("Partner-Kategorien", "taxonomy general name"),
    "singular_name" => _x("Partner-Kategorie", "taxonomy singular name"),
    "search_items" => __("Partner-Kategorien durchsuchen"),
    "popular_items" => __("Meist benutzte Partner-Kategorien"),
    "all_items" => __("Alle Partner-Kategorien"),
    "parent_item" => __("Übergeordnete Partner-Kategorie"),
    "parent_item_colon" => __("Übergeordnete Partner-Kategorien:"),
    "edit_item" => __("Partner-Kategorie bearbeiten"),
    "update_item" => __("Partner-Kategorie aktualisieren"),
    "add_new_item" => __("Neue Partner-Kategorien hinzufügen"),
    "new_item_name" => __("Name der neuen Partner-Kategorie"),
  ];

  register_taxonomy(
    "partner-category",
    ["partner"],
    [
      "hierarchical" => true,
      "labels" => $labels,
      "show_ui" => true,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "query_var" => true,
    ]
  );
}

add_action("init", "naturmachtsinn_post_types");
add_action("init", "naturmachtsinn_taxonomies", 0);

?>
