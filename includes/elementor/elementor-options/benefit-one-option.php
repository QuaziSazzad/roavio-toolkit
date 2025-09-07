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



$this->add_control(
	'layout_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('How to benefit our Tours', 'roavio-toolkit'),
		'label_block' => true,
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
		'label' => esc_html__('Section Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Make the most of your travel experience with our carefully curated tours designed to offer convenience', 'roavio-toolkit'),
		'label_block' => true,
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


// Repeater for benefit items
$layout_one_benefit_items = new \Elementor\Repeater();


$layout_one_benefit_items->add_control(
	'layout_one_item_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Expert Travel Guide', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$layout_one_benefit_items->add_control(
	'layout_one_item_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Travel professionals who help destinations, accommodations, and activities tailored.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$layout_one_benefit_items->add_control(
	'layout_one_url',
	[
		'label' => esc_html__('URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$layout_one_benefit_items->add_control(
	'layout_one_icon',
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
	'layout_one_benefit_items',
	[
		'label' => esc_html__('Benefit Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_benefit_items->get_controls(),
		'default' => [
			[
				'layout_one_icon' => 'flaticon-traveling',
				'layout_one_item_title' => esc_html__('Expert Travel Guide', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Travel professionals who help destinations, accommodations, and activities tailored.', 'roavio-toolkit'),
			],
			[
				'layout_one_icon' => 'flaticon-roadmap',
				'layout_one_item_title' => esc_html__('Custom Tour Plan', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Enjoy trips designed around your preferences, whether you want a relaxing beach holiday', 'roavio-toolkit'),
			],
			[
				'layout_one_icon' => 'flaticon-mouse',
				'layout_one_item_title' => esc_html__('Easy Booking', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Save time and effort with a single platform to book flights, hotels, activities, transportation', 'roavio-toolkit'),
			],
			[
				'layout_one_icon' => 'flaticon-promotion',
				'layout_one_item_title' => esc_html__('Deals & Discounts', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Save time and effort with a single platform to book flights, hotels, activities, transportation', 'roavio-toolkit'),
			],
			[
				'layout_one_icon' => 'flaticon-tourist',
				'layout_one_item_title' => esc_html__('Local Guides Authentic', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Immerse yourself local culture with trusted guides who provide insider tips and hidden', 'roavio-toolkit'),
			],
			[
				'layout_one_icon' => 'flaticon-insurance',
				'layout_one_item_title' => esc_html__('Travel Insurance', 'roavio-toolkit'),
				'layout_one_item_description' => esc_html__('Stay protected with insurance options and on-ground support for a worry-free experience.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_item_title }}}',
	]
);

$this->add_control(
	'layout_one_center_image',
	[
		'label' => esc_html__('Center Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
