<?php 
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
include( 'addon'.$wpmchimpa['addon_theme'].'.php' );
?>