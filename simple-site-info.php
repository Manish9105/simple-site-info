<?php
/**
 * Plugin Name: Simple Site Info
 * Description: Displays site name and description using a shortcode.
 * Version: 1.0
 * Author: Manish Kumar
 */

function ssi_display_site_info() {
    $site_name = get_bloginfo('name');
    $site_desc = get_bloginfo('description');

    return '<div style="padding:10px; background:#f5f5f5; border-left:4px solid #0073aa;">
                <strong>' . esc_html($site_name) . '</strong><br>
                ' . esc_html($site_desc) . '
            </div>';
}

add_shortcode('site_info', 'ssi_display_site_info');
