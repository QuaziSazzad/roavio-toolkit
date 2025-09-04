<?php

//content
$this->start_controls_section(
	'layout_three_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_three'
		]
	]
);

$this->add_control(
	'layout_three_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Easy to Start, Easy to Scale Website Builder Plans', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_title_tag',
	[
		'label'       => esc_html__('Title Tag', 'roavio-toolkit'),
		'type'        => \Elementor\Controls_Manager::CHOOSE,
		'label_block' => false,
		'options'     => [
			'h1' => [
				'title' => esc_html__('H1', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h1',
			],
			'h2' => [
				'title' => esc_html__('H2', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h2',
			],
			'h3' => [
				'title' => esc_html__('H3', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h3',
			],
			'h4' => [
				'title' => esc_html__('H4', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h4',
			],
			'h5' => [
				'title' => esc_html__('H5', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h5',
			],
			'h6' => [
				'title' => esc_html__('H6', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h6',
			],
		],
		'default'     => 'h2',
		'toggle'      => false,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_three_package_title',
	[
		'label' => esc_html__('Package Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Regular', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_package_color',
	[
		'label' => esc_html__('Title Color Class', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '',
		'options' => [
			'' => esc_html__('Default', 'roavio-toolkit'),
			'color-two' => esc_html__('Color Two', 'roavio-toolkit'),
			'color-four' => esc_html__('Color Four', 'roavio-toolkit'),
		],
	]
);

$repeater->add_control(
	'layout_three_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('15', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_duration',
	[
		'label' => esc_html__('Duration', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('/m', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Data curation involve the careful election organization, and maintenance', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_features',
	[
		'label' => esc_html__('Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'feature_text',
				'label' => esc_html__('Feature Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('2 Limited sites available', 'roavio-toolkit'),
				'label_block' => true,
			],
			[
				'name' => 'is_hidden',
				'label' => esc_html__('Hide Feature', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Yes', 'roavio-toolkit'),
				'label_off' => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'default' => 'no',
			],
		],
		'default' => [
			[
				'feature_text' => esc_html__('2 Limited sites available', 'roavio-toolkit'),
				'is_hidden' => 'no',
			],
			[
				'feature_text' => esc_html__('1 GB storage per site', 'roavio-toolkit'),
				'is_hidden' => 'no',
			],
			[
				'feature_text' => esc_html__('Up to 5 pages per site', 'roavio-toolkit'),
				'is_hidden' => 'no',
			],
			[
				'feature_text' => esc_html__('Free SSL for custom domain', 'roavio-toolkit'),
				'is_hidden' => 'yes',
			],
			[
				'feature_text' => esc_html__('Connect custom domain', 'roavio-toolkit'),
				'is_hidden' => 'yes',
			],
		],
		'title_field' => '{{{ feature_text }}}',
	]
);

$repeater->add_control(
	'layout_three_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Choose Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_footer_text',
	[
		'label' => esc_html__('Footer Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('No credit card required', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_pricing_items',
	[
		'label' => esc_html__('Pricing Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_three_package_title' => esc_html__('Regular', 'roavio-toolkit'),
				'layout_three_package_color' => '',
				'layout_three_price' => '15',
				'layout_three_duration' => '/m',
			],
			[
				'layout_three_package_title' => esc_html__('Standard', 'roavio-toolkit'),
				'layout_three_package_color' => 'color-two',
				'layout_three_price' => '35',
				'layout_three_duration' => '/m',
			],
			[
				'layout_three_package_title' => esc_html__('Diamond', 'roavio-toolkit'),
				'layout_three_package_color' => 'color-four',
				'layout_three_price' => '98',
				'layout_three_duration' => '/m',
			],
		],
		'title_field' => '{{{ layout_three_package_title }}}',
	]
);


$this->end_controls_section();
