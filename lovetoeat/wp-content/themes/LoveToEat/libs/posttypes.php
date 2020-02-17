<?php

add_action('init', 'lovetoeat_init_posttypes');

function lovetoeat_init_posttypes(){
    /* Rejestrujemy przepisy */

    $recipies_args = array(
        'labels' => array(
            'name' => 'Przepisy',
            'singular_name' => 'Przepisy',
            'all_items' => 'Wszystkie przepisy',
            'add_new' => 'Dodaj nowy przepis',
            'add_new_item' => 'Dodaj nowy przepis',
            'edit_item' => 'Edytuj przepis',
            'new_item' => 'Dodaj nowy przepis',
            'view_item' => 'Zobacz przepis',
            'search_items' => 'Szukaj w przepisach',
            'not_found' => 'Nie znaleziono przepisów',
            'not_found_in_trash' => 'Brak przepisów w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
        ),
        'has_archive' => true
    );
    register_post_type('recipes', $recipies_args);
}

?>