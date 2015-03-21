<?php 
$theme = $wpmchimpa['theme']['s1'];
?>
<style type="text/css">

.wpmchimpas {
background: #333;
<?php
        if(isset($theme["slider_canvas_c"])){
            echo 'background:'.$theme["slider_canvas_c"].';';
        }?>
}
.wpmchimpas-inner {
text-align: center;
background: #fff;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:10px;
<?php
        if(isset($theme["slider_bg_c"])){
            echo 'background:'.$theme["slider_bg_c"].';';
        }?>
}

.wpmchimpas .wpmchimpa-leftpane{
display: inline-block;
<?php 
if(isset($theme["slider_dissoc"])){
echo 'display:none;';
}?>
}
.wpmchimpas form{
display: inline-block;
width: 80%;
}
.wpmchimpas .wpmchimpa-cont{
margin-top: 20px;
}
.wpmchimpas h3{
line-height: 34px;
margin: 40px 0 20px;
color: #454545;
font-size: 34px;
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
.wpmchimpas p,.wpmchimpas p * {
<?php if(isset($theme["slider_msg_f"])){
echo 'font-family:'.str_replace("|ng","",$theme["slider_msg_f"]).';';
}if(isset($theme["slider_msg_fs"])){
echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}
.wpmchimpas input[type="text"],
.wpmchimpas input[type="email"]{
margin: 10px 0;
width: 90%;
height: 45px;
   -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
background: #f8fafa;
padding: 0 20px;
border: 1px solid #e4e9e9;
color: #353535;
font-size: 16px;
outline:0;
display: block;
<?php 
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

.wpmchimpas .wpmchimpa-groups{
display: block;
}
.wpmchimpas .wpmchimpa-item{
display:inline-block;
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
padding-left: 15px;
line-height: 25px;
min-width: 100px;
<?php
if(isset($theme["slider_check_fc"])){
echo 'color:'.$theme["slider_check_fc"].';';
}
?>
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:after {
content: '';
display: inline-block;
width: 22px;
height: 22px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:before {

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

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:after {
color: #b3b3b3;
}

.wpmchimpas .wpmchimpa-item input[type='checkbox']:checked + label:before {
<?php
if(isset($theme["slider_check_c"])){
echo 'background-color:'.$theme["slider_check_c"].';';
}  ?>
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpas input[type='checkbox']:checked + label::after {
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
.wpmchimpas .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAtklEQVQ4y2P4//8/A7Ux1Q0cxoaCADIbCUgCMTvVXAoE5kA8CYidyXYpGrAH4iVAHIXiCwoMDQTimUBcBsRMlBrKCsTpUANzkC0j11BuIK6EGlgKsoAkQ4FgChD7AzELVI8YEDdDDawDYk6YQaQY6gg1oAqILYC4D8oHGcyLbBAphoJAKtQgGO4EYiHk2CLHUJAXm6AG9gCxNHoSIMdQEJCFGqiALaGSayjMxQwUGzq0S6nhZygA2ojsbh6J67kAAAAASUVORK5CYII=);
opacity: 0.5;
}
.wpmchimpas .wpmchimpa-subs-button{
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
echo 'background-color:'.$theme["slider_button_bc"].';';
}
else{ ?>
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
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
<?php if(isset($theme["slider_button_h"])){
echo 'line-height:'.$theme["slider_button_h"].'px;';
} ?>
}
.wpmchimpas .wpmchimpa-subs-button:hover{
<?php if(isset($theme["slider_button_fch"])){
echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
echo 'background-color:'.$theme["slider_button_bch"].';';
} else{ ?>
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
<?php }?>
}

.wpmchimpas .wpmchimpa-social{
display: inline-block;
margin-bottom: 10px;
}
.wpmchimpas .wpmchimpa-social::before{
content: '<?php if(isset($theme['slider_soc_head'])) echo $theme['slider_soc_head'];else echo 'Subscribe with';?>';
font-size: 20px;
line-height: 30px;
display: block;
<?php
if(isset($theme["slider_soc_f"])){
echo 'font-family:'.str_replace("|ng","",$theme["slider_soc_f"]).';';
}
if(isset($theme["slider_soc_fs"])){
echo 'font-size:'.$theme["slider_soc_fs"].'px;';
}
if(isset($theme["slider_soc_fw"])){
echo 'font-weight:'.$theme["slider_soc_fw"].';';
}
if(isset($theme["slider_soc_fst"])){
echo 'font-style:'.$theme["slider_soc_fst"].';';
}
if(isset($theme["slider_soc_fc"])){
echo 'color:'.$theme["slider_soc_fc"].';';
}
?>
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc{
width:40px;
height: 40px;
-webkit-border-radius: 50%;
-moz-box-border-radius: 50%;
-ms-border-radius: 50%;
-o-border-radius: 50%;
border-radius: 50%;
float: left;
margin: 5px;
cursor: pointer;
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 7px;
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
content:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',25,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
content: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',25,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
content: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',25,'#fff');?>
}
.wpmchimpas .wpmchimpa-signal {
margin-bottom: 50px;
text-align: center;
display: none;
}
.wpmchimpas .wpmchimpa-signalc {
-webkit-animation: animatew 1.5s linear infinite;
-moz-animation: animatew 1.5s linear infinite;
-ms-animation: animatew 1.5s linear infinite;
-o-animation: animatew 1.5s linear infinite;
animation: animatew 1.5s linear infinite;
clip: rect(0, 40px, 40px, 20px); 
height: 40px;
width: 40px;
position: absolute;
display: inline-block;
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
.wpmchimpas .wpmchimpa-signalc:after {
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
display: block;
} 
<?php  if(isset($theme["slider_spinner_c"]))$c=$theme["slider_spinner_c"];else $c="#000";?>
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

.wpmchimpas .wpmchimpa-tag{
color:#000;
font-size: 10px;
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
        $tfc='#000';
        if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
        echo ChimpMate_WPMC_Assistant::getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpas .wpmchimpa-feedback{
position: relative;
font-size: 16px;
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

.wpmchimpas-trig{	
top:40%;
<?php
if(isset($theme["slider_trigger_top"])){
echo 'top:'.$theme["slider_trigger_top"].'%;';
}
?>
}
.wpmchimpas-trigc{ 
background: #0066CB;
width:50px;
height:50px;
-webkit-border-radius: 0 5px 5px 0;
-moz-border-radius: 0 5px 5px 0;
border-radius: 0 5px 5px 0;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}
.wpmchimpas-trig.scrollhide{
-webkit-transform: translateX(-50px);
-moz-transform: translateX(-50px);
-ms-transform: translateX(-50px);
-o-transform: translateX(-50px);
transform: translateX(-50px);
}
.wpmchimpas-trig.right .wpmchimpas-trigc{
-webkit-border-radius: 5px 0 0 5px;
-moz-border-radius: 5px 0 0 5px;
border-radius: 5px 0 0 5px;
}
.wpmchimpas-trig.right.scrollhide{
-webkit-transform: translateX(50px);
-moz-transform: translateX(50px);
-ms-transform: translateX(50px);
-o-transform: translateX(50px);
transform: translateX(50px);
}
.wpmchimpas-trig:hover .wpmchimpas-trigc{
-webkit-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
-moz-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
}
.wpmchimpas-trigc:before{	
content:<?php echo ChimpMate_WPMC_Assistant::getIcon('m2',32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
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
  <div class="wpmchimpa-cont">
	    <div class="wpmchimpa-leftpane">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
        </div>
	    <form action="" method="post" class="wpmchimpa-reset">
			<?php if(isset($wpmchimpa['namebox'])){
     if(isset($wpmchimpa['labelnb'])) $nl = $wpmchimpa['labelnb'];
     else $nl = 'Name';
     echo '<input type="text" name="name" class="wpmchimpa_name" placeholder="'.$nl.'" required/>'; 
    } ?>
		<input type="email" name="email" class="wpmchimpa_email" placeholder="<?php if(isset($wpmchimpa['labeleb'])) echo $wpmchimpa['labeleb'];else echo 'Email address';?>" required/>
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
			<div class="wpmchimpa-subs-button"></div>
            <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              $ref='';
              if(isset($wpmchimpa["share_text"]))
                $ref= ' href="http://voltroid.com/chimpmate/"';
              echo '<div class="wpmchimpa-tag"><a'.$ref.'></a>'.$tagtxt.'</div>';
              }?>
		    <div class="wpmchimpa-signal"><div class="wpmchimpa-signalc"></div></div>
		</form>
    	<div class="wpmchimpa-feedback"></div>
    </div>
	</div>	</div></div></div></div>
<div class="wpmchimpas-bg"></div>
<div class="wpmchimpas-overlay"></div>
<div id="wpmchimpas-trig" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
<div class="wpmchimpas-trigc"></div>
</div>