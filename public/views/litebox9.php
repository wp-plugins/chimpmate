<?php 
$theme = $wpmchimpa['theme']['l9'];
$this->extrascript(2);
?><style type="text/css">
.wpmchimpa-overlay-bg {
display: none;
top: 0;
left: 0;
height:100%;
width: 100%;
cursor: pointer;
z-index: 999999;
background: #000;
background: rgba(0,0,0,0.40);
<?php  if(isset($theme["lite_bg_op"])){
      echo 'background:rgba(0,0,0,'.($theme["lite_bg_op"]/100).');';
    }?>
cursor: default;
position: fixed!important;
}
.wpmchimpa-overlay-bg #wpmchimpa-main *{
 transition: all 0.5s ease;
}
.wpmchimpa-overlay-bg .wpmchimpa-mainc,
.wpmchimpa-overlay-bg .wpmchimpa-maina{
-webkit-transform: translate(0,0);
    height:100%;}
.wpmchimpa-overlay-bg #wpmchimpa-main {
position: absolute;
top: 50%;
left: 50%;
border-radius: 2px;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
width: calc(100% - 20px);
max-width:650px;
background: #27313B;
text-align: center;
<?php  if(isset($theme["lite_bg_c"])){
    echo 'background-color:'.$theme["lite_bg_c"].';';
}?>
}
#wpmchimpa-main #wpmchimpa{
width: calc(100% - 20px);
max-width: 400px;
margin: 0 auto;
}
#wpmchimpa div{
  position:relative;
}
#wpmchimpa h3{
line-height: 24px;
margin-top:20px;
color: #F4233C;
font-size: 24px;
<?php 
    if(isset($theme["lite_heading_f"])){
      echo 'font-family:'.$theme["lite_heading_f"].';';
    }
    if(isset($theme["lite_heading_fs"])){
        echo 'font-size:'.$theme["lite_heading_fs"].'px;';
        echo 'line-height:'.$theme["lite_heading_fs"].'px;';
    }
    if(isset($theme["lite_heading_fw"])){
        echo 'font-weight:'.$theme["lite_heading_fw"].';';
    }
    if(isset($theme["lite_heading_fst"])){
        echo 'font-style:'.$theme["lite_heading_fst"].';';
    }
    if(isset($theme["lite_heading_fc"])){
        echo 'color:'.$theme["lite_heading_fc"].';';
    }
?>
}
#wpmchimpa p,#wpmchimpa p * {
font-size: 15px;
color: #959595;
<?php if(isset($theme["lite_msg_f"])){
  echo 'font-family:'.$theme["lite_msg_f"].';';
}if(isset($theme["lite_msg_fs"])){
    echo 'font-size:'.$theme["lite_msg_fs"].'px;';
}?>
}
#wpmchimpa > p{
  margin-top: 15px;
}
#wpmchimpa form{
margin: 20px auto;
}
#wpmchimpa .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
#wpmchimpa .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
#wpmchimpa .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
#wpmchimpa input[type="text"]{
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
    if(isset($theme["lite_tbox_f"])){
      echo 'font-family:'.$theme["lite_tbox_f"].';';
    }
    if(isset($theme["lite_tbox_fs"])){
        echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
    }
    if(isset($theme["lite_tbox_fw"])){
        echo 'font-weight:'.$theme["lite_tbox_fw"].';';
    }
    if(isset($theme["lite_tbox_fst"])){
        echo 'font-style:'.$theme["lite_tbox_fst"].';';
    }
    if(isset($theme["lite_tbox_fc"])){
        echo 'color:'.$theme["lite_tbox_fc"].';';
    }
    if(isset($theme["lite_tbox_bgc"])){
        echo 'background:'.$theme["lite_tbox_bgc"].';';
    }
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
    if(isset($theme["lite_tbox_h"])){
        echo 'height:'.$theme["lite_tbox_h"].'px;';
    }
    if(isset($theme["lite_tbox_bor"]) && isset($theme["lite_tbox_borc"])){
        echo ' border:'.$theme["lite_tbox_bor"].'px solid '.$theme["lite_tbox_borc"].';';
    }
?>
}

#wpmchimpa input[type="text"].wpmcerror{
  border: 1px solid red;
}
#wpmchimpa .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-top: -10px;
  font-size: 10px;
  color: red;
  <?php
    if(isset($theme["lite_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["lite_status_f"]).';';
    }
    if(isset($theme["lite_status_fw"])){
        echo 'font-weight:'.$theme["lite_status_fw"].';';
    }
    if(isset($theme["lite_status_fst"])){
        echo 'font-style:'.$theme["lite_status_fst"].';';
    }
  ?>
}

#wpmchimpa input[type="text"]+label{
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
<?php 
    if(isset($theme["lite_tbox_h"])){
        echo 'height:'.$theme["lite_tbox_h"].'px;';
    } ?>
}
#wpmchimpa input[wpmcfield="name"]+label{
background: <?php
    $tfc='#A4A9AD';
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
#wpmchimpa input[wpmcfield="email"]+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}


#wpmchimpa input[wpmcfield="name"]:focus+label,
#wpmchimpa input[wpmcfield="name"]:valid+label{
background: <?php
    $tfc='#000';
    if(isset($theme["lite_tbox_fc"])){$tfc=$theme["lite_tbox_fc"];}
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
#wpmchimpa input[wpmcfield="email"]:focus+label,
#wpmchimpa input[wpmcfield="email"]:valid+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}

#wpmchimpa .wpmchimpa-groups{
  display: block;
}
#wpmchimpa .wpmchimpa-groupsc{
  margin:5px auto;
}
#wpmchimpa .wpmchimpa-item{
  display:inline-block;
  margin: 2px 5px;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox']:focus,
#wpmchimpa .wpmchimpa-item input[type='checkbox']:active {
outline: none;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label {
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
        if(isset($theme["lite_check_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["lite_check_f"]).';';
        }
        if(isset($theme["lite_check_fs"])){
            echo 'font-size:'.$theme["lite_check_fs"].'px;';
        }
        if(isset($theme["lite_check_fw"])){
            echo 'font-weight:'.$theme["lite_check_fw"].';';
        }
        if(isset($theme["lite_check_fst"])){
            echo 'font-style:'.$theme["lite_check_fst"].';';
        }
        if(isset($theme["lite_check_fc"])){
            echo 'color:'.$theme["lite_check_fc"].';';
        }
      ?>
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before,
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:before {
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
    if(isset($theme["lite_check_borc"]))
        echo 'border:1px solid '.$theme["lite_check_borc"].';';
   if(isset($theme["lite_check_c"]))
        echo 'background-color:'.$theme["lite_check_c"].';'; ?>
}

#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after,#wpmchimpa input[type='checkbox']:checked + label:after {
  content:'';
  background: no-repeat center;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
  <?php 
if($theme['lite_check_shade'] == '1'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['lite_check_shade'] == '2'){
echo "background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + label:hover:after {
 opacity: 0.5;
}
#wpmchimpa .wpmchimpa-subs-button{
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
 <?php
if(isset($theme["lite_button_f"])){
  echo 'font-family:'.$theme["lite_button_f"].';';
}
if(isset($theme["lite_button_fs"])){
    echo 'font-size:'.$theme["lite_button_fs"].'px;';
}
if(isset($theme["lite_button_fw"])){
    echo 'font-weight:'.$theme["lite_button_fw"].';';
}
if(isset($theme["lite_button_fst"])){
    echo 'font-style:'.$theme["lite_button_fst"].';';
}
if(isset($theme["lite_button_fc"])){
    echo 'color:'.$theme["lite_button_fc"].';';
}
if(isset($theme["lite_button_w"])){
    echo 'width:'.$theme["lite_button_w"].'px;';
}
if(isset($theme["lite_button_h"])){
    echo 'height:'.$theme["lite_button_h"].'px;';
    echo 'line-height:'.$theme["lite_button_h"].'px;';
}
if(isset($theme["lite_button_bc"])){
    echo 'background-color:'.$theme["lite_button_bc"].';';
}
if(isset($theme["lite_button_br"])){
    echo '-webkit-border-radius:'.$theme["lite_button_br"].'px;';
    echo '-moz-border-radius:'.$theme["lite_button_br"].'px;';
    echo 'border-radius:'.$theme["lite_button_br"].'px;';
}
if(isset($theme["lite_button_bor"]) && isset($theme["lite_button_borc"])){
    echo ' border:'.$theme["lite_button_bor"].'px solid '.$theme["lite_button_borc"].';';
}
?>
}

#wpmchimpa .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['lite_button'])) echo $theme['lite_button'];else echo 'Subscribe';?>';
}
#wpmchimpa .wpmchimpa-subs-button:hover{
background-color: #FA0B38;
<?php if(isset($theme["lite_button_fch"])){
    echo 'color:'.$theme["lite_button_fch"].';';
}    
if(isset($theme["lite_button_bch"])){
    echo 'background-color:'.$theme["lite_button_bch"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-signal.signalshow + .wpmchimpa-subs-button::before{
  content:'';
}
#wpmchimpa-main .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
#wpmchimpa-main .wpmchimpa-signal.signalshow {
  display: inline-block;
}

<?php $color ="#000";
if(isset($theme["lite_spinner_c"])){
    $color = $theme["lite_spinner_c"];
}?>
#wpmchimpa-main .sp8 {margin: 0 auto;width: 50px;height: 30px;}#wpmchimpa-main .sp8 > div {background-color: <?php echo $color;?>;margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: wpmchimpa-mainsp8 1.2s infinite ease-in-out;animation: wpmchimpa-mainsp8 1.2s infinite ease-in-out;}#wpmchimpa-main .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}#wpmchimpa-main .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}#wpmchimpa-main .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}#wpmchimpa-main .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes wpmchimpa-mainsp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes wpmchimpa-mainsp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

#wpmchimpa-main .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
<?php
if(isset($theme["lite_status_f"])){
  echo 'font-family:'.$theme["lite_status_f"].';';
}
if(isset($theme["lite_status_fs"])){
  echo 'font-size:'.$theme["lite_status_fs"].'px;';
}
if(isset($theme["lite_status_fw"])){
  echo 'font-weight:'.$theme["lite_status_fw"].';';
}
if(isset($theme["lite_status_fst"])){
  echo 'font-style:'.$theme["lite_status_fst"].';';
}
if(isset($theme["lite_status_fc"])){
  echo 'color:'.$theme["lite_status_fc"].';';
}
?>
}
#wpmchimpa-main .wpmchimpa-tag{
margin: 5px auto;
}
#wpmchimpa-main .wpmchimpa-tag,
#wpmchimpa-main .wpmchimpa-tag *{
color:#fff;
font-size: 10px;
<?php
  if(isset($theme["lite_tag_f"])){
    echo 'font-family:'.$theme["lite_tag_f"].';';
  }
  if(isset($theme["lite_tag_fs"])){
      echo 'font-size:'.$theme["lite_tag_fs"].'px;';
  }
  if(isset($theme["lite_tag_fw"])){
      echo 'font-weight:'.$theme["lite_tag_fw"].';';
  }
  if(isset($theme["lite_tag_fst"])){
      echo 'font-style:'.$theme["lite_tag_fst"].';';
  }
  if(isset($theme["lite_tag_fc"])){
      echo 'color:'.$theme["lite_tag_fc"].';';
  }
?>
}
#wpmchimpa-main .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["lite_tag_fs"])){$tfs=$theme["lite_tag_fs"];}
  $tfc='#fff';
  if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
  echo ChimpMate_WPMC_Assistant::getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 12px auto 0;
height: 90px;
width: 100%;
background: rgba(75, 75, 75, 0.3);
box-shadow: 0px 1px 1px 1px rgba(116, 116, 116, 0.94);
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '<?php if(isset($theme['lite_soc_head'])) echo $theme['lite_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
color: #ADACB2;
width: 100%;
display: block;
margin: 15px auto 5px;
<?php
if(isset($theme["lite_soc_f"])){
  echo 'font-family:'.$theme["lite_soc_f"].';';
}
if(isset($theme["lite_soc_fs"])){
    echo 'font-size:'.$theme["lite_soc_fs"].'px;';
}
if(isset($theme["lite_soc_fw"])){
    echo 'font-weight:'.$theme["lite_soc_fw"].';';
}
if(isset($theme["lite_soc_fst"])){
    echo 'font-style:'.$theme["lite_soc_fst"].';';
}
if(isset($theme["lite_soc_fc"])){
    echo 'color:'.$theme["lite_soc_fc"].';';
}
?>
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
display: inline-block;
width:40px;
height: 40px;
border-radius: 2px;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border:1px solid #262E43;
<?php  if(isset($theme["lite_bg_c"])){
    echo 'border-color: '.$theme["lite_bg_c"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:40px;
height: 40px;
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb1',15,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb1',15,'#2d609b');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp1',15,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp1',15,'#eb4026');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms1',15,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms1',15,'#00BCF2');?>
}

#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 0;
right: 0;
width: 25px;
text-align: center;
cursor: pointer;
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 25px;
line-height: 25px;
font-weight: 100;
color: #999;
opacity: 0.4;
<?php if(isset($theme["lite_close_col"])){
echo 'color:'.$theme["lite_close_col"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;   margin: 10px;
  height: auto;}


</style>

<div class="wpmchimpa-reset wpmchimpa-overlay-bg wpmchimpselector chimpmatecss">
<div class="wpmchimpa-maina <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
  <div class="wpmchimpa-mainc">
  <div id="wpmchimpa-main">
    <div id="wpmchimpa-newsletterform" class="wpmchimpa-wrapper">
      <div class="wpmchimpa" id="wpmchimpa">
          <?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
          <?php if(isset($theme['lite_msg'])) echo '<p>'.$theme['lite_msg'].'</p>';?>
          <form action="" method="post">
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
                  for($j=0;$i< $count && $j<2;$i++,$j++)
                    echo '<div class="wpmchimpa-item">
                          <input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$i.'" value="'.$group_record[$i]['id'].'">  
                            <label for="wpmchimpag'.$i.'">'.$group_record[$i]['gname'].'</label>
                        </div>';
                    echo '</div>';
                }
              }
              ?>
              </div>

              <?php if(isset($theme['lite_tag_en'])){
              if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>

            </form>
          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
      </div>
    </div>
        <div class="wpmchimpa-close-button"></div>
  </div>
</div>
</div>
</div>