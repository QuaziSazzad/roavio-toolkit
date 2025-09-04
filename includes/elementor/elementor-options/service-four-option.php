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
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Tailored Security Services to Safeguard Your Business', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your title here', 'roavio-toolkit'),
	]
);


$this->add_control(
	'layout_four_title_tag',
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
	'layout_four_subtitle',
	[
		'label' => esc_html__('Subtitle', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('What We Provide', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your subtitle here', 'roavio-toolkit'),
	]
);



$this->add_control(
	'layout_four_description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Cybersecurity is the practice of protecting systems, networks, and data from malicious attacks, unauthorized access, an digital threats In today\'s interconnected world, businesses face.', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type your description here', 'roavio-toolkit'),
	]
);

$layout_four_services = new \Elementor\Repeater();


$layout_four_services->add_control(
	'icon_class',
	[
		'label' => esc_html__('Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'flaticon-cloud-1',
			'library' => 'flaticon',
		],
	]
);

$layout_four_services->add_control(
	'icon_color',
	[
		'label' => esc_html__('Icon Color', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'yellow',
		'options' => [
			'yellow' => esc_html__('Yellow', 'roavio-toolkit'),
			'skyblue' => esc_html__('Sky Blue', 'roavio-toolkit'),
			'pink' => esc_html__('Pink', 'roavio-toolkit'),
			'blue' => esc_html__('Blue', 'roavio-toolkit'),
		],
	]
);

$layout_four_services->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Data Protection', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type service title here', 'roavio-toolkit'),
	]
);

$layout_four_services->add_control(
	'description',
	[
		'label' => esc_html__('Description', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'default' => esc_html__('Data protection is the practice of safeguarding sensitive they information unauthorized', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type service description here', 'roavio-toolkit'),
	]
);

$layout_four_services->add_control(
	'link',
	[
		'label' => esc_html__('Link', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
		'default' => [
			'url' => '#',
			'is_external' => false,
			'nofollow' => false,
		],
	]
);

$layout_four_services->add_control(
	'read_more_text',
	[
		'label' => esc_html__('Read More Text', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'default' => esc_html__('Read More', 'roavio-toolkit'),
		'placeholder' => esc_html__('Type read more text here', 'roavio-toolkit'),
		'label_block' => true,
	]
);

$this->add_control(
	'layout_four_services',
	[
		'label' => esc_html__('Services', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_four_services->get_controls(),
		'default' => [
			[
				'icon_class' => 'flaticon-cloud-1',
				'icon_color' => 'yellow',
				'title' => esc_html__('Data Protection', 'roavio-toolkit'),
				'description' => esc_html__('Data protection is the practice of safeguarding sensitive they information unauthorized', 'roavio-toolkit'),
				'read_more_text' => esc_html__('Read More', 'roavio-toolkit'),
			],
			[
				'icon_class' => 'flaticon-cyber-security-1',
				'icon_color' => 'skyblue',
				'title' => esc_html__('Cyber Security', 'roavio-toolkit'),
				'description' => esc_html__('Cybersecurity refers to the practice of protecting digital systems networks sensitive', 'roavio-toolkit'),
				'read_more_text' => esc_html__('Read More', 'roavio-toolkit'),
			],
			[
				'icon_class' => 'flaticon-cloud-computing',
				'icon_color' => 'pink',
				'title' => esc_html__('Cloud Services', 'roavio-toolkit'),
				'description' => esc_html__('Cloud services refer delivery computing resource including storage, processing power', 'roavio-toolkit'),
				'read_more_text' => esc_html__('Read More', 'roavio-toolkit'),
			],
			[
				'icon_class' => 'flaticon-data',
				'icon_color' => 'blue',
				'title' => esc_html__('Data Storage', 'roavio-toolkit'),
				'description' => esc_html__('Data Storage refers a process of saving digital information in a physical or virtual medium', 'roavio-toolkit'),
				'read_more_text' => esc_html__('Read More', 'roavio-toolkit'),
			],
		],
		'title_field' => '{{{ title }}}',
	]
);




$this->end_controls_section();
