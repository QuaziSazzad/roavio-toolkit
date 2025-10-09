<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Tour_Details extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-tour-details';
	}

	public function get_title()
	{
		return esc_html__('Tour Details', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'tour details'];
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
					'layout_three' => __('Layout Three (Comments)', 'roavio-toolkit'),
					'layout_four' => __('Layout Four (Sidebar)', 'roavio-toolkit'),
					'layout_five' => __('Layout Five (Sidebar)', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('tour-details-one-option.php');
		include rt_get_elementor_option('tour-details-two-option.php');
		include rt_get_elementor_option('tour-details-five-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('tour-details-one.php');
		include rt_get_elementor_template('tour-details-two.php');
		include rt_get_elementor_template('tour-details-three.php');
		include rt_get_elementor_template('tour-details-four.php');
		include rt_get_elementor_template('tour-details-five.php');
	}
}
