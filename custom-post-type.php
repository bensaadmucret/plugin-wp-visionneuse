<?php
// Register Custom Post Type
function custom_post_type()
{

    $labels = array(
        'name'                  => _x('Visionneuse', 'Post Type General Name', 'tx-consulting'),
        'singular_name'         => _x('Visionneuse', 'Post Type Singular Name', 'tx-consulting'),
        'menu_name'             => __('Visionneuse', 'tx-consulting'),
        'name_admin_bar'        => __('Visionneuse', 'tx-consulting'),
        'archives'              => __('Visionneuse Archives', 'tx-consulting'),
        'attributes'            => __('Visionneuse Attributes', 'tx-consulting'),
        'parent_item_colon'     => __('Parent Item:', 'tx-consulting'),
        'all_items'             => __('Toutes les visionneuses', 'tx-consulting'),
        'add_new_item'          => __('Ajoutée', 'tx-consulting'),
        'add_new'               => __('nouvelle visionneuse pdf', 'tx-consulting'),
        'new_item'              => __('visionneuse', 'tx-consulting'),
        'edit_item'             => __('Edition visionneuse', 'tx-consulting'),
        'update_item'           => __('Update visionneuse', 'tx-consulting'),
        'view_item'             => __('Voir', 'tx-consulting'),
        'view_items'            => __('Voir la visionneuse pdf', 'tx-consulting'),
        'search_items'          => __('Recherche', 'tx-consulting'),
        'not_found'             => __('Not found', 'tx-consulting'),
        'not_found_in_trash'    => __('Not found in Trash', 'tx-consulting'),
        'featured_image'        => __('Featured Image', 'tx-consulting'),
        'set_featured_image'    => __('Set featured image', 'tx-consulting'),
        'remove_featured_image' => __('Remove featured image', 'tx-consulting'),
        'use_featured_image'    => __('Use as featured image', 'tx-consulting'),
        'insert_into_item'      => __('Insert into item', 'tx-consulting'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'tx-consulting'),
        'items_list'            => __('Items list', 'tx-consulting'),
        'items_list_navigation' => __('Items list navigation', 'tx-consulting'),
        'filter_items_list'     => __('Filter items list', 'tx-consulting'),
    );
    $args = array(
        'label'                 => __('Visionneuse', 'tx-consulting'),
        'description'           => __('visionneuse', 'tx-consulting'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('tx_pop_up', $args);
}
add_action('init', 'custom_post_type', 0);