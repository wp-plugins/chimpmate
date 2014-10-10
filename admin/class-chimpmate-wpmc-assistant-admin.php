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
class ChimipMate_WPMC_Assistant_Admin {

	/**
	 * Instance of this class.
	 *
	 * @since    1.0.0
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Slug of the plugin screen.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_screen_hook_suffix = null;

	/**
	 * @since     1.0.0
	 */
	private function __construct() {

		/*
		 * @TODO :
		 *
		 * - Uncomment following lines if the admin class should only be available for super admins
		 */
		/* if( ! is_super_admin() ) {
			return;
		} */

		/*
		 * Call $plugin_slug from public plugin class.
		 *
		 * @TODO:
		 *
		 */
		$plugin = ChimipMate_WPMC_Assistant::get_instance();
		$this->plugin_slug = $plugin->get_plugin_slug();

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		
		add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );

		$plugin_basename = plugin_basename( plugin_dir_path( realpath( dirname( __FILE__ ) ) ) . $this->plugin_slug . '.php' );
		add_filter( 'plugin_action_links_' . $plugin_basename, array( $this, 'add_action_links' ) );

		add_action( 'admin_head', array( $this,'admin_css' ));
		add_action( 'admin_head', array( $this,'admin_goog_load' ));
		
		add_action('wp_ajax_wpmchimpa_us_ajax', array( $this, 'wpmchimpa_update_setting' ) );
		add_action('wp_ajax_wpmchimpa_secure', array( $this, 'wpmchimpa_secure' ) );

		add_action('wp_ajax_wpmchimpa_load_list', array( $this, 'wpmchimpa_load_list' ) );
 		add_action('wp_ajax_wpmchimpa_sel_list', array( $this, 'wpmchimpa_sel_list' ) );
	
 		add_filter( 'wp_default_editor', create_function('', 'return "tinymce";') );
	}

	/**
	 * ajax call to update settings
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_update_setting()
	{
		$_POST = stripslashes_deep( $_POST );
		$settings_array = array_filter($_POST);
		$list_options = json_decode(str_replace('\"', '"', $settings_array['list_record']));
		unset($settings_array['list_record']);
		unset($settings_array['action']);
		$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
		$up=0;
		if(isset($settings_array["get_email_update"])){
			if(!isset($wpmchimpa["get_email_update"]) || (isset($wpmchimpa["get_email_update"]) && $settings_array["email_update"] != $wpmchimpa["email_update"])){
				$up=1;
			}
		}
		else{
			if(isset($wpmchimpa["get_email_update"])){
				$up=2;
			}
		}
		if($up>0){
			$curl = curl_init();
			curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_URL => 'http://voltroid.com/chimpmate/api.php',
			    CURLOPT_REFERER => home_url(),
			    CURLOPT_POST => 1
			));
			if($up==1)
				curl_setopt($curl, CURLOPT_POSTFIELDS, array(
				        'action' => 'subs',
				        'email' => $settings_array["email_update"]
				    ));
			else
				curl_setopt($curl, CURLOPT_POSTFIELDS, array(
				        'action' => 'unsubs'
				    ));
			$res=curl_exec($curl);
			curl_close($curl);
		}
		$settings_array['list_record']= $list_options;
		$json = json_encode($settings_array);
		update_option('wpmchimpa_options',$json);
		print_r('1');
		die();
	}
	/**
	 * ajax call for 1 Click Backup and Restore
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_secure(){
		if ( !is_super_admin()) die();
		if($_REQUEST['q']=='backup'){
			$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
			header('Content-disposition: attachment; filename=ChimpMate_Backup-'.date('Y-m-d H:i:s').'.json');
			header('Content-Type: application/json');
			echo json_encode($wpmchimpa);
		}
		else if ($_REQUEST['q'] == 'restore'){
				$json = json_encode($_REQUEST['data']);
				update_option('wpmchimpa_options',$json);
		}
		else if ($_REQUEST['q'] == 'reset'){
			$json=file_get_contents(WPMCA_PLUGIN_PATH.'src/default.json');
				update_option('wpmchimpa_options',$json);
		}
		die();
	}
	/**
	 * ajax call to load list
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_load_list(){
		$_POST = stripslashes_deep( $_POST );
		$api = $_POST['api_key'];
		$MailChimp = new \WPMChimpA\MailChimp($api);
		$result=$MailChimp->call('lists/list');
	    if($result['total'] == 0){
	   		$lists =array("stat" => "0");
	    }
	   else if($result['total'] == 1){
			$list=$result['data']['0']['id'];
			$groups = json_decode($this->retrieve_groups($list,$MailChimp));
			$lists =array("stat" => "1",
						'id' => $list,
						'list_name' => $result['data']['0']['name'],
						'groups' => $groups
						);
	   }
	   else{
	   		$list = array();
	   		foreach($result['data'] as $mclist){
					array_push($list, array(
							"id" => $mclist['id'],
							"name" => $mclist['name']));
			}
			$lists =array("stat" => "2", 
				"lists" => $list);
	   }
	   print_r(json_encode($lists));
	    die();
	}
	/**
	 * Ajax call to retrieve groups
	 * @since    1.0.0
	 * 
	 */
	function retrieve_groups($list,$MailChimp){
		$groups_result = $MailChimp->call('lists/interest-groupings', array(
	                'id'=> $list));
		$groups = array();
		foreach($groups_result as $grouping){
			$g = array();
			$g['id'] = $grouping['id'];
			$g['group_name'] = $grouping['name'];
			$s = array();
			foreach($grouping['groups'] as $group){
				$t['id']=$group['id'];
				$t['gname']=$group['name'];
				array_push($s, $t);
			}
			$g['groups'] = $s;
			array_push($groups,$g);
		}
		return json_encode($groups);
	}
	/**
	 * Ajax call to select list
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_sel_list(){
		$_POST = stripslashes_deep( $_POST );
		$api = $_POST['api_key'];
		$list= $_POST['sel_list'];
		$MailChimp = new \WPMChimpA\MailChimp($api);
		$groups = json_decode($this->retrieve_groups($list,$MailChimp));
		$result=$MailChimp->call('lists/list',
			array("filters" => array("list_id" => $list)));
		$lists =array("stat" => "1",
						'id' => $list,
						'list_name' => $result['data']['0']['name'],
						'groups' => $groups
						);
		print_r(json_encode($lists));
	    die();
	}
	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Register and enqueue admin-specific style sheet.
	 * @since     1.0.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_styles() {

		if ( ! isset( $this->plugin_screen_hook_suffix ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( $this->plugin_screen_hook_suffix == $screen->id ) {
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_style( $this->plugin_slug .'-admin-styles', plugins_url( 'assets/css/admin.php', __FILE__ ), array(), ChimipMate_WPMC_Assistant::VERSION );
		}

	}

	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since     1.0.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_scripts() {

		if ( ! isset( $this->plugin_screen_hook_suffix ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( $this->plugin_screen_hook_suffix == $screen->id ) {

			$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
			$wpmchimpa['plugin_url']=WPMCA_PLUGIN_URL;
			$wpmchimpa['countries']=json_decode(file_get_contents(WPMCA_PLUGIN_URL.'src/countries.json'),true);
			$wpmchimpa['goog_fonts']=json_decode(file_get_contents(WPMCA_PLUGIN_URL.'src/google_fonts.json'),true);
			wp_enqueue_script('jquery');
			wp_enqueue_script( $this->plugin_slug . '-admin-script', plugins_url( 'assets/js/admin.php', __FILE__ ), array( 'jquery','wp-color-picker' ), ChimipMate_WPMC_Assistant::VERSION );
			wp_localize_script( $this->plugin_slug . '-admin-script',  'wpmchimpa_admin_script', array( 'ajaxurl' =>admin_url('admin-ajax.php')));
			wp_localize_script( $this->plugin_slug . '-admin-script', 'wpmchimpa', $wpmchimpa );
			wp_enqueue_script( $this->plugin_slug . '-admin-script1', 'http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', ChimipMate_WPMC_Assistant::VERSION );
			wp_enqueue_script( $this->plugin_slug . '-admin-script2', 'https://www.google.com/jsapi', ChimipMate_WPMC_Assistant::VERSION );
			
		}

	}
	/**
	 * voltroid admin panel icon
	 * @since    1.0.0
	 * 
	 */
public function admin_css() {
		?>
<style>

@font-face {
  font-family: "vapanel_fonts";
  src:url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.eot");
  src:url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.eot?#iefix") format("embedded-opentype"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.woff") format("woff"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.ttf") format("truetype"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.svg#vapanel_fonts") format("svg");
  font-weight: normal;
  font-style: normal;
}
#toplevel_page_chimpmate .wp-menu-image::before{
	content :'\c032';
	font-family: "vapanel_fonts"!important;
	font-size:17px;
}

</style>

		<?php }
	
	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */
	public function add_plugin_admin_menu() {

		$this->plugin_screen_hook_suffix = add_menu_page(
			__( 'ChimpMate - WP MailChimp Assistant', $this->plugin_slug ),
			__( 'ChimpMate', $this->plugin_slug ),
			'manage_options',
			$this->plugin_slug,
			array( $this, 'display_plugin_admin_page' ),
			'none' , 85
		);
	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	public function display_plugin_admin_page() {
		
		include_once( 'views/admin.php' );
	}
	public function admin_goog_load(){
if ( ! isset( $this->plugin_screen_hook_suffix ) ) {return;} ?>
<script type="text/javascript">      
	google.load("visualization", "1", {packages:["corechart"]});
 </script>
	<?php }
	/**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	public function add_action_links( $links ) {

		return array_merge(
			array(
				'settings' => '<a href="' . admin_url( 'admin.php?page=' . $this->plugin_slug ) . '">' . __( 'Settings', $this->plugin_slug ) . '</a>'
			),
			$links
		);

	}

}
