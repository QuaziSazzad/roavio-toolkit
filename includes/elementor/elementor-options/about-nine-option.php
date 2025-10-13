<?php

//content
$this->start_controls_section(
	'layout_nine_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_nine'
		]
	]
);


// Section Title
$this->add_control(
	'layout_nine_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Passionate about your adventures with ROAVIO', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_nine_title_tag',
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

// Description
$this->add_control(
	'layout_nine_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We believe travel is more than just a trip—it\'s an experience that shapes your life. Our mission is to create unforgettable journeys that combine adventure, comfort, and authentic cultural encounters.', 'roavio-toolkit'),
		'label_block' => true,
	]
);



// Counter Number
$this->add_control(
	'layout_nine_counter_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('10+', 'roavio-toolkit'),
	]
);

// Radius Image
$this->add_control(
	'layout_nine_radius_image',
	[
		'label' => esc_html__('Counter Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

// Video URL
$this->add_control(
	'layout_nine_video_url',
	[
		'label' => esc_html__('Video URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

// Counter Text
$this->add_control(
	'layout_nine_counter_text',
	[
		'label' => esc_html__('Counter Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Years of expertise in crafting travel personalized journeys, we are dedicated to providing travel experiences', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Button Text
$this->add_control(
	'layout_nine_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
	]
);

// Button URL
$this->add_control(
	'layout_nine_button_url',
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

// Right Section Title
$this->add_control(
	'layout_nine_right_title',
	[
		'label' => esc_html__('Right Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('We\'re the Right Choice for Real travel Adventures', 'roavio-toolkit'),
		'label_block' => true,
		'separator' => 'before',
	]
);

// Feature Box 1
$this->add_control(
	'layout_nine_feature_heading_1',
	[
		'label' => esc_html__('Feature Box 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_nine_feature_icon_1',
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
	'layout_nine_feature_title_1',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Curated by locals', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_nine_feature_description_1',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Trips are thoughtfully designed & curated by locals who know their destination', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Feature Box 2
$this->add_control(
	'layout_nine_feature_heading_2',
	[
		'label' => esc_html__('Feature Box 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_nine_feature_icon_2',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling-1',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_nine_feature_title_2',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Self guided flexibility', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_nine_feature_description_2',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Enjoy the freedom to travel at your own pace with our self-guided flexibility.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Left Image
$this->add_control(
	'layout_nine_left_image',
	[
		'label' => esc_html__('Left Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'separator' => 'before',
	]
);

// Right Image
$this->add_control(
	'layout_nine_right_image',
	[
		'label' => esc_html__('Right Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'separator' => 'before',
	]
);


$this->end_controls_section();
