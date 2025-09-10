<?php

function ubc_custom_post_types(){
     $eventArgs = array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
                    'name' => 'Events',
                    'singular_name' => 'Event',
                    'add_new_item' => 'Add New Event',
                    'edit_item' => 'Edit Event',
                    'view_item' => 'View Event',
                    'all_items' => 'All Events'
                ),
        'menu_icon' => 'dashicons-calendar-alt',
        'rewrite'=> array(
                     'slug'=> 'events'
                 ),
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt' )
    );
   

   
   register_post_type('event', $eventArgs);
    
}

add_action('init', 'ubc_custom_post_types');

//parent page meta box for event CPT
function ubc_add_parent_page_meta_box() {
    add_meta_box(
        'event_parent_page',
        'Select Parent Page',
        'ubc_render_parent_page_meta_box',
        'event', // applies only to our CPT "event"
        'side',  // location (side panel)
        'default'
    );
}
add_action('add_meta_boxes', 'ubc_add_parent_page_meta_box');

function ubc_render_parent_page_meta_box($post) {
    // Get saved value
    $selected = get_post_meta($post->ID, '_event_parent_page', true);

    // Security nonce
    wp_nonce_field('ubc_save_parent_page_meta', 'ubc_parent_page_nonce');

    // Dropdown with pages
    wp_dropdown_pages(array(
        'name'              => 'event_parent_page',
        'show_option_none'  => '— No Parent Page —',
        'option_none_value' => '',
        'selected'          => $selected
    ));
}


function ubc_save_parent_page_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['ubc_parent_page_nonce']) || 
        !wp_verify_nonce($_POST['ubc_parent_page_nonce'], 'ubc_save_parent_page_meta')) {
        return;
    }

    // Prevent auto-save issues
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (isset($_POST['post_type']) && 'event' === $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save the selected page
    if (isset($_POST['event_parent_page'])) {
        update_post_meta($post_id, '_event_parent_page', intval($_POST['event_parent_page']));
    }
}
add_action('save_post', 'ubc_save_parent_page_meta');

