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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_slide_text',
	[
		'label' => esc_html__('Slide Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Private tours', 'roavio-toolkit'),
		'label_block' => true,
		'placeholder' => esc_html__('Enter slide text', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_two_slides',
	[
		'label' => esc_html__('Sliding Texts', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_slide_text' => esc_html__('Private tours', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Travel Insurance', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Safari & Wildlife', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Professional Guide', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('10+ Years of experience', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Awards Winning Agency', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Couple Tours', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Hotel & Resorts', 'roavio-toolkit'),
			],
			[
				'layout_two_slide_text' => esc_html__('Quality Security', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_two_slide_text }}}',
	]
);

$this->add_control(
	'layout_two_animation_speed',
	[
		'label' => esc_html__('Animation Speed', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SLIDER,
		'size_units' => ['px'],
		'range' => [
			'px' => [
				'min' => 1,
				'max' => 50,
				'step' => 1,
			],
		],
		'default' => [
			'unit' => 'px',
			'size' => 20,
		],
		'selectors' => [
			'{{WRAPPER}} .mycustom-marque .scrolling-wrap' => 'animation-duration: {{SIZE}}s;',
		],
	]
);

$this->add_control(
	'layout_two_direction',
	[
		'label' => esc_html__('Sliding Direction', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'left',
		'options' => [
			'left' => esc_html__('Left to Right', 'roavio-toolkit'),
			'right' => esc_html__('Right to Left', 'roavio-toolkit'),
		],
		'selectors' => [
			'{{WRAPPER}} .mycustom-marque .scrolling-wrap' => 'animation-direction: {{VALUE}};',
		],
	]
);



$this->end_controls_section();
