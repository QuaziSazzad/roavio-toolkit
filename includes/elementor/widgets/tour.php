<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Tour extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-tour';
	}

	public function get_title()
	{
		return esc_html__('Tour', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'tour'];
	}

	protected function register_controls()
	{

		$this->start_controls_section(
			'layout_section',
			[
				'label' => __('Layout', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'layout_type',
			[
				'label' => __('Select Layout', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'layout_one',
				'options' => [
					'layout_one' => __('Layout One', 'roavio-toolkit'),
					'layout_two' => __('Layout Two', 'roavio-toolkit'),
					'layout_three' => __('Layout Three', 'roavio-toolkit'),
					'layout_four' => __('Layout Four', 'roavio-toolkit'),
				]
			]
		);

		$this->add_control(
			'post_type',
			[
				'label'       => esc_html__('Post Type', 'travhub-core'),
				'type'        => \Elementor\Controls_Manager::SELECT,
				'label_block' => false,
				'options'     => [
					'cpt'   => esc_html__('Tour Type', 'travhub-core'),
					'elementor-field'   => esc_html__('With Elementor', 'travhub-core'),
				],
				'default'     => 'cpt',

			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('tour-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_seven', 'layout_eight', 'layout_nine', 'layout_ten']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_seven', 'layout_eight', 'layout_nine']);

		roavio_elementor_style_options($this, 'Tour Title', '{{WRAPPER}} .tour-place-content h3 a', ['layout_one', 'layout_two']);
		roavio_elementor_style_options($this, 'Tour Features', '{{WRAPPER}} .tour-list li', ['layout_one', 'layout_two']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		if ($settings['post_type'] == 'cpt') {
			$args  = array(
				'post_type'           => 'to_book',
				'post_status'         => 'publish',
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => $settings['post_count']['size'],
			);

			$args['orderby'] = $settings['orderby'];
			$args['order']   = $settings['order'];
			if (!empty($settings['exclude_cat'])) {
				$args['category__not_in'] = $settings['exclude_cat'];
			}


			if (!empty($settings['select_cat'])) {
				$args['tax_query'][] = array(
					'taxonomy' => 'category',
					'field'    => 'id',
					'terms'    => array_values($settings['select_cat'])
				);
			}

			$posts_query = new \WP_Query($args);
		}
		include rt_get_elementor_template('tour-one.php');
		include rt_get_elementor_template('tour-two.php');
		include rt_get_elementor_template('tour-three.php');
		include rt_get_elementor_template('tour-four.php');
	}
}
