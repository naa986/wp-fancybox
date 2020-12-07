=== WP fancybox ===
Contributors: naa986
Donate link: https://noorsplugin.com/
Tags: fancybox, gallery, image, photo, lightbox
Requires at least: 4.7
Tested up to: 5.6
Stable tag: 1.0.2
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

View image, YouTube video, Vimeo video, external page, inline HTML in lightbox. Add jQuery fancybox lightbox effect to your WordPress site.

== Description ==

[WP fancybox](https://noorsplugin.com/wordpress-fancybox-plugin/) plugin adds fancybox 3 lightbox effect to your WordPress website. The lightbox looks great on desktop as well as mobile devices.

= Feature =

* Responsive lightbox popup using jquery fancybox.
* Designed with a mobile first approach so it looks great on desktop, mobile and tablet devices.
* Quick and easy setup.
* Support for common touch gestures such as double-tap, pinch-in and pinch-out (for image viewing), horizontal swipe for navigation etc.
* Open lightbox popup from either a text link or a thumbnal image link.
* Compatible with WordPress multisite
* Automatically recognize popular video sites such as YouTube, Vimeo for easy viewing in lightbox
* Support hardware accelerated animations for better performance.
* Use a simple shortcode anywhere on your site (Post, Page, Homepage etc.)to pop up content in lightbox
* Graphics, including loading icons, are created with CSS to keep it lightweight. 
* Open external page in lightbox using iframe.
* Customize the visuals and layout using CSS.

= How to Use WP fancybox =

**Image in lightbox**

Create a new post/page and use the following shortcode to create a text/image link which will open lightbox once clicked:

`[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" type="image" hyperlink="click here to pop up image"]`

here, url is the link to the media file that you wish to open in lightbox and hyperlink is the anchor text/image.

`[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" type="image" hyperlink="http://example.com/wp-content/uploads/images/thumb.jpg"]`

**YouTube video in lightbox**

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video"]`

**Vimeo video in lightbox**

`[wp_fancybox_media url="https://vimeo.com/1084537" type="vimeo" width="640" height="360" hyperlink="click here to pop up vimeo video"]`

**Caption in lightbox**

`[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" caption="overlay image" type="image" hyperlink="click here to pop up image"]`

**Alternate Text for an Image**

`[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" caption="overlay image" type="image" hyperlink="http://example.com/wp-content/uploads/images/thumb.jpg" alt="Thumbnail image description"]`

**Custom CSS**

You can specify your own CSS class in the shortcode to customize a text/image link.

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video" class="custom_class"]`

Multiple CSS classes can be separated with a space. For example:

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video" class="custom_class custom_class2"]`

For detailed documentation please visit the [WordPress fancybox](https://noorsplugin.com/wordpress-fancybox-plugin/) plugin page

== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (wp-fancybox.zip) on your computer
1. Click "Install Now" and then hit the activate button

== Frequently Asked Questions ==

= Can this plugin be used to pop up an image in lightbox? =

Yes.

= Can I use this plugin to pop up a YouTube video in lightbox? =

Yes.

= Can I use this plugin to pop up a Vimeo video in lightbox? =

Yes.

= Do I need a fancybox 3 license to use this plugin? =

No.

= Which fancybox 3 theme does this plugin use? =

The default fancybox 3 theme.

= Does this plugin use jquery fancybox cdn? =

No.

= Is this fancybox bootstrap? =

No.

== Screenshots ==

1. Image popup in lightbox
2. YouTube video Demo in lightbox
3. Vimeo video Demo in lightbox

== Upgrade Notice ==
none

== Changelog ==

= 1.0.2 =
* Made some security related improvements in the plugin
* Updated fancybox to 3.5.7

= 1.0.1 =
* First commit
