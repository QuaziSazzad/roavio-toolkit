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
		'default' => esc_html__('Find the Right Solution for Your Budget Custom Plans for Every Stage of Your Journey', 'roavio-toolkit'),
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
		'default' => esc_html__('Pricing Package', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$this->add_control(
	'layout_one_show_tabs',
	[
		'label' => esc_html__('Show Monthly/Yearly Tabs', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Show', 'roavio-toolkit'),
		'label_off' => esc_html__('Hide', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'yes',
	]
);

$this->add_control(
	'layout_one_monthly_text',
	[
		'label' => esc_html__('Monthly Tab Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Monthly', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_one_show_tabs' => 'yes',
		],
	]
);

$this->add_control(
	'layout_one_yearly_text',
	[
		'label' => esc_html__('Yearly Tab Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Yearly', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_one_show_tabs' => 'yes',
		],
	]
);

// Pricing Items Repeater
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_one_is_popular',
	[
		'label' => esc_html__('Popular Package', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$repeater->add_control(
	'layout_one_popular_text',
	[
		'label' => esc_html__('Popular Badge Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('popular', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_one_is_popular' => 'yes',
		],
	]
);

$repeater->add_control(
	'layout_one_package_title',
	[
		'label' => esc_html__('Package Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Starter Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_package_description',
	[
		'label' => esc_html__('Package Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Small businesses and startups', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$5,000', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_duration',
	[
		'label' => esc_html__('Duration', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('/per month', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_included_text',
	[
		'label' => esc_html__('Included Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Included:', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$features_repeater = new \Elementor\Repeater();

$features_repeater->add_control(
	'layout_one_feature_text',
	[
		'label' => esc_html__('Feature', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Custom software development', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_features',
	[
		'label' => esc_html__('Features List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $features_repeater->get_controls(),
		'default' => [
			[
				'layout_one_feature_text' => esc_html__('Custom software development', 'roavio-toolkit'),
			],
			[
				'layout_one_feature_text' => esc_html__('Requirement analysis & planning', 'roavio-toolkit'),
			],
			[
				'layout_one_feature_text' => esc_html__('Support and maintenance', 'roavio-toolkit'),
			],
			[
				'layout_one_feature_text' => esc_html__('Integration third-party services', 'roavio-toolkit'),
			],
			[
				'layout_one_feature_text' => esc_html__('Data backups and advanced', 'roavio-toolkit'),
			],
			[
				'layout_one_feature_text' => esc_html__('Analytics and reporting features', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_feature_text }}}',
	]
);

$repeater->add_control(
	'layout_one_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Choose Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_one_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
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
	'layout_one_pricing_items',
	[
		'label' => esc_html__('Pricing Packages', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_one_package_title' => esc_html__('Starter Package', 'roavio-toolkit'),
				'layout_one_package_description' => esc_html__('Small businesses and startups', 'roavio-toolkit'),
				'layout_one_price' => esc_html__('$5,000', 'roavio-toolkit'),
				'layout_one_duration' => esc_html__('/per month', 'roavio-toolkit'),
				'layout_one_is_popular' => 'no',
			],
			[
				'layout_one_package_title' => esc_html__('Enterprise Package', 'roavio-toolkit'),
				'layout_one_package_description' => esc_html__('Large businesses and requirements', 'roavio-toolkit'),
				'layout_one_price' => esc_html__('$30,000', 'roavio-toolkit'),
				'layout_one_duration' => esc_html__('/per month', 'roavio-toolkit'),
				'layout_one_is_popular' => 'yes',
			],
			[
				'layout_one_package_title' => esc_html__('Custom Package', 'roavio-toolkit'),
				'layout_one_package_description' => esc_html__('Businesses with unique, large-scale', 'roavio-toolkit'),
				'layout_one_price' => esc_html__('$75,000', 'roavio-toolkit'),
				'layout_one_duration' => esc_html__('/per month', 'roavio-toolkit'),
				'layout_one_is_popular' => 'no',
			],
		],
		'title_field' => '{{{ layout_one_package_title }}}',
	]
);

// Yearly Pricing Option

$yearly_repeater = new \Elementor\Repeater();

$yearly_repeater->add_control(
	'layout_one_yearly_is_popular',
	[
		'label' => esc_html__('Popular Package', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => esc_html__('Yes', 'roavio-toolkit'),
		'label_off' => esc_html__('No', 'roavio-toolkit'),
		'return_value' => 'yes',
		'default' => 'no',
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_popular_text',
	[
		'label' => esc_html__('Popular Badge Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('popular', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_one_yearly_is_popular' => 'yes',
		],
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_package_title',
	[
		'label' => esc_html__('Package Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Starter Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_package_description',
	[
		'label' => esc_html__('Package Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Small businesses and startups', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_price',
	[
		'label' => esc_html__('Price', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('$50,000', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_duration',
	[
		'label' => esc_html__('Duration', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('/per year', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_included_text',
	[
		'label' => esc_html__('Included Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Included:', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_features_repeater = new \Elementor\Repeater();

$yearly_features_repeater->add_control(
	'layout_one_yearly_feature_text',
	[
		'label' => esc_html__('Feature', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Custom software development', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_features',
	[
		'label' => esc_html__('Features List', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $yearly_features_repeater->get_controls(),
		'default' => [
			[
				'layout_one_yearly_feature_text' => esc_html__('Custom software development', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Requirement analysis & planning', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Support and maintenance', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Integration third-party services', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Data backups and advanced', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Analytics and reporting features', 'roavio-toolkit'),
			],
			[
				'layout_one_yearly_feature_text' => esc_html__('Priority support 24/7', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ layout_one_yearly_feature_text }}}',
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Choose Package', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$yearly_repeater->add_control(
	'layout_one_yearly_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
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
	'layout_one_yearly_pricing_items',
	[
		'label' => esc_html__('Yearly Pricing Packages', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $yearly_repeater->get_controls(),
		'default' => [
			[
				'layout_one_yearly_package_title' => esc_html__('Starter Package', 'roavio-toolkit'),
				'layout_one_yearly_package_description' => esc_html__('Small businesses and startups', 'roavio-toolkit'),
				'layout_one_yearly_price' => esc_html__('$50,000', 'roavio-toolkit'),
				'layout_one_yearly_duration' => esc_html__('/per year', 'roavio-toolkit'),
				'layout_one_yearly_is_popular' => 'no',
			],
			[
				'layout_one_yearly_package_title' => esc_html__('Enterprise Package', 'roavio-toolkit'),
				'layout_one_yearly_package_description' => esc_html__('Large businesses and requirements', 'roavio-toolkit'),
				'layout_one_yearly_price' => esc_html__('$700,00', 'roavio-toolkit'),
				'layout_one_yearly_duration' => esc_html__('/per year', 'roavio-toolkit'),
				'layout_one_yearly_is_popular' => 'yes',
			],
			[
				'layout_one_yearly_package_title' => esc_html__('Custom Package', 'roavio-toolkit'),
				'layout_one_yearly_package_description' => esc_html__('Businesses with unique, large-scale', 'roavio-toolkit'),
				'layout_one_yearly_price' => esc_html__('$950,00', 'roavio-toolkit'),
				'layout_one_yearly_duration' => esc_html__('/per year', 'roavio-toolkit'),
				'layout_one_yearly_is_popular' => 'no',
			],
		],
		'title_field' => '{{{ layout_one_yearly_package_title }}}',
		'condition' => [
			'layout_one_show_tabs' => 'yes',
		],
	]
);


$this->end_controls_section();
