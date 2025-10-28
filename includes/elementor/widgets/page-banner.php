<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;

class Page_Banner extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-page-banner';
	}

	public function get_title()
	{
		return esc_html__('Page Banner', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-banner webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'section', 'page banner'];
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
					'layout_five' => esc_html__('Layout Five(Destination)', 'roavio-toolkit'),
					'layout_six' => esc_html__('Layout Six(Tour Details)', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('page-banner-one-option.php');
		include rt_get_elementor_option('page-banner-two-option.php');
		include rt_get_elementor_option('page-banner-three-option.php');
		include rt_get_elementor_option('page-banner-four-option.php');
		include rt_get_elementor_option('page-banner-five-option.php');
		include rt_get_elementor_option('page-banner-six-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Page Title', '{{WRAPPER}} .page-heading h1, {{WRAPPER}} .breadcrumb-sub-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Home Text', '{{WRAPPER}} .breadcrumb-items li:first-child a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Current Page Text', '{{WRAPPER}} .breadcrumb-items li:last-child, {{WRAPPER}} li.style-2 a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);


		roavio_elementor_style_options($this, 'Count Number', '{{WRAPPER}} .content h2,{{WRAPPER}} .content.style-2 .text h2', ['layout_two', 'layout_four']);
		roavio_elementor_style_options($this, 'Count Text', '{{WRAPPER}} .breadcrumb-top-items .content p,{{WRAPPER}} .content.style-2 .text p', ['layout_two', 'layout_four']);
		roavio_elementor_style_options($this, 'Tour Features', '{{WRAPPER}} .list li', ['layout_six']);


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		include rt_get_elementor_template('page-banner-one.php');
		include rt_get_elementor_template('page-banner-two.php');
		include rt_get_elementor_template('page-banner-three.php');
		include rt_get_elementor_template('page-banner-four.php');
		include rt_get_elementor_template('page-banner-five.php');
		include rt_get_elementor_template('page-banner-six.php');
	}
}
