<?php
// add_action('init','create_cpt_slide');
function create_cpt_slide()
{
    $post_type = "slide";
    $labels = array(
        'name'               => 'Slides',
        'singular_name'      => 'Slide',
        'all_items'          => 'Toutes les slides',
        'add_new'            => 'Ajouter une slide',
        'add_new_item'       => 'Ajouter une slide',
        'edit_item'          => "Modifier la slide",
        'new_item'           => 'Nouvelle slide',
        'view_item'          => "Voir la slide",
        'search_items'       => 'Trouver la slide',
        'not_found'          => 'No result',
        'not_found_in_trash' => 'No result',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Slides',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-slides',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
    $taxonomy = "slider";
    $object_type = array("slide");
    $args = array(
        'label' => __( 'Slider' ),
        'rewrite' => array( 'slug' => 'slider' ),
        'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}