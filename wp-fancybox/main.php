<?php
/*
Plugin Name: WP fancyBox
Version: 1.0.1
Plugin URI: https://noorsplugin.com/wordpress-fancybox-plugin/
Author: naa986
Author URI: http://noorsplugin.com/
Description: Enable fancyBox Lightbox to pop up media files from your WordPress site
Text Domain: wp-fancybox
Domain Path: /languages
*/

if(!defined('ABSPATH')) exit;
if(!class_exists('WP_FANCYBOX'))
{
    class WP_FANCYBOX
    {
        var $plugin_version = '1.0.1';
        var $plugin_url;
        var $plugin_path;
        function __construct()
        {
            define('WP_FANCYBOX_VERSION', $this->plugin_version);
            define('WP_FANCYBOX_SITE_URL',site_url());
            define('WP_FANCYBOX_URL', $this->plugin_url());
            define('WP_FANCYBOX_PATH', $this->plugin_path());
            define('WP_FANCYBOX_LIBRARY_VERSION', '3.0.47');
            $this->plugin_includes();
            add_action( 'wp_enqueue_scripts', array( &$this, 'plugin_scripts' ), 0 );
        }
        function plugin_includes()
        {
            if(is_admin( ) )
            {
                add_filter('plugin_action_links', array($this,'add_plugin_action_links'), 10, 2 );
            }
            add_action('plugins_loaded', array($this, 'plugins_loaded_handler'));
            add_action('admin_menu', array($this, 'add_options_menu' ));
            add_shortcode('wp_fancybox_media','wp_fancybox_media_handler');
            //allows shortcode execution in the widget, excerpt and content
            add_filter('widget_text', 'do_shortcode');
            add_filter('the_excerpt', 'do_shortcode', 11);
            add_filter('the_content', 'do_shortcode', 11);
        }
        function plugin_scripts()
        {
            if (!is_admin()) 
            {                
                wp_register_style('fancybox', WP_FANCYBOX_URL.'/dist/jquery.fancybox.min.css');
                wp_enqueue_style('fancybox');
                wp_enqueue_script('jquery');
                wp_register_script('fancybox', WP_FANCYBOX_URL.'/dist/jquery.fancybox.min.js', array('jquery'), WP_FANCYBOX_VERSION);
                wp_enqueue_script('fancybox');
            }
        }
        function plugin_url()
        {
            if($this->plugin_url) return $this->plugin_url;
            return $this->plugin_url = plugins_url( basename( plugin_dir_path(__FILE__) ), basename( __FILE__ ) );
        }
        function plugin_path(){ 	
            if ( $this->plugin_path ) return $this->plugin_path;		
            return $this->plugin_path = untrailingslashit( plugin_dir_path( __FILE__ ) );
        }
        function add_plugin_action_links($links, $file)
        {
            if ( $file == plugin_basename( dirname( __FILE__ ) . '/main.php' ) )
            {
                $links[] = '<a href="options-general.php?page=wp-fancybox-settings">'.__('Settings', 'wp-fancybox').'</a>';
            }
            return $links;
        }
        
        function plugins_loaded_handler()
        {
            load_plugin_textdomain('wp-fancybox', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/'); 
        }

        function add_options_menu()
        {
            if(is_admin())
            {
                add_options_page(__('WP Fancybox', 'wp-fancybox'), __('WP Fancybox', 'wp-fancybox'), 'manage_options', 'wp-fancybox-settings', array($this, 'display_options_page'));
            }
        }
        
        function display_options_page()
        {           
            $url = "https://noorsplugin.com/wordpress-fancybox-plugin/";
            $link_text = sprintf(wp_kses(__('Please visit the <a target="_blank" href="%s">WP fancyBox</a> documentation page for usage instructions.', 'wp-fancybox'), array('a' => array('href' => array(), 'target' => array()))), esc_url($url));          
            echo '<div class="wrap">';               
            echo '<h2>WP fancyBox - v'.$this->plugin_version.'</h2>';
            echo '<div class="update-nag">'.$link_text.'</div>';
            echo '</div>'; 
        }
    }
    $GLOBALS['wp_fancybox'] = new WP_FANCYBOX();
}

function wp_fancybox_media_handler($atts)
{
    extract(shortcode_atts(array(
        'url' => '',
        'width' => '640',
        'height' => '360',
        'caption' => '',
        'type' => '',
        'hyperlink' => 'Click Here',
        'alt' => '',
        'class' => '',
    ), $atts));
    if(empty($url)){
        return __('Please specify the URL of your media file that you wish to pop up in lightbox', 'wp-fancybox');
    }
    if(empty($type)){
        return __('Please specify the type of media file you wish to pop up in lightbox', 'wp-fancybox');
    }
    if (strpos($hyperlink, 'http') !== false)
    {
        if(isset($alt) && !empty($alt)){
            $alt = ' alt="'.$alt.'"';
        }
        $hyperlink = '<img src="'.$hyperlink.'"'.$alt.'>';
    }
    /* only works on images
    if(!empty($width)){
        $width = ' data-width="'.$width.'"';
    }
    //
    if(!empty($height)){
        $height = ' data-height="'.$height.'"';
    }
    */
    $datasrc = '';
    if($type=="inline"){
        $datasrc = ' data-src="'.$url.'"';
        $url = "javascript:;";
    }
    //
    if(!empty($class)){
        $class = ' class="'.$class.'"';
    }
    //
    if(!empty($caption)){
        $caption = ' data-caption="'.$caption.'"';
    }
    //
    $data_fancybox = ' data-fancybox';
    //
    $video_output = '';
    if($type=="youtube" || $type=="vimeo"){
        $id = uniqid();
        $data_fancybox = ' data-fancybox="'.$type.$id.'"';
        $content = '$content';
        $aspect_ratio = $height/$width;
        $video_output = <<<EOT
        <script>
        /* <![CDATA[ */
            jQuery(document).ready(function($){
                $(function(){
                    $('[data-fancybox="{$type}{$id}"]').fancybox({
                            afterLoad : function( instance, current ) {
                                // Remove scrollbars and change background
                               current.$content.css({
                               width   : '$width',
                               height  : '$height',
                               overflow: 'visible',
                               background : '#000'
                            });
                        },
                        onUpdate : function( instance, current ) {
                            var width = $(window).innerWidth(),
                                height = $height,
                                setwidth = $width,
                                ratio = $aspect_ratio,
                                video = current.$content;
                                
                            if ( video && width < setwidth) {
                              video.hide();
                              height = Math.floor(width * $aspect_ratio);
                              //console.log("width: "+width+", height:"+height);

                              video.css({
                                width  : width,
                                height : height
                              }).show();

                            }
                        }
                    })
                });
            });
            /* ]]> */    
        </script>                 
EOT;
        
    }
    $output = <<<EOT
    <a href="$url"{$class}{$data_fancybox}{$datasrc}{$caption}>$hyperlink</a>
    $video_output        
EOT;
    return $output;
}
