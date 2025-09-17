<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Search_Form extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-search-form';
	}

	public function get_title()
	{
		return esc_html__('Search Form', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-search webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'search form'];
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

		include rt_get_elementor_option('search-form-one-option.php');
		include rt_get_elementor_option('search-form-two-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .subtitle', ['layout_one']);
		roavio_elementor_style_options($this, 'Input Label', '{{WRAPPER}} .section-title p', ['layout_one']);

		roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .footer-newsletter p', ['layout_two']);


		roavio_elementor_style_options($this, 'Caption Text One', '{{WRAPPER}} .cta-two-image-part .shape.five', ['layout_one']);
		roavio_elementor_style_options($this, 'Caption Text One Bg', '{{WRAPPER}} .cta-two-image-part .shape.five', ['layout_one'], 'background-color');
		roavio_elementor_style_options($this, 'Caption Text Two', '{{WRAPPER}} .cta-two-image-part .shape.six', ['layout_one']);
		roavio_elementor_style_options($this, 'Caption Text Two Bg', '{{WRAPPER}} .cta-two-image-part .shape.six', ['layout_one'], 'background-color');

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('search-form-one.php');
		include rt_get_elementor_template('search-form-two.php');
	}
}
