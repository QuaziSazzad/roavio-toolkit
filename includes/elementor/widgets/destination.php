<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Destination extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-destination';
	}

	public function get_title()
	{
		return esc_html__('Destination', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'destination'];
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
					'layout_three' => __('Layout three', 'roavio-toolkit'),
					'layout_four' => __('Layout four', 'roavio-toolkit'),
					'layout_five' => __('Layout Five', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('destination-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_two', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title ', ['layout_two', 'layout_three', 'layout_four', 'layout_five']);

		roavio_elementor_style_options($this, 'Destination Name', '{{WRAPPER}} .tour-content h3 a,{{WRAPPER}} .destination-content h3 a,{{WRAPPER}} .destination-content h5 a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Destination Location', '{{WRAPPER}} .tour-content p,{{WRAPPER}} .destination-content p', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('destination-one.php');
		include rt_get_elementor_template('destination-two.php');
		include rt_get_elementor_template('destination-three.php');
		include rt_get_elementor_template('destination-four.php');
		include rt_get_elementor_template('destination-five.php');
	}
}
