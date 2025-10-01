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
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('David Ahmed', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_name_tag',
	[
		'label' => esc_html__('Name Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h3',
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
	'layout_one_team_designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Software Engineer', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_team_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Mauris sapien neque, placerat ut dolor nec, egestas tincidunt felis. Sed in ornare quam, finibus dui aliquam justo duis eros quam, semper at libero sed, vehicula the consequat arcu. In ornare, enim at egestas bibendum, ligula ante congue arcu, sed ornare sem nulla is nec magna. Morbi faucibus.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Progress Bars
$this->add_control(
	'layout_one_progress_heading',
	[
		'label' => esc_html__('Progress Bars', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_skill_title',
	[
		'label' => esc_html__('Skill Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tour Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_skill_percentage',
	[
		'label' => esc_html__('Skill Percentage', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SLIDER,
		'size_units' => ['%'],
		'range' => [
			'%' => [
				'min' => 0,
				'max' => 100,
			],
		],
		'default' => [
			'unit' => '%',
			'size' => 90,
		],
	]
);

$this->add_control(
	'layout_one_skills',
	[
		'label' => esc_html__('Skills', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_skill_title' => esc_html__('Tour Package', 'roavio-toolkit'),
				'layout_one_skill_percentage' => [
					'unit' => '%',
					'size' => 90,
				],
			],
			[
				'layout_one_skill_title' => esc_html__('Travel', 'roavio-toolkit'),
				'layout_one_skill_percentage' => [
					'unit' => '%',
					'size' => 95,
				],
			],
		],
		'title_field' => '{{{ layout_one_skill_title }}}',
	]
);

// Social Media
$this->add_control(
	'layout_one_social_heading',
	[
		'label' => esc_html__('Social Media', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_social_label',
	[
		'label' => esc_html__('Social Media Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Social Media:', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$social_repeater = new \Elementor\Repeater();

$social_repeater->add_control(
	'layout_one_social_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fab fa-facebook-f',
			'library' => 'fa-brands',
		],
	]
);

$social_repeater->add_control(
	'layout_one_social_link',
	[
		'label' => esc_html__('Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

$this->add_control(
	'layout_one_social_icons',
	[
		'label' => esc_html__('Social Icons', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $social_repeater->get_controls(),
		'default' => [
			[
				'layout_one_social_icon' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'fa-brands',
				],
				'layout_one_social_link' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			],
			[
				'layout_one_social_icon' => [
					'value' => 'fab fa-twitter',
					'library' => 'fa-brands',
				],
				'layout_one_social_link' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			],
			[
				'layout_one_social_icon' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'fa-brands',
				],
				'layout_one_social_link' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			],
			[
				'layout_one_social_icon' => [
					'value' => 'fab fa-pinterest-p',
					'library' => 'fa-brands',
				],
				'layout_one_social_link' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			],
		],
		'title_field' => '<i class="{{{ layout_one_social_icon.value }}}"></i>',
	]
);

$this->add_control(
	'layout_one_team_image',
	[
		'label' => esc_html__('Team Member Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->end_controls_section();

// Education Background Section
$this->start_controls_section(
	'layout_one_education_section',
	[
		'label' => esc_html__('Education Background', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$this->add_control(
	'layout_one_education_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Education Background', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_education_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h3',
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

$education_repeater = new \Elementor\Repeater();

$education_repeater->add_control(
	'layout_one_education_degree',
	[
		'label' => esc_html__('Degree/Diploma', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Diploma in Web Design', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$education_repeater->add_control(
	'layout_one_education_period',
	[
		'label' => esc_html__('Period', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('2012 - 2014', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$education_repeater->add_control(
	'layout_one_education_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s in the ou standard dummy text ever since the 1500s, when an unknown printer took.Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s in the abouti standard dummy', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_education_items',
	[
		'label' => esc_html__('Education Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $education_repeater->get_controls(),
		'default' => [
			[
				'layout_one_education_degree' => esc_html__('Diploma in Web Design', 'roavio-toolkit'),
				'layout_one_education_period' => esc_html__('2012 - 2014', 'roavio-toolkit'),
				'layout_one_education_description' => esc_html__('Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s in the ou standard dummy text ever since the 1500s, when an unknown printer took.Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s in the abouti standard dummy', 'roavio-toolkit'),
			],
			[
				'layout_one_education_degree' => esc_html__('Degree in UI/UX Design', 'roavio-toolkit'),
				'layout_one_education_period' => esc_html__('2015 - 2016', 'roavio-toolkit'),
				'layout_one_education_description' => esc_html__('Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s in the ou standard dummy text ever since the 1500s, when an unknown printer took.Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s in the abouti standard dummy', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_education_degree }}}',
	]
);


$this->end_controls_section();
