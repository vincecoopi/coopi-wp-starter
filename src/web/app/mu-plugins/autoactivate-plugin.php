<?php
/**
 * Plugin Name:  Remove useless script
 * Plugin URI:   https://www.lacooperativedesinternets.fr
 * Description:  Remove wordpress useless script
 * Version:      1.0.0
 * Author:       La Coopérative des Internets
 * Author URI:   https://www.lacooperativedesinternets.fr
 * License:      MIT License
 */

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
