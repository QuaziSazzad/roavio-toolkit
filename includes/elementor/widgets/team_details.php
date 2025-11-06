<?php

namespace RoavioToolkit\ElementorAddon\Widgets;


use Elementor\Widget_Base;

class TeamDetails extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-team-details';
	}

	public function get_title()
	{
		return esc_html__('Team Details', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'team', 'details'];
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
				]
			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('team-details-one-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Name', '{{WRAPPER}} .details-info h3', ['layout_one']);
		roavio_elementor_style_options($this, 'Designation', '{{WRAPPER}} .details-info span', ['layout_one']);
		roavio_elementor_style_options($this, 'Description', '{{WRAPPER}} .team-details-content p', ['layout_one']);
		roavio_elementor_style_options($this, 'Social Icon', '{{WRAPPER}} .social-icon i', ['layout_one']);
		roavio_elementor_style_options($this, 'Skill Title', '{{WRAPPER}} .progress-wrap .pro-items .pro-head .title', ['layout_one']);

		roavio_elementor_style_options($this, 'Education Section Title', '{{WRAPPER}} .team-single-history h3', ['layout_one']);
		roavio_elementor_style_options($this, 'Education Title', '{{WRAPPER}} .team-single-history h5', ['layout_one']);
		roavio_elementor_style_options($this, 'Education Description', '{{WRAPPER}} .team-single-history p', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('team-details-one.php');
	}
}
