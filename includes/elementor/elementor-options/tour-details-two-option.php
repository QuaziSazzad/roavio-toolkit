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
		'default' => esc_html__('Top Highlights', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_title_tag',
	[
		'label' => esc_html__('Title Tag', 'roavio-toolkit'),
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
	'layout_two_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__("Bali is more than just a tropical destination—it's a paradise filled with unforgettable experiences. From its sacred temples perched on dramatic cliffs to golden beaches that stretch for miles, every corner of the island offers something unique.", 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_highlight_item',
	[
		'label' => esc_html__('Highlight Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore iconic sites like Tanah Lot, Uluwatu, and Besakih Temple.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fas fa-check',
			'library' => 'fa-solid',
		],
	]
);

$this->add_control(
	'layout_two_highlight_items',
	[
		'label' => esc_html__('Highlight Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_highlight_item' => esc_html__('Explore iconic sites like Tanah Lot, Uluwatu, and Besakih Temple.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
			[
				'layout_two_highlight_item' => esc_html__('Relax on Kuta, Seminyak, Nusa Dua, and Jimbaran Bay.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
			[
				'layout_two_highlight_item' => esc_html__('Discover rice terraces, art markets, yoga retreats, and monkey forests.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
			[
				'layout_two_highlight_item' => esc_html__('Hike an active volcano for breathtaking sunrise views.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
			[
				'layout_two_highlight_item' => esc_html__('Experience beach clubs, rooftop bars, and live music in Seminyak and Canggu.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
			[
				'layout_two_highlight_item' => esc_html__('Visit Tegenungan, Gitgit, and Sekumpul waterfalls for adventure and serenity.', 'roavio-toolkit'),
				'icon' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
			],
		],
		'title_field' => '{{{ layout_two_highlight_item }}}',
	]
);

$this->end_controls_section();
