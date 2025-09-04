<?php

//content
$this->start_controls_section(
	'layout_two_section_content',
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
		'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
		'default' => esc_html__('Default Title', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_placeholder',
	[
		'label' => esc_html__('Placeholder Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Placeholder Text', 'roavio-toolkit'),
		'default' => esc_html__('Email Address', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_btn_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Button Text', 'roavio-toolkit'),
		'default' => esc_html__('Sign Up', 'roavio-toolkit'),
		'label_block' => true
	]
);


$this->end_controls_section();
