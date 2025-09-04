<?php

//content
$this->start_controls_section(
	'layout_six_content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => 'layout_six'
		]
	]
);

$this->add_control(
	'layout_six_section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Scale Generative artificial intelligence Platform', 'roavio-toolkit'),
		'default' => esc_html__('Scale Generative artificial intelligence Platform', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_six_title_tag',
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
	'layout_six_section_description',
	[
		'label' => esc_html__('Section Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add section description', 'roavio-toolkit'),
		'default' => esc_html__('Sed ut perspiciatis unde omnis iste sit voluptatem accusantium doloremque laudantium rem aperiam eaqups quae ab illo inventore veritatis et quasi architecto', 'roavio-toolkit'),
	]
);

// First Content Block
$this->add_control(
	'layout_six_first_block_heading',
	[
		'label' => esc_html__('First Block', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_six_first_image',
	[
		'label' => esc_html__('First Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_six_first_subtitle',
	[
		'label' => esc_html__('First Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Custom LLM', 'roavio-toolkit'),
		'default' => esc_html__('Custom LLM', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_first_title',
	[
		'label' => esc_html__('First Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Customize Large Language Models', 'roavio-toolkit'),
		'default' => esc_html__('Customize Large Language Models', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_first_description',
	[
		'label' => esc_html__('First Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add description', 'roavio-toolkit'),
		'default' => esc_html__('Customizing large language models involves fine-tuning their pre-trained parameters to adapt them to specific tasks or domains, enhancing their performance relevance in specialized applications. This process enables organizations to leverage', 'roavio-toolkit'),
	]
);

$this->add_control(
	'layout_six_first_button_text',
	[
		'label' => esc_html__('First Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Read More', 'roavio-toolkit'),
		'default' => esc_html__('Read More', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_first_button_url',
	[
		'label' => esc_html__('First Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

// Second Content Block
$this->add_control(
	'layout_six_second_block_heading',
	[
		'label' => esc_html__('Second Block', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::HEADING,
		'separator' => 'before',
	]
);

$this->add_control(
	'layout_six_second_image',
	[
		'label' => esc_html__('Second Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->add_control(
	'layout_six_second_subtitle',
	[
		'label' => esc_html__('Second Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Edit & Customizations', 'roavio-toolkit'),
		'default' => esc_html__('Edit & Customizations', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_second_title',
	[
		'label' => esc_html__('Second Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Data Curation & Customizations', 'roavio-toolkit'),
		'default' => esc_html__('Data Curation & Customizations', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_second_description',
	[
		'label' => esc_html__('Second Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add description', 'roavio-toolkit'),
		'default' => esc_html__('Data curation involves the careful selection, organization, and maintenance of data to ensure its quality, relevance', 'roavio-toolkit'),
	]
);

// List Items
$repeater = new \Elementor\Repeater();

$repeater->add_control(
	'list_item',
	[
		'label' => esc_html__('List Item', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('List Item', 'roavio-toolkit'),
		'label_block' => true,

	]
);

$this->add_control(
	'layout_six_list_items',
	[
		'label' => esc_html__('List Items', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $repeater->get_controls(),
		'default' => [
			[
				'list_item' => esc_html__('Connect with leads with zero hassle.', 'roavio-toolkit'),
			],
			[
				'list_item' => esc_html__('Take quick payments direct from meetings', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ list_item }}}',
	]
);

$this->add_control(
	'layout_six_second_button_text',
	[
		'label' => esc_html__('Second Button Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Read More', 'roavio-toolkit'),
		'default' => esc_html__('Read More', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_six_second_button_url',
	[
		'label' => esc_html__('Second Button URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);


$this->end_controls_section();
