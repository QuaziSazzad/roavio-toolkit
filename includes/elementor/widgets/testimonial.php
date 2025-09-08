<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Testimonial extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-testimonial';
	}

	public function get_title()
	{
		return esc_html__('Testimonial', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-testimonial webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'testimonial', 'feedback', 'slider'];
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
					// 'layout_four' => __('Layout Four', 'roavio-toolkit'),
					// 'layout_five' => __('Layout Five', 'roavio-toolkit'),
					// 'layout_six' => __('Layout Six', 'roavio-toolkit'),
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('testimonial-one-option.php');
		// include rt_get_elementor_option('testimonial-two-option.php');
		// include rt_get_elementor_option('testimonial-three-option.php');
		// include rt_get_elementor_option('testimonial-four-option.php');
		// include rt_get_elementor_option('testimonial-five-option.php');
		// include rt_get_elementor_option('testimonial-six-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .section-title h2', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title .sub-title,{{WRAPPER}} .subtitle.color-primary', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);

		roavio_elementor_style_options($this, 'Client Title', '{{WRAPPER}} .trusted-clients-wrap h5, {{WRAPPER}} .trusted-client-part h4', ['layout_two', 'layout_five', 'layout_six']);

		roavio_elementor_style_options($this, 'Name', '{{WRAPPER}} .testimonial-item .testi-author b,{{WRAPPER}} .testi-author b,{{WRAPPER}} .testi-footer .title h4,{{WRAPPER}} .quote-title h6', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Designation', '{{WRAPPER}} .testi-author, {{WRAPPER}} .testi-author span, {{WRAPPER}} .title span, {{WRAPPER}} .quote-title span', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Testimonial', '{{WRAPPER}} .testimonial-item .testi-text,{{WRAPPER}} .testi-text,{{WRAPPER}} .testimonial-item.style-two .text', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);


		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('testimonial-one.php');
		// include rt_get_elementor_template('testimonial-two.php');
		// include rt_get_elementor_template('testimonial-three.php');
		// include rt_get_elementor_template('testimonial-four.php');
		// include rt_get_elementor_template('testimonial-five.php');
		// include rt_get_elementor_template('testimonial-six.php');
	}
}
