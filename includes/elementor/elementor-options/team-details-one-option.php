<?php

//content
$this->start_controls_section(
	'layout_one_left_content',
	[
		'label' => esc_html__('Left Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);


$this->add_control(
	'layout_one_team_name',
	[
		'label' => esc_html__('Team Member Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Samuel D. Fletcher', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Business Consultant', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_contact_title',
	[
		'label' => esc_html__('Contact Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Contact Me', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_email_title',
	[
		'label' => esc_html__('Email Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email Address', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_one_team_email',
	[
		'label' => esc_html__('Email Address', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('supportsaylo@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_phone_title',
	[
		'label' => esc_html__('Phone Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Need a Call', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_one_team_phone',
	[
		'label' => esc_html__('Phone Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+000 (123) 456 888', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_location_title',
	[
		'label' => esc_html__('Location Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Location', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_location',
	[
		'label' => esc_html__('Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('55 Main Street, d-block, New York', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('IT consultant provides expert guidance to help organizations navigate challenges, seize opportunities, and achieve their full potential. By analyzing th company\'s current operations, identifying inefficiencies, and uncovering growth opportunities, a business consultant develops tailored strategies that drive success.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_follow_title',
	[
		'label' => esc_html__('Follow Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Follow Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_social_links',
	[
		'label' => esc_html__('Social Links', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'social_icon',
				'label' => esc_html__('Icon', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'fa-brands',
				],
			],
			[
				'name' => 'social_link',
				'label' => esc_html__('Link', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
			],
		],
		'default' => [
			[
				'social_icon' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'fa-brands',
				],
			],
			[
				'social_icon' => [
					'value' => 'fab fa-twitter',
					'library' => 'fa-brands',
				],
			],
			[
				'social_icon' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'fa-brands',
				],
			],
			[
				'social_icon' => [
					'value' => 'fab fa-youtube',
					'library' => 'fa-brands',
				],
			],
		],
		'title_field' => '<i class="{{ social_icon.value }}"></i>',
	]
);


$this->add_control(
	'layout_one_team_image',
	[
		'label' => esc_html__('Team Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();


//content
$this->start_controls_section(
	'layout_one_right_content',
	[
		'label' => esc_html__('Right Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$this->add_control(
	'layout_one_eight_title',
	[
		'label' => esc_html__('Right Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Hello', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_eight_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::CODE,
		'default' => esc_html__('Default Content', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$layout_one_progressbar = new \Elementor\Repeater();

$layout_one_progressbar->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
		'default' => esc_html__('IT Consulting', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_progressbar->add_control(
	'number',
	[
		'label' => esc_html__('Percentage', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SLIDER,
		'size_units' => ['count'],
		'range' => [
			'count' => [
				'min' => 0,
				'max' => 100,
				'step' => 1,
			],
		],
		'default' => [
			'unit' => 'count',
			'size' => 89,
		],
	]
);


$this->add_control(
	'layout_one_progressbar',
	[
		'label' => esc_html__('Progress List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_progressbar->get_controls(),
		'title_field' => '{{{ title }}}',
	]
);

$this->add_control(
	'layout_one_bottom_title',
	[
		'label' => esc_html__('Bottom Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Awards Winning', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_bottom_content',
	[
		'label' => esc_html__('Bottom Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Default Content', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
