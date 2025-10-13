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


// First Counter Box
$this->add_control(
	'layout_two_counter_one_heading',
	[
		'label' => esc_html__('First Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_counter_one_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-traveling',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_two_counter_one_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '28',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_one_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'k+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_one_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Total worldwide satisfied clients',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'We\'ve earned trust worldwide by delivering seamless travel experiences, personalized service',
		'rows' => 3,
	]
);

// Second Counter Box
$this->add_control(
	'layout_two_counter_two_heading',
	[
		'label' => esc_html__('Second Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_counter_two_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-suitcase',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_two_counter_two_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '500',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_two_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_two_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'World tours available in tours',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Explore the globe with our wide selection of world tours, carefully designed to connect',
		'rows' => 3,
	]
);

// Counter Image
$this->add_control(
	'layout_two_counter_image_heading',
	[
		'label' => esc_html__('Counter Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_counter_image',
	[
		'label' => esc_html__('Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

// Third Counter Box
$this->add_control(
	'layout_two_counter_three_heading',
	[
		'label' => esc_html__('Third Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_counter_three_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-excursion',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_two_counter_three_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '20',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_three_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_three_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Professional local tour guides',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_three_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Our professional local tour guides bring destination to life with their deep knowledge, passion',
		'rows' => 3,
	]
);

// Fourth Counter Box
$this->add_control(
	'layout_two_counter_four_heading',
	[
		'label' => esc_html__('Fourth Counter Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_counter_four_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-man',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_two_counter_four_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '1800',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_four_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_four_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Regular trip sold',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_counter_four_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Our regularly sold trips are a testament to their popularity and traveler satisfaction.',
		'rows' => 3,
	]
);

// Adventure Section
$this->add_control(
	'layout_two_adventure_heading',
	[
		'label' => esc_html__('Adventure Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_adventure_image',
	[
		'label' => esc_html__('Adventure Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_two_adventure_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Ready to Travel',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_adventure_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => 'Adventure is calling – are you ready?',
		'rows' => 2,
	]
);

$this->add_control(
	'layout_two_adventure_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Explore Tours',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_adventure_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

// Right Box
$this->add_control(
	'layout_two_right_box_heading',
	[
		'label' => esc_html__('Right Box', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_right_box_number',
	[
		'label' => esc_html__('Counter Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => '10',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_right_box_suffix',
	[
		'label' => esc_html__('Counter Suffix', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'm+',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_right_box_text',
	[
		'label' => esc_html__('Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'Trusted clients / happy clients',
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_right_box_image',
	[
		'label' => esc_html__('Group Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);


$this->end_controls_section();
