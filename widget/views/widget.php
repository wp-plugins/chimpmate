<?php
$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
include_once( 'widget'.$wpmchimpa['widget_theme'].'.php' );?>