<?php
/**
 * Plugin Name:  Theme
 * Plugin URI:   https://www.lacooperativedesinternets.fr
 * Description:  Set the default theme
 * Version:      1.0.0
 * Author:       La Coopérative des Internets
 * Author URI:   https://www.lacooperativedesinternets.fr
 * License:      MIT License
 */

add_action( 'setup_theme', 'set_coopi_theme' );

function set_coopi_theme() {
    switch_theme('coopi');
}