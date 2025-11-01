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
					'layout_five' => esc_html__('Layout Five', 'roavio-toolkit'),
					'layout_six' => esc_html__('Layout Six', 'roavio-toolkit'),
					'layout_seven' => esc_html__('Layout Seven', 'roavio-toolkit'),
				]
			]
		);

		$this->add_control(
			'post_type',
			[
				'label'       => esc_html__('Post Type', 'roavio-toolkit'),
				'type'        => \Elementor\Controls_Manager::SELECT,
				'label_block' => false,
				'options'     => [
					'cpt'   => esc_html__('Tour Type', 'roavio-toolkit'),
					'elementor-field'   => esc_html__('With Elementor', 'roavio-toolkit'),
				],
				'default'     => 'cpt',
				'condition'   => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three', 'layout_four'],
				],

			]
		);

		$this->end_controls_section();

		include rt_get_elementor_option('tour-option.php');

		$this->start_controls_section(
			'layout_seven_slider_content',
			[
				'label' => esc_html__('Slider Content', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'layout_type' => 'layout_seven',
				]
			]
		);

		$this->add_control(
			'layout_seven_enable_slider',
			[
				'label' => esc_html__('Enable Slider', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Yes', 'roavio-toolkit'),
				'label_off' => esc_html__('No', 'roavio-toolkit'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'layout_seven_tab_title',
			[
				'label' => esc_html__('Title', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Family Tours', 'roavio-toolkit'),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'url',
			[
				'label' => esc_html__('URL', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'roavio-toolkit'),
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
			]
		);

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__('Image', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [],
			]
		);


		$this->add_control(
			'layout_seven_tabs',
			[
				'label' => esc_html__('Tabs', 'roavio-toolkit'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'layout_seven_tab_title' => esc_html__('Family Tours', 'roavio-toolkit'),
						'layout_seven_tab_id' => 'technical',
					],
					[
						'layout_seven_tab_title' => esc_html__('Couple Tours', 'roavio-toolkit'),
						'layout_seven_tab_id' => 'work',
					],
					[
						'layout_seven_tab_title' => esc_html__('Group Tours', 'roavio-toolkit'),
						'layout_seven_tab_id' => 'ambition',
					],
					[
						'layout_seven_tab_title' => esc_html__('Adventure Tours', 'roavio-toolkit'),
						'layout_seven_tab_id' => 'skill',
					],
					[
						'layout_seven_tab_title' => esc_html__('Safari & Wildlife', 'roavio-toolkit'),
						'layout_seven_tab_id' => 'safari',
					],
				],
				'title_field' => '{{{ layout_seven_tab_title }}}',
				'condition' => [
					'layout_seven_enable_slider' => 'yes',
				]
			]
		);


		$this->end_controls_section();

		//Content style
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__('Content Style', 'roavio-toolkit'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		roavio_elementor_style_options($this, 'Section Title', '{{WRAPPER}} .sec-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six', 'layout_seven', 'layout_eight', 'layout_nine', 'layout_ten']);
		roavio_elementor_style_options($this, 'Section Sub Title', '{{WRAPPER}} .sec-sub-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);

		roavio_elementor_style_options($this, 'Tour Title', '{{WRAPPER}} .tour-place-content h3 a, {{WRAPPER}} h4.tour-title a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Tour Features', '{{WRAPPER}} .tour-list li', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five', 'layout_six']);
		roavio_elementor_style_options($this, 'Excerpt', '{{WRAPPER}} .tour-place-content.style-2 p', ['layout_three']);

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
		include rt_get_elementor_template('tour-two.php');
		include rt_get_elementor_template('tour-three.php');
		include rt_get_elementor_template('tour-four.php');
		include rt_get_elementor_template('tour-five.php');
		include rt_get_elementor_template('tour-six.php');
		include rt_get_elementor_template('tour-seven.php');
	}
}
