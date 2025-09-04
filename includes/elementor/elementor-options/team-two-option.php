<?php

//content
$this->start_controls_section(
	'layout_two_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);

$this->add_control(
	'layout_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Experience Technical Team', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_title_tag',
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
	'layout_two_sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add sub title', 'roavio-toolkit'),
		'default' => esc_html__('Meet Our Team', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_two_team_list = new \Elementor\Repeater();

$layout_two_team_list->add_control(
	'name',
	[
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add Title', 'roavio-toolkit'),
		'default' => esc_html__('Raymond R. Jacobs', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_two_team_list->add_control(
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

$layout_two_team_list->add_control(
	'designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add Designation', 'roavio-toolkit'),
		'default' => esc_html__('Ceo & Founder', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_two_team_list->add_control(
	'social',
	[
		'label' => esc_html__('Social Profile', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::CODE,
		'rows' => '2',
		'placeholder' => esc_html__('Add Social Profile', 'roavio-toolkit'),
		'default' => wp_kses(__('<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
			<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
			<a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>', 'roavio-toolkit'), rt_get_allowed_html_tags()),
		'label_block' => true
	]
);

$layout_two_team_list->add_control(
	'image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_two_team_list',
	[
		'label' => esc_html__('Team List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_two_team_list->get_controls(),
		'prevent_empty' => false,
		'title_field' => '{{{ name }}}',
		'default' => [
			[
				'name' => esc_html__('David R. Watkins', 'roavio-toolkit'),
				'designation' => esc_html__('IT Consultant', 'roavio-toolkit'),
				'social' => wp_kses(__('<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>', 'roavio-toolkit'), rt_get_allowed_html_tags()),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'name' => esc_html__('James K. Andrews', 'roavio-toolkit'),
				'designation' => esc_html__('UI Designer', 'roavio-toolkit'),
				'social' => wp_kses(__('<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>', 'roavio-toolkit'), rt_get_allowed_html_tags()),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'name' => esc_html__('Kenneth B. Hebert', 'roavio-toolkit'),
				'designation' => esc_html__('HR Support', 'roavio-toolkit'),
				'social' => wp_kses(__('<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>', 'roavio-toolkit'), rt_get_allowed_html_tags()),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'name' => esc_html__('Alexander M. Burris', 'roavio-toolkit'),
				'designation' => esc_html__('Product Designer', 'roavio-toolkit'),
				'social' => wp_kses(__('<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>', 'roavio-toolkit'), rt_get_allowed_html_tags()),
				'url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
	]
);


$this->end_controls_section();
