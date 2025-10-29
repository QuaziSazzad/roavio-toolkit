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

class Wishlist extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-wishlist';
	}

	public function get_title()
	{
		return esc_html__('Wishlist', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-post-navigation webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'wishlist'];
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

		include rt_get_elementor_option('wishlist-one-option.php');

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// roavio_elementor_style_options($this, 'Features Title', '{{WRAPPER}} .content h4', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		// roavio_elementor_style_options($this, 'Features Description', '{{WRAPPER}} .content p', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		// roavio_elementor_style_options($this, 'Features Icon', '{{WRAPPER}} .feature-item-three .icon i', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('wishlist-one.php');
	}
}
