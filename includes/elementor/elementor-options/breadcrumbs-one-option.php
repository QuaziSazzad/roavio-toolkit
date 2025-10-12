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
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('About Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h1',
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
	'layout_one_home_text',
	[
		'label' => esc_html__('Home Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Home', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_home_url',
	[
		'label' => esc_html__('Home URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => home_url('/'),
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_current_page',
	[
		'label' => esc_html__('Current Page', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('About Us', 'roavio-toolkit'),
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
