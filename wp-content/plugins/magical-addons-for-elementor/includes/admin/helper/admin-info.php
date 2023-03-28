<?php

/**
 * 
 *  Admin info for Magical Addons For Elementor plugin
 * 
 * 
 * 
 */

class madAdminInfo
{
    public static function init()
    {

        add_action('admin_notices', [__CLASS__, 'mp_display_admin_themeinfo']);
        add_action('admin_notices', [__CLASS__, 'mp_display_admin_info']);
        add_action('init', [__CLASS__, 'mp_display_admin_info_init']);
        add_action('admin_enqueue_scripts', [__CLASS__, 'mgaddons_admin_scripts']);
    }



    public static function mp_display_admin_themeinfo()
    {
        $mg_theme = wp_get_theme();
        $mg_theme_slug = $mg_theme->get('TextDomain');
        $mg_hide_tinfo = get_option('mg_hide_tinfo1');
        if ($mg_hide_tinfo || $mg_theme_slug == 'colorful-blog') {
            return;
        }
        /*
        $message = __('Best WordPress theme <strong class="themeinfo" style="color:#b71583">Magic Elementor theme</strong> released for Elementor users. Now you can use Elementor more easy way by the <strong class="themeinfo" style="color:#b71583">Magic Elementor theme</strong>. Try Now!! It\'s 100% Free ', 'magical-addons-for-elementor');
        $link1 = esc_url(get_admin_url() . 'theme-install.php?search=magic-elementor');
        $link2 = esc_url('https://www.youtube.com/watch?v=jTEckmVe9dE');
*/
        $message = __('Best New WordPress theme <strong class="themeinfo" style="color:#b71583">Colorful Blog</strong> released with stunning animations, lightning-fast speed, and advanced customization options,. Upgrade to <strong class="themeinfo" style="color:#b71583">Colorful Blog Pro</strong> today and discover the power of a vibrant and engaging website that your readers will love.', 'magical-addons-for-elementor');
        $link1 = esc_url(get_admin_url() . 'theme-install.php?search=colorful-blog');
        $link2 = esc_url('https://wpthemespace.com/product/colorful-blog-pro/');

        printf(
            '<div class="notice notice-success is-dismissible" style="padding:20px 15px;font-weight:700"><p>%1$s</p>
        <a class="button button-primary" href="%2$s">' . __('Free Install', 'magical-addons-for-elementor') . '</a>
        <a class="button button-primary" target="_blank" href="%3$s">' . __('View Demo', 'magical-addons-for-elementor') . '</a>
        <button class="button tinfo-hide">' . __('Hide Me', 'magical-addons-for-elementor') . '</button></div>',
            $message,
            $link1,
            $link2
        );
    }
    public static function mp_display_admin_info()
    {

        $hide_date = get_option('mg_hide_date');
        if (!empty($hide_date)) {
            $clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
            if ($clickhide < 25) {
                return;
            }
        }

        $install_date = get_option('mg_install_date');
        if (!empty($install_date)) {
            $install_day = round((time() - strtotime($install_date)) / 24 / 60 / 60);
            if ($install_day < 2) {
                return;
            }
        }

        $imgsrc = MAGICAL_ADDON_URL . 'assets/img/magical-logo.png';
        $class = 'eye-notice notice notice-success is-dismissible';
        $message = __('<strong>Access a world of advanced Elementor addons and create stunning pages and layouts - upgrade to Magical Addons Pro today!</strong><br> <strong class="upgbtn"> Starting Price only $21!!! limit time offer!!!</strong>', 'magical-addons-for-elementor');
        $url1 = esc_url('https://wpthemespace.com/product/magical-addons-pro/?add-to-cart=7193');
        $url2 = esc_url('https://magic.wpcolors.net/pricing-plan/#mgpricing');

        printf('<div class="%1$s" style="padding:10px 15px 20px;"><div><p>%3$s </p><a target="_blank" class="button button-primary quickbtn" href="%4$s" style="margin-right:10px">' . __('Quick Upgrade', 'magical-addons-for-elementor') . '</a><a target="_blank" class="button button-primary" href="%5$s" style="margin-right:10px">' . __('View All Pricing Plan', 'magical-addons-for-elementor') . '</a><button class="button button-info mgad-dismiss" style="margin-left:10px"><i class="notice-icon dashicons-before dashicons-smiley"></i>' . __('No, Maybe leater', 'magical-addons-for-elementor') . '</button></div></div>', esc_attr($class), esc_url($imgsrc), wp_kses_post($message), $url1, $url2);
    }

    public static function mp_display_admin_info_init()
    {
        if (isset($_GET['mgpdismissed']) && $_GET['mgpdismissed'] == 1) {
            update_option('mg_hide_date', current_time('mysql'));
            /* 
            delete_option('mgadinfo4');
            update_option('mgadinfo9', 1); 
            */
        }
        if (isset($_GET['tinfohide']) && $_GET['tinfohide'] == 1) {
            update_option('mg_hide_tinfo1', current_time('mysql'));
        }
    }
    public static function mgaddons_admin_scripts()
    {
        wp_enqueue_style('mgaddons-admin-info',  MAGICAL_ADDON_URL . 'assets/css/mg-admin-info.css', array(), MAGICAL_ADDON_VERSION, 'all');

        wp_enqueue_script('mgaddons-admin-info',  MAGICAL_ADDON_URL . 'assets/js/mg-admin-info.js', array('jquery'), MAGICAL_ADDON_VERSION, true);
    }
}
madAdminInfo::init();
