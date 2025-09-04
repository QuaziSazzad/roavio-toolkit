<?php

//content
$this->start_controls_section(
	'layout_ten_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_ten'
		]
	]
);


$this->add_control(
	'layout_ten_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Solutions Beyond Technology – Success Beyond Boundaries', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_title_tag',
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
	'layout_ten_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Trust us to be your partner in digital transformation, providing the technology and support.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'progress_title',
	[
		'label' => esc_html__('Progress Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Software Development', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'progress_value',
	[
		'label' => esc_html__('Progress Value', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'min' => 0,
		'max' => 100,
		'step' => 1,
		'default' => 75,
		'label_block' => true,
	]
);

$this->add_control(
	'layout_ten_progress_items',
	[
		'label' => esc_html__('Progress Bars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'progress_title' => esc_html__('Software Development', 'roavio-toolkit'),
				'progress_value' => 75,
			],
			[
				'progress_title' => esc_html__('IT Consulting & management', 'roavio-toolkit'),
				'progress_value' => 85,
			],
		],
		'title_field' => '{{{ progress_title }}}',
	]
);


$this->end_controls_section();

$this->start_controls_section(
	'layout_ten_section_image',
	[
		'label' => esc_html__('Images', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_ten'
		]
	]
);

$this->add_control(
	'layout_ten_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
