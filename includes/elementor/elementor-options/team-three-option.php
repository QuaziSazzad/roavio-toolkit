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

$this->add_control(
	'layout_three_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Meet Our Team', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your sub title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_three_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Experience Technical Team', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_three_title_tag',
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'image',
	[
		'label' => esc_html__('Member Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'name',
	[
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('David R. Watkins', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type member name here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('IT Consultant', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type member designation here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type member description here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'url',
	[
		'label' => esc_html__('Profile URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

$repeater->add_control(
	'social',
	[
		'label' => esc_html__('Social Links', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-linkedin-in"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>',
		'placeholder' => esc_html__('Add social links with HTML', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_three_team_list',
	[
		'label' => esc_html__('Team Members', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'name' => esc_html__('David R. Watkins', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('As an IT consultant, our mission is to bridge the technology.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
			[
				'name' => esc_html__('Robert S. Hummel', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
			[
				'name' => esc_html__('Eugene A. Howland', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
			[
				'name' => esc_html__('Paul G. Hundley', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
			[
				'name' => esc_html__('Danny J. Harrison', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
			[
				'name' => esc_html__('Nathan S. Barber', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'description' => esc_html__('Current IT identify opportunities for improvement, and develop.', 'roavio-toolkit'),
				'url' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'social' => '<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>',
				'image' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			],
		],
		'title_field' => '{{{ name }}}',
	]
);


$this->end_controls_section();
