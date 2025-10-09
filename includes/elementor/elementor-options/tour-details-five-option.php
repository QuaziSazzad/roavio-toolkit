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
		'default' => esc_html__('Need Help?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_five_contact_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-envelope',
			'library' => 'regular',
		],
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_five_contact_text',
	[
		'label' => esc_html__('Contact Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('helpxample@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_five_contact_url',
	[
		'label' => esc_html__('Contact URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_five_contact_items',
	[
		'label' => esc_html__('Contact Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_five_contact_icon' => [
					'value' => 'far fa-envelope',
					'library' => 'regular',
				],
				'layout_five_contact_text' => esc_html__('helpxample@gmail.com', 'roavio-toolkit'),
				'layout_five_contact_url' => [
					'url' => 'mailto:helpxample@gmail.com',
				],
			],
			[
				'layout_five_contact_icon' => [
					'value' => 'far fa-phone-volume',
					'library' => 'regular',
				],
				'layout_five_contact_text' => esc_html__('+000 (123) 456 88', 'roavio-toolkit'),
				'layout_five_contact_url' => [
					'url' => 'tel:+00012345688',
				],
			],
		],
		'title_field' => '{{{ layout_five_contact_text }}}',
	]
);


$this->end_controls_section();
