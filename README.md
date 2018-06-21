# wp_mail fix multiple send
Wordpress plugin

## Description

Avoids wp_mail to send multiple times the same mail within the same request.

That bug can happens in some times, for example when wp_mail is called with modules that allows PHP code in pages / posts, and when Yoast SEO is activated.