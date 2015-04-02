<?php 
$theme = $wpmchimpa['theme']['a1'];
?>
<style type="text/css">
.wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 320px;
background: #fff;
box-shadow: 0 0 20px rgba(0,0,0,.2);
bottom: 10px;
right: 10px;
overflow: hidden;
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
}
.wpmchimpaf h3{
  display: block;
  width: 95%;
    font-size:16px;
    line-height: 35px;
    font-weight:400;
    margin: 10px;
    text-align: center;
    float: left;
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
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.str_replace("|ng","",$theme["addon_msg_f"]).';';
}?>
}

.wpmchimpaf .wpmchimpaf-cont{
  padding:10px;
  text-align: center;
  max-height: 500px;
}
.wpmchimpaf form{
  margin-bottom: 20px;
}
.wpmchimpaf input[type="email"],.wpmchimpaf input[type="text"] {
        display: inline-block;
   -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    width: 100%;
    background: #f8fafa;
    margin-bottom: 10px;
  margin-right: 5px;
    padding: 0 5%;
    border: 1px solid #e4e9e9;
    height:34px;
    color: #353535;
    outline:0;
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

.wpmchimpaf input[type="email"]:focus,.wpmchimpaf input[type="text"]:focus {
    <?php 
        if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
            echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
        } ?>
}
.wpmchimpaf .wpmchimpa-subs-button{
   -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
  display:inline-block;
  text-align: center;
  width: 100%;
    height:40px;
    line-height: 40px;
    border: 1px solid #3079ed;
   background-color: #4d90fe;
  color:#fff;
    cursor:pointer;
    text-shadow:none;
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
           background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
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
          background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
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
position: relative;
bottom: 10px;
height:14px;
width: 100%;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
    }
    if(isset($theme["addon_status_fs"])){
        echo 'font-size:'.$theme["addon_status_fs"].'px;';
        echo 'height:'.$theme["addon_status_fs"].'px;';
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
position: relative;
margin-top: 25px;
font-size: 20px;
}
.wpmchimpaf .wpmchimpa-groups{
display: block;
margin-top: 5px;
}
.wpmchimpaf .wpmchimpa-item{
display:inline-block;
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
padding-left: 2px;
line-height: 25px;
min-width: 100px;
<?php
if(isset($theme["slider_check_fc"])){
echo 'color:'.$theme["slider_check_fc"].';';
}
?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:after {
content: '';
display: inline-block;
width: 22px;
height: 22px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:before {

-webkit-box-shadow: 0 0 1px 1px #ccc;
-moz-box-shadow: 0 0 1px 1px #ccc;
-ms-box-shadow: 0 0 1px 1px #ccc;
-o-box-shadow: 0 0 1px 1px #ccc;
box-shadow: 0 0 1px 1px #ccc;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px ;
border-radius: 3px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
if(isset($theme["slider_check_borc"])){
echo 'border:1px solid '.$theme["slider_check_borc"].';';
}  ?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:after {
color: #b3b3b3;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox']:checked + label:before {
<?php
if(isset($theme["slider_check_c"])){
echo 'background-color:'.$theme["slider_check_c"].';';
}  ?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpaf input[type='checkbox']:checked + label::after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
<?php 
if($theme['slider_check_shade'] == '1'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['slider_check_shade'] == '2'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
left: -2px;
top: 4px;
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
opacity: 0.5;
}
.wpmchimpaf .wpmchimpaf-close-button {
  display: inline-block;
  width: 17px;
  height: 30px;
  right: 20px;
  top: 10px;
  position: absolute;
  cursor: pointer;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.wpmchimpaf .wpmchimpaf-close-button::before {
  content: "\00D7";
  font-size: 30px;
  font-weight: 100;
  color: #959595;
  }
.wpmchimpaf .wpmchimpaf-close-button:hover:before {
    color: #000;
}
.wpmchimpaf .wpmchimpa-signal{
  display: none;
  text-align: center;
  width: 300px;
}
.wpmchimpaf .wpmchimpa-signal-cont {
display: inline-block;
position: absolute;
clip: rect(0, 40px, 40px, 20px); 
width:40px;
height:40px;
  -webkit-animation: animatef 1.5s linear infinite;
  -moz-animation: animatef 1.5s linear infinite;
  -ms-animation: animatef 1.5s linear infinite;
  -o-animation: animatef 1.5s linear infinite;
  animation: animatef 1.5s linear infinite;
  
}
@-webkit-keyframes animatef {
  0% { 
    -webkit-transform: rotate(0deg)
  }
  100% { 
    -webkit-transform: rotate(220deg)
  }
}
@-moz-keyframes animatef {
  0% { 
    -moz-transform: rotate(0deg)
  }
  100% { 
    -moz-transform: rotate(220deg)
  }
}
@-ms-keyframes animatef {
  0% { 
    -ms-transform: rotate(0deg)
  }
  100% { 
    -ms-transform: rotate(220deg)
  }
}
@-o-keyframes animatef {
  0% { 
    -o-transform: rotate(0deg)
  }
  100% { 
    -o-transform: rotate(220deg)
  }
}
@keyframes animatef {
  0% { 
    transform: rotate(0deg)
  }
  100% { 
    transform: rotate(220deg)
  }
}

.wpmchimpaf .wpmchimpa-signal-cont:after {
  -webkit-animation: animatef2 1.5s ease-in-out infinite;
  -moz-animation: animatef2 1.5s ease-in-out infinite;
  -ms-animation: animatef2 1.5s ease-in-out infinite;
  -o-animation: animatef2 1.5s ease-in-out infinite;
  animation: animatef2 1.5s ease-in-out infinite;
  left: 0;
  clip: rect(0, 40px, 40px, 20px);
  content:'';
  -webkit-border-radius: 50%; 
  -moz-border-radius: 50%; 
  -ms-border-radius: 50%; 
  -o-border-radius: 50%; 
  border-radius: 50%; 
  height: 40px;
  width: 40px;
  position: absolute; 
} 
<?php  if(isset($theme["addon_spinner_c"]))$c=$theme["addon_spinner_c"];else $c="#000";?>
@-webkit-keyframes animatef2 {
  0% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -webkit-transform: rotate(-140deg);
  }
  50% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -webkit-transform: rotate(140deg);
  }
} 
@-moz-keyframes animatef2 {
  0% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -moz-transform: rotate(-140deg);
  }
  50% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -moz-transform: rotate(140deg);
  }
} 
@-ms-keyframes animatef2 {
  0% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -ms-transform: rotate(-140deg);
  }
  50% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -ms-transform: rotate(140deg);
  }
} 
@-o-keyframes animatef2 {
  0% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -o-transform: rotate(-140deg);
  }
  50% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -o-transform: rotate(140deg);
  }
} 
@keyframes animatef2 {
  0% {
    box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    transform: rotate(-140deg);
  }
  50% {
    box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    transform: rotate(140deg);
  }
}
@media only screen and (max-width : 1024px) {
.wpmchimpaf{
  display: none;
}
}
</style>
<div class="wpmchimpaf-tray">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close">
  <div class="wpmchimpaf-head">
    <?php echo isset($theme['addon_heading'])?'<h3>'.$theme['addon_heading'].'</h3>' : '<h3>Subscribe Now</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  </div>
  <div class="wpmchimpaf-cont">
  <p><?php if(isset($theme['addon_msg'])) echo $theme['addon_msg'];?></p>
  <form action="" method="post">
  <?php if(isset($wpmchimpa['namebox'])){
    if(isset($wpmchimpa['labelnb'])) $nl = $wpmchimpa['labelnb'];
     else $nl = 'Name';
    echo '<input type="text" name="name" class="wpmchimpa_name" placeholder="'.$nl.'" required/>'; 
  }
  ?>
    <input type="email" name="email" class="wpmchimpa_email" placeholder="<?php if(isset($wpmchimpa['labeleb'])) echo $wpmchimpa['labeleb'];else echo 'Email address';?>" required/>
    <div class="wpmchimpa-subs-button"></div>
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
   <div class="wpmchimpa-signal"><div class="wpmchimpa-signal-cont"></div></div>
    <input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
  </form>
  <div class="wpmchimpa-feedback"></div>
  </div>
  </div>
</div>