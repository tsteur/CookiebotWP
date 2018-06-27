# Cookiebot Wordpress Addons


Cookiebot Addons are plugins for Wordpress that make other plugins compatible with Cookiebot. 
The addons hook into the original plugin and render the cookie setting tags as advised by the Cookiebot guidelines at https://www.cookiebot.com/goto/help/. Please note this plugin will not function if the Cookiebot script is loaded through Google Tag Manager, we are working on this issue and it will be resolved in the next update.

Concurrently we are working with WP Core on what we believe is the real solution. A framework in WP Core that can signal the consent state to other plugins,
so that they can handle their cookie setting code without explicit support for Cookiebot, or other cookie plugins. If and when this will be implemented is unknown.

https://core.trac.wordpress.org/ticket/44043 

# News on GADWP
GADWP is about to release a GDPR compliance addon, which supports Cookiebot. We'll provide a link here once the addon is released. 

# Installation
1. Get the [latest release](https://github.com/CybotAS/CookiebotAddons/releases/latest) of the framework plugin to your WP plugins folder
2. Go to the admin page of your WP installation and activate the plugin
3. You are done, verify that it works

# How do I make my plugin support Cookiebot?
See [the Cookiebot API readme for more details about the Cookiebot API](CookiebotAPI.md)

# Roadmap

Following plugins have native (built-in) support for Cookiebot:
* [MonsterInsights](https://www.monsterinsights.com/addon/eu-compliance/)
* [PixelYourSite](https://wordpress.org/plugins/pixelyoursite/)

Released and tested addons:

* Autocorrection of embedded Facebook, Twitter, Youtube and Vimeo videos
* [AddToAny Share Buttons](https://wordpress.org/plugins/add-to-any/)
* [Analytify](https://wordpress.org/plugins/wp-analytify/)
* [Custom Facebook Feed from Smashballoon](https://da.wordpress.org/plugins/custom-facebook-feed/)
* [GA Google Analytics](https://wordpress.org/plugins/ga-google-analytics/)
* [Google Analyticator](https://wordpress.org/plugins/google-analyticator/)
* [Google Analytics +](https://premium.wpmudev.org/project/google-analytics-for-wordpress-mu-sitewide-and-single-blog-solution/)
* [HubSpot Tracking Code](https://wordpress.org/plugins/hubspot-tracking-code/)
* [Jetpack by Wordpress.com](https://wordpress.org/plugins/jetpack/)
  * Supported widgets:
    * Google Maps
    * Facebook
    * Google Plus Badge
    * Internet Defense League	
    * Twitter Timeline	
    * Goodreads
* [Pixel Caffeine]( https://wordpress.org/plugins/pixel-caffeine/)
* [WD Google Analytics](https://wordpress.org/plugins/wd-google-analytics/)
* [WP-Matomo](https://wordpress.org/plugins/wp-piwik/)
* [Complete Analytics Optimization Suite (CAOS)](https://wordpress.org/plugins/host-analyticsjs-local/)
* [Facebook for WooCommerce](https://woocommerce.com/products/facebook/)
* [Googleanalytics](https://wordpress.org/plugins/googleanalytics/)

Following addons are in pipeline:
* To be continued..


If you have a plugin that you would like integration for, please submit a request in the [Issues](https://github.com/CybotAS/CookiebotAddons/issues) section.

# Contributions
Everyone is welcome to make a pull request with new addon support, or to fix existing addons.

Shout out to

[@fschaeffler](https://github.com/fschaeffler) - HubSpot Tracking Code 

[@irondan](https://github.com/irondan) - AddToAny

[@Jursdotme](https://github.com/Jursdotme) - Custom Facebook Feed from Smashballoon

Way to go!

# Need to get in touch?

There are several ways you can get in touch with us. <br>
We are available on the Making Wordpress Slack workspace. <br>
Username: Kenan <br>
You can also reach us through our helpdesk at www.cookiebot.com/goto/helpdesk/
