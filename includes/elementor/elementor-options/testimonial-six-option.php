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
	'layout_six_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Default Title', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_six_title_tag',
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
		'default'     => 'h2',
		'toggle'      => false,
	]
);

$this->add_control(
	'layout_six_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
		'default' => esc_html__('Default Sub Title', 'roavio-toolkit'),
	]
);


$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'name',
	[
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Robert S. Hummel', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client name here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('CEO & Founder', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client designation here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'testimonial',
	[
		'label' => esc_html__('Testimonial', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('"Working with has completely transformed operations. Their expertise in cloud migration helped us cut down on overhead and improve system reliability!"', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client testimonial here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'rating',
	[
		'label' => esc_html__('Rating', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '5',
		'options' => [
			'1' => esc_html__('1 Star', 'roavio-toolkit'),
			'2' => esc_html__('2 Stars', 'roavio-toolkit'),
			'3' => esc_html__('3 Stars', 'roavio-toolkit'),
			'4' => esc_html__('4 Stars', 'roavio-toolkit'),
			'5' => esc_html__('5 Stars', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_six_testimonial',
	[
		'label' => esc_html__('Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'name' => esc_html__('Robert S. Hummel', 'roavio-toolkit'),
				'designation' => esc_html__('CEO & Founder', 'roavio-toolkit'),
				'testimonial' => esc_html__('"Working with has completely transformed operations. Their expertise in cloud migration helped us cut down on overhead and improve system reliability!"', 'roavio-toolkit'),
				'rating' => '5',
			],
			[
				'name' => esc_html__('Leonard G. Trahan', 'roavio-toolkit'),
				'designation' => esc_html__('Web Designer', 'roavio-toolkit'),
				'testimonial' => esc_html__('"Working with has completely transformed operations. Their expertise in cloud migration helped us cut down on overhead and improve system reliability!"', 'roavio-toolkit'),
				'rating' => '5',
			],
		],
		'title_field' => '{{{ name }}}',
	]
);

$this->add_control(
	'layout_six_client_title',
	[
		'label' => esc_html__('Client Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Clients Testimonials', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::GALLERY,
		'default' => [],
	]
);

$this->end_controls_section();
