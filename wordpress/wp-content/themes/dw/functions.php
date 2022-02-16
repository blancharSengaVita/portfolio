<?php
// désactiver l'editeur guthenberg de wordpress
add_filter('use_block_editor_for_post', '__return_false');
// aciver les images pour les pos (articles, voyages, ...)
add_theme_support('post-thumbnails');
// enregistrer un type de ressource (custom post type) pour les voyage
register_post_type('projects', [
    'label' => 'voyages',
    'labels' => [
        'name' => 'voyages',
        'singular_name' => 'voyages'
    ],
    'description' => 'la resource bla bal',
    'public' => true,
    'menu_position'=> 5,
    'menu_icon' => 'dashicons-palmtree'
]);