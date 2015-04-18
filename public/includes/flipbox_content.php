<?php 
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
include( 'flipbox'.$wpmchimpa['addon_theme'].'.php' );
?>