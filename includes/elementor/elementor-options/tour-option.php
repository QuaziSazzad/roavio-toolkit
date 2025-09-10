<?php

/*
* content
*/
$this->start_controls_section(
	'content',
	[
		'label' => esc_html__('Content', 'roavio-addon'),
		'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'layout_type' => ['layout_one', 'layout_two', 'layout_three'],
		]
	]
);


$this->add_control(
	'section_title',
	[
		'label' => esc_html__('Section Title', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Title', 'roavio-addon'),
		'default' => esc_html__('Add Title', 'roavio-addon'),
	]
);

$this->add_control(
	'title_tag',
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
	'sub_title',
	[
		'label' => esc_html__('Sub Title', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'placeholder' => esc_html__('Add Sub Title', 'roavio-addon'),
		'default' => esc_html__('Add Sub Title', 'roavio-addon'),
	]
);

$this->add_control(
	'sub_title_tag',
	[
		'label' => esc_html__('Sub Title Tag', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::SELECT,
		'default' => 'p',
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


$this->end_controls_section();


//post options
$this->start_controls_section(
	'post_options',
	[
		'label' => esc_html__('Post Options', 'roavio-addon'),
		'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		'condition' => [
			'post_type' => 'cpt'
		]
	]
);

$this->add_control(
	'post_count',
	[
		'label' => __('Number Of Posts', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::SLIDER,
		'size_units' => ['count'],
		'range' => [
			'count' => [
				'min' => 0,
				'max' => 15,
				'step' => 1,
			],
		],
		'default' => [
			'unit' => 'count',
			'size' => 6,
		],
	]
);

// $this->add_control(
// 	'word_limit',
// 	[
// 		'label' => __('Word Limit', 'roavio-addon'),
// 		'type' => \Elementor\Controls_Manager::SLIDER,
// 		'size_units' => ['count'],
// 		'range' => [
// 			'count' => [
// 				'min' => 0,
// 				'max' => 200,
// 				'step' => 1,
// 			],
// 		],
// 		'default' => [
// 			'unit' => 'count',
// 			'size' => 10,
// 		],
// 	]
// );


$this->add_control(
	'select_tour_cat',
	[
		'label'    => esc_html__('Select Tour Category', 'roavio-addon'),
		'type'     => \Elementor\Controls_Manager::SELECT2,
		'multiple' => true,
		'options'  => rt_taxonomy_list('ba_location'),

	]
);


$this->add_control(
	'exclude_tour_cat',
	[
		'label'    => esc_html__('Exclude Tour Category', 'roavio-addon'),
		'type'     => \Elementor\Controls_Manager::SELECT2,
		'multiple' => true,
		'options'  => rt_taxonomy_list('ba_location'),
	]
);


$this->add_control(
	'orderby',
	[
		'label'   => esc_html__('Order by', 'roavio-addon'),
		'type'    => \Elementor\Controls_Manager::SELECT2,
		'options' => array(
			'author' => esc_html__('Author', 'roavio-addon'),
			'title'  => esc_html__('Title', 'roavio-addon'),
			'date'   => esc_html__('Date', 'roavio-addon'),
			'rand'   => esc_html__('Random', 'roavio-addon'),
		),
		'default' => 'date'

	]
);

$this->add_control(
	'order',
	[
		'label'   => esc_html__('Order', 'roavio-addon'),
		'type'    => \Elementor\Controls_Manager::SELECT2,
		'options' => array(
			'desc' => esc_html__('DESC', 'roavio-addon'),
			'asc'  => esc_html__('ASC', 'roavio-addon'),
		),
		'default' => 'desc'

	]
);

$this->add_control(
	'pagination_status',
	[
		'label' => __('Enable Pagination?', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::SWITCHER,
		'label_on' => __('Yes', 'roavio-addon'),
		'label_off' => __('No', 'roavio-addon'),
		'return_value' => 'yes',
		'default' => 'no',
		'condition' => [
			'layout_type' => ['layout_one']
		]

	]
);

$this->end_controls_section();

$this->start_controls_section(
	'custom_elementor_post_list',
	[
		'label' => esc_html__('Post With Elementor ', 'roavio-addon'),
		'condition' => [
			'post_type' => 'elementor-field'
		]
	]
);

$post_list = new \Elementor\Repeater();

$post_list->add_control(
	'select_post',
	[
		'label'       => esc_html__('Select Post', 'roavio-addon'),
		'type'        => \Elementor\Controls_Manager::SELECT2,
		'options'     => rt_select_post('to_book'),
		'label_block' => true,
	]
);

$post_list->add_control(
	'title',
	[
		'label' => esc_html__('Custom Title', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::TEXTAREA,
		'rows' => '2',
		'placeholder' => esc_html__('Add Title', 'roavio-addon'),
		'default' => esc_html__('Custom Title', 'roavio-addon'),
		'description' => esc_html__('Keep empty to use default title', 'roavio-addon'),
		'label_block' => true
	]
);

$post_list->add_control(
	'image',
	[
		'label' => esc_html__('image', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [],
	]
);

$this->add_control(
	'post_list',
	[
		'label' => esc_html__('Post List', 'roavio-addon'),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => $post_list->get_controls(),
		'prevent_empty' => false,
		'title_field' => '{{{ title }}}',
	]
);

$this->end_controls_section();
