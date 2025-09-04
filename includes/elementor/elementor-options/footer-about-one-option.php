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
	'layout_one_summary_text',
	[
		'label' => esc_html__('Summary Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Content', 'roavio-toolkit'),
		'default' => esc_html__('Default Text', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_call_title',
	[
		'label' => esc_html__('Call Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Call Title', 'roavio-toolkit'),
		'default' => esc_html__('Need Any Help?', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_call_text',
	[
		'label' => esc_html__('Call Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Call Text', 'roavio-toolkit'),
		'default' => esc_html__(' Call :', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_call_number',
	[
		'label' => esc_html__('Call Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Call Number', 'roavio-toolkit'),
		'default' => esc_html__('+000 (123) 45 88', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_call_url',
	[
		'label' => esc_html__('Call Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Call Url', 'roavio-toolkit'),
		'default' => esc_html__('callto:+000(123)4588', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'logo',
	[
		'label' => __('Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'logo_size',
	[
		'label' => __('Logo Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		'description' => __('Set Logo Size.', 'roavio-toolkit'),
		'default' => [
			'width' => '123',
			'height' => '35',
		],
	]
);

$this->end_controls_section();
