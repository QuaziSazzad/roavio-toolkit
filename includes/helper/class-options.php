<?php

namespace RoavioToolkit\Helper;

use RoavioTheme\Admin\Roavio_Admin_Panel;
use RoavioTheme\Classes\Roavio_Helper;
use CSF;

defined('ABSPATH') || exit;

class Roavio_Options
{

	protected static $instance = null;

	private $options_prefix = 'roavio_options';
	private $menu_slug = 'roavio_options';
	private $template_builder_url;

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

		$this->template_builder_url = admin_url('edit.php?post_type=roavio_template');

		$this->theme_options();
		$this->general_section();
		$this->header_section();
		$this->footer_section();
		$this->page_title_section();
		$this->blog_section();
		//$this->portfolio_section();
		//$this->shop_section();
		$this->color_scheme_section();
		$this->typography_section();
		$this->error_section();
		$this->mailchimp_section();
		$this->maintenance_section();
		$this->custom_scrips_section();
		$this->backup_section();

		add_filter('csf_options_before', [$this, 'add_dashboard_banner']);
		add_filter('csf_color_palette', [$this, 'update_color_palette']);
		add_action('csf_roavio_options_save_after', [$this, 'after_saved']);
	}

	public function theme_options()
	{
		CSF::createOptions($this->options_prefix, [
			'menu_title'         => esc_html__('Theme Options', 'roavio-toolkit'),
			'menu_slug'          => $this->menu_slug,
			'framework_title'    => esc_html__('Theme Options', 'roavio-toolkit'),
			'show_in_customizer' => true,
			'menu_type'          => 'submenu',
			'menu_parent'        => 'roavio_dashboard',
			'show_bar_menu'      => false,
			'ajax_save'          => false,
			'footer_text'        => ''
		]);
	}

	public function general_section()
	{
		CSF::createSection($this->options_prefix, [
			'id'    => 'general_options',
			'title' => esc_html__('General', 'roavio-toolkit'),
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'general_options',
			'title'  => esc_html__('Layout', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Layout', 'roavio-toolkit'),
				],
				[
					'id'       => 'site_layout',
					'type'     => 'select',
					'title'    => esc_html__('Layout', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set the website layout.', 'roavio-toolkit'),
					'options'  => [
						'full-width' => esc_html__('Full Width', 'roavio-toolkit'),
						'boxed'      => esc_html__('Boxed', 'roavio-toolkit'),
					],
					'default'  => 'full-width',
				],
				[
					'id'         => 'boxed_width',
					'type'       => 'dimensions',
					'title'      => esc_html__('Boxed Container Width.', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Set the boxed outer container width.', 'roavio-toolkit'),
					'default'    => [
						'width' => '1530',
						'unit'  => 'px',
					],
					'height'     => false,
					'units'      => ['px'],
					'dependency' => ['site_layout', '==', 'boxed'],
				],
				[
					'id'         => 'boxed_container_color',
					'type'       => 'background',
					'title'      => esc_html__('Boxed Background Color', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Set the boxed inner container background color.', 'roavio-toolkit'),
					'output'     => '.roavio-boxed-layout .roavio-body-content',
					'dependency' => ['site_layout', '==', 'boxed'],
				],
				[
					'id'       => 'body_bg',
					'type'     => 'background',
					'title'    => esc_html__('Body Background', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set the <body> background.', 'roavio-toolkit'),
					'output'   => 'body',
				],
				[
					'id'       => 'site_border',
					'type'     => 'switcher',
					'title'    => esc_html__('Site Border', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set a colored border around the website.', 'roavio-toolkit'),
					'default'  => false,
				],
				[
					'id'          => 'site_border_color',
					'type'        => 'color',
					'title'       => esc_html__('Site Border Color', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Set the site border color.', 'roavio-toolkit'),
					'output'      => '.bordered-x',
					'output_mode' => 'border-color',
					'dependency'  => ['site_border', '==', true],
				],
				[
					'id'          => 'site_border_width',
					'type'        => 'number',
					'title'       => esc_html__('Site Border Width.', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Set the site border width.', 'roavio-toolkit'),
					'unit'        => 'px',
					'output'      => '.bordered-x',
					'output_mode' => 'border-width',
					'dependency'  => ['site_border', '==', true],
				],
			],
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'general_options',
			'title'  => esc_html__('Preloader', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Preloader', 'roavio-toolkit'),
				],
				[
					'id'       => 'site_preloader',
					'type'     => 'button_set',
					'title'    => esc_html__('Site Preloader', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable site Preloader', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enabled', 'roavio-toolkit'),
						'Disabled' => esc_html__('Disabled', 'roavio-toolkit'),
					],
					'default'  => 'enabled',
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Preloader Styling', 'roavio-toolkit'),
					'dependency' => ['site_preloader', '==', 'enabled'],
				],
				[
					'id'          => 'preloader_background',
					'type'        => 'color',
					'title'       => esc_html__('Background Color', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Preloader background color', 'roavio-toolkit'),
					'output'      => '.preloader',
					'output_mode' => 'background-color',
					'dependency'  => ['site_preloader', '==', 'enabled'],
				],
				[
					'id'          => 'spinner_base_color',
					'type'        => 'color',
					'title'       => esc_html__('Spinner Base Color', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Preloader spinner base color', 'roavio-toolkit'),
					'output'      => '.preloader .custom-loader',
					'output_mode' => 'border-color',
					'dependency'  => ['site_preloader', '==', 'enabled'],
				],
				[
					'id'          => 'spinner_line_top_color',
					'type'        => 'color',
					'title'       => esc_html__('Spinner Line Top Color', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Preloader spinner line color', 'roavio-toolkit'),
					'output'      => '.preloader .custom-loader',
					'output_mode' => 'border-top-color',
					'dependency'  => ['site_preloader', '==', 'enabled'],
				],
				[
					'id'          => 'spinner_line_bottom_color',
					'type'        => 'color',
					'title'       => esc_html__('Spinner Line Bottom Color', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Preloader spinner line color', 'roavio-toolkit'),
					'output'      => '.preloader .custom-loader',
					'output_mode' => 'border-bottom-color',
					'dependency'  => ['site_preloader', '==', 'enabled'],
				],
			],
		]);

		// CSF::createSection($this->options_prefix, [
		// 	'parent' => 'general_options',
		// 	'title'  => esc_html__('Back to Top', 'roavio-toolkit'),
		// 	'fields' => [
		// 		[
		// 			'type'    => 'heading',
		// 			'content' => esc_html__('Back to Top', 'roavio-toolkit'),
		// 		],
		// 		[
		// 			'id'       => 'back_to_top',
		// 			'type'     => 'button_set',
		// 			'title'    => esc_html__('Back to Top', 'roavio-toolkit'),
		// 			'subtitle' => esc_html__('Add a back to top button on bottom right corner.', 'roavio-toolkit'),
		// 			'options'  => [
		// 				'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
		// 				'disabled' => esc_html__('Disable', 'roavio-toolkit'),
		// 			],
		// 			'default'  => 'enabled',
		// 		],
		// 		[
		// 			'id'         => 'back_to_top_mobile',
		// 			'type'       => 'switcher',
		// 			'title'      => esc_html__('Show on Mobile', 'roavio-toolkit'),
		// 			'subtitle'   => esc_html__('Show the back to top button on mobile devices..', 'roavio-toolkit'),
		// 			'default'    => true,
		// 			'dependency' => ['back_to_top', '==', 'enabled'],
		// 		],
		// 		[
		// 			'id'          => 'back_to_top_color',
		// 			'type'        => 'color',
		// 			'title'       => esc_html__('Icon Color', 'roavio-toolkit'),
		// 			'subtitle'    => esc_html__('Back to Top icon color', 'roavio-toolkit'),
		// 			'output'      => '.back-to-top',
		// 			'output_mode' => 'color',
		// 			'dependency'  => ['back_to_top', '==', 'enabled'],
		// 		],
		// 		[
		// 			'id'          => 'back_to_top_bg',
		// 			'type'        => 'color',
		// 			'title'       => esc_html__('Background', 'roavio-toolkit'),
		// 			'subtitle'    => esc_html__('Back to Top icon background color', 'roavio-toolkit'),
		// 			'output'      => '.back-to-top',
		// 			'output_mode' => 'background-color',
		// 			'dependency'  => ['back_to_top', '==', 'enabled'],
		// 		],
		// 		[
		// 			'id'          => 'back_top_hover_color',
		// 			'type'        => 'color',
		// 			'title'       => esc_html__('Hover Color', 'roavio-toolkit'),
		// 			'subtitle'    => esc_html__('Back to Top icon hover color', 'roavio-toolkit'),
		// 			'output'      => '.back-to-top:hover',
		// 			'output_mode' => 'color',
		// 			'dependency'  => ['back_to_top', '==', 'enabled'],
		// 		],
		// 		[
		// 			'id'          => 'back_top_hover_bg',
		// 			'type'        => 'color',
		// 			'title'       => esc_html__('Hover Background', 'roavio-toolkit'),
		// 			'subtitle'    => esc_html__('Back to Top icon hover background color', 'roavio-toolkit'),
		// 			'output'      => '.back-to-top:hover',
		// 			'output_mode' => 'background-color',
		// 			'dependency'  => ['back_to_top', '==', 'enabled'],
		// 		],
		// 	],
		// ]);
	}

	public function header_section()
	{
		CSF::createSection($this->options_prefix, [
			'id'    => 'header_options',
			'title' => esc_html__('Header', 'roavio-toolkit'),
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'header_options',
			'title'  => esc_html__('General', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('General', 'roavio-toolkit'),
				],
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for site header then disable default theme header', 'roavio-toolkit'),
				],
				[
					'id'       => 'default_header',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Header', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Theme default header', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'enabled',
				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default theme header. Set your site header form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'default_header',
						'==',
						'disabled',
					],
				],
				[
					'id'         => 'header_button',
					'type'       => 'button_set',
					'title'      => esc_html__('Show Header Button', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Show a button to header right side', 'roavio-toolkit'),
					'options'    => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'    => 'enabled',
					'dependency' => [
						'default_header',
						'==',
						'enabled',
					],
				],
				[
					'id'         => 'button_text',
					'title'      => esc_html__('Button Text', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Text for Header Button.', 'roavio-toolkit'),
					'type'       => 'text',
					'default'    => esc_html__('Get a Quote', 'roavio-toolkit'),
					'dependency' => [
						['default_header', '==', 'enabled'],
						['header_button', '==', 'enabled'],
					],
				],
				[
					'id'         => 'button_url',
					'title'      => esc_html__('Button URL', 'roavio-toolkit'),
					'subtitle'   => esc_html__('URL for Header Button.', 'roavio-toolkit'),
					'type'       => 'text',
					'default'    => '#',
					'dependency' => [
						['default_header', '==', 'enabled'],
						['header_button', '==', 'enabled'],
					],
				],
			],
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'header_options',
			'title'  => esc_html__('Logo', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Header Logo', 'roavio-toolkit'),
				],
				[
					'id'       => 'site_logo_type',
					'type'     => 'button_set',
					'title'    => esc_html__('Site Logo Type', 'roavio-toolkit'),
					'subtitle' => esc_html__('Select site logo type', 'roavio-toolkit'),
					'options'  => [
						'text'  => esc_html__('Text', 'roavio-toolkit'),
						'image' => esc_html__('Image', 'roavio-toolkit'),
					],
					'default'  => 'image',
				],
				[
					'id'         => 'site_text_logo',
					'type'       => 'text',
					'title'      => esc_html__('Text logo', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Type logo text', 'roavio-toolkit'),
					'default'    => esc_html__('roavio', 'roavio-toolkit'),
					'dependency' => ['site_logo_type', '==', 'text'],
				],
				[
					'id'           => 'site_image_logo',
					'type'         => 'media',
					'title'        => esc_html__('Image logo', 'roavio-toolkit'),
					'subtitle'     => esc_html__('Upload OR Select image for site logo', 'roavio-toolkit'),
					'library'      => 'image',
					'url'          => false,
					'default'      => [
						'url'       => RT_THEME_ASSETS . '/img/logo.png',
						'thumbnail' => RT_THEME_ASSETS . '/img/logo.png',
					],
					'preview_size' => 'full',
					'dependency'   => ['site_logo_type', '==', 'image'],
				],
				[
					'id'         => 'logo_dimension',
					'type'       => 'dimensions',
					'title'      => esc_html__('Logo Dimensions', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Site logo Dimensions', 'roavio-toolkit'),
					'output'     => '.default-header .roavio-site-logo img',
					'dependency' => ['site_logo_type', '==', 'image'],
				],
				[
					'id'          => 'logo_max_width',
					'type'        => 'number',
					'unit'        => 'px',
					'title'       => esc_html__('Max Width', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Logo wrapper max width', 'roavio-toolkit'),
					'output'      => '.default-header .roavio-site-logo',
					'output_mode' => 'max-width',
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Mobile Panel Logo', 'roavio-toolkit'),
				],
				[
					'id'       => 'panel_logo_type',
					'type'     => 'button_set',
					'title'    => esc_html__('Panel Logo Type', 'roavio-toolkit'),
					'subtitle' => esc_html__('Select Logo type', 'roavio-toolkit'),
					'options'  => [
						'text'  => esc_html__('Text', 'roavio-toolkit'),
						'image' => esc_html__('Image', 'roavio-toolkit'),
					],
					'default'  => 'image',
				],
				[
					'id'         => 'panel_text_logo',
					'type'       => 'text',
					'title'      => esc_html__('Text logo', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Type logo text', 'roavio-toolkit'),
					'default'    => 'roavio',
					'dependency' => ['panel_logo_type', '==', 'text'],
				],
				[
					'id'           => 'panel_image_logo',
					'type'         => 'media',
					'title'        => esc_html__('Image logo', 'roavio-toolkit'),
					'subtitle'     => esc_html__('Select OR Upload image', 'roavio-toolkit'),
					'library'      => 'image',
					'url'          => false,
					'default'      => [
						'url'       => RT_THEME_ASSETS . '/img/logo.png',
						'thumbnail' => RT_THEME_ASSETS . '/img/logo.png',
					],
					'preview_size' => 'full',
					'dependency'   => ['panel_logo_type', '==', 'image'],
				],
				[
					'id'         => 'slide_panel_dimension',
					'type'       => 'dimensions',
					'title'      => esc_html__('Logo Dimensions', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Image logo Dimensions', 'roavio-toolkit'),
					'output'     => '.default-header .slide-panel-logo img',
					'dependency' => ['panel_logo_type', '==', 'image'],
				],
				[
					'id'          => 'panel_logo_max_width',
					'type'        => 'number',
					'unit'        => 'px',
					'title'       => esc_html__('Max Width', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Logo wrapper max width', 'roavio-toolkit'),
					'output'      => '.roavio-nav-menu .slide-panel-wrapper .slide-panel-logo',
					'output_mode' => 'max-width',
				],
			],
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'header_options',
			'title'  => esc_html__('Styling', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Header Styling', 'roavio-toolkit'),
				],
				[
					'id'               => 'header_bg',
					'type'             => 'color',
					'title'            => esc_html__('Header Background', 'roavio-toolkit'),
					'output'           => ['.main-header.menu-absolute .header-upper'],
					'output_mode'      => 'background-color',
					'output_important' => true,
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Menu Items', 'roavio-toolkit'),
				],
				[
					'id'          => 'menu_item_color',
					'type'        => 'color',
					'title'       => esc_html__('Menu Item Color', 'roavio-toolkit'),
					'desc'        => esc_html__('This is the menu item font color.', 'roavio-toolkit'),
					'output'      => ['.main-header.white-menu .navbar-collapse > ul > li > a'],
					'output_mode' => 'color',
				],
				[
					'id'          => 'menu_item_hover_color',
					'type'        => 'color',
					'title'       => esc_html__('Active/Hover Color', 'roavio-toolkit'),
					'desc'        => esc_html__('This is the menu item font color.', 'roavio-toolkit'),
					'output'      => ['.main-header.white-menu .navbar-collapse > ul > li > a:hover'],
					'output_mode' => 'color',
				],
				[
					'id'     => 'menu_typography',
					'type'   => 'typography',
					'title'  => esc_html__('Menu Typography', 'roavio-toolkit'),
					'color'  => false,
					'output' => '.default-header .nav-menu-wrapper .menu-item-link',
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Submenu', 'roavio-toolkit'),
				],
				[
					'id'          => 'submenu_bg',
					'type'        => 'color',
					'title'       => esc_html__('Submenu Background', 'roavio-toolkit'),
					'output'      => '.main-menu .navbar-collapse li ul',
					'output_mode' => 'background-color',
				],
				[
					'id'          => 'submenu_item_divider',
					'type'        => 'color',
					'title'       => esc_html__('Item Divider', 'roavio-toolkit'),
					'output'      => '.main-menu .navbar-collapse li li',
					'output_mode' => 'border-color',
				],
				[
					'id'          => 'submenu_item_color',
					'type'        => 'color',
					'title'       => esc_html__('Item Color', 'roavio-toolkit'),
					'output'      => '.main-menu .navbar-collapse li li a',
					'output_mode' => 'color',
				],
				[
					'id'          => 'submenu_item_hover_color',
					'type'        => 'color',
					'title'       => esc_html__('Item Hover Color', 'roavio-toolkit'),
					'output'      => '.main-menu .navbar-collapse li li a:hover',
					'output_mode' => 'color',
				],
				[
					'id'     => 'submenu_typography',
					'type'   => 'typography',
					'title'  => esc_html__('Item Typography', 'roavio-toolkit'),
					'color'  => false,
					'output' => '.main-menu .navbar-collapse li li a',
				],
			],
		]);
	}

	public function footer_section()
	{
		CSF::createSection($this->options_prefix, [
			'id'    => 'footer_options',
			'title' => esc_html__('Footer', 'roavio-toolkit'),
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'footer_options',
			'title'  => esc_html__('General', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('General', 'roavio-toolkit'),
				],
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for site footer then disable default theme header', 'roavio-toolkit'),
				],
				[
					'id'       => 'default_footer',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Footer', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Theme default footer', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'enabled',
				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default theme footer. Set your site footer form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'default_footer',
						'==',
						'disabled',
					],
				],
			],
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'footer_options',
			'title'  => esc_html__('Footer Copyright', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Footer', 'roavio-toolkit'),
				],
				[
					'id'      => 'copyright_text',
					'type'    => 'textarea',
					'title'   => esc_html__('Copyright Text', 'roavio-toolkit'),
					'default' => esc_html__('Copyright © 2025. All rights reserved.', 'roavio-toolkit'),
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Style', 'roavio-toolkit'),
				],
				[
					'id'          => 'copyright_color_bg',
					'type'        => 'color',
					'title'       => esc_html__('Copyright Background', 'roavio-toolkit'),
					'output'      => '.roavio-site-footer.default-footer',
					'output_mode' => 'background-color',
				],
				[
					'id'     => 'copyright_color',
					'type'   => 'color',
					'title'  => esc_html__('Copyright text color', 'roavio-toolkit'),
					'output' => '.roavio-site-footer .footer-copyright, .roavio-site-footer .footer-copyright a',
				],
			],
		]);
	}

	public function page_title_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Page Title', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Page Title', 'roavio-toolkit'),
				],
				[
					'id'      => 'site_page_title',
					'type'    => 'button_set',
					'title'   => esc_html__('Site Page Title', 'roavio-toolkit'),
					'options' => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default' => 'enabled',
				],
				[
					'id'         => 'site_breadcrumb',
					'type'       => 'button_set',
					'title'      => esc_html__('Site Breadcrumb', 'roavio-toolkit'),
					'options'    => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'    => 'enabled',
					'dependency' => ['site_page_title', '==', 'enabled'],
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Banner Content', 'roavio-toolkit'),
					'dependency' => ['site_page_title', '==', 'enabled'],
				],
				[
					'id'         => 'breadcrumb_image',
					'type'       => 'media',
					'title'      => esc_html__('Breadcrumb Image', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Upload Breadcrumb Image', 'roavio-toolkit'),
					'library'    => 'image',
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Page Title Styling', 'roavio-toolkit'),
					'dependency' => ['site_page_title', '==', 'enabled'],
				],
				[
					'id'         => 'page_title_bg',
					'type'       => 'background',
					'title'      => esc_html__('Background', 'roavio-toolkit'),
					'output'     => '.page-title',
					'dependency' => ['site_page_title', '==', 'enabled'],
				],
				[
					'id'         => 'page_title_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Typography', 'roavio-toolkit'),
					'output'     => '.page-title',
					'dependency' => ['site_page_title', '==', 'enabled'],
				],
				[
					'id'               => 'page_breadcrumb_typo',
					'type'             => 'typography',
					'line_height_unit' => 'em',
					'title'            => esc_html__('Breadcrumb Typography', 'roavio-toolkit'),
					'output'           => '.roavio-breadcrumb, .roavio-breadcrumb a, .roavio-breadcrumb span',
					'dependency'       => ['site_page_title', '==', 'enabled'],
				],
			],
		]);
	}

	public function blog_section()
	{
		CSF::createSection($this->options_prefix, [
			'id'    => 'blog_options',
			'title' => esc_html__('Blog', 'roavio-toolkit'),
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'blog_options',
			'title'  => esc_html__('Blog Archive', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Blog Archive', 'roavio-toolkit'),
				],
				[
					'id'          => 'blog_archive_title',
					'type'        => 'text',
					'title'       => esc_html__('Blog Archive Title', 'roavio-toolkit'),
					'subtitle'    => esc_html__('Archive page title.', 'roavio-toolkit'),
					'placeholder' => esc_html__('Type title', 'roavio-toolkit'),
					'default'     => esc_html__('Latest News', 'roavio-toolkit'),
				],
				[
					'id'       => 'blog_archive_sidebar',
					'type'     => 'select',
					'title'    => esc_html__('Sidebar', 'roavio-toolkit'),
					'subtitle' => esc_html__('Select Blog Archive Sidebar. Left sidebar or right sidebar or No sidebar', 'roavio-toolkit'),
					'options'  => [
						'left-sidebar'  => esc_html__('Left Sidebar', 'roavio-toolkit'),
						'right-sidebar' => esc_html__('Right Sidebar', 'roavio-toolkit'),
						'no-sidebar'    => esc_html__('No Sidebar', 'roavio-toolkit'),
					],
					'default'  => 'right-sidebar',
				],
				[
					'id'       => 'archive_post_category',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Categories', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post categories on blog archive page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'       => 'archive_post_meta',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Meta', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post meta on blog archive page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'         => 'archive_meta_items',
					'type'       => 'sorter',
					'title'      => esc_html__('Meta Items', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Select ', 'roavio-toolkit'),
					'default'    => [
						'enabled'  => [
							'author'   => esc_html__('Author', 'roavio-toolkit'),
							'date'     => esc_html__('Date', 'roavio-toolkit'),
							'comments' => esc_html__('Comments', 'roavio-toolkit'),
						],
						'disabled' => [],
					],
					'dependency' => [
						'archive_post_meta',
						'==',
						'yes',
					],
				],
				[
					'id'       => 'archive_post_excerpt',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Excerpt', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Post Excerpt on Blog Archive page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'         => 'archive_excerpt_count',
					'type'       => 'number',
					'title'      => esc_html__('Excerpt Word Count', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Set how many words you want to show in the post Excerpt', 'roavio-toolkit'),
					'default'    => 30,
					'dependency' => [
						'archive_post_excerpt',
						'==',
						'yes',
					],
				],
				[
					'id'       => 'archive_post_button',
					'type'     => 'button_set',
					'title'    => esc_html__('Read More Button', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Post Read More Button on Blog Archive page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'         => 'post_button_text',
					'type'       => 'text',
					'title'      => esc_html__('Button Text', 'roavio-toolkit'),
					'default'    => esc_html__('Read More', 'roavio-toolkit'),
					'dependency' => [
						'archive_post_button',
						'==',
						'yes',
					],
				],
			],
		]);

		CSF::createSection($this->options_prefix, [
			'parent' => 'blog_options',
			'title'  => esc_html__('Blog Single', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Blog single', 'roavio-toolkit'),
				],
				[
					'id'      => 'blog_details_sidebar',
					'type'    => 'select',
					'title'   => esc_html__('Sidebar', 'roavio-toolkit'),
					'options' => [
						'left-sidebar'  => esc_html__('Left Sidebar', 'roavio-toolkit'),
						'right-sidebar' => esc_html__('Right Sidebar', 'roavio-toolkit'),
						'no-sidebar'    => esc_html__('No Sidebar', 'roavio-toolkit'),
					],
					'default' => 'right-sidebar',
					'desc'    => esc_html__('Select Blog Details Sidebar. Left sidebar or right sidebar or No sidebar', 'roavio-toolkit'),
				],
				[
					'id'       => 'blog_details_category',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Categories', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post categories on blog single page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'       => 'blog_details_share',
					'type'     => 'button_set',
					'title'    => esc_html__('Show Post Share Links', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Post social share links.', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'         => 'social_share_item',
					'type'       => 'sorter',
					'title'      => esc_html__('Social Share Links', 'roavio-toolkit'),
					'default'    => [
						'enabled'  => [
							'facebook'  => esc_html__('Facebook', 'roavio-toolkit'),
							'twitter'   => esc_html__('Twitter', 'roavio-toolkit'),
							'pinterest' => esc_html__('Pinterest', 'roavio-toolkit'),
							'linkedin'  => esc_html__('Linkedin', 'roavio-toolkit'),
						],
						'disabled' => [
							'reddit'   => esc_html__('Reddit', 'roavio-toolkit'),
							'whatsapp' => esc_html__('Whatsapp', 'roavio-toolkit'),
							'telegram' => esc_html__('Telegram', 'roavio-toolkit'),
						],
					],
					'dependency' => [
						'blog_details_share',
						'==',
						'yes',
					],
				],
				[
					'id'       => 'blog_details_tag',
					'type'     => 'button_set',
					'title'    => esc_html__('Related Tags', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable related tag on Blog Details page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'       => 'blog_details_nav',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Navigation', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Post navigation on Blog Details page', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'yes',
				],
				[
					'id'       => 'blog_author_info',
					'type'     => 'button_set',
					'title'    => esc_html__('Post Author', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Post author information box.', 'roavio-toolkit'),
					'options'  => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'  => 'no',
				],
			],
		]);
	}

	public function portfolio_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Portfolio', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Portfolio', 'roavio-toolkit'),
				],
				[
					'id'          => 'portfolio_slug',
					'type'        => 'text',
					'title'       => esc_html__('Portfolio Slug', 'roavio-toolkit'),
					'placeholder' => esc_html__('portfolio', 'roavio-toolkit'),
					'desc'        => esc_html__('You can customize the permalink structure (site_domain/post_type_slug/post_slug) by changing the post type slug (post_type_slug) from here. Don\'t forget to save the permalinks settings from Settings > Permalinks after changing the slug value.', 'roavio-toolkit'),
				],
				[
					'id'       => 'portfolio_post_per_page',
					'type'     => 'number',
					'title'    => esc_html__('Post Per Page', 'roavio-toolkit'),
					'default'  => 9,
					'subtitle' => esc_html__('Number of posts to show per page', 'roavio-toolkit'),
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Portfolio Archive', 'roavio-toolkit'),
				],
				[
					'id'       => 'archive_page_title',
					'type'     => 'text',
					'title'    => esc_html__('Page Title', 'roavio-toolkit'),
					'subtitle' => esc_html__('Archive Page Title', 'roavio-toolkit'),
					'default'  => esc_html__('Our Portfolio', 'roavio-toolkit'),
				],
				[
					'id'      => 'archive_portfolio_design',
					'type'    => 'select',
					'title'   => esc_html__('Portfolio Design', 'roavio-toolkit'),
					'options' => [
						'design-one'   => esc_html__('Design One', 'roavio-toolkit'),
						'design-two'   => esc_html__('Design Two', 'roavio-toolkit'),
						'design-three' => esc_html__('Design Three', 'roavio-toolkit'),
						'design-four'  => esc_html__('Design Four', 'roavio-toolkit'),
					],
					'default' => 'design-one'
				]
			],
		]);
	}

	public function shop_section()
	{
		CSF::createSection($this->options_prefix, [
			'id'     => 'shop_options',
			'title'  => esc_html__('Shop', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Shop', 'roavio-toolkit'),
				],
				[
					'id'      => 'product_loop_columns',
					'type'    => 'button_set',
					'title'   => esc_html__('Columns', 'roavio-toolkit'),
					'options' => [
						'1' => esc_html__('One', 'roavio-toolkit'),
						'2' => esc_html__('Two', 'roavio-toolkit'),
						'3' => esc_html__('Three', 'roavio-toolkit'),
						'4' => esc_html__('Four', 'roavio-toolkit'),
						'5' => esc_html__('Five', 'roavio-toolkit'),
						'6' => esc_html__('Six', 'roavio-toolkit'),
					],
					'default' => '4',
					'desc'    => esc_html__('How many column should be shown per row?', 'roavio-toolkit'),
				],
				[
					'id'      => 'product_loop_per_page',
					'type'    => 'number',
					'title'   => esc_html__('Product Per page', 'roavio-toolkit'),
					'default' => 12,
					'desc'    => esc_html__('How many products should be shown per page?', 'roavio-toolkit'),
				],
				[
					'type'    => 'subheading',
					'content' => esc_html__('Related Product', 'roavio-toolkit'),
				],
				[
					'id'      => 'enable_related_product',
					'type'    => 'switcher',
					'title'   => esc_html__('Related Product', 'roavio-toolkit'),
					'default' => true,
				],

				[
					'id'      => 'related_product_columns',
					'type'    => 'button_set',
					'title'   => esc_html__('Columns', 'roavio-toolkit'),
					'options' => [
						'1' => esc_html__('One', 'roavio-toolkit'),
						'2' => esc_html__('Two', 'roavio-toolkit'),
						'3' => esc_html__('Three', 'roavio-toolkit'),
						'4' => esc_html__('Four', 'roavio-toolkit'),
						'5' => esc_html__('Five', 'roavio-toolkit'),
						'6' => esc_html__('Six', 'roavio-toolkit'),
					],
					'default' => '4',
					'desc'    => esc_html__('How many column should be shown per row?', 'roavio-toolkit'),
				],
				[
					'id'      => 'related_product_per_page',
					'type'    => 'number',
					'title'   => esc_html__('Product Per page', 'roavio-toolkit'),
					'default' => 4,
					'desc'    => esc_html__('How many products should be shown per page?', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function color_scheme_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Color Scheme', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Color Scheme', 'roavio-toolkit'),
				],
				[
					'id'       => 'primary_color',
					'type'     => 'color',
					'title'    => esc_html__('Primary', 'roavio-toolkit'),
					'default'  => '#FC5546',
					'subtitle' => esc_html__('Your main brand color. Used by most elements throughout the website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #FC5546', 'roavio-toolkit'),
				],
				[
					'id'       => 'secondary_color',
					'type'     => 'color',
					'title'    => esc_html__('Secondary', 'roavio-toolkit'),
					'default'  => '#021433',
					'subtitle' => esc_html__('Your secondary brand color. Used mainly as hover color or by secondary elements.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #021433', 'roavio-toolkit'),
				],
				[
					'id'       => 'blue_color',
					'type'     => 'color',
					'title'    => esc_html__('Blue', 'roavio-toolkit'),
					'default'  => '#021433',
					'subtitle' => esc_html__('Mostly Use in Background Color.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #021433', 'roavio-toolkit'),
				],
				[
					'id'       => 'nav_blue_color',
					'type'     => 'color',
					'title'    => esc_html__('Nav Blue', 'roavio-toolkit'),
					'default'  => '#151F39',
					'subtitle' => esc_html__('Mostly Use in Background Color.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #151F39', 'roavio-toolkit'),
				],
				[
					'id'       => 'body_color',
					'type'     => 'color',
					'title'    => esc_html__('Body', 'roavio-toolkit'),
					'default'  => '#5B5B5B',
					'subtitle' => esc_html__('A neutral grey, easy to read color, used by all text elements.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #5B5B5B', 'roavio-toolkit'),
				],
				[
					'id'       => 'heading_color',
					'type'     => 'color',
					'title'    => esc_html__('Heading', 'roavio-toolkit'),
					'default'  => '#0B0C0C',
					'subtitle' => esc_html__('A dark, contrasting color, used by all headlines in your website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #0B0C0C', 'roavio-toolkit'),
				],
				[
					'id'       => 'gray_color',
					'type'     => 'color',
					'title'    => esc_html__('Gray Color', 'roavio-toolkit'),
					'default'  => '#F3F6F9',
					'subtitle' => esc_html__('A common light color for all Gray in your website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #F3F6F9', 'roavio-toolkit'),
				],
				[
					'id'       => 'light_neutral',
					'type'     => 'color',
					'title'    => esc_html__('Light Color', 'roavio-toolkit'),
					'default'  => '#F3F6F9',
					'subtitle' => esc_html__('Generally used as background color for light, alternating sections.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #F3F6F9', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function typography_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Typography', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Typography', 'roavio-toolkit'),
				],
				[
					'id'                 => 'primary_font',
					'type'               => 'typography',
					'title'              => esc_html__('Base Font', 'roavio-toolkit'),
					'subtitle'           => esc_html__('The main font of your website. The most readable font, used by all text elements.', 'roavio-toolkit'),
					'font_weight'        => true,
					'font_style'         => true,
					'extra_styles'       => true,
					'font_size'          => false,
					'line_height'        => false,
					'letter_spacing'     => false,
					'text_align'         => false,
					'text_transform'     => false,
					'color'              => false,
					'backup_font_family' => true,
					'subset'             => true,
					'preview'            => false,
				],
				[
					'id'                 => 'secondary_font',
					'type'               => 'typography',
					'title'              => esc_html__('Heading Font', 'roavio-toolkit'),
					'subtitle'           => esc_html__('The secondary font of your website. Used by secondary headlines and smaller elements.', 'roavio-toolkit'),
					'font_weight'        => true,
					'font_style'         => true,
					'extra_styles'       => true,
					'font_size'          => false,
					'line_height'        => false,
					'letter_spacing'     => false,
					'text_align'         => false,
					'text_transform'     => false,
					'color'              => false,
					'backup_font_family' => true,
					'subset'             => true,
					'preview'            => false,
				],
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('For better performance, it\'s recommended you limit typography to two font families.', 'roavio-toolkit'),
				],
				[
					'id'      => 'body_typo_types',
					'type'    => 'button_set',
					'title'   => esc_html__('Body Typography', 'roavio-toolkit'),
					'options' => [
						'default-font' => esc_html__('Default', 'roavio-toolkit'),
						'custom-font'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default' => 'default-font',
				],
				[
					'id'         => 'body_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Body', 'roavio-toolkit'),
					'output'     => 'body',
					'preview'    => false,
					'dependency' => [
						'body_typo_types',
						'==',
						'custom-font',
					],
				],
				[
					'id'      => 'heading_typo_type',
					'type'    => 'button_set',
					'title'   => esc_html__('Heading Typography', 'roavio-toolkit'),
					'options' => [
						'default-font' => esc_html__('Default', 'roavio-toolkit'),
						'custom-font'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default' => 'default-font',
				],
				[
					'id'         => 'heading1_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 1', 'roavio-toolkit'),
					'output'     => 'h1',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
				[
					'id'         => 'heading2_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 2', 'roavio-toolkit'),
					'output'     => 'h2',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
				[
					'id'         => 'heading3_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 3', 'roavio-toolkit'),
					'output'     => 'h3',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
				[
					'id'         => 'heading4_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 4', 'roavio-toolkit'),
					'output'     => 'h4',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
				[
					'id'         => 'heading5_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 5', 'roavio-toolkit'),
					'output'     => 'h5',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
				[
					'id'         => 'heading6_typo',
					'type'       => 'typography',
					'title'      => esc_html__('Heading 6', 'roavio-toolkit'),
					'output'     => 'h6',
					'preview'    => false,
					'dependency' => [
						'heading_typo_type',
						'==',
						'custom-font',
					],
				],
			],
		]);
	}

	public function error_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('404 Page', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('404 Page', 'roavio-toolkit'),
				],
				[
					'id'      => 'error_title',
					'type'    => 'text',
					'title'   => esc_html__('Title', 'roavio-toolkit'),
					'default' => esc_html__('OPPS!', 'roavio-toolkit'),
				],
				[
					'id'      => 'error_bottom_message',
					'type'    => 'textarea',
					'title'   => esc_html__('Message', 'roavio-toolkit'),
					'default' => esc_html__('The page you are looking for does not exist or has been moved', 'roavio-toolkit'),
				],
				[
					'id'      => 'error_button_text',
					'type'    => 'text',
					'title'   => esc_html__('Error Button Text', 'roavio-toolkit'),
					'default' => esc_html__('Go to Home', 'roavio-toolkit'),
				],
				[
					'id'           => 'error_page_image',
					'type'         => 'media',
					'title'        => esc_html__('Error Page Image', 'roavio-toolkit'),
					'subtitle'     => esc_html__('Upload OR Select image for 404 page', 'roavio-toolkit'),
					'library'      => 'image',
					'url'          => false,
					'default'      => [
						'url'       => RT_THEME_ASSETS . '/img/error-404.png',
						'thumbnail' => RT_THEME_ASSETS . '/img/error-404.png',
					],
					'preview_size' => 'full',
				],
			],
		]);
	}

	public function mailchimp_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Mailchimp  Api', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Insert Mailchimp Api', 'roavio-toolkit'),
				],
				[
					'id'      => 'api',
					'type'    => 'text',
					'title'   => esc_html__('Api', 'roavio-toolkit'),
				],
				[
					'id'      => 'subscribe_list_id',
					'type'    => 'text',
					'title'   => esc_html__('Subscribe List Id', 'roavio-toolkit'),
				],
				[
					'id'      => 'success_message',
					'type'    => 'text',
					'title'   => esc_html__('Success Message', 'roavio-toolkit'),
					'default'   => esc_html__('Your email has been subscribed successfully.', 'roavio-toolkit'),
				],
				[
					'id'      => 'already_subscribed_message',
					'type'    => 'text',
					'title'   => esc_html__('Already Subscribed Message', 'roavio-toolkit'),
					'default'   => esc_html__('Your email has already been subscribed.', 'roavio-toolkit'),
				],
				[
					'id'      => 'error_message',
					'type'    => 'text',
					'title'   => esc_html__('Error Message', 'roavio-toolkit'),
					'default'   => esc_html__('Something went wrong, please try again later.', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function maintenance_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Maintenance Mode', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Maintenance Mode', 'roavio-toolkit'),
				],
				[
					'id'       => 'maintenance_mode',
					'type'     => 'button_set',
					'title'    => esc_html__('Maintenance Mode', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable maintenance mode top your website.', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'disabled',
				],
				[
					'id'          => 'maintenance_page',
					'type'        => 'select',
					'title'       => esc_html__('Maintenance Page', 'roavio-toolkit'),
					'placeholder' => esc_html__('Default', 'roavio-toolkit'),
					'options'     => 'pages',
					'dependency'  => ['maintenance_mode', '==', 'enabled'],
				],
				[
					'id'         => 'maintenance_title',
					'type'       => 'text',
					'title'      => esc_html__('Maintenance Title', 'roavio-toolkit'),
					'default'    => esc_html__('The site is currently down for maintenance', 'roavio-toolkit'),
					'dependency' => [
						['maintenance_mode', '==', 'enabled'],
						['maintenance_page', '==', ''],
					],
				],
				[
					'id'         => 'maintenance_subtitle',
					'type'       => 'textarea',
					'title'      => esc_html__('Maintenance Subtitle', 'roavio-toolkit'),
					'default'    => esc_html__('We apologize for any inconvenience caused', 'roavio-toolkit'),
					'dependency' => [
						['maintenance_mode', '==', 'enabled'],
						['maintenance_page', '==', ''],
					],
				],
				[
					'id'         => 'maintenance_img',
					'type'       => 'media',
					'title'      => esc_html__('Maintenance Img', 'roavio-toolkit'),
					'subtitle'   => esc_html__('Upload OR Select a illustration for maintenance page', 'roavio-toolkit'),
					'library'    => 'image',
					'url'        => false,
					'default'    => [
						'url'       => RT_THEME_ASSETS . '/img/maintenance.png',
						'thumbnail' => RT_THEME_ASSETS . '/img/maintenance.png',
					],
					'dependency' => [
						['maintenance_mode', '==', 'enabled'],
						['maintenance_page', '==', ''],
					],
				],
			],
		]);
	}

	public function custom_scrips_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Custom Scripts', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Custom Scripts', 'roavio-toolkit'),
				],
				[
					'id'       => 'custom_header_scripts',
					'type'     => 'code_editor',
					'title'    => esc_html__('Js Code(Head)', 'roavio-toolkit'),
					'settings' => [
						'theme' => 'mbo',
						'mode'  => 'javascript',
					],
					'subtitle' => esc_html__('Add your custom js code here. Must Be type without script tag and valid code, It will insert the code to wp_head hook.', 'roavio-toolkit'),
				],
				[
					'id'       => 'custom_footer_scripts',
					'type'     => 'code_editor',
					'title'    => esc_html__('Js Code(Footer)', 'roavio-toolkit'),
					'settings' => [
						'theme' => 'mbo',
						'mode'  => 'javascript',
					],
					'subtitle' => esc_html__('Add your custom js code here. Must Be type without script tag and valid code, It will insert the code to wp_footer hook.', 'roavio-toolkit'),
				],
				[
					'type'    => 'submessage',
					'style'   => 'info',
					'content' => esc_html__('You Can add also custom css in Appearance>Customize>Additional CSS', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function backup_section()
	{
		CSF::createSection($this->options_prefix, [
			'title'  => esc_html__('Backup', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Backup', 'roavio-toolkit'),
				],
				[
					'type' => 'backup',
				],
			],
		]);
	}

	public function add_dashboard_banner()
	{
		Roavio_Admin_Panel::render_heading();
	}

	public function update_color_palette()
	{
		$colors    = Roavio_Helper::get_global_colors();
		$new_color = [];

		foreach ($colors as $color) {
			$new_color[] = $color['value'];
		}

		return $new_color;
	}

	public function after_saved()
	{
		if (get_option('roavio_update_elementor_kit') !== false) {
			update_option('roavio_update_elementor_kit', 'yes');
		} else {
			add_option('roavio_update_elementor_kit', 'yes');
		}
	}
}

Roavio_Options::instance();
