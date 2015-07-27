<?php 
$theme = $wpmchimpa['theme']['a9'];
$this->extrascript(2);
?>
<style type="text/css">
#wpmchimpaf .wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 320px;
background: #27313B;
text-align: center;
box-shadow: 0 0 20px rgba(0,0,0,.2);
bottom: 10px;
right: 10px;
overflow: hidden;
border-radius: 3px;
padding: 0 5px;
  -webkit-backface-visibility: hidden;
-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  <?php 
    if(isset($theme["addon_bg_c"])){
        echo 'background:'.$theme["addon_bg_c"].';';
    }
  ?>
}
#wpmchimpaf .wpmchimpaf.wpmchimpaf-close{
-webkit-transform: translateX(500px);
-moz-transform: translateX(500px);
-ms-transform: translateX(500px);
-o-transform: translateX(500px);
transform: translateX(500px);
}
.wpmchimpaf div{
  position:relative;
}
.wpmchimpaf h3{
color: #F4233C;
line-height: 20px;
padding-top:18px;
font-size: 20px;
<?php 
  if(isset($theme["addon_heading_f"])){
    echo 'font-family:'.$theme["addon_heading_f"].';';
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
font-size: 12px;
color: #959595;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.$theme["addon_msg_f"].';';
}?>
}
.wpmchimpaf > p{
  margin: 12px auto;
}
.wpmchimpaf form{
margin: 20px auto;
}
.wpmchimpaf .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
.wpmchimpaf .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
.wpmchimpaf .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
.wpmchimpaf input[type="text"] {
text-align: left;
margin-bottom: 10px;
width: 100%;
height: 35px;
background: #fff;
 padding: 0 10px 0 40px;
border-radius: 3px;
color: #353535;
font-size:14px;
outline:0;
display: block;
border: 1px solid #efefef;
<?php 
  if(isset($theme["addon_tbox_f"])){
    echo 'font-family:'.$theme["addon_tbox_f"].';';
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
  border: 1px solid red;
}
.wpmchimpaf .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-top: -10px;
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


.wpmchimpaf input[type="text"]+label{
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
transition: all 0.5s ease;
<?php 
    if(isset($theme["addon_tbox_h"])){
        echo 'height:'.$theme["addon_tbox_h"].'px;';
    } ?>
}
.wpmchimpaf input[wpmcfield="name"]+label{
background: <?php
    $tfc='#A4A9AD';
    echo ChimpMate_WPMC_Assistant::getIcon('m5',13,$tfc,612);?> no-repeat center;
}
.wpmchimpaf input[wpmcfield="email"]+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',13,$tfc,345.779);?> no-repeat center;
}


.wpmchimpaf input[wpmcfield="name"]:focus+label,
.wpmchimpaf input[wpmcfield="name"]:valid+label{
background: <?php
    $tfc='#000';
    if(isset($theme["addon_tbox_fc"])){$tfc=$theme["addon_tbox_fc"];}
    echo ChimpMate_WPMC_Assistant::getIcon('m5',13,$tfc,612);?> no-repeat center;
}
.wpmchimpaf input[wpmcfield="email"]:focus+label,
.wpmchimpaf input[wpmcfield="email"]:valid+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',13,$tfc,345.779);?> no-repeat center;
}

.wpmchimpaf .wpmchimpa-subs-button{
border-radius: 0 3px 3px 0;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #FA0B38;
background-color: #FF1F43;
height: 35px;
line-height: 30px;
text-align: center;
cursor: pointer;
position: absolute;
top: 0;
transition: all 0.5s ease;
<?php
  if(isset($theme["addon_button_f"])){
    echo 'font-family:'.$theme["addon_button_f"].';';
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
  if(isset($theme["addon_button_br"])){
      echo '-webkit-border-radius:'.$theme["addon_button_br"].'px;';
      echo '-moz-border-radius:'.$theme["addon_button_br"].'px;';
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
background-color: #FA0B38; 
    <?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
      ?>
}

.wpmchimpaf .wpmchimpa-signal.signalshow + .wpmchimpa-subs-button::before{
  content:'';
}

.wpmchimpaf .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.$theme["addon_status_f"].';';
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
font-size: 15px;height: auto;  margin: 10px;
}
.wpmchimpaf .wpmchimpa-groups{
  display: block;
}
.wpmchimpaf .wpmchimpa-groupsc{
  margin:5px auto;
}
.wpmchimpaf .wpmchimpa-item{
  display:inline-block;
  margin: 2px 5px;
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
text-align: left;
padding-left: 22px;
min-width: 70px;
line-height: 14px;
font-size: 12px;
color: #fff;
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
  width: 12px;
  height: 12px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:before {
border:1px solid #353535;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
background-color: #fff;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  <?php
    if(isset($theme["addon_check_borc"]))
        echo 'border:1px solid '.$theme["addon_check_borc"].';';
   if(isset($theme["addon_check_c"]))
        echo 'background-color:'.$theme["addon_check_c"].';'; ?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:hover:after,.wpmchimpaf input[type='checkbox']:checked + label:after {
  content:'';
  background: no-repeat center;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
  <?php 
if($theme['addon_check_shade'] == '1'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['addon_check_shade'] == '2'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + label:hover:after {
 opacity: 0.5;
}

.wpmchimpaf .wpmchimpaf-close-button {
display: inline-block;
top: 0;
right: 0;
width: 25px;
position: absolute;
cursor:pointer;
}

.wpmchimpaf .wpmchimpaf-close-button::before {
    content: "\00D7";
font-size: 25px;
line-height: 25px;
font-weight: 100;
color: #999;
opacity: 0.4;
}
.wpmchimpaf .wpmchimpaf-close-button:hover:before {
opacity: 1;
}

.wpmchimpaf .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 4px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
.wpmchimpaf .wpmchimpa-signal.signalshow {
  display: inline-block;
}
<?php $color ="#000";
if(isset($theme["addon_spinner_c"])){
    $color = $theme["addon_spinner_c"];
}?>
.wpmchimpaf .sp8 {margin: 0 auto;width: 50px;height: 30px;}.wpmchimpaf .sp8 > div {background-color: <?php echo $color;?>;margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: wpmchimpafsp8 1.2s infinite ease-in-out;animation: wpmchimpafsp8 1.2s infinite ease-in-out;}.wpmchimpaf .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}.wpmchimpaf .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}.wpmchimpaf .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}.wpmchimpaf .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes wpmchimpafsp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes wpmchimpafsp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

@media only screen and (max-width : 1024px) {
#wpmchimpaf .wpmchimpaf{
  display: none;
}
}
</style>
<div class="wpmchimpaf-tray chimpmatecss wpmchimpselector" id="wpmchimpaf">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close">
    <?php echo isset($theme['addon_heading'])?'<h3>'.$theme['addon_heading'].'</h3>' : '<h3>Subscribe Now</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  
  <p><?php if(isset($theme['addon_msg'])) echo $theme['addon_msg'];?></p>
  <form action="" method="post">
              <?php if(isset($wpmchimpa['namebox']))echo'<div><input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'" required/><label></label></div>';?>
              
              <div class="formbox">
              <div>
              <div><input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="formbox" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/><label></label></div>
              <div class="wpmcinfierr" wpmcerr="email"></div>
              <input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>

              </div>
              <div>
                <div class="wpmchimpa-signal"><div class="sp8"><div class="sp81"></div><div class="sp82"></div><div class="sp83"></div><div class="sp84"></div><div class="sp85"></div></div></div>
              
                <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
              </div>
              <div style="clear:both"></div>
              </div>
              <div class="wpmchimpa-groupsc">
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
          for($j=0,$temp=uniqid();$i< $count && $j<4;$i++,$j++,$temp=uniqid())
            echo '<div class="wpmchimpa-item">
                      <input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$temp.'" value="'.$group_record[$i]['id'].'">  
                    <label for="wpmchimpag'.$temp.'">'.$group_record[$i]['gname'].'</label>
                    </div>';
              echo '</div>';
        }
      }
      ?>
              </div>

  </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>