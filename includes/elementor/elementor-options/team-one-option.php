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
		'label_block' => true,
		'default' => esc_html__('Meet Our Travel Guide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
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
	'layout_one_section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('The leadership team guiding Togo\'s success', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section subtitle', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_one_subtitle_tag',
	[
		'label' => esc_html__('Section Subtitle Tag', 'roavio-toolkit'),
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_team_image',
	[
		'label' => esc_html__('Team Member Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'layout_one_team_name',
	[
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Emma Williams', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter team member name', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_team_designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Senior Tour Guide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter designation', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_team_link',
	[
		'label' => esc_html__('Profile Link', 'roavio-toolkit'),
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
	'layout_one_team_members',
	[
		'label' => esc_html__('Team Members', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_team_name' => esc_html__('Emma Williams', 'roavio-toolkit'),
				'layout_one_team_designation' => esc_html__('Senior Tour Guide', 'roavio-toolkit'),
			],
			[
				'layout_one_team_name' => esc_html__('James Anderson', 'roavio-toolkit'),
				'layout_one_team_designation' => esc_html__('Travel Specialist', 'roavio-toolkit'),
			],
			[
				'layout_one_team_name' => esc_html__('Sophia Martinez', 'roavio-toolkit'),
				'layout_one_team_designation' => esc_html__('Cultural Guide', 'roavio-toolkit'),
			],
			[
				'layout_one_team_name' => esc_html__('Ava Thompson', 'roavio-toolkit'),
				'layout_one_team_designation' => esc_html__('Holiday Planner', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_team_name }}}',
	]
);



$this->end_controls_section();
