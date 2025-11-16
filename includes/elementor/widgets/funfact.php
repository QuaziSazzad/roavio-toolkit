<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class FunFact extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-funfact';
	}

	public function get_title()
	{
		return esc_html__('Funfact', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-counter webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'fun fact'];
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
					'layout_two' => esc_html__('Layout Two', 'roavio-toolkit'),
					'layout_three' => esc_html__('Layout Three', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();


		include rt_get_elementor_option('funfact-one-option.php');
		include rt_get_elementor_option('funfact-two-option.php');
		include rt_get_elementor_option('funfact-three-option.php');

		//General style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one',]);
		roavio_elementor_style_options($this, 'Description', '{{WRAPPER}} .description', ['layout_one',]);

		roavio_elementor_style_options($this, 'Funfact Title', '{{WRAPPER}} .counter-item .content p', ['layout_one']);
		roavio_elementor_style_options($this, 'Funfact Description', '{{WRAPPER}} .content p', ['layout_three']);
		roavio_elementor_style_options($this, 'Count Number', '{{WRAPPER}} .counter-item .content h3,{{WRAPPER}} .content h2', ['layout_one', 'layout_three']);
		roavio_elementor_style_options($this, 'Icon', '{{WRAPPER}} .counter-item .icon i, {{WRAPPER}} .icon i', ['layout_one', 'layout_three']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('funfact-one.php');
		include rt_get_elementor_template('funfact-two.php');
		include rt_get_elementor_template('funfact-three.php');
	}
}
