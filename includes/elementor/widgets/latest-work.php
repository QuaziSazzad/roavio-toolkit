<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Latest_Work extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-latest-work';
	}

	public function get_title()
	{
		return esc_html__('Latest Work', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-post-list webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'work', 'latest'];
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

		include rt_get_elementor_option('latest-work-one-option.php');

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

		roavio_elementor_style_options($this, 'Tab Name', '{{WRAPPER}} .title.h1', ['layout_one']);
		roavio_elementor_style_options($this, 'Tab Title', '{{WRAPPER}} .title.h2', ['layout_one']);
		roavio_elementor_style_options($this, 'Tab Tagline', '{{WRAPPER}} .category-wrap .category', ['layout_one']);
		roavio_elementor_style_options($this, 'Tab Summary', '{{WRAPPER}} .content p', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('latest-work-one.php');
	}
}
