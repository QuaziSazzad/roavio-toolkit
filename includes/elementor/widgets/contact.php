<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Contact extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-contact';
	}

	public function get_title()
	{
		return esc_html__('Contact', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-form-horizontal webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'contact'];
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
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('contact-one-option.php');
		include rt_get_elementor_option('contact-two-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one']);
		roavio_elementor_style_options($this, 'Description', '{{WRAPPER}} .description', ['layout_one']);


		roavio_elementor_style_options($this, 'Contact Label', '{{WRAPPER}} .content h5', ['layout_one']);
		roavio_elementor_style_options($this, 'Contact Content', '{{WRAPPER}} .content h6 a, {{WRAPPER}} .content h6', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('contact-one.php');
		include rt_get_elementor_template('contact-two.php');
	}
}
