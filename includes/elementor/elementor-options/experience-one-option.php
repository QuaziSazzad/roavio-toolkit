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
	'layout_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Experience', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'rows' => '2',
		'placeholder' => esc_html__('Add Description', 'roavio-toolkit'),
		'default' => esc_html__('Default Description', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_experience_list = new \Elementor\Repeater();

$layout_one_experience_list->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'rows' => '2',
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Senior Product Designer', 'roavio-toolkit'),
		'label_block' => true
	]
);


$layout_one_experience_list->add_control(
	'year',
	[
		'label' => esc_html__('Experience Year', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Year', 'roavio-toolkit'),
		'default' => esc_html__('2020-Present', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_experience_list->add_control(
	'company',
	[
		'label' => esc_html__('Company', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add Company', 'roavio-toolkit'),
		'default' => esc_html__('Google', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_experience_list->add_control(
	'icon',
	[
		'label' => __('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-job-search',
			'library' => 'custom-icon',
		],
	]
);


$this->add_control(
	'layout_one_experience_list',
	[
		'label' => esc_html__('Experience List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_experience_list->get_controls(),
		'prevent_empty' => false,
		'title_field' => '{{{ title }}}',
	]
);

$this->end_controls_section();
