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
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Agile Development for Fast and Scalable Solutions', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_three_title_tag',
	[
		'label' => esc_html__('Title HTML Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h2',
		'options' => [
			'h1' => esc_html__('H1', 'roavio-toolkit'),
			'h2' => esc_html__('H2', 'roavio-toolkit'),
			'h3' => esc_html__('H3', 'roavio-toolkit'),
			'h4' => esc_html__('H4', 'roavio-toolkit'),
			'h5' => esc_html__('H5', 'roavio-toolkit'),
			'h6' => esc_html__('H6', 'roavio-toolkit'),
		],
	]
);

// Accordion Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'step_number',
	[
		'label' => esc_html__('Step Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('01', 'roavio-toolkit'),
		'placeholder' => esc_html__('Step number', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'accordion_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Software Development', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type accordion title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'accordion_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$repeater->add_control(
	'accordion_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Tailored software development that addresses specific client needs is highly valued. From business automation tools enterprise-level systems custom.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type accordion content here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Read More', 'roavio-toolkit'),
		'placeholder' => esc_html__('Button text', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
		'label_block' => true,
	]
);

$repeater->add_control(
	'is_active',
	[
		'label' => esc_html__('Active Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_three_accordion_items',
	[
		'label' => esc_html__('Accordion Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'step_number' => '01',
				'accordion_title' => esc_html__('Software Development', 'roavio-toolkit'),
				'accordion_content' => esc_html__('Tailored software development that addresses specific client needs is highly valued. From business automation tools enterprise-level systems custom.', 'roavio-toolkit'),
				'button_text' => esc_html__('Read More', 'roavio-toolkit'),
				'is_active' => 'no',
			],
			[
				'step_number' => '02',
				'accordion_title' => esc_html__('Cloud Solutions and Migration', 'roavio-toolkit'),
				'accordion_content' => esc_html__('Tailored software development that addresses specific client needs is highly valued. From business automation tools enterprise-level systems custom.', 'roavio-toolkit'),
				'button_text' => esc_html__('Read More', 'roavio-toolkit'),
				'is_active' => 'yes',
			],
		],
		'title_field' => '{{{ step_number }}} - {{{ accordion_title }}}',
	]
);

$this->add_control(
	'layout_three_view_more_text',
	[
		'label' => esc_html__('View More Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('View More Services', 'roavio-toolkit'),
		'placeholder' => esc_html__('Button text', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_view_more_url',
	[
		'label' => esc_html__('View More Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'label_block' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_three_background_color',
	[
		'label'     => esc_html__('Background Color', 'roavio-toolkit'),
		'type'      => \Elementor\Controls_Manager::COLOR,
		'default'   => '',
		'selectors' => [
			'{{WRAPPER}} .bgc-gray' => 'background-color: {{VALUE}};',
		],
	]
);

$this->end_controls_section();
