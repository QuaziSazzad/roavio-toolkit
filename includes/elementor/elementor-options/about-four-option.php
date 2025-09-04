<?php

//content
$this->start_controls_section(
	'layout_four_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);

$this->add_control(
	'layout_four_title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Protecting Businesses with Cutting-Edge Cybersecurity', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn About Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->add_control(
	'layout_four_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Cybersecurity solutions provide the tools and strategies to safeguard sensitive information, ensure the integrity of digital assets, and maintain business continuity implementing robust firewalls and encryption to proactive monitoring.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_four_feature_icon',
	[
		'label' => esc_html__('Feature Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-cyber-security-2',
			'library' => 'flaticon',
		],
	]
);

$repeater->add_control(
	'layout_four_feature_title',
	[
		'label' => esc_html__('Feature Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Comprehensive Threat Assessment', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type feature title here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_four_feature_link',
	[
		'label' => esc_html__('Feature Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => true,
			'nofollow' => true,
		],
	]
);

$this->add_control(
	'layout_four_features',
	[
		'label' => esc_html__('Features', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_four_feature_icon' => [
					'value' => 'flaticon-cyber-security-2',
					'library' => 'flaticon',
				],
				'layout_four_feature_title' => esc_html__('Comprehensive Threat Assessment', 'roavio-toolkit'),
				'layout_four_feature_link' => [
					'url' => '#',
				],
			],
			[
				'layout_four_feature_icon' => [
					'value' => 'flaticon-recovery',
					'library' => 'flaticon',
				],
				'layout_four_feature_title' => esc_html__('Incident Response and Recovery', 'roavio-toolkit'),
				'layout_four_feature_link' => [
					'url' => '#',
				],
			],
			[
				'layout_four_feature_icon' => [
					'value' => 'flaticon-protection',
					'library' => 'flaticon',
				],
				'layout_four_feature_title' => esc_html__('Data Encryption and Protection', 'roavio-toolkit'),
				'layout_four_feature_link' => [
					'url' => '#',
				],
			],
			[
				'layout_four_feature_icon' => [
					'value' => 'flaticon-protection-1',
					'library' => 'flaticon',
				],
				'layout_four_feature_title' => esc_html__('Employee Training and Awareness', 'roavio-toolkit'),
				'layout_four_feature_link' => [
					'url' => '#',
				],
			],
		],
		'title_field' => '{{{ layout_four_feature_title }}}',
	]
);

$this->add_control(
	'layout_four_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Learn More Us', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type button text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_button_link',
	[
		'label' => esc_html__('Button Link', 'roavio-toolkit'),
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

$this->add_control(
	'layout_four_clients_text',
	[
		'label' => esc_html__('Clients Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('10m+ Trusted Clients', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type clients text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater_clients = new \Elementor\Repeater();

$repeater_clients->add_control(
	'layout_four_client_image',
	[
		'label' => esc_html__('Client Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_clients',
	[
		'label' => esc_html__('Client Images', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater_clients->get_controls(),
		'default' => [
			['layout_four_client_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()]],
			['layout_four_client_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()]],
			['layout_four_client_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()]],
			['layout_four_client_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()]],
			['layout_four_client_image' => ['url' => \Elementor\Utils::get_placeholder_image_src()]],
		],
	]
);


$this->end_controls_section();

$this->start_controls_section(
	'layout_four_section_image',
	[
		'label' => esc_html__('Images', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);

$this->add_control(
	'layout_four_image_one',
	[
		'label' => esc_html__('Image One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_image_two',
	[
		'label' => esc_html__('Image Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_four_clients_satisfied_title',
	[
		'label' => esc_html__('Clients Satisfied Caption', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('99% Clients Satisfied', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_clients_satisfied_icon',
	[
		'label' => esc_html__('Clients Satisfied Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-experience',
			'library' => 'flaticon',
		],
	]
);

$this->add_control(
	'layout_four_years_experience_title',
	[
		'label' => esc_html__('Years Experience Caption', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('15+ Years of experience', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_years_experience_icon',
	[
		'label' => esc_html__('Years Experience Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-quality',
			'library' => 'flaticon',
		],
	]
);



$this->end_controls_section();
