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
	'layout_one_title',
	[
		'label' => esc_html__('Widget Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Get In Touch', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_contact_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-regular fa-map-location-dot',
			'library' => 'fa-regular',
		],
	]
);

$repeater->add_control(
	'layout_one_contact_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('578 Level, D-block Street Melbourne, Australia', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_contact_link',
	[
		'label' => esc_html__('Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$repeater->add_control(
	'layout_one_contact_last_item',
	[
		'label' => esc_html__('Is Last Item?', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_one_contact_items',
	[
		'label' => esc_html__('Contact Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_contact_icon' => [
					'value' => 'fa-regular fa-map-location-dot',
					'library' => 'fa-regular',
				],
				'layout_one_contact_content' => esc_html__('578 Level, D-block Street Melbourne, Australia', 'roavio-toolkit'),
				'layout_one_contact_link' => [
					'url' => '',
				],
				'layout_one_contact_last_item' => 'no',
			],
			[
				'layout_one_contact_icon' => [
					'value' => 'fa-regular fa-envelope',
					'library' => 'fa-regular',
				],
				'layout_one_contact_content' => esc_html__('supportrevelo@gmail.com', 'roavio-toolkit'),
				'layout_one_contact_link' => [
					'url' => 'mailto:supportrevelo@gmail.com',
				],
				'layout_one_contact_last_item' => 'no',
			],
			[
				'layout_one_contact_icon' => [
					'value' => 'fa-regular fa-phone-volume',
					'library' => 'fa-regular',
				],
				'layout_one_contact_content' => esc_html__('+880 123 345 88', 'roavio-toolkit'),
				'layout_one_contact_link' => [
					'url' => 'tel:+88012334588',
				],
				'layout_one_contact_last_item' => 'yes',
			],
		],
		'title_field' => '{{{ layout_one_contact_content }}}',
	]
);


$this->end_controls_section();
