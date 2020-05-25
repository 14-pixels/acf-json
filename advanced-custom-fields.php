<?php
/**
 * Advanced Custom Fields drop-in functionality
 * Version: 1.0
 * Author: Joscha Probst
 */

// Hide ACF menu item in Production
if (defined('WP_ENV') && WP_ENV == 'production') {
    add_filter('acf/settings/show_admin', '__return_false');
}
