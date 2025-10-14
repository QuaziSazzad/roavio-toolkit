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
	'layout_four_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('100k+ Customer Say Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_section_title_tag',
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

$this->add_control(
	'layout_four_section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Join over 100,000 satisfied travelers who have experienced', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Testimonial Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_four_testimonial_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_four_testimonial_content',
	[
		'label' => esc_html__('Testimonial Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('"The trip exceeded all expectations! Every detail was perfectly planned an our local guide made travel adventure experience truly unforgettable."', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_client_name',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Michael Thompson', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_client_designation',
	[
		'label' => esc_html__('Client Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Co-Traveler', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_card_style',
	[
		'label' => esc_html__('Card Style', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'normal',
		'options' => [
			'normal' => esc_html__('Normal', 'roavio-toolkit'),
			'bg' => esc_html__('With Background', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_four_testimonials_top',
	[
		'label' => esc_html__('Top Row Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_four_client_name' => esc_html__('Michael Thompson', 'roavio-toolkit'),
				'layout_four_client_designation' => esc_html__('Co-Traveler', 'roavio-toolkit'),
				'layout_four_card_style' => 'normal',
			],
			[
				'layout_four_client_name' => esc_html__('Sarah Johnson', 'roavio-toolkit'),
				'layout_four_client_designation' => esc_html__('Adventure Seeker', 'roavio-toolkit'),
				'layout_four_card_style' => 'bg',
			],
			[
				'layout_four_client_name' => esc_html__('David Wilson', 'roavio-toolkit'),
				'layout_four_client_designation' => esc_html__('Travel Enthusiast', 'roavio-toolkit'),
				'layout_four_card_style' => 'normal',
			],
		],
		'title_field' => '{{{ layout_four_client_name }}}',
	]
);

$repeater2 = new \Elementor\Repeater();

$repeater2->add_control(
	'layout_four_testimonial_image_bottom',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater2->add_control(
	'layout_four_testimonial_content_bottom',
	[
		'label' => esc_html__('Testimonial Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('"The trip exceeded all expectations! Every detail was perfectly planned an our local guide made travel adventure experience truly unforgettable."', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater2->add_control(
	'layout_four_client_name_bottom',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Michael Thompson', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater2->add_control(
	'layout_four_client_designation_bottom',
	[
		'label' => esc_html__('Client Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Co-Traveler', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater2->add_control(
	'layout_four_card_style_bottom',
	[
		'label' => esc_html__('Card Style', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'normal',
		'options' => [
			'normal' => esc_html__('Normal', 'roavio-toolkit'),
			'bg' => esc_html__('With Background', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_four_testimonials_bottom',
	[
		'label' => esc_html__('Bottom Row Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater2->get_controls(),
		'default' => [
			[
				'layout_four_client_name_bottom' => esc_html__('Michael Thompson', 'roavio-toolkit'),
				'layout_four_client_designation_bottom' => esc_html__('Co-Traveler', 'roavio-toolkit'),
				'layout_four_card_style_bottom' => 'normal',
			],
			[
				'layout_four_client_name_bottom' => esc_html__('Emily Parker', 'roavio-toolkit'),
				'layout_four_client_designation_bottom' => esc_html__('Travel Blogger', 'roavio-toolkit'),
				'layout_four_card_style_bottom' => 'bg',
			],
			[
				'layout_four_client_name_bottom' => esc_html__('Robert Brown', 'roavio-toolkit'),
				'layout_four_client_designation_bottom' => esc_html__('Frequent Traveler', 'roavio-toolkit'),
				'layout_four_card_style_bottom' => 'normal',
			],
		],
		'title_field' => '{{{ layout_four_client_name_bottom }}}',
	]
);


$this->end_controls_section();
