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
	'layout_three_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We\'ve 1253+ Global Clients & lot\'s of Project Complete', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'sponsor_name',
	[
		'label' => esc_html__('Sponsor Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Dropbox', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type sponsor name here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'sponsor_image',
	[
		'label' => esc_html__('Sponsor Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'sponsors_list',
	[
		'label' => esc_html__('Sponsors List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'sponsor_name' => esc_html__('Dropbox', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('LinkedIn', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('Slack', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('Symbol', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('Shopify', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('Notion', 'roavio-toolkit'),
			],
			[
				'sponsor_name' => esc_html__('Twitch', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ sponsor_name }}}',
	]
);

$this->add_control(
	'shape_images_heading',
	[
		'label' => esc_html__('Shape Images', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'shape_one',
	[
		'label' => esc_html__('Shape One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'shape_two',
	[
		'label' => esc_html__('Shape Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'shape_three',
	[
		'label' => esc_html__('Shape Three', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'shape_four',
	[
		'label' => esc_html__('Shape Four', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);


$this->end_controls_section();
