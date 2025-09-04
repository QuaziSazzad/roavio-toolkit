<?php

//content
$this->start_controls_section(
	'layout_one_section_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

$this->add_control(
	'layout_one_copyright',
	[
		'label' => esc_html__('Copyright Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add copyright text', 'roavio-toolkit'),
		'default' => esc_html__('Copyright', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_nav_menu = new \Elementor\Repeater();

$layout_one_nav_menu->add_control(
	'title',
	[
		'label' => esc_html__('Nav Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add nav title', 'roavio-toolkit'),
		'default' => esc_html__('Refund', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_nav_menu->add_control(
	'url',
	[
		'label' => __('Add Nav Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => __('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => false,
	]
);

$this->add_control(
	'layout_one_nav_menu',
	[
		'label' => __('Nav Menu', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_nav_menu->get_controls(),
		'prevent_empty' => false,
		'default' => [
			[
				'social_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
	]
);

$this->add_control(
	'layout_one_enable_back_to_top',
	[
		'label' => __('Back To Top Section?', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => __('Yes', 'roavio-toolkit'),
		'label_off' => __('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_icon',
	[
		'label' => __('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-arrow-up',
			'library' => 'custom-icon',
		],
		'condition' => [
			'layout_one_enable_back_to_top' => 'yes',
		]
	]
);

$this->end_controls_section();
