<?php
/**
 * ChimpMate - WordPress MailChimp Assistant
 *
 * @package   ChimpMate - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @license   GPL-2.0+
 * @link      http://voltroid.com/wordpress/plugins/wpmailchimp
 * @copyright 2014 Voltroid
 */

/**
 *
 * @package   ChimpMate - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * 
 */
require_once( WPMCA_PLUGIN_PATH.'src/MailChimp.php' );
use \WPMChimpA;
class ChimipMate_WPMC_Assistant {

	/**
	 * @since   1.0.0
	 *
	 * @var      string
	 */
	const VERSION = '1.0.0';

	/**
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_slug = 'chimpmate';

	/**
	 * @since    1.0.0
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * @since     1.0.0
	 */
	private function __construct() {

		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'wpmu_new_blog', array( $this, 'activate_new_site' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_action( 'wp_footer', array( $this, 'wpmchimpa_show' ) );
		
		add_action('wp_ajax_wpmchimpa_add_email_ajax',  array( $this, 'wpmchimpa_add_email' ));
		add_action('wp_ajax_nopriv_wpmchimpa_add_email_ajax',  array( $this, 'wpmchimpa_add_email' )); 

		add_action('wp_ajax_wpmchimpa_setcookie_ajax',  array( $this, 'wpmchimpa_setcookie' ));
		add_action('wp_ajax_nopriv_wpmchimpa_setcookie_ajax',  array( $this, 'wpmchimpa_setcookie' ));

		add_filter('the_content', array( $this, 'bottom_of_every_post'));

		$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		if(isset($wpmchimpa["widget"])){
			add_action( 'widgets_init', create_function( '', 'register_widget("ChimipMate_WPMC_Assistant_Widget");' ) );
		}
	}

	/**
	 * Return the plugin slug.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_plugin_slug() {
		return $this->plugin_slug;
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Fired when the plugin is activated.
	 *
	 * @since    1.0.0
	 *
	 * @param    boolean    $network_wide    True if WPMU superadmin uses
	 *                                       "Network Activate" action, false if
	 *                                       WPMU is disabled or plugin is
	 *                                       activated on an individual blog.
	 */
	public static function activate( $network_wide ) {

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {

			if ( $network_wide  ) {

				// Get all blog ids
				$blog_ids = self::get_blog_ids();

				foreach ( $blog_ids as $blog_id ) {

					switch_to_blog( $blog_id );
					self::single_activate();

					restore_current_blog();
				}

			} else {
				self::single_activate();
			}

		} else {
			self::single_activate();
		}
		$json=file_get_contents(WPMCA_PLUGIN_PATH.'src/default.json');
		update_option('wpmchimpa_options',$json);
	}

	/**
	 * Fired when the plugin is deactivated.
	 *
	 * @since    1.0.0
	 *
	 * @param    boolean    $network_wide    True if WPMU superadmin uses
	 *                                       "Network Deactivate" action, false if
	 *                                       WPMU is disabled or plugin is
	 *                                       deactivated on an individual blog.
	 */
	public static function deactivate( $network_wide ) {

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {

			if ( $network_wide ) {

				$blog_ids = self::get_blog_ids();

				foreach ( $blog_ids as $blog_id ) {

					switch_to_blog( $blog_id );
					self::single_deactivate();

					restore_current_blog();

				}

			} else {
				self::single_deactivate();
			}

		} else {
			self::single_deactivate();
		}

	}

	/**
	 * Fired when a new site is activated with a WPMU environment.
	 *
	 * @since    1.0.0
	 *
	 * @param    int    $blog_id    ID of the new blog.
	 */
	public function activate_new_site( $blog_id ) {

		if ( 1 !== did_action( 'wpmu_new_blog' ) ) {
			return;
		}

		switch_to_blog( $blog_id );
		self::single_activate();
		restore_current_blog();

	}

	/**
	 * @since    1.0.0
	 *
	 * @return   array|false    The blog ids, false if no matches.
	 */
	private static function get_blog_ids() {

		global $wpdb;

		$sql = "SELECT blog_id FROM $wpdb->blogs
			WHERE archived = '0' AND spam = '0'
			AND deleted = '0'";

		return $wpdb->get_col( $sql );

	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		$domain = $this->plugin_slug;
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
		load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

	}

	/**
	 * Register and enqueue public-facing style sheet.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles1', plugins_url( 'assets/css/reset.css', __FILE__ ), array(), self::VERSION );
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles', plugins_url( 'assets/css/public.php', __FILE__ ), array(), self::VERSION );
	}

	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		$goo_fonts =array();
		if (isset($wpmchimpa["lite_heading_f"]) && strpos($wpmchimpa["lite_heading_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["lite_heading_f"]);
		if (isset($wpmchimpa["lite_msg_f"]) && strpos($wpmchimpa["lite_msg_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["lite_msg_f"]);
		if (isset($wpmchimpa["lite_tbox_f"]) && strpos($wpmchimpa["lite_tbox_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["lite_tbox_f"]);
		if (isset($wpmchimpa["lite_button_f"]) && strpos($wpmchimpa["lite_button_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["lite_button_f"]);
		if (isset($wpmchimpa["widget_msg_f"]) && strpos($wpmchimpa["widget_msg_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["widget_msg_f"]);
		if (isset($wpmchimpa["widget_tbox_f"]) && strpos($wpmchimpa["widget_tbox_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["widget_tbox_f"]);
		if (isset($wpmchimpa["widget_button_f"]) && strpos($wpmchimpa["widget_button_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["widget_button_f"]);
		if (isset($wpmchimpa["addon_heading_f"]) && strpos($wpmchimpa["addon_heading_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["addon_heading_f"]);
		if (isset($wpmchimpa["addon_msg_f"]) && strpos($wpmchimpa["addon_msg_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["addon_msg_f"]);
		if (isset($wpmchimpa["addon_tbox_f"]) && strpos($wpmchimpa["addon_tbox_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["addon_tbox_f"]);
		if (isset($wpmchimpa["addon_button_f"]) && strpos($wpmchimpa["addon_button_f"],'|ng') == false)array_push($goo_fonts, $wpmchimpa["addon_button_f"]);
		if(!empty($goo_fonts)){
				$goo = implode(',',$goo_fonts);
				$wpmchimpa['goo'] = $goo;
		}
		$wpmchimpa['ajax_url'] = site_url( '/wp-admin/admin-ajax.php');
		wp_enqueue_script('jquery');
		wp_enqueue_script( $this->plugin_slug . '-plugin-script', plugins_url( 'assets/js/public.php', __FILE__ ), array( 'jquery' ), self::VERSION );
		wp_localize_script( $this->plugin_slug . '-plugin-script',  'chimipmate_wpmc_assistant_plugin_script'.'ajax', array( 'ajaxurl' =>admin_url('admin-ajax.php')));
		wp_localize_script( $this->plugin_slug . '-plugin-script', 'wpmchimpa', $wpmchimpa );
		wp_enqueue_script($this->plugin_slug . '-web-fonts', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', array(), self::VERSION, true);
	}

	/**
	 * Show Popup
	 * @since    1.0.0
	 */
	public function wpmchimpa_show() {
		$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		if(isset($wpmchimpa["litebox"])){
			include_once( 'views/public.php' );
		}
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors pagetype for popup
	 */
function wpmchimpa_pagetype(){
	$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
	if(isset($wpmchimpa["lite_homepage"]) && is_front_page()) return true;
	else if(isset($wpmchimpa["lite_page"]) && is_page()) return true;
	else if(isset($wpmchimpa["lite_post"]) && is_single()) return true;
	else if(isset($wpmchimpa["lite_category"]) && is_archive()) return true;
	else if(isset($wpmchimpa["lite_search"]) && is_search()) return true;
	else if(isset($wpmchimpa["lite_404error"]) && is_404()) return true;
	return false;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors pagetype for addon
	 */
function wpmchimpa_pagetype_addon(){
	$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
	if(isset($wpmchimpa["addon_page"]) && is_page()) return true;
	else if(isset($wpmchimpa["addon_post"]) && is_single()) return true;
	return false;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors login status
	 */
function wpmchimpa_user_status() {
	$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
	if(!isset($wpmchimpa["litebox"])) return false;
	if(!isset($wpmchimpa["loggedin"]) && !isset($wpmchimpa["notloggedin"])) return false;
	if(!isset($wpmchimpa["loggedin"]) && isset($wpmchimpa["notloggedin"]) && is_user_logged_in()) return false;
	if(isset($wpmchimpa["loggedin"]) && !isset($wpmchimpa["notloggedin"]) && !is_user_logged_in()) return false;
	if(is_single() && is_user_logged_in()){
		$comm = get_comments( array('post_id' => get_the_ID(),'user_id' => get_current_user_id()));
		if(!isset($wpmchimpa["commented"]) && !isset($wpmchimpa["notcommented"])) return false;
		if(!isset($wpmchimpa["commented"]) && isset($wpmchimpa["notcommented"]) && !empty($comm)) return false;
		if(isset($wpmchimpa["commented"]) && !isset($wpmchimpa["notcommented"]) && empty($comm)) return false;
	}
	return true;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors referrer
	 */
function wpmchimpa_referral() {
	$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
	$referrer = $_SERVER["HTTP_REFERER"];
	if(isset($wpmchimpa["searchengine"])){
		$organic_sources = array('www.google' => '',
	           'bing.com/' => array('q='),
	           'search.yahoo.com' => '',
	           'ask.com/' => array('q='),
	           'search.aol.com/' => array('query=', 'encquery=','q='),
	           'wow.com/' => array('q='),
	           'webcrawler.com/' => array('q='),
	           'search.mywebsearch.com/' => array('searchfor='),
	           'search.infospace.com/' => array('q='),
	           'info.com/' => array('qkw='),
	           'duckduckgo.com/' => '',
	           'entireweb.com/' => '',
	           'blekko.com/' => '',
	           'contenko.com/' => '',
	           'dogpile.com/' => array('q='),
	           'alhea.com/' => array('q='),
	           'daum.net/' => array('q='),
	           'lycos.com/' => array('q='),
	           'mamma.com/' => array('query='),
	           'search.virgilio.it/' => array('qs='),
	           'baidu.com/' => array('wd='),
	           'alice.com/' => array('qs='),
	           'yandex.com/' => array('text='),
	           'seznam.cz/' => array('q='),
	           'search.com/' => array('q='),
	           'wp.pl/' => array('q='),
	           'yam.com/' => array('q='),
	           'kvasir.no/' => array('q='),
	           'mynet.com/' => array('query='),
	           'rambler.ru/' => array('query=')
	     );
		foreach($organic_sources as $searchEngine => $queries) {
	        if (strpos($referrer, $searchEngine) !== false) {
	        		if(is_array($queries)){
		                foreach ($queries as $query) {
		                        if (strpos($referrer, $query) !== false) {
		                                return true;
		                        }
		                }
		            }
		            else return true;
	        }
	    }
	    return false;
	}
	return true;
}

	/**
	 * Ajax call to add email to list
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_add_email()
	{
		$_POST = stripslashes_deep( $_POST );
		$settings=json_decode(get_option('wpmchimpa_options'),true);
		$api = $settings['api_key'];
		$list = $settings['list_record']['id'];
		if(empty($api) || empty($list)){ die("Please configure the plugin properly");}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { die("Please enter valid email address");}
		$MailChimp = new \WPMChimpA\MailChimp($api);
		$opt_in = $settings['opt_in'];
		$options =array(
		                'id'                => $list,
		                'email'             => array('email'=>$_POST['email']),
		                'double_optin'      => false,
		                'update_existing'   => false,
		                'replace_interests' => false,
		                'send_welcome'      => false,
		            );
		if(isset($settings['opt_in'])) $options['double_optin'] = true;
		if(isset($settings['namebox'])) $options['merge_vars']['FNAME'] = $_POST['name'];
		if(isset($_POST['wpmchimpag'])) {
			$group_record = array();
			foreach($settings["list_record"]['groups'] as $grouping){
				$g=array();
			 	foreach($grouping['groups'] as $group){
			 		if(in_array($group['id'], $_POST['wpmchimpag']))
			 			array_push($g, $group['gname']);
			 	}
			 	if(!empty($g)){
			 		$t['id'] = $grouping['id'];
			 		$t['groups'] = $g;
			 		array_push($group_record, $t);
			 	}
			}
			$options['merge_vars'] = array(
				'groupings' => $group_record);
		}
		$result = $MailChimp->call('lists/subscribe', $options);
		if( $result['status'] === 'error' ) {
		    if($result['code']=== 214){
		    	echo $_POST['email'] . " is already subscribed to Newsletters.";
		    }
		    else{
		    	echo "An unknown error occurred processing your request.  Please try again later.";		    	
		    }
		}
		else{
			if($settings['suc_sub'] == "suc_msg" && isset($settings['suc_msg']))echo $settings['suc_msg'];
			else echo 'error';
		}
		//echo json_encode($options);
	    die();
	}
	/**
	 * Ajax call to set cookie
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_setcookie(){
		setcookie("wpmchimpa_show", 'true', time() + (86400), "/");
		die();
	}
	/**
	 * filter addon
	 * @since    1.0.0
	 * 
	 */
	public function bottom_of_every_post($content){

		$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		if(isset($wpmchimpa["addon"]) && $this->wpmchimpa_user_status() && $this->wpmchimpa_referral() && $this->wpmchimpa_pagetype_addon()){
			ob_start(); 
			include('includes/bottom_content.php');
			$msg = ob_get_clean();
			return $content . stripslashes( $msg);
		}
		else return $content;
	}
	/**
	 * Fired for each blog when the plugin is activated.
	 *
	 * @since    1.0.0
	 */
	private static function single_activate() {
		
	}

	/**
	 * Fired for each blog when the plugin is deactivated.
	 *
	 * @since    1.0.0
	 */
	private static function single_deactivate() {
		
	}
}
