=== Facebook Featured Image and Open Graph Meta Tags ===
Contributors: metacomcreative, ryancowles
Donate link: http://ryanscowles.com/
Tags: open graph, meta tags, facebook, featured image
Requires at least: 3.5
Tested up to: 3.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will place automatically generated Open Graph meta tags.

== Description ==

This plugin will add the necessary Open Graph Meta tags to automatically set the posts' Featured Image as the thumbnail for sharing on Facebook and LinkedIn. It will also set Open Graph Meta tags for title, description, URL, type, and site name.


== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How are the values for each Meta tag determined? =

The plugin use WordPress Template tags to fill in the values for the Meta tags as follows:

* Title: The title of current page/post
* Description: The excerpt
* URL: The permalink
* Image: The post thumbnail
* Type: Set to either article or website
* Site name: Blog/site name

== Screenshots ==

1. Nuts and bolts of the plugin

== Changelog ==

= 1.0.1 =
* Use full size image instead of thumbnail for og:image tag.

= 1.0 =
* Initial commit

== Upgrade Notice ==

= 1.0.1 =
Use full size image instead of thumbnail for og:image tag.