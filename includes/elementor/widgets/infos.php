<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Infos extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-infos';
	}

	public function get_title()
	{
		return esc_html__('Infos', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'infos'];
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
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('infos-one-option.php');
		include rt_get_elementor_option('infos-two-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one', 'layout_two']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_two']);

		roavio_elementor_style_options($this, 'Features Title', '{{WRAPPER}} .feature-icon-item h4', ['layout_one']);
		roavio_elementor_style_options($this, 'Features Description', '{{WRAPPER}} .feature-item p', ['layout_one']);
		roavio_elementor_style_options($this, 'Features Icon', '{{WRAPPER}} .feature-icon-item .icon i', ['layout_one']);

		roavio_elementor_style_options($this, 'Counter Text', '{{WRAPPER}} .content p', ['layout_two']);
		roavio_elementor_style_options($this, 'count Number', '{{WRAPPER}} span.count', ['layout_two']);
		roavio_elementor_style_options($this, 'count Icon', '{{WRAPPER}} .counter-item .icon i', ['layout_two']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('infos-one.php');
		include rt_get_elementor_template('infos-two.php');
	}
}
