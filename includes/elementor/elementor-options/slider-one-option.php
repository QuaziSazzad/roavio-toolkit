<?php

//content
$this->start_controls_section(
	'layout_one_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

// Slider Content Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_slide_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_one_slide_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Turning your travel dreams into reality', 'roavio-toolkit'),
		'default' => esc_html__('Turning your travel dreams into reality', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_slide_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Unleash your inner explorer with us! At ROAVIO, we craft unforgettable adventures tailored', 'roavio-toolkit'),
		'default' => esc_html__('Unleash your inner explorer with us! At ROAVIO, we craft unforgettable adventures tailored', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_slide_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore Destinations', 'roavio-toolkit'),
		'placeholder' => esc_html__('Button Text', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_slide_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

// Counter Items
$repeater->add_control(
	'layout_one_counter_heading',
	[
		'label' => esc_html__('Counter Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater->add_control(
	'layout_one_counter_number_1',
	[
		'label' => esc_html__('Counter Number 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '500',
		'placeholder' => esc_html__('Enter number', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_suffix_1',
	[
		'label' => esc_html__('Counter Suffix 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'placeholder' => esc_html__('Enter suffix', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_text_1',
	[
		'label' => esc_html__('Counter Text 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore 500+ Destinations', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter text', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_number_2',
	[
		'label' => esc_html__('Counter Number 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '10',
		'placeholder' => esc_html__('Enter number', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_suffix_2',
	[
		'label' => esc_html__('Counter Suffix 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'placeholder' => esc_html__('Enter suffix', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_counter_text_2',
	[
		'label' => esc_html__('Counter Text 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Years of experience', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter text', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_slides',
	[
		'label' => esc_html__('Slider Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_slide_title' => esc_html__('Turning your travel dreams into reality', 'roavio-toolkit'),
				'layout_one_slide_description' => esc_html__('Unleash your inner explorer with us! At ROAVIO, we craft unforgettable adventures tailored', 'roavio-toolkit'),
				'layout_one_slide_button_text' => esc_html__('Explore Destinations', 'roavio-toolkit'),
				'layout_one_counter_number_1' => '500',
				'layout_one_counter_suffix_1' => '+',
				'layout_one_counter_text_1' => esc_html__('Explore 500+ Destinations', 'roavio-toolkit'),
				'layout_one_counter_number_2' => '10',
				'layout_one_counter_suffix_2' => '+',
				'layout_one_counter_text_2' => esc_html__('Years of experience', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_slide_title }}}',
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Title HTML Tag', 'roavio-toolkit'),
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
		'separator' => 'before',
	]
);

// Slider Settings
$this->add_control(
	'layout_one_slider_settings_heading',
	[
		'label' => esc_html__('Slider Settings', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_autoplay',
	[
		'label' => esc_html__('Autoplay', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_autoplay_speed',
	[
		'label' => esc_html__('Autoplay Speed', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'min' => 1000,
		'max' => 10000,
		'step' => 500,
		'default' => 5000,
		'condition' => [
			'layout_one_autoplay' => 'yes',
		],
	]
);

$this->add_control(
	'layout_one_loop',
	[
		'label' => esc_html__('Loop', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_navigation',
	[
		'label' => esc_html__('Navigation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_pagination',
	[
		'label' => esc_html__('Pagination', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);



$this->end_controls_section();
