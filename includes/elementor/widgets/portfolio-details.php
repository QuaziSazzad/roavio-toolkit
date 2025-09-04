<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Portfolio_Details extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-portfolio-details';
	}

	public function get_title()
	{
		return esc_html__('Portfolio Details', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-product-meta webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'portfolio', 'details'];
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

		include rt_get_elementor_option('portfolio-details-one-option.php');
		include rt_get_elementor_option('portfolio-details-two-option.php');
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('portfolio-details-one.php');
		include rt_get_elementor_template('portfolio-details-two.php');
	}
}
