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

		roavio_elementor_style_options($this, 'Overview  Title', '{{WRAPPER}} .overview-title', ['layout_one', 'layout_two']);
		roavio_elementor_style_options($this, 'Overview  Description', '{{WRAPPER}} .overview-desc', ['layout_one', 'layout_two']);
		roavio_elementor_style_options($this, 'Exclude/Include Title', '{{WRAPPER}} .in-ex-title', ['layout_one']);
		roavio_elementor_style_options($this, 'Exclude/Include Items', '{{WRAPPER}} .list li', ['layout_one']);
		roavio_elementor_style_options($this, 'Items', '{{WRAPPER}} .list li, {{WRAPPER}} .list-2 li', ['layout_two']);

		roavio_elementor_style_options($this, 'Comment Section Title', '{{WRAPPER}} .comments-title', 'layout_three');
		roavio_elementor_style_options($this, 'Commenter Name', '{{WRAPPER}} .comment-area .content h6 a', 'layout_three');
		roavio_elementor_style_options($this, 'Commenter Date', '{{WRAPPER}} .comment-item .content > span', 'layout_three');

		roavio_elementor_style_options($this, 'Booking from Title', '{{WRAPPER}} #booking_form::before', ['layout_four']);
		roavio_elementor_style_options($this, 'Booking from Label', '{{WRAPPER}} .booking-form-block .booking_form_input_label', ['layout_four']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_four'],
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
					'{{WRAPPER}} .btn' => 'color: {{VALUE}} !important;',
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
					'{{WRAPPER}} .btn, a.btn' => 'background-color: {{VALUE}};',
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
					'{{WRAPPER}} .btn:hover, a.btn:hover' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .btn:hover, a.btn:hover' => 'background-color: {{VALUE}};',
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

		include rt_get_elementor_template('tour-details-one.php');
		include rt_get_elementor_template('tour-details-two.php');
		include rt_get_elementor_template('tour-details-three.php');
		include rt_get_elementor_template('tour-details-four.php');
	}
}
