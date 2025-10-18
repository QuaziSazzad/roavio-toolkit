<?php

//content
$this->start_controls_section(
	'layout_one_section_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$this->add_control(
	'layout_one_brand_text',
	[
		'label' => esc_html__('Brand Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add brand text', 'roavio-toolkit'),
		'default' => esc_html__('Roavio', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_copyright',
	[
		'label' => esc_html__('Copyright Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add copyright text', 'roavio-toolkit'),
		'default' => esc_html__('Copyright', 'roavio-toolkit'),
		'label_block' => true
	]
);


$this->add_control(
	'layout_one_enable_back_to_top',
	[
		'label' => __('Back To Top Section?', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => __('Yes', 'roavio-toolkit'),
		'label_off' => __('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_icon',
	[
		'label' => __('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-solid fa-chevron-up',
			'library' => 'custom-icon',
		],
		'condition' => [
			'layout_one_enable_back_to_top' => 'yes',
		]
	]
);

$this->end_controls_section();
