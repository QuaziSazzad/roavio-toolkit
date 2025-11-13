<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Controls_Manager;

use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;


class Header extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-header';
	}

	public function get_title()
	{
		return esc_html__('Header', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-header webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'header'];
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
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('header-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Top bar Text', '{{WRAPPER}} .header-top-wrapper p,{{WRAPPER}} .header-top-wrapper.style-3 p', ['layout_one', 'layout_three']);
		roavio_elementor_style_options($this, 'Top Contact Text', '{{WRAPPER}} .header-list li a', ['layout_one', 'layout_three']);
		roavio_elementor_style_options($this, 'Top Contact Icon', '{{WRAPPER}} .header-list li i', ['layout_one', 'layout_three']);


		roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-icon i', ['layout_three']);

		roavio_elementor_style_options($this, 'Nav', '{{WRAPPER}} .main-menu ul li a', ['layout_one', 'layout_two', 'layout_three']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_three'],
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
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .theme-btn' => 'background-color: {{VALUE}};',
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
				'name'     => 'button_one_typography',
				'selector' => '{{WRAPPER}} .theme-btn',
				'label' => esc_html__(' Typography', 'roavio-addon'),
			]
		);


		$this->end_controls_section();
	}

	protected function get_menus_list()
	{
		$nav_menus = [];
		$terms     = get_terms('nav_menu');

		foreach ($terms as $term) {
			$nav_menus[$term->name] = $term->name;
		}

		return $nav_menus;
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('header-one.php');
		include rt_get_elementor_template('header-two.php');
		include rt_get_elementor_template('header-three.php');
		include rt_get_elementor_template('header-four.php');
	}
}
