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
		'default' => esc_html__('Start Your Adventure Contact Us Today', 'roavio-toolkit'),
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
		'default' => esc_html__('Have questions or ready to plan your next adventure? Our travel experts are here to guide you every step of the way.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Email Contact Info
$this->add_control(
	'layout_one_email_heading',
	[
		'label' => esc_html__('Email Contact Info', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_email_title',
	[
		'label' => esc_html__('Email Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_email_icon',
	[
		'label' => esc_html__('Email Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'layout_one_email_one',
	[
		'label' => esc_html__('Email One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('supportroavio@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_email_two',
	[
		'label' => esc_html__('Email Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('www.roavio247.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Phone Contact Info
$this->add_control(
	'layout_one_phone_heading',
	[
		'label' => esc_html__('Phone Contact Info', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_phone_title',
	[
		'label' => esc_html__('Phone Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email us', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_phone_icon',
	[
		'label' => esc_html__('Phone Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'layout_one_phone_number',
	[
		'label' => esc_html__('Phone Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('+1 123456 7890', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_phone_availability',
	[
		'label' => esc_html__('Availability Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Available 24/7 hours', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Working Hours Info
$this->add_control(
	'layout_one_hours_heading',
	[
		'label' => esc_html__('Working Hours Info', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_hours_title',
	[
		'label' => esc_html__('Hours Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Working Hours', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_hours_icon',
	[
		'label' => esc_html__('Hours Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'layout_one_hours_text',
	[
		'label' => esc_html__('Hours Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Sunday to Friday 08:00 AM – 06:00 PM', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Office Address Info
$this->add_control(
	'layout_one_address_heading',
	[
		'label' => esc_html__('Office Address Info', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_one_address_title',
	[
		'label' => esc_html__('Address Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('USA Office', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_address_icon',
	[
		'label' => esc_html__('Address Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => '',
		],
	]
);

$this->add_control(
	'layout_one_address_text',
	[
		'label' => esc_html__('Address Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('20 Cooper Square, New York, NY 10003, USA', 'roavio-toolkit'),
		'label_block' => true,
	]
);

// Contact Form
$this->add_control(
	'layout_one_form_heading',
	[
		'label' => esc_html__('Contact Form', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
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


$this->end_controls_section();
