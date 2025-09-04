<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use RoavioToolkit\ElementorAddon\Templates\Portfolio as PortfolioTemplate;
use RoavioToolkit\ElementorAddon\Traits\Carousel_Helper;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;

class Portfolio extends Widget_Base
{

	use Carousel_Helper;

	public function get_name()
	{
		return 'roavio-portfolio';
	}

	public function get_title()
	{
		return esc_html__('Portfolio', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-gallery-grid webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'portfolio', 'project'];
	}

	public function get_style_depends()
	{
		return ['slick'];
	}

	public function get_script_depends()
	{
		return ['slick'];
	}

	protected function register_controls()
	{

		$this->start_controls_section(
			'layout_section',
			[
				'label' => __('Layout', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'layout_type',
			[
				'label' => __('Select Layout', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'layout_one',
				'options' => [
					'layout_one' => __('Layout One', 'roavio-toolkit'),
					'layout_two' => __('Layout Two', 'roavio-toolkit'),
					'layout_three' => __('Layout Three', 'roavio-toolkit'),
					'layout_four' => __('Layout Four', 'roavio-toolkit'),
					'layout_five' => __('Layout Five', 'roavio-toolkit'),
					'layout_six' => __('Layout Six', 'roavio-toolkit'),
				]
			]
		);

		$this->add_control(
			'portfolio_type',
			[
				'label'       => esc_html__('Portfolio Type', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT,
				'label_block' => false,
				'options'     => [
					'cpt'   => esc_html__('Custom Post Type', 'roavio-toolkit'),
					'elementor-field'   => esc_html__('With Elementor', 'roavio-toolkit'),
				],
				'default'     => 'cpt',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'layout_header_section',
			[
				'label' => __('Header Section', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'layout_type' => ['layout_three', 'layout_five', 'layout_six']
				]
			]
		);

		$this->add_control(
			'layout_one_title',
			[
				'label' => esc_html__('Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
				'default' => esc_html__('Default Title', 'roavio-toolkit'),
			]
		);

		$this->add_control(
			'layout_one_title_tag',
			[
				'label'       => esc_html__('Title Tag', 'roavio-toolkit'),
				'type'        => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => false,
				'options'     => [
					'h1' => [
						'title' => esc_html__('H1', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h1',
					],
					'h2' => [
						'title' => esc_html__('H2', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => esc_html__('H3', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => esc_html__('H4', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => esc_html__('H5', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h5',
					],
					'h6' => [
						'title' => esc_html__('H6', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h6',
					],
				],
				'default'     => 'h2',
				'toggle'      => false,
			]
		);

		$this->add_control(
			'layout_one_sub_title',
			[
				'label' => esc_html__('Sub Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
				'default' => esc_html__('Default Sub Title', 'roavio-toolkit'),
				'condition' => [
					'layout_type!' =>  'layout_six'
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'widget_content',
			[
				'label' => esc_html__('General', 'roavio-toolkit'),
			]
		);

		$this->add_control(
			'title_tag',
			[
				'label'       => esc_html__('Title Tag', 'roavio-toolkit'),
				'type'        => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options'     => [
					'h2' => [
						'title' => esc_html__('H2', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => esc_html__('H3', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => esc_html__('H4', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => esc_html__('H5', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h5',
					],
					'h6' => [
						'title' => esc_html__('H6', 'roavio-toolkit'),
						'icon'  => 'eicon-editor-h6',
					],
				],
				'default'     => 'h3',
				'toggle'      => false,
				'separator'   => 'before',
			]
		);

		$this->add_control(
			'title_word',
			[
				'label'   => esc_html__('Title Length', 'roavio-toolkit'),
				'type'    => Controls_Manager::NUMBER,
				'default' => 5,
			]
		);

		$this->add_control(
			'show_excerpt',
			[
				'label'        => esc_html__('Show Excerpt', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => esc_html__('Show', 'roavio-toolkit'),
				'label_off'    => esc_html__('Hide', 'roavio-toolkit'),
				'return_value' => 'yes',
				'default'      => 'yes',
				'condition'    => [
					'design' => ['design-three', 'design-four']
				]
			]
		);

		$this->add_control(
			'excerpt_word',
			[
				'label'     => esc_html__('Excerpt Word', 'roavio-toolkit'),
				'type'      => Controls_Manager::NUMBER,
				'min'       => 0,
				'max'       => 50,
				'step'      => 1,
				'default'   => 15,
				'condition' => [
					'design'       => ['design-three', 'design-four'],
					'show_excerpt' => 'yes'
				]
			]
		);

		$this->add_control(
			'show_category',
			[
				'label'        => esc_html__('Show Category', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
				'label_off'    => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'separator'    => 'before',
			]
		);

		$this->add_control(
			'read_more',
			[
				'label'        => esc_html__('Read More Button', 'roavio-toolkit'),
				'type'         => Controls_Manager::TEXT,
				'default'      => esc_html__('Case Details', 'roavio-toolkit'),
				'condition'    => [
					'layout_type' => ['layout_two', 'layout_three']
				]
			]
		);


		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name'    => 'post_thumbnail',
				'default' => 'large',
				'condition' => [
					'portfolio_type' => 'cpt'
				],
				'exclude' => [
					'custom',
				],
			],

		);

		$this->add_control(
			'layout_five_enable_filter',
			[
				'label' => esc_html__('Enable Filter', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Yes', 'roavio-toolkit'),
				'label_off' => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'layout_five_show_all_text',
			[
				'label' => esc_html__('Show All Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Show All', 'roavio-toolkit'),
				'label_block' => true,
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'query_content',
			[
				'label' => esc_html__('Query', 'roavio-toolkit'),
				'condition' => [
					'portfolio_type' => 'cpt'
				]
			]
		);

		$this->add_control(
			'post_from',
			[
				'label'   => esc_html__('Portfolio From', 'roavio-toolkit'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'all'           => esc_html__('All Posts', 'roavio-toolkit'),
					'categories'    => esc_html__('Categories', 'roavio-toolkit'),
					'specific-post' => esc_html__('Specific Posts', 'roavio-toolkit'),
				],
				'default' => 'all',
			]
		);

		$this->add_control(
			'post_ids',
			[
				'label'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('roavio_portfolio'),
				'multiple'    => true,
				'label_block' => true,
				'condition'   => [
					'post_from' => 'specific-post',
				],
			]
		);

		$this->add_control(
			'cat_slugs',
			[
				'label'       => esc_html__('Select Categories', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_category('roavio_portfolio_category'),
				'multiple'    => true,
				'label_block' => true,
				'condition'   => [
					'post_from' => 'categories',
				],
			]
		);

		$this->add_control(
			'post_limit',
			[
				'label'   => esc_html__('Limit Item', 'roavio-toolkit'),
				'type'    => Controls_Manager::NUMBER,
				'default' => 6,
				'min'     => 1,
			]
		);

		$this->add_control(
			'order_by',
			[
				'label'   => esc_html__('Order By', 'roavio-toolkit'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'ID'     => esc_html__('ID', 'roavio-toolkit'),
					'author' => esc_html__('Author', 'roavio-toolkit'),
					'title'  => esc_html__('Title', 'roavio-toolkit'),
					'date'   => esc_html__('Date', 'roavio-toolkit'),
					'rand'   => esc_html__('Random', 'roavio-toolkit'),
				],
				'default' => 'date',
			]
		);

		$this->add_control(
			'sort_order',
			[
				'label'   => esc_html__('Sort Order', 'roavio-toolkit'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'ASC'  => esc_html__('Ascending', 'roavio-toolkit'),
					'DESC' => esc_html__('Descending', 'roavio-toolkit'),
				],
				'default' => 'DESC',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'custom_elementor_portfolio_list',
			[
				'label' => esc_html__('Portfolio With Elementor ', 'roavio-toolkit'),
				'condition' => [
					'portfolio_type' => 'elementor-field'
				]
			]
		);

		$layout_one_portfolio_list = new \Elementor\Repeater();

		$layout_one_portfolio_list->add_control(
			'select_portfolio',
			[
				'label'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('roavio_portfolio'),
				'label_block' => true,
			]
		);

		$layout_one_portfolio_list->add_control(
			'title',
			[
				'label' => esc_html__('Custom Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => '2',
				'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
				'default' => esc_html__('Website Development', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default title', 'roavio-toolkit'),
				'label_block' => true
			]
		);

		$layout_one_portfolio_list->add_control(
			'summary',
			[
				'label' => esc_html__('Custom Summary', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => '2',
				'placeholder' => esc_html__('Add Summary', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default summary', 'roavio-toolkit'),
				'label_block' => true
			]
		);


		$layout_one_portfolio_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_one_portfolio_list',
			[
				'label' => esc_html__('Portfolio List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_one_portfolio_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => ['layout_one']
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$layout_two_portfolio_list = new \Elementor\Repeater();

		$layout_two_portfolio_list->add_control(
			'select_portfolio',
			[
				'label'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('roavio_portfolio'),
				'label_block' => true,
			]
		);

		$layout_two_portfolio_list->add_control(
			'title',
			[
				'label' => esc_html__('Custom Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => '2',
				'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
				'default' => esc_html__('Website Development', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default title', 'roavio-toolkit'),
				'label_block' => true
			]
		);

		$layout_two_portfolio_list->add_control(
			'summary',
			[
				'label' => esc_html__('Custom Summary', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => '2',
				'placeholder' => esc_html__('Add Summary', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default title', 'roavio-toolkit'),
				'label_block' => true
			]
		);

		$layout_two_portfolio_list->add_control(
			'read_more',
			[
				'label' => esc_html__('Read More', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => '2',
				'placeholder' => esc_html__('Add Read More', 'roavio-toolkit'),
				'default' => esc_html__('Case Details', 'roavio-toolkit'),
				'label_block' => true
			]
		);


		$layout_two_portfolio_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_two_portfolio_list',
			[
				'label' => esc_html__('Portfolio List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_two_portfolio_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => ['layout_two', 'layout_three']
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$layout_three_portfolio_list = new \Elementor\Repeater();

		$layout_three_portfolio_list->add_control(
			'select_portfolio',
			[
				'label'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('roavio_portfolio'),
				'label_block' => true,
			]
		);

		$layout_three_portfolio_list->add_control(
			'title',
			[
				'label' => esc_html__('Custom Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => '2',
				'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
				'default' => esc_html__('Website Development', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default title', 'roavio-toolkit'),
				'label_block' => true
			]
		);


		$layout_three_portfolio_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_three_portfolio_list',
			[
				'label' => esc_html__('Portfolio List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_three_portfolio_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => 'layout_four'
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$layout_five_portfolio_list = new \Elementor\Repeater();

		$layout_five_portfolio_list->add_control(
			'select_portfolio',
			[
				'label'       => esc_html__('Select Portfolio', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('roavio_portfolio'),
				'label_block' => true,
			]
		);

		$layout_five_portfolio_list->add_control(
			'title',
			[
				'label' => esc_html__('Custom Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => '2',
				'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
				'default' => esc_html__('Website Development', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty to use default title', 'roavio-toolkit'),
				'label_block' => true
			]
		);

		$layout_five_portfolio_list->add_control(
			'column_size',
			[
				'label'                => esc_html__('Set Column Base On Bootstrap', 'roavio-toolkit'),
				'type'                 => \Elementor\Controls_Manager::SELECT,
				'options'              => [
					'2' => esc_html__('2 column', 'roavio-toolkit'),
					'3' => esc_html__('3 column', 'roavio-toolkit'),
					'4' => esc_html__('4 column', 'roavio-toolkit'),
					'6' => esc_html__('6 column', 'roavio-toolkit'),
					'8' => esc_html__('8 column', 'roavio-toolkit'),
				],
				'default' => '4',
			]
		);


		$layout_five_portfolio_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_five_portfolio_list',
			[
				'label' => esc_html__('Portfolio List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_five_portfolio_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => 'layout_five'
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'more_portfolio_section',
			[
				'label' => esc_html__('More Portfolio Button', 'roavio-toolkit'),
				'condition' => [
					'layout_type' => ['layout_ten']
				]
			]
		);

		$this->add_control(
			'more_portfolio_button_label',
			[
				'label' => esc_html__('Button Label', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Explore Projects', 'roavio-toolkit'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'more_portfolio_button_url',
			[
				'label' => esc_html__('Button Url', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('#', 'roavio-toolkit'),
				'show_external' => false,
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'show_label' => false,
			]
		);

		$this->end_controls_section();

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .section-title h2', ['layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title .sub-title, {{WRAPPER}} .case-top-wrap p', ['layout_three', 'layout_five']);

		roavio_elementor_style_options($this, 'Portfolio Title', '{{WRAPPER}} .feature-item.style-two .content .title a, {{WRAPPER}} .title a,{{WRAPPER}} .project-item-two .content h4 a, {{WRAPPER}} .content a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Portfolio Category', '{{WRAPPER}} .feature-item.style-two .content .tags a,{{WRAPPER}} .case-item .content .tag, {{WRAPPER}} .tag,{{WRAPPER}} .case-item-two span ', ['layout_one', 'layout_two', 'layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Portfolio Category Bg', '{{WRAPPER}} .feature-item.style-two .content .tags a, {{WRAPPER}} .tag', ['layout_one'], 'background-color');

		roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .feature-item .content p, {{WRAPPER}} .inner-content p, {{WRAPPER}} .content p', ['layout_one', 'layout_three']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_two', 'layout_three'],
				],
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => esc_html__('Text Color', 'roavio-toolkit'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_control(
			'button_bg',
			[
				'label'     => esc_html__('Background Color', 'roavio-toolkit'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn, a.theme-btn' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_color',
			[
				'label'     => esc_html__('Hover Color', 'roavio-toolkit'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);


		$this->add_control(
			'button_hover_bg',
			[
				'label'     => esc_html__('Hover Background Color', 'roavio-toolkit'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'selector' => '{{WRAPPER}} .theme-btn',
				'label' => esc_html__(' Typography', 'roavio-addon'),
			]
		);

		$this->end_controls_section();

		$this->register_arrows_options(['layout_condition' => true]);

		$this->register_dots_options(['layout_condition' => true]);
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('portfolio-one.php');
		include rt_get_elementor_template('portfolio-two.php');
		include rt_get_elementor_template('portfolio-three.php');
		include rt_get_elementor_template('portfolio-four.php');
		include rt_get_elementor_template('portfolio-five.php');
		include rt_get_elementor_template('portfolio-six.php');

?>

<?php
	}
}
