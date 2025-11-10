<?php

namespace RoavioToolkit\ElementorAddon\Helper;

defined('ABSPATH') || exit;

class Roavio_Icons_Manager
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
		add_filter('elementor/icons_manager/additional_tabs', [$this, 'add_icons_tab']);
	}

	public function add_icons_tab($tabs)
	{
		$icon_css = RT_VENDOR . '/flaticon/flaticon.css';

		$tabs['roavio-flaticon'] = [
			'name'          => 'roavio-flaticon',
			'label'         => esc_html__('Roavio Icons', 'roavio-toolkit'),
			'url'           => $icon_css,
			'prefix'        => '',
			'displayPrefix' => '',
			'labelIcon'     => 'far fa-folder-open',
			'ver'           => '1.0',
			'icons'         => $this->icon_list(),
			'native'        => true,
		];

		return $tabs;
	}

	public function icon_list()
	{
		return [
			"flaticon-travel-agency",
			"flaticon-travel",
			"flaticon-traveling",
			"flaticon-roadmap",
			"flaticon-mouse",
			"flaticon-promotion",
			"flaticon-tourist",
			"flaticon-insurance",
			"flaticon-traveling-1",
			"flaticon-hot-air-balloon",
			"flaticon-passport",
			"flaticon-tent",
			"flaticon-costumer",
			"flaticon-suitcase",
			"flaticon-excursion",
			"flaticon-quote",
			"flaticon-left-quote",
			"flaticon-travel-agency-1",
			"flaticon-price-tag",
			"flaticon-booking",
			"flaticon-destination",
			"flaticon-man",
			"flaticon-holiday-trip",
			"flaticon-tourist-1",
			"flaticon-travel-insurance",
			"flaticon-journey",
			"flaticon-flight-plan",
			"flaticon-tourist-2",
			"flaticon-family",
			"flaticon-wedding",
			"flaticon-win",
			"flaticon-hiking",
			"flaticon-safari",
			"flaticon-airplane",
			"flaticon-cutlery",
			"flaticon-swimming-pool",
			"flaticon-stationary-bike",
			"flaticon-washing-machine",
			"flaticon-wifi",
			"flaticon-air-conditioner",
			"flaticon-parking",
			"flaticon-television",
			"flaticon-bathtub",
			"flaticon-bed",
			"flaticon-coffee-cup",
			"flaticon-towel",
			"flaticon-hanger",
			"flaticon-iron",
			"flaticon-hair-dryer",
			"flaticon-safe-box",
			"flaticon-minibar",
			"flaticon-balcony",
			"flaticon-room-service",
			"flaticon-laundry",
			"flaticon-spa",
			"flaticon-massage",
			"flaticon-idea",
			"flaticon-earning",
			"flaticon-meeting",
			"flaticon-financial-advisor",
			"flaticon-brand-identity",
			"flaticon-technology",
			"flaticon-talent-search",
			"flaticon-zigzag",
			"flaticon-smartphone",
			"flaticon-payment-method",
			"flaticon-data",
			"flaticon-technology-1",
			"flaticon-mortgage",
			"flaticon-financial",
			"flaticon-revenue",
			"flaticon-debit-card",
			"flaticon-money-transfer"
		];
	}
}

Roavio_Icons_Manager::instance();
