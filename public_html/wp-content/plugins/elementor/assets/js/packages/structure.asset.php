<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This file is generated by Webpack, do not edit it directly.
 */

return [
	'handle' => 'elementor-packages-structure',
	'src' => plugins_url( '/', __FILE__ ) . 'structure{{MIN_SUFFIX}}.js',
	'i18n' => [
		'domain' => 'elementor',
		'replace_requested_file' => true,
	],
	'type' => 'extension',
	'deps' => [
		'elementor-packages-icons',
		'elementor-packages-top-bar',
		'elementor-packages-v1-adapters',
		'wp-i18n',
	],
];
