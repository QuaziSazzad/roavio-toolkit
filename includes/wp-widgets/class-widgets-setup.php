<?php

namespace RoavioToolkit\WpWidgets;

defined('ABSPATH') || exit;

class Roavio_Widgets_Setup
{

	protected static $instance = null;

	public static function instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct()
	{
		$this->load_widgets_files();
		add_action('widgets_init', [$this, 'register_widgets']);
	}

	public function load_widgets_files()
	{
		include_once RT_WP_WIDGETS . '/class-recent-posts.php';
		include_once RT_WP_WIDGETS . '/class-category.php';
		include_once RT_WP_WIDGETS . '/class-call-to-action.php';
	}

	public function register_widgets()
	{
		register_widget(__NAMESPACE__ . '\Roavio_Recent_Posts');
		register_widget(__NAMESPACE__ . '\Roavio_Categories');
		register_widget(__NAMESPACE__ . '\Roavio_CTA');
		//		register_widget( 'Roavio_Recent_Posts' );
	}
}

Roavio_Widgets_Setup::instance();
