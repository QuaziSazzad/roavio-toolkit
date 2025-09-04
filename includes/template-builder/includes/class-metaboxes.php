<?php

namespace RoavioToolkit\TemplateBuilder;

use CSF;

defined('ABSPATH') || exit;

class Template_Metaboxes
{

	protected static $instance = null;

	private $prefix = 'roavio_template_meta';

	public static function instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct()
	{
		if (! class_exists('CSF')) {
			return;
		}

		$this->init_metaboxes();

		add_filter('wp_nav_menu_item_custom_fields', [$this, 'mega_menu_meta_fields'], 10, 2);
		add_action('wp_update_nav_menu_item', [$this, 'save_mega_menu_meta'], 10, 3);
	}

	public function init_metaboxes()
	{
		CSF::createMetabox($this->prefix, [
			'title'        => esc_html__('Template Settings', 'roavio-toolkit'),
			'post_type'    => 'roavio_template',
			'show_restore' => true,
			'theme'        => 'dark',
			'data_type'    => 'unserialize',
		]);

		CSF::createSection($this->prefix, [
			'fields' => [
				[
					'id'     => 'roavio_tb_settings',
					'type'   => 'fieldset',
					'title'  => esc_html__('Common Settings', 'roavio-toolkit'),
					'fields' => [
						[
							'id'          => 'template_type',
							'type'        => 'select',
							'title'       => esc_html__('Template Type', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Type', 'roavio-toolkit'),
							'options'     => [
								'header'    => esc_html__('Header', 'roavio-toolkit'),
								'footer'    => esc_html__('Footer', 'roavio-toolkit'),
								'mega_menu' => esc_html__('Mega Menu', 'roavio-toolkit'),
								'block'     => esc_html__('Block', 'roavio-toolkit'),
								'popup'     => esc_html__('Popup', 'roavio-toolkit'),
								'offcanvas' => esc_html__('OffCanvas', 'roavio-toolkit'),
							],
							'default'     => 'block',
						],
						[
							'id'         => 'mega_menu_width',
							'type'       => 'select',
							'title'      => esc_html__('Mega Menu Width', 'roavio-toolkit'),
							'subtitle'   => esc_html__('Default is full width.', 'roavio-toolkit'),
							'options'    => [
								'full'       => esc_html__('Full', 'roavio-toolkit'),
								'container'  => esc_html__('Container', 'roavio-toolkit'),
								'menu-area' => esc_html__('Menu Area', 'roavio-toolkit'),
								'custom'     => esc_html__('Custom', 'roavio-toolkit'),
							],
							'default'    => 'full',
							'dependency' => ['template_type', '==', 'mega_menu'],
						],
						[
							'id'         => 'set_mega_menu_width',
							'type'       => 'dimensions',
							'title'      => esc_html__('Menu Custom Width', 'roavio-toolkit'),
							'default'    => [
								'width' => '1650',
							],
							'height'     => false,
							'units'      => ['px'],
							'show_units' => false,
							'dependency' => ['template_type|mega_menu_width', '==|==', 'mega_menu|custom'],
						],
						[
							'id'         => 'popup_width',
							'type'       => 'select',
							'title'      => esc_html__('Popup Width', 'roavio-toolkit'),
							'subtitle'   => esc_html__('Select or type a value (PX)', 'roavio-toolkit'),
							'options'    => [
								'full'   => esc_html__('Full', 'roavio-toolkit'),
								'custom' => esc_html__('Custom', 'roavio-toolkit'),
							],
							'default'    => 'custom',
							'dependency' => ['template_type', '==', 'popup'],
						],
						[
							'id'         => 'set_popup_width',
							'type'       => 'dimensions',
							'title'      => esc_html__('Popup Width', 'roavio-toolkit'),
							'default'    => [
								'width' => '820',
							],
							'height'     => false,
							'units'      => ['px'],
							'show_units' => false,
							'dependency' => ['template_type|popup_width', '==|==', 'popup|custom'],
						],
						[
							'id'         => 'popup_height',
							'type'       => 'select',
							'title'      => esc_html__('Popup Height', 'roavio-toolkit'),
							'subtitle'   => esc_html__('Set the popup max height.', 'roavio-toolkit'),
							'options'    => [
								'fit_content' => esc_html__('Fit Content', 'roavio-toolkit'),
								'full'        => esc_html__('Full', 'roavio-toolkit'),
								'custom'      => esc_html__('Custom', 'roavio-toolkit'),
							],
							'default'    => 'fit_content',
							'dependency' => ['template_type', '==', 'popup'],
						],
						[
							'id'         => 'set_popup_height',
							'type'       => 'dimensions',
							'title'      => esc_html__('Height', 'roavio-toolkit'),
							'default'    => [
								'height' => '520',
							],
							'width'      => false,
							'units'      => ['px'],
							'show_units' => false,
							'dependency' => ['template_type|popup_height', '==|==', 'popup|custom'],
						],
						[
							'id'         => 'popup_position',
							'type'       => 'select',
							'title'      => esc_html__('Popup Position', 'roavio-toolkit'),
							'subtitle'   => esc_html__('Choose the popup position on page.', 'roavio-toolkit'),
							'options'    => [
								'center-center' => esc_html__('Center Center', 'roavio-toolkit'),
								'center-left'   => esc_html__('Center Left', 'roavio-toolkit'),
								'center-right'  => esc_html__('Center Right', 'roavio-toolkit'),
								'bottom-center' => esc_html__('Bottom Center', 'roavio-toolkit'),
								'top-center'    => esc_html__('Top Center', 'roavio-toolkit'),
								'bottom-left'   => esc_html__('Bottom Left', 'roavio-toolkit'),
								'top-left'      => esc_html__('Top Left', 'roavio-toolkit'),
								'bottom-right'  => esc_html__('Bottom Right', 'roavio-toolkit'),
								'top-right'     => esc_html__('Top Right', 'roavio-toolkit'),
							],
							'default'    => 'center-center',
							'dependency' => ['template_type', '==', 'popup'],
						],
						[
							'id'         => 'popup_bg_color',
							'type'       => 'color',
							'title'      => esc_html__('Popup Background Color', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'default'    => '',
						],
						[
							'id'         => 'popup_overly_color',
							'type'       => 'color',
							'title'      => esc_html__('Popup Overly Color', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'default'    => '',
						],
						[
							'id'         => 'popup_close_color',
							'type'       => 'color',
							'title'      => esc_html__('Popup Close Color', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'default'    => '',
						],
						[
							'id'         => 'popup_close_bg',
							'type'       => 'color',
							'title'      => esc_html__('Popup Close Color', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'default'    => '',
						],
						[
							'id'         => 'popup_close_size',
							'type'       => 'dimensions',
							'title'      => esc_html__('Popup Close Size', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'units'      => ['px'],
							'show_units' => false,
						],
						[
							'id'         => 'popup_close_radius',
							'type'       => 'number',
							'title'      => esc_html__('Popup Close Radius', 'roavio-toolkit'),
							'default'    => 0,
							'dependency' => ['template_type', '==', 'popup'],
						],
						[
							'id'         => 'popup_delay',
							'type'       => 'number',
							'title'      => esc_html__('Popup Delay', 'roavio-toolkit'),
							'dependency' => ['template_type', '==', 'popup'],
							'default'    => 3,
							'subtitle'   => esc_html__('Show when page is loaded (Second).', 'roavio-toolkit'),
						],
						[
							'id'         => 'offcanvas_width',
							'type'       => 'dimensions',
							'title'      => esc_html__('Width', 'roavio-toolkit'),
							'height'     => false,
							'units'      => ['px'],
							'default'    => [
								'width' => '420',
							],
							'show_units' => false,
							'dependency' => ['template_type', '==', 'offcanvas'],
						],
					],
				],
				[
					'id'           => 'roavio_tb_include',
					'type'         => 'repeater',
					'title'        => esc_html__('Display On', 'roavio-toolkit'),
					'subtitle'     => esc_html__('Select the locations where this item should be visible.', 'roavio-toolkit'),
					'button_title' => esc_html__('Add Display Rule', 'roavio-toolkit'),
					'dependency'   => ['template_type', 'any', 'header,footer,popup'],
					'fields'       => [
						[
							'type'    => 'subheading',
							'content' => esc_html__('Define Rule', 'roavio-toolkit'),
						],
						[
							'id'      => 'rule',
							'type'    => 'select',
							'title'   => esc_html__('Display on', 'roavio-toolkit'),
							'options' => [
								'entire_website'     => esc_html__('Entire Website', 'roavio-toolkit'),
								'all_pages'          => esc_html__('All Pages', 'roavio-toolkit'),
								'front_page'         => esc_html__('Front Page', 'roavio-toolkit'),
								'post_page'          => esc_html__('Post Page', 'roavio-toolkit'),
								'post_details'       => esc_html__('Post Details', 'roavio-toolkit'),
								'all_archive'        => esc_html__('All Archive', 'roavio-toolkit'),
								'date_archive'       => esc_html__('Date Archive', 'roavio-toolkit'),
								'author_archive'     => esc_html__('Author Archive', 'roavio-toolkit'),
								'search_page'        => esc_html__('Search Page', 'roavio-toolkit'),
								'404_page'           => esc_html__('404 Page', 'roavio-toolkit'),
								'specific_pages'     => esc_html__('Specific Pages', 'roavio-toolkit'),
								'specific_posts'     => esc_html__('Specific Posts', 'roavio-toolkit'),
								'shop_page'          => esc_html__('Shop Page', 'roavio-toolkit'),
								'product_details'    => esc_html__('Product Details', 'roavio-toolkit'),
								'specific_products'  => esc_html__('Specific Products', 'roavio-toolkit'),
								'portfolio_details'  => esc_html__('Portfolio Details', 'roavio-toolkit'),
								'specific_portfolio' => esc_html__('Specific Portfolio', 'roavio-toolkit'),
							],
						],
						[
							'id'          => 'page_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Pages', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Pages', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'pages',
							'dependency'  => ['rule', '==', 'specific_pages'],
						],
						[
							'id'          => 'posts_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Posts', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Posts', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'posts',
							'dependency'  => ['rule', '==', 'specific_posts'],
						],
						[
							'id'          => 'product_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Products', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Products', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'post',
							'query_args'  => [
								'post_type' => 'product',
							],
							'dependency'  => ['rule', '==', 'specific_products'],
						],
						[
							'id'          => 'portfolio_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Portfolio', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'post',
							'query_args'  => [
								'post_type' => 'roavio_portfolio',
							],
							'dependency'  => ['rule', '==', 'specific_portfolio'],
						],
					],
				],
				[
					'id'           => 'roavio_tb_exclude',
					'type'         => 'repeater',
					'title'        => esc_html__('Hide On', 'roavio-toolkit'),
					'subtitle'     => esc_html__('Select the locations where this item should be visible.', 'roavio-toolkit'),
					'button_title' => esc_html__('Add Hide Rule', 'roavio-toolkit'),
					'dependency'   => ['template_type', 'any', 'header,footer,popup'],
					'fields'       => [
						[
							'type'    => 'subheading',
							'content' => esc_html__('Hide Rule', 'roavio-toolkit'),
						],
						[
							'id'      => 'rule',
							'type'    => 'select',
							'title'   => esc_html__('Hide on', 'roavio-toolkit'),
							'options' => [
								'entire_website'     => esc_html__('Entire Website', 'roavio-toolkit'),
								'all_pages'          => esc_html__('All Pages', 'roavio-toolkit'),
								'front_page'         => esc_html__('Front Page', 'roavio-toolkit'),
								'post_page'          => esc_html__('Post Page', 'roavio-toolkit'),
								'post_details'       => esc_html__('Post Details', 'roavio-toolkit'),
								'all_archive'        => esc_html__('All Archive', 'roavio-toolkit'),
								'date_archive'       => esc_html__('Date Archive', 'roavio-toolkit'),
								'author_archive'     => esc_html__('Author Archive', 'roavio-toolkit'),
								'search_page'        => esc_html__('Search Page', 'roavio-toolkit'),
								'404_page'           => esc_html__('404 Page', 'roavio-toolkit'),
								'specific_pages'     => esc_html__('Specific Pages', 'roavio-toolkit'),
								'specific_posts'     => esc_html__('Specific Posts', 'roavio-toolkit'),
								'shop_page'          => esc_html__('Shop Page', 'roavio-toolkit'),
								'product_details'    => esc_html__('Product Details', 'roavio-toolkit'),
								'specific_products'  => esc_html__('Specific Products', 'roavio-toolkit'),
								'portfolio_details'  => esc_html__('Portfolio Details', 'roavio-toolkit'),
								'specific_portfolio' => esc_html__('Specific Portfolio', 'roavio-toolkit'),
							],
						],
						[
							'id'          => 'page_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Pages', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Pages', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'pages',
							'dependency'  => ['rule', '==', 'specific_pages'],
						],
						[
							'id'          => 'posts_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Posts', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Posts', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'posts',
							'dependency'  => ['rule', '==', 'specific_posts'],
						],
						[
							'id'          => 'product_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Products', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Products', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'post',
							'query_args'  => [
								'post_type' => 'product',
							],
							'dependency'  => ['rule', '==', 'specific_products'],
						],
						[
							'id'          => 'portfolio_ids',
							'type'        => 'select',
							'title'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
							'placeholder' => esc_html__('Select Portfolio', 'roavio-toolkit'),
							'chosen'      => true,
							'ajax'        => true,
							'multiple'    => true,
							'sortable'    => true,
							'options'     => 'post',
							'query_args'  => [
								'post_type' => 'roavio_portfolio',
							],
							'dependency'  => ['rule', '==', 'specific_portfolio'],
						],
					],
				],
			],
		]);
	}

	public function mega_menu_meta_fields($item_id, $item)
	{
		if ($item->object === 'roavio_template') {
			$post_type_object = get_post_type_object('roavio_template');
			$url              = get_post_meta($item_id, '_roavio_mega_menu_url', true);

			if (! $post_type_object) {
				return;
			}

			if (! current_user_can('edit_post', $item->object_id)) {
				return;
			}

			if ($post_type_object->_edit_link) {
				$link = admin_url(sprintf($post_type_object->_edit_link . '&action=elementor', $item->object_id));
			} else {
				$link = '';
			}

			wp_nonce_field('roavio_mm_meta_action', 'roavio_mm_meta_name');

			echo '<p class="description description-wide">
				<label for="edit-menu-item-url-' . $item_id . '">
					' . __('URL', 'roavio-toolkit') . '<br>
					<input type="text" id="edit-menu-item-url-' . $item_id . '" class="widefat code edit-menu-item-url" name="menu-item-url[' . $item_id . ']" value="' . $url . '">
				</label>
			</p>';

			echo '<a style="display: inline-block; margin: 12px 0; float: left" href="' . esc_url($link) . '">' . esc_html__('Edit with Elementor', 'webtend-toolkit') . '</a>';
		}
	}

	public function save_mega_menu_meta($menu_id, $menu_item_db_id, $menu_item_data)
	{
		if (! isset($_POST['roavio_mm_meta_name']) || ! wp_verify_nonce($_POST['roavio_mm_meta_name'], 'roavio_mm_meta_action')) {
			return;
		}

		if (isset($_POST['menu-item-url'][$menu_item_db_id])) {
			$url = sanitize_text_field($_POST['menu-item-url'][$menu_item_db_id]);
			update_post_meta($menu_item_db_id, '_roavio_mega_menu_url', $url);
		}
	}
}

Template_Metaboxes::instance();
