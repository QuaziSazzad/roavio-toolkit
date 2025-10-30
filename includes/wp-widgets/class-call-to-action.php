<?php

namespace RoavioToolkit\WpWidgets;

use WP_Widget;

defined('ABSPATH') || exit;

/**
 * Roavio Call to Action Widget
 * 
 * A custom widget to display a call-to-action section with background image,
 * subtitle, heading, and button link.
 * 
 * @package RoavioToolkit
 * @since 1.0.0
 */
class Roavio_CTA extends WP_Widget
{

	/**
	 * Constructor
	 * 
	 * Sets up the widget name, description, and options.
	 */
	public function __construct()
	{
		$widget_ops = array(
			'classname'   => 'roavio-wp-cta single-sideber-widget',
			'description' => esc_html__('A custom call-to-action widget with background image, subtitle, heading and button', 'roavio-toolkit')
		);

		parent::__construct('roavio_cta_widget', esc_html__('Roavio Call to Action', 'roavio-toolkit'), $widget_ops);

		// Enqueue media scripts for widget admin
		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
	}

	/**
	 * Enqueue admin scripts
	 * 
	 * Loads WordPress media uploader scripts on widget and customizer pages.
	 * 
	 * @param string $hook Current admin page hook
	 */
	public function enqueue_admin_scripts($hook)
	{
		if ($hook == 'widgets.php' || $hook == 'customize.php') {
			wp_enqueue_media();
			wp_enqueue_script('jquery');
		}
	}

	/**
	 * Front-end display of widget
	 * 
	 * @param array $args     Widget arguments
	 * @param array $instance Saved values from database
	 */
	public function widget($args, $instance)
	{
		// Get widget settings with defaults
		$subtitle = ! empty($instance['subtitle']) ? $instance['subtitle'] : __('Explore The World', 'roavio-toolkit');
		$heading = ! empty($instance['heading']) ? $instance['heading'] : __('Best Tourist Place', 'roavio-toolkit');
		$button_text = ! empty($instance['button_text']) ? $instance['button_text'] : __('Explore Tours', 'roavio-toolkit');
		$button_url = ! empty($instance['button_url']) ? $instance['button_url'] : '#';
		$background_image = ! empty($instance['background_image']) ? $instance['background_image'] : '';

		// Output widget wrapper
		echo $args['before_widget'];
?>
		<div class="tour-bg-image">
			<?php if ($background_image) : ?>
				<img src="<?php echo esc_url($background_image); ?>" alt="<?php echo esc_attr($heading); ?>">
			<?php endif; ?>
			<div class="tour-bg-content">
				<?php if (!empty($subtitle)) : ?>
					<span><?php echo esc_html($subtitle); ?></span>
				<?php endif; ?>
				<?php if (!empty($heading)) : ?>
					<h3>
						<a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($heading); ?></a>
					</h3>
				<?php endif; ?>
				<?php if (!empty($button_text)) : ?>
					<a href="<?php echo esc_url($button_url); ?>" class="theme-btn"><?php echo esc_html($button_text); ?></a>
				<?php endif; ?>
			</div>
		</div>
	<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form
	 * 
	 * @param array $instance Previously saved values from database
	 */
	public function form($instance)
	{
		// Set default values
		$subtitle = ! empty($instance['subtitle']) ? $instance['subtitle'] : __('Explore The World', 'roavio-toolkit');
		$heading = ! empty($instance['heading']) ? $instance['heading'] : __('Best Tourist Place', 'roavio-toolkit');
		$button_text = ! empty($instance['button_text']) ? $instance['button_text'] : __('Explore Tours', 'roavio-toolkit');
		$button_url = ! empty($instance['button_url']) ? $instance['button_url'] : '';
		$background_image = ! empty($instance['background_image']) ? $instance['background_image'] : '';
	?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('subtitle')); ?>"><?php esc_html_e('Subtitle:', 'roavio-toolkit'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('subtitle')); ?>" name="<?php echo esc_attr($this->get_field_name('subtitle')); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('heading')); ?>"><?php esc_html_e('Heading:', 'roavio-toolkit'); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('heading')); ?>" name="<?php echo esc_attr($this->get_field_name('heading')); ?>" rows="3"><?php echo esc_textarea($heading); ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('button_text')); ?>"><?php esc_html_e('Button Text:', 'roavio-toolkit'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('button_text')); ?>" name="<?php echo esc_attr($this->get_field_name('button_text')); ?>" type="text" value="<?php echo esc_attr($button_text); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('button_url')); ?>"><?php esc_html_e('Button URL:', 'roavio-toolkit'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('button_url')); ?>" name="<?php echo esc_attr($this->get_field_name('button_url')); ?>" type="url" value="<?php echo esc_attr($button_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('background_image')); ?>"><?php esc_html_e('Background Image URL:', 'roavio-toolkit'); ?></label>
			<input class="widefat background-image-url" id="<?php echo esc_attr($this->get_field_id('background_image')); ?>" name="<?php echo esc_attr($this->get_field_name('background_image')); ?>" type="url" value="<?php echo esc_attr($background_image); ?>">
			<input type="button" class="button upload-image-button" value="<?php esc_attr_e('Upload Image', 'roavio-toolkit'); ?>" />
			<?php if ($background_image) : ?>
				<br><img src="<?php echo esc_url($background_image); ?>" style="max-width: 100%; height: auto; margin-top: 10px; border-radius: 4px;" />
			<?php endif; ?>
			<br><small><?php esc_html_e('Enter the full URL to your background image or click "Upload Image"', 'roavio-toolkit'); ?></small>
		</p>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				function initImageUploader() {
					$('.upload-image-button').off('click').on('click', function(e) {
						e.preventDefault();
						var button = $(this);
						var input = button.prev('.background-image-url');

						var custom_uploader = wp.media({
							title: '<?php esc_html_e('Select Background Image', 'roavio-toolkit'); ?>',
							button: {
								text: '<?php esc_html_e('Use this image', 'roavio-toolkit'); ?>'
							},
							multiple: false,
							library: {
								type: 'image'
							}
						});

						custom_uploader.on('select', function() {
							var attachment = custom_uploader.state().get('selection').first().toJSON();
							input.val(attachment.url);
							input.trigger('change');
						});

						custom_uploader.open();
					});
				}

				// Initialize on page load
				initImageUploader();

				// Re-initialize when widget is saved (for widget customizer)
				$(document).on('widget-updated widget-added', function() {
					setTimeout(initImageUploader, 100);
				});
			});
		</script>
<?php
	}

	/**
	 * Sanitize widget form values as they are saved
	 * 
	 * @param array $new_instance Values just sent to be saved
	 * @param array $old_instance Previously saved values from database
	 * @return array Updated safe values to be saved
	 */
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['subtitle'] = (!empty($new_instance['subtitle'])) ? sanitize_text_field($new_instance['subtitle']) : '';
		$instance['heading'] = (!empty($new_instance['heading'])) ? sanitize_text_field($new_instance['heading']) : '';
		$instance['button_text'] = (!empty($new_instance['button_text'])) ? sanitize_text_field($new_instance['button_text']) : '';
		$instance['button_url'] = (!empty($new_instance['button_url'])) ? esc_url_raw($new_instance['button_url']) : '';
		$instance['background_image'] = (!empty($new_instance['background_image'])) ? esc_url_raw($new_instance['background_image']) : '';

		return $instance;
	}
}
