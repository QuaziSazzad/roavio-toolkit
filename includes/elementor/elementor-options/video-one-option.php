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
	'layout_one_video_url',
	[
		'label' => esc_html__('Video URL', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::URL,
		'placeholder' => esc_html__('https://youtube.com/watch?v=example', 'roavio-toolkit'),
		'default' => [
			'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
		],
		'label_block' => true,
	]
);

$this->add_control(
	'layout_one_play_icon',
	[
		'label' => esc_html__('Play Icon', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::ICONS,
		'default' => [
			'value' => 'fas fa-play',
			'library' => 'fa-solid',
		],
	]
);

$this->add_control(
	'layout_one_background_image',
	[
		'label' => esc_html__('Video Thumbnail', 'roavio-toolkit'),
		'type' => \Elementor\Controls_Manager::MEDIA,
		'default' => [
			'url' => \Elementor\Utils::get_placeholder_image_src(),
		],
	]
);

$this->end_controls_section();
