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
	'layout_three_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Section Title', 'roavio-toolkit'),
		'default' => esc_html__('Subscribe Our Newsletter To Get More Offer & Tips', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h2',
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
	'layout_three_description_text',
	[
		'label' => esc_html__('Description Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Description Text', 'roavio-toolkit'),
		'default' => esc_html__('Stay connected & never miss a deal! subscribe to our newsletter and get travel offers', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_input_placeholder',
	[
		'label' => esc_html__('Input Placeholder', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email Address', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_btn_label',
	[
		'label' => esc_html__('Button Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Subscribe', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_shape_one',
	[
		'label' => esc_html__('Right Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_shape_two',
	[
		'label' => esc_html__('Top Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_shape_three',
	[
		'label' => esc_html__('Bottom Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);


$this->end_controls_section();
