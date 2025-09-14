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
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('How to benefit our Tours', 'roavio-toolkit'),
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
		],
	]
);

$this->add_control(
	'layout_two_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Make the most of your travel experience with our carefully curated tours designed to offer convenience', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'item_type',
	[
		'label' => esc_html__('Item Type', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'benefit_item',
		'options' => [
			'benefit_item' => esc_html__('Benefit Item', 'roavio-toolkit'),
			'benefit_image' => esc_html__('Benefit Image', 'roavio-toolkit'),
		],
	]
);

$repeater->add_control(
	'benefit_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling',
			'library' => 'flaticon',
		],
		'condition' => [
			'item_type' => 'benefit_item'
		]
	]
);

$repeater->add_control(
	'benefit_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Expert Travel Guide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'condition' => [
			'item_type' => 'benefit_item'
		]
	]
);

$repeater->add_control(
	'benefit_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Travel professionals who help destinations, accommodations, and activities tailored.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
		'condition' => [
			'item_type' => 'benefit_item'
		]
	]
);

$repeater->add_control(
	'benefit_url',
	[
		'label' => esc_html__('Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'condition' => [
			'item_type' => 'benefit_item'
		]
	]
);

$repeater->add_control(
	'benefit_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'condition' => [
			'item_type' => 'benefit_image'
		]
	]
);


$this->add_control(
	'layout_two_benefit_items',
	[
		'label' => esc_html__('Benefit Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'item_type' => 'benefit_item',
				'benefit_icon' => [
					'value' => 'flaticon-traveling',
					'library' => 'solid',
				],
				'benefit_title' => esc_html__('Expert Travel Guide', 'roavio-toolkit'),
				'benefit_description' => esc_html__('Travel professionals who help destinations, accommodations, and activities tailored.', 'roavio-toolkit'),
			],
			[
				'item_type' => 'benefit_image',
				'benefit_image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
		],
		'title_field' => '{{{ item_type === "benefit_item" ? benefit_title : "Image Item" }}}',
	]
);


$this->end_controls_section();
