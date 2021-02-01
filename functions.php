<?php

function load_stylesheet()
{
    wp_register_style('bootstrap-rfs', get_template_directory_uri() . '/css/vendor/bootstrap-rfs.css', '', false, 'all');
    wp_enqueue_style('bootstrap-rfs');

    wp_register_style('app', get_template_directory_uri() . '/css/app.css', '', '1.0.0', 'all');
    wp_enqueue_style('app');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.1.min.js', '', '3.5.1', true);
}
add_action('wp_head', 'load_jquery');

function load_jquery_footer()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.1.min.js', '', '3.5.1', true);
}
add_action('wp_enqueue_scripts', 'load_jquery_footer');

function load_javascript()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', 'jquery', '4.6.0', true);
    wp_enqueue_script('select2-main', get_template_directory_uri() . '/js/vendor/select2.full.min.js', 'jquery', '4.0.13', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/node_modules/aos/dist/aos.js', 'jquery', '2.1.1', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add menu feature in WordPress
add_theme_support('menus');

// Add thumbnail feature in Wordpress
add_theme_support('post-thumbnails');

// Add templates feature in Wordpress
add_theme_support('templates');

// Add Boostrap Menu file with Wordpress
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(
    array(
        'menu' => __("Menu", 'theme')
    )
);

function console($data)
{
    echo "<script>console.log('" . json_encode($data) . "');</script>";
}

// Edit size max for media upload
@ini_set('upload_max_size', '100M');
@ini_set('post_max_size', '100M');
@ini_set('max_execution_time', '300');

// Flushing rules
flush_rewrite_rules(false);

function formatBytes($bytes, $precision = 0)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    // Uncomment one of the following alternatives
    $bytes /= pow(1024, $pow);
    // $bytes /= (1 << (10 * $pow));

    return round($bytes, $precision) . ' ' . $units[$pow];
}

add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars)
{
    array_unshift($toolbars['Full'][1], 'fontselect');
    array_unshift($toolbars['Full'][1], 'fontsizeselect');

    return $toolbars;
}

// Add custom Fonts to the Fonts list
if (!function_exists('am_add_google_fonts_array_to_tiny_mce')) {
    function am_add_google_fonts_array_to_tiny_mce($initArray)
    {
        $initArray['font_formats'] = 'Kollektif Regular=Kollektif Regular;Manrope=Manrope;Roboto=Roboto;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
        return $initArray;
    }
}
add_filter('tiny_mce_before_init', 'am_add_google_fonts_array_to_tiny_mce');

function scanwp_buttons($buttons)
{
    array_unshift($buttons, 'fontselect');
    array_unshift($buttons, 'fontsizeselect');
    return $buttons;
}

add_filter('mce_buttons_2', 'scanwp_buttons');

function my_mce4_options($init)
{

    $custom_colours = '
        "000000", "Black",
        "993300", "Burnt orange",
        "333300", "Dark olive",
        "003300", "Dark green",
        "003366", "Dark azure",
        "000080", "Navy Blue",
        "333399", "Indigo",
        "333333", "Very dark gray",
        "800000", "Maroon",
        "FF6600", "Orange",
        "808000", "Olive",
        "008000", "Green",
        "008080", "Teal",
        "0000FF", "Blue",
        "666699", "Grayish blue",
        "808080", "Gray",
        "FF0000", "Red",
        "FF9900", "Amber",
        "99CC00", "Yellow green",
        "339966", "Sea green",
        "33CCCC", "Turquoise",
        "3366FF", "Royal blue",
        "800080", "Purple",
        "999999", "Medium gray",
        "FF00FF", "Magenta",
        "FFCC00", "Gold",
        "FFFF00", "Yellow",
        "00FF00", "Lime",
        "00FFFF", "Aqua",
        "00CCFF", "Sky blue",
        "993366", "Red violet",
        "FFFFFF", "White",
        "FF99CC", "Pink",
        "FFCC99", "Peach",
        "FFFF99", "Light yellow",
        "CCFFCC", "Pale green",
        "CCFFFF", "Pale cyan",
        "99CCFF", "Light sky blue",
        "CC99FF", "Plum",
        "c6a530", "Brand color",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 8;
    $init['textcolor_cols'] = 8;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');
