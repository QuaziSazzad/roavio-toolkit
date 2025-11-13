<?php

//content
$this->start_controls_section(
	'layout_two_section_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_two'
		]
	]
);

// Logo
$this->add_control(
	'layout_two_logo',
	[
		'label' => esc_html__('Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_two_logo_size',
	[
		'label' => __('Logo Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		'description' => __('Set Logo Size.', 'roavio-toolkit'),
		'default' => [
			'width' => '120',
			'height' => '36',
		],
	]
);

$this->add_control(
	'layout_two_logo_link',
	[
		'label' => esc_html__('Logo Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true,
	]
);

// Main Title
$this->add_control(
	'layout_two_main_title',
	[
		'label' => esc_html__('Main Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Experience ultimate luxury book your suite today', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_main_title_tag',
	[
		'label' => esc_html__('Main Title Tag', 'roavio-toolkit'),
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

// Button
$this->add_control(
	'layout_two_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Booking Now', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_button_link',
	[
		'label' => esc_html__('Button Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
		],
		'label_block' => true,
	]
);

// Address Section
$this->add_control(
	'layout_two_address_heading',
	[
		'label' => esc_html__('Address Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_address_icon',
	[
		'label' => esc_html__('Address Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-regular fa-map-location-dot',
			'library' => 'fa-regular',
		],
	]
);

$this->add_control(
	'layout_two_address_title',
	[
		'label' => esc_html__('Address Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Address', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_address_text',
	[
		'label' => esc_html__('Address Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('578 Level, Melbourne, Australia', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Email Section
$this->add_control(
	'layout_two_email_heading',
	[
		'label' => esc_html__('Email Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_email_icon',
	[
		'label' => esc_html__('Email Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-regular fa-envelope',
			'library' => 'fa-regular',
		],
	]
);

$this->add_control(
	'layout_two_email_title',
	[
		'label' => esc_html__('Email Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_email_text',
	[
		'label' => esc_html__('Email Address', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('supportroavio@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Phone Section
$this->add_control(
	'layout_two_phone_heading',
	[
		'label' => esc_html__('Phone Section', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_phone_icon',
	[
		'label' => esc_html__('Phone Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-regular fa-phone-volume',
			'library' => 'fa-regular',
		],
	]
);

$this->add_control(
	'layout_two_phone_title',
	[
		'label' => esc_html__('Phone Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Need Help', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_phone_text',
	[
		'label' => esc_html__('Phone Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+1 234 567 88 99', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Photo Gallery Section
$this->add_control(
	'layout_two_gallery_heading',
	[
		'label' => esc_html__('Photo Gallery', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_two_gallery_title',
	[
		'label' => esc_html__('Gallery Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Photo Gallery', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_two_gallery_images',
	[
		'label' => esc_html__('Gallery Images', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::GALLERY,
		'default' => [],
	]
);

// Footer Bottom Links
$this->add_control(
	'layout_two_footer_links_heading',
	[
		'label' => esc_html__('Footer Bottom Links', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'layout_two_link_text',
	[
		'label' => esc_html__('Link Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Company', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$repeater->add_control(
	'layout_two_link_url',
	[
		'label' => esc_html__('Link URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_two_footer_links',
	[
		'label' => esc_html__('Footer Links', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'layout_two_link_text' => esc_html__('Company', 'roavio-toolkit'),
				'layout_two_link_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'layout_two_link_text' => esc_html__('FAQs', 'roavio-toolkit'),
				'layout_two_link_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'layout_two_link_text' => esc_html__('Privacy Policy', 'roavio-toolkit'),
				'layout_two_link_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
		'title_field' => '{{{ layout_two_link_text }}}',
	]
);


// Copyright Text
$this->add_control(
	'layout_two_copyright_text',
	[
		'label' => esc_html__('Copyright Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('@Copy 2025 ROAVIO, All rights reserved', 'roavio-toolkit'),
		'label_block' => true,
	]
);


$this->end_controls_section();
