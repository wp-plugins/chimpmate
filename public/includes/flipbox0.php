<?php 
$theme = $wpmchimpa['theme']['a0'];
$this->extrascript(0);
?>
<style type="text/css">
.wpmchimpaf{
	position:fixed;z-index: 99999;
	display: inline-block;
	width: 320px;
	background: #000;
bottom: 10px;
right: 10px;
padding-bottom: 35px
-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
 <?php 
        if(isset($theme["addon_bg_c"])){
            echo 'background:'.$theme["addon_bg_c"].';';
        }
    ?>
}
.wpmchimpaf.wpmchimpaf-close{
-webkit-transform: translateX(500px);
-moz-transform: translateX(500px);
-ms-transform: translateX(500px);
-o-transform: translateX(500px);
transform: translateX(500px);
}
.wpmchimpaf .wpmchimpaf-head{
  width: 100%;
  height: 35px;
}
.wpmchimpaf h3{
display: block;
width: 200px;
font-size:15px;
line-height: 35px;
font-weight:400;
color:#fff;
padding-left: 10px;
float: left;
width: 100%;
text-align: center;
    <?php 
        if(isset($theme["addon_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_heading_f"]).';';
        }
        if(isset($theme["addon_heading_fw"])){
            echo 'font-weight:'.$theme["addon_heading_fw"].';';
        }
        if(isset($theme["addon_heading_fst"])){
            echo 'font-style:'.$theme["addon_heading_fst"].';';
        }
        if(isset($theme["addon_heading_fc"])){
            echo 'color:'.$theme["addon_heading_fc"].';';
        }
    ?>
}

.wpmchimpaf p,.wpmchimpaf p * {
  margin-bottom: 10px;
  color: #fff;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.str_replace("|ng","",$theme["addon_msg_f"]).';';
}?>
}
.wpmchimpaf .wpmchimpaf-trig{
  content:<?php echo ChimpMate_WPMC_Assistant::getIcon('up1',20,(isset($theme["addon_heading_fc"]))?$theme["addon_heading_fc"]:'#fff',100);?>;
display: block;
width: 20px;
height: 35px;
cursor: pointer;
}
.wpmchimpaf .wpmchimpaf-cont{
  padding:10px;
  text-align: center;
}
.wpmchimpaf input[type="email"],.wpmchimpaf input[type="text"] {
    display: inline-block;
    width:100%;
    background:#fff;
    margin-bottom: 10px;
    height:30px;
    text-align: center;
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
        if(isset($theme["addon_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_tbox_f"]).';';
        }
        if(isset($theme["addon_tbox_fs"])){
            echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
        }
        if(isset($theme["addon_tbox_fw"])){
            echo 'font-weight:'.$theme["addon_tbox_fw"].';';
        }
        if(isset($theme["addon_tbox_fst"])){
            echo 'font-style:'.$theme["addon_tbox_fst"].';';
        }
        if(isset($theme["addon_tbox_fc"])){
            echo 'color:'.$theme["addon_tbox_fc"].';';
        }
        if(isset($theme["addon_tbox_bgc"])){
            echo 'background:'.$theme["addon_tbox_bgc"].';';
        }
        if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
            echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
        }
    ?>
}

.wpmchimpaf input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpaf .wpmcinfierr{
  display: block;
  height: 16px;
  line-height: 14px;
  margin-top: -12px;
  font-size: 10px;
  color: red;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
    }
    if(isset($theme["addon_status_fw"])){
        echo 'font-weight:'.$theme["addon_status_fw"].';';
    }
    if(isset($theme["addon_status_fst"])){
        echo 'font-style:'.$theme["addon_status_fst"].';';
    }
  ?>
}
.wpmchimpaf input[type="email"]:focus,.wpmchimpaf input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
            echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
        } ?>
}
.wpmchimpaf .wpmchimpa-subs-button{
  display:inline-block;
  text-align: center;
  width: 100%;
    height:28px;
    line-height: 26px;
    margin-bottom:10px;
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
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    border-radius: 1px;
  <?php
        if(isset($theme["addon_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_button_f"]).';';
        }
        if(isset($theme["addon_button_fs"])){
            echo 'font-size:'.$theme["addon_button_fs"].'px;';
        }
        if(isset($theme["addon_button_fw"])){
            echo 'font-weight:'.$theme["addon_button_fw"].';';
        }
        if(isset($theme["addon_button_fst"])){
            echo 'font-style:'.$theme["addon_button_fst"].';';
        }
        if(isset($theme["addon_button_fc"])){
            echo 'color:'.$theme["addon_button_fc"].';';
        }
        if(isset($theme["addon_button_bc"])){
            echo 'background:'.$theme["addon_button_bc"].';';
        }
        else{ ?>
          background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
        <?php }
        if(isset($theme["addon_button_br"])){
            echo '-webkit-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-moz-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-ms-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-o-border-radius:'.$theme["addon_button_br"].'px;';
            echo 'border-radius:'.$theme["addon_button_br"].'px;';
        }
        if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
            echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpaf .wpmchimpa-subs-button::before{
  content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
  display: block;
}
.wpmchimpaf .wpmchimpa-subs-button:hover{
    background:#8BD331;   
  color:#fff;
	<?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        else{ ?> 
          background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
        if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
            echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
        }
      ?>
}

.wpmchimpaf .wpmchimpa-feedback{
  clear:both;
position: relative;
color: #fff;
height: 14px;
  margin-top: -26px;
  <?php
        if(isset($theme["addon_status_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
        }
        if(isset($theme["addon_status_fs"])){
            echo 'font-size:'.$theme["addon_status_fs"].'px;';
        }
        if(isset($theme["addon_status_fw"])){
            echo 'font-weight:'.$theme["addon_status_fw"].';';
        }
        if(isset($theme["addon_status_fst"])){
            echo 'font-style:'.$theme["addon_status_fst"].';';
        }
        if(isset($theme["addon_status_fc"])){
            echo 'color:'.$theme["addon_status_fc"].';';
        }
      ?>
}
.wpmchimpaf .wpmchimpa-feedback.wpmchimpa-done{
margin: 0
 } 
.wpmchimpaf .wpmchimpa-groups{
  display: inline-block;
}
.wpmchimpaf .wpmchimpa-item{
  float:left;
  margin: 2px 15px;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox']:focus,
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:active {
  outline: none;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 25px;
  margin-right: 10px;
  color: #686868;
  <?php
        if(isset($theme["addon_check_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_check_f"]).';';
        }
        if(isset($theme["addon_check_fs"])){
            echo 'font-size:'.$theme["addon_check_fs"].'px;';
        }
        if(isset($theme["addon_check_fw"])){
            echo 'font-weight:'.$theme["addon_check_fw"].';';
        }
        if(isset($theme["addon_check_fst"])){
            echo 'font-style:'.$theme["addon_check_fst"].';';
        }
        if(isset($theme["addon_check_fc"])){
            echo 'color:'.$theme["addon_check_fc"].';';
        }
      ?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #ACACAC;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  <?php
        if(isset($theme["addon_check_borc"])){
            echo 'border: 1px solid'.$theme["addon_check_borc"].';';
        }
      ?>
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:checked + label:before {
 <?php if(isset($theme["addon_check_c"])) $color = $theme["addon_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}


.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpaf input[type='checkbox']:checked + label:after {
  content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);
  <?php 
if($theme['addon_check_shade'] == '1'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['addon_check_shade'] == '2'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
  left: -3px;
top: -5px;
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
 opacity: 0.5;
}

.wpmchimpaf .wpmchimpaf-close-button {
display: inline-block;
width: 1.5em;
height: 1.5em;
right: 10px;
top:5px;
position: absolute;
border: 0.1em solid #7e7e7e;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
-msborder-radius: 50%;
-o-border-radius: 50%;
border-radius: 50%;
cursor:pointer;
background-color: #7e7e7e;
-moz-transform: rotate(45deg); 
-o-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
transform: rotate(45deg);
transition: all 0.5s ease;
}


.wpmchimpaf .wpmchimpaf-close-button::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 80%;
    height: 6%;;
    left: 10%;
    top: 47%;
  }

  .wpmchimpaf .wpmchimpaf-close-button::after {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 6%;
    height: 80%;
    left: 47%;
    top: 10%;
  }
  .wpmchimpaf .wpmchimpaf-close-button:hover {
    background-color: #fff; 
    -ms-transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    -moz-transform: rotate(225deg); 
    -o-transform: rotate(225deg); 
    transform: rotate(225deg); 
  } 

.wpmchimpaf .wpmchimpaf-close-button:hover::after {
      background-color: #7e7e7e;
    }
.wpmchimpaf .wpmchimpaf-close-button:hover::before {
      background-color: #7e7e7e;
    }
.wpmchimpaf .wpmchimpa-signalc{
  height: 40px;
  margin-top: 5px;
} 
.wpmchimpaf .wpmchimpa-signal {
display: none;
border:3px solid #fff;
-webkit-border-radius:30px;
-moz-border-radius:30px;
-ms-border-radius:30px;
-o-border-radius:30px;
border-radius:30px;
height:20px;
margin: 0 auto;
opacity:0;
width:20px;
top:12px;
right:60px;
 <?php
        if(isset($theme["addon_spinner_c"])){
            echo 'border:3px solid '.$theme["addon_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsatet 1s ease-out infinite;
  -moz-animation: pulsatet 1s ease-out infinite;
  -ms-animation: pulsatet 1s ease-out infinite; 
  -o-animation: pulsatet 1s ease-out infinite;
  animation: pulsatet 1s ease-out infinite;
  
}
@-webkit-keyframes pulsatet {
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
@-moz-keyframes pulsatet {
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
@-ms-keyframes pulsatet {
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
@-o-keyframes pulsatet {
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
@keyframes pulsatet {
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
@media only screen and (max-width : 1024px) {
.wpmchimpaf{
	display: none;
}
}
</style>
<div class="wpmchimpaf-tray">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close wpmchimpselector">
  <div class="wpmchimpaf-head">
    <?php echo isset($theme['addon_heading'])?'<h3>'.$theme['addon_heading'].'</h3>' : '<h3>Subscribe Now</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  </div>
  <div class="wpmchimpaf-cont">
  <p><?php if(isset($theme['addon_msg'])) echo $theme['addon_msg'];?></p>
  <form action="" method="post">
      <?php if(isset($wpmchimpa['namebox']))echo'<input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'"/>';?>
      <input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/>
      <div class="wpmcinfierr" wpmcerr="email"></div>
  <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
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
		<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
	</form>
	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>
</div>