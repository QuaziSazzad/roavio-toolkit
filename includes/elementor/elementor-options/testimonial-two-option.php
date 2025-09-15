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
	'layout_two_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '100k+ Customer Say Us',
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
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
	'layout_two_sub_title',
	[
		'label' => esc_html__('Section Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Join over 100,000 satisfied travelers who have experienced',
		'placeholder' => esc_html__('Enter section sub title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_sub_title_tag',
	[
		'label' => esc_html__('Sub Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'p',
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true,
	]
);

$repeater->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-left-quote',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'testimonial_text',
	[
		'label' => esc_html__('Testimonial Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Booking with this agency was the best decision for our Bali trip! flights to accommodations!',
		'placeholder' => esc_html__('Enter testimonial text', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'client_name',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Michael Thompson',
		'placeholder' => esc_html__('Enter client name', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'client_designation',
	[
		'label' => esc_html__('Client Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Co-Traveler',
		'placeholder' => esc_html__('Enter client designation', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_testimonials',
	[
		'label' => esc_html__('Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'testimonial_text' => 'Booking with this agency was the best decision for our Bali trip! flights to accommodations!',
				'client_name' => 'Michael Thompson',
				'client_designation' => 'Co-Traveler',
			],
			[
				'testimonial_text' => 'I\'ve traveled many agencies, but this team stands out attention to detail and 24/7 support!',
				'client_name' => 'David Miller',
				'client_designation' => 'Co-Traveler',
			],
			[
				'testimonial_text' => 'I\'ve traveled many agencies, but this team stands out attention to detail and 24/7 support!',
				'client_name' => 'David Miller',
				'client_designation' => 'Co-Traveler',
			],
		],
		'title_field' => '{{{ client_name }}}',
		'label_block' => true,
	]
);


$this->end_controls_section();
