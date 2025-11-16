<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Custom_Tour extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-custom-tour';
	}

	public function get_title()
	{
		return esc_html__('Custom Tour', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-flow webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'custom tour'];
	}

	protected function register_controls()
	{

		$this->start_controls_section(
			'layout_section',
			[
				'label' => esc_html__('Layout', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'layout_type',
			[
				'label' => esc_html__('Select Layout', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'layout_one',
				'options' => [
					'layout_one' => esc_html__('Layout One', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('custom-tour-one-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one']);

		roavio_elementor_style_options($this, 'Tour Title', '{{WRAPPER}} .content-item h4 a', ['layout_one']);
		roavio_elementor_style_options($this, 'Excerpt', '{{WRAPPER}} .destination-escap-content p', ['layout_one']);

		roavio_elementor_style_options($this, 'Info Label', '{{WRAPPER}} .bottom-item h6', ['layout_one']);
		roavio_elementor_style_options($this, 'Info Text', '{{WRAPPER}} .bottom-item span', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		// if ($settings['post_type'] == 'cpt') {
		// 	$args  = array(
		// 		'post_type'           => 'to_book',
		// 		'post_status'         => 'publish',
		// 		'ignore_sticky_posts' => 1,
		// 		'posts_per_page'      => $settings['post_count']['size'],
		// 	);

		// 	$args['orderby'] = $settings['orderby'];
		// 	$args['order']   = $settings['order'];
		// 	if (!empty($settings['exclude_cat'])) {
		// 		$args['category__not_in'] = $settings['exclude_cat'];
		// 	}


		// 	if (!empty($settings['select_cat'])) {
		// 		$args['tax_query'][] = array(
		// 			'taxonomy' => 'category',
		// 			'field'    => 'id',
		// 			'terms'    => array_values($settings['select_cat'])
		// 		);
		// 	}

		// 	$posts_query = new \WP_Query($args);
		// }
		include rt_get_elementor_template('custom-tour-one.php');
	}
}
