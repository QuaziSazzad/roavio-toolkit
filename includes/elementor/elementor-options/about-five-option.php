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
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Unmatched Protection for a Safer Digital Future', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
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
	'layout_five_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Why Choose Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_five_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Cybersecurity solutions provide the tools and strategies to safeguard sensitive information, ensure the integrity of digital assets, and maintain business continuity implementing robust firewalls and encryption to proactive monitoring.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

// Progress Circle 1
$this->add_control(
	'layout_five_progress_circle_one_heading',
	[
		'label' => esc_html__('Progress Circle 1', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_five_progress_circle_one_value',
	[
		'label' => esc_html__('Value', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'default' => 95,
		'min' => 0,
		'max' => 100,
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_progress_circle_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Satisfied Our Trusted Clients', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Progress Circle 2
$this->add_control(
	'layout_five_progress_circle_two_heading',
	[
		'label' => esc_html__('Progress Circle 2', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_five_progress_circle_two_value',
	[
		'label' => esc_html__('Value', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'default' => 85,
		'min' => 0,
		'max' => 100,
	]
);

$this->add_control(
	'layout_five_progress_circle_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('World Projects Complete', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Proven Expertise Section
$this->add_control(
	'layout_five_proven_expertise_heading',
	[
		'label' => esc_html__('Proven Expertise Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_five_proven_expertise_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Proven Expertise in Safeguarding Your Data', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_proven_expertise_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('A cybersecurity agency is dedicated to protecting individuals, businesses, and organizations from the ever-evolving threats of the digital world.', 'roavio-toolkit'),
	]
);

// List Items
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'list_item',
	[
		'label' => esc_html__('List Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('List Item', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your list item here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-check',
			'library' => 'fa-solid',
		],
	]
);

$this->add_control(
	'layout_five_list_items',
	[
		'label' => esc_html__('List Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'list_item' => esc_html__('Software Development & Integration', 'roavio-toolkit'),
			],
			[
				'list_item' => esc_html__('Help Desk & Technical Support', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ list_item }}}',
	]
);

// Image Section
$this->add_control(
	'layout_five_image_section_heading',
	[
		'label' => esc_html__('Image Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_five_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_five_team_member_count',
	[
		'label' => esc_html__('Team Member Count', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('25+ Expert Team Member', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_team_member_icon',
	[
		'label' => esc_html__('Team Member Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-experts',
			'library' => 'flaticon',
		],
	]
);


$this->end_controls_section();
