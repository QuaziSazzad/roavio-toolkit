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
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Frequently Asked Questions', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_three_title_tag',
	[
		'label' => esc_html__('Section Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'h3',
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

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_three_item_title',
	[
		'label' => esc_html__('Item Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('How do I book a tour or travel package?', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type item title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_item_number',
	[
		'label' => esc_html__('Item Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('01', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type item number here', 'roavio-toolkit'),
	]
);

$repeater->add_control(
	'layout_three_item_content',
	[
		'label' => esc_html__('Item Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type item content here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_three_item_expanded',
	[
		'label' => esc_html__('Initially Expanded', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$this->add_control(
	'layout_three_items',
	[
		'label' => esc_html__('FAQ Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_three_item_number' => esc_html__('01', 'roavio-toolkit'),
				'layout_three_item_title' => esc_html__('How do I book a tour or travel package?', 'roavio-toolkit'),
				'layout_three_item_content' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
			],
			[
				'layout_three_item_number' => esc_html__('02', 'roavio-toolkit'),
				'layout_three_item_title' => esc_html__('What is included in the travel package?', 'roavio-toolkit'),
				'layout_three_item_content' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
				'layout_three_item_expanded' => 'yes',
			],
			[
				'layout_three_item_number' => esc_html__('03', 'roavio-toolkit'),
				'layout_three_item_title' => esc_html__('What is your cancellation and refund policy?', 'roavio-toolkit'),
				'layout_three_item_content' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
			],
			[
				'layout_three_item_number' => esc_html__('04', 'roavio-toolkit'),
				'layout_three_item_title' => esc_html__('Can I customize my tour or travel package?', 'roavio-toolkit'),
				'layout_three_item_content' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
			],
			[
				'layout_three_item_number' => esc_html__('05', 'roavio-toolkit'),
				'layout_three_item_title' => esc_html__('What documents do I need to travel?', 'roavio-toolkit'),
				'layout_three_item_content' => esc_html__('The early start ensures you can fully immerse yourself in the tranquility of nature before the world fully awakens. As the morning light filters through the trees, you\'ll experience the crisp, fresh air and the peaceful sounds of the forest. The trail ahead offers both a physical challenge promise of breathtaking.', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_three_item_number }}}__{{{ layout_three_item_title }}}',
	]
);


$this->end_controls_section();
