<?php 
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
include( 'topbar'.$wpmchimpa['addon_theme'].'.php' );
?>