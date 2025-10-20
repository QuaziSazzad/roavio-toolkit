<?php


//content
$this->start_controls_section(
	'layout_three_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_three'
		]
	]
);


// Page Title
$this->add_control(
	'layout_three_page_title',
	[
		'label' => esc_html__('Page Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Gallery', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Page Title Tag
$this->add_control(
	'layout_three_title_tag',
	[
		'label' => esc_html__('Page Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h1',
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

// Show Breadcrumb
$this->add_control(
	'layout_three_show_breadcrumb',
	[
		'label' => esc_html__('Show Breadcrumb', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

// Home Text
$this->add_control(
	'layout_three_home_text',
	[
		'label' => esc_html__('Home Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Home', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_three_show_breadcrumb' => 'yes'
		]
	]
);

// Home URL
$this->add_control(
	'layout_three_home_url',
	[
		'label' => esc_html__('Home URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => home_url('/'),
			'is_external' => false,
			'nofollow' => false,
		],
		'condition' => [
			'layout_three_show_breadcrumb' => 'yes'
		]
	]
);

// Current Page Text
$this->add_control(
	'layout_three_current_page_text',
	[
		'label' => esc_html__('Current Page Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Gallery', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_three_show_breadcrumb' => 'yes'
		]
	]
);

// Background Image
$this->add_control(
	'layout_three_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
