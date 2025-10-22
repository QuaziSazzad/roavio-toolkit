<?php


//content
$this->start_controls_section(
	'layout_five_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_five'
		]
	]
);

$this->add_control(
	'layout_five_home_text',
	[
		'label' => esc_html__('Home Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Home', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_destination_text',
	[
		'label' => esc_html__('Destination Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Destination Details', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
