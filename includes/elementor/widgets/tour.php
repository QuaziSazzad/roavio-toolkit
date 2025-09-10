<?php

namespace RoavioToolkit\ElementorAddon\Widgets;

use Elementor\Widget_Base;

class Tour extends Widget_Base
{
	public function get_name()
	{
		return 'roavio-tour';
	}

	public function get_title()
	{
		return esc_html__('Tour', 'roavio-toolkit');
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
		return ['roavio', 'toolkit', 'webtend', 'section', 'tour'];
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
				]
			]
		);

		$this->add_control(
			'post_type',
			[
				'label'       => esc_html__('Post Type', 'travhub-core'),
				'type'        => \Elementor\Controls_Manager::SELECT,
				'label_block' => false,
				'options'     => [
					'cpt'   => esc_html__('Tour Type', 'travhub-core'),
					'elementor-field'   => esc_html__('With Elementor', 'travhub-core'),
				],
				'default'     => 'cpt',

			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('tour-option.php');


		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .section-title h2, {{WRAPPER}} .content h4 a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_eight', 'layout_nine', 'layout_ten', 'layout_twelve']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title .sub-title, {{WRAPPER}} .section-title span', ['layout_one', 'layout_two', 'layout_four', 'layout_eight', 'layout_nine', 'layout_ten', 'layout_twelve']);
		roavio_elementor_style_options($this, 'Section Description Text', '{{WRAPPER}} .section-title p, {{WRAPPER}} .services-content-three p, {{WRAPPER}} .why-choose-left-content p', ['layout_one', 'layout_four', 'layout_five', 'layout_nine', 'layout_twelve']);

		roavio_elementor_style_options($this, 'Service Title', '{{WRAPPER}} .title a,{{WRAPPER}} .service-item .content .title a,{{WRAPPER}} .accordion-item .title, {{WRAPPER}} .content h5 a,{{WRAPPER}} .style-three h4 a,{{WRAPPER}} .top-part h4 a, {{WRAPPER}} .service-item-five h4 a,{{WRAPPER}} .service-two-item h6 a, {{WRAPPER}} .content h4', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_seven', 'layout_eight', 'layout_nine', 'layout_ten', 'layout_eleven', 'layout_twelve']);

		roavio_elementor_style_options($this, 'Service Description', '{{WRAPPER}} .feature-item .content p,{{WRAPPER}} .service-item .content p, {{WRAPPER}} .content p, {{WRAPPER}} .style-three p,{{WRAPPER}} .content .bottom-part p,{{WRAPPER}} .service-item-five p,{{WRAPPER}} .service-two-item p', ['layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_seven', 'layout_eight', 'layout_nine', 'layout_eleven', 'layout_twelve']);
		roavio_elementor_style_options($this, 'Service Read More', '{{WRAPPER}} .service-item .content .read-more, {{WRAPPER}} .read-more', ['layout_two', 'layout_four']);
		roavio_elementor_style_options($this, 'Service Icon', '{{WRAPPER}} .service-item .content .title a i, {{WRAPPER}} .iconic-box .icon i,{{WRAPPER}} .top-part .icon i,{{WRAPPER}} .icon i', ['layout_two', 'layout_eight', 'layout_nine', 'layout_ten', 'layout_eleven', 'layout_twelve']);
		roavio_elementor_style_options($this, 'Step', '{{WRAPPER}} .step', ['layout_three']);
		roavio_elementor_style_options($this, 'Read More', '{{WRAPPER}} .read-more', ['layout_five', 'layout_eight']);

		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__('Button Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout_one', 'layout_six', 'layout_nine'],
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
					'{{WRAPPER}} .theme-btn' => 'color: {{VALUE}} !important;',
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
					'{{WRAPPER}} .theme-btn, a.theme-btn' => 'background-color: {{VALUE}};',
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
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .theme-btn:hover, a.theme-btn:hover' => 'background-color: {{VALUE}};',
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
		if ($settings['post_type'] == 'cpt') {
			$args  = array(
				'post_type'           => 'to_book',
				'post_status'         => 'publish',
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => $settings['post_count']['size'],
			);

			$args['orderby'] = $settings['orderby'];
			$args['order']   = $settings['order'];
			if (!empty($settings['exclude_cat'])) {
				$args['category__not_in'] = $settings['exclude_cat'];
			}


			if (!empty($settings['select_cat'])) {
				$args['tax_query'][] = array(
					'taxonomy' => 'category',
					'field'    => 'id',
					'terms'    => array_values($settings['select_cat'])
				);
			}

			$posts_query = new \WP_Query($args);
		}
		include rt_get_elementor_template('tour-one.php');
	}
}
