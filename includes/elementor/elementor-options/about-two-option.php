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
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Special offers sort time adventures', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_title_tag',
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
	'layout_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Don\'t miss out our exclusive special deals, designed make your dream vacation more affordable than ever.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_image_one',
	[
		'label' => esc_html__('Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

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

$this->add_control(
	'layout_two_box_title',
	[
		'label' => esc_html__('Box Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('18+ years of experience in travel services', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your box title here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_box_url',
	[
		'label' => esc_html__('Box URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_two_client_name',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Mickel z Ponkoz', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client name here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_client_designation',
	[
		'label' => esc_html__('Client Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Travel guide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client designation here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_shape_image',
	[
		'label' => esc_html__('Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

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

$this->add_control(
	'layout_two_discount_text',
	[
		'label' => esc_html__('Discount Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('23% Discount', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type discount text here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_adventure_title',
	[
		'label' => esc_html__('Adventure Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Hotel & Resort', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type adventure title here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_adventure_url',
	[
		'label' => esc_html__('Adventure URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$1500', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type price here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_price_description',
	[
		'label' => esc_html__('Price Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('per night 4 star rating', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type price description here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_two_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Book Now', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type button text here', 'roavio-toolkit'),
		'label_block' => true
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
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true
	]
);


$this->end_controls_section();
