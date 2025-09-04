<?php

//content
$this->start_controls_section(
	'layout_one_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);


$this->add_control(
	'layout_one_custom_title',
	[
		'label' => esc_html__('Custom Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Custom title', 'roavio-toolkit'),
		'default' => esc_html__('Inventory Tech Management with Custom Software Solution', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label'       => esc_html__('Title Tag', 'roavio-toolkit'),
		'type'        => \Elementor\Controls_Manager::CHOOSE,
		'label_block' => true,
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
	'layout_one_case_category_title',
	[
		'label' => esc_html__('Case Category Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Case Category Title', 'roavio-toolkit'),
		'default' => esc_html__('Case Category', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_case_date_title',
	[
		'label' => esc_html__('Case Date Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Case Date Title', 'roavio-toolkit'),
		'default' => esc_html__('Case Date:', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_case_start_date',
	[
		'label' => esc_html__('Case Start Date', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Case Start Date', 'roavio-toolkit'),
		'default' => wp_kses(__('Start On<br> 20 Aug 2024', 'roavio-toolkit'), array('br' => array())),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_case_end_date',
	[
		'label' => esc_html__('Case End Date', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Case End Date', 'roavio-toolkit'),
		'default' => wp_kses(__('End On<br> 30 Sep 2024', 'roavio-toolkit'), array('br' => array())),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_one_location_title',
	[
		'label' => esc_html__('Location Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Location Title', 'roavio-toolkit'),
		'default' => esc_html__('Location', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_location',
	[
		'label' => esc_html__('Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Location', 'roavio-toolkit'),
		'default' => esc_html__('101 Fifth Avenue, 12th Floor New York, NY 10003', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_client_title',
	[
		'label' => esc_html__('Client Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Client Title', 'roavio-toolkit'),
		'default' => esc_html__('Clients', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_client_name',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Client Name', 'roavio-toolkit'),
		'default' => esc_html__('ABC Retail Inc.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_client_description',
	[
		'label' => esc_html__('Client Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Client Description', 'roavio-toolkit'),
		'default' => esc_html__('a leading regional IT Agency.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
