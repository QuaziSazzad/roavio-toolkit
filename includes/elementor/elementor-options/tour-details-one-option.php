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
	'layout_one_overview_title',
	[
		'label' => esc_html__('Overview Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Tours Overview', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_overview_title_tag',
	[
		'label' => esc_html__('Overview Title Tag', 'roavio-toolkit'),
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

$this->add_control(
	'layout_one_overview_description',
	[
		'label' => esc_html__('Overview Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Bali, often called "The Island of Gods", is one of the world\'s most captivating travel destinations. Located in Indonesia, this tropical paradise is famous for its pristine beaches, lush rice terraces, vibrant nightlife, and deeply spiritual culture. Whether you\'re seeking adventure, relaxation, or cultural immersion, Bali offers an experience like no other.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_overview_description_two',
	[
		'label' => esc_html__('Overview Description Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Visitors can unwind on stunning beaches like Kuta, Seminyak, and Nusa Dua, or escape to bud for peaceful retreat surrounded by rice fields, art galleries, and yoga centers. Adventure seekers can explore volcano hikes at Mount Batur, diving in crystal-clear waters, or surfing world-class waves. Bali is also rich in tradition, with thousands of temples, colorful ceremonies, and warm hospitality from locals.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_included_title',
	[
		'label' => esc_html__('Included Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Included and Excluded', 'roavio-toolkit'),
		'label_block' => true,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_included_title_tag',
	[
		'label' => esc_html__('Included Title Tag', 'roavio-toolkit'),
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

$repeater_included = new \Elementor\Repeater();

$repeater_included->add_control(
	'included_item',
	[
		'label' => esc_html__('Included Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Pick and Drop Services', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_included->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-solid fa-check',
			'library' => 'font-awesome',
		],
	]
);

$this->add_control(
	'layout_one_included_items',
	[
		'label' => esc_html__('Included Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_included->get_controls(),
		'default' => [
			[
				'layout_one_included_item' => esc_html__('Pick and Drop Services', 'roavio-toolkit'),
			],
			[
				'layout_one_included_item' => esc_html__('1 Meal Per Day', 'roavio-toolkit'),
			],
			[
				'layout_one_included_item' => esc_html__('Cruise Dinner & Music Event', 'roavio-toolkit'),
			],
			[
				'layout_one_included_item' => esc_html__('Visit 7 Best Places in the City', 'roavio-toolkit'),
			],
			[
				'layout_one_included_item' => esc_html__('Bottled Water on Buses', 'roavio-toolkit'),
			],
			[
				'layout_one_included_item' => esc_html__('Transportation Luxury Tour Bus', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_included_item }}}',
	]
);

$this->add_control(
	'layout_one_excluded_title',
	[
		'label' => esc_html__('Excluded Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Excluded', 'roavio-toolkit'),
		'label_block' => true,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_excluded_title_tag',
	[
		'label' => esc_html__('Excluded Title Tag', 'roavio-toolkit'),
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

$repeater_excluded = new \Elementor\Repeater();

$repeater_excluded->add_control(
	'layout_one_excluded_item',
	[
		'label' => esc_html__('Excluded Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Gratuities', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_excluded->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-solid fa-xmark',
			'library' => 'font-awesome',
		],
	]
);

$this->add_control(
	'layout_one_excluded_items',
	[
		'label' => esc_html__('Excluded Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_excluded->get_controls(),
		'default' => [
			[
				'layout_one_excluded_item' => esc_html__('Gratuities', 'roavio-toolkit'),
			],
			[
				'layout_one_excluded_item' => esc_html__('Hotel pickup and drop-off', 'roavio-toolkit'),
			],
			[
				'layout_one_excluded_item' => esc_html__('Lunch, Food & Drinks', 'roavio-toolkit'),
			],
			[
				'layout_one_excluded_item' => esc_html__('Optional upgrade to a glass', 'roavio-toolkit'),
			],
			[
				'layout_one_excluded_item' => esc_html__('Additional Services', 'roavio-toolkit'),
			],
			[
				'layout_one_excluded_item' => esc_html__('Insurance', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_excluded_item }}}',
	]
);


$this->end_controls_section();
