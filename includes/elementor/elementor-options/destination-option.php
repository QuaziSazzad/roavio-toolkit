<?php


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
			'layout_type' => ['layout_one', 'layout_two', 'layout_four', 'layout_five'],
		]
	]
);

$layout_three_locations = new \Elementor\Repeater();

$layout_three_locations->add_control(
	'location',
	[
		'label' => esc_html__('Location Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('New York', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_three_locations->add_control(
	'listing_text',
	[
		'label' => esc_html__('Listing Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Listing', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_three_locations->add_control(
	'summary_text',
	[
		'label' => esc_html__('Summary Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Discover the Bali with our special tour', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_three_locations->add_control(
	'select_category',
	[
		'label' => esc_html__('Select Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT2,
		'options' => rt_taxonomy_list('ba_location'),
	]
);

$layout_three_locations->add_control(
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

$layout_three_locations->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_locations_items',
	[
		'label' => esc_html__('Destination Items', 'roavio-toolkit'),
		'prevent_empty' => false,
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_three_locations->get_controls(),
		'title_field' => '{{{ location }}}',
		'condition' => [
			'layout_type' => 'layout_three',
		]
	]
);


$this->end_controls_section();
