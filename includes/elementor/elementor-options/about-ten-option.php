<?php

//content
$this->start_controls_section(
	'layout_ten_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_ten'
		]
	]
);


$this->add_control(
	'layout_ten_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Crafting Memories, Keeping Promises', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_title_tag',
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
	'layout_ten_text',
	[
		'label' => esc_html__('Description Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Focus is on keeping your journey safe, smooth, and enjoyable—so you can explore the world with peace of mind."', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_image',
	[
		'label' => esc_html__('Feature Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_ten_text_2',
	[
		'label' => esc_html__('Secondary Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Travel with confidence knowing that your safety comes first. We follow strict standards, partner with trusted providers, and ensure every detail is carefully planned to give you a worry-free experience.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Feature Item 1
$this->add_control(
	'layout_ten_feature_heading_1',
	[
		'label' => esc_html__('Feature Item 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_ten_feature_icon_1',
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
	'layout_ten_feature_title_1',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Friendly Guide', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_feature_text_1',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Travel feels more special when you\'re guided by someone who cares.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Feature Item 2
$this->add_control(
	'layout_ten_feature_heading_2',
	[
		'label' => esc_html__('Feature Item 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_ten_feature_icon_2',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-travel',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_ten_feature_title_2',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Safety Travel', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_feature_text_2',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Your safety is our top priority on every journey carefully accommodations', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// List Items
$this->add_control(
	'layout_ten_list_heading',
	[
		'label' => esc_html__('List Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_ten_list_text',
	[
		'label' => esc_html__('List Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('List Item', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_list_items',
	[
		'label' => esc_html__('List Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_ten_list_text' => esc_html__('Personalized Itineraries', 'roavio-toolkit'),
			],
			[
				'layout_ten_list_text' => esc_html__('Seamless Booking Experience', 'roavio-toolkit'),
			],
			[
				'layout_ten_list_text' => esc_html__('Local Experience & Authenticity', 'roavio-toolkit'),
			],
			[
				'layout_ten_list_text' => esc_html__('Save & Security Travels', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_ten_list_text }}}',
	]
);

// Award Box
$this->add_control(
	'layout_ten_award_heading',
	[
		'label' => esc_html__('Award Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_ten_award_image',
	[
		'label' => esc_html__('Award Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_ten_award_title',
	[
		'label' => esc_html__('Award Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Award Winning Agency', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
