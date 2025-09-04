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
		'default' => esc_html__('Hacking the Hackers Strategic Interventions in Cybersecurity', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_title_tag',
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
	'layout_one_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('How to Benefits', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_one_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_one_awards_number',
	[
		'label' => esc_html__('Awards Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'min' => 0,
		'max' => 1000,
		'step' => 1,
		'default' => 0,
	]
);

$this->add_control(
	'layout_one_awards_text',
	[
		'label' => esc_html__('Awards Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Awards Winning', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_reviews_number',
	[
		'label' => esc_html__('Reviews Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::NUMBER,
		'min' => 0,
		'max' => 1000,
		'step' => 1,
		'default' => 0,
	]
);

$this->add_control(
	'layout_one_reviews_text',
	[
		'label' => esc_html__('Reviews Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Customer review', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_faq_title',
	[
		'label' => esc_html__('FAQ Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Network Security & Protection', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your FAQ title here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_faq_content',
	[
		'label' => esc_html__('FAQ Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Accelerate innovation with world-class tech teams We\'ll match you to an entire remote team.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your FAQ content here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_one_is_active',
	[
		'label' => esc_html__('Is Active?', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_one_faq_items',
	[
		'label' => esc_html__('FAQ Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_faq_title' => esc_html__('Network Security & Protection', 'roavio-toolkit'),
				'layout_one_faq_content' => esc_html__('Accelerate innovation with world-class tech teams We\'ll match you to an entire remote team.', 'roavio-toolkit'),
				'layout_one_is_active' => 'yes',
			],
			[
				'layout_one_faq_title' => esc_html__('Browser Safety & Farewell', 'roavio-toolkit'),
				'layout_one_faq_content' => esc_html__('Accelerate innovation with world-class tech teams We\'ll match you to an entire remote team.', 'roavio-toolkit'),
				'layout_one_is_active' => 'no',
			],
			[
				'layout_one_faq_title' => esc_html__('Infrastructure Technology', 'roavio-toolkit'),
				'layout_one_faq_content' => esc_html__('Accelerate innovation with world-class tech teams We\'ll match you to an entire remote team.', 'roavio-toolkit'),
				'layout_one_is_active' => 'no',
			],
			[
				'layout_one_faq_title' => esc_html__('Management & Support Services', 'roavio-toolkit'),
				'layout_one_faq_content' => esc_html__('Accelerate innovation with world-class tech teams We\'ll match you to an entire remote team.', 'roavio-toolkit'),
				'layout_one_is_active' => 'no',
			],
		],
		'title_field' => '{{{ layout_one_faq_title }}}',
	]
);

$this->add_control(
	'layout_one_background_color',
	[
		'label' => esc_html__('Background Color', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::COLOR,
		'selectors' => [
			'{{WRAPPER}} .bgc-blue ' => 'background-color: {{VALUE}}',
		],
		'default' => '#18185e',
	]
);

$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);



$this->end_controls_section();
