=== Plugin Name ===
Contributors: mr_mat
Donate link: http://www.awebvision.fr/paypal-donations/
Tags: wp_mail, mail, multiple send, multiple, send, yoast, request
Requires at least: 3.0.1
Tested up to: 4.8.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Avoids wp_mail to send multiple times the same mail within the same request.
That bug can happens in some times, for example when wp_mail is called with modules that allows PHP code in pages / posts, and when Yoast SEO is activated.

== Description ==

Avoids wp_mail to send multiple times the same mail within the same request.
That bug can happens in some times, for example when wp_mail is called with modules that allows PHP code in pages / posts, and when Yoast SEO is activated.

== Installation ==

1. Upload `wp-mail-fix-multiple-send` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

== Changelog ==

= 1.0 =
* First version

== Upgrade Notice ==
