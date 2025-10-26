<?php


//content
$this->start_controls_section(
	'layout_four_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);


$this->add_control(
	'layout_four_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Have Any Questions?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Don’t heisted to contact us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_select_cf7_form',
	[
		'label' => esc_html__('Select Contact Form 7', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'label_block' => true,
		'options' => rt_select_post('wpcf7_contact_form'),
	]
);



$this->end_controls_section();
