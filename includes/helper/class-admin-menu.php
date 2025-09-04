<?php

namespace RoavioToolkit\Helper;

defined('ABSPATH') || exit;

class Roavio_Admin_Menu
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
		add_action('admin_bar_menu', [$this, 'add_admin_bar_menu'], 99);
	}

	public function add_admin_bar_menu($admin_bar)
	{
		$admin_bar->add_menu([
			'id'    => 'roavio-menu-item',
			'title' => __('Roavio', 'roavio-toolkit'),
			'href'  => get_site_url(null, 'wp-admin/admin.php?page=roavio_dashboard'),
			'meta'  => [
				'title'  => __('Roavio', 'roavio-toolkit'),
				'target' => '_self',
			],
		]);

		$admin_bar->add_menu([
			'parent' => 'roavio-menu-item',
			'id'     => 'roavio-welcome',
			'title'  => __('Welcome', 'roavio-toolkit'),
			'href'   => get_site_url(null, 'wp-admin/admin.php?page=roavio_dashboard'),
			'meta'   => [
				'title'  => __('Welcome', 'roavio-toolkit'),
				'target' => '_self',
			],
		]);

		$admin_bar->add_menu([
			'parent' => 'roavio-menu-item',
			'id'     => 'roavio-theme-option',
			'title'  => __('Theme Options', 'roavio-toolkit'),
			'href'   => get_site_url(null, 'wp-admin/admin.php?page=roavio_options'),
			'meta'   => [
				'title'  => __('Theme Options', 'roavio-toolkit'),
				'target' => '_self',
			],
		]);

		$admin_bar->add_menu([
			'parent' => 'roavio-menu-item',
			'id'     => 'roavio-help-center',
			'title'  => __('Help Center', 'roavio-toolkit'),
			'href'   => get_site_url(null, 'wp-admin/admin.php?page=roavio_help_center'),
			'meta'   => [
				'title'  => __('Help Center', 'roavio-toolkit'),
				'target' => '_self',
			],
		]);
	}
}

Roavio_Admin_Menu::instance();
