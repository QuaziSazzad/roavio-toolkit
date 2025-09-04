<?php

//content
$this->start_controls_section(
	'layout_six_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_six'
		]
	]
);

$this->add_control(
	'layout_six_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Frequently Asked Questions', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_six_title_tag',
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
	'layout_six_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add subtitle', 'roavio-toolkit'),
		'default' => esc_html__('FAQs', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$this->add_control(
	'layout_six_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add button text', 'roavio-toolkit'),
		'default' => esc_html__('Get A Quote', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_button_url',
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'faq_title',
	[
		'label' => esc_html__('FAQ Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('FAQ Title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'faq_content',
	[
		'label' => esc_html__('FAQ Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('FAQ Content goes here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'is_active',
	[
		'label' => esc_html__('Active Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_six_faq_items',
	[
		'label' => esc_html__('FAQ Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'faq_title' => esc_html__('Who Can Benefit from Services?', 'roavio-toolkit'),
				'faq_content' => esc_html__('Cybersecurity is at the core of our solutions. We layered monitoring, and threat detection to protect. From custom development and cloud solutions to cybersecurity and data analytics.', 'roavio-toolkit'),
				'is_active' => 'no',
			],
			[
				'faq_title' => esc_html__('Approach Cybersecurity?', 'roavio-toolkit'),
				'faq_content' => esc_html__('Cybersecurity is at the core of our solutions. We layered monitoring, and threat detection to protect. From custom development and cloud solutions to cybersecurity and data analytics.', 'roavio-toolkit'),
				'is_active' => 'yes',
			],
		],
		'title_field' => '{{{ faq_title }}}',
	]
);



$this->end_controls_section();
