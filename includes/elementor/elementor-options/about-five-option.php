<?php

//content
$this->start_controls_section(
	'layout_five_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_five'
		]
	]
);

$this->add_control(
	'layout_five_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Travel adventure, our commitment to excellence turning your travel.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_five_title_tag',
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
	'layout_five_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We\'re here to deliver nothing but the best. at our travel agency, adventure meets precision as we a personalized itineraries designed for your ultimate experience.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);


$this->add_control(
	'layout_five_video_url',
	[
		'label' => esc_html__('Video URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'default' => [
			'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
		],
		'placeholder' => esc_html__('https://your-video-url.com', 'roavio-toolkit'),
	]
);


$this->add_control(
	'layout_five_count_1_number',
	[
		'label' => esc_html__('Count 1 Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('500', 'roavio-toolkit'),
		'placeholder' => esc_html__('500', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_five_count_1_text',
	[
		'label' => esc_html__('Count 1 Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('World tours available', 'roavio-toolkit'),
		'placeholder' => esc_html__('World tours available', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_five_count_2_number',
	[
		'label' => esc_html__('Count 2 Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('20', 'roavio-toolkit'),
		'placeholder' => esc_html__('20', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_five_count_2_text',
	[
		'label' => esc_html__('Count 2 Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Professional local guides', 'roavio-toolkit'),
		'placeholder' => esc_html__('Professional local guides', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_five_left_image',
	[
		'label' => esc_html__('Left Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_five_right_image_1',
	[
		'label' => esc_html__('Right Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_five_right_image_2',
	[
		'label' => esc_html__('Right Image 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
