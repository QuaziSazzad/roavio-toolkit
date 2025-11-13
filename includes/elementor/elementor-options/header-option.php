<?php

$this->start_controls_section(
	'logo_section',
	[
		'label' => esc_html__('Site Logo', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);

$this->add_control(
	'logo',
	[
		'label' => esc_html__('Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'sticky_logo',
	[
		'label' => esc_html__('Sticky Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'condition' => [
			'layout_type' => ['layout_two', 'layout_four']
		]
	]
);

$this->add_control(
	'logo_size',
	[
		'label' => esc_html__('Logo Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		'description' => esc_html__('Set Logo Size.', 'roavio-toolkit'),
		'default' => [
			'width' => '123',
			'height' => '35',
		],
	]
);

$this->add_control(
	'mobile_logo',
	[
		'label' => esc_html__('Mobile Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'mobile_logo_size',
	[
		'label' => esc_html__('Mobile Logo Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		'description' => esc_html__('Set Logo Size.', 'roavio-toolkit'),
		'default' => [
			'width' => '123',
			'height' => '35',
		],
	]
);


$this->end_controls_section();

$this->start_controls_section(
	'nav_section',
	[
		'label' => esc_html__('Navigation', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);

$this->add_control(
	'nav_menu',
	[
		'label'     => esc_html__('Select Menu', 'roavio-toolkit'),
		'type'      => \Elementor\Controls_Manager::SELECT,
		'options'   => $this->get_menus_list(),
	]
);

$this->end_controls_section();

$this->start_controls_section(
	'top_bar_settings',
	[
		'label' => esc_html__('Top Bar Settings', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' =>  ['layout_one']
		]
	]
);

$this->add_control(
	'top_text',
	[
		'label' => esc_html__('Top Bar Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Default Text', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'layout_type' =>  ['layout_one', 'layout_three']
		]
	]
);

// Contact Information Options

$contact_items = new \Elementor\Repeater();

$contact_items->add_control(
	'contact_icon',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-solid fa-envelope',
			'library' => 'solid',
		],
		'label_block' => true,
	]
);

$contact_items->add_control(
	'contact_label',
	[
		'label' => esc_html__('Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Email :', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$contact_items->add_control(
	'contact_info',
	[
		'label' => esc_html__('Contact Info', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('support@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$contact_items->add_control(
	'contact_url',
	[
		'label' => esc_html__('URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('mailto:support@gmail.com', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'contact_list',
	[
		'label' => esc_html__('Contact Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $contact_items->get_controls(),
		'default' => [
			[
				'contact_icon' => [
					'value' => 'fa-solid fa-envelope',
					'library' => 'solid',
				],
				'contact_label' => esc_html__('Email :', 'roavio-toolkit'),
				'contact_info' => esc_html__('support@gmail.com', 'roavio-toolkit'),
				'contact_url' => esc_html__('mailto:support@gmail.com', 'roavio-toolkit'),
			],
			[
				'contact_icon' => [
					'value' => 'fa-solid fa-phone-flip',
					'library' => 'solid',
				],
				'contact_label' => esc_html__('Call :', 'roavio-toolkit'),
				'contact_info' => esc_html__('+1-234-567-889', 'roavio-toolkit'),
				'contact_url' => esc_html__('tel:+1-234-567-889', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ contact_label }}} {{{ contact_info }}}',
		'condition' => [
			'layout_type' => ['layout_one', 'layout_three'],
		]
	]
);


$this->end_controls_section();


$this->start_controls_section(
	'other_settings',
	[
		'label' => esc_html__('Other Settings', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);

$this->add_control(
	'enable_search',
	[
		'label'        => esc_html__('Enable Search?', 'roavio-toolkit'),
		'type'         => \Elementor\Controls_Manager::SWITCHER,
		'label_on'     => esc_html__('Yes', 'roavio-toolkit'),
		'label_off'    => esc_html__('No', 'roavio-toolkit'),
		'default'      => 'yes',
		'return_value' => 'yes',
	]
);

$this->add_control(
	'search_placeholder',
	[
		'label' => esc_html__('Search Placeholder', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Search', 'roavio-toolkit'),
		'label_block' => true,
		'condition' => [
			'enable_search' => 'yes'
		]
	]
);


$this->add_control(
	'button_label',
	[
		'label' => esc_html__('Button Label', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Book Now', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'button_url',
	[
		'label' => esc_html__('Button Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => false,
	]
);

$social_icons = new \Elementor\Repeater();

$social_icons->add_control(
	'social_icon',
	[
		'label' => esc_html__('Select Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fab fa-facebook-f',
			'library' => 'brand',
		],
		'label_block' => true,
	]
);

$social_icons->add_control(
	'social_url',
	[
		'label' => esc_html__('Add Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => false,
	]
);

$this->add_control(
	'social_icons',
	[
		'label' => esc_html__('Social Icons', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $social_icons->get_controls(),
		'prevent_empty' => false,
		'default' => [
			[
				'social_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],

		],
		'condition' => [
			'layout_type' => ['layout_three']
		]
	]
);



$this->end_controls_section();

$this->start_controls_section(
	'sidebar_section',
	[
		'label' => esc_html__('Sidebar Settings', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);

$this->add_control(
	'sidebar_content',
	[
		'label' => esc_html__('Sidebar Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__(' Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'sidebar_contact_title',
	[
		'label' => esc_html__('Contact Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Get Appointment', 'roavio-toolkit'),
		'label_block' => true,
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

$sidebar_social_icons = new \Elementor\Repeater();

$sidebar_social_icons->add_control(
	'social_icon',
	[
		'label' => esc_html__('Select Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fab fa-facebook-f',
			'library' => 'brand',
		],
		'label_block' => true,
	]
);

$sidebar_social_icons->add_control(
	'social_url',
	[
		'label' => esc_html__('Add Url', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => false,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
		'show_label' => false,
	]
);

$this->add_control(
	'sidebar_social_icons',
	[
		'label' => esc_html__('Social Icons', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $sidebar_social_icons->get_controls(),
		'prevent_empty' => false,
		'default' => [
			[
				'social_url' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			],

		],
	]
);

$this->end_controls_section();
