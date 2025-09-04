<?php

//content
$this->start_controls_section(
	'layout_nine_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_nine'
		]
	]
);


$this->add_control(
	'layout_nine_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Building Future-Ready Solutions for Today\'s Challenges', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_nine_title_tag',
	[
		'label'       => esc_html__('Title Tag', 'roavio-toolkit'),
		'type'        => \Elementor\Controls_Manager::CHOOSE,
		'label_block' => false,
		'options'     => [
			'h1' => [
				'title' => esc_html__('H1', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h1',
			],
			'h2' => [
				'title' => esc_html__('H2', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h2',
			],
			'h3' => [
				'title' => esc_html__('H3', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h3',
			],
			'h4' => [
				'title' => esc_html__('H4', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h4',
			],
			'h5' => [
				'title' => esc_html__('H5', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h5',
			],
			'h6' => [
				'title' => esc_html__('H6', 'roavio-toolkit'),
				'icon'  => 'eicon-editor-h6',
			],
		],
		'default' => 'h2',
	]
);

$this->add_control(
	'layout_nine_subtitle',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add sub title', 'roavio-toolkit'),
		'default' => esc_html__('About Company', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_nine_content_left',
	[
		'label' => esc_html__('Left Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add content', 'roavio-toolkit'),
		'default' => esc_html__('We are dedicated to transforming businesses through innovative, tailored software solutions With a team skilled professionals commitment cutting-edge technology a specialize creating scalable, user-friendly software.', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_nine_content_right',
	[
		'label' => esc_html__('Right Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add content', 'roavio-toolkit'),
		'default' => esc_html__('From custom development and cloud solutions to cybersecurity and data analytics, our services empower organizations to streamline.', 'roavio-toolkit'),
	]
);

$this->end_controls_section();

// Trusted Partners Section
$this->start_controls_section(
	'layout_nine_trusted_partners',
	[
		'label' => esc_html__('Trusted Partners', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_nine'
		]
	]
);

$this->add_control(
	'layout_nine_partners_title',
	[
		'label' => esc_html__('Partners Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('10m+ Trusted Partners', 'roavio-toolkit'),
	]
);

$partners = new \Elementor\Repeater();

$partners->add_control(
	'partner_image',
	[
		'label' => esc_html__('Partner Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_nine_partners',
	[
		'label' => esc_html__('Partners', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $partners->get_controls(),
		'prevent_empty' => false,
		'title_field' => esc_html__('Partner', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_nine_trustpilot_logo',
	[
		'label' => esc_html__('Trustpilot Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_nine_reviews_text',
	[
		'label' => esc_html__('Reviews Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add reviews text', 'roavio-toolkit'),
		'default' => esc_html__('8930+ reviews', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_nine_rating',
	[
		'label' => esc_html__('Rating (out of 5)', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SLIDER,
		'size_units' => ['rating'],
		'range' => [
			'rating' => [
				'min' => 0,
				'max' => 5,
				'step' => 0.1,
			],
		],
		'default' => [
			'unit' => 'rating',
			'size' => 5,
		],
	]
);

$this->end_controls_section();


$this->start_controls_section(
	'layout_nine_section_image',
	[
		'label' => esc_html__('Bottom Images', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_nine'
		]
	]
);

$this->add_control(
	'layout_nine_bottom_image_one',
	[
		'label' => esc_html__('Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_nine_bottom_image_two',
	[
		'label' => esc_html__('Image Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
