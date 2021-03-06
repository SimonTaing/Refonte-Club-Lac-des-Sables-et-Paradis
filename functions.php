<?php

// on vérifie si acf pro est installé
if ( function_exists('acf_add_options_page') ) {
// on ajoute une page d'option
    acf_add_options_page(array(
        'page_title' => 'Options générales de mon thème',
        'menu_title' => 'Options du thème',
        'menu_slug' => 'cw4-theme-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
// on ajoute une sous-page à la page précédente via le paramètre parent_slug
    acf_add_options_sub_page(array(
        'page_title' => 'Options du pied de page',
        'menu_title' => 'Pied de page',
        'parent_slug' => 'cw4-theme-options',
    ));
}


add_theme_support("post_thumbnails");
set_post_thumbnail_size(800,480);
add_image_size("vignette",220,100,true);

function new_excerpt_length($length){
    return 20;
}

add_filter("excerpt_length","new_excerpt_length");

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// Register Custom Post Type
    function pW_commanditaire()
    {

        $labels = array(
            'name' => _x('commanditaires', 'Post Type General Name', 'text_domain'),
            'singular_name' => _x('commanditaire', 'Post Type Singular Name', 'text_domain'),
            'menu_name' => __('commanditaire', 'text_domain'),
            'name_admin_bar' => __('commanditaire', 'text_domain'),
            'archives' => __('Item Archives', 'text_domain'),
            'attributes' => __('Item Attributes', 'text_domain'),
            'parent_item_colon' => __('Parent Item:', 'text_domain'),
            'all_items' => __('All Items', 'text_domain'),
            'add_new_item' => __('Add New Item', 'text_domain'),
            'add_new' => __('Add New', 'text_domain'),
            'new_item' => __('New Item', 'text_domain'),
            'edit_item' => __('Edit Item', 'text_domain'),
            'update_item' => __('Update Item', 'text_domain'),
            'view_item' => __('View Item', 'text_domain'),
            'view_items' => __('View Items', 'text_domain'),
            'search_items' => __('Search Item', 'text_domain'),
            'not_found' => __('Not found', 'text_domain'),
            'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
            'featured_image' => __('Featured Image', 'text_domain'),
            'set_featured_image' => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image' => __('Use as featured image', 'text_domain'),
            'insert_into_item' => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list' => __('Items list', 'text_domain'),
            'items_list_navigation' => __('Items list navigation', 'text_domain'),
            'filter_items_list' => __('Filter items list', 'text_domain'),
        );
        $args = array(
            'label' => __('commanditaire', 'text_domain'),
            'description' => __('Post Type Description', 'text_domain'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('pW_commanditaire', $args);

    }

    add_action('init', 'pW_commanditaire', 0);

// Register Custom Post Type
    function pW_chalet()
    {

        $labels = array(
            'name' => _x('pW_chalets', 'Post Type General Name', 'text_domain'),
            'singular_name' => _x('pW_chalet', 'Post Type Singular Name', 'text_domain'),
            'menu_name' => __('chalet', 'text_domain'),
            'name_admin_bar' => __('chalet', 'text_domain'),
            'archives' => __('Item Archives', 'text_domain'),
            'attributes' => __('Item Attributes', 'text_domain'),
            'parent_item_colon' => __('Parent Item:', 'text_domain'),
            'all_items' => __('All Items', 'text_domain'),
            'add_new_item' => __('Add New Item', 'text_domain'),
            'add_new' => __('Add New', 'text_domain'),
            'new_item' => __('New Item', 'text_domain'),
            'edit_item' => __('Edit Item', 'text_domain'),
            'update_item' => __('Update Item', 'text_domain'),
            'view_item' => __('View Item', 'text_domain'),
            'view_items' => __('View Items', 'text_domain'),
            'search_items' => __('Search Item', 'text_domain'),
            'not_found' => __('Not found', 'text_domain'),
            'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
            'featured_image' => __('Featured Image', 'text_domain'),
            'set_featured_image' => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image' => __('Use as featured image', 'text_domain'),
            'insert_into_item' => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list' => __('Items list', 'text_domain'),
            'items_list_navigation' => __('Items list navigation', 'text_domain'),
            'filter_items_list' => __('Filter items list', 'text_domain'),
        );
        $args = array(
            'label' => __('pW_chalet', 'text_domain'),
            'description' => __('Post Type Description', 'text_domain'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('pW_chalet', $args);

    }
    add_action('init', 'pW_chalet', 0);

    function my_login_logo_one(){
        ?>
            <style type="text/css">
                body.login div#login h1 a {
                    width: 139px;
                    height: 86px;
                    background: url("https://staing.dectim.ca/cours/production-web/projet1/wp-content/themes/club-lac-des-sables-php/images/logo.png") no-repeat;
                    padding-bottom: 30px;
                }
            </style>
        <?php
    }
    add_action('login_enqueue_scripts', 'my_login_logo_one');