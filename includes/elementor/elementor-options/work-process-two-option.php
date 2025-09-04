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
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Guiding You Through Every Step of the IT Journey', 'roavio-toolkit'),
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
	'layout_two_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
		'default' => esc_html__('Working Process', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'step_number',
	[
		'label' => esc_html__('Step Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Step 01', 'roavio-toolkit'),
		'placeholder' => esc_html__('Step 01', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'step_title',
	[
		'label' => esc_html__('Step Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Discovery & Assessment', 'roavio-toolkit'),
		'placeholder' => esc_html__('Step Title', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'step_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Digital era with innovative IT solutions tailored to their unique needs. With a focus on reliability, scalability, and security, our team delivers cutting-edge technology companies.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'step_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'step_list_items',
	[
		'label' => esc_html__('List Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__("Software Development & Integration\nHelp Desk & Technical Support\nBusiness Continuity & Compliance", 'roavio-toolkit'),
		'placeholder' => esc_html__('One item per line', 'roavio-toolkit'),
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
	'layout_two_work_process_items',
	[
		'label' => esc_html__('Work Process Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'step_number' => esc_html__('Step 01', 'roavio-toolkit'),
				'step_title' => esc_html__('Discovery & Assessment', 'roavio-toolkit'),
				'is_active' => 'no',
			],
			[
				'step_number' => esc_html__('Step 02', 'roavio-toolkit'),
				'step_title' => esc_html__('Strategy & Planning', 'roavio-toolkit'),
				'is_active' => 'yes',
			],
			[
				'step_number' => esc_html__('Step 03', 'roavio-toolkit'),
				'step_title' => esc_html__('Implementation & Integration', 'roavio-toolkit'),
				'is_active' => 'no',
			],
			[
				'step_number' => esc_html__('Step 04', 'roavio-toolkit'),
				'step_title' => esc_html__('Ongoing Support & Optimization', 'roavio-toolkit'),
				'is_active' => 'no',
			],
		],
		'title_field' => '{{{ step_title }}}',
	]
);




$this->end_controls_section();
