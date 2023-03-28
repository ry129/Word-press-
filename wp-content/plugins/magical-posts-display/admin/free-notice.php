<?php

/**
 * Magical post display Pro notice 
 */
class mgpFreeNotice
{


	function __construct()
	{

		add_action('admin_notices', [$this, 'admin_free_notice']);
		add_action('init', [$this, 'mgfree_notice_hide_options']);
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site active free verision of magical post display
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_free_notice()
	{
		$mgpnpro_hide_date = get_option('mgpnpro_hide_date');
		if (!empty($mgpnpro_hide_date)) {
			$clickhide = round((time() - strtotime($mgpnpro_hide_date)) / 24 / 60 / 60);
			if ($clickhide < 20) {
				return;
			}
		}

		$mgposte_install_date = get_option('mgposte_install_date');
		if (!empty($mgposte_install_date)) {
			$install_day = round((time() - strtotime($mgposte_install_date)) / 24 / 60 / 60);
			if ($install_day < 2) {
				return;
			}
		}

		global $pagenow;
		if ($pagenow == 'themes.php') {
			return;
		}

		$message_head = esc_html__('Good News!! Magcial Posts Display Pro Version Now only $21 !!', 'magical-posts-display');
		$message_body = esc_html__('By Upgrading to Magical Posts Display Pro you get access to all features and much more!!', 'magical-posts-display');
		$btn_text = esc_html__('Upgrade Pro', 'magical-posts-display');
		$btn_link = esc_url('https://wpthemespace.com/product/magical-posts-display-pro/?add-to-cart=8239');
		$btn2_text = esc_html__('No, Maybe Later', 'magical-posts-display');

		printf('<div style="padding:10px" class="notice notice-warning mgp-pronotice"><strong><span style="font-weight:700;color:#17A15C">%1$s</span></strong><p>%2$s </p><a target="_blank" href="%3$s" class="button button-primary">%4$s </a><a href="#" style="margin-left:10px" class="mghideme">%5$s</a></div>', $message_head, $message_body, $btn_link, $btn_text, $btn2_text);
	}
	public function mgfree_notice_hide_options()
	{
		if (isset($_GET['mgfnotice']) && $_GET['mgfnotice'] == 1) {
			delete_option('mgpnpro5');
			update_option('mgpnpro_hide_date', current_time('mysql'));
		}
		if (isset($_GET['mgrecnot']) && $_GET['mgrecnot'] == 1) {
			update_option('mgmain_hide_tinfo', 1);
		}
	}
}

new mgpFreeNotice();
