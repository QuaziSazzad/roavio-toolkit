<?php


//content
$this->start_controls_section(
	'layout_six_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_six'
		]
	]
);

$this->add_control(
	'layout_six_tour_title',
	[
		'label' => esc_html__('Tour Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '',
		'placeholder' => esc_html__('Make empty to display default title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_home_text',
	[
		'label' => esc_html__('Home Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Home', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_destination_text',
	[
		'label' => esc_html__('Destination Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tour Details', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
