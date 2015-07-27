<?php 
$theme = $wpmchimpa['theme']['a9'];
$this->extrascript(2);
?>
<style type="text/css">
.wpmchimpat{
position:fixed;z-index: 99999;
display: block;
width: 100%;
height: 50px;
background: #27313B;
box-shadow: 0 0 20px rgba(0,0,0,.2);
top: 0;
left: 0;
text-align: center;
-webkit-transition: margin-top 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),-webkit-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
transition: margin-top 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);

<?php 
  if(isset($theme["addon_bg_c"])){
      echo 'background:'.$theme["addon_bg_c"].';';
  }
?>
}
.wpmchimpat div{
position: relative;
}
.wpmchimpat.wpmchimpat-close{
  margin-top:-50px;
}
.wpmchimpat .wpmchimpat-cont{
  display: block;
  width: 75%;
  margin:0 auto;
  padding: 7px;display: flex;
justify-content: center;
}
.wpmchimpat .wpmchimpat-cont > *{
position: relative;
display: inline-block;
float: left;
margin: 0 5px;
<?php if(isset($wpmchimpa['namebox']))echo 'width:32%;';else echo 'width:42%;'; ?>
}
#wpmchimpat.wpmchimpat h3{
display: inline-block;
font-size: 18px;
color: #F4233C;
float: left;
line-height: 30px;
margin: 2px 25px;
text-align: right;
width: 21%;
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
.wpmchimpat .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
.wpmchimpat .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
.wpmchimpat .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
.wpmchimpat input[type="text"] {
text-align: left;
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

.wpmchimpat input[type="text"].wpmcerror{
  border: 1px solid red;
}
.wpmchimpat input[type="text"]+label{
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
.wpmchimpat input[wpmcfield="name"]+label{
background: <?php
    $tfc='#A4A9AD';
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
.wpmchimpat input[wpmcfield="email"]+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}


.wpmchimpat input[wpmcfield="name"]:focus+label,
.wpmchimpat input[wpmcfield="name"]:valid+label{
background: <?php
    $tfc='#000';
    if(isset($theme["addon_tbox_fc"])){$tfc=$theme["addon_tbox_fc"];}
    echo ChimpMate_WPMC_Assistant::getIcon('m5',15,$tfc,612);?> no-repeat center;
}
.wpmchimpat input[wpmcfield="email"]:focus+label,
.wpmchimpat input[wpmcfield="email"]:valid+label{
background: <?php
    echo ChimpMate_WPMC_Assistant::getIcon('m6',15,$tfc,345.779);?> no-repeat center;
}

.wpmchimpat div.wpmchimpa-subs-button{
border-radius: 0 3px 3px 0;
display:inline-block;
width: 100%;
height:35px;
line-height: 32px;
color:#fff;
text-shadow:none;
font-size: 17px;
border: 1px solid #FA0B38;
background-color: #FF1F43;
text-align: center;
cursor: pointer;
position: absolute;
top: 0;
left: 0;
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
.wpmchimpat .wpmchimpa-subs-button::before{
  content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
  display: block;
}
.wpmchimpat .wpmchimpa-subs-button:hover{
background-color: #FA0B38;
<?php if(isset($theme["addon_button_fch"])){
echo 'color:'.$theme["addon_button_fch"].';';
}
if(isset($theme["addon_button_bch"])){
echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}

.wpmchimpat .wpmchimpa-signal.signalshow + .wpmchimpa-subs-button::before{
  content:'';
}
.wpmchimpat .wpmchimpa-feedback{
position: absolute;
bottom: 0;
font-size: 10px;
text-align: center;
color: #ccc;
width: 100%;
  <?php
        if(isset($theme["addon_status_f"])){
          echo 'font-family:'.$theme["addon_status_f"].';';
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

.wpmchimpat .wpmchimpa-feedback.wpmchimpa-done{
line-height: 50px;
font-size: 15px;
position: relative;
display: inline-block;
width: auto;
}
.wpmchimpat .wpmchimpat-close-button {
display: inline-block;
width: 2em;
height: 2em;
right: 10px;
top:10px;
position: absolute;
cursor:pointer;
}

.wpmchimpat .wpmchimpat-close-button::before {
    content: "\00D7";
    font-size: 25px;
    font-weight: 100;
    color: #959595;
  }
.wpmchimpat .wpmchimpat-close-button:hover:before {
    color: #000;
}

.wpmchimpat .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 4px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
.wpmchimpat .wpmchimpa-signal.signalshow {
  display: inline-block;
}

<?php $color ="#000";
if(isset($theme["addon_spinner_c"])){
    $color = $theme["addon_spinner_c"];
}?>
.wpmchimpat .sp8 {margin: 0 auto;width: 50px;height: 30px;}.wpmchimpat .sp8 > div {background-color: <?php echo $color;?>;margin-left: 3px;height: 100%;width: 6px;display: inline-block;-webkit-animation: wpmchimpatsp8 1.2s infinite ease-in-out;animation: wpmchimpatsp8 1.2s infinite ease-in-out;}.wpmchimpat .sp8 .sp82 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}.wpmchimpat .sp8 .sp83 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}.wpmchimpat .sp8 .sp84 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}.wpmchimpat .sp8 .sp85 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}@-webkit-keyframes wpmchimpatsp8 {0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  20% { -webkit-transform: scaleY(1.0) }}@keyframes wpmchimpatsp8 {0%, 40%, 100% { transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% { transform: scaleY(1.0);-webkit-transform: scaleY(1.0);}}

@media only screen and (max-width : 1327px) {
.wpmchimpat h3{font-size: 13px;}.wpmchimpat .wpmchimpa-subs-button{width: 18%;}
}
@media only screen and (max-width : 1024px) {
.wpmchimpat{
    display: none;
}
}
</style>
<div class="wpmchimpa-reset wpmchimpat chimpmatecss wpmchimpselector" id="wpmchimpat">
    <form action="" method="post">
    <div class="wpmchimpat-cont">
  <?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>'; 
  if(isset($wpmchimpa['namebox']))echo'<div><input type="text" name="name" wpmcfield="name" wpmcreq="false" placeholder="'.(isset($wpmchimpa['labelnb'])?$wpmchimpa['labelnb']:'Name').'" required/><label></label></div>';?>
        <div class="formbox">
        <div><input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="formbox" placeholder="<?php echo (isset($wpmchimpa['labeleb']))?$wpmchimpa['labeleb']:'Email address';?>" required/><label></label></div>
   
        <div>
          <div class="wpmchimpa-signal"><div class="sp8"><div class="sp81"></div><div class="sp82"></div><div class="sp83"></div><div class="sp84"></div><div class="sp85"></div></div></div>
     
          <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
      </div>
      <div style="clear:both"></div>

     </div>
     <input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
        
      </div>
    </form>
    <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    <div class="wpmchimpat-close-button"></div>
</div>