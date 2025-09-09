<?php

namespace RoavioToolkit\Helper;

use CSF;

defined('ABSPATH') || exit;

class Roavio_Metaboxes
{

	protected static $instance = null;

	private $post_prefix = 'roavio_post_meta';
	private $page_prefix = 'roavio_page_meta';
	private $portfolio_prefix = 'roavio_portfolio_meta';
	private $booking_location_prefix = 'roavio_booking_location_meta';
	private $nav_menu_prefix = 'roavio_nav_menu_meta';
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

		$this->page_metaboxes();
		$this->post_metaboxes();
		$this->portfolio_metaboxes();
		$this->booking_location_metaboxes();
		$this->nav_menu_metaboxes();
	}

	public function page_metaboxes()
	{
		CSF::createMetabox($this->page_prefix, [
			'title'        => esc_html__('Roavio Page Options', 'roavio-toolkit'),
			'post_type'    => 'page',
			'show_restore' => true,
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Layout', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Page Layout', 'roavio-toolkit'),
				],
				[
					'id'       => 'site_layout',
					'type'     => 'select',
					'title'    => esc_html__('Layout', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set the page layout.', 'roavio-toolkit'),
					'options'  => [
						'default'    => esc_html__('Theme Default', 'roavio-toolkit'),
						'full-width' => esc_html__('Full Width', 'roavio-toolkit'),
						'boxed'      => esc_html__('Boxed', 'roavio-toolkit'),
					],
					'default'  => 'default',
				],
				// [
				// 	'id'         => 'content_spacing',
				// 	'type'       => 'spacing',
				// 	'title'      => esc_html__('Content Spacing', 'roavio-toolkit'),
				// 	'show_units' => false,
				// 	'left'       => false,
				// 	'right'      => false,
				// 	'desc'       => esc_html__('Default top: 125px, bottom: 125px', 'roavio-toolkit'),
				// 	'output'     => '.container-gap',
				// ],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Header', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for page header then disable default header', 'roavio-toolkit'),
				],
				[
					'id'       => 'page_default_header',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Header', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable page default header. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',
				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default header. Set your page header form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'page_default_header',
						'==',
						'disabled',
					],
				],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Page Title', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Page Title', 'roavio-toolkit'),
				],
				[
					'id'      => 'page_title',
					'type'    => 'button_set',
					'title'   => esc_html__('Page Title', 'roavio-toolkit'),
					'options' => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default' => 'default',
				],
				[
					'id'         => 'page_title_type',
					'type'       => 'button_set',
					'title'      => esc_html__('Page Title Type', 'roavio-toolkit'),
					'options'    => [
						'default' => esc_html__('Default', 'roavio-toolkit'),
						'custom'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default'    => 'default',
					'dependency' => ['page_title', '!=', 'disabled'],
				],
				[
					'id'         => 'page_custom_title',
					'type'       => 'text',
					'title'      => esc_html__('Custom Title', 'roavio-toolkit'),
					'dependency' => [
						['page_title', '!=', 'disabled'],
						['page_title_type', '==', 'custom'],
					],
				],
				[
					'id'         => 'page_breadcrumb',
					'type'       => 'button_set',
					'title'      => esc_html__('Page Breadcrumb', 'roavio-toolkit'),
					'options'    => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'    => 'default',
					'dependency' => ['page_title', '!=', 'disabled'],
				],
				[
					'id'         => 'customize_page_title_style',
					'type'       => 'button_set',
					'title'      => esc_html__('Customize Style', 'roavio-toolkit'),
					'options'    => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'    => 'no',
					'dependency' => ['page_title', '!=', 'disabled'],
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Page Title Styling', 'roavio-toolkit'),
					'dependency' => [
						['page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'         => 'page_title_bg',
					'type'       => 'background',
					'title'      => esc_html__('Background', 'roavio-toolkit'),
					'output'     => '.page-title-wrapper',
					'dependency' => [
						['page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'          => 'page_title_overly_color',
					'type'        => 'color',
					'title'       => esc_html__('Overly Color', 'roavio-toolkit'),
					'output'      => '.page-title-wrapper::before',
					'output_mode' => 'background-color',
					'dependency'  => [
						['page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_title_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .page-title',
					'line_height_unit' => 'em',
					'dependency'       => [
						['page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_breadcrumb_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Breadcrumb Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .breadcrumb, .page-title-wrapper .breadcrumb a',
					'line_height_unit' => 'em',
					'dependency'       => [
						['page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Footer', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for page footer then disable default footer', 'roavio-toolkit'),
				],
				[
					'id'       => 'page_default_footer',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Footer', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable page default footer. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',
				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default footer. Set your page footer form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'page_default_footer',
						'==',
						'disabled',
					],
				],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Back to Top', 'roavio-toolkit'),
			'fields' => [
				[
					'id'       => 'back_to_top_page',
					'type'     => 'button_set',
					'title'    => esc_html__('Back to Top', 'roavio-toolkit'),
					'subtitle' => esc_html__('Add a back to top button on bottom right corner.', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'disabled',
				],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Color Scheme', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Color Scheme', 'roavio-toolkit'),
				],
				[
					'id'       => 'page_custom_color_scheme',
					'type'     => 'button_set',
					'title'    => esc_html__('Enable Color', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable Page Color Scheme', 'roavio-toolkit'),
					'options'  => [
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'disabled',

				],
				[
					'id'       => 'primary_color',
					'type'     => 'color',
					'title'    => esc_html__('Primary', 'roavio-toolkit'),
					'default'  => '#FC5546',
					'subtitle' => esc_html__('Your main brand color. Used by most elements throughout the website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #FC5546', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'secondary_color',
					'type'     => 'color',
					'title'    => esc_html__('Secondary', 'roavio-toolkit'),
					'default'  => '#021433',
					'subtitle' => esc_html__('Your secondary brand color. Used mainly as hover color or by secondary elements.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #021433', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'blue_color',
					'type'     => 'color',
					'title'    => esc_html__('Blue', 'roavio-toolkit'),
					'default'  => '#021433',
					'subtitle' => esc_html__('Mostly Use in Background Color.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #021433', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'nav_blue_color',
					'type'     => 'color',
					'title'    => esc_html__('Nav Blue', 'roavio-toolkit'),
					'default'  => '#151F39',
					'subtitle' => esc_html__('Mostly Use in Background Color.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #151F39', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'body_color',
					'type'     => 'color',
					'title'    => esc_html__('Body', 'roavio-toolkit'),
					'default'  => '#5B5B5B',
					'subtitle' => esc_html__('A neutral grey, easy to read color, used by all text elements.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #5B5B5B', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'heading_color',
					'type'     => 'color',
					'title'    => esc_html__('Heading', 'roavio-toolkit'),
					'default'  => '#0B0C0C',
					'subtitle' => esc_html__('A dark, contrasting color, used by all headlines in your website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #0B0C0C', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'gray_color',
					'type'     => 'color',
					'title'    => esc_html__('Gray Color', 'roavio-toolkit'),
					'default'  => '#F3F6F9',
					'subtitle' => esc_html__('A common light color for all Gray in your website.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #F3F6F9', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
				[
					'id'       => 'light_neutral',
					'type'     => 'color',
					'title'    => esc_html__('Light Color', 'roavio-toolkit'),
					'default'  => '#F3F6F9',
					'subtitle' => esc_html__('Generally used as background color for light, alternating sections.', 'roavio-toolkit'),
					'desc'     => esc_html__('Default: #F3F6F9', 'roavio-toolkit'),
					'dependency' => [
						'page_custom_color_scheme',
						'==',
						'enabled',
					],
				],
			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Typography', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Typography', 'roavio-toolkit'),
				],
				[
					'id'      => 'custom_typo_type',
					'type'    => 'button_set',
					'title'   => esc_html__('Custom Typography', 'roavio-toolkit'),
					'options' => [
						'default-font' => esc_html__('Default', 'roavio-toolkit'),
						'custom-font'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default' => 'default-font',
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
					'dependency' => [
						'custom_typo_type',
						'==',
						'custom-font',
					],
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
					'dependency' => [
						'custom_typo_type',
						'==',
						'custom-font',
					],
				],

			],
		]);

		CSF::createSection($this->page_prefix, [
			'title'  => esc_html__('Body Class', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Add Body Class', 'roavio-toolkit'),
				],
				[
					'id'       => 'body_class',
					'type'     => 'text',
					'title'    => esc_html__('Body Class', 'roavio-toolkit'),
					'default'  => '',
					'subtitle' => esc_html__('Append a class in body tag', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function post_metaboxes()
	{
		CSF::createMetabox($this->post_prefix, [
			'title'        => esc_html__('Roavio Post Options', 'roavio-toolkit'),
			'post_type'    => 'post',
			'show_restore' => true,
		]);

		CSF::createSection($this->post_prefix, [
			'title'  => esc_html__('Layout', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Post Layout', 'roavio-toolkit'),
				],
				[
					'id'       => 'post_details_layout',
					'type'     => 'select',
					'title'    => esc_html__('Layout', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set the post layout.', 'roavio-toolkit'),
					'options'  => [
						'default'    => esc_html__('Theme Default', 'roavio-toolkit'),
						'full-width' => esc_html__('Full Width', 'roavio-toolkit'),
						'boxed'      => esc_html__('Boxed', 'roavio-toolkit'),
					],
					'default'  => 'default',
				],
				[
					'id'       => 'post_details_sidebar',
					'type'     => 'select',
					'title'    => esc_html__('Sidebar', 'roavio-toolkit'),
					'subtitle' => esc_html__('Select Blog Archive Sidebar. Left sidebar or right sidebar or No sidebar', 'roavio-toolkit'),
					'options'  => [
						'default'       => esc_html__('Theme Default', 'roavio-toolkit'),
						'left-sidebar'  => esc_html__('Left Sidebar', 'roavio-toolkit'),
						'right-sidebar' => esc_html__('Right Sidebar', 'roavio-toolkit'),
						'no-sidebar'    => esc_html__('No Sidebar', 'roavio-toolkit'),
					],
					'default'  => 'right-sidebar',
				],
				// [
				// 	'id'         => 'content_spacing',
				// 	'type'       => 'spacing',
				// 	'title'      => esc_html__('Content Spacing', 'roavio-toolkit'),
				// 	'show_units' => false,
				// 	'left'       => false,
				// 	'right'      => false,
				// 	'desc'       => esc_html__('Default top: 125px, bottom: 125px', 'roavio-toolkit'),
				// 	'output'     => '.container-gap',
				// ],
			],
		]);

		CSF::createSection($this->post_prefix, [
			'title'  => esc_html__('Header', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for post header then disable default header', 'roavio-toolkit'),
				],
				[
					'id'       => 'post_default_header',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Header', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post default header. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',

				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default header. Set your post header form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'post_default_header',
						'==',
						'disabled',
					],
				],
			],
		]);

		CSF::createSection($this->post_prefix, [
			'title'  => esc_html__('Page Title', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Page Title', 'roavio-toolkit'),
				],
				[
					'id'      => 'post_page_title',
					'type'    => 'button_set',
					'title'   => esc_html__('Page Title', 'roavio-toolkit'),
					'options' => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default' => 'default',
				],
				[
					'id'         => 'post_title_type',
					'type'       => 'button_set',
					'title'      => esc_html__('Page Title Type', 'roavio-toolkit'),
					'options'    => [
						'default' => esc_html__('Default', 'roavio-toolkit'),
						'custom'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default'    => 'default',
					'dependency' => ['post_page_title', '!=', 'disabled'],
				],
				[
					'id'         => 'post_custom_title',
					'type'       => 'text',
					'title'      => esc_html__('Custom Title', 'roavio-toolkit'),
					'dependency' => [
						['post_page_title', '!=', 'disabled'],
						['post_title_type', '==', 'custom'],
					],
				],
				[
					'id'         => 'customize_page_title_style',
					'type'       => 'button_set',
					'title'      => esc_html__('Customize Style', 'roavio-toolkit'),
					'options'    => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'    => 'no',
					'dependency' => ['post_page_title', '!=', 'disabled'],
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Page Title Styling', 'roavio-toolkit'),
					'dependency' => [
						['post_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'         => 'page_title_bg',
					'type'       => 'background',
					'title'      => esc_html__('Background', 'roavio-toolkit'),
					'output'     => '.page-title-wrapper',
					'dependency' => [
						['post_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'          => 'post_title_overly_color',
					'type'        => 'color',
					'title'       => esc_html__('Overly Color', 'roavio-toolkit'),
					'output'      => '.page-title-wrapper::before',
					'output_mode' => 'background-color',
					'dependency'  => [
						['post_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_title_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .page-title',
					'line_height_unit' => 'em',
					'dependency'       => [
						['post_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_breadcrumb_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Breadcrumb Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .breadcrumb, .page-title-wrapper .breadcrumb a',
					'line_height_unit' => 'em',
					'dependency'       => [
						['post_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
			],
		]);



		CSF::createSection($this->post_prefix, [
			'title'  => esc_html__('Footer', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for post footer then disable default footer', 'roavio-toolkit'),
				],
				[
					'id'       => 'post_default_footer',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Footer', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post default footer. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',

				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default footer. Set your post footer form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'post_default_footer',
						'==',
						'disabled',
					],
				],
			],
		]);
	}

	public function portfolio_metaboxes()
	{
		CSF::createMetabox($this->portfolio_prefix, [
			'title'        => esc_html__('Roavio Portfolio Options', 'roavio-toolkit'),
			'post_type'    => 'roavio_portfolio',
			'show_restore' => true,
		]);

		CSF::createSection($this->portfolio_prefix, [
			'title'  => esc_html__('Layout', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Post Layout', 'roavio-toolkit'),
				],
				[
					'id'       => 'portfolio_details_layout',
					'type'     => 'select',
					'title'    => esc_html__('Layout', 'roavio-toolkit'),
					'subtitle' => esc_html__('Set the post layout.', 'roavio-toolkit'),
					'options'  => [
						'default'    => esc_html__('Theme Default', 'roavio-toolkit'),
						'full-width' => esc_html__('Full Width', 'roavio-toolkit'),
						'boxed'      => esc_html__('Boxed', 'roavio-toolkit'),
					],
					'default'  => 'default',
				],
				[
					'id'         => 'content_spacing',
					'type'       => 'spacing',
					'title'      => esc_html__('Content Spacing', 'roavio-toolkit'),
					'show_units' => false,
					'left'       => false,
					'right'      => false,
					'desc'       => esc_html__('Default top: 125px, bottom: 125px', 'roavio-toolkit'),
					'output'     => '.container-gap',
				],
			],
		]);

		CSF::createSection($this->portfolio_prefix, [
			'title'  => esc_html__('Header', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for post header then disable default header', 'roavio-toolkit'),
				],
				[
					'id'       => 'portfolio_default_header',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Header', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post default header. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',

				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default header. Set your post header form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'portfolio_default_header',
						'==',
						'disabled',
					],
				],
			],
		]);

		CSF::createSection($this->portfolio_prefix, [
			'title'  => esc_html__('Page Title', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'heading',
					'content' => esc_html__('Page Title', 'roavio-toolkit'),
				],
				[
					'id'      => 'portfolio_page_title',
					'type'    => 'button_set',
					'title'   => esc_html__('Page Title', 'roavio-toolkit'),
					'options' => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default' => 'default',
				],
				[
					'id'         => 'portfolio_page_title_type',
					'type'       => 'button_set',
					'title'      => esc_html__('Page Title Type', 'roavio-toolkit'),
					'options'    => [
						'default' => esc_html__('Default', 'roavio-toolkit'),
						'custom'  => esc_html__('Custom', 'roavio-toolkit'),
					],
					'default'    => 'default',
					'dependency' => ['portfolio_page_title', '!=', 'disabled'],
				],
				[
					'id'         => 'portfolio_custom_title',
					'type'       => 'text',
					'title'      => esc_html__('Custom Title', 'roavio-toolkit'),
					'dependency' => [
						['portfolio_page_title', '!=', 'disabled'],
						['portfolio_page_title_type', '==', 'custom'],
					],
				],
				[
					'id'         => 'portfolio_breadcrumb',
					'type'       => 'button_set',
					'title'      => esc_html__('Page Breadcrumb', 'roavio-toolkit'),
					'options'    => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'    => 'default',
					'dependency' => ['portfolio_page_title', '!=', 'disabled'],
				],
				[
					'id'         => 'customize_page_title_style',
					'type'       => 'button_set',
					'title'      => esc_html__('Customize Style', 'roavio-toolkit'),
					'options'    => [
						'yes' => esc_html__('Yes', 'roavio-toolkit'),
						'no'  => esc_html__('No', 'roavio-toolkit'),
					],
					'default'    => 'no',
					'dependency' => ['portfolio_page_title', '!=', 'disabled'],
				],
				[
					'type'       => 'subheading',
					'content'    => esc_html__('Page Title Styling', 'roavio-toolkit'),
					'dependency' => [
						['portfolio_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'         => 'page_title_bg',
					'type'       => 'background',
					'title'      => esc_html__('Background', 'roavio-toolkit'),
					'output'     => '.page-title-wrapper',
					'dependency' => [
						['portfolio_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'          => 'post_title_overly_color',
					'type'        => 'color',
					'title'       => esc_html__('Overly Color', 'roavio-toolkit'),
					'output'      => '.page-title-wrapper::before',
					'output_mode' => 'background-color',
					'dependency'  => [
						['portfolio_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_title_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .page-title',
					'line_height_unit' => 'em',
					'dependency'       => [
						['portfolio_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
				[
					'id'               => 'page_breadcrumb_typo',
					'type'             => 'typography',
					'title'            => esc_html__('Breadcrumb Typography', 'roavio-toolkit'),
					'output'           => '.page-title-wrapper .breadcrumb, .page-title-wrapper .breadcrumb a',
					'line_height_unit' => 'em',
					'dependency'       => [
						['portfolio_page_title', '!=', 'disabled'],
						['customize_page_title_style', '==', 'yes'],
					],
				],
			],
		]);

		CSF::createSection($this->portfolio_prefix, [
			'title'  => esc_html__('Summary Text', 'roavio-toolkit'),
			'fields' => [
				[
					'id'          => 'summary_text',
					'type'        => 'textarea',
					'title'       => esc_html__('Summary Text', 'roavio-toolkit'),
					'placeholder' => esc_html__('Enter a summary text.', 'roavio-toolkit'),
				],
			],
		]);

		CSF::createSection($this->portfolio_prefix, [
			'title'  => esc_html__('Footer', 'roavio-toolkit'),
			'fields' => [
				[
					'type'    => 'notice',
					'style'   => 'info',
					'content' => esc_html__('If you used theme builder for post footer then disable default footer', 'roavio-toolkit'),
				],
				[
					'id'       => 'portfolio_default_footer',
					'type'     => 'button_set',
					'title'    => esc_html__('Default Footer', 'roavio-toolkit'),
					'subtitle' => esc_html__('Enable or Disable post default footer. Default comes form theme option', 'roavio-toolkit'),
					'options'  => [
						'default'  => esc_html__('Default', 'roavio-toolkit'),
						'enabled'  => esc_html__('Enable', 'roavio-toolkit'),
						'disabled' => esc_html__('Disable', 'roavio-toolkit'),
					],
					'default'  => 'default',

				],
				[
					'type'       => 'notice',
					'style'      => 'warning',
					'content'    => esc_html__('You disabled default footer. Set your post footer form ', 'roavio-toolkit') . '<a href="' . esc_url($this->template_builder_url) . '">' . esc_html__('here', 'roavio-toolkit') . '</a>',
					'dependency' => [
						'portfolio_default_footer',
						'==',
						'disabled',
					],
				],
			],
		]);
	}

	public function booking_location_metaboxes()
	{
		CSF::createTaxonomyOptions($this->booking_location_prefix, [
			'title'        => esc_html__('Location Options', 'roavio-toolkit'),
			'taxonomy'  => 'ba_location',
			'show_restore' => true,
		]);

		CSF::createSection($this->booking_location_prefix, [
			'fields' => [
				[
					'id'          => 'address',
					'type'        => 'text',
					'title'       => esc_html__('Address', 'roavio-toolkit'),
					'placeholder' => esc_html__('Address', 'roavio-toolkit'),
				],
			],
		]);
	}

	public function nav_menu_metaboxes()
	{
		CSF::createNavMenuOptions($this->nav_menu_prefix);

		CSF::createSection($this->nav_menu_prefix, [
			'title'  => esc_html__('Roavio Options', 'roavio-toolkit'),
			'fields' => [
				[
					'id'      => 'nav_icon_type',
					'type'    => 'button_set',
					'title'   => esc_html__('Icon Type', 'roavio-toolkit'),
					'options' => [
						'font_icon'  => esc_html__('Font Icon', 'roavio-toolkit'),
						'image_icon' => esc_html__('Image Icon', 'roavio-toolkit'),
						'none'       => esc_html__('None', 'roavio-toolkit'),
					],
					'default' => 'none'
				],
				[
					'id'         => 'nav_font_icon',
					'type'       => 'icon',
					'title'      => esc_html__('Font Icon', 'roavio-toolkit'),
					'dependency' => [
						'nav_icon_type',
						'==',
						'font_icon',
					],
				],
				[
					'id'           => 'nav_image_icon',
					'type'         => 'media',
					'title'        => esc_html__('Image', 'roavio-toolkit'),
					'library'      => 'image',
					'preview_size' => 'thumbnail',
					'dependency'   => [
						'nav_icon_type',
						'==',
						'image_icon',
					],
				],
				[
					'id'         => 'nav_icon_color',
					'type'       => 'color',
					'title'      => esc_html__('Icon Color', 'roavio-toolkit'),
					'dependency' => [
						'nav_icon_type',
						'==',
						'font_icon',
					],
				],
				[
					'id'         => 'nav_icon_position',
					'type'       => 'select',
					'title'      => esc_html__('Icon Position', 'roavio-toolkit'),
					'options'    => [
						'left'  => esc_html__('Left', 'roavio-toolkit'),
						'right' => esc_html__('Right', 'roavio-toolkit'),
					],
					'dependency' => [
						'nav_icon_type',
						'!=',
						'none',
					],
				],
				[
					'id'          => 'nav_menu_badge',
					'type'        => 'text',
					'title'       => esc_html__('Badge', 'roavio-toolkit'),
					'placeholder' => esc_html__('Enter a nav menu badge. Example "New"', 'roavio-toolkit'),
				],
				[
					'id'         => 'nav_badge_color',
					'type'       => 'color',
					'title'      => esc_html__('Badge Color', 'roavio-toolkit'),
					'dependency' => [
						'nav_menu_badge',
						'!=',
						'',
					],
				],
				// [
				// 	'id'      => 'simple_mega_menu',
				// 	'type'    => 'switcher',
				// 	'title'   => esc_html__('Use Simple Menu', 'roavio-toolkit'),
				// 	'default' => false,
				// 	'class'   => 'simple-mega-menu-meta'
				// ],
				// [
				// 	'id'         => 'simple_mega_menu_width',
				// 	'type'       => 'select',
				// 	'title'      => esc_html__('Mega Menu Width', 'roavio-toolkit'),
				// 	'options'    => [
				// 		'auto'      => esc_html__('Auto', 'roavio-toolkit'),
				// 		'menu-area' => esc_html__('Menu Area', 'roavio-toolkit'),
				// 	],
				// 	'default'    => 'auto',
				// 	'dependency' => [
				// 		'simple_mega_menu',
				// 		'==',
				// 		'true',
				// 	],
				// 	'class'      => 'simple-mega-menu-meta'
				// ]
			],
		]);
	}
}

Roavio_Metaboxes::instance();
