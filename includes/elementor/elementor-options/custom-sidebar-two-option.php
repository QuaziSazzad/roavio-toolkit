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
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tower bridge of London', 'roavio-toolkit'),
		'label_block' => true,
	]
);


// Child Price
$this->add_control(
	'layout_two_child_price_heading',
	[
		'label' => esc_html__('Child Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_child_price_label',
	[
		'label' => esc_html__('Child Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('To Child', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_child_price',
	[
		'label' => esc_html__('Child Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$138', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Adult Price
$this->add_control(
	'layout_two_adult_price_heading',
	[
		'label' => esc_html__('Adult Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_adult_price_label',
	[
		'label' => esc_html__('Adult Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('To Adult', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_adult_price',
	[
		'label' => esc_html__('Adult Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$399', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Button
$this->add_control(
	'layout_two_button_heading',
	[
		'label' => esc_html__('Button', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true,
	]
);

// Bottom Text
$this->add_control(
	'layout_two_bottom_heading',
	[
		'label' => esc_html__('Bottom Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_bottom_text',
	[
		'label' => esc_html__('Bottom Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Need some help?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_bottom_link_text',
	[
		'label' => esc_html__('Bottom Link Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Contact Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_bottom_link_url',
	[
		'label' => esc_html__('Bottom Link URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true,
	]
);


$this->end_controls_section();
