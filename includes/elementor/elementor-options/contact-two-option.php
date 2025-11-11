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

// Section Title
$this->add_control(
	'layout_two_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Book luxury & Suite', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_title_tag',
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

// Description
$this->add_control(
	'layout_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Indulge in the ultimate comfort and elegance by booking our luxury room suites designed with exquisite attention to detail, each suite offers spacious', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Contact Form 7
$this->add_control(
	'layout_two_select_cf7_form',
	[
		'label' => esc_html__('Select your contact form 7', 'roavio-toolkit'),
		'label_block' => true,
		'type' => \Elementor\Controls_Manager::SELECT,
		'options' => rt_select_post('wpcf7_contact_form'),
	]
);

// Image One
$this->add_control(
	'layout_two_image_one',
	[
		'label' => esc_html__('Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'separator' => 'before',
	]
);

// Image Two
$this->add_control(
	'layout_two_image_two',
	[
		'label' => esc_html__('Image Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Image Three
$this->add_control(
	'layout_two_image_three',
	[
		'label' => esc_html__('Image Three', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Image Four
$this->add_control(
	'layout_two_image_four',
	[
		'label' => esc_html__('Image Four', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
