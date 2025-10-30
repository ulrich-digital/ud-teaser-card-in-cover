<?php
/**
 * Plugin Name:     UD Block: Teaser-Card in Cover
 * Description:     Block zum Darstellen einer Teaser-Card mit Titel und Mehr-Link für Beiträge oder Projekte innerhalb eines Cover-Blocks.
 * Version:         1.1.0
 * Author:          ulrich.digital gmbh
 * Author URI:      https://ulrich.digital/
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     ud-teaser-card-in-cover
 */

defined('ABSPATH') || exit;

// Konstanten
if (!defined('UD_TCC_PLUGIN_DIR')) {
    define('UD_TCC_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Includes
require_once UD_TCC_PLUGIN_DIR . 'includes/helpers.php';
require_once UD_TCC_PLUGIN_DIR . 'includes/block-register.php';
require_once UD_TCC_PLUGIN_DIR . 'includes/enqueue.php';
require_once UD_TCC_PLUGIN_DIR . 'includes/render.php';


