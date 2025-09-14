<?php

//content
$this->start_controls_section(
	'layout_one_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);



$this->add_control(
	'layout_one_title',
	[
		'label' => esc_html__('Title 1st part', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Wildlife ', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_title_second_part',
	[
		'label' => esc_html__('Title 2nd part', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Safaris', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true
	]
);



$this->add_control(
	'layout_one_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Camping', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Experience the thrill of nature never before with our exclusive wildlife safaris.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$2000', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your price here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Book Now', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your button text here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
