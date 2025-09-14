<?php

//content
$this->start_controls_section(
	'layout_four_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);

$this->add_control(
	'layout_four_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => wp_kses(__('Passionate about <br> your adventures <br> with <b>ROAVIO</b>', 'roavio-toolkit'), ['br' => [], 'b' => []]),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_title_tag',
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
		],
	]
);

$this->add_control(
	'layout_four_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We believe travel is more than just a trip—it\'s an experience that shapes your life. Our mission is to create unforgettable journeys that combine adventure, comfort, and authentic cultural encounters.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_image_one',
	[
		'label' => esc_html__('About Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_tab_one_title',
	[
		'label' => esc_html__('Tab One Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Our Mission', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_two_title',
	[
		'label' => esc_html__('Tab Two Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Our Vision', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_one_content',
	[
		'label' => esc_html__('Tab One Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab content here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_one_features',
	[
		'label' => esc_html__('Tab One Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'feature_text',
				'label' => esc_html__('Feature Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
			],
			[
				'name' => 'icon',
				'label' => esc_html__('Icon', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-check',
					'library' => 'font-awesome',
				],
			],
		],
		'default' => [
			[
				'feature_text' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
			],
			[
				'feature_text' => esc_html__('Online Booking System', 'roavio-toolkit'),
			],
			[
				'feature_text' => esc_html__('Blog & Travel Guides', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ feature_text }}}',
	]
);

$this->add_control(
	'layout_four_tab_one_button_text',
	[
		'label' => esc_html__('Tab One Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your button text here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_one_button_url',
	[
		'label' => esc_html__('Tab One Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
	]
);

$this->add_control(
	'layout_four_tab_two_content',
	[
		'label' => esc_html__('Tab Two Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab content here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_two_features',
	[
		'label' => esc_html__('Tab Two Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'feature_text',
				'label' => esc_html__('Feature Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
			],
			[
				'name' => 'icon',
				'label' => esc_html__('Icon', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-check',
					'library' => 'font-awesome',
				],
			],
		],
		'default' => [
			[
				'feature_text' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
			],
			[
				'feature_text' => esc_html__('Online Booking System', 'roavio-toolkit'),
			],
			[
				'feature_text' => esc_html__('Blog & Travel Guides', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ feature_text }}}',
	]
);

$this->add_control(
	'layout_four_tab_two_button_text',
	[
		'label' => esc_html__('Tab Two Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your button text here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_tab_two_button_url',
	[
		'label' => esc_html__('Tab Two Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
	]
);

$this->add_control(
	'layout_four_image_two',
	[
		'label' => esc_html__('Right Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_image_three',
	[
		'label' => esc_html__('Right Image Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);



$this->end_controls_section();
