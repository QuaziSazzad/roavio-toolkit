<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Custom_Sidebar extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-custom-sidebar';
	}

	public function get_title()
	{
		return esc_html__('Custom Sidebar', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-sidebar webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'custom sidebar'];
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
					'layout_four' => esc_html__('Layout Four', 'roavio-toolkit'),
					'layout_five' => esc_html__('Layout Five', 'roavio-toolkit'),
					'layout_six' => esc_html__('Layout Six', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('custom-sidebar-one-option.php');
		include rt_get_elementor_option('custom-sidebar-two-option.php');
		include rt_get_elementor_option('custom-sidebar-three-option.php');
		include rt_get_elementor_option('custom-sidebar-four-option.php');
		include rt_get_elementor_option('custom-sidebar-five-option.php');
		include rt_get_elementor_option('custom-sidebar-six-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title a,{{WRAPPER}} .sec-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_three', 'layout_four', 'layout_six']);

		roavio_elementor_style_options($this, 'Price Text', '{{WRAPPER}} .price-item .price h6', ['layout_two',]);
		roavio_elementor_style_options($this, 'Price', '{{WRAPPER}} .price-item .price h2', ['layout_two',]);
		roavio_elementor_style_options($this, 'Bottom Text', '{{WRAPPER}} .price-box-item h6', ['layout_two',]);

		roavio_elementor_style_options($this, 'Contact Items', '{{WRAPPER}} .list-style-one li a', ['layout_five']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three', 'layout_six'],
				],
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => esc_html__('Text Color', 'roavio-toolkit'),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_control(
			'button_bg',
			[
				'label'     => esc_html__('Background Color', 'roavio-toolkit'),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn, a.theme-btn' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_color',
			[
				'label'     => esc_html__('Hover Color', 'roavio-toolkit'),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);


		$this->add_control(
			'button_hover_bg',
			[
				'label'     => esc_html__('Hover Background Color', 'roavio-toolkit'),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'selector' => '{{WRAPPER}} .theme-btn',
				'label' => esc_html__(' Typography', 'roavio-addon'),
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('custom-sidebar-one.php');
		include rt_get_elementor_template('custom-sidebar-two.php');
		include rt_get_elementor_template('custom-sidebar-three.php');
		include rt_get_elementor_template('custom-sidebar-four.php');
		include rt_get_elementor_template('custom-sidebar-five.php');
		include rt_get_elementor_template('custom-sidebar-six.php');
	}
}
