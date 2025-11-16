<?php

namespace RoavioToolkit\ElementorAddon;

defined('ABSPATH') || exit;

class Roavio_Elementor_Addon
{

	protected static $instance = null;

	public static function instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct()
	{
		add_action('elementor/theme/register_locations', [$this, 'register_locations']);
		add_action('elementor/elements/categories_registered', [$this, 'init_categories']);
		add_action('elementor/editor/after_enqueue_styles', [$this, 'enqueue_admin_css']);
		add_action('elementor/widgets/register', [$this, 'init_widgets']);

		add_action('elementor/frontend/after_enqueue_scripts', function () {
			wp_deregister_style('e-animations');
			wp_dequeue_style('e-animations');
		}, 20);

		$this->include_templates();
		$this->include_files();
	}

	public function register_locations($manager)
	{
		$manager->register_all_core_location();
	}

	public function init_categories($elements_manager)
	{
		$elements_manager->add_category(
			'roavio_elements',
			[
				'title' => esc_html__('Roavio Elements', 'roavio-toolkit'),
				'icon'  => 'fa fa-smile-o',
			]
		);
	}

	public function enqueue_admin_css()
	{
		wp_enqueue_style('roavio-elementor-editor', RT_THEME_ASSETS . '/css/elementor-editor.css', [], '1.0');
	}

	public function init_widgets($widgets_manager)
	{
		include_once RT_ELEMENTOR . '/widgets/header.php';
		include_once RT_ELEMENTOR . '/widgets/page-banner.php';
		include_once RT_ELEMENTOR . '/widgets/slider.php';
		include_once RT_ELEMENTOR . '/widgets/funfact.php';
		include_once RT_ELEMENTOR . '/widgets/about.php';
		include_once RT_ELEMENTOR . '/widgets/gallery.php';
		include_once RT_ELEMENTOR . '/widgets/benefit.php';
		include_once RT_ELEMENTOR . '/widgets/infos.php';
		include_once RT_ELEMENTOR . '/widgets/why-choose-us.php';
		include_once RT_ELEMENTOR . '/widgets/team.php';
		include_once RT_ELEMENTOR . '/widgets/team_details.php';
		include_once RT_ELEMENTOR . '/widgets/testimonial.php';
		include_once RT_ELEMENTOR . '/widgets/call-to-action.php';
		include_once RT_ELEMENTOR . '/widgets/faq.php';
		include_once RT_ELEMENTOR . '/widgets/recent-post.php';
		include_once RT_ELEMENTOR . '/widgets/newsletter.php';
		include_once RT_ELEMENTOR . '/widgets/search-form.php';
		include_once RT_ELEMENTOR . '/widgets/video.php';
		include_once RT_ELEMENTOR . '/widgets/sliding-text.php';
		include_once RT_ELEMENTOR . '/widgets/sponsors.php';
		include_once RT_ELEMENTOR . '/widgets/destination.php';
		include_once RT_ELEMENTOR . '/widgets/tour.php';
		include_once RT_ELEMENTOR . '/widgets/custom-tour.php';
		include_once RT_ELEMENTOR . '/widgets/tour-details.php';
		include_once RT_ELEMENTOR . '/widgets/contact.php';
		include_once RT_ELEMENTOR . '/widgets/custom-sidebar.php';
		include_once RT_ELEMENTOR . '/widgets/features.php';
		include_once RT_ELEMENTOR . '/widgets/wishlist.php';
		include_once RT_ELEMENTOR . '/widgets/footer-contact.php';
		include_once RT_ELEMENTOR . '/widgets/footer-about.php';
		include_once RT_ELEMENTOR . '/widgets/footer-nav.php';
		include_once RT_ELEMENTOR . '/widgets/footer-top.php';
		include_once RT_ELEMENTOR . '/widgets/footer-newsletter.php';
		include_once RT_ELEMENTOR . '/widgets/footer-three.php';
		include_once RT_ELEMENTOR . '/widgets/copyright.php';

		$widgets_manager->register(new Widgets\Header());
		$widgets_manager->register(new Widgets\Slider());
		$widgets_manager->register(new Widgets\Page_Banner());
		$widgets_manager->register(new Widgets\FunFact());
		$widgets_manager->register(new Widgets\About());
		$widgets_manager->register(new Widgets\Gallery());
		$widgets_manager->register(new Widgets\Benefit());
		$widgets_manager->register(new Widgets\Infos());
		$widgets_manager->register(new Widgets\Why_Choose_Us());
		$widgets_manager->register(new Widgets\Team());
		$widgets_manager->register(new Widgets\TeamDetails());
		$widgets_manager->register(new Widgets\Testimonial());
		$widgets_manager->register(new Widgets\Faq());
		$widgets_manager->register(new Widgets\Tour_Details());
		$widgets_manager->register(new Widgets\Custom_Sidebar());
		$widgets_manager->register(new Widgets\Features());
		$widgets_manager->register(new Widgets\Wishlist());
		$widgets_manager->register(new Widgets\Recent_Post());
		$widgets_manager->register(new Widgets\Video());
		$widgets_manager->register(new Widgets\Sliding_Text());
		$widgets_manager->register(new Widgets\Sponsors());
		$widgets_manager->register(new Widgets\Destination());
		$widgets_manager->register(new Widgets\Tour());
		$widgets_manager->register(new Widgets\Custom_Tour());
		$widgets_manager->register(new Widgets\Call_To_Action());
		$widgets_manager->register(new Widgets\Newsletter());
		$widgets_manager->register(new Widgets\Search_Form());
		$widgets_manager->register(new Widgets\Contact());
		$widgets_manager->register(new Widgets\Footer_Contact());
		$widgets_manager->register(new Widgets\Footer_Nav());
		$widgets_manager->register(new Widgets\Footer_Top());
		$widgets_manager->register(new Widgets\Footer_About());
		$widgets_manager->register(new Widgets\Footer_Newsletter());
		$widgets_manager->register(new Widgets\Footer_Three());
		$widgets_manager->register(new Widgets\Copyright());
	}

	public function include_templates()
	{
		include_once RT_ELEMENTOR . '/templates/class-portfolio.php';
		include_once RT_ELEMENTOR . '/templates/class-posts.php';
	}

	public function include_files()
	{
		include_once RT_ELEMENTOR . '/traits/carousel-helper.php';
		include_once RT_ELEMENTOR . '/helper/class-icons-manager.php';
		include_once RT_ELEMENTOR . '/helper/class-extender.php';
	}
}

Roavio_Elementor_Addon::instance();
