<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class Team extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-team';
	}

	public function get_title()
	{
		return esc_html__('Team', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'team'];
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
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('team-one-option.php');
		include rt_get_elementor_option('team-two-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_two', 'layout_three']);

		roavio_elementor_style_options($this, 'Name', '{{WRAPPER}} .team-content h3 a,{{WRAPPER}} .name ', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Designation', '{{WRAPPER}} .team-content p', ['layout_one', 'layout_two', 'layout_three']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('team-one.php');
		include rt_get_elementor_template('team-two.php');
	}
}
