<?php

//content
$this->start_controls_section(
	'layout_four_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);

$this->add_control(
	'layout_four_title_tag',
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
	'layout_four_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Unleash Your Adventure with Exciting Activities', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_section_description',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Turn your journey into an unforgettable adventure with our wide range of travel activities from thrilling outdoor excursions and cultural', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_location_title',
	[
		'label' => esc_html__('Location Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('(Lagos, Portugal)', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_four_item_number',
	[
		'label' => esc_html__('Item Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('01', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_item_title',
	[
		'label' => esc_html__('Activity Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Kayaking', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_item_description',
	[
		'label' => esc_html__('Activity Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_item_is_active',
	[
		'label' => esc_html__('Set as Active', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_four_activities',
	[
		'label' => esc_html__('Activities', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_four_item_number' => '01',
				'layout_four_item_title' => esc_html__('Kayaking', 'roavio-toolkit'),
				'layout_four_item_description' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
				'layout_four_item_is_active' => 'yes',
			],
			[
				'layout_four_item_number' => '02',
				'layout_four_item_title' => esc_html__('Climbing', 'roavio-toolkit'),
				'layout_four_item_description' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
				'layout_four_item_is_active' => 'no',
			],
			[
				'layout_four_item_number' => '03',
				'layout_four_item_title' => esc_html__('Hiking', 'roavio-toolkit'),
				'layout_four_item_description' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
				'layout_four_item_is_active' => 'no',
			],
			[
				'layout_four_item_number' => '04',
				'layout_four_item_title' => esc_html__('Mountain biking', 'roavio-toolkit'),
				'layout_four_item_description' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
				'layout_four_item_is_active' => 'no',
			],
			[
				'layout_four_item_number' => '05',
				'layout_four_item_title' => esc_html__('Tent Camping', 'roavio-toolkit'),
				'layout_four_item_description' => esc_html__('Glide through serene waters and discover breathtaking scenery with our kayaking adventures.', 'roavio-toolkit'),
				'layout_four_item_is_active' => 'no',
			],
		],
		'title_field' => '{{{ layout_four_item_title }}}',
	]
);


$this->add_control(
	'layout_four_image',
	[
		'label' => esc_html__('Location Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_shape',
	[
		'label' => esc_html__('Location Shape', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->end_controls_section();
