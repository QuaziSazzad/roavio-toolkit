<?php

//content
$this->start_controls_section(
	'layout_three_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_three'
		]
	]
);

$this->add_control(
	'layout_three_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore Our Photo Gallery', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_title_tag',
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
	'layout_three_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Crafting journeys, creating memories plan smarter, travel better', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_sub_title_tag',
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

// Gallery Slider 1 Repeater
$repeater_slider_1 = new \Elementor\Repeater();

$repeater_slider_1->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_slider_1->add_control(
	'url',
	[
		'label' => esc_html__('URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$repeater_slider_1->add_control(
	'category',
	[
		'label' => esc_html__('Category', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tour & Travel', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_slider_1->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_three_gallery_slider_1',
	[
		'label' => esc_html__('Gallery Slider 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_slider_1->get_controls(),
		'default' => [
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
		'title_field' => '{{{ title }}}',
	]
);

// Gallery Slider 2 Repeater
$repeater_slider_2 = new \Elementor\Repeater();

$repeater_slider_2->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_slider_2->add_control(
	'url',
	[
		'label' => esc_html__('URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$repeater_slider_2->add_control(
	'category',
	[
		'label' => esc_html__('Category', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tour & Travel', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_slider_2->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_three_gallery_slider_2',
	[
		'label' => esc_html__('Gallery Slider 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_slider_2->get_controls(),
		'default' => [
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'title' => esc_html__('Brown Concrete Building', 'roavio-toolkit'),
				'category' => esc_html__('Tour & Travel', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
		'title_field' => '{{{ title }}}',
	]
);


$this->end_controls_section();
