<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;

class Video extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-video';
	}

	public function get_title()
	{
		return esc_html__('Video', 'roavio-toolkit');
	}

	public function get_icon()
	{
		return 'eicon-video-playlist webtend-logo';
	}

	public function get_categories()
	{
		return ['roavio_elements'];
	}

	public function get_keywords()
	{
		return ['roavio', 'toolkit', 'webtend', 'video'];
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

		include rt_get_elementor_option('video-one-option.php');
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include rt_get_elementor_template('video-one.php');
	}
}
