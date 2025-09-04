<?php

namespace RoavioToolkit\PostType;

defined('ABSPATH') || exit;

class Portfolio
{

	protected static $instance = null;

	private $type = 'roavio_portfolio';
	private $slug;
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
		$this->name          = esc_html__('Portfolio', 'roavio-toolkit');
		$this->singular_name = esc_html__('Portfolio', 'roavio-toolkit');
		$this->plural_name   = esc_html__('Portfolio', 'roavio-toolkit');

		$opt        = get_option('roavio_options');
		$this->slug = ! empty($opt['portfolio_slug']) ? strtolower(str_replace(' ', '', $opt['portfolio_slug'])) : 'portfolio';

		add_action('init', [$this, 'register_post_type']);
		add_action('init', [$this, 'register_taxonomy_cat']);

		// Register templates
		add_filter('single_template', [$this, 'get_single_template']);
		// add_filter( 'archive_template', [ $this, 'get_archive_template' ] );
	}

	public function register_post_type()
	{
		$labels = [
			'name'                  => $this->name,
			'singular_name'         => $this->singular_name,
			'add_new'               => sprintf(esc_html__('Add New %s', 'roavio-toolkit'), $this->singular_name),
			'add_new_item'          => sprintf(esc_html__('Add New %s', 'roavio-toolkit'), $this->singular_name),
			'edit_item'             => sprintf(esc_html__('Edit %s', 'roavio-toolkit'), $this->singular_name),
			'new_item'              => sprintf(esc_html__('New %s', 'roavio-toolkit'), $this->singular_name),
			'all_items'             => sprintf(esc_html__('All %s', 'roavio-toolkit'), $this->plural_name),
			'view_item'             => sprintf(esc_html__('View %s', 'roavio-toolkit'), $this->name),
			'search_items'          => sprintf(esc_html__('Search %s', 'roavio-toolkit'), $this->name),
			'not_found'             => sprintf(esc_html__('No %s found', 'roavio-toolkit'), strtolower($this->name)),
			'not_found_in_trash'    => sprintf(esc_html__('No %s found in Trash', 'roavio-toolkit'), strtolower($this->name)),
			'parent_item_colon'     => '',
			'menu_name'             => $this->name,
			'featured_image'        => sprintf(esc_html__('%s Image ', 'roavio-toolkit'), $this->singular_name),
			'set_featured_image'    => sprintf(esc_html__('Set %s Image', 'roavio-toolkit'), $this->singular_name),
			'remove_featured_image' => esc_html__('Remove ', 'roavio-toolkit') . $this->singular_name . esc_html__(' Image', 'roavio-toolkit'),
			'use_featured_image'    => sprintf(esc_html__('Use as %s Image', 'roavio-toolkit'), $this->singular_name),
		];

		$args = [
			'labels'        => $labels,
			'public'        => true,
			'show_ui'       => true,
			'show_in_menu'  => true,
			'query_var'     => true,
			'rewrite'       => ['slug' => $this->slug],
			'has_archive'   => true,
			'show_in_rest'  => true,
			'menu_position' => 12,
			'supports'      => [
				'title',
				'editor',
				'excerpt',
				'author',
				'thumbnail',
				'elementor',
				'page-attributes',
			],
			'menu_icon'     => 'dashicons-images-alt2',
		];

		register_post_type($this->type, $args);
	}

	public function register_taxonomy_cat()
	{
		$category = 'category';

		$labels = [
			'name'              => sprintf(esc_html__('%s Categories', 'roavio-toolkit'), $this->name),
			'menu_name'         => sprintf(esc_html__('%s Categories', 'roavio-toolkit'), $this->name),
			'singular_name'     => sprintf(esc_html__('%s Category', 'roavio-toolkit'), $this->name),
			'search_items'      => sprintf(esc_html__('Search %s Categories', 'roavio-toolkit'), $this->name),
			'all_items'         => sprintf(esc_html__('All %s Categories', 'roavio-toolkit'), $this->name),
			'parent_item'       => sprintf(esc_html__('Parent %s Category', 'roavio-toolkit'), $this->name),
			'parent_item_colon' => sprintf(esc_html__('Parent %s Category:', 'roavio-toolkit'), $this->name),
			'new_item_name'     => sprintf(esc_html__('New %s Category Name', 'roavio-toolkit'), $this->name),
			'add_new_item'      => sprintf(esc_html__('Add New %s Category', 'roavio-toolkit'), $this->name),
			'edit_item'         => sprintf(esc_html__('Edit %s Category', 'roavio-toolkit'), $this->name),
			'update_item'       => sprintf(esc_html__('Update %s Category', 'roavio-toolkit'), $this->name),
		];

		$args = [
			'labels'            => $labels,
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rewrite'           => ['slug' => $this->slug . '-' . $category],
			'show_in_nav_menus' => false,
		];

		register_taxonomy($this->type . '_' . $category, [$this->type], $args);
	}

	public function get_single_template($single_template)
	{
		global $post;

		if ($post->post_type == $this->type) {

			if (file_exists(get_stylesheet_directory() . '/single-roavio_portfolio.php')) {
				return $single_template;
			}

			if (file_exists(get_template_directory() . '/single-roavio_portfolio.php')) {
				return $single_template;
			}

			$single_template = RT_INCLUDES . '/post-type/templates/single-portfolio.php';
		}


		return $single_template;
	}

	public function get_archive_template($archive_template)
	{
		global $post;

		if (is_post_type_archive($this->type) || (is_archive() && ! empty($post->post_type) && $post->post_type == $this->type)) {
			if (file_exists(get_template_directory() . '/archive-roavio_portfolio.php')) {
				return $archive_template;
			}

			if (file_exists(get_template_directory() . '/archive-roavio_portfolio.php')) {
				return $archive_template;
			}

			$archive_template = RT_INCLUDES . '/post-type/templates/archive-portfolio.php';
		}

		return $archive_template;
	}
}

Portfolio::instance();
