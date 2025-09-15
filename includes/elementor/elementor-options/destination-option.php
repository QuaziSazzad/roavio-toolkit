<?php

//content
$this->start_controls_section(
	'layout_one_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);



$this->add_control(
	'section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore Popular Destinations', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'title_tag',
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
	'section_sub_title',
	[
		'label' => esc_html__('Section Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Make the most of your travel experience with our carefully curated tours designed to offer convenience', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'section_sub_title_tag',
	[
		'label' => esc_html__('Section Sub Title Tag', 'roavio-toolkit'),
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

$this->end_controls_section();

//Location
$this->start_controls_section(
	'location_options',
	[
		'label' => esc_html__('Location Options', 'roavio-toolkit'),
		'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);

$locations = new \Elementor\Repeater();

$locations->add_control(
	'location',
	[
		'label' => esc_html__('Location Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('New York', 'roavio-toolkit'),
		'label_block' => true
	]
);

$locations->add_control(
	'listing_text',
	[
		'label' => esc_html__('Listing Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Listing', 'roavio-toolkit'),
		'label_block' => true
	]
);

$locations->add_control(
	'select_category',
	[
		'label' => esc_html__('Select Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT2,
		'options' => rt_taxonomy_list('ba_location'),
	]
);

$locations->add_control(
	'custom_url',
	[
		'label' => esc_html__('Custom Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => true,
	]
);

$locations->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'locations_items',
	[
		'label' => esc_html__('Destination Items', 'roavio-toolkit'),
		'prevent_empty' => false,
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $locations->get_controls(),
		'title_field' => '{{{ location }}}',
		'condition' => [
			'layout_type' => ['layout_one'],
		]
	]
);

$locations_two = new \Elementor\Repeater();

$locations_two->add_control(
	'location',
	[
		'label' => esc_html__('Location Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('New York', 'roavio-toolkit'),
		'label_block' => true
	]
);

$locations_two->add_control(
	'select_category',
	[
		'label' => esc_html__('Select Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT2,
		'options' => rt_taxonomy_list('ba_location'),
	]
);

$locations_two->add_control(
	'custom_url',
	[
		'label' => esc_html__('Custom Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => true,
	]
);

$locations_two->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$locations_two->add_control(
	'column',
	[
		'label' => __('Select Column Class', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT2,
		'default' => 'col-xl-3',
		'options' => [
			'col-xl-6' => __('col-xl-6', 'roavio-toolkit'),
			'col-xl-5' => __('col-xl-5', 'roavio-toolkit'),
			'col-xl-4' => __('col-xl-4', 'roavio-toolkit'),
			'col-xl-3' => __('col-xl-3', 'roavio-toolkit'),
			'col-xl-2' => __('col-xl-2', 'roavio-toolkit'),
			'col-xl-1' => __('col-xl-1', 'roavio-toolkit'),
		]
	]
);

$this->add_control(
	'locations_two_items',
	[
		'label' => esc_html__('Destination Items', 'roavio-toolkit'),
		'prevent_empty' => false,
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $locations_two->get_controls(),
		'title_field' => '{{{ location }}}',
		'condition' => [
			'layout_type' => ['layout_two'],
		]
	]
);

$this->end_controls_section();
