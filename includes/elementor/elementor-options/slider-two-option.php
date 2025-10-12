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

// Slider Content Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_slide_image',
	[
		'label' => esc_html__('Slide Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_two_slide_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Indonesia', 'roavio-toolkit'),
		'default' => esc_html__('Indonesia', 'roavio-toolkit'),
	]
);

$repeater->add_control(
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

$repeater->add_control(
	'layout_two_slide_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Jakarta Cathedral, officially named the Cathedral of Our Lady of the Assumption, stands as a breathtaking landmark in the heart of the city.', 'roavio-toolkit'),
		'default' => esc_html__('Jakarta Cathedral, officially named the Cathedral of Our Lady of the Assumption, stands as a breathtaking landmark in the heart of the city.', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_slide_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Explore Destinations', 'roavio-toolkit'),
		'default' => esc_html__('Explore Destinations', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_slide_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

$repeater->add_control(
	'layout_two_box_background',
	[
		'label' => esc_html__('Box Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'separator' => 'before',
	]
);

$repeater->add_control(
	'layout_two_tours_count',
	[
		'label' => esc_html__('Tours Count', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('100', 'roavio-toolkit'),
		'default' => esc_html__('100', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_tours_text',
	[
		'label' => esc_html__('Tours Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Tours Available', 'roavio-toolkit'),
		'default' => esc_html__('Tours Available', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_two_small_image',
	[
		'label' => esc_html__('Small Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_two_rating',
	[
		'label' => esc_html__('Rating', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('4.8', 'roavio-toolkit'),
		'default' => esc_html__('4.8', 'roavio-toolkit'),
		'separator' => 'before',
	]
);

$repeater->add_control(
	'layout_two_rating_icon',
	[
		'label' => esc_html__('Rating Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_two_show_stars',
	[
		'label' => esc_html__('Show Stars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$repeater->add_control(
	'layout_two_stars_count',
	[
		'label' => esc_html__('Number of Stars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '5',
		'options' => [
			'1' => esc_html__('1', 'roavio-toolkit'),
			'2' => esc_html__('2', 'roavio-toolkit'),
			'3' => esc_html__('3', 'roavio-toolkit'),
			'4' => esc_html__('4', 'roavio-toolkit'),
			'5' => esc_html__('5', 'roavio-toolkit'),
		],
		'condition' => [
			'layout_two_show_stars' => 'yes',
		],
	]
);

$this->add_control(
	'layout_two_slides',
	[
		'label' => esc_html__('Slides', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_slide_title' => esc_html__('Indonesia', 'roavio-toolkit'),
				'layout_two_slide_description' => esc_html__('Jakarta Cathedral, officially named the Cathedral of Our Lady of the Assumption, stands as a breathtaking landmark in the heart of the city.', 'roavio-toolkit'),
				'layout_two_slide_button_text' => esc_html__('Explore Destinations', 'roavio-toolkit'),
				'layout_two_tours_count' => esc_html__('100', 'roavio-toolkit'),
				'layout_two_tours_text' => esc_html__('Tours Available', 'roavio-toolkit'),
				'layout_two_rating' => esc_html__('4.8', 'roavio-toolkit'),
				'layout_two_show_stars' => 'yes',
				'layout_two_stars_count' => '5',
			],
			[
				'layout_two_slide_title' => esc_html__('Indonesia', 'roavio-toolkit'),
				'layout_two_slide_description' => esc_html__('Jakarta Cathedral, officially named the Cathedral of Our Lady of the Assumption, stands as a breathtaking landmark in the heart of the city.', 'roavio-toolkit'),
				'layout_two_slide_button_text' => esc_html__('Explore Destinations', 'roavio-toolkit'),
				'layout_two_tours_count' => esc_html__('100', 'roavio-toolkit'),
				'layout_two_tours_text' => esc_html__('Tours Available', 'roavio-toolkit'),
				'layout_two_rating' => esc_html__('4.8', 'roavio-toolkit'),
				'layout_two_show_stars' => 'yes',
				'layout_two_stars_count' => '5',
			],
		],
		'title_field' => '{{{ layout_two_slide_title }}}',
	]
);

$this->end_controls_section();
