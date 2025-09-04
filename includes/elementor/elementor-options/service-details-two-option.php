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
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Transforming Ideas into Powerful, Scalable Software', 'roavio-toolkit'),
		'label_block' => true,
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
	'layout_two_subtitle',
	[
		'label' => esc_html__('Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Modern IT Solutions', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$this->add_control(
	'layout_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('A reliable support team for ongoing assistance, updates, and troubleshooting ensures clients can rely on the company for long-term success and stability.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Get Started', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_button_link',
	[
		'label' => esc_html__('Button Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_features',
	[
		'label' => esc_html__('Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'feature_title',
				'label' => esc_html__('Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Feature Title', 'roavio-toolkit'),
				'label_block' => true,
			],
			[
				'name' => 'feature_description',
				'label' => esc_html__('Description', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__('Feature description goes here', 'roavio-toolkit'),
				'label_block' => true,
			],
		],
		'default' => [
			[
				'feature_title' => esc_html__('User-Centric Design', 'roavio-toolkit'),
				'feature_description' => esc_html__('Prioritizing user experience and intuitive interfaces makes the software easy to navigate.', 'roavio-toolkit'),
			],
			[
				'feature_title' => esc_html__('Rigorous Quality Assurance', 'roavio-toolkit'),
				'feature_description' => esc_html__('Comprehensive testing and quality assurance processes ensure that the software is free of bugs.', 'roavio-toolkit'),
			],
			[
				'feature_title' => esc_html__('Post-Launch Support and Maintenance', 'roavio-toolkit'),
				'feature_description' => esc_html__('Prioritizing user experience and intuitive interfaces makes the software easy to navigate.', 'roavio-toolkit'),
			],
			[
				'feature_title' => esc_html__('Experienced and Multidisciplinary', 'roavio-toolkit'),
				'feature_description' => esc_html__('Offering ongoing support, updates and maintenance ensures that clients have a long-term partner', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ feature_title }}}',
		'label_block' => true,
	]
);


$this->end_controls_section();
