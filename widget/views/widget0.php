<?php
$theme = $wpmchimpa['theme']['w0'];
$plugin = ChimpMate_WPMC_Assistant::get_instance();
$plugin->extrascript(0);
$wpmcw_id = "wpmchimpaw-".rand(1,1000);
echo '<div class="widget-text wp_widget_plugin_box">';
if(isset($theme['widget_heading']))
	echo $before_title . $theme['widget_heading'] . $after_title;
 ?>
 <style type="text/css">

#<?php echo $wpmcw_id; ?> {
  width: 100%;
  display: block;
  padding-bottom: 10px;
  <?php 
  if(isset($theme["widget_bg_c"])){
    echo 'background-color:'.$theme['widget_bg_c'].';';
  }?>
}
#<?php echo $wpmcw_id; ?> p,#<?php echo $wpmcw_id; ?> p *{
margin-bottom: 15px;
line-height: 20px;
<?php 
  if(isset($theme["widget_msg_f"])){
    echo 'font-family:'.str_replace("|ng","",$theme["widget_msg_f"]).';';
  }
  if(isset($theme["widget_msg_fs"])){
      echo 'font-size:'.$theme["widget_msg_fs"].'px;';
  }
    ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-groups{
  display: inline-block;
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
  <?php
        if(isset($theme["widget_check_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["widget_check_f"]).';';
        }
        if(isset($theme["widget_check_fs"])){
            echo 'font-size:'.$theme["widget_check_fs"].'px;';
        }
        if(isset($theme["widget_check_fw"])){
            echo 'font-weight:'.$theme["widget_check_fw"].';';
        }
        if(isset($theme["widget_check_fst"])){
            echo 'font-style:'.$theme["widget_check_fst"].';';
        }
        if(isset($theme["widget_check_fc"])){
            echo 'color:'.$theme["widget_check_fc"].';';
        }
      ?>
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
  <?php
        if(isset($theme["widget_check_borc"])){
            echo 'border: 1px solid'.$theme["widget_check_borc"].';';
        }
      ?>
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox']:checked + label:before {
 <?php if(isset($theme["widget_check_c"])) $color = $theme["widget_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}

#<?php echo $wpmcw_id; ?> .wpmchimpa-item input[type='checkbox'] + label:hover:after, #<?php echo $wpmcw_id; ?> input[type='checkbox']:checked + label:after {
  content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);
  <?php 
if($theme['widget_check_shade'] == '1'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['widget_check_shade'] == '2'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
 left: -3px;
top: -4px;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
 opacity: 0.5;
}
#<?php echo $wpmcw_id; ?> form{overflow: hidden}
#<?php echo $wpmcw_id; ?> input[type="text"] {
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
        if(isset($theme["widget_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["widget_tbox_f"]).';';
        }
        if(isset($theme["widget_tbox_fs"])){
            echo 'font-size:'.$theme["widget_tbox_fs"].'px;';
        }
        if(isset($theme["widget_tbox_fw"])){
            echo 'font-weight:'.$theme["widget_tbox_fw"].';';
        }
        if(isset($theme["widget_tbox_fst"])){
            echo 'font-style:'.$theme["widget_tbox_fst"].';';
        }
        if(isset($theme["widget_tbox_fc"])){
            echo 'color:'.$theme["widget_tbox_fc"].';';
        }
        if(isset($theme["widget_tbox_bgc"])){
            echo 'background:'.$theme["widget_tbox_bgc"].';';
        }
        if(isset($theme["widget_tbox_w"])){
            echo 'width:'.$theme["widget_tbox_w"].'px;';
        }
        if(isset($theme["widget_tbox_h"])){
            echo 'height:'.$theme["widget_tbox_h"].'px;';
        }
        if(isset($theme["widget_tbox_bor"]) && isset($theme["widget_tbox_borc"])){
            echo ' border:'.$theme["widget_tbox_bor"].'px solid '.$theme["widget_tbox_borc"].';';
        }
    ?>
}

#<?php echo $wpmcw_id;?> input[type="text"].wpmcerror{
  border-color: red;
}
#<?php echo $wpmcw_id;?> .wpmcinfierr{
  display: block;
  height: 10px;
  line-height: 10px;
  margin-top: -10px;
  font-size: 10px;
  color: red;
  <?php
    if(isset($theme["widget_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["widget_status_f"]).';';
    }
    if(isset($theme["widget_status_fw"])){
        echo 'font-weight:'.$theme["widget_status_fw"].';';
    }
    if(isset($theme["widget_status_fst"])){
        echo 'font-style:'.$theme["widget_status_fst"].';';
    }
  ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-subs-button{
  margin: 12px 0;
  width: 100%;
  height: 40px;
text-align: center;
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
        if(isset($theme["widget_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["widget_button_f"]).';';
        }
        if(isset($theme["widget_button_fs"])){
            echo 'font-size:'.$theme["widget_button_fs"].'px;';
        }
        if(isset($theme["widget_button_fw"])){
            echo 'font-weight:'.$theme["widget_button_fw"].';';
        }
        if(isset($theme["widget_button_fst"])){
            echo 'font-style:'.$theme["widget_button_fst"].';';
        }
        if(isset($theme["widget_button_fc"])){
            echo 'color:'.$theme["widget_button_fc"].';';
        }
        if(isset($theme["widget_button_w"])){
            echo 'width:'.$theme["widget_button_w"].'px;';
        }
        if(isset($theme["widget_button_h"])){
            echo 'height:'.$theme["widget_button_h"].'px;';
        }
        if(isset($theme["widget_button_bc"])){
            echo 'background:'.$theme["widget_button_bc"].';';
        }
        else { ?>
        background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
        background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
          <?php }
        if(isset($theme["widget_button_br"])){
            echo '-webkit-border-radius:'.$theme["widget_button_br"].'px;';
            echo '-moz-border-radius:'.$theme["widget_button_br"].'px;';
            echo '-ms-border-radius:'.$theme["widget_button_br"].'px;';
            echo '-o-border-radius:'.$theme["widget_button_br"].'px;';
            echo 'border-radius:'.$theme["widget_button_br"].'px;';
        }
        if(isset($theme["widget_button_bor"]) && isset($theme["widget_button_borc"])){
            echo ' border:'.$theme["widget_button_bor"].'px solid '.$theme["widget_button_borc"].';';
        }
      ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['widget_button'])) echo $theme['widget_button'];else echo 'Subscribe';?>';
  display: block;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-subs-button:hover{
  
    background:#8BD331;
   
  color:#fff;
  <?php 
        if(isset($theme["widget_button_bch"])){
            echo 'background:'.$theme["widget_button_bch"].';';
        }
        else{ ?>
           background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
          background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($theme["widget_button_fch"])){
            echo 'color:'.$theme["widget_button_fch"].';';
        }
        if(isset($theme["widget_button_bor"]) && isset($theme["widget_button_borc"])){
            echo ' border:'.$theme["widget_button_bor"].'px solid '.$theme["widget_button_borc"].';';
        }
      ?>
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-feedback {
  height: 14px;
  margin-top: -20px;
<?php
        if(isset($theme["widget_status_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["widget_status_f"]).';';
        }
        if(isset($theme["widget_status_fs"])){
            echo 'font-size:'.$theme["widget_status_fs"].'px;';
        }
        if(isset($theme["widget_status_fw"])){
            echo 'font-weight:'.$theme["widget_status_fw"].';';
        }
        if(isset($theme["widget_status_fst"])){
            echo 'font-style:'.$theme["widget_status_fst"].';';
        }
        if(isset($theme["widget_status_fc"])){
            echo 'color:'.$theme["widget_status_fc"].';';
        }
      ?>


}
#<?php echo $wpmcw_id; ?> .wpmchimpa-feedback.wpmchimpa-done{
margin-top: 14px;
}
#<?php echo $wpmcw_id; ?> .wpmchimpa-signalc {
height: 40px;
margin-top: 10px;
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
    margin:0 auto;
    position: relative;
    width: 30px;
    vertical-align: middle;
 <?php
        if(isset($theme["widget_spinner_c"])){
            echo 'border:3px solid '.$theme["widget_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsatew 1s ease-out infinite;
  -moz-animation: pulsatew 1s ease-out infinite;
  -ms-animation: pulsatew 1s ease-out infinite; 
  -o-animation: pulsatew 1s ease-out infinite;
  animation: pulsatew 1s ease-out infinite;
  
}
@-webkit-keyframes pulsatew {
    0% {
       -webkit-transform:scale(.1);
      opacity: 0.0;
    }
    50% {
      opacity:1;
    }
    100% {
       -webkit-transform:scale(1.2);
      opacity:0;
    }
}
@-moz-keyframes pulsatew {
    0% {
       -moz-transform:scale(.1);
      opacity: 0.0;
    }
    50% {
      opacity:1;
    }
    100% {
       -moz-transform:scale(1.2);
      opacity:0;
    }
}
@-ms-keyframes pulsatew {
    0% {
       -ms-transform:scale(.1);
      opacity: 0.0;
    }
    50% {
      opacity:1;
    }
    100% {
       -ms-transform:scale(1.2);
      opacity:0;
    }
}
@-o-keyframes pulsatew {
    0% {
       -o-transform:scale(.1);
      opacity: 0.0;
    }
    50% {
      opacity:1;
    }
    100% {
       -o-transform:scale(1.2);
      opacity:0;
    }
}
@keyframes pulsatew {
    0% {
       transform:scale(.1);
      opacity: 0.0;
    }
    50% {
      opacity:1;
    }
    100% {
       transform:scale(1.2);
      opacity:0;
    }
}
 </style>
<div class="wpmchimpa-reset wpmchimpselector" id="<?php echo $wpmcw_id; ?>">
	<p><?php if(isset($theme['widget_msg'])) echo $theme['widget_msg'];?></p>
	<form action="" method="post">
      <?php if(isset($wpmchimpa['namebox']))echo'<input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'"/>';?>
      <input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/>
      <div class="wpmcinfierr" wpmcerr="email"></div>
      <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
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
	<div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"></div></div>
	</form>
	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
</div> </div>