<?php 
$theme = $wpmchimpa['theme']['s9'];
$this->extrascript(2);
?>
<style type="text/css">

.wpmchimpas {
background-color: #333;
<?php
    if(isset($theme["slider_canvas_c"])){
        echo 'background-color:'.$theme["slider_canvas_c"].';';
    }?>
}
.wpmchimpas .wpmchimpas-inner {
text-align: center;
border-radius:3px;
background: #27313B;
width: calc(100% - 140px);
margin:0 50px;
padding:0 20px;
display: inline-block;
<?php
if(isset($theme["slider_bg_c"])){
    echo 'background-color:'.$theme["slider_bg_c"].';';
}?>
}
.wpmchimpas div{
  position:relative;
}
.wpmchimpas h3{
line-height: 24px;
margin-top:20px;
color: #F4233C;
font-size: 24px;
<?php 
if(isset($theme["slider_heading_f"])){
echo 'font-family:'.$theme["slider_heading_f"].';';
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
.wpmchimpas p,.wpmchimpas p * {
font-size: 15px;
color: #959595;
<?php if(isset($theme["slider_msg_f"])){
echo 'font-family:'.$theme["slider_msg_f"].';';
}if(isset($theme["slider_msg_fs"])){
echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}
.wpmchimpas-inner > p{
  margin-top: 15px;
}
.wpmchimpas form{
margin: 20px auto;
}
.wpmchimpas .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
.wpmchimpas .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
.wpmchimpas .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
.wpmchimpas input[type="text"]{
text-align: left;
margin-bottom: 10px;
width: 100%;
height: 40px;
border-radius:3px;
background: #fff;
 padding: 0 10px 0 40px;
color: #353535;
font-size:17px;
outline:0;
display: block;
border: 1px solid #efefef;
<?php 
if(isset($theme["slider_tbox_f"])){
echo 'font-family:'.$theme["slider_tbox_f"].';';
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
  border: 1px solid red;
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-top: -10px;
  font-size: 10px;
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
.wpmchimpas input[type="text"]+label{
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
transition: all 0.5s ease;
<?php 
    if(isset($theme["slider_tbox_h"])){
        echo 'height:'.$theme["slider_tbox_h"].'px;';
    } ?>
}
.wpmchimpas input[wpmcfield="name"]+label{
background: <?php
    $tfc='#A4A9AD';
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
.wpmchimpas input[wpmcfield="email"]+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}


.wpmchimpas input[wpmcfield="name"]:focus+label,
.wpmchimpas input[wpmcfield="name"]:valid+label{
background: <?php
    $tfc='#000';
    if(isset($theme["slider_tbox_fc"])){$tfc=$theme["slider_tbox_fc"];}
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
.wpmchimpas input[wpmcfield="email"]:focus+label,
.wpmchimpas input[wpmcfield="email"]:valid+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}

.wpmchimpas .wpmchimpa-groups{
  display: block;
}
.wpmchimpas .wpmchimpa-groupsc{
  margin:5px auto;
}
.wpmchimpas .wpmchimpa-item{
  display:inline-block;
  margin: 2px 5px;
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
text-align: left;
padding-left: 22px;
min-width: 70px;
line-height: 14px;
font-size: 12px;
color: #fff;
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
  width: 12px;
  height: 12px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:before {
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
    if(isset($theme["slider_check_borc"]))
        echo 'border:1px solid '.$theme["slider_check_borc"].';';
   if(isset($theme["slider_check_c"]))
        echo 'background-color:'.$theme["slider_check_c"].';'; ?>
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:hover:after,.wpmchimpas input[type='checkbox']:checked + label:after {
  content:'';
  background: no-repeat center;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
  <?php 
if($theme['slider_check_shade'] == '1'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['slider_check_shade'] == '2'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
}
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:hover:after {
 opacity: 0.5;
}

.wpmchimpas .wpmchimpa-subs-button{
border-radius: 0 3px 3px 0;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #FA0B38;
background-color: #FF1F43;
height: 40px;
line-height: 40px;
text-align: center;
cursor: pointer;
position: absolute;
top: 0;
transition: all 0.5s ease;
<?php
if(isset($theme["slider_button_f"])){
echo 'font-family:'.$theme["slider_button_f"].';';
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
echo 'line-height:'.$theme["slider_button_h"].'px;';
}
if(isset($theme["slider_button_bc"])){
echo 'background-color:'.$theme["slider_button_bc"].';';
}
if(isset($theme["slider_button_br"])){
echo '-webkit-border-radius:'.$theme["slider_button_br"].'px;';
echo '-moz-border-radius:'.$theme["slider_button_br"].'px;';
echo 'border-radius:'.$theme["slider_button_br"].'px;';
}
if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
}
?>
}
.wpmchimpas .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['slider_button'])) echo $theme['slider_button'];else echo 'Subscribe';?>';
}
.wpmchimpas .wpmchimpa-subs-button:hover{
background-color: #FA0B38;
<?php if(isset($theme["slider_button_fch"])){
echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
echo 'background-color:'.$theme["slider_button_bch"].';';
}?>
}

.wpmchimpas .wpmchimpa-signal.signalshow + .wpmchimpa-subs-button::before{
  content:'';
}
.wpmchimpas .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
.wpmchimpas .wpmchimpa-signal.signalshow {
  display: inline-block;
}

<?php $color ="#000";
if(isset($theme["slider_spinner_c"])){
    $color = $theme["slider_spinner_c"];
}?>
.wpmchimpas .sp8 {margin: 0 auto;width: 50px;height: 30px;}.wpmchimpas .sp8 > div {background-color: <?php echo $color;?>;margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: wpmchimpassp8 1.2s infinite ease-in-out;animation: wpmchimpassp8 1.2s infinite ease-in-out;}.wpmchimpas .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}.wpmchimpas .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}.wpmchimpas .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}.wpmchimpas .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes wpmchimpassp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes wpmchimpassp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

.wpmchimpas.wpmchimpa-tag{
margin: 5px auto;
}
.wpmchimpas .wpmchimpa-tag,
.wpmchimpas .wpmchimpa-tag *{
color:#fff;
font-size: 10px;
<?php
if(isset($theme["slider_tag_f"])){
  echo 'font-family:'.$theme["slider_tag_f"].';';
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
.wpmchimpas .wpmchimpa-tag:before{

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
.wpmchimpas .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
<?php
if(isset($theme["slider_status_f"])){
echo 'font-family:'.$theme["slider_status_f"].';';
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
font-size: 15px;   margin: 10px;
  height: auto;
}

.wpmchimpas-trig{	
top:40%;
margin: 0 3px;
display: block;
<?php
if(isset($theme["slider_trigger_top"])){
echo 'top:'.$theme["slider_trigger_top"].'%;';
}
?>
}
.wpmchimpas-trigi{
background: #27313B;
width:50px;
height:50px;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}

.wpmchimpas-trig .wpmchimpas-trigi:hover{
-webkit-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
-moz-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
}
.wpmchimpas-trigi:before{	
content:<?php echo ChimpMate_WPMC_Assistant::getIcon('m4',32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff',334.5);?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
}

#wpmchimpas-trig .wpmchimpas-trigh{
<?php
  if(isset($theme["slider_trigger_hider"]))
    echo 'display:block;';
?>
}
#wpmchimpas-trig .wpmchimpas-trigh:before{
<?php
  if(isset($theme["slider_trigger_hc"])){
    echo 'border-right-color: '.$theme["slider_trigger_hc"].';';
    echo 'border-left-color: '.$theme["slider_trigger_hc"].';';
  }
?>
}
</style>


<div id="wpmchimpas" class="scrollhide chimpmatecss">
  <div class="wpmchimpas-cont">
  <div class="wpmchimpas-scroller">
    <div class="wpmchimpas-resp">
    <div class="wpmchimpas-inner wpmchimpselector wpmchimpa-mainc">
<h3><?php if(isset($theme['slider_heading'])) echo $theme['slider_heading'];?></h3>
  <p><?php if(isset($theme['slider_msg'])) echo $theme['slider_msg'];?></p>
  <div class="wpmchimpa-cont">
	    <form action="" method="post" class="wpmchimpa-reset">
              
              <?php if(isset($wpmchimpa['namebox']))echo'<div><input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'" required/><label></label></div>';?>
              <div class="formbox">
              <div>
              <div><input type="text" name="email" wpmcfield="email" wpmcreq="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/><label></label></div>
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

              <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>


		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div>
	</div>	</div></div></div></div>
<div class="wpmchimpas-bg chimpmatecss"></div>
<div class="wpmchimpas-overlay chimpmatecss"></div>
<div id="wpmchimpas-trig" class="chimpmatecss" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="wpmchimpas-trigc">
    <div class="wpmchimpas-trigi"></div>
    <div class="wpmchimpas-trigh"></div>
  </div>
</div>