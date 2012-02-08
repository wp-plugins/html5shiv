=== Plugin Name ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl/donate/
Tags: html5, html, javascript, ie, internet explorer, html5shiv
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 3.3.0

This plugin adds the HTML5shiv Javascript library with IE Print Protector to your WordPress installation.
== Description ==
This plugin adds the HTML5shiv Javascript library with IE Print Protector to your WordPress installation.

Internet Explorer will not recognize all HTML5 elements. Unlike Chrome, Firefox, Opera, and the rest of the browser world who will gladly assume the element is acceptable, and render / CSS just like any other element — Internet Explorer ignores them. If you used tags on your site, Internet Explorer (yes, even 8 ) will just ignore the existence of the code.
 
HTML5 Shiv (by remysharp) takes advantage of the Internet Explorer rendering engine's ability to handle these elements only after they have been inserted into the DOM via document.createElement — and works well.
== Installation ==
1. Upload `html5shiv/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions == 
None at this moment.

== Upgrade Notice == 
Its recommended to flush the cache after upgrading.

== Screenshots ==
Not relevant.

== Changelog ==
= 3.3.0 =
* HTML5shiv version 3.3.0
* Unreleased

= 3.1 =
* HTML5shiv version 3.1
* Unreleased

= 3.1 =
* HTML5shiv version 3.1
* Reworked the code
* Unreleased

= 3.0 =
* Reworked the code ( http://themeforest.net/forums/thread/adding-scripts-to-wordpress-conditionally/53635 )
* Readme updated
* Based on html5shiv version 3.0, 13-01-2012

= 1.0.1 =
* Fixes double javascript loading with WP Resume

= 1.0 =
* First version