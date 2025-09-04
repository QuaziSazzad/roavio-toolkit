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
		'default' => esc_html__('200,000+ Growing startups use Slate as their single source of truth.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter section title', 'roavio-toolkit'),
		'label_block' => true,
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

// Counter Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '25',
		'placeholder' => esc_html__('Enter counter number', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'symbol',
	[
		'label' => esc_html__('Counter Symbol', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'k-plus',
		'options' => [
			'k-plus' => esc_html__('K+ (Thousand Plus)', 'roavio-toolkit'),
			'percent' => esc_html__('% (Percent)', 'roavio-toolkit'),
			'm-plus' => esc_html__('M+ (Million Plus)', 'roavio-toolkit'),
		],
		'label_block' => true,
	]
);

$repeater->add_control(
	'title',
	[
		'label' => esc_html__('Counter Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('100% Satisficed Clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Enter counter title', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_three_counter_list',
	[
		'label' => esc_html__('Counter Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'number' => '25',
				'symbol' => 'k-plus',
				'title' => esc_html__('100% Satisficed Clients', 'roavio-toolkit'),
			],
			[
				'number' => '83',
				'symbol' => 'percent',
				'title' => esc_html__('83% Lead Collection From Global Clients', 'roavio-toolkit'),
			],
			[
				'number' => '25',
				'symbol' => 'm-plus',
				'title' => esc_html__('20m+ Data Collection From Various Email', 'roavio-toolkit'),
			],
			[
				'number' => '50',
				'symbol' => 'k-plus',
				'title' => esc_html__('Task Complete For Global Clients', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ title }}} - {{{ number }}}',
	]
);



$this->end_controls_section();
