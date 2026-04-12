<?php
/**
 * Plugin Name: MU-Plugin Master Loader
 * Description: Automatically loads MU-plugins installed into subdirectories by Composer.
 */

foreach (glob(__DIR__ . '/*/*.php') as $plugin) {
    if (basename($plugin) !== '00-load.php' && basename($plugin) !== 'index.php') {
        require_once $plugin;
    }
}
