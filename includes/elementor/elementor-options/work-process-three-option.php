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
		'default' => esc_html__('Building Resilience Our Cybersecurity Methodology', 'roavio-toolkit'),
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

$this->add_control(
	'layout_three_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Working Process', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_image',
	[
		'label' => esc_html__('Process Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_three_step_number',
	[
		'label' => esc_html__('Step Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Step 01', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_step_title',
	[
		'label' => esc_html__('Step Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Risk Management Framework', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_step_description',
	[
		'label' => esc_html__('Step Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('RMF is a structured approach to identify, assess, and mitigate risks to information systems ensures', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_process_items',
	[
		'label' => esc_html__('Process Steps', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_three_step_number' => esc_html__('Step 01', 'roavio-toolkit'),
				'layout_three_step_title' => esc_html__('Risk Management Framework', 'roavio-toolkit'),
				'layout_three_step_description' => esc_html__('RMF is a structured approach to identify, assess, and mitigate risks to information systems ensures', 'roavio-toolkit'),
			],
			[
				'layout_three_step_number' => esc_html__('Step 02', 'roavio-toolkit'),
				'layout_three_step_title' => esc_html__('Defense in Depth (Layered Security)', 'roavio-toolkit'),
				'layout_three_step_description' => esc_html__('A multi-layered approach that implements security controls at multiple levels (network, application', 'roavio-toolkit'),
			],
			[
				'layout_three_step_number' => esc_html__('Step 03', 'roavio-toolkit'),
				'layout_three_step_title' => esc_html__('Incident Response Process', 'roavio-toolkit'),
				'layout_three_step_description' => esc_html__('A focused approach to detecting, responding to, and recovering from cyber incidents, minimizing impact', 'roavio-toolkit'),
			],
			[
				'layout_three_step_number' => esc_html__('Step 04', 'roavio-toolkit'),
				'layout_three_step_title' => esc_html__('Monitoring & Detection', 'roavio-toolkit'),
				'layout_three_step_description' => esc_html__('24/7 Threat Monitoring: Use advanced tools like SIEM (Security Information and Event Management)', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_three_step_title }}}',
	]
);


$this->end_controls_section();
