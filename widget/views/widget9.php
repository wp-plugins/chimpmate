<?php
$theme = $wpmchimpa['theme']['w9'];
$plugin = ChimpMate_WPMC_Assistant::get_instance();
$plugin->extrascript(2);
$wpmcw_id = "wpmchimpaw-".rand(1,1000);
 ?>
 <style type="text/css">

#<?php echo $wpmcw_id; ?> {
padding: 0 5px;
background: #27313B;
text-align: center;
width: 100%;
<?php  if(isset($theme["widget_bg_c"])){
    echo 'background-color:'.$theme["widget_bg_c"].';';
}?>
}

#<?php echo $wpmcw_id;?> div{
  position:relative;
}

#<?php echo $wpmcw_id;?> h3{
color: #F4233C;
line-height: 20px;
padding-top:18px;
font-size: 20px;
margin: 0;
<?php 
if(isset($theme["widget_heading_f"])){
echo 'font-family:'.$theme["widget_heading_f"].';';
}
if(isset($theme["widget_heading_fs"])){
echo 'font-size:'.$theme["widget_heading_fs"].'px;';
}
if(isset($theme["widget_heading_fw"])){
echo 'font-weight:'.$theme["widget_heading_fw"].';';
}
if(isset($theme["widget_heading_fst"])){
echo 'font-style:'.$theme["widget_heading_fst"].';';
}
if(isset($theme["widget_heading_fc"])){
echo 'color:'.$theme["widget_heading_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> p,#<?php echo $wpmcw_id;?> p * {
font-size: 12px;
color: #959595;
<?php if(isset($theme["widget_msg_f"])){
  echo 'font-family:'.$theme["widget_msg_f"].';';
}if(isset($theme["widget_msg_fs"])){
    echo 'font-size:'.$theme["widget_msg_fs"].'px;';
}?>
}
#<?php echo $wpmcw_id;?> > p{
  padding: 12px 0;
  line-height: 14px;
}
#<?php echo $wpmcw_id;?> form{
margin: 20px auto;
}
#<?php echo $wpmcw_id;?> .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
#<?php echo $wpmcw_id;?> .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
#<?php echo $wpmcw_id;?> .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
#<?php echo $wpmcw_id;?> input[type="text"]{
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
    if(isset($theme["widget_tbox_f"])){
      echo 'font-family:'.$theme["widget_tbox_f"].';';
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
  border: 1px solid red;
}
#<?php echo $wpmcw_id;?> .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
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

#<?php echo $wpmcw_id;?> input[type="text"]+label{
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
transition: all 0.5s ease;
<?php 
    if(isset($theme["widget_tbox_h"])){
        echo 'height:'.$theme["widget_tbox_h"].'px;';
    } ?>
}
#<?php echo $wpmcw_id;?> input[wpmcfield="name"]+label{
background: <?php
    $tfc='#A4A9AD';
    echo ChimpMate_WPMC_Assistant::getIcon('m5',13,$tfc,612);?> no-repeat center;
}
#<?php echo $wpmcw_id;?> input[wpmcfield="email"]+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',13,$tfc,345.779);?> no-repeat center;
}


#<?php echo $wpmcw_id;?> input[wpmcfield="name"]:focus+label,
#<?php echo $wpmcw_id;?> input[wpmcfield="name"]:valid+label{
background: <?php
    $tfc='#000';
    if(isset($theme["widget_tbox_fc"])){$tfc=$theme["widget_tbox_fc"];}
    echo ChimpMate_WPMC_Assistant::getIcon('m5',13,$tfc,612);?> no-repeat center;
}
#<?php echo $wpmcw_id;?> input[wpmcfield="email"]:focus+label,
#<?php echo $wpmcw_id;?> input[wpmcfield="email"]:valid+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',13,$tfc,345.779);?> no-repeat center;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-groups{
  display: block;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-groupsc{
  margin:5px auto;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item{
  display:inline-block;
  margin: 2px 5px;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox']:focus,
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox']:active {
outline: none;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label {
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

#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label:before,
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label:before {
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

#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label:hover:after,#<?php echo $wpmcw_id;?> input[type='checkbox']:checked + label:after {
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
#<?php echo $wpmcw_id;?> .wpmchimpa-item input[type='checkbox'] + label:hover:after {
 opacity: 0.5;
}

#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button{
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
if(isset($theme["widget_button_f"])){
echo 'font-family:'.$theme["widget_button_f"].';';
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
echo 'line-height:'.$theme["widget_button_h"].'px;';
}
if(isset($theme["widget_button_bc"])){
echo 'background-color:'.$theme["widget_button_bc"].';';
}
if(isset($theme["widget_button_br"])){
echo '-webkit-border-radius:'.$theme["widget_button_br"].'px;';
echo '-moz-border-radius:'.$theme["widget_button_br"].'px;';
echo 'border-radius:'.$theme["widget_button_br"].'px;';
}
if(isset($theme["widget_button_bor"]) && isset($theme["widget_button_borc"])){
echo ' border:'.$theme["widget_button_bor"].'px solid '.$theme["widget_button_borc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['widget_button'])) echo $theme['widget_button'];else echo 'Subscribe';?>';
}
#<?php echo $wpmcw_id;?> .wpmchimpa-subs-button:hover{
background-color: #FA0B38;
<?php if(isset($theme["widget_button_fch"])){
echo 'color:'.$theme["widget_button_fch"].';';
}    
if(isset($theme["widget_button_bch"])){
echo 'background-color:'.$theme["widget_button_bch"].';';
}?>
}

#<?php echo $wpmcw_id;?> .wpmchimpa-signal.signalshow + .wpmchimpa-subs-button::before{
  content:'';
}

#<?php echo $wpmcw_id;?> .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 4px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
#<?php echo $wpmcw_id;?> .wpmchimpa-signal.signalshow {
  display: inline-block;
}

<?php $color ="#000";
if(isset($theme["widget_spinner_c"])){
    $color = $theme["widget_spinner_c"];
}?>
#<?php echo $wpmcw_id;?> .sp8 {margin: 0 auto;width: 50px;height: 30px;}#<?php echo $wpmcw_id;?> .sp8 > div {background-color: <?php echo $color;?>;margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: <?php echo $wpmcw_id;?>sp8 1.2s infinite ease-in-out;animation: <?php echo $wpmcw_id;?>sp8 1.2s infinite ease-in-out;}#<?php echo $wpmcw_id;?> .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}#<?php echo $wpmcw_id;?> .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}#<?php echo $wpmcw_id;?> .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}#<?php echo $wpmcw_id;?> .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes <?php echo $wpmcw_id;?>sp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes <?php echo $wpmcw_id;?>sp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

#<?php echo $wpmcw_id;?> .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
<?php
if(isset($theme["widget_status_f"])){
  echo 'font-family:'.$theme["widget_status_f"].';';
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
#<?php echo $wpmcw_id;?> .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px; margin: 10px;height: auto;padding: 10px;
}


</style>
<div class="widget-text wp_widget_plugin_box">
<?php if(isset($theme['widget_heading']))
  echo $before_title . $theme['widget_heading'] . $after_title;?>
<div class="wpmchimpa-reset wpmchimpselector wpmchimpa chimpmatecss" id="<?php echo $wpmcw_id;?>">
	   <p> <?php if(isset($theme['widget_msg'])) echo $theme['widget_msg'];?></p>
    <form action="" method="post" >
              
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
          for($j=0,$temp=uniqid();$i< $count && $j<2;$i++,$j++,$temp=uniqid())
            echo '<div class="wpmchimpa-item">
                      <input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$temp.'" value="'.$group_record[$i]['id'].'">  
                    <label for="wpmchimpag'.$temp.'">'.$group_record[$i]['gname'].'</label>
                    </div>';
              echo '</div>';
        }
      }
      ?>
              </div>

              <?php if(isset($theme['widget_tag_en'])){
              if(isset($theme['widget_tag'])) $tagtxt= $theme['widget_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>

    </form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
	</div>	
</div>