<?php
defined('ABSPATH') || exit;

/**
 * Registriert den Block `ud/wellen-grafik` über block.json.
 */
add_action('init', function () {
	register_block_type(__DIR__ . '/../');
});
