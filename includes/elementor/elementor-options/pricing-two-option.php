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
		'default' => esc_html__('Find the Right Solution for Your Budget Custom Plans for Every Stage of Your Journey', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_title_tag',
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

$this->add_control(
	'layout_two_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Pricing Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_package_title',
	[
		'label' => esc_html__('Package Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Basic Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_package_description',
	[
		'label' => esc_html__('Package Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Small businesses and startups', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$99', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_duration',
	[
		'label' => esc_html__('Duration', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('/per month', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_features_left',
	[
		'label' => esc_html__('Features Left Column', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => "Network assessment\nAntivirus & firewall setup\nMonthly threat reports",
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_features_right',
	[
		'label' => esc_html__('Features Right Column', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => "Email security (anti-phishing)\nData backups and advanced\nBasic incident response",
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Choose Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_button_url',
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

$this->add_control(
	'layout_two_pricing_items',
	[
		'label' => esc_html__('Pricing Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_package_title' => esc_html__('Basic Package', 'roavio-toolkit'),
				'layout_two_price' => '$99',
			],
			[
				'layout_two_package_title' => esc_html__('Standard Package', 'roavio-toolkit'),
				'layout_two_price' => '$399',
			],
			[
				'layout_two_package_title' => esc_html__('Premium Package', 'roavio-toolkit'),
				'layout_two_price' => '$899',
			],
		],
		'title_field' => '{{{ layout_two_package_title }}}',
	]
);

$this->add_control(
	'layout_two_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
		'label_block' => true,
	]
);


$this->end_controls_section();
