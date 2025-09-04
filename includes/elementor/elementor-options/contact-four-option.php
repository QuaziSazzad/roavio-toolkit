<?php

$this->start_controls_section(
	'layout_four_contact_info_section',
	[
		'label' => esc_html__('Contact Info Section', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);


$this->add_control(
	'layout_four_section_title',
	[
		'label' => esc_html__('Contact Info Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Ready to Transform? Get in Touch', 'roavio-toolkit'),
	]
);


$this->add_control(
	'layout_four_section_subtitle',
	[
		'label' => esc_html__('Contact Info Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Get In Touch', 'roavio-toolkit'),
	]
);


$this->add_control(
	'layout_four_section_desc',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('Each of these titles is designed to be approachable and encourage clients to take the first step in reaching adjustments', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_office_location_title',
	[
		'label' => esc_html__('Office Location Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Office Location', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_office_location',
	[
		'label' => esc_html__('Office Location', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'default' => esc_html__('101 Fifth Avenue, 12th Floor New York, NY 10003', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_email_title',
	[
		'label' => esc_html__('Email Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Email Address', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_email_address',
	[
		'label' => esc_html__('Email Address', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::CODE,
		'label_block' => true,
		'default' => wp_kses(__('<a href="mailto:support@gmail.com">support@gmail.com</a><br><a href="mailto:uintechservice.com">uintechservice.com</a>', 'roavio-toolkit'), '', ['a', 'br']),
	]
);

$this->add_control(
	'layout_four_phone_title',
	[
		'label' => esc_html__('Phone Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'label_block' => true,
		'default' => esc_html__('Need Any Help', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_phone_number',
	[
		'label' => esc_html__('Phone Number', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::CODE,
		'label_block' => true,
		'default' => wp_kses(__('<a href="callto:+000(123)45688">+000 (123) 456 88</a><br><a href="callto:+88500099">+885 000 99</a>', 'roavio-toolkit'), '', ['a', 'br']),
	]
);


$this->add_control(
	'layout_four_office_icon',
	[
		'label' => esc_html__('Office Location Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-map-marker-alt',
			'library' => 'fa-regular',
		],
	]
);

$this->add_control(
	'layout_four_email_icon',
	[
		'label' => esc_html__('Email Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-envelope',
			'library' => 'fa-regular',
		],
	]
);

$this->add_control(
	'layout_four_phone_icon',
	[
		'label' => esc_html__('Phone Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'far fa-phone-volume',
			'library' => 'fa-regular',
		],
	]
);



$this->end_controls_section();



$this->start_controls_section(
	'layout_four_contact_form_section',
	[
		'label' => esc_html__('Contact Form', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_four'
		]
	]
);

$this->add_control(
	'layout_four_ct_from_title',
	[
		'label' => esc_html__('Contact Form Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('What can we help you with?', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_ct_from_sub_title',
	[
		'label' => esc_html__('Contact Form Sub Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'label_block' => true,
		'placeholder' => esc_html__('Add Sub title', 'roavio-toolkit'),
		'default' => esc_html__('Your email address will not be published*', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_four_select_cf7_form',
	[
		'label' => esc_html__('Select Contact Form 7', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'label_block' => true,
		'options' => rt_select_post('wpcf7_contact_form'),
	]
);


$this->end_controls_section();
