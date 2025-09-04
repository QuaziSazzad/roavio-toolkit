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
	'layout_one_select_cf7_form',
	[
		'label' => esc_html__('Select your contact form 7', 'roavio-addon'),
		'label_block' => true,
		'type' => \Elementor\Controls_Manager::SELECT,
		'options' => rt_select_post('wpcf7_contact_form'),
	]
);

// Form Section
$this->add_control(
	'layout_one_form_title',
	[
		'label' => esc_html__('Form Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Get In Touch With Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Info Section
$this->add_control(
	'layout_one_info_subtitle',
	[
		'label' => esc_html__('Info Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Need Consultations ?', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_info_title',
	[
		'label' => esc_html__('Info Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Have A Project? We Would Love To Hear From You.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Contact Info Items
$this->add_control(
	'layout_one_contact_info_heading',
	[
		'label' => esc_html__('Contact Information', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

// Location
$this->add_control(
	'layout_one_location_label',
	[
		'label' => esc_html__('Location Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Location', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_location_text',
	[
		'label' => esc_html__('Location Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('55 Main Street, New York', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Email
$this->add_control(
	'layout_one_email_label',
	[
		'label' => esc_html__('Email Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email Us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_email_text',
	[
		'label' => esc_html__('Email Address', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('support@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Phone
$this->add_control(
	'layout_one_phone_label',
	[
		'label' => esc_html__('Phone Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Hotline', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_phone_text',
	[
		'label' => esc_html__('Phone Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+000 (123) 456 88', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Form Settings
$this->add_control(
	'layout_one_form_settings',
	[
		'label' => esc_html__('Form Settings', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('send message', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Background Settings
$this->add_control(
	'layout_one_background_settings',
	[
		'label' => esc_html__('Background Settings', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Background Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);



$this->end_controls_section();
