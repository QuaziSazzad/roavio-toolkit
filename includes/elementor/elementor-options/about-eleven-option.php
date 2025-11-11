<?php

//content
$this->start_controls_section(
	'layout_eleven_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_eleven'
		]
	]
);

$this->add_control(
	'layout_eleven_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Welcome To The Heart Of Luxury & Hospitality', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
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
	'layout_eleven_description',
	[
		'label' => esc_html__('Description Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We believe travel is more than just a trip—it\'s an experience that shapes your life. Our mission is to create unforgettable journeys that combine adventure, comfort, and authentic cultural encounters.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Feature Item One
$this->add_control(
	'layout_eleven_feature_one_heading',
	[
		'label' => esc_html__('Feature Item One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_eleven_feature_one_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-man',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_eleven_feature_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Curated by locals', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_feature_one_text',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Trips are thoughtfully design and curated by locals', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_feature_one_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_feature_one_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true,
	]
);

// Feature Item Two
$this->add_control(
	'layout_eleven_feature_two_heading',
	[
		'label' => esc_html__('Feature Item Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_eleven_feature_two_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-man',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_eleven_feature_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Self guided flexibility', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_feature_two_text',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Enjoy the freedom to travel own pace with our self-guided.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_feature_two_group_image',
	[
		'label' => esc_html__('Group Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

// Right Side Images
$this->add_control(
	'layout_eleven_images_heading',
	[
		'label' => esc_html__('Right Side Images', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_eleven_main_image',
	[
		'label' => esc_html__('Main Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_eleven_bottom_image',
	[
		'label' => esc_html__('Bottom Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Hero Box Content
$this->add_control(
	'layout_eleven_hero_box_heading',
	[
		'label' => esc_html__('Hero Box Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_eleven_hero_box_bg',
	[
		'label' => esc_html__('Hero Box Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_eleven_tours_count',
	[
		'label' => esc_html__('Tours Count', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('100', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_tours_text',
	[
		'label' => esc_html__('Tours Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tours Available', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_small_image',
	[
		'label' => esc_html__('Small Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_eleven_rating_number',
	[
		'label' => esc_html__('Rating Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('4.8', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_eleven_rating_image',
	[
		'label' => esc_html__('Rating Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);


$this->end_controls_section();
