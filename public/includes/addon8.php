<?php 
$theme = $wpmchimpa['theme']['a8'];
$this->extrascript(2);
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
background: #262E43;
text-align: center;
display:none;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}
$bc='#EDEDED';
$bw=0;
if(isset($theme["addon_bor_c"]))$bc = $theme["addon_bor_c"];
if(isset($theme["addon_bor_w"]))$bw = $theme["addon_bor_w"];
  echo 'border: '.$bc.' solid '.$bw.'px;';
?>
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
}

.wpmchimpab h3{
line-height: 20px;
padding-top:20px;
color: #fff;
font-size: 20px;
<?php 
  if(isset($theme["addon_heading_f"])){
    echo 'font-family:'.$theme["addon_heading_f"].';';
  }
  if(isset($theme["addon_heading_fs"])){
      echo 'font-size:'.$theme["addon_heading_fs"].'px;';
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
.wpmchimpab p,.wpmchimpab p * {
font-size: 12px;
color: #ADBBE0;
line-height: 14px;
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}
.wpmchimpab > p{
  margin: 15px 30px 0;
}
.wpmchimpab form{
margin-top: 20px;
overflow: hidden;
}
.wpmchimpab .formbox{
margin: 0 auto;
width: calc(100% - 50px);
}
.wpmchimpab .formbox > div{
position: relative;
}
.wpmchimpab input[type="text"]{
text-align: left;
margin-bottom: 10px;
width: 100%;
height: 40px;
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
  if(isset($theme["addon_tbox_w"])){
      echo 'width:'.$theme["addon_tbox_w"].'px;';
  }
  if(isset($theme["addon_tbox_h"])){
      echo 'height:'.$theme["addon_tbox_h"].'px;';
  }
  if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
      echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
  }
?>
}

.wpmchimpab input[type="text"].wpmcerror{
  border: 1px solid red;
}
.wpmchimpab .wpmcinfierr{
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

.wpmchimpab .wpmchimpa-groups{
  display: block;
}
.wpmchimpab .wpmchimpa-groupsc{
  margin:12px auto 0;
}
.wpmchimpab .wpmchimpa-item{
  display:inline-block;
  margin: 2px 5px;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:focus,
.wpmchimpab .wpmchimpa-item input[type='checkbox']:active {
outline: none;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label {
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

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before {
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

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after,.wpmchimpab input[type='checkbox']:checked + label:after {
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
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after {
 opacity: 0.5;
}

.wpmchimpab .wpmchimpa-subs-button{
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #50B059;
background-color: #73C557;
height: 42px;
line-height: 42px;
text-align: center;
cursor: pointer;
transition: all 0.5s ease;
<?php
if(isset($theme["addon_button_f"])){
echo 'font-family:'.$theme["addon_button_f"].';';
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
if(isset($theme["addon_button_w"])){
echo 'width:'.$theme["addon_button_w"].'px;';
}
if(isset($theme["addon_button_h"])){
echo 'height:'.$theme["addon_button_h"].'px;';
echo 'line-height:'.$theme["addon_button_h"].'px;';
}
if(isset($theme["addon_button_bc"])){
echo 'background-color:'.$theme["addon_button_bc"].';';
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
.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
}
.wpmchimpab .wpmchimpa-subs-button:hover{
background-color: #50B059;
<?php if(isset($theme["addon_button_fch"])){
echo 'color:'.$theme["addon_button_fch"].';';
}    
if(isset($theme["addon_button_bch"])){
echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}

.wpmchimpab .wpmchimpa-signal {
display: none;
position: absolute;
top: 6px;
right: 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
.wpmchimpab .wpmchimpa-signal.signalshow {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
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
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;display: inline-block; top: 0;  margin: 0;
}

.wpmchimpab .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
.wpmchimpab .wpmchimpa-social::before{
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

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
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
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',15,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',15,'#2d609b');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',15,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',15,'#eb4026');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',15,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',15,'#00BCF2');?>
}
.wpmchimpab.wosoc .wpmchimpa-social{
display: none;
}

<?php $color ="#000";
if(isset($theme["addon_spinner_c"])){
    $color = $theme["addon_spinner_c"];
}?>
.wpmchimpab .sp3 {width: 40px;height: 40px;position: relative;margin: -5px auto;}.wpmchimpab .sp3:before, .wpmchimpab .sp3:after {content: "";width: 100%;height: 100%;border-radius: 50%;background-color: <?php echo $color;?>;opacity: 0.6;position: absolute;top: 0;left: 0;-webkit-animation: wpmchimpabsp3 2.0s infinite ease-in-out;animation: wpmchimpabsp3 2.0s infinite ease-in-out;}.wpmchimpab .sp3:after {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}@-webkit-keyframes wpmchimpabsp3 {0%, 100% { -webkit-transform: scale(0) }50% { -webkit-transform: scale(1) }}@keyframes wpmchimpabsp3 {0%, 100% {transform: scale(0)}50% {transform: scale(1)}}

</style>

<div class="wpmchimpa-reset wpmchimpselector wpmchimpab chimpmatecss<?php if(isset($theme['addon_dissoc']))echo ' wosoc';?>" id="wpmchimpab">
          <h3><?php if(isset($theme['addon_heading'])) echo $theme['addon_heading'];?></h3>
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