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
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Empowering Businesses With Advanced IT Solutions', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_title_tag',
	[
		'label' => esc_html__('Title HTML Tag', 'roavio-toolkit'),
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
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Modern IT Solutions', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your sub title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_two_summary_text',
	[
		'label' => esc_html__('Summary Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your summary text here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_background_color',
	[
		'label' => esc_html__('Background Color', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::COLOR,
		'default' => '#021433',
		'selectors' => [
			'{{WRAPPER}} .services-area.bgc-blue' => 'background-color: {{VALUE}};',
		],
	]
);

// Service Items Repeater
$service_repeater = new \Elementor\Repeater();

$service_repeater->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-it',
			'library' => 'flaticon',
		],
	]
);

$service_repeater->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Managed IT Services', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type service title here', 'roavio-toolkit'),
	]
);

$service_repeater->add_control(
	'description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Comprehensive support for all aspects of your IT infrastructure, including monitoring, maintenance, and technical support.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type service description here', 'roavio-toolkit'),
	]
);

$service_repeater->add_control(
	'read_more_text',
	[
		'label' => esc_html__('Read More Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Read More', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type read more text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$service_repeater->add_control(
	'url',
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

$service_repeater->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$service_repeater->add_control(
	'column_size',
	[
		'label' => esc_html__('Column Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '3',
		'options' => [
			'2' => esc_html__('Column 2', 'roavio-toolkit'),
			'3' => esc_html__('Column 3', 'roavio-toolkit'),
			'4' => esc_html__('Column 4', 'roavio-toolkit'),
			'6' => esc_html__('Column 6', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_two_service_list',
	[
		'label' => esc_html__('Service Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $service_repeater->get_controls(),
		'default' => [
			[
				'title' => esc_html__('Managed IT Services', 'roavio-toolkit'),
				'description' => esc_html__('Comprehensive support for all aspects of your IT infrastructure, including monitoring, maintenance, and technical support.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'flaticon-it',
					'library' => 'flaticon',
				],
				'column_size' => '3',
			],
			[
				'title' => esc_html__('Cybersecurity Services', 'roavio-toolkit'),
				'description' => esc_html__('Comprehensive support for all aspects of your IT infrastructure, including monitoring, maintenance, and technical support.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'flaticon-network-security',
					'library' => 'flaticon',
				],
				'column_size' => '3',
			],
			[
				'title' => esc_html__('Cloud Solutions', 'roavio-toolkit'),
				'description' => esc_html__('Comprehensive support for all aspects of your IT infrastructure, including monitoring, maintenance, and technical support.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'flaticon-cloud',
					'library' => 'flaticon',
				],
				'column_size' => '3',
			],
			[
				'title' => esc_html__('Data Backup & Recovery', 'roavio-toolkit'),
				'description' => esc_html__('Comprehensive support for all aspects of your IT infrastructure, including monitoring, maintenance, and technical support.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'flaticon-data-management',
					'library' => 'flaticon',
				],
				'column_size' => '3',
			],
		],
		'title_field' => '{{{ title }}}',
	]
);

$this->add_control(
	'layout_two_animation',
	[
		'label' => esc_html__('Animation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'fade-up',
		'options' => [
			'fade-up' => esc_html__('Fade Up', 'roavio-toolkit'),
			'fade-down' => esc_html__('Fade Down', 'roavio-toolkit'),
			'fade-left' => esc_html__('Fade Left', 'roavio-toolkit'),
			'fade-right' => esc_html__('Fade Right', 'roavio-toolkit'),
			'zoom-in' => esc_html__('Zoom In', 'roavio-toolkit'),
			'zoom-out' => esc_html__('Zoom Out', 'roavio-toolkit'),
			'flip-up' => esc_html__('Flip Up', 'roavio-toolkit'),
			'flip-down' => esc_html__('Flip Down', 'roavio-toolkit'),
			'none' => esc_html__('None', 'roavio-toolkit'),
		],
	]
);


$this->end_controls_section();
