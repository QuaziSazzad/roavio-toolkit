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
	'layout_three_left_image',
	[
		'label' => esc_html__('Left Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_three_counter_one_number',
	[
		'label' => esc_html__('Counter One Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('10', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter number here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_counter_one_suffix',
	[
		'label' => esc_html__('Counter One Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('m+', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter suffix here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_counter_one_text',
	[
		'label' => esc_html__('Counter One Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Trusted clients / happy clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter text here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_group_image',
	[
		'label' => esc_html__('Group Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_counter_two_number',
	[
		'label' => esc_html__('Counter Two Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('150', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter number here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_counter_two_suffix',
	[
		'label' => esc_html__('Counter Two Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter suffix here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_counter_two_text',
	[
		'label' => esc_html__('Counter Two Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('by over 2500+ global satisfied clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type counter text here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_star_image',
	[
		'label' => esc_html__('Star Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_shape_bg_image',
	[
		'label' => esc_html__('Shape Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_experience_title',
	[
		'label' => esc_html__('Experience Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('18+ years of experience in travel services', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type experience title here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_experience_url',
	[
		'label' => esc_html__('Experience URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'layout_three_client_name',
	[
		'label' => esc_html__('Client Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Mickel z Ponkoz', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client name here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_client_designation',
	[
		'label' => esc_html__('Client Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Travel guide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type client designation here', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_three_shape_image',
	[
		'label' => esc_html__('Shape Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_three_right_image',
	[
		'label' => esc_html__('Right Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);




$this->end_controls_section();
