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

// Section Title
$this->add_control(
	'layout_three_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Meet Our Resort Guide', 'roavio-toolkit'),
	]
);

// Section Title Tag
$this->add_control(
	'layout_three_section_title_tag',
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

// Section Description
$this->add_control(
	'layout_three_section_description',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('Resort Guide is designed to help you make the most of your stay offering everything need to know at your fingertips.', 'roavio-toolkit'),
	]
);

// Team Members Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_three_team_image',
	[
		'label' => esc_html__('Team Member Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_three_team_name',
	[
		'label' => esc_html__('Team Member Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Michael Anderson', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_three_team_position',
	[
		'label' => esc_html__('Team Member Position', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Resort Manager', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_three_team_link',
	[
		'label' => esc_html__('Team Member Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'label_block' => true,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_three_team_members',
	[
		'label' => esc_html__('Team Members', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_three_team_name' => esc_html__('Michael Anderson', 'roavio-toolkit'),
				'layout_three_team_position' => esc_html__('Resort Manager', 'roavio-toolkit'),
			],
			[
				'layout_three_team_name' => esc_html__('Michael Anderson', 'roavio-toolkit'),
				'layout_three_team_position' => esc_html__('Resort Manager', 'roavio-toolkit'),
			],
			[
				'layout_three_team_name' => esc_html__('Michael Anderson', 'roavio-toolkit'),
				'layout_three_team_position' => esc_html__('Resort Manager', 'roavio-toolkit'),
			],
			[
				'layout_three_team_name' => esc_html__('Michael Anderson', 'roavio-toolkit'),
				'layout_three_team_position' => esc_html__('Resort Manager', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_three_team_name }}}',
	]
);

// Show Navigation
$this->add_control(
	'layout_three_show_navigation',
	[
		'label' => esc_html__('Show Navigation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

// Show Pagination
$this->add_control(
	'layout_three_show_pagination',
	[
		'label' => esc_html__('Show Pagination', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);


$this->end_controls_section();
