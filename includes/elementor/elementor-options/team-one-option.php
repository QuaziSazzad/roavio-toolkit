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
	'section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Experience Technical Team', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Title HTML Tag', 'roavio-toolkit'),
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
	'section_subtitle',
	[
		'label' => esc_html__('Section Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Meet Our Team', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'member_image',
	[
		'label' => esc_html__('Member Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'member_name',
	[
		'label' => esc_html__('Member Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('David R. Watkins', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'url',
	[
		'label' => esc_html__('Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => false,
	]
);

$repeater->add_control(
	'member_designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('IT Consultant', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'social_items',
	[
		'label' => esc_html__('Social Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::CODE,
		'default' => wp_kses(__('<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>', 'roavio-toolkit'), array('a' => array('href' => array(), 'target' => array(), 'rel' => array()), 'i' => array('class' => array()))),
		'label_block' => true,
	]
);


$this->add_control(
	'team_members',
	[
		'label' => esc_html__('Team Members', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'member_name' => esc_html__('David R. Watkins', 'roavio-toolkit'),
				'member_designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
			],
			[
				'member_name' => esc_html__('James K. Andrews', 'roavio-toolkit'),
				'member_designation' => esc_html__('UI Designer', 'roavio-toolkit'),
			],
			[
				'member_name' => esc_html__('Kenneth B. Hebert', 'roavio-toolkit'),
				'member_designation' => esc_html__('HR Support', 'roavio-toolkit'),
			],
			[
				'member_name' => esc_html__('Alexander M. Burris', 'roavio-toolkit'),
				'member_designation' => esc_html__('Product Designer', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ member_name }}}',
	]
);


$this->end_controls_section();
