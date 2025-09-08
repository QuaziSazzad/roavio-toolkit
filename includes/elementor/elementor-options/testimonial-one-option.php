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
	'layout_one_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '100k+ Customer Say Us',
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Join over 100,000 satisfied travelers who have experienced',
		'placeholder' => esc_html__('Enter section subtitle', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'testimonial_text',
	[
		'label' => esc_html__('Testimonial Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Booking with this agency was the best decision for our Bali trip! from flights to accommodations!',
		'placeholder' => esc_html__('Enter testimonial text', 'roavio-toolkit'),
		'label_block' => true,
	]
);

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
		'default' => 'World traveler',
		'placeholder' => esc_html__('Enter client designation', 'roavio-toolkit'),
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

$this->add_control(
	'layout_one_testimonials',
	[
		'label' => esc_html__('Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'testimonial_text' => 'Booking with this agency was the best decision for our Bali trip! from flights to accommodations!',
				'client_name' => 'Michael Thompson',
				'client_designation' => 'World traveler',
			],
			[
				'testimonial_text' => 'Booking with this agency was the best decision for our Bali trip! from flights to accommodations!',
				'client_name' => 'Michael Thompson',
				'client_designation' => 'World traveler',
			],
			[
				'testimonial_text' => 'Booking with this agency was the best decision for our Bali trip! from flights to accommodations!',
				'client_name' => 'Michael Thompson',
				'client_designation' => 'World traveler',
			],
		],
		'title_field' => '{{{ client_name }}}',
		'label_block' => true,
	]
);

// Right side images
$this->add_control(
	'layout_one_right_image_1',
	[
		'label' => esc_html__('Right Image 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_right_image_2',
	[
		'label' => esc_html__('Right Image 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_right_image_3',
	[
		'label' => esc_html__('Right Image 3', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_right_image_4',
	[
		'label' => esc_html__('Right Image 4 (Video)', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_video_url',
	[
		'label' => esc_html__('Video URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'default' => [
			'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
		],
		'placeholder' => esc_html__('Enter video URL', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true,
	]
);

$this->end_controls_section();
