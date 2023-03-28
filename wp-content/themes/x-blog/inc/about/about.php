<?php

/**
 * About setup
 *
 * @package xblog
 */

if (!function_exists('xblog_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function xblog_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');
		$xtheme_domain = $theme->get('TextDomain');
		if ($xtheme_domain == 'x-magazine') {
			$theme_slug = $xtheme_domain;
		} else {
			$theme_slug = 'x-blog';
		}



		$config = array(
			// Menu name under Appearance.
			'menu_name'               => sprintf(esc_html__('%s Info', 'x-blog'), $xtheme_name),
			// Page title.
			'page_name'               => sprintf(esc_html__('%s Info', 'x-blog'), $xtheme_name),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'x-blog'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('You are now using the %1$s free version on your website. Big Discount on the Xblog Pro version for Limit time. So Upgrade pro now. Coupon Discount code is ( SPXBLOG35 ) ', 'x-blog'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'x-blog'),
				'recommended_actions' => esc_html__('Recommended Actions', 'x-blog'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'x-blog'),
				'free_pro'  => esc_html__('Free Vs Pro', 'x-blog'),
			),

			// Quick links.
			'quick_links' => array(
				'update_url' => array(
					'text'   => esc_html__('UPGRADE X BLOG PRO', 'x-blog'),
					'url'    => 'https://wpthemespace.com/product/x-blog/?add-to-cart=146',
					'button' => 'danger',
				),
				'xmagazine_url' => array(
					'text'   => esc_html__('UPGRADE X MAGAZINE PRO', 'x-blog'),
					'url'    => 'https://wpthemespace.com/product/x-magazine/',
					'button' => 'danger',
				),
				'documentation_url' => array(
					'text'   => esc_html__('View Documentation', 'x-blog'),
					'url'    => 'http://wpthemespace.com/xblog/doc/',
					'button' => 'primary',
				),
				'show_video' => array(
					'text'   => esc_html__('Show video', 'x-blog'),
					'url'    => 'https://www.youtube.com/watch?v=Cu3eFFQskCs',
					'button' => 'primary',
				),

			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'x-blog'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'x-blog'), esc_html__('One Click Demo Import', 'x-blog')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'x-blog'),
					'button_url'  => 'https://wpthemespace.com/product/' . $theme_slug,
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'x-blog'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'x-blog'),
					'button_text' => esc_html__('Customize', 'x-blog'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'x-blog'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Xblog short video for better understanding', 'x-blog'), esc_html__('One Click Demo Import', 'x-blog')),
					'button_text' => esc_html__('Show video', 'x-blog'),
					'button_url'  => 'https://www.youtube.com/watch?v=Cu3eFFQskCs',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'four' => array(
					'title'       => esc_html__('Theme Documentation', 'x-blog'),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__('Please check our full documentation for detailed information on how to setup and customize the theme.', 'x-blog'),
					'button_text' => esc_html__('View Documentation', 'x-blog'),
					'button_url'  => 'http://wpthemespace.com/xblog/doc/',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'x-blog'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'x-blog'),
					'button_text' => esc_html__('Add Widgets', 'x-blog'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'x-blog'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'x-blog'),
					'button_text' => esc_html__('View Demo', 'x-blog'),
					'button_url'  => 'https://xblog.wpteamx.com/x-demos/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'x-blog'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'x-blog'),
					'button_text' => esc_html__('Contact Support', 'x-blog'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'x-blog'),
				'already_activated_message' => esc_html__('Already activated', 'x-blog'),
				'version_label' => esc_html__('Version: ', 'x-blog'),
				'install_label' => esc_html__('Install and Activate', 'x-blog'),
				'activate_label' => esc_html__('Activate', 'x-blog'),
				'deactivate_label' => esc_html__('Deactivate', 'x-blog'),
				'content'                   => array(
					array(
						'slug' => 'magical-addons-for-elementor',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-products-display',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-blocks'
					),
					array(
						'slug' => 'magical-posts-display'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'easy-share-solution',
						'icon' => 'svg',
					),
					array(
						'slug' => 'wp-edit-password-protected',
						'icon' => 'svg',
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'x-blog'),
				'activate_label' => esc_html__('Activate', 'x-blog'),
				'deactivate_label' => esc_html__('Deactivate', 'x-blog'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Posts Display', 'x-blog'),
						'description' => __('The best part of Magical Addons is that you can design anything without having to touch a single line of code. Magical Addons has a huge collection of premium and highly functional extensions that can be used in an Elementor page builder. This is really a premium plugin that you can get for free.', 'x-blog'),
						'plugin_slug' => 'magical-addons-for-elementor',
						'id' => 'magical-addons-for-elementor'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/x-blog/?add-to-cart=146">' . __('UPGRADE XBLOG PRO', 'x-blog') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'x-blog'),
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'x-blog'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/' . $theme_slug,
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'x-blog'), 'X Blog Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'x-blog'),
						'description' => esc_html__('X Blog\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'x-blog'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'x-blog'),
						'description' => esc_html__('X Blog makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'x-blog'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'x-blog'),
						'description' => esc_html__('X Blog gives you extra slider feature. You can create awesome home slider in this theme.', 'x-blog'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'x-blog'),
						'description' => esc_html__('X Blog comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'x-blog'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'x-blog'),
						'description' => esc_html__('X Blog gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'x-blog'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Banner Slider Options', 'x-blog'),
						'description' => esc_html__('X Blog\'s PRO version comes with more Slider options to display and filter posts. For instance, you can have far more control on setting the source of the posts or how they are displayed, everything to push the content to the right people and promote it by the blink of an eye.', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'x-blog'),
						'description' => esc_html__('X Blog\'s PRO version has more controll available to enable you to place widgets on Footer or Below the Post at the end of your articles.', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Read Time Calculator and total words counter', 'x-blog'),
						'description' => esc_html__('Minimal Lit\'s PRO verison has a feature to let your viewer know the read time of the standared article you have posted on the basis of words per minute which you can control on your customizer .', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'x-blog'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'x-blog'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'x-blog'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'x-blog'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'x-blog'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Premium Support and Assistance', 'x-blog'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'x-blog'),
						'description' => esc_html__('You can easily remove the Theme: X Blog by xblog copyright from the footer area and make the theme yours from start to finish.', 'x-blog'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		xblog_About::init($config);
	}

endif;

add_action('after_setup_theme', 'xblog_about_setup');


//Admin notice 
function xblog_new_optins_texts()
{
	$hide_date = get_option('xblog_proinfo_hidedate');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}

	/* $install_date = get_option('x_blog_theme_install_date');
	if (!empty($install_date)) {
		$install_day = round((time() - strtotime($install_date)) / 24 / 60 / 60);
		if ($install_day < 1) {
			return;
		}
	} */

	global $pagenow;
	if ($pagenow == 'themes.php') {
		return;
	}

	$class = 'eye-notice notice notice-warning is-dismissible';
	$message = __('<strong><span style="color:#9a0909">Your Site Running Free Version. Upgrade pro now!! </span><br> Buy pro and Get a beautiful, orderly, SEO friendly, more secure WordPress website. You may also sell anything with WooCommerce by the pro version!! So Why You late? Upgrade Pro Version Today & get all pro features.</strong> ', 'x-blog');
	$url1 = esc_url('https://wpthemespace.com/product/x-blog/');
	$url3 = esc_url('https://wpthemespace.com/product/x-blog/?add-to-cart=146');

	printf('<div class="%1$s" style="padding:10px 15px 20px;text-transform:uppercase"><p>%2$s</p><a target="_blank" class="button button-primary" href="%3$s" style="margin-right:10px">' . __('Upgrade With Discount', 'x-blog') . '</a><a target="_blank" class="button button-primary" href="%4$s" style="margin-right:10px">' . __('View Details', 'x-blog') . '</a><button class="button button-info btnend" style="margin-left:10px">' . __('No Thanks', 'x-blog') . '</button></div>', esc_attr($class), wp_kses_post($message), $url3, $url1);
}
add_action('admin_notices', 'xblog_new_optins_texts');

function xblog_new_optins_texts_init()
{
	if (isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1) {
		delete_option('xblogzen2');
		update_option('xblog_proinfo_hidedate', current_time('mysql'));
	}
}
add_action('init', 'xblog_new_optins_texts_init');
