<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once 'vendor/autoload.php';
}

if (!function_exists('se_paper_setup')) {
	function se_paper_setup()
	{
		//theme support

		//load languages
		load_theme_textdomain('se-paper', get_template_directory() . '/languages');
	}
}

add_action('after_setup_theme', 'se_paper_setup');

if (!function_exists('se_paper_enqueue_scripts')) {
	function se_paper_enqueue_scripts()
	{
		$theme_version = wp_get_theme()->get('Version');
		//style
		wp_enqueue_style('se-paper-style', get_template_directory_uri() . '/style.css', array(), $theme_version);
		wp_style_add_data('se-paper-style', 'rtl', 'replace');
		//scripts
		wp_enqueue_script('se-paper-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), $theme_version);
		wp_script_add_data('se-paper-script', 'async', true);
	}
}

add_action('wp_enqueue_scripts', 'se_paper_enqueue_scripts', 18);
