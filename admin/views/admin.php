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

?>
<div class="wrap wpmca_home">
    <div class="wpmca_header">
      <div class="h_left">
          <div class="h_container l h_left">
              <div class="wpmca_logo"></div>
          </div>
          <div class="h_container h_right">
            <div class="button_cont">
              <button class="wpmca_button button_header blue material-design" id="sup_button">support</button>
              <button class="wpmca_button button_header blue material-design" id="faq_button">faq</button>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="donate_form" style="display:inline-block">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="jpolachan@gmail.com">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="Voltroid ChimpMate - WordPress MailChimp Assistant">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                <button class="wpmca_button button_header green material-design wpmchimpa_donate">donate</button>
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" style="display:none">
              </form>
            </div>
            
          </div>
      </div>
      <div class="h_right">
        <div class="h_left wpmc_social">
          <div class="wpmc_soc_cont fb">
            <a href="https://www.facebook.com/Voltroid"><div class="wpmc_socioicon"></div></a>
            <div class="wp_likebox">
              <div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=174296672696220&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-like" data-href="https://www.facebook.com/Voltroid" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
            </div>
          </div>
          <div class="wpmc_soc_cont tt">
            <a href="https://twitter.com/Voltroid"><div class="wpmc_socioicon"></div></a>
            <div class="wp_likebox" style="margin-left: -7px;">
              <a href="https://twitter.com/Voltroid" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true"></a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
          </div>
          <div class="wpmc_soc_cont gp">
            <a href="https://plus.google.com/+VoltroidInc"><div class="wpmc_socioicon"></div></a>
            <div class="wp_likebox" style="margin-left: -15px;">
              <script src="https://apis.google.com/js/platform.js" async defer></script>
              <div class="g-follow" data-annotation="none" data-height="20" data-width="60" data-href="https://plus.google.com/+VoltroidInc" data-rel="publisher"></div></div>
          </div>
        </div>
        <div class="header_voltriod h_right">
            <span class="voltroid"></span>
            <span class="apanel"></span>
            <div class="vlogo">
            </div>
         </div>
      </div>
    </div> 
    <div class="wpmca_toolbar">
        <div class="wpmca_tabs">
            <ul>
                <li class="tabitem active material-design"><a href="#general" data-title="general">GENARAL</a></li>
                <li class="tabitem material-design"><a href="#lightbox" data-title="lightbox">LIGHTBOX</a></li>
                <li class="tabitem material-design"><a href="#widget" data-title="widget">WIDGET</a></li>
                <li class="tabitem material-design"><a href="#addon" data-title="addon">ADD-ON</a></li>
                <li class="tabitem material-design"><a href="#statistics" data-title="statistics">STATISTICS</a></li>
                <li class="tabitem material-design"><a href="#advanced" data-title="advanced">ADVANCED</a></li>
            </ul>
        </div>
            <button id="wpmca_update" class="wpmca_button red material-design">Update Options</button>
            <div class="wpcmaloading_container">
                <svg class="wpmcaspinner" width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                   <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                </svg>
                <div class="wpmca_status">
                </div>                
            </div>
    </div>  

        <div class="wpmca_menu_box">
			<div class="wpmca_menu_icon"></div>
			<div class="wpmca_menu_title">GENERAL</div>
		    <ul class="wpmca_menu_list">
		      <li><a href="#general" data-title="general">GENERAL</a></li>
		      <li><a href="#lightbox" data-title="lightbox">LIGHTBOX</a></li>
		      <li><a href="#widget" data-title="widget">WIDGET</a></li>
		      <li><a href="#addon" data-title="add-on">ADD-ON</a></li>
		      <li><a href="#statistics" data-title="statistics">STATISTICS</a></li>
		      <li><a href="#advanced" data-title="advanced">ADVANCED</a></li>
	    	</ul>
	    </div>
<form id="wpmca_form">
<input type="hidden" name="action" id="wpmcaaction" value="wpmchimpa_add_email_ajax"/>
<?php $wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);?>
    <div class="wpmca_content">
     
        <div id="general" class="wpmca_box show">
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Connection Settings</h2>
                </div>
              
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" id="api_key" name="api_key" required<?php if(isset($wpmchimpa["api_key"]))echo ' value="'.$wpmchimpa["api_key"].'"';?>>
                  <span class="wpmcahint" data-hint="Enter your API Key"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>API Key</label>
                </div>
                <div class="wpmca_group"> 
                  <div class="wpmcapara hinted">Click <a href="https://admin.mailchimp.com/account/api/" target="_blank">here</a> to get API key or Sign up <a href="http://eepurl.com/4lavL">here</a></div>
                </div>
                <div class="wpmca_group"> 
                    <button class="wpmca_button green material-design" class="item_button" id="wpmca_load_list">Load List</button>
                </div>
                <div class="wpmca_group p1" id="list_result">
                    <input type="hidden" name="list_record" id="wpmca_list_record"<?php if(isset($wpmchimpa["list_record"])) echo " value='".json_encode($wpmchimpa["list_record"])."'";?>/>
                    <div class="list_load_result">
                      <?php if(isset($wpmchimpa["list_record"])) {
                         echo 'MailChimp List Name<span class="bulletted">'.$wpmchimpa["list_record"]['list_name'].'</span>';
                         if(isset($wpmchimpa["list_record"]['groups'])) {
                            echo 'Groups in MailChimp List';
                            foreach($wpmchimpa["list_record"]['groups'] as $grouping){
                               echo '<span class="wpmcapara p1">'.$grouping['group_name'].'</span>'; 
                               foreach($grouping['groups'] as $group)
                                    echo '<span class="bulletted">'.$group['gname'].'</span>';
                            }}}
                        ?>
                    </div>
                </div>
                
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Other Options</h2>
                </div>
                 <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input type="checkbox" id="opt-in" name="opt_in" value="1" class="wpmcatoggle" <?php if(isset($wpmchimpa["opt_in"])) echo "checked";?>/>
                        <label for="opt-in">Double Opt-in Process</label>
                    </div>
                    <span class="wpmcahint" data-hint="Email Confirmation Message"></span>
                </div>
                 <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input type="checkbox" id="namebox" name="namebox" value="1" class="wpmcatoggle" <?php if(isset($wpmchimpa["namebox"])) echo "checked";?>/>
                        <label for="namebox">Name Box</label>
                    </div>
                    <span class="wpmcahint" data-hint="Get name of subscribers along with email address"></span>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Labels</h2>
                    <span class="wpmcahint headhint" data-hint="Set Text Box Labels"></span>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="labelnb" required<?php if(isset($wpmchimpa["labelnb"]))echo ' value="'.$wpmchimpa["labelnb"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Name Box Label</label>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="labeleb" required<?php if(isset($wpmchimpa["labeleb"]))echo ' value="'.$wpmchimpa["labeleb"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Email Box Label</label>
                </div>
                <div class="itemhead">
                    <h2>Error Messages</h2>
                    <span class="wpmcahint headhint" data-hint="Set Respective Error Messages"></span>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="errorfe" required<?php if(isset($wpmchimpa["errorfe"]))echo ' value="'.$wpmchimpa["errorfe"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Invalid Entry</label>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="erroras" required<?php if(isset($wpmchimpa["erroras"]))echo ' value="'.$wpmchimpa["erroras"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Already subscribed</label>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="errorue" required<?php if(isset($wpmchimpa["errorue"]))echo ' value="'.$wpmchimpa["errorue"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Unknown error</label>
                </div>
              </div>
  
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>User Status</h2>
                    <span class="wpmcahint headhint" data-hint="Show Subscription form if the user is?"></span>
                </div>
                 
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="loggedin" value="1" <?php if(isset($wpmchimpa["loggedin"])) echo "checked";?>>  
                    <label>Logged-In</label>
                 </div>

                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="notloggedin" value="1" <?php if(isset($wpmchimpa["notloggedin"])) echo "checked";?>>  
                    <label>Not Logged-In</label>
                 </div>

                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="commented" value="1" <?php if(isset($wpmchimpa["commented"])) echo "checked";?>>  
                    <label>Commented</label>
                 </div>

                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="notcommented" value="1" <?php if(isset($wpmchimpa["notcommented"])) echo "checked";?>>  
                    <label>Not Commented</label>
                 </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Referrer</h2>
                    <span class="wpmcahint headhint" data-hint="Analyze referrer link"></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="searchengine" value="1" <?php if(isset($wpmchimpa["searchengine"])) echo "checked";?>>  
                    <label>Search Engine</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" class="premium" readonly>  
                    <label>External URL</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" class="premium" readonly>  
                    <label>URL Shorteners</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" class="premium" readonly>  
                    <label>Social Networking</label>
                 </div>
            </div>


            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>On Successful Subscription</h2>
                    <span class="wpmcahint headhint" data-hint="What do on Successful Subscription?"></span>
                </div>
               <div class="wpmca_group wpmcacb">
                  <input type="radio" name="suc_sub" value="suc_msg"<?php if(isset($wpmchimpa["suc_sub"]) && $wpmchimpa["suc_sub"] == "suc_msg") echo " checked";?>> 
               </div>
               <div class="wpmca_group p2 wpmcatxt suc_txt">      
                  <input type="text" class="wpmchimp_text" required name="suc_msg"<?php if(isset($wpmchimpa["suc_msg"]))echo ' value="'.$wpmchimpa["suc_msg"].'"';?>><span class="wpmcahint" data-hint="Enter a Message to Show Up"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Success Message</label>
                </div>
               <div class="wpmca_group wpmcacb">
                  <input type="radio" name="suc_sub" value="suc_url"<?php if(isset($wpmchimpa["suc_sub"]) && $wpmchimpa["suc_sub"] == "suc_url") echo " checked";?>>  
               </div>
               <div class="wpmca_group p2 wpmcatxt suc_txt">      
                  <input type="text" class="wpmchimp_text" required name="suc_url"<?php if(isset($wpmchimpa["suc_url"]))echo ' value="'.$wpmchimpa["suc_url"].'"';?>><span class="wpmcahint" data-hint="Enter a URL to redirect"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Redirect to URL</label>
                </div>
                 <div class="wpmca_group wpmcacb p3">
                    <input type="checkbox" name="suc_url_tab" value="1">  
                    <label>Open in new tab</label>
                 </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Location based Filter</h2>
                    <span class="wpmcahint headhint" data-hint="Exclude the selected countries"></span>
                </div>
                <div class="wpmca_group">
                   <select id="incl" multiple="multiple" style="display: none;" class="premium"></select>
                </div>
            </div>


            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>News and Updates</h2>
                    <span class="wpmcahint headhint" data-hint="Get Product Update &amp; News. It's secure and spam free..."></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="get_email_update" value="1" <?php if(isset($wpmchimpa["get_email_update"])) echo "checked";?>>  
                    <label>Get Email Updates</label>
                 </div>
               <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" required name="email_update"<?php if(isset($wpmchimpa["email_update"]))echo ' value="'.$wpmchimpa["email_update"].'"';?>>
                  <span class="bar"></span>
                  <label>Email Address</label>
                </div>
            </div>
        </div>
        <div id="lightbox" class="wpmca_box">
            
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Subscribe box in Lightbox</h2>
                </div>
                <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input type="checkbox" id="litebox_en" name="litebox" value="1" class="wpmcatoggle" <?php if(isset($wpmchimpa["litebox"])) echo "checked";?>/>
                        <label for="litebox_en">Enable</label>
                    </div>
                    <span class="wpmcahint" data-hint="Enable Lightbox"></span>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Select Theme</h2>
                    <span class="wpmcahint headhint" data-hint="Select a theme for Lightbox"></span>
                </div>
                <div class="wpmca_group">
                    <select class="wpmca_sel" style="width: 260px;">
                      <option value="">Basic</option>
                      <option disabled>Material - BUY PRO</option>
                      <option disabled>Onamy - BUY PRO</option>
                      <option disabled>Smash - BUY PRO</option>
                      <option disabled>Glow - BUY PRO</option>
                      <option disabled>Unidesign - BUY PRO</option>
                    </select>
                </div>
             </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Custom Message</h2>
                </div>
              
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="lite_heading" required<?php if(isset($wpmchimpa["lite_heading"]))echo ' value="'.$wpmchimpa["lite_heading"].'"';?>>
                  <span class="wpmcahint" data-hint="Heading for the Lightbox"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Heading</label>
                </div>
                <div class="wpmca_group">
                    <select name="lite_heading_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="lite_heading_fs" class="wpmca_sel google_fonts_size">
                        <option value="">Size</option>
                    </select>
                    <select name="lite_heading_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="lite_heading_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                    <label>Font Color</label>
                    <input name="lite_heading_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_heading_fc"]))echo ' value="'.$wpmchimpa["lite_heading_fc"].'"';?>/>
                </div>
                <div class="wpmca_group">
                    <div class="wpmcapara">Message
                         <span class="wpmcahint" data-hint="Message for the Lightbox"></span>
                    </div>
                <?php 
                $content='';
                if(isset($wpmchimpa["lite_msg"]))$content=$wpmchimpa["lite_msg"];
                $editor_id = 'lite_msg';
                $settings = array(
                    'media_buttons' => false,
                    'textarea_rows' => 10);
                wp_editor( $content, $editor_id, $settings ); ?> 
                </div>
                <div class="wpmca_group">
                    <select name="lite_msg_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="lite_msg_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Text Box</h2>
                </div>
                <div class="wpmca_group">
                  <select name="lite_tbox_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="lite_tbox_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="lite_tbox_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="lite_tbox_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="lite_tbox_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_tbox_fc"]))echo ' value="'.$wpmchimpa["lite_tbox_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="lite_tbox_w"<?php if(isset($wpmchimpa["lite_tbox_w"]))echo ' value="'.$wpmchimpa["lite_tbox_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="lite_tbox_h"<?php if(isset($wpmchimpa["lite_tbox_h"]))echo ' value="'.$wpmchimpa["lite_tbox_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="lite_tbox_bor"<?php if(isset($wpmchimpa["lite_tbox_bor"]))echo ' value="'.$wpmchimpa["lite_tbox_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="lite_tbox_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_tbox_borc"]))echo ' value="'.$wpmchimpa["lite_tbox_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Checkbox</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="lite_check_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_check_c"]))echo ' value="'.$wpmchimpa["lite_check_c"].'"';?>/>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Button</h2>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="lite_button" required<?php if(isset($wpmchimpa["lite_button"]))echo ' value="'.$wpmchimpa["lite_button"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Button Text</label>
                </div>
                <div class="wpmca_group">
                    <select name="lite_button_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="lite_button_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="lite_button_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="lite_button_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="lite_button_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_button_fc"]))echo ' value="'.$wpmchimpa["lite_button_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Hover Font Color</label>
                   <input name="lite_button_fch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_button_fch"]))echo ' value="'.$wpmchimpa["lite_button_fch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="lite_button_w"<?php if(isset($wpmchimpa["lite_button_w"]))echo ' value="'.$wpmchimpa["lite_button_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="lite_button_h"<?php if(isset($wpmchimpa["lite_button_h"]))echo ' value="'.$wpmchimpa["lite_button_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Background Color</label>
                   <input name="lite_button_bc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_button_bc"]))echo ' value="'.$wpmchimpa["lite_button_bc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                  <label>Hover Background Color</label>
                   <input name="lite_button_bch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_button_bch"]))echo ' value="'.$wpmchimpa["lite_button_bch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Radius</label>
                  <input type="text" class="wpmchimp_texts" name="lite_button_br"<?php if(isset($wpmchimpa["lite_button_br"]))echo ' value="'.$wpmchimpa["lite_button_br"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="lite_button_bor"<?php if(isset($wpmchimpa["lite_button_bor"]))echo ' value="'.$wpmchimpa["lite_button_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="lite_button_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_button_borc"]))echo ' value="'.$wpmchimpa["lite_button_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Spinner</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="lite_spinner_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_spinner_c"]))echo ' value="'.$wpmchimpa["lite_spinner_c"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Status Message</h2>
                    <span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
                </div>
                <div class="wpmca_group">
                    <select name="lite_status_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="lite_status_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="lite_status_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="lite_status_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="lite_status_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["lite_status_fc"]))echo ' value="'.$wpmchimpa["lite_status_fc"].'"';?>/>
                </div>

            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Filter by Device</h2>
                    <span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits from?"></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_desktop" value="1" <?php if(isset($wpmchimpa["lite_desktop"])) echo "checked";?>>  
                    <label>Desktop</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_tablet" value="1" <?php if(isset($wpmchimpa["lite_tablet"])) echo "checked";?>>  
                    <label>Tablet</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_mobile" value="1" <?php if(isset($wpmchimpa["lite_mobile"])) echo "checked";?>>  
                    <label>Mobile</label>
                 </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Filter by Page type</h2>
                    <span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits?"></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_homepage" value="1" <?php if(isset($wpmchimpa["lite_homepage"])) echo "checked";?>>  
                    <label>Home Page</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_page" value="1" <?php if(isset($wpmchimpa["lite_page"])) echo "checked";?>>  
                    <label>Pages</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_post" value="1" <?php if(isset($wpmchimpa["lite_post"])) echo "checked";?>>  
                    <label>Posts</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_category" value="1" <?php if(isset($wpmchimpa["lite_category"])) echo "checked";?>>  
                    <label>Categories/Archives</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_search" value="1" <?php if(isset($wpmchimpa["lite_search"])) echo "checked";?>>  
                    <label>Search</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="lite_404error" value="1" <?php if(isset($wpmchimpa["lite_404error"])) echo "checked";?>>  
                    <label>404 Error</label>
                 </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Filter by Specific Posts</h2>
                    <span class="wpmcahint headhint" data-hint="Include/Exclude Specific posts from Lightbox"></span>
                </div>
                <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input id="lite_spec_post" type="checkbox" class="wpmcatoggle"/>
                        <label for="lite_spec_post" class="premiumsp">Exclude</label>
                    </div><label for="lite_spec_post" class="premiumsp" style="top: -4px;left: 60px;position: relative;">Include</label>
                </div>
                  <div class="wpmca_group" id="premiumshow">
                    <div class="wpmcapara"> Enter Post/Page IDs
                        <span class="wpmcahint" data-hint="Separate post ids by comma ','"></span>
                    </div>
                  </div>
                  <div class="wpmca_group">
                    <div class="wpmcapara premiumsp"><textarea readonly></textarea>
                  </div>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Behaviour</h2>
                    <span class="wpmcahint headhint" data-hint="Adjust the behaviour"></span>
                </div>
                <div class="wpmca_group wpmcatxts wpmcacb"> 
                  <label>Appear after</label>
                  <input type="text" class="wpmchimp_texts" name="lite_behave_time"<?php if(isset($wpmchimpa["lite_behave_time"]))echo ' value="'.$wpmchimpa["lite_behave_time"].'"';?>>
                  <span>seconds</span>
                  <input type="checkbox" style="margin-left: 10px;" name="lite_behave_time_inac" value="1" <?php if(isset($wpmchimpa["lite_behave_time_inac"])) echo "checked";?>>  
                  <label>of Inactivity</label>
                </div>
                <div class="wpmca_group wpmcatxts wpmcacb"> 
                  <input type="checkbox" name="lite_behave_scroll" value="1" <?php if(isset($wpmchimpa["lite_behave_scroll"])) echo "checked";?>>  
                  <label>Appear after</label>
                  <input type="text" class="wpmchimp_texts premium" readonly value="50">
                  <span>% of the page scrolled</span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" class="premium" readonly>  
                    <label>Depart Intent </label>
                 </div>
                <div class="wpmca_group wpmcatxts wpmcacb"> 
                  <input type="checkbox" name="lite_behave_cookie" value="1" <?php if(isset($wpmchimpa["lite_behave_cookie"])) echo "checked";?>>  
                  <label>Reappear after</label>
                  <input type="text" class="wpmchimp_texts premium" value="1" readonly>
                  <span>day using Cookie</span>
                </div>
              </div>
              <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Close action</h2>
                    <span class="wpmcahint headhint" data-hint="When to close the litebox"></span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Disapear after</label>
                  <input type="text" class="wpmchimp_texts" name="lite_close_time"<?php if(isset($wpmchimpa["lite_close_time"]))echo ' value="'.$wpmchimpa["lite_close_time"].'"';?>>
                  <span>seconds of inactivity</span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" value="1" name="lite_close_bck"<?php if(isset($wpmchimpa["lite_close_bck"]))echo ' checked';?>>  
                    <label>Close when Litebox background is clicked</label>
                    <span class="wpmcahint" data-hint="If not selected, visitors need to click close button to exit the lightbox"></span>
                 </div>
              </div>
        </div>
        <div id="widget" class="wpmca_box">
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Subscribe box in Widget</h2>
                </div>
                <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input type="checkbox" id="widget_en" name="widget" value="1" class="wpmcatoggle" <?php if(isset($wpmchimpa["widget"])) echo "checked";?>/>
                        <label for="widget_en">Enable</label>
                    </div>
                    <span class="wpmcahint" data-hint="Enable Widget"></span>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Select Theme</h2>
                    <span class="wpmcahint headhint" data-hint="Select a theme for widget"></span>
                </div>
                <div class="wpmca_group">
                    <select class="wpmca_sel" style="width: 260px;">
                      <option value="">Basic</option>
                      <option disabled>Material - BUY PRO</option>
                      <option disabled>Onamy - BUY PRO</option>
                      <option disabled>Smash - BUY PRO</option>
                      <option disabled>Glow - BUY PRO</option>
                      <option disabled>Unidesign - BUY PRO</option>
                    </select>
                </div>
             </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Custom Message</h2>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="widget_heading" required<?php if(isset($wpmchimpa["widget_heading"]))echo ' value="'.$wpmchimpa["widget_heading"].'"';?>>
                  <span class="wpmcahint" data-hint="Heading for the Widget"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Heading</label>
                </div>
              
                <div class="wpmca_group">
                    <div class="wpmcapara">Message
                         <span class="wpmcahint" data-hint="Message for the Lightbox"></span>
                    </div>
                <?php 
                $content='';
                if(isset($wpmchimpa["widget_msg"]))$content=$wpmchimpa["widget_msg"];
                $editor_id = 'widget_msg';
                $settings = array(
                    'media_buttons' => false,
                    'textarea_rows' => 10);
                wp_editor( $content, $editor_id, $settings ); ?> 
                </div>
                <div class="wpmca_group">
                    <select name="widget_msg_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="widget_msg_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Text Box</h2>
                </div>
                <div class="wpmca_group">
                  <select name="widget_tbox_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="widget_tbox_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="widget_tbox_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="widget_tbox_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="widget_tbox_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_tbox_fc"]))echo ' value="'.$wpmchimpa["widget_tbox_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="widget_tbox_w"<?php if(isset($wpmchimpa["widget_tbox_w"]))echo ' value="'.$wpmchimpa["widget_tbox_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="widget_tbox_h"<?php if(isset($wpmchimpa["widget_tbox_h"]))echo ' value="'.$wpmchimpa["widget_tbox_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="widget_tbox_bor"<?php if(isset($wpmchimpa["widget_tbox_bor"]))echo ' value="'.$wpmchimpa["widget_tbox_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="widget_tbox_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_tbox_borc"]))echo ' value="'.$wpmchimpa["widget_tbox_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Checkbox</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="widget_check_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_check_c"]))echo ' value="'.$wpmchimpa["widget_check_c"].'"';?>/>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Button</h2>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="widget_button" required<?php if(isset($wpmchimpa["widget_button"]))echo ' value="'.$wpmchimpa["widget_button"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Button Text</label>
                </div>
                <div class="wpmca_group">
                    <select name="widget_button_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="widget_button_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="widget_button_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="widget_button_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="widget_button_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_button_fc"]))echo ' value="'.$wpmchimpa["widget_button_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Hover Font Color</label>
                   <input name="widget_button_fch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_button_fch"]))echo ' value="'.$wpmchimpa["widget_button_fch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="widget_button_w"<?php if(isset($wpmchimpa["widget_button_w"]))echo ' value="'.$wpmchimpa["widget_button_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="widget_button_h"<?php if(isset($wpmchimpa["widget_button_h"]))echo ' value="'.$wpmchimpa["widget_button_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Background Color</label>
                   <input name="widget_button_bc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_button_bc"]))echo ' value="'.$wpmchimpa["widget_button_bc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                  <label>Hover Background Color</label>
                   <input name="widget_button_bch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_button_bch"]))echo ' value="'.$wpmchimpa["widget_button_bch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Radius</label>
                  <input type="text" class="wpmchimp_texts" name="widget_button_br"<?php if(isset($wpmchimpa["widget_button_br"]))echo ' value="'.$wpmchimpa["widget_button_br"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="widget_button_bor"<?php if(isset($wpmchimpa["widget_button_bor"]))echo ' value="'.$wpmchimpa["widget_button_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="widget_button_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_button_borc"]))echo ' value="'.$wpmchimpa["widget_button_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Spinner</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="widget_spinner_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_spinner_c"]))echo ' value="'.$wpmchimpa["widget_spinner_c"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Status Message</h2>
                    <span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
                </div>
                <div class="wpmca_group">
                    <select name="widget_status_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="widget_status_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="widget_status_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="widget_status_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="widget_status_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["widget_status_fc"]))echo ' value="'.$wpmchimpa["widget_status_fc"].'"';?>/>
                </div>

            </div>

        </div>
        <div id="addon" class="wpmca_box">
            
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Subscribe box in Post Page</h2>
                </div>
                <div class="wpmca_group">
                    <div class="paper-toggle">
                        <input type="checkbox" id="addon_en" name="addon" value="1" class="wpmcatoggle" <?php if(isset($wpmchimpa["addon"])) echo "checked";?>/>
                        <label for="addon_en">Enable</label>
                    </div>
                    <span class="wpmcahint" data-hint="Enable Add-on"></span>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Select Theme</h2>
                    <span class="wpmcahint headhint" data-hint="Select a theme for addon"></span>
                </div>
                <div class="wpmca_group">
                    <select class="wpmca_sel" style="width: 260px;">
                      <option value="">Basic</option>
                      <option disabled>Material - BUY PRO</option>
                      <option disabled>Onamy - BUY PRO</option>
                      <option disabled>Smash - BUY PRO</option>
                      <option disabled>Glow - BUY PRO</option>
                      <option disabled>Unidesign - BUY PRO</option>
                    </select>
                </div>
             </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Custom Message</h2>
                </div>
              
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="addon_heading" required<?php if(isset($wpmchimpa["addon_heading"]))echo ' value="'.$wpmchimpa["addon_heading"].'"';?>>
                  <span class="wpmcahint" data-hint="Heading for the Post Page"></span>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Heading</label>
                </div>
                <div class="wpmca_group">
                    <select name="addon_heading_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="addon_heading_fs" class="wpmca_sel google_fonts_size">
                        <option value="">Size</option>
                    </select>
                    <select name="addon_heading_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="addon_heading_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                    <label>Font Color</label>
                    <input name="addon_heading_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_heading_fc"]))echo ' value="'.$wpmchimpa["addon_heading_fc"].'"';?>/>
                </div>
                <div class="wpmca_group">
                    <div class="wpmcapara">Message
                         <span class="wpmcahint" data-hint="Message for the Lightbox"></span>
                    </div>
                <?php 
                $content='';
                if(isset($wpmchimpa["addon_msg"]))$content=$wpmchimpa["addon_msg"];
                $editor_id = 'addon_msg';
                $settings = array(
                    'media_buttons' => false,
                    'textarea_rows' => 10);
                wp_editor( $content, $editor_id, $settings ); ?> 
                </div>
                <div class="wpmca_group">
                    <select name="addon_msg_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="addon_msg_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                </div>
            </div>
             <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Text Box</h2>
                </div>
                <div class="wpmca_group">
                  <select name="addon_tbox_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="addon_tbox_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="addon_tbox_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="addon_tbox_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="addon_tbox_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_tbox_fc"]))echo ' value="'.$wpmchimpa["addon_tbox_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="addon_tbox_w"<?php if(isset($wpmchimpa["addon_tbox_w"]))echo ' value="'.$wpmchimpa["addon_tbox_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="addon_tbox_h"<?php if(isset($wpmchimpa["addon_tbox_h"]))echo ' value="'.$wpmchimpa["addon_tbox_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="addon_tbox_bor"<?php if(isset($wpmchimpa["addon_tbox_bor"]))echo ' value="'.$wpmchimpa["addon_tbox_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="addon_tbox_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_tbox_borc"]))echo ' value="'.$wpmchimpa["addon_tbox_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Checkbox</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="addon_check_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_check_c"]))echo ' value="'.$wpmchimpa["addon_check_c"].'"';?>/>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Button</h2>
                </div>
                <div class="wpmca_group wpmcatxt">      
                  <input type="text" class="wpmchimp_text" spellcheck="false" name="addon_button" required<?php if(isset($wpmchimpa["addon_button"]))echo ' value="'.$wpmchimpa["addon_button"].'"';?>>
                  <span class="highlighter"></span>
                  <span class="bar"></span>
                  <label>Button Text</label>
                </div>
                <div class="wpmca_group">
                    <select name="addon_button_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="addon_button_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="addon_button_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="addon_button_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="addon_button_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_button_fc"]))echo ' value="'.$wpmchimpa["addon_button_fc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Hover Font Color</label>
                   <input name="addon_button_fch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_button_fch"]))echo ' value="'.$wpmchimpa["addon_button_fch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts">      
                  <label>Width</label>
                  <input type="text" class="wpmchimp_texts" name="addon_button_w"<?php if(isset($wpmchimpa["addon_button_w"]))echo ' value="'.$wpmchimpa["addon_button_w"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Height</label>
                  <input type="text" class="wpmchimp_texts" name="addon_button_h"<?php if(isset($wpmchimpa["addon_button_h"]))echo ' value="'.$wpmchimpa["addon_button_h"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Background Color</label>
                   <input name="addon_button_bc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_button_bc"]))echo ' value="'.$wpmchimpa["addon_button_bc"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcacolor">
                  <label>Hover Background Color</label>
                   <input name="addon_button_bch" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_button_bch"]))echo ' value="'.$wpmchimpa["addon_button_bch"].'"';?>/>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Radius</label>
                  <input type="text" class="wpmchimp_texts" name="addon_button_br"<?php if(isset($wpmchimpa["addon_button_br"]))echo ' value="'.$wpmchimpa["addon_button_br"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcatxts"> 
                  <label>Border Width</label>
                  <input type="text" class="wpmchimp_texts" name="addon_button_bor"<?php if(isset($wpmchimpa["addon_button_bor"]))echo ' value="'.$wpmchimpa["addon_button_bor"].'"';?>>
                  <span>px</span>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Border Color</label>
                   <input name="addon_button_borc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_button_borc"]))echo ' value="'.$wpmchimpa["addon_button_borc"].'"';?>/>
                </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Spinner</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="addon_spinner_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_spinner_c"]))echo ' value="'.$wpmchimpa["addon_spinner_c"].'"';?>/>
                </div>
            </div>


            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize your Status Message</h2>
                    <span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
                </div>
                <div class="wpmca_group">
                    <select name="addon_status_f" class="wpmca_sel google_fonts">
                      <option value="">Font</option>
                    </select>
                    <select name="addon_status_fs" class="wpmca_sel google_fonts_size" value="20">
                        <option value="">Size</option>
                    </select>
                    <select name="addon_status_fw" class="wpmca_sel google_fonts_weight">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select name="addon_status_fst" class="wpmca_sel google_fonts_style">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Font Color</label>
                   <input name="addon_status_fc" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_status_fc"]))echo ' value="'.$wpmchimpa["addon_status_fc"].'"';?>/>
                </div>

            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Personalize the Background</h2>
                </div>
                <div class="wpmca_group wpmcacolor">
                   <label>Theme Color</label>
                   <input name="addon_bg_c" type="text" class="wpmchimp-color-sel"<?php if(isset($wpmchimpa["addon_bg_c"]))echo ' value="'.$wpmchimpa["addon_bg_c"].'"';?>/>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Filter by Device</h2>
                    <span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits from?"></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="addon_desktop" value="1" <?php if(isset($wpmchimpa["addon_desktop"])) echo "checked";?>>  
                    <label>Desktop</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="addon_tablet" value="1" <?php if(isset($wpmchimpa["addon_tablet"])) echo "checked";?>>  
                    <label>Tablet</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="addon_mobile" value="1" <?php if(isset($wpmchimpa["addon_mobile"])) echo "checked";?>>  
                    <label>Mobile</label>
                 </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Filter by Page type</h2>
                    <span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits?"></span>
                </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="addon_page" value="1" <?php if(isset($wpmchimpa["addon_page"])) echo "checked";?>>  
                    <label>Pages</label>
                 </div>
                 <div class="wpmca_group wpmcacb">
                    <input type="checkbox" name="addon_post" value="1" <?php if(isset($wpmchimpa["addon_post"])) echo "checked";?>>  
                    <label>Posts</label>
                 </div>
            </div>
        </div>
        <div id="statistics" class="wpmca_box">
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Graphs and Logs</h2>
                </div>
            
              <div class="wpmca_group"> 
                 <button class="wpmca_button green material-design premium" id="view_chart">View Graph</button>
                 
                </div>
                <div class="wpmca_group">(This is only a Sample Data, BUY PRO for full Version)</div>
            <div class="wpmca_group goog_charts" id="goog_charts">
              
            </div>
          </div>
            
        </div>
        <div id="advanced" class="wpmca_box">
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Show your love <span class="show_love"></span> Follow Us!</h2>
                </div>
                 <div class="wpmca_group">
                    <div class="wpmc_social" style="margin-left:120px;">
                      <div class="wpmc_soc_cont fb">
                        <a href="https://www.facebook.com/Voltroid"><div class="wpmc_socioicon"></div></a>
                        <div class="wp_likebox">
                          <div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=174296672696220&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
                          <div class="fb-like" data-href="https://www.facebook.com/Voltroid" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                        </div>
                      </div>
                      <div class="wpmc_soc_cont tt">
                        <a href="https://twitter.com/Voltroid"><div class="wpmc_socioicon"></div></a>
                        <div class="wp_likebox" style="margin-left: -7px;">
                          <a href="https://twitter.com/Voltroid" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true"></a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                      </div>
                      <div class="wpmc_soc_cont gp">
                        <a href="https://plus.google.com/+VoltroidInc"><div class="wpmc_socioicon"></div></a>
                        <div class="wp_likebox" style="margin-left: -8px;">
                          <script src="https://apis.google.com/js/platform.js" async defer></script>
                          <div class="g-follow" data-annotation="none" data-height="20" data-href="https://plus.google.com/+VoltroidInc" data-rel="publisher"></div></div>
                      </div>
                    </div>
                 </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Typography Live Preview</h2>
                </div>
                <div class="wpmca_group">
                  <span id="wpmca_preview">
                  <p>THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG</p>
                  <p>the quick brown fox jumps over the lazy dog</p>
                  </span>
                </div>
                <div class="wpmca_group">
                    <select class="wpmca_sel google_fonts live_font">
                      <option value="">Font</option>
                      
                    </select>
                    <select class="wpmca_sel google_fonts_size live_font" value="20">
                        <option value="">Size</option>
                    </select>
                    <select class="wpmca_sel google_fonts_weight live_font">
                      <option value="">Weight</option>
                      <option value="normal">Normal</option>
                      <option value="bold">Bold</option>
                      <option value="lighter">Lighter</option>
                      <option value="bolder">Bolder</option>
                      <option value="100">100</option>
                      <option value="200">200</option>
                      <option value="300">300</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                      <option value="600">600</option>
                      <option value="700">700</option>
                      <option value="800">800</option>
                      <option value="900">900</option>
                    </select>
                    <select class="wpmca_sel google_fonts_style live_font">
                      <option value="">Style</option>
                      <option value="normal">Normal</option>
                      <option value="italic">Italic</option>
                      <option value="oblique">oblique</option>
                    </select>
                </div>
                <div class="wpmca_group">
                    <input type="text" value="#000" class="wpmccolor" />
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Plugin Resources</h2>
                </div>
                <div class="wpmca_group wpmcapara">
                  Want more awesome plugins? Encourage us by donating :)
                </div>
                <div class="wpmca_group">
                    <input type="image" class="wpmchimpa_donate" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                </div>
                <div class="wpmca_group wpmcapara">
                  ChimpMate is a MailChimp based email marketing plugin for wordpress. Mailchimp is one of the most powerful email marketing tool with more than 7 million users. Beginners can start using the service with free* account. Mailchimp also let the users to send mail to unlimited number of recipients. It is also ensures greater deliverability. Being inspired by mailchimp service we created this newsletter plugin for wordpress.org customers. It is a fully customizable plugin with professional design. The plugin offers easy installation of lightbox and widget. Hope you will like the plugin. Your feedback is appreciated.
                </div>
                <div class="wpmca_group wpmcapara">
                <h2>Credits</h2>
                  <a href="http://voltroid.com/">Voltroid</a><br>
                  <a href="http://mailchimp.com/">MailChimp</a><br>
                  <a href="https://developers.google.com/fonts/docs/webfont_loader">Google Web Font Loader</a><br>
                  <a href="https://developers.google.com/chart/">Google Chart</a><br>
                </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Back up and Restore</h2>
                </div>
                 <div class="wpmca_group">
                    <div class="wpmcapara">One click backup and restore 
                      <span class="wpmcahint" data-hint="You can save your settings and restore it later"></span>
                    </div>
                </div>
                <div class="wpmca_group">
                 <button class="wpmca_button green material-design" id="wpmca_backup">Backup</button>
                 <button class="wpmca_button green material-design" id="wpmca_restore">Restore</button>
                 <input type="file" id="file_sel" accept=".json" style="display:none;"/>
                 </div>
            </div>

            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>Reset Plugin</h2>
                </div>
                 <div class="wpmca_group">
                    <div class="wpmcapara">One click plugin reset 
                      <span class="wpmcahint" data-hint="Reset your plugin to default values"></span>
                    </div>
                </div>
                <div class="wpmca_group">
                 <button class="wpmca_button green material-design" id="wpmca_reset">Reset</button>
                 </div>
            </div>
            <div class="wpmca_item">
                <div class="itemhead">
                    <h2>ChimpMate Pro</h2>
                </div>
                 <div class="wpmca_group feat_list">
                  <div class="fl_row odd">
                    <div class="feat"><span>FEATURES</span></div>
                    <div class="featbox_h grey"><span>FREE</span></div>
                    <div class="featbox_h blue"><span style="color:#fff">PRO</span></div>
                    </div>
                  <div class="fl_row even">
                    <div class="feat">Lightbox, Widget, On Page(Add-on)</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                  <div class="feat">Built-in Editor</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">650+ Google fonts</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Automatic List and Group Fetching</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Fully Customizable Typography </div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Typography Live Preview</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Button Customization</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Search Engine Target</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">User Status Based Filter</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Reappear Delay(Cookie)</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Scroll Toggle Detection </div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Fully Responsible</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Multi-Device Filter</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Filter By Page Type</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Lightbox Open Delay </div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Inactivity based events</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">One Click Bakup and Restore</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Easy to Configuration (No coding required!)</div>
                    <div class="featbox avail grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Premium Themes</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Gradient Button Generator</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">A/B Testing</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Statistics Graphs and Logs</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Depart Intent Tecnolagy</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Reappear Delay Customization</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Scroll Toggle % Custamization</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Post/Page Level Targeting</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Contry base Trageting </div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Targeting Social Networking vistors</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Targeting URL Shoretners </div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Targeting Specific URLs</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row even">
                    <div class="feat">Custom CSS editor</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row odd">
                    <div class="feat">Premium Support 24x7</div>
                    <div class="featbox pro grey"></div>
                    <div class="featbox avail blue"></div>
                  </div>
                  <div class="fl_row last">
                    <div class="featbox_h feat_buypro"></div>
                  </div>
                </div>
            </div>
        </div>
    </div> 
 </form>
</div>