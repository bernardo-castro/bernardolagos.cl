<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_image_size('logo_min', 114, 40, true);
add_image_size('preview', 50, 50, true);
add_image_size('background_1', 1600, 1200, true);
add_image_size('background_2', 1920, 1500, true);

//Desactivar actualizaciones
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );


if (is_front_page() or is_home()) {
    show_admin_bar(false);
}
/*
 * Oculta actualizaciones de plugins
 * @param $value
 * @return mixed
 */
function filter_plugin_updates($value)
{

    //unset($value->response['advanced-custom-fields-pro/acf.php']);
    //unset($value->response['admin-menu-editor-pro/menu-editor.php']);
    return $value;
}

add_filter('site_transient_update_plugins', 'filter_plugin_updates');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function my_custom_log($msg, $prefix = '', $is_print = false)
{
    $str = date('[d-m-Y H:i:s] => ') . "\n";
    if ($prefix)
        $str .= "=== [{$prefix}] ===\n";

    $str .= print_r($msg, true) . "\n";

    if ($prefix)
        $str .= "=== [/{$prefix}] ===\n\n";

    error_log($str, 3, 'mylog.txt'); //Full path
    if ($is_print) echo $str;
}

/**
 * Detecta los navegadores tradicionales
 * @return bool|string
 */
function get_current_browser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if (stripos($user_agent, 'edge') !== false) {
        return 'edge';
    } elseif (stripos($user_agent, 'chrome') !== false) {
        return 'chrome';
    } elseif (stripos($user_agent, 'safari') !== false) {
        return 'safari';
    } elseif (stripos($user_agent, 'explorer') !== false) {
        return 'ie';
    } elseif (stripos($user_agent, 'opera') !== false) {
        return 'opera';
    } elseif (stripos($user_agent, 'firefox') !== false) {
        return 'firefox';
    }

    return false;
}

function get_so()
{
    $user_agent = getenv("HTTP_USER_AGENT");

    if (strpos($user_agent, "Win") !== FALSE)
        return "win";
    elseif (strpos($user_agent, "Mac") !== FALSE)
        return "mac";
    elseif (strpos($user_agent, "Linux") !== FALSE)
        return "linux";

    return 'other';
}

/**
 * Deja al final el snippet de Yoast
 */
function jw_filter_yoast_seo_metabox()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'jw_filter_yoast_seo_metabox', 10, 1);

/**
 * Para customizar el loading del ajax de CF7
 */
function my_wpcf7_ajax_loader()
{
    if (!is_page('contacto')) return get_bloginfo('template_url') . '/images/loading.svg';
    return get_bloginfo('template_url') . '/images/loading.svg';
}
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');

function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function addDataAttr( $items, $args ) {
    $dom = new DOMDocument();
    $dom->loadHTML($items);
    $find = $dom->getElementsByTagName('li');

    foreach ($find as $item ) :
        $menuId = str_ireplace('menu-item-','', $item->getAttribute('id'));

        $item->setAttribute('data-color', get_field('color', $menuId));
    endforeach;

    return $dom->saveHTML();
}
add_filter('wp_nav_menu_items', 'addDataAttr', 10, 2);

function hex2rgba($color, $opacity = false) {

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if(empty($color))
        return $default;

    //Sanitize $color if "#" is provided
    if ($color[0] == '#' ) {
        $color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if($opacity){
        if(abs($opacity) > 1)
            $opacity = 1.0;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
        $output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}
