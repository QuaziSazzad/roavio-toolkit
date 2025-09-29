<?php

//content
$this->start_controls_section(
	'layout_six_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_six'
		]
	]
);

$this->add_control(
	'layout_six_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => wp_kses(__(' Passionate about your adventures with <b>ROAVIO</b>', 'roavio-toolkit'), ['b' => []]),
		'placeholder' => esc_html__('Type your section title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_title_tag',
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
	'layout_six_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We believe travel is more than just a trip—it\'s an experience that shapes your life. Our mission is to create unforgettable journeys that combine adventure, comfort, and authentic cultural encounters.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
		'label_block' => true,
	]
);


// Tab Navigation
$this->add_control(
	'layout_six_tab_heading',
	[
		'label' => esc_html__('Tab Navigation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$layout_six_tabs = new \Elementor\Repeater();

$layout_six_tabs->add_control(
	'tab_title',
	[
		'label' => esc_html__('Tab Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Our Mission', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$layout_six_tabs->add_control(
	'tab_content',
	[
		'label' => esc_html__('Tab Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your tab content here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Features List for each tab
$layout_six_features = new \Elementor\Repeater();

$layout_six_features->add_control(
	'feature_text',
	[
		'label' => esc_html__('Feature Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your feature text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$layout_six_features->add_control(
	'feature_icon',
	[
		'label' => esc_html__('Feature Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa fa-check',
			'library' => 'font-awesome',
		],
	]
);

$layout_six_tabs->add_control(
	'tab_features',
	[
		'label' => esc_html__('Tab Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_six_features->get_controls(),
		'default' => [
			[
				'feature_text' => esc_html__('Destination Search & Filters', 'roavio-toolkit'),
				'feature_icon' => [
					'value' => 'fa fa-check',
					'library' => 'font-awesome',
				],
			],
			[
				'feature_text' => esc_html__('Online Booking System', 'roavio-toolkit'),
				'feature_icon' => [
					'value' => 'fa fa-check',
					'library' => 'font-awesome',
				],
			],
			[
				'feature_text' => esc_html__('Blog & Travel Guides', 'roavio-toolkit'),
				'feature_icon' => [
					'value' => 'fa fa-check',
					'library' => 'font-awesome',
				],
			],
		],
		'title_field' => '{{{ feature_text }}}',
	]
);

$layout_six_tabs->add_control(
	'tab_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your button text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$layout_six_tabs->add_control(
	'tab_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
	]
);

$this->add_control(
	'layout_six_tabs',
	[
		'label' => esc_html__('Tabs', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_six_tabs->get_controls(),
		'default' => [
			[
				'tab_title' => esc_html__('Our Mission', 'roavio-toolkit'),
				'tab_content' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
				'tab_button_text' => esc_html__('Learn More Us', 'roavio-toolkit'),
			],
			[
				'tab_title' => esc_html__('Our Vision', 'roavio-toolkit'),
				'tab_content' => esc_html__('Take the stress to travel with our seamless flight booking and reservation services.', 'roavio-toolkit'),
				'tab_button_text' => esc_html__('Learn More Us', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ tab_title }}}',
	]
);

$this->add_control(
	'layout_six_left_image',
	[
		'label' => esc_html__('Left Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_six_right_image',
	[
		'label' => esc_html__('Right Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
