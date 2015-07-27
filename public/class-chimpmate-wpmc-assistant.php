<?php
/**
 * ChimpMate - WordPress MailChimp Assistant
 *
 * @package   ChimpMate - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @license   GPL-2.0+
 * @link      http://voltroid.com/chimpmate
 * @copyright 2015 Voltroid
 */

/**
 *
 * @package   ChimpMate - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * 
 */
class ChimpMate_WPMC_Assistant {
	/**
	 * @since   1.0.0
	 *
	 * @var      string
	 */
	const VERSION = '1.1.8';

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

	public $wpmchimpa;

	private function __construct() {
		$this->wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'wpmu_new_blog', array( $this, 'activate_new_site' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_action( 'wp_footer', array( $this, 'wpmchimpa_show' ) );
		add_action( 'wp_footer', array( $this, 'wpmchimpa_topbar' ) );
		add_action( 'wp_footer', array( $this, 'wpmchimpa_flipbox' ) );
		add_action( 'wp_head', array( $this, 'wpmchimpa_slide' ) );
		add_action( 'wp_footer', array( $this, 'wpmchimpa_social' ) );
		add_action( 'init', array($this,'register_shortcodes'));
		add_filter( 'comment_form_field_comment', array($this,'wpmchimpa_commentfield' ));
		add_action( 'comment_post', array($this,'wpmchimpa_commentpost' ));

		add_action( 'register_form', array($this,'wpmchimpa_regfield' ));
		add_action( 'user_register',array($this,'wpmchimpa_regpost' ));

		add_action('wp_ajax_wpmchimpa_add_email_ajax',  array( $this, 'wpmchimpa_add_email' ));
		add_action('wp_ajax_nopriv_wpmchimpa_add_email_ajax',  array( $this, 'wpmchimpa_add_email' )); 

		add_action('wp_ajax_wpmchimpa_setcookie_ajax',  array( $this, 'wpmchimpa_setcookie' ));
		add_action('wp_ajax_nopriv_wpmchimpa_setcookie_ajax',  array( $this, 'wpmchimpa_setcookie' ));

		add_filter('the_content', array( $this, 'addon_adder'));

		
		if(isset($this->wpmchimpa["widget"])){
			add_action( 'widgets_init', create_function( '', 'register_widget("ChimpMate_WPMC_Assistant_Widget");' ) );
		}
	}
	public static function wpmchimp_update_db_check(){
		if( !get_option( 'wpmchimpa_version' ) || get_option('wpmchimpa_version') != self::VERSION) {
			update_option('wpmchimpa_version',self::VERSION);
			self::wpmchimp_update_procedure();
		}
	}
	public function wpmchimp_update_procedure(){
		$opt = json_decode(get_option('wpmchimpa_options'),true);
		$ex = array('lite_desktop','lite_tablet','lite_mobile','lite_homepage','lite_page','lite_post','lite_category','lite_search','lite_404error','lite_behave_time','lite_behave_time_inac','lite_behave_scroll','lite_behave_cookie','lite_close_time','lite_close_bck','addon_desktop','addon_tablet','addon_mobile','addon_page','addon_post');
		foreach ($opt as $key => $value) {
			if(!in_array($key, $ex)){
				if(strpos($key,'lite_') === 0){
					$opt['theme']['l0'][$key]=$value;
					unset($opt[$key]);
				}
				else if(strpos($key,'widget_') === 0){
					$opt['theme']['w0'][$key]=$value;
					unset($opt[$key]);
				}
				else if(strpos($key,'addon_') === 0){
					$opt['theme']['a0'][$key]=$value;
					unset($opt[$key]);
				}
			}
		}
		$opt['litebox_theme']=0;
		$opt['widget_theme']=0;
		$opt['addon_theme']=0;
		update_option('wpmchimpa_options',json_encode($opt));
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
		add_option('wpmchimpa_options',$json);

		$curl = curl_init();
			curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_URL => 'http://voltroid.com/chimpmate/api.php',
			    CURLOPT_REFERER => home_url(),
			    CURLOPT_POST => 1
			));
			curl_setopt($curl, CURLOPT_POSTFIELDS, array(
				        'action' => 'subs',
				        'email' => ''
				    ));
			$res=curl_exec($curl);
			curl_close($curl);
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
		$goo_fonts =array();
		$fonts = array("lite_heading_f", "lite_msg_f", "lite_tbox_f", "lite_check_f", "lite_button_f", "lite_status_f", "lite_tag_f", "lite_soc_f", "slider_heading_f", "slider_msg_f", "slider_tbox_f", "slider_check_f", "slider_button_f", "slider_status_f", "slider_tag_f", "slider_soc_f", "widget_msg_f", "widget_tbox_f", "widget_check_f", "widget_button_f", "widget_status_f", "widget_soc_f", "addon_heading_f", "addon_msg_f", "addon_tbox_f", "addon_check_f", "addon_button_f", "addon_status_f", "addon_soc_f");

		foreach ($fonts as $font) {
			switch ($font[0]) {
				case 's':$t=$this->wpmchimpa['slider_theme'];
					break;
				case 'l':$t=$this->wpmchimpa['litebox_theme'];
					break;
				case 'a':$t=$this->wpmchimpa['addon_theme'];
					break;
				case 'w':$t=$this->wpmchimpa['widget_theme'];
					break;
			}
			if (isset($this->wpmchimpa['theme'][$font[0].$t][$font]) && !in_array($this->wpmchimpa['theme'][$font[0].$t][$font], $this->webfont()))array_push($goo_fonts, $this->wpmchimpa['theme'][$font[0].$t][$font]);
		}
		if(!empty($goo_fonts)){
			$goo = implode('|', array_values(array_unique($goo_fonts)));
			wp_register_style($this->plugin_slug . '-googleFonts', '//fonts.googleapis.com/css?family='.$goo, array(), self::VERSION);
            wp_enqueue_style( $this->plugin_slug . '-googleFonts');
		}
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles', WPMCA_PLUGIN_URL. 'public/assets/css/public.css' , array(), self::VERSION );
	}

	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since    1.0.4
	 */
	public function enqueue_scripts() {
		
		
		$opts = $this->wpmchimpa;
		unset($opts['theme'],$opts['api_key']);
		$opts['ajax_url'] = admin_url('admin-ajax.php');
		wp_enqueue_script('jquery');
		wp_enqueue_script( $this->plugin_slug . '-plugin-script', WPMCA_PLUGIN_URL. 'public/assets/js/public.js', array( 'jquery' ), self::VERSION );
		wp_localize_script( $this->plugin_slug . '-plugin-script', 'wpmchimpa', $opts );
	}

public function webfont(){
return array("Georgia, serif","Palatino Linotype, Book Antiqua, Palatino, serif","Times New Roman, Times, serif","Arial, Helvetica, sans-serif","Arial Black, Gadget, sans-serif","Comic Sans MS, cursive, sans-serif","Impact, Charcoal, sans-serif","Lucida Sans Unicode, Lucida Grande, sans-serif","Open Sans, sans-serif","Tahoma, Geneva, sans-serif","Trebuchet MS, Helvetica, sans-serif","Verdana, Geneva, sans-serif","Courier New, Courier, monospace","Lucida Console, Monaco, monospace");
}
	/**
	 * Show Popup
	 * @since    1.0.0
	 */
	public function wpmchimpa_show() {
		
		if(isset($this->wpmchimpa["litebox"])){
			include_once( 'views/public.php' );
		}
}
public function wpmchimpa_slide() {	
	if(isset($this->wpmchimpa["slider"]) && $this->wpmchimpa_pagetype('s') && $this->wpmchimpa_user_status() && $this->wpmchimpa_referral()){
		include_once( 'includes/slide_content.php');
	}
}
public function wpmchimpa_topbar(){
	if(isset($this->wpmchimpa["topbar"]) && $this->wpmchimpa_pagetype('t')) 
		include_once( 'includes/topbar_content.php');
}
public function wpmchimpa_flipbox(){
	if(isset($this->wpmchimpa["flipbox"]) && $this->wpmchimpa_pagetype('f')) 
		include_once( 'includes/flipbox_content.php');
}
public function wpmchimpa_social(){

		$t=array('l1','w1','a1','s1','l8','w8','a8','s8');
	$n=false;

	if(in_array('l'.$this->wpmchimpa['litebox_theme'], $t) && !isset($this->wpmchimpa['theme']['l'.$this->wpmchimpa['litebox_theme']]['lite_dissoc']) && isset($this->wpmchimpa["litebox"])) {
		$n=true;
	}
	else if(in_array('w'.$this->wpmchimpa['widget_theme'], $t) && !isset($this->wpmchimpa['theme']['w'.$this->wpmchimpa['widget_theme']]['widget_dissoc']) && isset($this->wpmchimpa["widget"])) {
		$n=true;
	}
	else if(in_array('a'.$this->wpmchimpa['addon_theme'], $t) && !isset($this->wpmchimpa['theme']['a'.$this->wpmchimpa['addon_theme']]['addon_dissoc']) && isset($this->wpmchimpa["addon"])) {
		$n=true;
	}
	else if(in_array('s'.$this->wpmchimpa['slider_theme'], $t) && !isset($this->wpmchimpa['theme']['s'.$this->wpmchimpa['slider_theme']]['slider_dissoc']) && isset($this->wpmchimpa["slider"])) {
		$n=true;
	}

	if($n){
		if(isset($this->wpmchimpa['fb_api'])){
			?>
			<script>
			window.fbAsyncInit = function() {
			  FB.init({
			  appId      : '<?php echo $this->wpmchimpa["fb_api"];?>',
			cookie : false, xfbml : true, version : 'v2.2'});};(function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
			</script>
			<?php
		}
		if(isset($this->wpmchimpa['gp_api'])){
			?>
			<meta name="google-signin-clientid" content="<?php echo $this->wpmchimpa["gp_api"];?>" />
			<meta name="google-signin-scope" content="profile" /><meta name="google-signin-scope" content="email" /><meta name="google-signin-cookiepolicy" content="single_host_origin" /><script src="https://apis.google.com/js/client:platform.js?onload=render" async defer></script>
			<?php
		}
		if(isset($this->wpmchimpa['ms_api'])){
			?>
			<script type="text/javascript" src="//js.live.net/v5.0/wl.js"></script>
			<script type="text/javascript">
			WL.init({
			    client_id: '<?php echo $this->wpmchimpa["ms_api"];?>',
			    redirect_uri: "<?php echo plugins_url( 'assets/ms-oauth.php', dirname(__FILE__) );?>"
			});
			</script>
			<?php
		}
	}
}

	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors pagetype for popup
	 */
function wpmchimpa_pagetype($e){
	switch ($e) {
		case 'l':
			if(isset($this->wpmchimpa["lite_homepage"]) && is_front_page()) return true;
			else if(isset($this->wpmchimpa["lite_page"]) && is_page()) return true;
			else if(isset($this->wpmchimpa["lite_post"]) && is_single()) return true;
			else if(isset($this->wpmchimpa["lite_category"]) && is_archive()) return true;
			else if(isset($this->wpmchimpa["lite_search"]) && is_search()) return true;
			else if(isset($this->wpmchimpa["lite_404error"]) && is_404()) return true;
			break;
		case 's':
			if(isset($this->wpmchimpa["slider_homepage"]) && is_front_page()) return true;
			else if(isset($this->wpmchimpa["slider_page"]) && is_page()) return true;
			else if(isset($this->wpmchimpa["slider_post"]) && is_single()) return true;
			else if(isset($this->wpmchimpa["slider_category"]) && is_archive()) return true;
			else if(isset($this->wpmchimpa["slider_search"]) && is_search()) return true;
			else if(isset($this->wpmchimpa["slider_404error"]) && is_404()) return true;
			break;	
		case 't':
			if(isset($this->wpmchimpa["topbar_homepage"]) && is_front_page()) return true;
			else if(isset($this->wpmchimpa["topbar_page"]) && is_page()) return true;
			else if(isset($this->wpmchimpa["topbar_post"]) && is_single()) return true;
			else if(isset($this->wpmchimpa["topbar_category"]) && is_archive()) return true;
			else if(isset($this->wpmchimpa["topbar_search"]) && is_search()) return true;
			else if(isset($this->wpmchimpa["topbar_404error"]) && is_404()) return true;
			break;	
		case 'f':
			if(isset($this->wpmchimpa["flipbox_homepage"]) && is_front_page()) return true;
			else if(isset($this->wpmchimpa["flipbox_page"]) && is_page()) return true;
			else if(isset($this->wpmchimpa["flipbox_post"]) && is_single()) return true;
			else if(isset($this->wpmchimpa["flipbox_category"]) && is_archive()) return true;
			else if(isset($this->wpmchimpa["flipbox_search"]) && is_search()) return true;
			else if(isset($this->wpmchimpa["flipbox_404error"]) && is_404()) return true;
			break;	
	}
	return false;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors pagetype for addon
	 */
function wpmchimpa_pagetype_addon(){
	
	if(isset($this->wpmchimpa["addon_page"]) && is_page()) return true;
	else if(isset($this->wpmchimpa["addon_post"]) && is_single()) return true;
	return false;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors login status
	 */
function wpmchimpa_user_status() {
	
	if(!isset($this->wpmchimpa["loggedin"]) && !isset($this->wpmchimpa["notloggedin"])) return false;
	if(!isset($this->wpmchimpa["loggedin"]) && isset($this->wpmchimpa["notloggedin"]) && is_user_logged_in()) return false;
	if(isset($this->wpmchimpa["loggedin"]) && !isset($this->wpmchimpa["notloggedin"]) && !is_user_logged_in()) return false;
	if(is_single() && is_user_logged_in()){
		$comm = get_comments( array('post_id' => get_the_ID(),'user_id' => get_current_user_id()));
		if(!isset($this->wpmchimpa["commented"]) && !isset($this->wpmchimpa["notcommented"])) return false;
		if(!isset($this->wpmchimpa["commented"]) && isset($this->wpmchimpa["notcommented"]) && !empty($comm)) return false;
		if(isset($this->wpmchimpa["commented"]) && !isset($this->wpmchimpa["notcommented"]) && empty($comm)) return false;
	}
	return true;
}
	/**
	 * 
	 * @since    1.0.0
	 * @var boolean visitors referrer
	 */
function wpmchimpa_referral() {
	
	$referrer = $_SERVER["HTTP_REFERER"];
	if(isset($this->wpmchimpa["searchengine"])){
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
	 * @since    1.0.2
	 * 
	 */
	public function wpmchimpa_add_email($a)
	{
		$_POST = stripslashes_deep( $_POST );
		$settings=json_decode(get_option('wpmchimpa_options'),true);
		$api = $settings['api_key'];
		$list = $settings['list_record']['id'];
		if(empty($api) || empty($list)){ if($a == 1)return;die("0");}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { die("Please enter valid email address");}
		$MailChimp = new ChimpMate_WPMC_MailChimp($api);
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
			echo $result['code'];
		}
		else{
			echo 1;
		}
	    if($a == 1)return;
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
	public function addon_adder($content){

		
		if(isset($this->wpmchimpa["addon"]) && $this->wpmchimpa_user_status() && $this->wpmchimpa_referral() && $this->wpmchimpa_pagetype_addon()){
			$tempseek = '[chimpmate';

		    $temppos = strpos($content,$tempseek);
		    if(strpos($content,$tempseek)) return $content;
			ob_start(); 
			include('includes/bottom_content.php');
			$msg = ob_get_clean();
			switch ($this->wpmchimpa["addon_orient"]) {
				case 'top': return stripslashes( $msg) . $content;
				case 'mid':
						if( substr_count(strtolower($content), '</p>')>=2 ) {
							$sch = "</p>";
							$content = str_replace("</P>", $sch, $content);
							$arr = explode($sch, $content);                 
							$nn = 0; $mm = strlen($content)/2;
							for($i=0;$i<count($arr);$i++) {
						        $nn += strlen($arr[$i]) + 4;
						        if($nn>$mm) {
					                if( ($mm - ($nn - strlen($arr[$i]))) > ($nn - $mm) && $i+1<count($arr) ) {
					                    $arr[$i+1] = stripslashes( $msg).$arr[$i+1];                                                       
					                } else {
					                    $arr[$i] = stripslashes( $msg).$arr[$i];
					                }
					                break;
						        }
							}
							return implode($sch, $arr);
						}
					break;
				case 'bot':return $content . stripslashes( $msg);
			}
			return $content . stripslashes( $msg);
		}
		return $content;
	}
function register_shortcodes(){
	if(isset($this->wpmchimpa["addon_scode"]))
   		add_shortcode('chimpmate', array($this,'addon_scode'));
}
function addon_scode($atts, $content = null) {
	if($this->wpmchimpa_user_status() && $this->wpmchimpa_referral()){
		ob_start(); 
		include('includes/bottom_content.php');
		$msg = ob_get_clean();
		return stripslashes( $msg);
	}
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
	public function getIcon($icon,$size='250',$color='#000',$dim='512'){
		if(!isset($icon))return '';
		$str='<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="'.$size.'px" height="'.$size.'px" viewBox="0 0 '.$dim.' '.$dim.'" enable-background="new 0 0 '.$dim.' '.$dim.'" xml:space="preserve">';
		switch ($icon) {
			case 'fb':$str.='<g id="_x23_020201ff"><path fill="'.$color.'" d="M223.22,71.227c16.066-15.298,38.918-20.465,60.475-21.109c22.799-0.205,45.589-0.081,68.388-0.072c0.09,24.051,0.098,48.111-0.009,72.161c-14.734-0.026-29.478,0.036-44.212-0.026c-9.343-0.582-18.937,6.5-20.635,15.762c-0.224,16.093-0.081,32.195-0.072,48.289c21.61,0.089,43.22-0.027,64.829,0.054c-1.582,23.281-4.47,46.456-7.858,69.541c-19.088,0.179-38.187-0.018-57.274,0.099c-0.17,68.665,0.089,137.33-0.134,205.995c-28.352,0.116-56.721-0.054-85.072,0.08c-0.537-68.674,0.044-137.383-0.295-206.066c-13.832-0.144-27.672,0.099-41.503-0.116c0.053-23.085,0.018-46.169,0.026-69.246c13.822-0.169,27.654,0.036,41.477-0.098c0.42-22.442-0.421-44.91,0.438-67.333C203.175,101.384,209.943,83.493,223.22,71.227z"/></g>';
				break;
			case 'gp':$str.='<path d="M42.691 170.261c0-61.716 46.356-110.561 111.903-110.561 18.227 0 29.635 2.416 38.471 3.645 4.157 1.219 8.325 1.219 12.482 1.219l64.492-0.604c1.075 0 1.587 0.604 1.587 1.198 0 3.103-1.587 7.342-3.656 7.342l-48.363 7.353c16.138 14.653 24.965 40.929 24.965 64.727 0 60.477-40.048 95.908-93.635 105.063-6.768 1.239-16.138 3.072-25.487 7.342-20.838 6.717-40.080 16.497-40.080 25.026 0 11.008 38.502 17.122 73.871 22.599 67.645 9.165 109.281 20.798 109.281 65.382 0 50.688-55.685 89.784-139.417 89.784-63.468 0-109.261-20.142-109.261-58.644 0-28.058 21.35-41.543 80.087-77.599-16.128-4.25-32.225-10.353-40.571-15.237-6.215-3.676-9.871-10.404-9.871-23.204 0-4.905 1.075-6.738 4.157-8.571 19.742-9.144 40.571-18.934 56.719-26.256-35.369-6.113-67.666-36.014-67.666-79.431v-0.573zM141.589 448.809c44.728 0 83.722-24.474 84.265-59.914 0-39.68-43.714-48.22-104.581-59.218-6.789-1.219-10.404-1.219-16.138 2.437-18.176 12.841-40.059 32.993-40.059 62.3 0 34.202 32.256 54.395 75.961 54.395h0.553zM142.602 240.496c30.69 0 57.744-26.245 57.744-87.982 0-47.012-18.186-82.442-52.5-82.442-40.622 0-60.365 41.544-60.365 92.242 0 48.261 24.965 78.183 54.661 78.183h0.461z" fill="'.$color.'"/><path d="M299.684 134.738h192.492v27.525h-192.491v-27.525z" fill="'.$color.'"/><path d="M382.167 52.224h27.515v192.532h-27.515v-192.532z" fill="'.$color.'"/>';			
				break;
			case 'ms':$str.='<path d="M0.175,256L0,99.963l192-26.072V256H0.175z M224,69.241L479.936,32v224H224V69.241z M479.999,288l-0.063,224L224,475.992 V288H479.999z M192,471.918L0.156,445.621L0.146,288H192V471.918z" fill="'.$color.'"/>';
				break;
			case 'm1':$str.='<path fill="'.$color.'" d="M448,64H64C28.656,64,0,92.656,0,128v256c0,35.344,28.656,64,64,64h384c35.344,0,64-28.656,64-64V128 C512,92.656,483.344,64,448,64z M342.656,234.781l135.469-116.094c0.938,3,1.875,6,1.875,9.313v256c0,2.219-0.844,4.188-1.281,6.281 L342.656,234.781z M448,96c2.125,0,4,0.813,6,1.219L256,266.938L58,97.219C60,96.813,61.875,96,64,96H448z M33.266,390.25 C32.828,388.156,32,386.219,32,384V128c0-3.313,0.953-6.313,1.891-9.313L169.313,234.75L33.266,390.25z M64,416 c-3.234,0-6.172-0.938-9.125-1.844l138.75-158.563l51.969,44.531C248.578,302.719,252.297,304,256,304s7.422-1.281,10.406-3.875 l51.969-44.531l138.75,158.563C454.188,415.063,451.25,416,448,416H64z"/>';
				break;
			case 'm2':$str.='<path fill="'.$color.'" d="M512,384c0,11.219-3.156,21.625-8.219,30.781L342.125,233.906L502.031,94c6.219,9.875,9.969,21.469,9.969,34V384z M256,266.75L478.5,72.063c-9.125-5-19.406-8.063-30.5-8.063H64c-11.109,0-21.391,3.063-30.484,8.063L256,266.75z M318.031,254.969 l-51.5,45.094C263.516,302.688,259.766,304,256,304s-7.516-1.313-10.531-3.938l-51.516-45.094L30.25,438.156 C40.063,444.313,51.563,448,64,448h384c12.438,0,23.938-3.688,33.75-9.844L318.031,254.969z M9.969,94C3.75,103.875,0,115.469,0,128 v256c0,11.219,3.141,21.625,8.219,30.781l161.641-180.906L9.969,94z"/>';
				break;
			case 'm3':$str.='<g fill="'.$color.'"><path d="M24.408,0.597L0.706,13.026c-0.975,0.511-0.935,1.26,0.088,1.665l3.026,1.196c1.021,0.404,2.569,0.185,3.437-0.494	L20.399,5.03c0.864-0.681,0.957-0.58,0.206,0.224l-10.39,11.123c-0.753,0.801-0.529,1.783,0.495,2.182l0.354,0.139 c1.024,0.396,2.698,1.062,3.717,1.478l3.356,1.366c1.02,0.415,1.854,0.759,1.854,0.765c0,0.006,0.006,0.025,0.011,0.026 c0.005,0.002,0.246-0.864,0.534-1.926L25.654,1.6C25.942,0.537,25.383,0.087,24.408,0.597z"/><path d="M10.324,19.82l-2.322-0.95c-1.018-0.417-1.506,0.072-1.084,1.089c0.001,0,2.156,5.194,2.096,5.377 c-0.062,0.182,2.068-3.082,2.068-3.082C11.684,21.332,11.342,20.237,10.324,19.82z"/></g>';
				break;
			case 'm4':$str.='<path fill="'.$color.'" d="M332.797,13.699c-1.489-1.306-3.608-1.609-5.404-0.776L2.893,163.695c-1.747,0.812-2.872,2.555-2.893,4.481 s1.067,3.693,2.797,4.542l91.833,45.068c1.684,0.827,3.692,0.64,5.196-0.484l89.287-66.734l-70.094,72.1 c-1,1.029-1.51,2.438-1.4,3.868l6.979,90.889c0.155,2.014,1.505,3.736,3.424,4.367c0.513,0.168,1.04,0.25,1.561,0.25 c1.429,0,2.819-0.613,3.786-1.733l48.742-56.482l60.255,28.79c1.308,0.625,2.822,0.651,4.151,0.073 c1.329-0.579,2.341-1.705,2.775-3.087L334.27,18.956C334.864,17.066,334.285,15.005,332.797,13.699z"/>';
				break;
			case 'm5':$str.='<g fill="'.$color.'"><path d="M306.001,325.988c90.563-0.005,123.147-90.682,131.679-165.167C448.188,69.06,404.799,0,306.001,0 c-98.782,0-142.195,69.055-131.679,160.82C182.862,235.304,215.436,325.995,306.001,325.988z"/><path d="M550.981,541.908c-0.99-28.904-4.377-57.939-9.421-86.393c-6.111-34.469-13.889-85.002-43.983-107.465 c-17.404-12.988-39.941-17.249-59.865-25.081c-9.697-3.81-18.384-7.594-26.537-11.901c-27.518,30.176-63.4,45.962-105.186,45.964 c-41.774,0-77.652-15.786-105.167-45.964c-8.153,4.308-16.84,8.093-26.537,11.901c-19.924,7.832-42.461,12.092-59.863,25.081 c-30.096,22.463-37.873,72.996-43.983,107.465c-5.045,28.454-8.433,57.489-9.422,86.393	c-0.766,22.387,10.288,25.525,29.017,32.284c23.453,8.458,47.666,14.737,72.041,19.884c47.077,9.941,95.603,17.582,143.921,17.924 c48.318-0.343,96.844-7.983,143.921-17.924c24.375-5.145,48.59-11.424,72.041-19.884	C540.694,567.435,551.747,564.297,550.981,541.908z"/></g>';
				break;
			case 'm6':$str.='<path fill="'.$color.'" d="M0,53.007v239.765h345.779V53.007H0z M310.717,113.122l-137.828,79.281L35.063,113.122 c-7.046-4.055-9.477-13.049-5.418-20.094c4.054-7.045,13.05-9.473,20.09-5.418l123.154,70.836l123.156-70.836 c7.043-4.056,16.035-1.627,20.091,5.418C320.192,100.073,317.762,109.067,310.717,113.122z"/>';
				break;
			case 'lock1':$str.='<path fill="'.$color.'" d="M417.566,209.83h-9.484v-44.388c0-82.099-65.151-150.681-146.582-152.145c-2.224-0.04-6.671-0.04-8.895,0  c-81.432,1.464-146.582,70.046-146.582,152.145v44.388h-9.485C81.922,209.83,70,224.912,70,243.539v222.632  C70,484.777,81.922,500,96.539,500h321.028c14.617,0,26.539-15.223,26.539-33.829V243.539  C444.105,224.912,432.184,209.83,417.566,209.83z M287.129,354.629v67.27c0,7.704-6.449,14.222-14.159,14.222h-31.834  c-7.71,0-14.159-6.518-14.159-14.222v-67.27c-7.477-7.361-11.83-17.537-11.83-28.795c0-21.334,16.491-39.666,37.459-40.512  c2.222-0.09,6.673-0.09,8.895,0c20.968,0.846,37.459,19.178,37.459,40.512C298.959,337.092,294.605,347.268,287.129,354.629z   M345.572,209.83H261.5h-8.895h-84.072v-44.388c0-48.905,39.744-89.342,88.519-89.342s88.52,40.437,88.52,89.342V209.83z"/>';
				break;
			default:return '';
		}
		$str.='</svg>';
		return "url('data:image/svg+xml;base64,".base64_encode($str)."')";
	}

public function wpmchimpa_commentfield( $comment_field ) {
	if(isset($this->wpmchimpa['usyn_com']) && isset($this->wpmchimpa['usyn_comp']) && $this->wpmchimpa['usyn_comp']=='1')
    	return $comment_field.'<label><input type="checkbox" name="wpmchimpa" value="1">'.(isset($this->wpmchimpa['usyn_compt'])?$this->wpmchimpa['usyn_compt']:'Subscribe to Newsletters').'</label>';
    return $comment_field;
}
public function wpmchimpa_commentpost($comment_ID){
	if(isset($this->wpmchimpa['usyn_com']) && isset($this->wpmchimpa['usyn_comp'])){
		if(($this->wpmchimpa['usyn_comp']=='1' && isset ( $_POST['wpmchimpa'] )) || ($this->wpmchimpa['usyn_comp']=='0')){
			if(is_user_logged_in()){
				global $current_user;
	  			get_currentuserinfo();
	  			$_POST['email']=$current_user->user_email;
	  			$_POST['name']=$current_user->user_firstname .' '. $current_user->user_lastname;
			}
			else
				$_POST['name']=$_POST['author'];
			$this->wpmchimpa_add_email(1);
		}
	}
}
public function wpmchimpa_regfield(){
	if(isset($this->wpmchimpa['usyn_reg']) && isset($this->wpmchimpa['usyn_regp']) && $this->wpmchimpa['usyn_regp']=='1')
    	echo '<label><input type="checkbox" name="wpmchimpa" value="1">'.(isset($this->wpmchimpa['usyn_regpt'])?$this->wpmchimpa['usyn_regpt']:'Subscribe to Newsletters').'</label>';
}
public function wpmchimpa_regpost(){
	if(isset($this->wpmchimpa['usyn_reg']) && isset($this->wpmchimpa['usyn_regp'])){
		$current_user = wp_get_current_user();
		$roles = $current_user->roles;
		if(($this->wpmchimpa['usyn_regp']=='1' && isset ( $_POST['wpmchimpa'] )) || ($this->wpmchimpa['usyn_regp']=='0' && in_array($roles[0], $this->wpmchimpa['usync_role']))){
			$_POST['email']=$_POST['user_email'];
			$this->wpmchimpa_add_email(1);
		}
	}
}

	public function extrascript($t) {
		if(!isset($this->exscr[$t])){
			$this->exscr[$t] = 1;
			switch ($t) {
				case 0:?>
<script type="text/javascript">
jQuery(function ($) {
  wpmcpre0 = function (f){
  	$(f).find('[wpmcerr="gen"]').html('');
  	$(f).find('input[type="text"]').each(function(){
  		$(f).find('[wpmcerr="gen"]').html('');
  		err = wpmcvalid($(this).attr('wpmcfield'),$(this).attr('wpmcreq'),this.value);
  		if(err){
  			$(this).addClass('wpmcerror');
  			if($(this).attr('wpmcerrs') == 'true'){
  				$(this).addClass('wpmcerrora');
  				$this = $(this);
			  	setTimeout(function() {
			  		$this.removeClass('wpmcerrora');
			  	}, 500);
  			}
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html(err);
  		}
  		else{
  			$(this).removeClass('wpmcerror');
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html('');
  		}
  	});
  	if($(f).find('.wpmcerror').length){
	  	$('.wpmchimpa-mainc').addClass('wpmcerrora');
	  	setTimeout(function() {
	  		$('.wpmchimpa-mainc').removeClass('wpmcerrora');
	  	}, 500);
	  	return false;
  	}
  	$(f).find('.wpmchimpa-signal').fadeIn();
  	return true;
  }
  wpmcpost0 =  function (f,d){
  	$(f).find('.wpmchimpa-signal').hide();
  	if(d == '1'){
  		if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();return false;}
  		if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
  			$(f).find('form').fadeOut(function () {
  				$(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(wpmchimpa.suc_msg);
  			});
			return false;
		}
  	}
  	if(d == 214)$(f).find('[wpmcerr="gen"]').html(errmsg[2]);
  	else $(f).find('[wpmcerr="gen"]').html(errmsg[3]);
  }
});
</script>
<?php
break;
				case 1:
?>
<script type="text/javascript">
jQuery(function ($) {
  wpmcpre1 = function (f){
  	$(f).find('[wpmcerr="gen"]').html('');
  	$(f).find('input[type="text"]').each(function(){
  		$(f).find('[wpmcerr="gen"]').html('');
  		err = wpmcvalid($(this).attr('wpmcfield'),$(this).attr('wpmcreq'),this.value);
  		if(err){
  			$(this).addClass('wpmcerror');
  			if($(this).attr('wpmcerrs') == 'true'){
  				$(this).addClass('wpmcerrora');
  				$this = $(this);
			  	setTimeout(function() {
			  		$this.removeClass('wpmcerrora');
			  	}, 500);
  			}
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html(err);
  		}
  		else{
  			$(this).removeClass('wpmcerror');
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html('');
  		}
  	});
  	if($(f).find('.wpmcerror').length){
	  	$('.wpmchimpa-mainc').addClass('wpmcerrora');
	  	setTimeout(function() {
	  		$('.wpmchimpa-mainc').removeClass('wpmcerrora');
	  	}, 500);
	  	return false;
  	}
  	$(f).find('.wpmchimpa-signal').fadeIn();
  	return true;
  }
  wpmcpost1 =  function (f,d){
  	$(f).find('.wpmchimpa-signal').fadeOut();
  	if(d == '1'){
  		if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();return false;}
  		if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
  			$(f).find('form').fadeOut(function () {
  				$(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(wpmchimpa.suc_msg);
  			});
			return false;
		}
  	}
  	if(d == 214)$(f).find('[wpmcerr="gen"]').html(errmsg[2]);
  	else $(f).find('[wpmcerr="gen"]').html(errmsg[3]);
  }
});
</script>
<?php
					break;
				case 2:?>
<script type="text/javascript">
jQuery(function ($) {
  wpmcpre0 = function (f){
  	$(f).find('[wpmcerr="gen"]').html('');
  	$(f).find('input[type="text"]').each(function(){
  		$(f).find('[wpmcerr="gen"]').html('');
  		err = wpmcvalid($(this).attr('wpmcfield'),$(this).attr('wpmcreq'),this.value);
  		if(err){
  			$(this).addClass('wpmcerror');
  			if($(this).attr('wpmcerrs') == 'true'){
  				$this = $(this);
  				$this.addClass('wpmcerrora');
			  	setTimeout(function() {
			  		$this.removeClass('wpmcerrora');
			  	}, 500);
  			}
  			if($(this).attr('wpmcerrs') == 'par'){
  				$this = $(this).parent();
  				$this.addClass('wpmcerrora');
			  	setTimeout(function() {
			  		$this.removeClass('wpmcerrora');
			  	}, 500);
  			}
  			if($(this).attr('wpmcerrs') == 'formbox'){
  				$this = $(this).closest('.formbox');
  				$this.addClass('wpmcerrora');
			  	setTimeout(function() {
			  		$this.removeClass('wpmcerrora');
			  	}, 500);
  			}
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html(err);
  		}
  		else{
  			$(this).removeClass('wpmcerror');
  			$(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html('');
  		}
  	});
  	if($(f).find('.wpmcerror').length){
	  	$('.wpmchimpa-mainc').addClass('wpmcerrora');
	  	setTimeout(function() {
	  		$('.wpmchimpa-mainc').removeClass('wpmcerrora');
	  	}, 500);
	  	return false;
  	}
  	$(f).find('.wpmchimpa-signal').addClass('signalshow');
  	return true;
  }
  wpmcpost0 =  function (f,d){
  	$(f).find('.wpmchimpa-signal').removeClass('signalshow');
  	if(d == 1){
  		if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();}
  		else if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
  			$(f).find('form').fadeOut(function () {
  				$(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(wpmchimpa.suc_msg);
  			});
		}
		return false;
  	}
  	if(d == 214){
  		if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();}
  		else if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
  			$(f).find('form').fadeOut(function () {
  				$(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(errmsg[2]);
  			});
		}
  	}
  	else if(d == 0){
  		$(f).find('[wpmcerr="gen"]').html(errmsg[4]);
  	}
  	else $(f).find('[wpmcerr="gen"]').html(errmsg[3]);
  }
});
</script>
<?php
break;
				default:
					break;
			}
		}
	}
}

