<?php 
$theme = $wpmchimpa['theme']['s0'];
$this->extrascript(0);
?>
<style type="text/css">
	
.wpmchimpas {
background: #333;
color: #fff;
<?php
        if(isset($theme["slider_bg_c"])){
            echo 'background:'.$theme["slider_bg_c"].';';
        }?>
}
.wpmchimpas-inner {
text-align: center;
}
.wpmchimpas h3{
  font-size: 18px;
  line-height: 18px;
  margin: 40px 0 20px;
  <?php 
        if(isset($theme["slider_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_heading_f"]).';';
        }
        if(isset($theme["slider_heading_fs"])){
            echo 'font-size:'.$theme["slider_heading_fs"].'px;';
        }
        if(isset($theme["slider_heading_fw"])){
            echo 'font-weight:'.$theme["slider_heading_fw"].';';
        }
        if(isset($theme["slider_heading_fst"])){
            echo 'font-style:'.$theme["slider_heading_fst"].';';
        }
        if(isset($theme["slider_heading_fc"])){
            echo 'color:'.$theme["slider_heading_fc"].';';
        }
    ?>
}
.wpmchimpas p,.wpmchimpas p *{
  font-size: 14px;
  margin-bottom: 10px;
  line-height: 20px;
  text-align: center;
    <?php 
        if(isset($theme["slider_msg_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_msg_f"]).';';
        }
        if(isset($theme["slider_msg_fs"])){
            echo 'font-size:'.$theme["slider_msg_fs"].'px;';
        }
    ?>
}

.wpmchimpas .wpmchimpa-groups{
  display: inline-block;margin-bottom: 10px;
}
.wpmchimpas .wpmchimpa-item{
  float:left;
  margin: 2px 15px;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox']:focus,
.wpmchimpas .wpmchimpa-item input[type='checkbox']:active {
  outline: none;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 25px;
  margin-right: 10px;
  color: #686868;
  <?php
        if(isset($theme["slider_check_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_check_f"]).';';
        }
        if(isset($theme["slider_check_fs"])){
            echo 'font-size:'.$theme["slider_check_fs"].'px;';
        }
        if(isset($theme["slider_check_fw"])){
            echo 'font-weight:'.$theme["slider_check_fw"].';';
        }
        if(isset($theme["slider_check_fst"])){
            echo 'font-style:'.$theme["slider_check_fst"].';';
        }
        if(isset($theme["slider_check_fc"])){
            echo 'color:'.$theme["slider_check_fc"].';';
        }
      ?>
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #ACACAC;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  top: 0px;
  <?php
        if(isset($theme["slider_check_borc"])){
            echo 'border: 1px solid'.$theme["slider_check_borc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-item input[type='checkbox']:checked + label:before {
 <?php if(isset($theme["slider_check_c"])) $color = $theme["slider_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}


.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpas input[type='checkbox']:checked + label:after {
  content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);
  <?php 
if($theme['slider_check_shade'] == '1'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['slider_check_shade'] == '2'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
  left: -3px;
  top:-1px;
}
.wpmchimpas .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
 opacity: 0.5;
}

.wpmchimpas input[type="text"] {
    display: inline-block;
    width:55%;
    background:#fff;
    height:45px;
    text-align: center;
    margin-bottom:12px;
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
    <?php 
        if(isset($wpmchimpa['namebox'])){
          echo 'width:100%;';
        }
        else echo 'float: left;';
        if(isset($theme["slider_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_tbox_f"]).';';
        }
        if(isset($theme["slider_tbox_fs"])){
            echo 'font-size:'.$theme["slider_tbox_fs"].'px;';
        }
        if(isset($theme["slider_tbox_fw"])){
            echo 'font-weight:'.$theme["slider_tbox_fw"].';';
        }
        if(isset($theme["slider_tbox_fst"])){
            echo 'font-style:'.$theme["slider_tbox_fst"].';';
        }
        if(isset($theme["slider_tbox_fc"])){
            echo 'color:'.$theme["slider_tbox_fc"].';';
        }
        if(isset($theme["slider_tbox_bgc"])){
            echo 'background:'.$theme["slider_tbox_bgc"].';';
        }
        if(isset($theme["slider_tbox_w"])){
            echo 'width:'.$theme["slider_tbox_w"].'px;';
        }
        if(isset($theme["slider_tbox_h"])){
            echo 'height:'.$theme["slider_tbox_h"].'px;';
        }
        if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
            echo ' border:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
        }
    ?>
}

.wpmchimpas input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 22px;
  line-height: 18px;
  margin-top: -12px;
  font-size: 11px;
  color: red;
  <?php
    if(isset($theme["slider_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["slider_status_f"]).';';
    }
    if(isset($theme["slider_status_fw"])){
        echo 'font-weight:'.$theme["slider_status_fw"].';';
    }
    if(isset($theme["slider_status_fst"])){
        echo 'font-style:'.$theme["slider_status_fst"].';';
    }
  ?>
}
.wpmchimpas input[type="email"]:focus,.wpmchimpas input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
            echo ' border:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
        } ?>
}
.wpmchimpas .wpmchimpa-subs-button{
  display:inline-block;
  vertical-align: initial;
  text-align: center;
  width: 150px;
    height:45px;
    background: #62bc33;
  color:#fff;
    cursor:pointer;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  <?php
        if(isset($wpmchimpa['namebox'])){
          echo 'width:100%;';
        }
        if(isset($theme["slider_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_button_f"]).';';
        }
        if(isset($theme["slider_button_fs"])){
            echo 'font-size:'.$theme["slider_button_fs"].'px;';
        }
        if(isset($theme["slider_button_fw"])){
            echo 'font-weight:'.$theme["slider_button_fw"].';';
        }
        if(isset($theme["slider_button_fst"])){
            echo 'font-style:'.$theme["slider_button_fst"].';';
        }
        if(isset($theme["slider_button_fc"])){
            echo 'color:'.$theme["slider_button_fc"].';';
        }
        if(isset($theme["slider_button_w"])){
            echo 'width:'.$theme["slider_button_w"].'px;';
        }
        if(isset($theme["slider_button_h"])){
            echo 'height:'.$theme["slider_button_h"].'px;';
        }
        if(isset($theme["slider_button_bc"])){
            echo 'background:'.$theme["slider_button_bc"].';';
        }
        else{ ?>
          background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
        <?php }
        if(isset($theme["slider_button_br"])){
            echo '-webkit-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-moz-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-ms-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-o-border-radius:'.$theme["slider_button_br"].'px;';
            echo 'border-radius:'.$theme["slider_button_br"].'px;';
        }
        if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
            echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-subs-button::before{
  content: '<?php if(isset($theme['slider_button'])) echo $theme['slider_button'];else echo 'Subscribe';?>';
  display: block;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.wpmchimpas .wpmchimpa-subs-button:hover{

    background:#8BD331;
   
  color:#fff;
	<?php 
        if(isset($theme["slider_button_bch"])){
            echo 'background:'.$theme["slider_button_bch"].';';
        }
        else{ ?> 
          background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($theme["slider_button_fch"])){
            echo 'color:'.$theme["slider_button_fch"].';';
        }
        if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
            echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-signalc {
height: 40px;
top: 4px;
margin-top: 10px;
}
.wpmchimpas .wpmchimpa-signal {
    display: none;
    border: 3px solid #fff;
    margin: 0 auto;
left: 0;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    height: 30px;
    opacity: 0;
    position: relative;
    width: 30px;
 <?php
        if(isset($theme["slider_spinner_c"])){
            echo 'border:3px solid '.$theme["slider_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsates 1s ease-out infinite;
  -moz-animation: pulsates 1s ease-out infinite;
  -ms-animation: pulsates 1s ease-out infinite; 
  -o-animation: pulsates 1s ease-out infinite;
  animation: pulsates 1s ease-out infinite;
  
}
.wpmchimpas .wpmchimpa-feedback{
  clear:both;
  margin-top:-14px;
  height: 14px; 
position: relative;
  <?php
        if(isset($theme["slider_status_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_status_f"]).';';
        }
        if(isset($theme["slider_status_fs"])){
            echo 'font-size:'.$theme["slider_status_fs"].'px;';
        }
        if(isset($theme["slider_status_fw"])){
            echo 'font-weight:'.$theme["slider_status_fw"].';';
        }
        if(isset($theme["slider_status_fst"])){
            echo 'font-style:'.$theme["slider_status_fst"].';';
        }
        if(isset($theme["slider_status_fc"])){
            echo 'color:'.$theme["slider_status_fc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done{
margin-top: 14px;
}  
@-webkit-keyframes pulsates {
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
@-moz-keyframes pulsates {
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
@-ms-keyframes pulsates {
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
@-o-keyframes pulsates {
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
@keyframes pulsates {
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

.wpmchimpas .wpmchimpa-tag{
color:#fff;
font-size: 10px;
margin-top: 5px;
<?php
        if(isset($theme["slider_tag_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["slider_tag_f"]).';';
        }
        if(isset($theme["slider_tag_fs"])){
            echo 'font-size:'.$theme["slider_tag_fs"].'px;';
        }
        if(isset($theme["slider_tag_fw"])){
            echo 'font-weight:'.$theme["slider_tag_fw"].';';
        }
        if(isset($theme["slider_tag_fst"])){
            echo 'font-style:'.$theme["slider_tag_fst"].';';
        }
        if(isset($theme["slider_tag_fc"])){
            echo 'color:'.$theme["slider_tag_fc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-tag a:before{

   content:<?php
        $tfs=10;
        if(isset($theme["slider_tag_fs"])){$tfs=$theme["slider_tag_fs"];}
        $tfc='#fff';
        if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
        echo ChimpMate_WPMC_Assistant::getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpas-trig{	
top:40%;
<?php
    if(isset($theme["slider_trigger_top"])){
        echo 'top:'.$theme["slider_trigger_top"].'%;';
    }
  ?>
}
.wpmchimpas-trigc{ 
background: #000;
width:50px;
height:50px;
<?php
  if(isset($theme["slider_trigger_bg"])){
      echo 'background:'.$theme["slider_trigger_bg"].';';
  }
?>
}
.wpmchimpas-trig:hover{
opacity:0.7;
}
.wpmchimpas-trig.scrollhide{
-webkit-transform: translateX(-50px);
-moz-transform: translateX(-50px);
-ms-transform: translateX(-50px);
-o-transform: translateX(-50px);
transform: translateX(-50px);
}
.wpmchimpas-trig.right.scrollhide{
-webkit-transform: translateX(50px);
-moz-transform: translateX(50px);
-ms-transform: translateX(50px);
-o-transform: translateX(50px);
transform: translateX(50px);
}
.wpmchimpas-trigc:before{	
content:<?php echo ChimpMate_WPMC_Assistant::getIcon('m1',32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
}
</style>



<div id="wpmchimpas">
  <div class="wpmchimpas-cont">
  <div class="wpmchimpas-scroller">
    <div class="wpmchimpas-resp">
    <div class="wpmchimpas-inner wpmchimpselector">
     
<h3><?php if(isset($theme['slider_heading'])) echo $theme['slider_heading'];?></h3>
	<p><?php if(isset($theme['slider_msg'])) echo $theme['slider_msg'];?></p>
	<form action="" method="post" class="wpmchimpa-reset wpmchimpa-mainc">
                    <?php if(isset($wpmchimpa['namebox']))echo'<input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'"/>';?>
                    <input type="text" name="email" wpmcfield="email" wpmcreq="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/>
                    <div class="wpmcinfierr" wpmcerr="email"></div>
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
        					<input type="checkbox" name="wpmchimpag[]" id="wpmchimpags'.$temp.'" value="'.$group_record[$i]['id'].'">  
    						<label for="wpmchimpags'.$temp.'">'.$group_record[$i]['gname'].'</label>
        				</div>';
			}
    		echo '</div>';
		}
		?>
    <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
    <?php if(isset($theme['slider_tag_en'])){
        if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
       else $tagtxt='Secure and Spam free...';
        $ref='';
        if(isset($wpmchimpa["share_text"]))
          $ref= ' href="http://voltroid.com/chimpmate/"';
        echo '<div class="wpmchimpa-tag"><a'.$ref.'></a>'.$tagtxt.'</div>';
        }?>
    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"></div></div>
	</form>
	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>

    </div>
  </div>
</div>
</div>
</div><div class="wpmchimpas-bg"></div>
<div class="wpmchimpas-overlay"></div>
<div id="wpmchimpas-trig" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
<div class="wpmchimpas-trigc"></div>
</div>