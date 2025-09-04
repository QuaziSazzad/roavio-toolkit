<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Skills extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-skills';
	}

	public function get_title()
	{
		return esc_html__('Skills', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-skill-bar webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'skills'];
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
				]
			]
		);

		$this->end_controls_section();


		include rt_get_elementor_option('skills-one-option.php');

		//General style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Title', '{{WRAPPER}} .circle-progress h6', ['layout_one']);
		roavio_elementor_style_options($this, 'Percentage', '{{WRAPPER}} .circle-progress .counting', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('skills-one.php');
	}
}
