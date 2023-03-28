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
		$config = array(
			// Menu name under Appearance.
			'menu_name'               => esc_html__('X Blog color Info', 'x-blog-color'),
			// Page title.
			'page_name'               => esc_html__('X Blog color Info', 'x-blog-color'),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'x-blog-color'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'x-blog-color'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'x-blog-color'),
				'recommended_actions' => esc_html__('Recommended Actions', 'x-blog-color'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'x-blog-color'),
				'free_pro'  => esc_html__('Free Vs Pro', 'x-blog-color'),
			),

			// Quick links.
			'quick_links' => array(
				'theme_url' => array(
					'text' => esc_html__('Theme Details', 'x-blog-color'),
					'url'  => 'https://wpthemespace.com/product/x-blog/',
				),
				'demo_url' => array(
					'text' => esc_html__('View Demo', 'x-blog-color'),
					'url'  => 'http://wpthemespace.com/xblog/xdemo/',
				),
				'documentation_url' => array(
					'text'   => esc_html__('View Documentation', 'x-blog-color'),
					'url'    => 'http://wpthemespace.com/xblog/doc/',
					'button' => 'primary',
				),
				'show_video' => array(
					'text'   => esc_html__('Show video', 'x-blog-color'),
					'url'    => 'https://www.youtube.com/watch?v=Cu3eFFQskCs',
					'button' => 'primary',
				),
				'update_url' => array(
					'text'   => esc_html__('UPGRADE PRO', 'x-blog-color'),
					'url'    => 'https://wpthemespace.com/product/x-blog/?add-to-cart=146',
					'button' => 'danger',
				),
			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Theme Documentation', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__('Please check our full documentation for detailed information on how to setup and customize the theme.', 'x-blog-color'),
					'button_text' => esc_html__('View Documentation', 'x-blog-color'),
					'button_url'  => 'http://wpthemespace.com/xblog/doc/',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'two' => array(
					'title'       => esc_html__('Theme Options', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'x-blog-color'),
					'button_text' => esc_html__('Customize', 'x-blog-color'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Xblog short video for better understanding', 'x-blog-color'), esc_html__('One Click Demo Import', 'x-blog-color')),
					'button_text' => esc_html__('Show video', 'x-blog-color'),
					'button_url'  => 'https://www.youtube.com/watch?v=Cu3eFFQskCs',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'four' => array(
					'title'       => esc_html__('Demo Content', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'x-blog-color'), esc_html__('One Click Demo Import', 'x-blog-color')),
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'x-blog-color'),
					'button_text' => esc_html__('Add Widgets', 'x-blog-color'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'x-blog-color'),
					'button_text' => esc_html__('View Demo', 'x-blog-color'),
					'button_url'  => 'http://wpthemespace.com/xblog/xdemo/',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'x-blog-color'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'x-blog-color'),
					'button_text' => esc_html__('Contact Support', 'x-blog-color'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'x-blog-color'),
				'already_activated_message' => esc_html__('Already activated', 'x-blog-color'),
				'version_label' => esc_html__('Version: ', 'x-blog-color'),
				'install_label' => esc_html__('Install and Activate', 'x-blog-color'),
				'activate_label' => esc_html__('Activate', 'x-blog-color'),
				'deactivate_label' => esc_html__('Deactivate', 'x-blog-color'),
				'content'                   => array(
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'x-instafeed'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'niso-carousel-slider'
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'x-blog-color'),
				'activate_label' => esc_html__('Activate', 'x-blog-color'),
				'deactivate_label' => esc_html__('Deactivate', 'x-blog-color'),
				'content'            => array(
					'click-to-top' => array(
						'title'       => __('Gallery Box', 'x-blog-color'),
						'description' => __('These recommended plugin need to install and active for better user experience.', 'x-blog-color'),
						'plugin_slug' => 'gallery-box',
						'id' => 'gallery-box'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/x-blog/?add-to-cart=146">' . __('UPGRADE TO PRO', 'x-blog-color') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'x-blog-color'),
						//'plugin_slug' => 'x-instafeed',
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => __('X Blog', 'x-blog-color'),
				'pro_theme_name'      => __('X Blog Pro', 'x-blog-color'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/x-blog/?add-to-cart=146',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'x-blog-color'), 'X Blog Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'x-blog-color'),
						'description' => esc_html__('X Blog\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'x-blog-color'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'x-blog-color'),
						'description' => esc_html__('X Blog makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'x-blog-color'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'x-blog-color'),
						'description' => esc_html__('X Blog gives you extra slider feature. You can create awesome home slider in this theme.', 'x-blog-color'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'x-blog-color'),
						'description' => esc_html__('X Blog comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'x-blog-color'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'x-blog-color'),
						'description' => esc_html__('X Blog gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'x-blog-color'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Banner Slider Options', 'x-blog-color'),
						'description' => esc_html__('X Blog\'s PRO version comes with more Slider options to display and filter posts. For instance, you can have far more control on setting the source of the posts or how they are displayed, everything to push the content to the right people and promote it by the blink of an eye.', 'x-blog-color'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'x-blog-color'),
						'description' => esc_html__('X Blog\'s PRO version has more controll available to enable you to place widgets on Footer or Below the Post at the end of your articles.', 'x-blog-color'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Read Time Calculator and total words counter', 'x-blog-color'),
						'description' => esc_html__('Minimal Lit\'s PRO verison has a feature to let your viewer know the read time of the standared article you have posted on the basis of words per minute which you can control on your customizer .', 'x-blog-color'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'x-blog-color'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'x-blog-color'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'x-blog-color'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'x-blog-color'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'x-blog-color'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'x-blog-color'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Premium Support and Assistance', 'x-blog-color'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'x-blog-color'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'x-blog-color'),
						'description' => esc_html__('You can easily remove the Theme: X Blog by xblog copyright from the footer area and make the theme yours from start to finish.', 'x-blog-color'),
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
function xblog_plus_new_optins_texts()
{
	$hide_date = get_option('xcolor_hide_date');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 20) {
			return;
		}
	}
	$install_date = get_option('xcolor_install_date');
	if (!empty($install_date)) {
		$install_day = round((time() - strtotime($install_date)) / 24 / 60 / 60);
		if ($install_day < 1) {
			return;
		}
	}


	$class = 'eye-notice notice notice-warning is-dismissible';
	$message = __('<strong><span> Hi Buddy!! You are using the free version.<br> If you want a beautiful, orderly, SEO friendly, more secure and unlimited options website then need to upgrade pro. UPGRADE FOR LIFETIME WITH NOMINAL PRICE.</span> <br> <span><strong>Good News For You!! XBLOG PRO Now support WooCommerce plgin so you can sell anything with the xblog pro theme !!! So Why You late? Build Your Site With Pro Version.</span></strong> ', 'x-blog-color');
	$url1 = esc_url('https://wpthemespace.com/product/x-blog/');
	$url2 = esc_url('http://wpthemespace.com/xblog/xdemo/');
	$url3 = esc_url('https://wpthemespace.com/product/x-blog/?add-to-cart=146');

	printf('<div class="%1$s" style="padding:10px 15px 20px;text-transform:uppercase"><p>%2$s</p><a target="_blank" class="button button-primary" href="%3$s" style="margin-right:10px">' . __('X Blog Pro Details', 'x-blog-color') . '</a><a target="_blank" class="button button-primary" href="%4$s" style="margin-right:10px">' . __('X Blog Pro Demo', 'x-blog-color') . '</a><a target="_blank" class="button button-primary" href="%5$s" style="margin-right:10px">' . __('Upgrade Pro', 'x-blog-color') . '</a><button class="button button-info btnend" style="margin-left:10px">' . __('Dismiss the notice', 'x-blog-color') . '</button></div>', esc_attr($class), wp_kses_post($message), $url1, $url2, $url3);
}
add_action('admin_notices', 'xblog_plus_new_optins_texts');

function xblog_plus_new_optins_texts_init()
{
	$xcolor_install_date = get_option('xcolor_install_date');
	if (empty($xcolor_install_date)) {
		update_option('xcolor_install_date', current_time('mysql'));
	}
	if (isset($_GET['xpnotice']) && $_GET['xpnotice'] == 1) {
		update_option('xcolor_hide_date', current_time('mysql'));
	}
}
add_action('init', 'xblog_plus_new_optins_texts_init');
