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
		'default' => esc_html__('Default Title', 'roavio-toolkit'),
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
		'default'     => 'h1',
		'toggle'      => false,
	]
);

$this->add_control(
	'layout_two_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
		'default' => esc_html__('Default Sub Title', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_sub_title_tag',
	[
		'label' => esc_html__('Sub Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h3',
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
	'layout_two_search_title',
	[
		'label' => esc_html__('Search Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Search Title', 'roavio-toolkit'),
		'default' => esc_html__('Default Search Title', 'roavio-toolkit'),
	]
);


$this->end_controls_section();

$this->start_controls_section(
	'section_image_one',
	[
		'label' => esc_html__('Images', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);


$this->add_control(
	'layout_two_group_image',
	[
		'label' => esc_html__('Group Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);
$this->add_control(
	'layout_two_bg_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);


$this->end_controls_section();
