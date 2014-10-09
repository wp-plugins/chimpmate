<?php 
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
?>
<script type="text/javascript">

</script>
<style type="text/css">
	
.wpmchimpab {
  min-height: 100px;
  display: block;
  border: solid #dadbdc;
  border-width: 1px 0;
  padding: 50px;
  display: none;
  <?php 
        if(isset($wpmchimpa["addon_bg_c"])){
            echo 'background:'.$wpmchimpa["addon_bg_c"].';';
        }
    ?>
}
.wpmchimpab h3{
  <?php 
        if(isset($wpmchimpa["addon_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["addon_heading_f"]).';';
        }
        if(isset($wpmchimpa["addon_heading_fs"])){
            echo 'font-size:'.$wpmchimpa["addon_heading_fs"].'px;';
        }
        if(isset($wpmchimpa["addon_heading_fw"])){
            echo 'font-weight:'.$wpmchimpa["addon_heading_fw"].';';
        }
        if(isset($wpmchimpa["addon_heading_fst"])){
            echo 'font-style:'.$wpmchimpa["addon_heading_fst"].';';
        }
        if(isset($wpmchimpa["addon_heading_fc"])){
            echo 'color:'.$wpmchimpa["addon_heading_fc"].';';
        }
    ?>
}
.wpmchimpab p{
  margin-bottom: 10px;
  line-height: 20px;
    <?php 
        if(isset($wpmchimpa["addon_msg_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["addon_msg_f"]).';';
        }
        if(isset($wpmchimpa["addon_msg_fs"])){
            echo 'font-size:'.$wpmchimpa["addon_msg_fs"].'px;';
        }
    ?>
}

.wpmchimpab .wpmchimpa-groups{
  display: block;
}
.wpmchimpab .wpmchimpa-item{
  float:left;
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
  padding-left: 25px;
  margin-right: 10px;
  color: #686868;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #ACACAC;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  color: #fff;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox']:checked + label:before {
 <?php if(isset($wpmchimpa["addon_check_c"])) $color = $wpmchimpa["addon_check_c"]; else $color = '#158EC6';
  print_r('-moz-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-ms-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-o-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('-webkit-box-shadow: inset 0 0 0 10px '.$color.';');
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}


.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpab input[type='checkbox']:checked + label:after {
  content: "\\2713";
  line-height: 18px;
  font-size: 14px;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after {
  color: #fff;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:checked + label:after, .wpmchimpab input[type='checkbox']:checked + label:hover:after {
  color: #fff;
}

.wpmchimpab input[type="email"],.wpmchimpab input[type="text"] {
    display: inline-block;
    width:55%;
    background:#fff;
    height:45px;
    text-align: center;
    margin-bottom:12px;
    border:2px solid #fff;
    outline:0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    <?php 
        if(isset($wpmchimpa['namebox'])){
          echo 'width:100%;';
        }
        else echo 'float: left;';
        if(isset($wpmchimpa["addon_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["addon_tbox_f"]).';';
        }
        if(isset($wpmchimpa["addon_tbox_fs"])){
            echo 'font-size:'.$wpmchimpa["addon_tbox_fs"].'px;';
        }
        if(isset($wpmchimpa["addon_tbox_fw"])){
            echo 'font-weight:'.$wpmchimpa["addon_tbox_fw"].';';
        }
        if(isset($wpmchimpa["addon_tbox_fst"])){
            echo 'font-style:'.$wpmchimpa["addon_tbox_fst"].';';
        }
        if(isset($wpmchimpa["addon_tbox_fc"])){
            echo 'color:'.$wpmchimpa["addon_tbox_fc"].';';
        }
        if(isset($wpmchimpa["addon_tbox_w"])){
            echo 'width:'.$wpmchimpa["addon_tbox_w"].'px;';
        }
        if(isset($wpmchimpa["addon_tbox_h"])){
            echo 'height:'.$wpmchimpa["addon_tbox_h"].'px;';
        }
        if(isset($wpmchimpa["addon_tbox_bor"]) && isset($wpmchimpa["addon_tbox_borc"])){
            echo ' border:'.$wpmchimpa["addon_tbox_bor"].'px solid '.$wpmchimpa["addon_tbox_borc"].';';
        }
    ?>
}

.wpmchimpab input[type="email"]:focus,.wpmchimpab input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($wpmchimpa["addon_tbox_bor"]) && isset($wpmchimpa["addon_tbox_borc"])){
            echo ' border:'.$wpmchimpa["addon_tbox_bor"].'px solid '.$wpmchimpa["addon_tbox_borc"].';';
        } ?>
}
.wpmchimpab input[type="submit"]{
  display:inline-block;
  vertical-align: initial;
  width: 150px;
    height:45px;
    background: #62bc33;
  color:#fff;
    cursor:pointer;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-decoration:none;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  <?php
        if(isset($wpmchimpa['namebox'])){
          echo 'width:100%;';
        }
        if(isset($wpmchimpa["addon_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$wpmchimpa["addon_button_f"]).';';
        }
        if(isset($wpmchimpa["addon_button_fs"])){
            echo 'font-size:'.$wpmchimpa["addon_button_fs"].'px;';
        }
        if(isset($wpmchimpa["addon_button_fw"])){
            echo 'font-weight:'.$wpmchimpa["addon_button_fw"].';';
        }
        if(isset($wpmchimpa["addon_button_fst"])){
            echo 'font-style:'.$wpmchimpa["addon_button_fst"].';';
        }
        if(isset($wpmchimpa["addon_button_fc"])){
            echo 'color:'.$wpmchimpa["addon_button_fc"].';';
        }
        if(isset($wpmchimpa["addon_button_w"])){
            echo 'width:'.$wpmchimpa["addon_button_w"].'px;';
        }
        if(isset($wpmchimpa["addon_button_h"])){
            echo 'height:'.$wpmchimpa["addon_button_h"].'px;';
        }
        if(isset($wpmchimpa["addon_button_bc"])){
            echo 'background:'.$wpmchimpa["addon_button_bc"].';';
        }
        if(isset($wpmchimpa["addon_button_br"])){
            echo '-webkit-border-radius:'.$wpmchimpa["addon_button_br"].'px;';
            echo '-moz-border-radius:'.$wpmchimpa["addon_button_br"].'px;';
            echo '-ms-border-radius:'.$wpmchimpa["addon_button_br"].'px;';
            echo '-o-border-radius:'.$wpmchimpa["addon_button_br"].'px;';
            echo 'border-radius:'.$wpmchimpa["addon_button_br"].'px;';
        }
        else{ ?>
          background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
        <?php }
        if(isset($wpmchimpa["addon_button_bor"]) && isset($wpmchimpa["addon_button_borc"])){
            echo ' border:'.$wpmchimpa["addon_button_bor"].'px solid '.$wpmchimpa["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpab input[type="submit"]:hover{

    background:#8BD331;
   
  color:#fff;
	<?php 
        if(isset($wpmchimpa["addon_button_bch"])){
            echo 'background:'.$wpmchimpa["addon_button_bch"].';';
        }
        else{ ?> 
          background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($wpmchimpa["addon_button_fch"])){
            echo 'color:'.$wpmchimpa["addon_button_fch"].';';
        }
        if(isset($wpmchimpa["addon_button_bor"]) && isset($wpmchimpa["addon_button_borc"])){
            echo ' border:'.$wpmchimpa["addon_button_bor"].'px solid '.$wpmchimpa["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpab .wpmchimpa-signal-cont{
  display: inline-block;
    vertical-align: middle;
    width: 100%;
    margin-bottom: 20px;
}
.wpmchimpab .wpmchimpa-signal {
    display: none;
    border: 3px solid #000;
    margin: 0 auto;
left: 0;
top: 4px;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    height: 30px;
    opacity: 0;
    position: relative;
    width: 30px;
 <?php
        if(isset($wpmchimpa["addon_spinner_c"])){
            echo 'border:3px solid '.$wpmchimpa["addon_spinner_c"].';';
        }
      ?>
  -webkit-animation: pulsate 1s ease-out infinite;
  -moz-animation: pulsate 1s ease-out infinite;
  -ms-animation: pulsate 1s ease-out infinite; 
  -o-animation: pulsate 1s ease-out infinite;
  animation: pulsate 1s ease-out infinite;
  
}
.wpmchimpab .wpmchimpa-feedback{
  clear:both;
  top: 7px;
position: relative;
}
@media only screen and (max-width:1024px) {
  .wpmchimpab{
    padding: 10px;
  }

}
@media only screen and (max-width:420px) {
  .wpmchimpab input[type="email"], .wpmchimpab input[type="text"],
  .wpmchimpab input[type="submit"]{
    width:100%;
  }
}
</style>
<div class="wpmchimpa-reset wpmchimpab">
	<h3><?php if(isset($wpmchimpa['addon_heading'])) echo $wpmchimpa['addon_heading'];?></h3>
	<p><?php if(isset($wpmchimpa['addon_msg'])) echo $wpmchimpa['addon_msg'];?></p>
	<form action="" method="post">
  <?php if(isset($wpmchimpa['namebox']))echo '<input type="text" name="name" class="wpmchimpa_name" placeholder="name" required/>'; ?>
		<input type="email" name="email" class="wpmchimpa_email" placeholder="Email address" required/>
		<input type="submit" value="<?php if(isset($wpmchimpa["addon_button"]))echo $wpmchimpa["addon_button"];else echo 'Subscribe';?>" name="subscribe" class="wpmchimpa-subs-button button"/>
		<div class="wpmchimpa-signal-cont"><div class="wpmchimpa-signal"></div></div>
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
	</form>
	<div class="wpmchimpa-feedback"></div>
</div>