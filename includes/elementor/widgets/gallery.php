<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Gallery extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-gallery';
	}

	public function get_title()
	{
		return esc_html__('Gallery', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-person webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'gallery'];
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

		include rt_get_elementor_option('gallery-one-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .section-title h2', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title .sub-title', ['layout_one', 'layout_two', 'layout_three']);

		roavio_elementor_style_options($this, 'Name', '{{WRAPPER}} .content h5 a, {{WRAPPER}} .name a', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Designation', '{{WRAPPER}} .designations, {{WRAPPER}} .designation', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Description', '{{WRAPPER}} .bottom-part p', ['layout_three']);
		roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-style-one i', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('gallery-one.php');
	}
}
