<?php 
$theme = $wpmchimpa['theme']['a1'];
$this->extrascript(1);
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
background: #fff;
display:none;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}?>
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}
.wpmchimpab .wpmchimpa-leftpane{
padding: 0 20px;
display: inline-block;
float: left;
<?php 
        if(isset($theme["addon_dissoc"])){
          echo 'display:none;';
        }?>
}
.wpmchimpab form{
  display: inline-block;
  padding: 0 20px;
  width: calc(100% - 240px);
min-width: 250px;
}
.wpmchimpab .wpmchimpa-cont{
  margin-top: 20px;
}
.wpmchimpab h3{
  font-size: 18px;
  <?php 
        if(isset($theme["addon_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_heading_f"]).';';
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
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_msg_f"]).';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}
.wpmchimpab input[type="text"]{
    margin-bottom: 18px;
    width: 90%;
    height: 45px;
    background: #f8fafa;
    padding: 0 20px;
   -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #e4e9e9;
    color: #353535;
    font-size: 16px;
    outline:0;
    display: block;
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
  border-color: red;
}
.wpmchimpab .wpmcinfierr{
  display: block;
  height: 18px;
  line-height: 18px;
  margin-top: -18px;
  font-size: 11px;
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
    if(isset($theme["addon_status_fc"])){
        echo 'color:'.$theme["addon_status_fc"].';';
    }
  ?>
}
.wpmchimpab .wpmchimpa-groups{
  display: block;
}
.wpmchimpab .wpmchimpa-item{
  display:inline-block;
  margin: 2px 15px;
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
  padding-left: 30px;
  line-height: 25px;
  min-width: 100px;
  <?php
        if(isset($theme["addon_check_fc"])){
            echo 'color:'.$theme["addon_check_fc"].';';
        }
      ?>
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 22px;
  height: 22px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before {
  
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
    if(isset($theme["addon_check_borc"])){
        echo 'border:1px solid '.$theme["addon_check_borc"].';';
 }  ?>
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  color: #b3b3b3;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox']:checked + label:before {
<?php
    if(isset($theme["addon_check_c"])){
        echo 'background-color:'.$theme["addon_check_c"].';';
 }  ?>
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpab input[type='checkbox']:checked + label:after {
  content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
   <?php 
if($theme['addon_check_shade'] == '1'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);";
}else if($theme['addon_check_shade'] == '2'){
echo "content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAMAAACeyVWkAAAAdVBMVEX////9/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f39/f1HkPUuAAAAJ3RSTlMAAgQFBwkLDRIWGRsdIDc4P0FDT1FaZWdsdXZ5en6Cg4mMjpKUmaT+07zWAAAAUklEQVR42sXINQKAMAADwCDF3d3D/5/ICi0z3Hj4jGdCFe2ZmslZqlmw0+QzajaQWT1b4x5HrsOdOQrcpRzijbONp4rk4kAiJq4+FMEa4oXAXy4RfwSA5WQdGAAAAABJRU5ErkJggg==);";
} ?>
 left: -2px;
top: 4px;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
 opacity: 0.5;
}
.wpmchimpab .wpmchimpa-subs-button{
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    width: 90%;
	padding: 0 22px;
    color: #fff;
    font-size: 22px;
    border: 1px solid #3079ed;
   background-color: #4d90fe;
   height: 45px;
line-height: 45px;
    text-align: center;
    cursor: pointer;
    margin-bottom: 10px;
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
        if(isset($theme["addon_button_w"])){
            echo 'width:'.$theme["addon_button_w"].'px;';
        }
        if(isset($theme["addon_button_h"])){
            echo 'height:'.$theme["addon_button_h"].'px;';
        }
        if(isset($theme["addon_button_bc"])){
            echo 'background-color:'.$theme["addon_button_bc"].';';
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
.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
<?php if(isset($theme["addon_button_h"])){
      echo 'line-height:'.$theme["addon_button_h"].'px;';
  } ?>
}
.wpmchimpab .wpmchimpa-subs-button:hover{
<?php if(isset($theme["addon_button_fch"])){
        echo 'color:'.$theme["addon_button_fch"].';';
    }    
    if(isset($theme["addon_button_bch"])){
        echo 'background-color:'.$theme["addon_button_bch"].';';
    } else{ ?>
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  <?php }?>
}

.wpmchimpab .wpmchimpa-social{
display: block;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 20px;
line-height: 30px;
display: block;
     <?php
        if(isset($theme["addon_soc_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_soc_f"]).';';
        }
        if(isset($theme["addon_soc_fs"])){
            echo 'font-size:'.$theme["addon_soc_fs"].'px;';
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
margin: 5px;
cursor: pointer;
width:150px;
height: 35px;
margin-bottom: 5px;
border-radius: 5px;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 4px 6px;
padding: 0px 5px;
display: inline-block;
border-right: 1px solid #cccccc;
height: 23px;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::after{
position: absolute;
line-height: 35px;
padding-left: 10px;
color: #fff;
font-size: 14px;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
    background: #2d609b;
    <?php if(!isset($wpmchimpa["fb_api"])){
	echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
   content:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
    background: #eb4026;
    <?php if(!isset($wpmchimpa["gp_api"])){
	echo 'display:none;';
    }?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
    content: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
    background: #00BCF2;
    <?php if(!isset($wpmchimpa["ms_api"])){
  echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
    content: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',25,'#fff');?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::after {
    content:"Facebook";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::after {
    content:"Google Plus";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::after {
    content:"Outlook";
}



.wpmchimpab .wpmchimpa-signalc {
	position: relative;
	height: 50px;
}
.wpmchimpab .wpmchimpa-signal {
  -webkit-animation: animatew 1.5s linear infinite;
  -moz-animation: animatew 1.5s linear infinite;
  -ms-animation: animatew 1.5s linear infinite;
  -o-animation: animatew 1.5s linear infinite;
  animation: animatew 1.5s linear infinite;
  clip: rect(0, 40px, 40px, 20px); 
  height: 40px;
  width: 40px;
  position: absolute;
 display: none;
 left: calc(50% - 20px);
}
@-webkit-keyframes animatew {
  0% { 
    -webkit-transform: rotate(0deg)
  }
  100% { 
    -webkit-transform: rotate(220deg)
  }
}
@-moz-keyframes animatew {
  0% { 
    -moz-transform: rotate(0deg)
  }
  100% { 
    -moz-transform: rotate(220deg)
  }
}
@-ms-keyframes animatew {
  0% { 
    -ms-transform: rotate(0deg)
  }
  100% { 
    -ms-transform: rotate(220deg)
  }
}
@-o-keyframes animatew {
  0% { 
    -o-transform: rotate(0deg)
  }
  100% { 
    -o-transform: rotate(220deg)
  }
}
@keyframes animatew {
  0% { 
    transform: rotate(0deg)
  }
  100% { 
    transform: rotate(220deg)
  }
}
.wpmchimpab .wpmchimpa-signal:after {
  -webkit-animation: animatew2 1.5s ease-in-out infinite;
  -moz-animation: animatew2 1.5s ease-in-out infinite;
  -ms-animation: animatew2 1.5s ease-in-out infinite;
  -o-animation: animatew2 1.5s ease-in-out infinite;
  animation: animatew2 1.5s ease-in-out infinite;
  
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
@-webkit-keyframes animatew2 {
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
@-moz-keyframes animatew2 {
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
@-ms-keyframes animatew2 {
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
@-o-keyframes animatew2 {
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
@keyframes animatew2 {
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

.wpmchimpab .wpmchimpa-feedback{
position: relative;
text-align: center;
font-size: 16px;
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

.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
top: 20px;
}

</style>

<div class="wpmchimpa-reset wpmchimpselector wpmchimpab">
<h3><?php if(isset($theme['addon_heading'])) echo $theme['addon_heading'];?></h3>
  <p><?php if(isset($theme['addon_msg'])) echo $theme['addon_msg'];?></p>
  <div class="wpmchimpa-cont">
	    <div class="wpmchimpa-leftpane">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
        </div>
	    <form action="" method="post">
      <?php if(isset($wpmchimpa['namebox']))echo'<input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'"/>';?>
      <input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="true" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/>
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
				while($i < $count){
					echo '<div class="wpmchimpa-groups">';
					for($j=0,$temp=uniqid();$i< $count && $j<4;$i++,$j++,$temp=uniqid())
						echo '<div class="wpmchimpa-item">
            					<input type="checkbox" name="wpmchimpag[]" id="wpmchimpag'.$temp.'" value="'.$group_record[$i]['id'].'">  
        						<label for="wpmchimpag'.$temp.'">'.$group_record[$i]['gname'].'</label>
            				</div>';
        			echo '</div><br>';
				}
			}
			?>
			<div class="wpmchimpa-subs-button" wpmcpre="wpmcpre1" wpmcpost="wpmcpost1"></div>
			<div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"></div></div>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div>
	</div>	