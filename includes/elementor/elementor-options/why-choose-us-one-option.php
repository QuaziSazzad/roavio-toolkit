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


// Section Title
$this->add_control(
	'layout_one_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('People Why Choose Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_section_title_tag',
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

// Section Subtitle
$this->add_control(
	'layout_one_section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('We offer personalized itineraries, competitive pricing', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section subtitle', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_subtitle_tag',
	[
		'label' => esc_html__('Section Subtitle Tag', 'roavio-toolkit'),
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

// Choose Us Items
$this->add_control(
	'layout_one_choose_us_items',
	[
		'label' => esc_html__('Choose Us Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'layout_one_item_icon',
				'label' => esc_html__('Icon', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'flaticon-travel-agency-1',
					'library' => 'solid',
				],
			],
			[
				'name' => 'layout_one_item_title',
				'label' => esc_html__('Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Personal Tour Plans', 'roavio-toolkit'),
				'placeholder' => esc_html__('Enter item title', 'roavio-toolkit'),
			],
			[
				'name' => 'layout_one_item_description',
				'label' => esc_html__('Description', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__('Tailored itineraries to match your interests and budget.', 'roavio-toolkit'),
				'placeholder' => esc_html__('Enter item description', 'roavio-toolkit'),
			],
		],
		'default' => [
			[
				'layout_one_item_icon' => [
					'value' => 'flaticon-travel-agency-1',
					'library' => 'solid',
				],
				'layout_one_item_title' => esc_html__('Personal Tour Plans', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Tailored itineraries to match your interests and budget.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => [
					'value' => 'flaticon-price-tag',
					'library' => 'solid',
				],
				'layout_one_item_title' => esc_html__('Best Price Guarantee', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Competitive tours rates without compromising quality.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => [
					'value' => 'flaticon-booking',
					'library' => 'solid',
				],
				'layout_one_item_title' => esc_html__('Hassle-Free Booking', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Easy safe and hassle-free online reservation process.', 'roavio-toolkit'),
			],
			[
				'layout_one_item_icon' => [
					'value' => 'flaticon-destination',
					'library' => 'solid',
				],
				'layout_one_item_title' => esc_html__('Range of Destinations', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('From popular hotspots to hidden gems worldwide.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_item_title }}}',
	]
);

// Background Image
$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
