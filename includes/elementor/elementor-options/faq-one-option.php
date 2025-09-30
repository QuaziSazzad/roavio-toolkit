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
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Frequently Asked Questions?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h2',
		'options' => [
			'h1' => esc_html__('H1', 'roavio-toolkit'),
			'h2' => esc_html__('H2', 'roavio-toolkit'),
			'h3' => esc_html__('H3', 'roavio-toolkit'),
			'h4' => esc_html__('H4', 'roavio-toolkit'),
			'h5' => esc_html__('H5', 'roavio-toolkit'),
			'h6' => esc_html__('H6', 'roavio-toolkit'),
			'div' => esc_html__('div', 'roavio-toolkit'),
			'span' => esc_html__('span', 'roavio-toolkit'),
			'p' => esc_html__('p', 'roavio-toolkit'),
		],
	]
);

$this->add_control(
	'layout_one_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('We\'ve gathered the information you need in one place you can save time and make confident decisions. And if you don\'t see your question answered.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Tab Items
$this->add_control(
	'layout_one_tabs_heading',
	[
		'label' => esc_html__('FAQ Tabs', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater_tabs = new \Elementor\Repeater();

$repeater_tabs->add_control(
	'tab_title',
	[
		'label' => esc_html__('Tab Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('General', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_tabs->add_control(
	'tab_id',
	[
		'label' => esc_html__('Tab ID', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('technical', 'roavio-toolkit'),
		'label_block' => true,
		'description' => esc_html__('Enter a unique ID for this tab (without spaces or special characters)', 'roavio-toolkit'),
	]
);

$repeater_tabs->add_control(
	'is_active',
	[
		'label' => esc_html__('Active Tab', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_one_tabs',
	[
		'label' => esc_html__('Tabs', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_tabs->get_controls(),
		'default' => [
			[
				'tab_title' => esc_html__('General', 'roavio-toolkit'),
				'tab_id' => 'technical',
				'is_active' => 'yes',
			],
			[
				'tab_title' => esc_html__('Pricing Plan', 'roavio-toolkit'),
				'tab_id' => 'work',
				'is_active' => 'no',
			],
			[
				'tab_title' => esc_html__('Tour Package', 'roavio-toolkit'),
				'tab_id' => 'ambition',
				'is_active' => 'no',
			],
			[
				'tab_title' => esc_html__('Privacy Policy', 'roavio-toolkit'),
				'tab_id' => 'skill',
				'is_active' => 'no',
			],
		],
		'title_field' => '{{{ tab_title }}}',
	]
);

// FAQ Items
$this->add_control(
	'layout_one_faq_heading',
	[
		'label' => esc_html__('FAQ Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater_faq = new \Elementor\Repeater();

$repeater_faq->add_control(
	'faq_tab_id',
	[
		'label' => esc_html__('Tab ID', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => 'technical',
		'label_block' => true,
		'description' => esc_html__('Enter the tab ID this FAQ belongs to', 'roavio-toolkit'),
	]
);

$repeater_faq->add_control(
	'faq_question',
	[
		'label' => esc_html__('Question', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('How do I book a trip with your agency?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_faq->add_control(
	'faq_answer',
	[
		'label' => esc_html__('Answer', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Yes! We specialize in tailor-made tours. You can share your preferences—destinations, activities, and budget—and we\'ll design a trip that suits your needs.', 'roavio-toolkit'),
	]
);

$repeater_faq->add_control(
	'faq_is_open',
	[
		'label' => esc_html__('Initially Open', 'roavio-toolkit'),
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
		'fields' => $repeater_faq->get_controls(),
		'default' => [
			[
				'faq_tab_id' => 'technical',
				'faq_question' => esc_html__('How do I book a trip with your agency?', 'roavio-toolkit'),
				'faq_answer' => esc_html__('Yes! We specialize in tailor-made tours. You can share your preferences—destinations, activities, and budget—and we\'ll design a trip that suits your needs.', 'roavio-toolkit'),
			],
			[
				'faq_tab_id' => 'technical',
				'faq_question' => esc_html__('Can I customize my tour package?', 'roavio-toolkit'),
				'faq_answer' => esc_html__('Yes! We specialize in tailor-made tours. You can share your preferences—destinations, activities, and budget—and we\'ll design a trip that suits your needs.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ faq_question }}}',
	]
);


$this->end_controls_section();
