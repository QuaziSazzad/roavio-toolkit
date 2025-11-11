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

// Video URL
$this->add_control(
	'layout_two_video_url',
	[
		'label' => esc_html__('Video URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('https://www.youtube.com/watch?v=Cn4G2lZ_g2I', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter video URL', 'roavio-toolkit'),
	]
);

// Shape Image
$this->add_control(
	'layout_two_shape_image',
	[
		'label' => esc_html__('Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

// Video Background Image
$this->add_control(
	'layout_two_video_bg_image',
	[
		'label' => esc_html__('Video Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);



// Brand Section Title
$this->add_control(
	'layout_two_brand_title',
	[
		'label' => esc_html__('Brand Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Relied upon by top-performing teams worldwide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter brand section title', 'roavio-toolkit'),
	]
);

// Brand Logos
$this->add_control(
	'layout_two_brand_logos',
	[
		'label' => esc_html__('Brand Logos', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'brand_logo',
				'label' => esc_html__('Brand Logo', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			],
		],
		'default' => [],
		'title_field' => esc_html__('Brand Logo', 'roavio-toolkit'),
	]
);


$this->end_controls_section();
