<?php

namespace RoavioToolkit\TemplateBuilder;

defined('ABSPATH') || exit;

class Template_Post_Type
{

	protected static $instance = null;

	private $type = 'roavio_template';
	private $slug = 'roavio_template';
	private $name;
	private $singular_name;
	private $plural_name;

	public static function instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct()
	{
		$this->name          = __('Template Builder', 'roavio-toolkit');
		$this->singular_name = __('Template', 'roavio-toolkit');
		$this->plural_name   = __('Templates', 'roavio-toolkit');

		add_action('init', [$this, 'register_post_type']);
		add_filter('single_template', [$this, 'custom_templates']);
	}

	public function register_post_type()
	{
		$labels = [
			'name'               => $this->name,
			'singular_name'      => $this->singular_name,
			'add_new'            => sprintf(esc_html__('Add New %s', 'roavio-toolkit'), $this->singular_name),
			'add_new_item'       => sprintf(esc_html__('Add New %s', 'roavio-toolkit'), $this->singular_name),
			'edit_item'          => sprintf(esc_html__('Edit %s', 'roavio-toolkit'), $this->singular_name),
			'new_item'           => sprintf(esc_html__('New %s', 'roavio-toolkit'), $this->singular_name),
			'all_items'          => sprintf(esc_html__('All %s', 'roavio-toolkit'), $this->plural_name),
			'view_item'          => sprintf(esc_html__('View %s', 'roavio-toolkit'), $this->name),
			'search_items'       => sprintf(esc_html__('Search %s', 'roavio-toolkit'), $this->name),
			'not_found'          => sprintf(esc_html__('No %s found', 'roavio-toolkit'), strtolower($this->name)),
			'not_found_in_trash' => sprintf(esc_html__('No %s found in Trash', 'roavio-toolkit'), strtolower($this->name)),
			'parent_item_colon'  => '',
			'menu_name'          => $this->name,
		];

		$args = [
			'labels'              => $labels,
			'has_archive'         => false,
			'show_ui'             => true,
			'show_in_menu'        => false,
			'show_in_admin_bar'   => false,
			'public'              => true,
			'show_in_nav_menu'    => true,
			'rewrite'             => ['slug' => $this->slug],
			'show_in_rest'        => false,
			'exclude_from_search' => true,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'menu_icon'           => 'dashicons-layout',
			'supports'            => ['title', 'author', 'elementor'],
		];

		register_post_type($this->type, $args);

		// Location Taxonomy
		$location_labels = array(
			'name'              => _x('Booking Locations', 'taxonomy general name', 'roavio-toolkit'),
			'singular_name'     => _x('Booking Location', 'taxonomy singular name', 'roavio-toolkit'),
			'search_items'      => __('Search Booking Locations', 'roavio-toolkit'),
			'all_items'         => __('All Booking Locations', 'roavio-toolkit'),
			'parent_item'       => __('Parent Location', 'roavio-toolkit'),
			'parent_item_colon' => __('Parent Location:', 'roavio-toolkit'),
			'edit_item'         => __('Edit Location', 'roavio-toolkit'),
			'update_item'       => __('Update Booking Location', 'roavio-toolkit'),
			'add_new_item'      => __('Add New Booking Location', 'roavio-toolkit'),
			'new_item_name'     => __('New Booking Location Name', 'roavio-toolkit'),
			'menu_name'         => __('Booking Locations', 'roavio-toolkit'),
		);

		$location_args = array(
			'hierarchical'      => true, // Set to true for categories, false for tags
			'labels'            => $location_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array('slug' => 'ba_location'),
		);

		register_taxonomy('ba_location', array('to_book'), $location_args);

		// Type Taxonomy
		$type_labels = array(
			'name'              => _x('Booking Types', 'taxonomy general name', 'roavio-toolkit'),
			'singular_name'     => _x('Booking Type', 'taxonomy singular name', 'roavio-toolkit'),
			'search_items'      => __('Search Booking Types', 'roavio-toolkit'),
			'all_items'         => __('All Booking Types', 'roavio-toolkit'),
			'parent_item'       => __('Parent Booking Type', 'roavio-toolkit'),
			'parent_item_colon' => __('Parent Booking Type:', 'roavio-toolkit'),
			'edit_item'         => __('Edit Booking Type', 'roavio-toolkit'),
			'update_item'       => __('Update Booking Type', 'roavio-toolkit'),
			'add_new_item'      => __('Add New Booking Type', 'roavio-toolkit'),
			'new_item_name'     => __('New Booking Type Name', 'roavio-toolkit'),
			'menu_name'         => __('Booking Types', 'roavio-toolkit'),
		);

		$type_args = array(
			'hierarchical'      => true, // Set to true for categories, false for tags
			'labels'            => $type_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array('slug' => 'ba_type'),
		);

		register_taxonomy('ba_type', array('to_book'), $type_args);
	}

	public function custom_templates($single_template)
	{
		global $post;

		if ($post->post_type == $this->type) {
			$meta = get_post_meta($post->ID, 'roavio_tb_settings', true);

			if (isset($meta['template_type'])) {
				$template_type = $meta['template_type'];
			} else {
				$template_type = '';
			}

			if ('popup' === $template_type) {
				$single_template = RT_INCLUDES . '/template-builder/templates/popup.php';
			} elseif ('offcanvas' === $template_type) {
				$single_template = RT_INCLUDES . '/template-builder/templates/offcanvas.php';
			} else {
				$single_template = RT_INCLUDES . '/template-builder/templates/canvas.php';
			}
		}

		return $single_template;
	}
}

Template_Post_Type::instance();
