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

$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
if($this->wpmchimpa_user_status() && $this->wpmchimpa_referral() && $this->wpmchimpa_pagetype()){
?> 
<style>

.wpmchimpa-overlay-bg {
    display: none;
    top: 0;
    left: 0;
    height:100%;
    width: 100%;
    cursor: pointer;
    z-index: 100000;
    background: #000;
    background: rgba(0,0,0,0.90);
    cursor: default;
    position: fixed!important;
}
  
.wpmchimpa-overlay-bg #wpmchimpa-main {
    position: fixed;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
width: 100%;
}

.wpmchimpa-overlay-bg .wpmchimpa-wrapper {
    width:80%;
    max-width:780px;
    min-width:320px;
    margin:0 auto;
}

.wpmchimpa-overlay-bg #wpmchimpa-newsletterform {
    width:100%;
    display: block;
    text-align: center;
    letter-spacing: 1px;
}

.wpmchimpa-overlay-bg #wpmchimpa-newsletterform #wpmchimpa {
    padding: 50px 40px;
}

#wpmchimpa h3 {
    display: block;
    font-size:26px;
    font-weight:400;
    line-height:1.2;
    color:#fff;
    text-align: center;
    padding-bottom:20px;
    margin: 0 auto 30px auto;
    border-bottom:1px solid #fff;
    width:60%;
    <?php 
        if(isset($wpmchimpa["lite_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["lite_heading_f"]).';';
        }
        if(isset($wpmchimpa["lite_heading_fs"])){
            echo 'font-size:'.$wpmchimpa["lite_heading_fs"].'px;';
        }
        if(isset($wpmchimpa["lite_heading_fw"])){
            echo 'font-weight:'.$wpmchimpa["lite_heading_fw"].';';
        }
        if(isset($wpmchimpa["lite_heading_fst"])){
            echo 'font-style:'.$wpmchimpa["lite_heading_fst"].';';
        }
        if(isset($wpmchimpa["lite_heading_fc"])){
            echo 'color:'.$wpmchimpa["lite_heading_fc"].';';
        }
    ?>
}

#wpmchimpa p {
    font-size:14px;
    line-height:26px;
    margin-bottom:25px;
    color:#fff;
    <?php 
        if(isset($wpmchimpa["lite_msg_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["lite_msg_f"]).';';
        }
        if(isset($wpmchimpa["lite_msg_fs"])){
            echo 'font-size:'.$wpmchimpa["lite_msg_fs"].'px;';
        }
    ?>
}

#wpmchimpa form {
    position: relative;
}

#wpmchimpa input[type="email"],#wpmchimpa input[type="text"] {
    font-size: 16px;
    font-weight:500;
    display: block;
    width:55%;
    background:#fff;
    color:#888;
    height: 50px;
    text-align: center;
    margin: 0 auto 12px auto;
    border:2px solid #fff;
    outline:0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    transition: all 0.5s ease;

    <?php 
        if(isset($wpmchimpa["lite_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["lite_tbox_f"]).';';
        }
        if(isset($wpmchimpa["lite_tbox_fs"])){
            echo 'font-size:'.$wpmchimpa["lite_tbox_fs"].'px;';
        }
        if(isset($wpmchimpa["lite_tbox_fw"])){
            echo 'font-weight:'.$wpmchimpa["lite_tbox_fw"].';';
        }
        if(isset($wpmchimpa["lite_tbox_fst"])){
            echo 'font-style:'.$wpmchimpa["lite_tbox_fst"].';';
        }
        if(isset($wpmchimpa["lite_tbox_fc"])){
            echo 'color:'.$wpmchimpa["lite_tbox_fc"].';';
        }
        if(isset($wpmchimpa["lite_tbox_w"])){
            echo 'width:'.$wpmchimpa["lite_tbox_w"].'px;';
        }
        if(isset($wpmchimpa["lite_tbox_h"])){
            echo 'height:'.$wpmchimpa["lite_tbox_h"].'px;';
        }
        if(isset($wpmchimpa["lite_tbox_bor"]) && isset($wpmchimpa["lite_tbox_borc"])){
            echo ' border:'.$wpmchimpa["lite_tbox_bor"].'px solid '.$wpmchimpa["lite_tbox_borc"].';';
        }
    ?>
}

#wpmchimpa input[type="email"]:focus,#wpmchimpa input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($wpmchimpa["lite_tbox_bor"]) && isset($wpmchimpa["lite_tbox_borc"])){
            echo ' border:'.$wpmchimpa["lite_tbox_bor"].'px solid '.$wpmchimpa["lite_tbox_borc"].';';
        } ?>
}

#wpmchimpa .wpmchimpa-subs-button{
  width:40%;
  height:40px;
    cursor: pointer;
    border:none;
    margin: 10px auto;
    display: block;
    transition: all 0.5s ease;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    background: #62bc33;
  color:#fff;
    clear:both;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
     <?php
        if(isset($wpmchimpa["lite_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["lite_button_f"]).';';
        }
        if(isset($wpmchimpa["lite_button_fs"])){
            echo 'font-size:'.$wpmchimpa["lite_button_fs"].'px;';
        }
        if(isset($wpmchimpa["lite_button_fw"])){
            echo 'font-weight:'.$wpmchimpa["lite_button_fw"].';';
        }
        if(isset($wpmchimpa["lite_button_fst"])){
            echo 'font-style:'.$wpmchimpa["lite_button_fst"].';';
        }
        if(isset($wpmchimpa["lite_button_fc"])){
            echo 'color:'.$wpmchimpa["lite_button_fc"].';';
        }
        if(isset($wpmchimpa["lite_button_w"])){
            echo 'width:'.$wpmchimpa["lite_button_w"].'px;';
        }
        if(isset($wpmchimpa["lite_button_h"])){
            echo 'height:'.$wpmchimpa["lite_button_h"].'px;';
        }
        if(isset($wpmchimpa["lite_button_bc"])){
            echo 'background-color:'.$wpmchimpa["lite_button_bc"].';';
        }
        else{ ?>
  background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
  background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
  background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
  background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
  background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
  <?php }
        if(isset($wpmchimpa["lite_button_br"])){
            echo '-webkit-border-radius:'.$wpmchimpa["lite_button_br"].'px;';
            echo '-moz-border-radius:'.$wpmchimpa["lite_button_br"].'px;';
            echo '-ms-border-radius:'.$wpmchimpa["lite_button_br"].'px;';
            echo '-o-border-radius:'.$wpmchimpa["lite_button_br"].'px;';
            echo 'border-radius:'.$wpmchimpa["lite_button_br"].'px;';
        }
        if(isset($wpmchimpa["lite_button_bor"]) && isset($wpmchimpa["lite_button_borc"])){
            echo ' border:'.$wpmchimpa["lite_button_bor"].'px solid '.$wpmchimpa["lite_button_borc"].';';
        }
      ?>
}
#wpmchimpa .wpmchimpa-subs-button::before{
  content: '<?php if(isset($wpmchimpa['lite_button'])) echo $wpmchimpa['lite_button'];else echo 'Subscribe';?>';
  display: block;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
#wpmchimpa .wpmchimpa-subs-button:hover {
    border:none;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    background:#8BD331;
  color:#fff;
    <?php 
        if(isset($wpmchimpa["lite_button_bch"])){
            echo 'background-color:'.$wpmchimpa["lite_button_bch"].';';
        }
        else { ?>
    background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
  background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
  background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
  background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
  background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
       <?php }
        if(isset($wpmchimpa["lite_button_fch"])){
            echo 'color:'.$wpmchimpa["lite_button_fch"].';';
        }
        if(isset($wpmchimpa["lite_button_bor"]) && isset($wpmchimpa["lite_button_borc"])){
            echo ' border:'.$wpmchimpa["lite_button_bor"].'px solid '.$wpmchimpa["lite_button_borc"].';';
        }
      ?>
}
#wpmchimpa .wpmchimpa-feedback {
    color: #fff;
    margin-top: 10px;
     <?php
        if(isset($wpmchimpa["lite_status_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["lite_status_f"]).';';
        }
        if(isset($wpmchimpa["lite_status_fs"])){
            echo 'font-size:'.$wpmchimpa["lite_status_fs"].'px;';
        }
        if(isset($wpmchimpa["lite_status_fw"])){
            echo 'font-weight:'.$wpmchimpa["lite_status_fw"].';';
        }
        if(isset($wpmchimpa["lite_status_fst"])){
            echo 'font-style:'.$wpmchimpa["lite_status_fst"].';';
        }
        if(isset($wpmchimpa["lite_status_fc"])){
            echo 'color:'.$wpmchimpa["lite_status_fc"].';';
        }
      ?>
}


.wpmchimpa-overlay-bg .wpmchimpa-close-button {
display: inline-block;
  width: 2em;
  height: 2em;
  border: 0.1em solid #7e7e7e;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -msborder-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  background-color: #7e7e7e;
  top: 2em;
  right:2em;
   -moz-transform: rotate(45deg); 
   -o-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    transition: all 0.5s ease;
    position: absolute;
    z-index:9999;
}


.wpmchimpa-overlay-bg .wpmchimpa-close-button::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 80%;
    height: 6%;;
    left: 10%;
    top: 47%;
  }

  .wpmchimpa-overlay-bg .wpmchimpa-close-button::after {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 6%;
    height: 80%;
    left: 47%;
    top: 10%;
  }
  .wpmchimpa-overlay-bg .wpmchimpa-close-button:hover {
    background-color: #fff; 
    -ms-transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    -moz-transform: rotate(225deg); 
    -o-transform: rotate(225deg); 
    transform: rotate(225deg); 
  } 

.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::after {
      background-color: #7e7e7e;
    }
.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::before {
      background-color: #7e7e7e;
    }
.wpmchimpa-overlay-bg #wpmchimpa .wpmchimpa-signal {
    display: none;
    border:3px solid #fff;
    -webkit-border-radius:30px;
    -moz-border-radius:30px;
    -ms-border-radius:30px;
    -o-border-radius:30px;
    border-radius:30px;
    height:30px;
    left:50%;
    margin: 15px -15px;
    opacity:0;
    position:absolute;
    width:30px;
 <?php
        if(isset($wpmchimpa["lite_spinner_c"])){
            echo 'border:3px solid '.$wpmchimpa["lite_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsate 1s ease-out infinite;
  -moz-animation: pulsate 1s ease-out infinite;
  -ms-animation: pulsate 1s ease-out infinite; 
  -o-animation: pulsate 1s ease-out infinite;
  animation: pulsate 1s ease-out infinite;
  
}

#wpmchimpa .wpmchimpa-groups{
  display: inline-block;
}
#wpmchimpa .wpmchimpa-item{
  display:inline-block;
  margin: 2px 15px;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox']:focus,
#wpmchimpa .wpmchimpa-item input[type='checkbox']:active {
  outline: none;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 25px;
  margin-right: 10px;
  color: #fff;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before,
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #fafafa;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:after {
  color: #fff;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox']:checked + label:before {
<?php if(isset($wpmchimpa["lite_check_c"])) $color = $wpmchimpa["lite_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');?>
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after, #wpmchimpa input[type='checkbox']:checked + label:after {
  content: "\2713";
  line-height: 18px;
  font-size: 14px;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after {
  color: #c7c7c7;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox']:checked + label:after, #wpmchimpa input[type='checkbox']:checked + label:hover:after {
  color: #fff;
}
.wpmchimpa-overlay-bg .wpmchimpa-footer{
  color: #3c3c3c;
  position: absolute;
  bottom: 15px;
  width: 100%;
  text-align: center;
  text-decoration: none;
}
.wpmchimpa-overlay-bg .wpmchimpa-footer a{
  text-decoration: none;
   color: #3c3c3c;
   font-family: 'Sacramento', cursive;
   font-size: 24px;
}
@media only screen and (max-width:1024px) {

    .wpmchimpa-overlay-bg .wpmchimpa-wrapper {
        width:92%;
    }
}

@media only screen and (max-width:769px) {

    .wpmchimpa-overlay-bg #wpmchimpa-newsletterform #wpmchimpa {
        padding: 40px 25px;
    }

    .wpmchimpa-overlay-bg #wpmchimpa input[type="email"],#wpmchimpa input[type="text"] {
        width:100%;
        margin-bottom:7px;
    }

    .wpmchimpa-overlay-bg #wpmchimpa .wpmchimpa-subs-button {
        width:100%;
    }
	.wpmchimpa-overlay-bg #wpmchimpa h3 {
        width: 100%;
    }
}

@media only screen and (max-width:600px) {

    .wpmchimpa-overlay-bg #wpmchimpa h3 {
		margin: 0;
		font-size: 16px;
		padding-bottom: 5px;
    }
    .wpmchimpa-overlay-bg #wpmchimpa p{
      line-height: 15px;
	margin: 0;
	font-size: 11px;
	padding-bottom: 5px;
    }
    #wpmchimpa input{
      height:20px;
    }
    #wpmchimpa input[type='text'],#wpmchimpa input[type='email']{
		font-size: 12px
   	}
    #wpmchimpa .wpmchimpa-subs-button{
      height:34px;
      font-size: 18px
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label {
    	font-size:12px;
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before, #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:after{
    	width:15px;
    	height:15px;
    }
    #wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after, #wpmchimpa input[type='checkbox']:checked + label:after{
    	font-size: 12px;
    }
    .wpmchimpa-overlay-bg .wpmchimpa-close-button {
      top:1em;
      right:1em;
    }
}
@media only screen and (max-width:420px) {
    .wpmchimpa-overlay-bg .wpmchimpa-close-button {
      position: relative;
		display: block;
		left: 45%;
    }

}
</style>
			<div class="wpmchimpa-reset wpmchimpa-overlay-bg">
				<div id="wpmchimpa-main">
					<div class="wpmchimpa-wrapper">
						<div id="wpmchimpa-newsletterform">
			    			<div class="wpmchimpa" id="wpmchimpa">
			        			<?php if(isset($wpmchimpa['lite_heading'])) echo '<h3>'.$wpmchimpa['lite_heading'].'</h3>';?>
			        			<?php if(isset($wpmchimpa['lite_msg'])) echo '<p>'.$wpmchimpa['lite_msg'].'</p>';?>
			        			<form action="" method="post">
			           				<?php if(isset($wpmchimpa['namebox'])){
                            if(isset($wpmchimpa['labelnb'])) $nl = $wpmchimpa['labelnb'];
                            else $nl = 'Name';
                            echo '<input type="text" name="name" class="wpmchimpa_name" placeholder="'.$nl.'" required/>'; 
                         } ?>
			            			<input type="email" name="email" class="wpmchimpa_email" placeholder="<?php if(isset($wpmchimpa['labeleb'])) echo $wpmchimpa['labeleb'];else echo 'Email address';?>" required/>
			           				<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
			            			<?php 
			            			if(isset($wpmchimpa['list_record']['groups'])){
			            				$group_record = array();
			            				foreach($wpmchimpa["list_record"]['groups'] as $grouping){
			            				 	foreach($grouping['groups'] as $group){
			            				 		array_push($group_record, $group);
			            				 	}
			            				}
			            				$count = count($group_record);
			            				$i = 0;
			            				while($i < $count){
			            					echo '<div class="wpmchimpa-groups">';
			            					for($j=0;$i< $count && $j<4;$i++,$j++)
			            						echo '<div class="wpmchimpa-item">
						            					<input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$i.'" value="'.$group_record[$i]['id'].'">  
			                    						<label for="wpmchimpag'.$i.'">'.$group_record[$i]['gname'].'</label>
						            				</div>';
					            			echo '</div><br>';
			            				}
			            			}
			            			?>
			            			<div class="wpmchimpa-subs-button"></div>
                    <div class="wpmchimpa-signal"></div>
			            		</form>
			        			<div class="wpmchimpa-feedback"></div>
			    			</div>
						</div>
					</div>
				</div>
				<div class="wpmchimpa-close-button"></div>
				
			</div>

		<?php
	}
?>
