<?php

//content
$this->start_controls_section(
	'layout_one_section_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

// Logo Section
$this->add_control(
	'layout_one_logo',
	[
		'label' => esc_html__('Logo', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'label_block' => true
	]
);

$this->add_control(
	'logo_size',
	[
		'label' => __('Logo Size', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		'description' => __('Set Logo Size.', 'roavio-toolkit'),
		'default' => [
			'width' => '123',
			'height' => '35',
		],
	]
);

$this->add_control(
	'layout_one_summary_text',
	[
		'label' => esc_html__('Summary Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Content', 'roavio-toolkit'),
		'default' => esc_html__('Get ready to embark on unforgettable journeys with seeking thrilling', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_button_text',
	[
		'label' => esc_html__('Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore Tours', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_button_url',
	[
		'label' => esc_html__('Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

// Services Section
$this->add_control(
	'layout_one_services_title',
	[
		'label' => esc_html__('Services Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Services', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_services = new \Elementor\Repeater();

$layout_one_services->add_control(
	'service_title',
	[
		'label' => esc_html__('Service Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Best Tour Guide', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_services->add_control(
	'service_url',
	[
		'label' => esc_html__('Service URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_services',
	[
		'label' => esc_html__('Services', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_services->get_controls(),
		'default' => [
			[
				'service_title' => esc_html__('Best Tour Guide', 'roavio-toolkit'),
			],
			[
				'service_title' => esc_html__('Tour Booking', 'roavio-toolkit'),
			],
			[
				'service_title' => esc_html__('Hotel Booking', 'roavio-toolkit'),
			],
			[
				'service_title' => esc_html__('Ticket Booking', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ service_title }}}',
	]
);

// Contact Section
$this->add_control(
	'layout_one_contact_title',
	[
		'label' => esc_html__('Contact Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Get In Touch', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_contact_items = new \Elementor\Repeater();

$layout_one_contact_items->add_control(
	'contact_icon',
	[
		'label' => esc_html__('Contact Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fa-regular fa-map-location-dot',
			'library' => 'regular',
		],
		'label_block' => true,
	]
);

$layout_one_contact_items->add_control(
	'contact_text',
	[
		'label' => esc_html__('Contact Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('578 Level, D-block Street Melbourne, Australia', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_contact_items->add_control(
	'contact_url',
	[
		'label' => esc_html__('Contact URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_contact_items',
	[
		'label' => esc_html__('Contact Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_contact_items->get_controls(),
		'default' => [
			[
				'contact_icon' => [
					'value' => 'fa-regular fa-map-location-dot',
					'library' => 'regular',
				],
				'contact_text' => esc_html__('578 Level, D-block Street Melbourne, Australia', 'roavio-toolkit'),
			],
			[
				'contact_icon' => [
					'value' => 'fa-regular fa-envelope',
					'library' => 'regular',
				],
				'contact_text' => esc_html__('supportrevelo@gmail.com', 'roavio-toolkit'),
				'contact_url' => [
					'url' => 'mailto:supportrevelo@gmail.com',
					'is_external' => false,
					'nofollow' => false,
				],
			],
			[
				'contact_icon' => [
					'value' => 'fa-regular fa-phone-volume',
					'library' => 'regular',
				],
				'contact_text' => esc_html__('+880 123 345 88', 'roavio-toolkit'),
				'contact_url' => [
					'url' => 'tel:+88012334588',
					'is_external' => false,
					'nofollow' => false,
				],
			],
		],
		'title_field' => '{{{ contact_text }}}',
	]
);


// Social Media Section
$this->add_control(
	'layout_one_social_title',
	[
		'label' => esc_html__('Social Media Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Social Media', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_social_icons = new \Elementor\Repeater();

$layout_one_social_icons->add_control(
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

$layout_one_social_icons->add_control(
	'social_title',
	[
		'label' => esc_html__('Social Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Facebook', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_social_icons->add_control(
	'social_url',
	[
		'label' => esc_html__('Social URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_social_icons',
	[
		'label' => esc_html__('Social Icons', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_social_icons->get_controls(),
		'default' => [
			[
				'social_title' => esc_html__('Facebook', 'roavio-toolkit'),
				'social_icon' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'brand',
				],
			],
			[
				'social_title' => esc_html__('Youtube', 'roavio-toolkit'),
				'social_icon' => [
					'value' => 'fab fa-youtube',
					'library' => 'brand',
				],
			],
			[
				'social_title' => esc_html__('Twitter', 'roavio-toolkit'),
				'social_icon' => [
					'value' => 'fab fa-twitter',
					'library' => 'brand',
				],
			],
			[
				'social_title' => esc_html__('Instagram', 'roavio-toolkit'),
				'social_icon' => [
					'value' => 'fab fa-instagram',
					'library' => 'brand',
				],
			],
		],
		'title_field' => '{{{ social_title }}}',
	]
);

// Destinations Section
$this->add_control(
	'layout_one_destinations_title',
	[
		'label' => esc_html__('Destinations Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Destinations', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_destinations = new \Elementor\Repeater();

$layout_one_destinations->add_control(
	'destination_title',
	[
		'label' => esc_html__('Destination Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('African Safaris', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_destinations->add_control(
	'destination_url',
	[
		'label' => esc_html__('Destination URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_destinations',
	[
		'label' => esc_html__('Destinations', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_destinations->get_controls(),
		'default' => [
			[
				'destination_title' => esc_html__('African Safaris', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Canada', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('USA', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Middle East', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Asia', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Swaziland', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Portugal', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Netherland', 'roavio-toolkit'),
			],
			[
				'destination_title' => esc_html__('Nepal', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ destination_title }}}',
	]
);

$this->add_control(
	'layout_one_explore_button_text',
	[
		'label' => esc_html__('Explore Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Explore All Destinations', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_explore_button_url',
	[
		'label' => esc_html__('Explore Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

// Map Section
$this->add_control(
	'layout_one_map_embed_code',
	[
		'label' => esc_html__('Map Embed Code', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_bg_text',
	[
		'label' => esc_html__('Background Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Roavio', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->end_controls_section();

//content
$this->start_controls_section(
	'layout_one_copyright_section',
	[
		'label' => esc_html__('Copyrght Section', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);

// Footer Bottom Section
$layout_one_footer_links = new \Elementor\Repeater();

$layout_one_footer_links->add_control(
	'link_title',
	[
		'label' => esc_html__('Link Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Company', 'roavio-toolkit'),
		'label_block' => true
	]
);

$layout_one_footer_links->add_control(
	'link_url',
	[
		'label' => esc_html__('Link URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('#', 'roavio-toolkit'),
		'show_external' => true,
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$this->add_control(
	'layout_one_footer_links',
	[
		'label' => esc_html__('Footer Links', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_one_footer_links->get_controls(),
		'default' => [
			[
				'link_title' => esc_html__('Company', 'roavio-toolkit'),
			],
			[
				'link_title' => esc_html__('FAQs', 'roavio-toolkit'),
			],
			[
				'link_title' => esc_html__('Privacy Policy', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ link_title }}}',
	]
);

$this->add_control(
	'layout_one_copyright_text',
	[
		'label' => esc_html__('Copyright Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('@Copy 2025 ROAVIO, All rights reserved', 'roavio-toolkit'),
		'label_block' => true
	]
);

$this->end_controls_section();

//content
$this->start_controls_section(
	'layout_one_section_shapes',
	[
		'label' => esc_html__('Bg Shapes', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_one'
		]
	]
);


// shapes Section
$this->add_control(
	'layout_one_shape_one',
	[
		'label' => esc_html__('Shape One', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_shape_two',
	[
		'label' => esc_html__('Shape Two', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_shape_three',
	[
		'label' => esc_html__('Shape Three', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true
	]
);

$this->add_control(
	'layout_one_shape_four',
	[
		'label' => esc_html__('Shape Four', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
		'label_block' => true
	]
);


$this->end_controls_section();
