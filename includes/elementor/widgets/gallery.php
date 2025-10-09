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
					'layout_two' => __('Layout Two', 'roavio-toolkit'),
					'layout_three' => __('Layout Three', 'roavio-toolkit'),
					'layout_four' => __('Layout Four', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('gallery-one-option.php');
		include rt_get_elementor_option('gallery-two-option.php');
		include rt_get_elementor_option('gallery-three-option.php');
		include rt_get_elementor_option('gallery-four-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_two', 'layout_three']);

		roavio_elementor_style_options($this, 'Title', '{{WRAPPER}} .activities-content h4 a,{{WRAPPER}} .gallery-content h4 a', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Category', '{{WRAPPER}} .gallery-content p', ['layout_three']);


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('gallery-one.php');
		include rt_get_elementor_template('gallery-two.php');
		include rt_get_elementor_template('gallery-three.php');
		include rt_get_elementor_template('gallery-four.php');
	}
}
