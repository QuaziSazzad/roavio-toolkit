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

class Footer_Three extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-footer-three';
	}

	public function get_title()
	{
		return esc_html__('Footer Three', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'footer'];
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
					// 'layout_two' => __('Layout Two', 'roavio-toolkit'),
					// 'layout_three' => __('Layout Three', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('footer-three-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// roavio_elementor_style_options($this, 'Title', '{{WRAPPER}} .footer-title', ['layout_two']);
		// roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .text p, {{WRAPPER}} .widget-about p, {{WRAPPER}} .footer-widget  p', ['layout_one', 'layout_two', 'layout_three']);
		// roavio_elementor_style_options($this, 'Call Title', '{{WRAPPER}} .info-item .content', ['layout_one']);
		// roavio_elementor_style_options($this, 'Call Number ', '{{WRAPPER}} .info-item .content a', ['layout_one']);
		// roavio_elementor_style_options($this, 'Button Text', '{{WRAPPER}} .read-more', ['layout_three']);

		// roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-style-two a i ', ['layout_two']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('footer-three.php');
	}
}
