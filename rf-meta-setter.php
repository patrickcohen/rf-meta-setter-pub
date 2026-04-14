<?php
/**
 * Plugin Name: RF Meta Setter
 * Version: 1.1
 */
add_action('init', function() {
    global $wpdb;
    // Remove self from active_plugins
    $active = get_option('active_plugins', []);
    $self = 'rf-meta-setter-pub-main/rf-meta-setter.php';
    $active = array_filter($active, fn($p) => $p !== $self);
    $wpdb->update($wpdb->options, ['option_value' => serialize(array_values($active))], ['option_name' => 'active_plugins']);
    wp_cache_delete('active_plugins', 'options');
});
