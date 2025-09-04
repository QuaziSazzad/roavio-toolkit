<?php

namespace RoavioToolkit\DemoConfig;

defined('ABSPATH') || exit;

class Roavio_Demo_Config
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
		add_filter('ocdi/plugin_page_setup', [$this, 'plugin_page_setup']);
		add_filter('ocdi/plugin_intro_text', [$this, 'plugin_intro_text']);
		add_filter('ocdi/import_files', [$this, 'import_files']);
		add_action('ocdi/before_widgets_import', [$this, 'before_widgets_import']);
		add_filter('ocdi/after_import', [$this, 'after_import_demo']);
		//add_filter('ocdi/register_plugins', [$this, 'register_plugins']);
	}

	public function plugin_page_setup($default_settings)
	{
		$default_settings['parent_slug'] = 'themes.php';
		$default_settings['page_title']  = esc_html__('Roavio Demo Import', 'roavio-toolkit');
		$default_settings['menu_title']  = esc_html__('Import Demo Data', 'roavio-toolkit');
		$default_settings['capability']  = 'import';
		$default_settings['menu_slug']   = 'roavio_demo_import';

		return $default_settings;
	}

	public function plugin_intro_text()
	{
		ob_start();
?>
		<div class="ocdi__intro-text">
			<p>
				<?php esc_html_e('Import any of the starter sites below. Using this import feature is recommended for fresh installs.', 'roavio-toolkit') ?>
			</p>
			<p>
				<?php echo sprintf(
					esc_html__('Please check the %1$s page to ensure your server meets all requirements for a successful import.', 'roavio-toolkit'),
					'<a href="' . esc_url_raw(admin_url('admin.php?page=roavio_server_status')) . '">' . esc_html__('System Status', 'roavio-toolkit') . '</a>',
				); ?>
			</p>
		</div>
<?php
		return ob_get_clean();
	}

	/**
	 * Import Files
	 */
	public function import_files()
	{
		$demos_array = [];
		$demos       = $this->demo_files();

		foreach ($demos as $value) {
			$demos_array[$value['id']] = [
				'import_file_name'             => $value['name'],
				'categories'                   => ['Demos'],
				'local_import_file'            => RT_DEMO_PATH . '/demos/demo/content.xml',
				'local_import_widget_file'     => RT_DEMO_PATH . '/demos/general/widgets.wie',
				'local_import_customizer_file' => RT_DEMO_PATH . '/demos/demo/customizer.dat',
				'import_preview_image_url'     => RT_URL . 'includes/demo-config/demos/screenshots/' . $value['file'] . '.jpg',
				'preview_url'                  => $value['preview'],
			];
		}

		return $demos_array;
	}

	public function before_widgets_import($selected_import)
	{
		update_option('sidebars_widgets', array('wp_inactive_widgets' => array()));
	}

	public function after_import_demo($selected_import)
	{
		if ('Pages' !== $selected_import['import_file_name']) {
			$kit_name       = $selected_import['import_file_name'] . ' Kit';
			$kit_page_array = get_posts([
				'title'     => $kit_name,
				'post_type' => 'elementor_library',
			]);
			$kit_page_id    = $kit_page_array[0];
			$kit_id         = $kit_page_id->ID;
			update_option('elementor_active_kit', $kit_id);

			$main_menu   = get_term_by('name', 'Primary Menu', 'nav_menu');
			//$mobile_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

			set_theme_mod(
				'nav_menu_locations',
				[
					'primary_menu' => $main_menu->term_id,
				]
			);

			if ('IT Solutions' === $selected_import['import_file_name']) {
				$front_page_name  = 'IT Solutions';
			} elseif ('Software Company' === $selected_import['import_file_name']) {
				$front_page_name  = 'Software Company';
			} elseif ('Cyber Security' === $selected_import['import_file_name']) {
				$front_page_name  = 'Cyber Security';
			} elseif ('AI Software' === $selected_import['import_file_name']) {
				$front_page_name  = 'AI Software';
			} elseif ('Web Development' === $selected_import['import_file_name']) {
				$front_page_name  = 'Web Development';
			} elseif ('IT Services' === $selected_import['import_file_name']) {
				$front_page_name  = 'IT Services';
			}

			$front_page_array = get_posts([
				'title'     => $front_page_name,
				'post_type' => 'page',
			]);

			$front_page       = $front_page_array[0];
			$front_page_id    = $front_page->ID;

			update_option('show_on_front', 'page');
			update_option('page_on_front', $front_page_id);

			$blog_page = get_posts([
				'title'     => 'Blog',
				'post_type' => 'page',
			]);

			if (isset($blog_page)) {
				update_option('page_for_posts', $blog_page);
			}
		}

		// Check if a kit already exists
		$existing_kits = new \WP_Query([
			'post_type'      => 'elementor_library',
			'meta_key'       => '_elementor_template_type',
			'meta_value'     => 'kit',
			'posts_per_page' => 1,
		]);

		if ($existing_kits->have_posts()) {
			$kit_id = $existing_kits->posts[0]->ID;
		} else {
			// Create a new kit
			$kit_id = wp_insert_post([
				'post_title'  => 'Default Kit',
				'post_type'   => 'elementor_library',
				'post_status' => 'publish',
				'meta_input'  => [
					'_elementor_template_type' => 'kit',
				],
			]);
		}

		if (! $kit_id || is_wp_error($kit_id)) {
			return;
		}

		// Activate the kit
		update_option('elementor_active_kit', $kit_id);

		update_option('elementor_experiment-e_font_icon_svg', 'inactive');

		// 3. Define and apply your custom settings
		$elementor_settings = [
			'container_padding' => [
				'top'    => '0',
				'right'  => '0',
				'bottom' => '0',
				'left'   => '0'
			],
			'space_between_widgets' => [
				'column' => '0',
				'row'    => '0'
			],
			'container_width' => [
				'unit' => 'px',
				'size' => '1350',
			],
		];

		// Apply container settings
		update_option('elementor_container_padding', $elementor_settings['container_padding']);
		update_option('elementor_space_between_widgets', $elementor_settings['space_between_widgets']['column']);
		update_option('elementor_space_between_widgets_rows', $elementor_settings['space_between_widgets']['row']);
		update_option('elementor_container_width', $elementor_settings['container_width']);

		// Store all settings for future reference
		update_option('active_kit_settings', $elementor_settings);

		// Clear cache
		\Elementor\Plugin::$instance->files_manager->clear_cache();

		update_option('elementor_disable_color_schemes', 'yes');
		update_option('elementor_disable_typography_schemes', 'yes');
		update_option('elementor_experiment-e_font_icon_svg', 'inactive');
		update_option('elementor_experiment-container', 'active');
		update_option('elementor_experiment-nested-elements', 'active');
		update_option('elementor_experiment-additional_custom_breakpoints', 'active');

		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure('/%postname%/');
		flush_rewrite_rules();
	}



	public function register_plugins($plugins)
	{
		$theme_plugins = [
			[
				'name'        => esc_html__('Roavio Toolkit', 'roavio-toolkit'),
				'slug'        => 'roavio-toolkit',
				'source'      => get_template_directory() . '/inc/plugins/roavio-toolkit.zip',
				'required'    => true,
				'version'     => '1.0.0',
				'preselected' => true,
			],
			[
				'name'        => esc_html__('Elementor Website Builder', 'roavio-toolkit'),
				'slug'        => 'elementor',
				'required'    => true,
				'preselected' => true,
			]
		];

		return array_merge($plugins, $theme_plugins);
	}

	public function demo_files()
	{
		return [
			["id" => 1, "name" => 'IT Solutions', "file" => "it-solutions", "preview" => "https://wp.webtend.net/roavio/"],
			["id" => 2, "name" => 'Software Company', "file" => "software-company", "preview" => "https://wp.webtend.net/roavio/software-company/"],
			["id" => 3, "name" => 'Cyber Security', "file" => "cyber-security", "preview" => "https://wp.webtend.net/roavio/cyber-security/"],
			["id" => 4, "name" => 'AI Software', "file" => "ai-software", "preview" => "https://wp.webtend.net/roavio/ai-software/"],
			["id" => 5, "name" => 'Web Development', "file" => "web-development", "preview" => "https://wp.webtend.net/roavio/web-development/"],
			["id" => 6, "name" => 'IT Services', "file" => "it-services", "preview" => "https://wp.webtend.net/roavio/it-services/"],
		];
	}
}

Roavio_Demo_Config::instance();

// For Elementor's container element via kit settings
function roavio_update_elementor_container_defaults()
{
	// Get the active kit
	$kit_id = get_option('elementor_active_kit');

	if (!$kit_id) {
		return;
	}

	// Get current kit settings
	$kit_settings = get_post_meta($kit_id, '_elementor_page_settings', true);

	// If no settings exist yet, create an array
	if (!$kit_settings) {
		$kit_settings = [];
	}

	// Update container defaults
	$kit_settings['container_padding'] = [
		'unit' => 'px',
		'top' => '0',
		'right' => '0',
		'bottom' => '0',
		'left' => '0',
		'isLinked' => false
	];

	$kit_settings['space_between_widgets'] = '0';
	$kit_settings['space_between_widgets_rows'] = '0';

	$kit_settings['container_width'] = [
		'unit' => 'px',
		'size' => '1320',
	];

	// Save updated settings
	update_post_meta($kit_id, '_elementor_page_settings', $kit_settings);
}

roavio_update_elementor_container_defaults();
