<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Benefit extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-benefit';
	}

	public function get_title()
	{
		return esc_html__('Benefit', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'benefit'];
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

		include rt_get_elementor_option('benefit-one-option.php');
		include rt_get_elementor_option('benefit-two-option.php');


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

		roavio_elementor_style_options($this, 'Benefit Title', '{{WRAPPER}} .content h5 a', ['layout_one']);
		roavio_elementor_style_options($this, 'Benefit Description', '{{WRAPPER}} .benefit-tour-item .content p', ['layout_one']);
		roavio_elementor_style_options($this, 'Benefit Icon', '{{WRAPPER}} .benefit-tour-item .icon i', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('benefit-one.php');
		include rt_get_elementor_template('benefit-two.php');
	}
}
