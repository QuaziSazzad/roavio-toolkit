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
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('What Our Clients Say About Solutions', 'roavio-toolkit'),
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
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add subtitle', 'roavio-toolkit'),
		'default' => esc_html__('Our Testimonials', 'roavio-toolkit'),
		'label_block' => true,
	]
);



$this->add_control(
	'layout_four_image',
	[
		'label' => esc_html__('Testimonial Image', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
		'description' => esc_html__('Upload testimonial section image', 'roavio-toolkit'),
	]
);

$layout_four_testimonial = new \Elementor\Repeater();

$layout_four_testimonial->add_control(
	'title',
	[
		'label' => esc_html__('Title', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add title', 'roavio-toolkit'),
		'default' => esc_html__('Excellent Works', 'roavio-toolkit'),
	]
);

$layout_four_testimonial->add_control(
	'rating',
	[
		'label' => esc_html__('Rating', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => '4.5',
		'options' => [
			'5' => esc_html__('5 Stars', 'roavio-toolkit'),
			'4.5' => esc_html__('4.5 Stars', 'roavio-toolkit'),
			'4' => esc_html__('4 Stars', 'roavio-toolkit'),
			'3.5' => esc_html__('3.5 Stars', 'roavio-toolkit'),
			'3' => esc_html__('3 Stars', 'roavio-toolkit'),
			'2.5' => esc_html__('2.5 Stars', 'roavio-toolkit'),
			'2' => esc_html__('2 Stars', 'roavio-toolkit'),
			'1.5' => esc_html__('1.5 Stars', 'roavio-toolkit'),
			'1' => esc_html__('1 Star', 'roavio-toolkit'),
		],
	]
);

$layout_four_testimonial->add_control(
	'content',
	[
		'label' => esc_html__('Content', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'rows' => '3',
		'placeholder' => esc_html__('Add testimonial content', 'roavio-toolkit'),
		'default' => esc_html__('Sed ut perspiciatis unde omnis iste natus voluptatem accus antiume dolorem queauy antium totam aperiam eaque quaey veritatis vitaec', 'roavio-toolkit'),
	]
);

$layout_four_testimonial->add_control(
	'name',
	[
		'label' => esc_html__('Name', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add name', 'roavio-toolkit'),
		'default' => esc_html__('Andrew D. Bricker', 'roavio-toolkit'),
	]
);

$layout_four_testimonial->add_control(
	'designation',
	[
		'label' => esc_html__('Designation', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::TEXT,
		'placeholder' => esc_html__('Add designation', 'roavio-toolkit'),
		'default' => esc_html__('CEO & Founder', 'roavio-toolkit'),
	]
);

$layout_four_testimonial->add_control(
	'icon',
	[
		'label' => esc_html__('Quote Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fal fa-quote-right',
			'library' => 'font-awesome',
		],
	]
);

$this->add_control(
	'layout_four_testimonials',
	[
		'label' => esc_html__('Testimonials', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $layout_four_testimonial->get_controls(),
		'default' => [
			[
				'title' => esc_html__('Excellent Works', 'roavio-toolkit'),
				'content' => esc_html__('Sed ut perspiciatis unde omnis iste natus voluptatem accus antiume dolorem queauy antium totam aperiam eaque quaey veritatis vitaec', 'roavio-toolkit'),
				'name' => esc_html__('Andrew D. Bricker', 'roavio-toolkit'),
				'designation' => esc_html__('CEO & Founder', 'roavio-toolkit'),
				'rating' => '4.5',
			],
			[
				'title' => esc_html__('Excellent Works', 'roavio-toolkit'),
				'content' => esc_html__('On the other hand denounce righteous indignations and dislike men who beguiled and demoralized by the charms of pleasure moment blinded foresee', 'roavio-toolkit'),
				'name' => esc_html__('Jose T. McMichael', 'roavio-toolkit'),
				'designation' => esc_html__('Senior Manager', 'roavio-toolkit'),
				'rating' => '4.5',
			],
		],
		'title_field' => '{{{ name }}}',
	]
);


$this->end_controls_section();
