<?php


//content
$this->start_controls_section(
	'layout_four_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);



$this->add_control(
	'layout_four_page_heading',
	[
		'label' => esc_html__('Page Heading', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Destinations', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_breadcrumb_items',
	[
		'label' => esc_html__('Breadcrumb Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'title',
				'label' => esc_html__('Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Home', 'roavio-toolkit'),
			],
			[
				'name' => 'link',
				'label' => esc_html__('Link', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '#',
				],
			],
		],
		'default' => [
			[
				'title' => esc_html__('Home', 'roavio-toolkit'),
				'link' => '#',
			],
			[
				'title' => esc_html__('Destinations', 'roavio-toolkit'),
				'link' => '#',
			],
		],
		'title_field' => '{{{ title }}}',
	]
);

$this->add_control(
	'layout_four_counters',
	[
		'label' => esc_html__('Counters', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'count',
				'label' => esc_html__('Count', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 500,
			],
			[
				'name' => 'text',
				'label' => esc_html__('Text', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Explore 500+ Destinations', 'roavio-toolkit'),
			],
		],
		'default' => [
			[
				'count' => 500,
				'text' => esc_html__('Explore 500+ Destinations', 'roavio-toolkit'),
			],
			[
				'count' => 10,
				'text' => esc_html__('Professional Team Member', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ count }}} - {{{ text }}}',
	]
);

$this->add_control(
	'layout_four_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
