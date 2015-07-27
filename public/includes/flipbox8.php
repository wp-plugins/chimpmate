<?php 
$theme = $wpmchimpa['theme']['a8'];
$this->extrascript(2);
?>
<style type="text/css">
#wpmchimpaf .wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 320px;
background: #262E43;
text-align: center;
box-shadow: 0 0 20px rgba(0,0,0,.2);
bottom: 10px;
right: 10px;
overflow: hidden;
border-radius: 3px;
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
.wpmchimpaf h3{
line-height: 20px;
padding-top:20px;
color: #fff;
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
color: #ADBBE0;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.$theme["addon_msg_f"].';';
}?>
}
.wpmchimpaf > p{
    margin: 10px 10px 0;
  line-height: 14px;
}
.wpmchimpaf form{
margin-top: 20px;
overflow: hidden;
}
.wpmchimpaf .formbox{
margin: 0 auto;
width: calc(100% - 20px);
}
.wpmchimpaf .formbox > div{
position: relative;
}
.wpmchimpaf input[type="text"] {
text-align: left;
margin-bottom: 10px;
width: 100%;
height: 35px;
background: #fff;
 padding: 0 10px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #353535;
font-size:17px;
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

.wpmchimpaf .wpmchimpa-subs-button{
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #50B059;
background-color: #73C557;
height: 36px;
line-height: 36px;
text-align: center;
cursor: pointer;
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
background-color: #50B059; 
    <?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
      ?>
}

.wpmchimpaf .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
.wpmchimpaf .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 13px;
color: #ADACB2;
width: 100%;
display: block;
margin: 15px auto 5px;
<?php
if(isset($theme["addon_soc_f"])){
  echo 'font-family:'.$theme["addon_soc_f"].';';
}
if(isset($theme["addon_soc_fs"])){
    echo 'font-size:'.$theme["addon_soc_fs"].'px;';
    echo 'line-height:'.$theme["addon_soc_fs"].'px;';
}
if(isset($theme["addon_soc_fw"])){
    echo 'font-weight:'.$theme["addon_soc_fw"].';';
}
if(isset($theme["addon_soc_fst"])){
    echo 'font-style:'.$theme["addon_soc_fst"].';';
}
if(isset($theme["addon_soc_fc"])){
    echo 'color:'.$theme["addon_soc_fc"].';';
}
?>
}

.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc{
display: inline-block;
width:40px;
height: 40px;
border-radius: 2px;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border:1px solid #262E43;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'border-color: '.$theme["addon_bg_c"].';';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',15,'#fff');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',15,'#2d609b');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',15,'#fff');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',15,'#eb4026');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',15,'#fff');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',15,'#00BCF2');?>
}

.wpmchimpaf .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
top: -91px;
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
font-size: 15px;top: 0;  margin: 0; padding: 10px;
  height: auto;
}
.wpmchimpaf .wpmchimpa-groups{
  display: block;
}
.wpmchimpaf .wpmchimpa-groupsc{
  margin: 10px auto 0;
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
position: absolute;
top: 4px;
right: 3px;
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
.wpmchimpaf .sp3 {width: 40px;height: 40px;position: relative;margin: -5px auto;}.wpmchimpaf .sp3:before, .wpmchimpaf .sp3:after {content: "";width: 100%;height: 100%;border-radius: 50%;background-color: <?php echo $color;?>;opacity: 0.6;position: absolute;top: 0;left: 0;-webkit-animation: wpmchimpafsp3 2.0s infinite ease-in-out;animation: wpmchimpafsp3 2.0s infinite ease-in-out;}.wpmchimpaf .sp3:after {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}@-webkit-keyframes wpmchimpafsp3 {0%, 100% { -webkit-transform: scale(0) }50% { -webkit-transform: scale(1) }}@keyframes wpmchimpafsp3 {0%, 100% {transform: scale(0)}50% {transform: scale(1)}}

#wpmchimpaf.wosoc .wpmchimpa-social{
display: none;
}

@media only screen and (max-width : 1024px) {
#wpmchimpaf .wpmchimpaf{
  display: none;
}
}
</style>
<div class="wpmchimpaf-tray chimpmatecss wpmchimpselector<?php if(isset($theme['addon_dissoc']))echo ' wosoc';?>" id="wpmchimpaf">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close">
    <?php echo isset($theme['addon_heading'])?'<h3>'.$theme['addon_heading'].'</h3>' : '<h3>Subscribe Now</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  
  <p><?php if(isset($theme['addon_msg'])) echo $theme['addon_msg'];?></p>
  <form action="" method="post">
              <div class="formbox">
              <?php if(isset($wpmchimpa['namebox']))echo'<input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'"/>';?>
              <input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/>
              <div class="wpmcinfierr" wpmcerr="email"></div>
              <input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>

              <div>
                <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
                <div class="wpmchimpa-signal"><div class="sp3"></div></div>
              
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

            </div>

            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
  </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>