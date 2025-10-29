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
	'item_text',
	[
		'label' => esc_html__('Item Heading Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Item ', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'price_text',
	[
		'label' => esc_html__('Price Heading Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Price ', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'date_text',
	[
		'label' => esc_html__('Date Heading Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Publish Date', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'button',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Go To Tour', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'wishlist_empty_text',
	[
		'label' => esc_html__('Wishlist Empty Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Wishlist is empty', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
