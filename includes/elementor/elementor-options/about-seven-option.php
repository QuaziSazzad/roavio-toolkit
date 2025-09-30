<?php

//content
$this->start_controls_section(
	'layout_seven_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_seven'
		]
	]
);


$this->add_control(
	'layout_seven_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Dedicated travel specialists your dream tours care', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_seven_title_tag',
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
	'layout_seven_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We provide personalized guidance to ensure every journey is smooth, enjoyable, and unforgettable. From planning the perfect itinerary to offering 24/7 support, our trusted specialists are here to make your travel experience truly exceptional.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// First Feature Box
$this->add_control(
	'layout_seven_feature_one_heading',
	[
		'label' => esc_html__('First Feature Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_seven_feature_one_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_seven_feature_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Travel Specialists', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_seven_feature_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Our travel specialists bring years of expertise.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_seven_feature_one_btn_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Meet Our Team', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_seven_feature_one_btn_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

// Second Feature Box
$this->add_control(
	'layout_seven_feature_two_heading',
	[
		'label' => esc_html__('Second Feature Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_seven_feature_two_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-destination',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_seven_feature_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Trusted & secure', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_seven_feature_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('At our travel agency, your safety and trust priorities', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Feature Image
$this->add_control(
	'layout_seven_feature_image_heading',
	[
		'label' => esc_html__('Feature Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_seven_feature_image',
	[
		'label' => esc_html__('Feature Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Main Image
$this->add_control(
	'layout_seven_main_image_heading',
	[
		'label' => esc_html__('Main Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_seven_main_image',
	[
		'label' => esc_html__('Main Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
