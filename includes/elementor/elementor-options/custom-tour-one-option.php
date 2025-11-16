<?php

/*
* content
*/
$this->start_controls_section(
	'content',
	[
		'label' => esc_html__('Content', 'roavio-addon'),
		'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$this->add_control(
	'layout_one_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
		'default' => esc_html__('Escape, Relax & Indulge', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
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
	'layout_one_section_description',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'placeholder' => esc_html__('Add Description', 'roavio-toolkit'),
		'default' => esc_html__('Step into a world of comfort, elegance, and relaxation with the best resort experience designed just for you.', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_show_navigation',
	[
		'label' => esc_html__('Show Navigation Arrows', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

// Tour Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_tour_image',
	[
		'label' => esc_html__('Tour Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_one_tour_title',
	[
		'label' => esc_html__('Tour Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Luxury Suite Resorts', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_link',
	[
		'label' => esc_html__('Tour Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
	]
);

$repeater->add_control(
	'layout_one_tour_rating',
	[
		'label' => esc_html__('Rating', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'min' => 0,
		'max' => 5,
		'step' => 0.1,
		'default' => 4.8,
	]
);

$repeater->add_control(
	'reviews_text',
	[
		'label' => esc_html__('Reviews Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('reviews', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_reviews',
	[
		'label' => esc_html__('Reviews Count', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('3.8k', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('Indulge in the pinnacle of sophistication with our luxury suite resort here elegance and comfort come together in perfect harmony.', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('$2450', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_price_label',
	[
		'label' => esc_html__('Price Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('/per night', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_area',
	[
		'label' => esc_html__('Area', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('2760m', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_area_label',
	[
		'label' => esc_html__('Area Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('/Apartment', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_location',
	[
		'label' => esc_html__('Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Hills', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_tour_location_label',
	[
		'label' => esc_html__('Location Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('/Beverly', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_tour_items',
	[
		'label' => esc_html__('Tour Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_tour_title' => esc_html__('Luxury Suite Resorts', 'roavio-toolkit'),
				'layout_one_tour_rating' => 4.8,
				'layout_one_tour_reviews' => esc_html__('3.8k', 'roavio-toolkit'),
				'layout_one_tour_description' => esc_html__('Indulge in the pinnacle of sophistication with our luxury suite resort here elegance and comfort come together in perfect harmony.', 'roavio-toolkit'),
				'layout_one_tour_price' => esc_html__('$2450', 'roavio-toolkit'),
				'layout_one_tour_area' => esc_html__('2760m', 'roavio-toolkit'),
				'layout_one_tour_location' => esc_html__('Hills', 'roavio-toolkit'),
			],
			[
				'layout_one_tour_title' => esc_html__('Secrets Resort Playa', 'roavio-toolkit'),
				'layout_one_tour_rating' => 4.8,
				'layout_one_tour_reviews' => esc_html__('3.8k', 'roavio-toolkit'),
				'layout_one_tour_description' => esc_html__('Indulge in the pinnacle of sophistication with our luxury suite resort here elegance and comfort come together in perfect harmony.', 'roavio-toolkit'),
				'layout_one_tour_price' => esc_html__('$2300', 'roavio-toolkit'),
				'layout_one_tour_area' => esc_html__('1640m', 'roavio-toolkit'),
				'layout_one_tour_location' => esc_html__('Hills', 'roavio-toolkit'),
			],
			[
				'layout_one_tour_title' => esc_html__('Punta Cana resort', 'roavio-toolkit'),
				'layout_one_tour_rating' => 4.8,
				'layout_one_tour_reviews' => esc_html__('3.8k', 'roavio-toolkit'),
				'layout_one_tour_description' => esc_html__('Indulge in the pinnacle of sophistication with our luxury suite resort here elegance and comfort come together in perfect harmony.', 'roavio-toolkit'),
				'layout_one_tour_price' => esc_html__('$2450', 'roavio-toolkit'),
				'layout_one_tour_area' => esc_html__('2760m', 'roavio-toolkit'),
				'layout_one_tour_location' => esc_html__('Hills', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_tour_title }}}',
	]
);



$this->end_controls_section();
