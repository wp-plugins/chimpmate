<?php
/** 
 * ChimpMate - WordPress MailChimp Assistant
 *
 * @package   ChimpMate - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @license   GPL-2.0+
 * @link      http://voltroid.com/chimpmate
 * @copyright 2015 Voltroid
 */

$wpmchimpa = json_decode(get_option('wpmchimpa_options'),true);
if($this->wpmchimpa_user_status() && $this->wpmchimpa_referral() && $this->wpmchimpa_pagetype('l')){
include_once( 'litebox'.$wpmchimpa['litebox_theme'].'.php' );
	}
?>
