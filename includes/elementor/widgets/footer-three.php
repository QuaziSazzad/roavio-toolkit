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

		roavio_elementor_style_options($this, 'Summary Text', '{{WRAPPER}} .footer-item .footer-content p', ['layout_one', 'layout_two', 'layout_three']);
		roavio_elementor_style_options($this, 'ALl Widget Title', '{{WRAPPER}} h4', ['layout_one']);
		roavio_elementor_style_options($this, 'Nav Text', '{{WRAPPER}} .single-footer-widget .list-area li a', ['layout_one']);
		roavio_elementor_style_options($this, 'Contact Content', '{{WRAPPER}} .content h6 a', ['layout_one']);
		roavio_elementor_style_options($this, 'Destination', '{{WRAPPER}} .footer-right-content .area-list a', ['layout_one']);
		roavio_elementor_style_options($this, 'Social Text', '{{WRAPPER}} .social-list li a', ['layout_one']);
		roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-list li a i', ['layout_one']);
		roavio_elementor_style_options($this, 'Copyright Text', '{{WRAPPER}} .footer-bottom-3 .footer-wrapper-3 p', ['layout_one']);
		roavio_elementor_style_options($this, 'Footer Link', '{{WRAPPER}} .left-list  li a', ['layout_one']);


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('footer-three.php');
	}
}
