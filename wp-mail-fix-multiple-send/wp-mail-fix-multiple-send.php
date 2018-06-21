<?php
/*
 Plugin Name: wp_mail fix multiple send
 Plugin URI: https://wordpress.org/plugins/wp-mail-fix-multiple-send/
 Description: Avoids wp_mail to send multiple times the same mail within the same request.
 Version: 1.0
 Author: Mathieu Thollet
 Author URI: http://www.awebvision.fr
*/



/**
 * Fait en sorte qu'il soit impossible que plusieurs mails identiques soient envoyés pour la même requête
 * @param $args
 * @return mixed
 */
function wp_mail_fix_multiple_send($args){
    global $wp_mail_fix_multiple_send_already_send;
    if (!isset($wp_mail_fix_multiple_send_already_send))
        $wp_mail_fix_multiple_send_already_send = array();
    $key = md5(implode('-',$args));
    if(isset($wp_mail_fix_multiple_send_already_send[$key])){
        $args['to'] = '';
        $args['subject'] = '';
        $args['message'] = '';
    }
    else {
        $wp_mail_fix_multiple_send_already_send[$key] = 1;
    }
    return $args;
}
add_filter('wp_mail','wp_mail_fix_multiple_send', 1,1);