<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Footer_Top extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-footer-top';
	}

	public function get_title()
	{
		return esc_html__('Footer Top', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-footer webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'top', 'footer'];
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
					'layout_five' => __('Layout Five', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('footer-top-one-option.php');
		include rt_get_elementor_option('footer-top-two-option.php');
		include rt_get_elementor_option('footer-top-three-option.php');
		include rt_get_elementor_option('footer-top-four-option.php');
		include rt_get_elementor_option('footer-top-five-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Title', '{{WRAPPER}} .section-title h2, {{WRAPPER}} .footer-text .h1', ['layout_one', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Sub Title', '{{WRAPPER}} .text-white .sub-title,{{WRAPPER}}  .section-title .sub-title', ['layout_one', 'layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .get-consultation-content p', ['layout_three']);
		roavio_elementor_style_options($this, 'Email Text', '{{WRAPPER}} .content, {{WRAPPER}} .footer-contact p,{{WRAPPER}} .hotline .content span', ['layout_one', 'layout_three', 'layout_four', 'layout_five']);
		roavio_elementor_style_options($this, 'Email Address', '{{WRAPPER}} .content a, {{WRAPPER}} .section-title a', ['layout_one', 'layout_three', 'layout_four', 'layout_five']);

		roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-style-two a i', ['layout_four']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => esc_html__('Text Color', 'roavio-toolkit'),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .theme-btn' => 'background-color: {{VALUE}};',
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
				'name'     => 'button_one_typography',
				'selector' => '{{WRAPPER}} .theme-btn',
				'label' => esc_html__(' Typography', 'roavio-addon'),
			]
		);


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('footer-top-one.php');
		include rt_get_elementor_template('footer-top-two.php');
		include rt_get_elementor_template('footer-top-three.php');
		include rt_get_elementor_template('footer-top-four.php');
		include rt_get_elementor_template('footer-top-five.php');
	}
}
