<?php
/* Plugin Name: RF Meta Setter */
add_action('init', function() {
    static $done = false;
    if ($done) return;
    $done = true;
    $p = 6069;
    update_post_meta($p, 'top_title', 'Kennisbank / AI Automatisering');
    update_post_meta($p, '_top_title', 'field_63fe032a1c01c');
    update_post_meta($p, 'intro', 'Ontdek hoe je met AI tools zoals Microsoft Copilot, ChatGPT en Google Sheets AI jouw Excel- en spreadsheetwerk automatiseert en uren per week bespaart.');
    update_post_meta($p, '_intro', 'field_6282421bc9a93');
    deactivate_plugins(plugin_basename(__FILE__));
});
