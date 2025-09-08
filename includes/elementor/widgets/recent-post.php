<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use RoavioToolkit\ElementorAddon\Templates\Posts;
use RoavioToolkit\ElementorAddon\Traits\Carousel_Helper;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;


class Recent_Post extends Widget_Base
{

	use Carousel_Helper;

	public function get_name()
	{
		return 'roavio-recent-post';
	}

	public function get_title()
	{
		return esc_html__('Recent Post', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-posts-grid webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'recent', 'blog', 'post'];
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
				]
			]
		);

		$this->add_control(
			'post_type',
			[
				'label'       => esc_html__('Post Type', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT,
				'label_block' => false,
				'options'     => [
					'cpt'   => esc_html__('Blog Type', 'roavio-toolkit'),
					'elementor-field'   => esc_html__('With Elementor', 'roavio-toolkit'),
				],
				'default'     => 'cpt',
				'condition' => [
					'layout_type!' => 'layout_six',
				]

			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'layout_header_section',
			[
				'label' => __('Header Section', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'layout_type!' => 'layout_six',
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
				'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__('H1', 'roavio-toolkit'),
					'h2' => esc_html__('H2', 'roavio-toolkit'),
					'h3' => esc_html__('H3', 'roavio-toolkit'),
					'h4' => esc_html__('H4', 'roavio-toolkit'),
					'h5' => esc_html__('H5', 'roavio-toolkit'),
					'h6' => esc_html__('H6', 'roavio-toolkit'),
					'div' => esc_html__('div', 'roavio-toolkit'),
					'span' => esc_html__('span', 'roavio-toolkit'),
					'p' => esc_html__('p', 'roavio-toolkit'),
				],
			]
		);

		$this->add_control(
			'layout_one_sub_title',
			[
				'label' => esc_html__('Sub Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
				'default' => esc_html__('Default Sub Title', 'roavio-toolkit'),
			]
		);

		$this->add_control(
			'layout_one_sub_title_tag',
			[
				'label' => esc_html__('Sub Title Tag', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'p',
				'options' => [
					'h1' => esc_html__('H1', 'roavio-toolkit'),
					'h2' => esc_html__('H2', 'roavio-toolkit'),
					'h3' => esc_html__('H3', 'roavio-toolkit'),
					'h4' => esc_html__('H4', 'roavio-toolkit'),
					'h5' => esc_html__('H5', 'roavio-toolkit'),
					'h6' => esc_html__('H6', 'roavio-toolkit'),
					'div' => esc_html__('div', 'roavio-toolkit'),
					'span' => esc_html__('span', 'roavio-toolkit'),
					'p' => esc_html__('p', 'roavio-toolkit'),
				],
			]
		);


		$this->add_control(
			'layout_one_summary_text',
			[
				'label' => esc_html__('Summary Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__('Add Summary Text', 'roavio-toolkit'),
				'default' => esc_html__('Default Summary Text', 'roavio-toolkit'),
				'condition' => [
					'layout_type' => 'layout_three',
				]
			]
		);

		$this->add_control(
			'layout_one_button_label',
			[
				'label' => esc_html__('Button Label', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('View More Blog', 'roavio-toolkit'),
				'label_block' => true,
				'condition' => [
					'layout_type' => 'layout_three',
				]
			]
		);

		$this->add_control(
			'layout_one_button_url',
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
				'condition' => [
					'layout_type' => 'layout_three',
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
			]
		);

		$this->add_control(
			'title_word',
			[
				'label'   => esc_html__('Title Length', 'roavio-toolkit'),
				'type'    => Controls_Manager::NUMBER,
				'default' => 8,
			]
		);

		$this->add_control(
			'show_excerpt',
			[
				'label'        => esc_html__('Show Excerpt?', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
				'label_off'    => esc_html__('No', 'roavio-toolkit'),
				'default'      => 'yes',
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'excerpt_count',
			[
				'label'     => esc_html__('Excerpt Word', 'roavio-toolkit'),
				'type'      => Controls_Manager::NUMBER,
				'default'   => 12,
				'condition' => [
					'show_excerpt' => 'yes',
				],
			]
		);

		$this->add_control(
			'show_read_more',
			[
				'label'        => esc_html__('Show Read More', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
				'label_off'    => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'separator'    => 'before',
			]
		);

		$this->add_control(
			'read_more_text',
			[
				'label'     => esc_html__('Read More Text', 'roavio-toolkit'),
				'type'      => Controls_Manager::TEXT,
				'default'   => esc_html__('Read More', 'roavio-toolkit'),
				'condition' => [
					'show_read_more' => 'yes',
				],
			]
		);

		$this->add_control(
			'show_thumbnail',
			[
				'label'        => esc_html__('Show Thumbnail?', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
				'label_off'    => esc_html__('No', 'roavio-toolkit'),
				'default'      => 'yes',
				'return_value' => 'yes',
				'separator'    => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name'      => 'post_thumbnail',
				'default'   => 'large',
				'exclude'   => [
					'custom',
				],
				'condition' => [
					'show_thumbnail' => 'yes',
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'left_post_content',
			[
				'label' => esc_html__('Left Post', 'roavio-toolkit'),
				'condition' => [
					'layout_type' => 'layout_five'
				]
			]
		);

		$this->add_control(
			'select_left_post',
			[
				'label'       => esc_html__('Select Left Posts', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post(),
				'label_block' => true,
			]
		);

		$this->add_control(
			'left_post_custom_title',
			[
				'label'   => esc_html__('Custom Title', 'roavio-toolkit'),
				'type'    => Controls_Manager::TEXTAREA,
				'default' => esc_html__('Default Title', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty if you want to use default', 'roavio-toolkit'),
			]
		);

		$this->add_control(
			'left_post_custom_summary_text',
			[
				'label'   => esc_html__('Custom Summary Text', 'roavio-toolkit'),
				'type'    => Controls_Manager::TEXTAREA,
				'default' => esc_html__('Default Text', 'roavio-toolkit'),
				'description' => esc_html__('Keep empty if you want to use default', 'roavio-toolkit'),
			]
		);

		$this->add_control(
			'left_post_custom_image',
			[
				'label' => esc_html__('Custom Image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'query_content',
			[
				'label' => esc_html__('Query', 'roavio-toolkit'),
				'condition' => [
					'post_type' => 'cpt'
				]
			]
		);

		$this->add_control(
			'post_from',
			[
				'label'   => esc_html__('Post From', 'roavio-toolkit'),
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
				'label'       => esc_html__('Select Posts', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post(),
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
				'options'     => rt_select_category(),
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
				'default' => 3,
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

		$this->add_control(
			'show_pagination',
			[
				'label'        => esc_html__('Show Pagination', 'roavio-toolkit'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
				'label_off'    => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'condition'    => [
					'layout_type' => ['layout_six'],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'custom_elementor_post_list',
			[
				'label' => esc_html__('Post With Elementor ', 'roavio-toolkit'),
				'condition' => [
					'post_type' => 'elementor-field'
				]
			]
		);

		$layout_one_post_list = new \Elementor\Repeater();

		$layout_one_post_list->add_control(
			'select_post',
			[
				'label'       => esc_html__('Select Post', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('post'),
				'label_block' => true,
			]
		);

		$layout_one_post_list->add_control(
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


		$layout_one_post_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_one_post_list',
			[
				'label' => esc_html__('Post List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_one_post_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three'],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$layout_four_post_list = new \Elementor\Repeater();

		$layout_four_post_list->add_control(
			'select_post',
			[
				'label'       => esc_html__('Select Post', 'roavio-toolkit'),
				'type'        => Controls_Manager::SELECT2,
				'options'     => rt_select_post('post'),
				'label_block' => true,
			]
		);

		$layout_four_post_list->add_control(
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


		$layout_four_post_list->add_control(
			'image',
			[
				'label' => esc_html__('image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);

		$this->add_control(
			'layout_four_post_list',
			[
				'label' => esc_html__('Post List', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $layout_four_post_list->get_controls(),
				'prevent_empty' => false,
				'condition' => [
					'layout_type' => ['layout_four', 'layout_five'],
				],
				'title_field' => '{{{ title }}}',
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

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .section-title h2', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title .sub-title,{{WRAPPER}} .subtitle', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);

		roavio_elementor_style_options($this, 'Post Title', '{{WRAPPER}} .title a,{{WRAPPER}} .blog-four-item .content h5', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Category', '{{WRAPPER}} .blog-meta li:first-child a', ['layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .blog-item .content p, {{WRAPPER}} .summary-text, {{WRAPPER}} .content p', ['layout_one', 'layout_two', 'layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Author', '{{WRAPPER}} .blog-item-five .content .author a,{{WRAPPER}} .blog-meta li:first-child a', ['layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Date', '{{WRAPPER}} .blog-meta li:last-child a, {{WRAPPER}} .content .blog-meta li:not(:first-child)', ['layout_one', 'layout_two', 'layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Read More', '{{WRAPPER}} .read-more', ['layout_one', 'layout_two', 'layout_four', 'layout_five']);

		roavio_elementor_style_options($this, 'Meta', '{{WRAPPER}} .content .blog-meta li,{{WRAPPER}} .blog-item-five .content .blog-meta li a ', ['layout_four']);

		$this->end_controls_section();


		$this->register_arrows_options(['layout_condition' => true]);

		$this->register_dots_options(['layout_condition' => true]);
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('recent-post-one.php');
		// include rt_get_elementor_template('recent-post-two.php');
		// include rt_get_elementor_template('recent-post-three.php');
		// include rt_get_elementor_template('recent-post-four.php');
		// include rt_get_elementor_template('recent-post-five.php');
	}
}
