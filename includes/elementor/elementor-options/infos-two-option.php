<?php

//content
$this->start_controls_section(
	'layout_two_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);

$this->add_control(
	'layout_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Unlimited travel experience', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_title_tag',
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
	'layout_two_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Crafting journeys, creating memories plan smarter, travel better', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your sub title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_sub_title_tag',
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
	'layout_two_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_item_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-costumer',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'layout_two_item_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('30', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your number here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_item_suffix',
	[
		'label' => esc_html__('Number Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('k+', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your suffix here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_item_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Total worldwide satisfied clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_counter_items',
	[
		'label' => esc_html__('Counter Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_item_icon' => [
					'value' => 'flaticon-costumer',
					'library' => 'flaticon',
				],
				'layout_two_item_number' => esc_html__('30', 'roavio-toolkit'),
				'layout_two_item_suffix' => esc_html__('k+', 'roavio-toolkit'),
				'layout_two_item_title' => esc_html__('Total worldwide satisfied clients', 'roavio-toolkit'),
			],
			[
				'layout_two_item_icon' => [
					'value' => 'flaticon-suitcase',
					'library' => 'flaticon',
				],
				'layout_two_item_number' => esc_html__('500', 'roavio-toolkit'),
				'layout_two_item_suffix' => esc_html__('+', 'roavio-toolkit'),
				'layout_two_item_title' => esc_html__('World tours available in toun', 'roavio-toolkit'),
			],
			[
				'layout_two_item_icon' => [
					'value' => 'flaticon-excursion',
					'library' => 'flaticon',
				],
				'layout_two_item_number' => esc_html__('20', 'roavio-toolkit'),
				'layout_two_item_suffix' => esc_html__('+', 'roavio-toolkit'),
				'layout_two_item_title' => esc_html__('Professional local tour guides', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_two_item_title }}}',
	]
);




$this->end_controls_section();
