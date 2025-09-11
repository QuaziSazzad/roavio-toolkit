<?php

namespace RoavioToolkit\Helper;

class Wishlist
{

	private static $instance = null;

	public static function instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function __construct()
	{
		add_action('wp_ajax_roavio_wishlist', array($this, 'wishlist_add'));
		add_action('wp_ajax_nopriv_roavio_wishlist', array($this, 'wishlist_add'));
	}

	function wishlist_add()
	{
		// Set proper content type for JSON response
		header('Content-Type: application/json');

		// Verify nonce for security
		if (!check_ajax_referer('roavio-ajax-security-nonce', 'security', false)) {
			wp_send_json_error(array(
				'message' => esc_html__('Security check failed. Please refresh the page and try again.', 'roavio-toolkit')
			));
		}

		// Validate required parameters
		if (!isset($_POST['status']) || !isset($_POST['post_id'])) {
			wp_send_json_error(array(
				'message' => esc_html__('Missing required parameters.', 'roavio-toolkit')
			));
		}

		$status = sanitize_text_field($_POST['status']);
		$post_id = intval($_POST['post_id']);
		$user_id = get_current_user_id();

		// Validate post ID
		if ($post_id <= 0) {
			wp_send_json_error(array(
				'message' => esc_html__('Invalid post ID.', 'roavio-toolkit')
			));
		}

		// Check if user is logged in
		if (!is_user_logged_in()) {
			wp_send_json_success(array(
				'logged_in' => false,
				'message' => esc_html__('Please log in to add items to your wishlist.', 'roavio-toolkit')
			));
		}

		if ($status == 'add') {
			$wishlist = get_user_meta($user_id, 'roavio_wishlist', true);
			if (is_array($wishlist)) {
				if (!in_array($post_id, $wishlist)) {
					$wishlist[] = $post_id;
					update_user_meta($user_id, 'roavio_wishlist', $wishlist);
				}
			} else {
				$wishlist = array($post_id);
				update_user_meta($user_id, 'roavio_wishlist', $wishlist);
			}

			wp_send_json_success(array(
				'logged_in' => true,
				'add_wishlist' => 'added',
				'status' => 'add',
				'message' => esc_html__('Added to wishlist!', 'roavio-toolkit')
			));
		}

		if ($status == 'remove') {
			$wishlist = get_user_meta($user_id, 'roavio_wishlist', true);

			if (is_array($wishlist)) {
				foreach ($wishlist as $key => $value) {
					if ($post_id == $value) {
						unset($wishlist[$key]);
					}
				}
			}
			update_user_meta($user_id, 'roavio_wishlist', $wishlist);

			wp_send_json_success(array(
				'logged_in' => true,
				'remove_wishlist' => 'removed',
				'status' => 'remove',
				'message' => esc_html__('Removed from wishlist!', 'roavio-toolkit')
			));
		}

		// If we get here, the status was invalid
		wp_send_json_error(array(
			'message' => esc_html__('Invalid action.', 'roavio-toolkit')
		));
	}

	public static function html_icon($post_id)
	{
		$user_id = get_current_user_id();
		$data = get_user_meta($user_id, 'roavio_wishlist', true);
		$check_wishlist = false;
		if (is_array($data)) {
			if (in_array($post_id, $data)) {
				$check_wishlist = true;
			}
		} else {
			if ($post_id == $data) {
				$check_wishlist = true;
			}
		}
		ob_start();
?>
		<a href="javascript:void(0)" data-post_id="<?php echo esc_attr($post_id) ?>" class="tour-listing__card-wishlist roavio-ajax-wishlist <?php echo (!$check_wishlist ? 'add-wishlist' : 'remove-wishlist wishlist-added') ?>">
			<i class="fa-regular fa-heart"></i>
		</a>
	<?php
		return ob_get_clean();
	}

	public static function html_icon_two($post_id)
	{
		$user_id = get_current_user_id();
		$data = get_user_meta($user_id, 'roavio_wishlist', true);
		$check_wishlist = false;
		if (is_array($data)) {
			if (in_array($post_id, $data)) {
				$check_wishlist = true;
			}
		} else {
			if ($post_id == $data) {
				$check_wishlist = true;
			}
		}
		ob_start();
	?>
		<div class="wishlist-icon">
			<a href="javascript:void(0)" data-post_id="<?php echo esc_attr($post_id) ?>" class="tour-listing-three__card-wishlist tour-listing__card-wishlist roavio-ajax-wishlist <?php echo (!$check_wishlist ? 'add-wishlist' : 'remove-wishlist wishlist-added') ?>">
				<span class="fas fa-heart"></span>
			</a>
		</div>
	<?php
		return ob_get_clean();
	}

	public static function html_icon_and_text($post_id)
	{
		$user_id = get_current_user_id();
		$data = get_user_meta($user_id, 'roavio_wishlist', true);
		$check_wishlist = false;
		if (is_array($data)) {
			if (in_array($post_id, $data)) {
				$check_wishlist = true;
			}
		} else {
			if ($post_id == $data) {
				$check_wishlist = true;
			}
		}
		ob_start();
	?>

		<a class="villa-details-two__btns__wishlist roavio-ajax-wishlist <?php echo (!$check_wishlist ? 'add-wishlist' : 'remove-wishlist wishlist-added') ?>" data-post_id="<?php echo esc_attr($post_id) ?>" href="javascript:void(0)">
			<span class="fas fa-heart"></span>
			<?php esc_html_e('Wishlist ', 'roavio-addon'); ?>
		</a>
<?php
		return ob_get_clean();
	}
}

// Initialize the Wishlist class
Wishlist::instance();
