<?php
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
$wpmcw_id = "wpmchimpaw-".rand(1,1000);
echo '<div class="widget-text wp_widget_plugin_box">';
if(isset($wpmchimpa['widget_heading']))
	echo $before_title . $wpmchimpa['widget_heading'] . $after_title;
 ?>
 <style type="text/css">

#<?php echo $wpmcw_id; ?> {
  width: 100%;
  display: block;
  padding-bottom: 10px;
}
#<?php echo $wpmcw_id; ?> p
margin-bottom: 15px;
line-height: 20px;{
<?php 
  if(isset($wpmchimpa["widget_msg_f"])){
    echo 'font-family:'.str_replace("|ng","",$wpmchimpa["widget_msg_f"]).';';
  }
  if(isset($wpmchimpa["widget_msg_fs"])){
      echo 'font-size:'.$wpmchimpa["widget_msg_fs"].'px;';
  }
    ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-groups{
  display: block;
  overflow:auto; 
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-item{
  float:left;
  margin: 2px 2px;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox']:focus,
#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox']:active {
  outline: none;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 25px;
  margin-right: 10px;
  color: #686868;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:before,
#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #ACACAC;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:after {
  color: #fff;
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox']:checked + label:before {
 <?php if(isset($wpmchimpa["widget_check_c"])) $color = $wpmchimpa["widget_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:hover:after, #<?php echo $wpmcw_id; ?> input[type='checkbox']:checked + label:after {
  content: "\2713";
  line-height: 18px;
  font-size: 14px;
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:hover:after {
  color: #fff;
}
#<?php echo $wpmcw_id; ?> .wpmchimpw-item input[type='checkbox']:checked + label:after, #<?php echo $wpmcw_id; ?> input[type='checkbox']:checked + label:hover:after {
  color: #fff;
}
#<?php echo $wpmcw_id; ?> form{overflow: hidden}
#<?php echo $wpmcw_id; ?> input[type="email"], #<?php echo $wpmcw_id; ?> input[type="text"] {
  text-align: center;
  outline:0;
  border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  width: 100%;
   padding: 11px 24px 10px !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border:0;
  margin-bottom:10px;
  <?php 
        if(isset($wpmchimpa["widget_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["widget_tbox_f"]).';';
        }
        if(isset($wpmchimpa["widget_tbox_fs"])){
            echo 'font-size:'.$wpmchimpa["widget_tbox_fs"].'px;';
        }
        if(isset($wpmchimpa["widget_tbox_fw"])){
            echo 'font-weight:'.$wpmchimpa["widget_tbox_fw"].';';
        }
        if(isset($wpmchimpa["widget_tbox_fst"])){
            echo 'font-style:'.$wpmchimpa["widget_tbox_fst"].';';
        }
        if(isset($wpmchimpa["widget_tbox_fc"])){
            echo 'color:'.$wpmchimpa["widget_tbox_fc"].';';
        }
        if(isset($wpmchimpa["widget_tbox_w"])){
            echo 'width:'.$wpmchimpa["widget_tbox_w"].'px;';
        }
        if(isset($wpmchimpa["widget_tbox_h"])){
            echo 'height:'.$wpmchimpa["widget_tbox_h"].'px;';
        }
        if(isset($wpmchimpa["widget_tbox_bor"]) && isset($wpmchimpa["widget_tbox_borc"])){
            echo ' border:'.$wpmchimpa["widget_tbox_bor"].'px solid '.$wpmchimpa["widget_tbox_borc"].';';
        }
    ?>
}

#<?php echo $wpmcw_id; ?> input[type="submit"]{
  margin: 12px 0;
  width: 100%;
  padding: 11px 24px 10px !important;
    background: #62bc33;
    cursor:pointer;
  color:#fff;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-decoration:none;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  <?php
        if(isset($wpmchimpa["widget_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["widget_button_f"]).';';
        }
        if(isset($wpmchimpa["widget_button_fs"])){
            echo 'font-size:'.$wpmchimpa["widget_button_fs"].'px;';
        }
        if(isset($wpmchimpa["widget_button_fw"])){
            echo 'font-weight:'.$wpmchimpa["widget_button_fw"].';';
        }
        if(isset($wpmchimpa["widget_button_fst"])){
            echo 'font-style:'.$wpmchimpa["widget_button_fst"].';';
        }
        if(isset($wpmchimpa["widget_button_fc"])){
            echo 'color:'.$wpmchimpa["widget_button_fc"].';';
        }
        if(isset($wpmchimpa["widget_button_w"])){
            echo 'width:'.$wpmchimpa["widget_button_w"].'px;';
        }
        if(isset($wpmchimpa["widget_button_h"])){
            echo 'height:'.$wpmchimpa["widget_button_h"].'px;';
        }
        if(isset($wpmchimpa["widget_button_bc"])){
            echo 'background:'.$wpmchimpa["widget_button_bc"].';';
        }
        else { ?>
        background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
          <?php }
        if(isset($wpmchimpa["widget_button_br"])){
            echo '-webkit-border-radius:'.$wpmchimpa["widget_button_br"].'px;';
            echo '-moz-border-radius:'.$wpmchimpa["widget_button_br"].'px;';
            echo '-ms-border-radius:'.$wpmchimpa["widget_button_br"].'px;';
            echo '-o-border-radius:'.$wpmchimpa["widget_button_br"].'px;';
            echo 'border-radius:'.$wpmchimpa["widget_button_br"].'px;';
        }
        if(isset($wpmchimpa["widget_button_bor"]) && isset($wpmchimpa["widget_button_borc"])){
            echo ' border:'.$wpmchimpa["widget_button_bor"].'px solid '.$wpmchimpa["widget_button_borc"].';';
        }
      ?>
}

#<?php echo $wpmcw_id; ?> input[type="submit"]:hover{
  
    background:#8BD331;
   
  color:#fff;
  <?php 
        if(isset($wpmchimpa["widget_button_bch"])){
            echo 'background:'.$wpmchimpa["widget_button_bch"].';';
        }
        else{ ?>
           background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($wpmchimpa["widget_button_fch"])){
            echo 'color:'.$wpmchimpa["widget_button_fch"].';';
        }
        if(isset($wpmchimpa["widget_button_bor"]) && isset($wpmchimpa["widget_button_borc"])){
            echo ' border:'.$wpmchimpa["widget_button_bor"].'px solid '.$wpmchimpa["widget_button_borc"].';';
        }
      ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-signal {
    display: none;
    border: 3px solid #000;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    height: 30px;
    opacity: 0;
    margin:10px auto;
    position: relative;
    width: 30px;
    vertical-align: middle;
 <?php
        if(isset($wpmchimpa["widget_spinner_c"])){
            echo 'border:3px solid '.$wpmchimpa["widget_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsate 1s ease-out infinite;
  -moz-animation: pulsate 1s ease-out infinite;
  -ms-animation: pulsate 1s ease-out infinite; 
  -o-animation: pulsate 1s ease-out infinite;
  animation: pulsate 1s ease-out infinite;
  
}
 </style>
<div class="wpmchimpa-reset" id="<?php echo $wpmcw_id; ?>">
	<p><?php if(isset($wpmchimpa['widget_msg'])) echo $wpmchimpa['widget_msg'];?></p>
	<form action="" method="post">
  <?php if(isset($wpmchimpa['namebox']))echo '<input type="text" name="name" class="wpmchimpa_name" placeholder="name" required/>'; ?>
		<input type="email" name="email" class="wpmchimpa_email" placeholder="Email address" required/>
		<input type="submit" value="<?php if(isset($wpmchimpa['widget_button'])) echo $wpmchimpa['widget_button'];else echo 'Subscribe';?>" name="subscribe" class="wpmchimpa-subs-button"/>
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
			echo '<div class="wpmchimpa-groups">';
			while($i < $count){
				for($j=0,$temp=uniqid();$i< $count && $j<3;$i++,$j++,$temp=uniqid())
					echo '<div class="wpmchimpa-item">
        					<input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$temp.'" value="'.$group_record[$i]['id'].'">  
    						<label for="wpmchimpag'.$temp.'">'.$group_record[$i]['gname'].'</label>
        				</div>';
			}
    		echo '</div>';
		}
		?>
	<div class="wpmchimpa-signal"></div>
	</form>
	<div class="wpmchimpa-feedback"></div>
</div> </div>