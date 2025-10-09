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


$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_four_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_four_column',
	[
		'label' => esc_html__('Select Column Class', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT2,
		'default' => 'col-xl-3',
		'options' => [
			'col-xl-6' => esc_html__('col-xl-6', 'roavio-toolkit'),
			'col-xl-5' => esc_html__('col-xl-5', 'roavio-toolkit'),
			'col-xl-4' => esc_html__('col-xl-4', 'roavio-toolkit'),
			'col-xl-3' => esc_html__('col-xl-3', 'roavio-toolkit'),
			'col-xl-2' => esc_html__('col-xl-2', 'roavio-toolkit'),
			'col-xl-1' => esc_html__('col-xl-1', 'roavio-toolkit'),
		]
	]
);


$this->add_control(
	'layout_four_gallery_items',
	[
		'label' => esc_html__('Gallery Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
	]
);

$this->add_control(
	'layout_four_gap',
	[
		'label' => esc_html__('Gap Between Images', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'g-2',
		'options' => [
			'g-0' => esc_html__('No Gap', 'roavio-toolkit'),
			'g-1' => esc_html__('Extra Small', 'roavio-toolkit'),
			'g-2' => esc_html__('Small', 'roavio-toolkit'),
			'g-3' => esc_html__('Medium', 'roavio-toolkit'),
			'g-4' => esc_html__('Large', 'roavio-toolkit'),
			'g-5' => esc_html__('Extra Large', 'roavio-toolkit'),
		],
	]
);



$this->end_controls_section();
