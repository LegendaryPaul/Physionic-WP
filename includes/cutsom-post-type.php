<?php
function physionic_custom_post(){
    $physionic_label = array(
        'name'          => __('Physionic Post', 'textdomain'),
        'singular_name' => __('Physionic Post','textdomain'),
        'add_new'       => __('Add Physionic Post', 'textdomain'),
        'add_new_item'  => __('Add New Physionic Post', 'textdomain'),
        'edit_item'     => __('Edit Physionic Post', 'textdomain'),
        'all_items'     => __('Physionic Post', 'textdomain')
    );
    $physionic_args = array(
        'labels'             => $physionic_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    
    register_post_type('physionicPost', $physionic_args);
}
add_action('init', 'physionic_custom_post');