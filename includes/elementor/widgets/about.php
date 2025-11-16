<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Text_Stroke;
use Elementor\Group_Control_Typography;
use Elementor\Icons_Manager;
use Elementor\Widget_Base;

class About extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-about';
	}

	public function get_title()
	{
		return esc_html__('about', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-info-box webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'About'];
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
					'layout_seven' => esc_html__('Layout Seven', 'roavio-toolkit'),
					'layout_eight' => esc_html__('Layout Eight', 'roavio-toolkit'),
					'layout_nine' => esc_html__('Layout Nine', 'roavio-toolkit'),
					'layout_ten' => esc_html__('Layout Ten', 'roavio-toolkit'),
					'layout_eleven' => esc_html__('Layout Eleven', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('about-one-option.php');
		include rt_get_elementor_option('about-two-option.php');
		include rt_get_elementor_option('about-three-option.php');
		include rt_get_elementor_option('about-four-option.php');
		include rt_get_elementor_option('about-five-option.php');
		include rt_get_elementor_option('about-six-option.php');
		include rt_get_elementor_option('about-seven-option.php');
		include rt_get_elementor_option('about-eight-option.php');
		include rt_get_elementor_option('about-nine-option.php');
		include rt_get_elementor_option('about-ten-option.php');
		include rt_get_elementor_option('about-eleven-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_seven', 'layout_eight', 'layout_nine', 'layout_ten', 'layout_eleven']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_eight']);
		roavio_elementor_style_options($this, 'Description', '{{WRAPPER}} .about-right-item .content p,{{WRAPPER}} .adventure-wrapper .text,{{WRAPPER}} .about-content .text,{{WRAPPER}} .description', ['layout_one', 'layout_two', 'layout_four', 'layout_five', 'layout_six', 'layout_nine', 'layout_ten', 'layout_seven', 'layout_eleven']);

		roavio_elementor_style_options($this, 'Features List', '{{WRAPPER}} .list-item .list li', ['layout_one']);

		roavio_elementor_style_options($this, 'Box Title', '{{WRAPPER}} .adventure-box h3 a', ['layout_two']);
		roavio_elementor_style_options($this, 'Client Name', '{{WRAPPER}} .content h5,{{WRAPPER}} .info-item .content h5', ['layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'Client Designation', '{{WRAPPER}} .content span,{{WRAPPER}} .info-item .content span', ['layout_two', 'layout_three']);

		roavio_elementor_style_options($this, 'Discount Text', '{{WRAPPER}} .adventure-thumb .adventure-content h6', ['layout_two']);
		roavio_elementor_style_options($this, 'Adventure Title', '{{WRAPPER}} .adventure-thumb .adventure-content h3', ['layout_two']);
		roavio_elementor_style_options($this, 'Price', '{{WRAPPER}} .booking-item .content h4', ['layout_two']);
		roavio_elementor_style_options($this, 'Price Description', '{{WRAPPER}} .booking-item .content span', ['layout_two']);

		roavio_elementor_style_options($this, 'Counter One Number', '{{WRAPPER}} .booking-item .content span, {{WRAPPER}} .right-box span', ['layout_three', 'layout_eight']);
		roavio_elementor_style_options($this, 'Counter One Text', '{{WRAPPER}} .counter-main-box .content p,{{WRAPPER}} .right-box p', ['layout_three', 'layout_eight']);

		roavio_elementor_style_options($this, 'Counter Two Number', '{{WRAPPER}} .right-box .count, {{WRAPPER}} .count-content .content h2', ['layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Counter Two Text', '{{WRAPPER}} .right-box p,{{WRAPPER}} .count-content p', ['layout_three', 'layout_five']);
		roavio_elementor_style_options($this, 'Experience Title', '{{WRAPPER}} .adventure-box-2 h3 a', ['layout_three']);


		roavio_elementor_style_options($this, 'Tab Content', '{{WRAPPER}} .right-content .content p', ['layout_four', 'layout_six']);
		roavio_elementor_style_options($this, 'Tab Features', '{{WRAPPER}} .right-content .content .list li', ['layout_four', 'layout_six']);

		roavio_elementor_style_options($this, 'Travel Items Title', '{{WRAPPER}} .icon-item .content h5', ['layout_eight']);
		roavio_elementor_style_options($this, 'Travel Items Description', '{{WRAPPER}} .icon-item .content p', ['layout_eight']);
		roavio_elementor_style_options($this, 'Travel Items Icon', '{{WRAPPER}} .icon-item .icon i', ['layout_eight']);


		roavio_elementor_style_options($this, 'Count Text', '{{WRAPPER}} .about-left-item .right-item p,{{WRAPPER}} .cont p', ['layout_nine', 'layout_eleven']);
		roavio_elementor_style_options($this, 'Count Number', '{{WRAPPER}} .count-box .count,{{WRAPPER}} .cont h2', ['layout_nine', 'layout_eleven']);

		roavio_elementor_style_options($this, 'Features Title', '{{WRAPPER}} .icon-item .content h5,{{WRAPPER}} .feature-item .icon-item h5,{{WRAPPER}} .feature-items h5', ['layout_nine', 'layout_ten', 'layout_seven', 'layout_eleven']);
		roavio_elementor_style_options($this, 'Features Text', '{{WRAPPER}} .icon-item .content p,{{WRAPPER}} .feature-memories-item .feature-item p,{{WRAPPER}} .feature-items p', ['layout_nine', 'layout_ten', 'layout_seven', 'layout_eleven']);
		roavio_elementor_style_options($this, 'Features Icon', '{{WRAPPER}} .about-box .icon-item .icon i,{{WRAPPER}} .icon-item .icon i,{{WRAPPER}} .feature-items .icon i', ['layout_nine', 'layout_ten', 'layout_seven', 'layout_eleven']);
		roavio_elementor_style_options($this, 'List Items', '{{WRAPPER}} .list-box-item .list li', ['layout_ten']);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_four', 'layout_six', 'layout_seven', 'layout_eleven'],
				],
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => esc_html__('Text Color', 'roavio-toolkit'),
				'type'      => Controls_Manager::COLOR,
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
				'type'      => Controls_Manager::COLOR,
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
				'type'      => Controls_Manager::COLOR,
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
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
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
		include rt_get_elementor_template('about-one.php');
		include rt_get_elementor_template('about-two.php');
		include rt_get_elementor_template('about-three.php');
		include rt_get_elementor_template('about-four.php');
		include rt_get_elementor_template('about-five.php');
		include rt_get_elementor_template('about-six.php');
		include rt_get_elementor_template('about-seven.php');
		include rt_get_elementor_template('about-eight.php');
		include rt_get_elementor_template('about-nine.php');
		include rt_get_elementor_template('about-ten.php');
		include rt_get_elementor_template('about-eleven.php');
	}
}
