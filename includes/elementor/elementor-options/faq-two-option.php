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
		'default' => esc_html__('Frequently Asked Questions', 'roavio-toolkit'),
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
		'default' => esc_html__('FAQs', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$this->add_control(
	'layout_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Cybersecurity is the practice of protecting systems, networks, and data from cyber threats such as hacking, malware, and phishing.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_faq_title',
	[
		'label' => esc_html__('FAQ Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('What is cybersecurity, and it important?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_faq_content',
	[
		'label' => esc_html__('FAQ Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Use strong, unique passwords and enable multi-factor authentication update software and systems Educate employees about cybersecurity best practices', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_is_active',
	[
		'label' => esc_html__('Is Active', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_two_faq_items',
	[
		'label' => esc_html__('FAQ Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_faq_title' => esc_html__('1. What is cybersecurity, and it important?', 'roavio-toolkit'),
				'layout_two_faq_content' => esc_html__('Use strong, unique passwords and enable multi-factor authentication update software and systems Educate employees about cybersecurity best practices', 'roavio-toolkit'),
				'layout_two_is_active' => 'no',
			],
			[
				'layout_two_faq_title' => esc_html__('2. How can I protect my organization?', 'roavio-toolkit'),
				'layout_two_faq_content' => esc_html__('Use strong, unique passwords and enable multi-factor authentication update software and systems Educate employees about cybersecurity best practices', 'roavio-toolkit'),
				'layout_two_is_active' => 'yes',
			],
			[
				'layout_two_faq_title' => esc_html__('3. What is phishing, and how can I avoid it?', 'roavio-toolkit'),
				'layout_two_faq_content' => esc_html__('Use strong, unique passwords and enable multi-factor authentication update software and systems Educate employees about cybersecurity best practices', 'roavio-toolkit'),
				'layout_two_is_active' => 'no',
			],
			[
				'layout_two_faq_title' => esc_html__('4. How often should I conduct cybersecurity?', 'roavio-toolkit'),
				'layout_two_faq_content' => esc_html__('Use strong, unique passwords and enable multi-factor authentication update software and systems Educate employees about cybersecurity best practices', 'roavio-toolkit'),
				'layout_two_is_active' => 'no',
			],
		],
		'title_field' => '{{{ layout_two_faq_title }}}',
	]
);

$this->add_control(
	'layout_two_image_1',
	[
		'label' => esc_html__('Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_image_2',
	[
		'label' => esc_html__('Image Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_image_3',
	[
		'label' => esc_html__('Image Three', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_image_4',
	[
		'label' => esc_html__('Image Four', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);


$this->end_controls_section();
